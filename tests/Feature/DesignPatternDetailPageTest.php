<?php

namespace Tests\Feature;

use Tests\TestCase;

class DesignPatternDetailPageTest extends TestCase
{
    public function test_each_design_pattern_detail_page_is_accessible(): void
    {
        foreach (array_keys(config('framesai.design_patterns')) as $patternId) {
            $this->get(route('design-pattern.show', $patternId))->assertOk();
        }
    }

    public function test_design_pattern_detail_shows_header(): void
    {
        foreach (config('framesai.design_patterns') as $patternId => $pattern) {
            $response = $this->get(route('design-pattern.show', $patternId));

            $response->assertSee($pattern['title']);
            $response->assertSee($pattern['code']);
        }
    }

    public function test_design_pattern_detail_shows_problem(): void
    {
        foreach (config('framesai.design_patterns') as $patternId => $pattern) {
            $response = $this->get(route('design-pattern.show', $patternId));

            $response->assertSee('Problem');
            $response->assertSee($pattern['problem']);
        }
    }

    public function test_design_pattern_detail_shows_design_suggestion(): void
    {
        foreach (config('framesai.design_patterns') as $patternId => $pattern) {
            $response = $this->get(route('design-pattern.show', $patternId));

            $response->assertSee('Design suggestion');
            $response->assertSee($pattern['suggestion']);
        }
    }

    public function test_design_pattern_detail_shows_solution(): void
    {
        foreach (config('framesai.design_patterns') as $patternId => $pattern) {
            $response = $this->get(route('design-pattern.show', $patternId));

            $response->assertSee('Solution');
            foreach ($pattern['solution'] as $solution) {
                $response->assertSee($solution);
            }
        }
    }

    public function test_design_pattern_detail_shows_context(): void
    {
        foreach (config('framesai.design_patterns') as $patternId => $pattern) {
            $response = $this->get(route('design-pattern.show', $patternId));

            $response->assertSee('Context and motivations');
            $response->assertSee($pattern['context']);
        }
    }

    public function test_design_pattern_detail_shows_examples(): void
    {
        foreach (config('framesai.design_patterns') as $patternId => $pattern) {
            $response = $this->get(route('design-pattern.show', $patternId));

            $response->assertSee('Examples');
            $response->assertSee($pattern['examples']);
        }
    }

    public function test_design_pattern_detail_shows_example_image(): void
    {
        $patternsWithImages = ['2', '3', '4', '4-1', '5', '5-1', '6', '8', '11'];

        foreach ($patternsWithImages as $patternId) {
            $pattern = config('framesai.design_patterns.' . $patternId);

            $response = $this->get(route('design-pattern.show', $patternId));

            // Verifica che l'immagine esista fisicamente
            $this->assertFileExists(public_path($pattern['example_image']));

            // Verifica che l'immagine sia nella pagina
            $response->assertSee('src="' . asset($pattern['example_image']) . '"', false);
            $response->assertSee($pattern['example_caption']);
        }
    }

    public function test_design_pattern_detail_shows_linked_guidelines(): void
    {
        foreach (config('framesai.design_patterns') as $patternId => $pattern) {
            $response = $this->get(route('design-pattern.show', $patternId));

            $response->assertSee('Linked guidelines');

            foreach ($pattern['guidelines'] as $code) {
                $response->assertSee($code);
                $response->assertSee('href="' . route('guidelines', ['guideline' => $code]) . '"', false);

                // Verifica che la descrizione della linea guida sia presente
                $guideline = config('framesai.guidelines.' . $code);
                if ($guideline && isset($guideline['description'])) {
                    $response->assertSee($guideline['description']);
                }
            }
        }
    }

    public function test_invalid_design_pattern_returns_404(): void
    {
        $this->get('/design-patterns/999')->assertNotFound();
    }
}
