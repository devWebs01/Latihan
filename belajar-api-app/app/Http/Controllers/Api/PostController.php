<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

final class PostController extends Controller
{
    /**
     * Menampilkan Daftar Postingan
     *
     * Mengambil daftar semua postingan yang telah diurutkan berdasarkan data terbaru.
     * Hasilnya akan ditampilkan dalam format paginasi untuk efisiensi.
     */
    public function index(): AnonymousResourceCollection
    {
        $posts = Post::latest()->paginate(5);

        return PostResource::collection($posts);
    }

    /**
     * Membuat Postingan Baru
     *
     * Membuat dan menyimpan sebuah postingan baru ke dalam database.
     * Data yang divalidasi akan digunakan untuk membuat entri baru.
     *
     * @response 201 {
     *   "data": {
     *     "id": 1,
     *     "title": "Judul Postingan Baru",
     *     "content": "Ini adalah konten dari postingan baru.",
     *     "created_at": "2025-08-06T12:00:00.000000Z",
     *     "updated_at": "2025-08-06T12:00:00.000000Z"
     *   }
     * }
     */
    public function store(StorePostRequest $request): JsonResponse
    {
        $post = Post::create($request->validated());

        return (new PostResource($post))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Menampilkan Detail Postingan
     *
     * Mengambil dan menampilkan detail dari satu postingan spesifik berdasarkan ID.
     *
     * @param Post $post Model Post yang diambil secara otomatis oleh Laravel (route model binding).
     */
    public function show(Post $post): PostResource
    {
        return new PostResource($post);
    }

    /**
     * Memperbarui Postingan
     *
     * Memperbarui data dari sebuah postingan yang sudah ada berdasarkan ID.
     * Hanya data yang divalidasi yang akan diperbarui.
     *
     * @param Post $post Model Post yang akan diperbarui.
     */
    public function update(UpdatePostRequest $request, Post $post): PostResource
    {
        $post->update($request->validated());

        return new PostResource($post);
    }

    /**
     * Menghapus Postingan
     *
     * Menghapus sebuah postingan dari database secara permanen.
     *
     * @param Post $post Model Post yang akan dihapus.
     * @response 204
     */
    public function destroy(Post $post): Response
    {
        $post->delete();

        return response()->noContent();
    }
}
