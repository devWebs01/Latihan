<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Contact;
use Tests\TestCase;

final class ContactTest extends TestCase
{
    public function test_can_create_contact(): void
    {
        $data = [
            'name' => 'Test Contact',
        ];

        $response = $this->post(route('contacts.store'), $data);

        $response->assertRedirect();
        $this->assertDatabaseHas('contacts', $data);
    }

    public function test_can_view_contact(): void
    {
        $contact = Contact::factory()->create();

        $response = $this->get(route('contacts.show', $contact));

        $response->assertOk();
        $response->assertSee($contact->name);
    }

    public function test_can_update_contact(): void
    {
        $contact = Contact::factory()->create();
        $data = [
            'name' => 'Updated Contact',
        ];

        $response = $this->put(route('contacts.update', $contact), $data);

        $response->assertRedirect();
        $this->assertDatabaseHas('contacts', $data);
    }

    public function test_can_delete_contact(): void
    {
        $contact = Contact::factory()->create();

        $response = $this->delete(route('contacts.destroy', $contact));

        $response->assertRedirect();
        $this->assertDatabaseMissing('contacts', ['id' => $contact->id]);
    }
}
