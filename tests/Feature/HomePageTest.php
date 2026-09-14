<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_homepage_shows_title_and_description(): void
    {
        $response = $this->get('/');

        $response->assertSee('A ');
        $response->assertSee('Toolkit');
        $response->assertSee(' to Create Symbiotic AI System');
        $response->assertSee('A design framework that translates the Principles of Symbiotic AI into Guidelines, Success Criteria and Design Patterns.');
    }

    public function test_homepage_shows_four_cards_with_correct_values_and_labels(): void
    {
        $response = $this->get('/');

        $expectedCards = [
            ['value' => '4', 'label' => 'Principles'],
            ['value' => '12', 'label' => 'Guidelines'],
            ['value' => '16', 'label' => 'Criteria'],
            ['value' => '14', 'label' => 'Patterns'],
        ];

        foreach ($expectedCards as $card) {
            $response->assertSee($card['value']);
            $response->assertSee($card['label']);
        }
    }

    public function test_homepage_cards_link_to_correct_pages(): void
    {
        $response = $this->get('/');

        $response->assertSee('href="' . route('library-principles') . '"', false);
        $response->assertSee('href="' . route('guidelines') . '"', false);
        $response->assertSee('href="' . route('success-criteria') . '"', false);
        $response->assertSee('href="' . route('design-pattern') . '"', false);
    }

    public function test_homepage_cards_lead_to_existing_pages(): void
    {
        $this->get(route('library-principles'))->assertOk();
        $this->get(route('guidelines'))->assertOk();
        $this->get(route('success-criteria'))->assertOk();
        $this->get(route('design-pattern'))->assertOk();
    }
}
