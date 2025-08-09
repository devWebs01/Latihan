<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Models\Contact;
use Tests\TestCase;

final class ContactUnitTest extends TestCase
{
    public function test_contact_has_fillable_attributes(): void
    {
        $contact = new Contact();
        
        $expected = ['name'];
        
        $this->assertEquals($expected, $contact->getFillable());
    }

    public function test_contact_can_be_created(): void
    {
        $contact = Contact::factory()->create([
            'name' => 'Test Contact',
        ]);

        $this->assertInstanceOf(Contact::class, $contact);
        $this->assertEquals('Test Contact', $contact->name);
    }

    public function test_contact_has_timestamps(): void
    {
        $contact = Contact::factory()->create();

        $this->assertNotNull($contact->created_at);
        $this->assertNotNull($contact->updated_at);
    }
}
