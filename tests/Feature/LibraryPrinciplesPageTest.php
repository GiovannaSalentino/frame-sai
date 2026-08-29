<?php

namespace Tests\Feature;

use Tests\TestCase;

class LibraryPrinciplesPageTest extends TestCase
{
    public function test_principles_page_shows_header(): void
    {
        $response = $this->get('/principles');

        $response->assertSee('Library of Principles');
        $response->assertSee('Framework foundations');
    }

    public function test_principles_page_shows_introductory_text(): void
    {
        $response = $this->get('/principles');

        $response->assertSee('The principles are the foundational pillars of our framework.');
        $response->assertSee('They serve as the high-level guiding requirements that every AI system must meet');
        $response->assertSee('The four core principles are:');
    }

    public function test_principles_page_lists_all_principles(): void
    {
        $response = $this->get('/principles');

        $principles = config('framesai.principles');

        foreach ($principles as $principle) {
            $response->assertSee($principle['name']);
        }
    }

    public function test_each_principle_has_correct_number(): void
    {
        $response = $this->get('/principles');

        $response->assertSee('P1');
        $response->assertSee('P2');
        $response->assertSee('P3');
        $response->assertSee('P4');
    }

    public function test_each_principle_card_links_to_correct_detail_page(): void
    {
        $response = $this->get('/principles');

        foreach (config('framesai.principles') as $principle) {
            $response->assertSee('href="' . route('principles.show', $principle['slug']) . '"', false);
        }
    }

    public function test_each_principle_detail_page_is_accessible(): void
    {
        foreach (config('framesai.principles') as $principle) {
            $this->get(route('principles.show', $principle['slug']))->assertOk();
        }
    }

    public function test_invalid_principle_returns_404(): void
    {
        $this->get('/principles/unknown')->assertNotFound();
    }
}
