<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

final class CategoryController extends Controller
{
    /**
     * Menampilkan Daftar Kategori
     *
     * Mengambil daftar semua kategori yang telah diurutkan berdasarkan data terbaru.
     * Hasilnya akan ditampilkan dalam format paginasi untuk efisiensi.
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        $categories = Category::latest()->paginate(5);

        return CategoryResource::collection($categories);
    }

    /**
     * Membuat Kategori Baru
     *
     * Membuat dan menyimpan sebuah kategori baru ke dalam database.
     * Data yang divalidasi akan digunakan untuk membuat entri baru.
     */
    public function store(StoreCategoryRequest $request): JsonResponse
    {
        $category = Category::create($request->validated());

        return (new CategoryResource($category))
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Menampilkan Detail Kategori
     *
     * Mengambil dan menampilkan detail dari satu kategori spesifik berdasarkan ID.
     *
     * @param  Category  $category  Model Category yang diambil secara otomatis oleh Laravel (route model binding).
     */
    public function show(Category $category): CategoryResource
    {
        return new CategoryResource($category);
    }

    /**
     * Memperbarui Kategori
     *
     * Memperbarui data dari sebuah kategori yang sudah ada berdasarkan ID.
     * Hanya data yang divalidasi yang akan diperbarui.
     *
     * @param  Category  $category  Model Category yang akan diperbarui.
     */
    public function update(UpdateCategoryRequest $request, Category $category): CategoryResource
    {
        $category->update($request->validated());

        return new CategoryResource($category);
    }

    /**
     * Menghapus Kategori
     *
     * Menghapus sebuah kategori dari database secara permanen.
     *
     * @param  Category  $category  Model Category yang akan dihapus.
     *
     * @response 204
     */
    public function destroy(Category $category): Response
    {
        $category->delete();

        return response()->noContent();
    }
}
