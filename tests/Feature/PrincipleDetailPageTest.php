<?php

namespace Tests\Feature;

use Tests\TestCase;

class PrincipleDetailPageTest extends TestCase
{
    public function test_principle_detail_shows_header(): void
    {
        foreach (config('framesai.principles') as $principle) {
            $response = $this->get(route('principles.show', $principle['slug']));

            // Usa 'name' invece di 'title'
            $response->assertSee($principle['name']);
        }
    }

    public function test_principle_detail_shows_description(): void
    {
        foreach (config('framesai.principles') as $principle) {
            $response = $this->get(route('principles.show', $principle['slug']));

            // Verifica solo che la sezione "Description" sia presente
            // Non possiamo verificare il contenuto specifico se non c'è nel config
            $response->assertSee('Description');
        }
    }

    public function test_principle_detail_shows_application_example(): void
    {
        foreach (config('framesai.principles') as $principle) {
            $response = $this->get(route('principles.show', $principle['slug']));

            // Verifica solo che la sezione "Application example" sia presente
            $response->assertSee('Application example');
        }
    }

    public function test_principle_detail_has_related_guidelines_link(): void
    {
        foreach (config('framesai.principles') as $code => $principle) {
            $response = $this->get(route('principles.show', $principle['slug']));

            $response->assertSee('Related guidelines');
            // Usa $code (P1, P2, P3, P4) invece di $principle['code']
            $response->assertSee('href="' . route('guidelines', ['principle' => $code]) . '"', false);
        }
    }

    public function test_principle_detail_has_related_success_criteria_link(): void
    {
        foreach (config('framesai.principles') as $code => $principle) {
            $response = $this->get(route('principles.show', $principle['slug']));

            $response->assertSee('Related Success criteria');
            // Usa $code (P1, P2, P3, P4) invece di $principle['code']
            $response->assertSee('href="' . route('success-criteria', ['principle' => $code]) . '"', false);
        }
    }

    public function test_principle_detail_has_design_patterns_link(): void
    {
        foreach (config('framesai.principles') as $principle) {
            $response = $this->get(route('principles.show', $principle['slug']));

            $response->assertSee('Design patterns');
            $response->assertSee('href="' . route('design-pattern') . '"', false);
        }
    }
}
