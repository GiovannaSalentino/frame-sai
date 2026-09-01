<?php

namespace Tests\Feature;

use Tests\TestCase;

class DesignPatternsLibraryPageTest extends TestCase
{
    public function test_design_patterns_page_shows_header(): void
    {
        $response = $this->get('/design-patterns');

        $response->assertSee('Design Pattern Library');
        $response->assertSee('Reusable interaction solutions');
    }

    public function test_design_patterns_page_shows_banner(): void
    {
        $response = $this->get('/design-patterns');

        $response->assertSee('Patterns for Interaction Design in Symbiotic Artificial Intelligence');
        $response->assertSee(count(config('framesai.design_patterns')) . ' documented patterns');
    }

    public function test_design_patterns_page_shows_all_filter(): void
    {
        $response = $this->get('/design-patterns');

        $response->assertSee('All patterns');
        $response->assertSee(count(config('framesai.design_patterns')) . ' available');

        // Usa false per cercare la stringa letterale senza escape
        $response->assertSee('data-pattern-filter="all"', false);
        $response->assertSee('aria-pressed="true"', false);
    }

    public function test_design_patterns_page_shows_guideline_filters(): void
    {
        $response = $this->get('/design-patterns');

        // Prendi solo le linee guida che hanno pattern associati
        $guidelinesWithPatterns = [];
        foreach (config('framesai.design_patterns') as $pattern) {
            foreach ($pattern['guidelines'] as $guideline) {
                if (!in_array($guideline, $guidelinesWithPatterns)) {
                    $guidelinesWithPatterns[] = $guideline;
                }
            }
        }

        foreach ($guidelinesWithPatterns as $code) {
            $response->assertSee($code);
            $response->assertSee('Guideline ' . substr($code, 1));

            // Calcola il conteggio dei pattern associati a questa linea guida
            $count = 0;
            foreach (config('framesai.design_patterns') as $pattern) {
                if (in_array($code, $pattern['guidelines'])) {
                    $count++;
                }
            }
            $response->assertSee($count . ' ' . ($count === 1 ? 'Pattern' : 'Patterns'));

            // Usa false per cercare le stringhe letterali senza escape
            $response->assertSee('data-pattern-filter="' . $code . '"', false);
            $response->assertSee('aria-pressed="false"', false);
        }
    }

    public function test_design_patterns_page_lists_all_patterns(): void
    {
        $response = $this->get('/design-patterns');

        foreach (config('framesai.design_patterns') as $pattern) {
            $response->assertSee($pattern['code']);
            $response->assertSee($pattern['title']);
            $response->assertSee($pattern['problem']);
            $response->assertSee($pattern['suggestion']);
        }
    }

    public function test_design_patterns_show_associated_guidelines(): void
    {
        $response = $this->get('/design-patterns');

        foreach (config('framesai.design_patterns') as $pattern) {
            foreach ($pattern['guidelines'] as $code) {
                $response->assertSee($code);
                $response->assertSee('href="' . route('guidelines', ['guideline' => $code]) . '"', false);
            }
        }
    }

    public function test_design_patterns_have_explore_links(): void
    {
        $response = $this->get('/design-patterns');

        // Usa la chiave dell'array come slug (es. '1', '2', '3', ...)
        foreach (array_keys(config('framesai.design_patterns')) as $patternId) {
            $response->assertSee('href="' . route('design-pattern.show', $patternId) . '"', false);
            $response->assertSee('Explore');
        }
    }

    public function test_design_patterns_can_be_filtered_by_guideline_via_url(): void
    {
        // Prendi la prima linea guida che ha pattern associati
        $guidelinesWithPatterns = [];
        foreach (config('framesai.design_patterns') as $pattern) {
            foreach ($pattern['guidelines'] as $guideline) {
                if (!in_array($guideline, $guidelinesWithPatterns)) {
                    $guidelinesWithPatterns[] = $guideline;
                }
            }
        }
        $firstGuideline = $guidelinesWithPatterns[0] ?? 'G1';

        $response = $this->get('/design-patterns?guideline=' . $firstGuideline);
        $response->assertOk();

        $hasVisiblePattern = false;
        foreach (config('framesai.design_patterns') as $pattern) {
            if (in_array($firstGuideline, $pattern['guidelines'])) {
                $response->assertSee($pattern['code']);
                $hasVisiblePattern = true;
            }
        }
        $this->assertTrue($hasVisiblePattern, 'Nessun pattern visibile per la linea guida ' . $firstGuideline);
    }

    public function test_design_patterns_has_filter_javascript(): void
    {
        $response = $this->get('/design-patterns');

        // Verifica che il codice JavaScript di filtro sia presente
        $response->assertSee("const patternButtons = [...document.querySelectorAll('[data-pattern-filter]')];", false);
        $response->assertSee("const patternCards = [...document.querySelectorAll('[data-pattern]')];", false);
        $response->assertSee("function filterPatterns(selected) {", false);
        $response->assertSee("patternButtons.forEach((item) => {", false);
        $response->assertSee("patternCards.forEach((card) => {", false);
        $response->assertSee("patternButtons.forEach((button) => button.addEventListener('click', () => filterPatterns(button.dataset.patternFilter)));", false);
    }

    public function test_invalid_design_pattern_returns_404(): void
    {
        $this->get('/design-patterns/999')->assertNotFound();
    }
}
