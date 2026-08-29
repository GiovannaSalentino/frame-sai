<?php

namespace Tests\Feature;

use Tests\TestCase;

class GuidelinesPageTest extends TestCase
{
    public function test_guidelines_page_shows_header(): void
    {
        $response = $this->get('/guidelines');

        $response->assertSee('Design Guidelines');
        $response->assertSee('From principles to design');
    }

    public function test_guidelines_page_shows_introductory_text(): void
    {
        $response = $this->get('/guidelines');

        $response->assertSee('Guidelines translate the framework principles into concrete directions');
    }

    public function test_guidelines_page_shows_all_filter(): void
    {
        $response = $this->get('/guidelines');

        $response->assertSee('All Guidelines');
        $response->assertSee(count(config('framesai.guidelines')) . ' available');
    }

    public function test_guidelines_page_shows_principle_filters(): void
    {
        $response = $this->get('/guidelines');

        foreach (config('framesai.principles') as $code => $principle) {
            $response->assertSee($principle['name']);
            $response->assertSee($code);
        }
    }

    public function test_guidelines_page_lists_all_guidelines(): void
    {
        $response = $this->get('/guidelines');

        foreach (config('framesai.guidelines') as $code => $guideline) {
            $response->assertSee($code);
            $response->assertSee($guideline['description']);
        }
    }

    public function test_guidelines_show_associated_principles(): void
    {
        $response = $this->get('/guidelines');

        foreach (config('framesai.guidelines') as $guideline) {
            foreach ($guideline['principles'] as $code) {
                $response->assertSee($code);
            }
        }
    }

    public function test_guidelines_principle_badges_link_to_detail_pages(): void
    {
        $response = $this->get('/guidelines');

        foreach (config('framesai.principles') as $code => $principle) {
            $response->assertSee('href="' . route('principles.show', $principle['slug']) . '"', false);
        }
    }

    public function test_guidelines_have_design_patterns_links(): void
    {
        $response = $this->get('/guidelines');

        foreach (config('framesai.guidelines') as $code => $guideline) {
            // Verifica che il link esista
            $response->assertSee('href="' . route('design-pattern', ['guideline' => $code]) . '"', false);

            // Calcola il conteggio dei pattern associati a questa linea guida
            $patternCount = 0;
            foreach (config('framesai.design_patterns') as $pattern) {
                if (in_array($code, $pattern['guidelines'] ?? [])) {
                    $patternCount++;
                }
            }

            // Verifica che il testo del link contenga il conteggio corretto
            $response->assertSee($patternCount . ' design patterns');
        }
    }

    public function test_guidelines_have_success_criteria_links(): void
    {
        $response = $this->get('/guidelines');

        foreach (config('framesai.guidelines') as $code => $guideline) {
            // Verifica che il link esista
            $response->assertSee('href="' . route('success-criteria', ['guideline' => $code]) . '"', false);

            // Calcola il conteggio dei criteri associati a questa linea guida
            $criteriaCount = 0;
            foreach (config('framesai.success_criteria') as $criterion) {
                if (isset($criterion['guideline']) && $criterion['guideline'] === $code) {
                    $criteriaCount++;
                }
            }

            // Verifica che il testo del link contenga il conteggio corretto
            $response->assertSee($criteriaCount . ' success criteria');
        }
    }

    public function test_guidelines_can_be_filtered_by_principle_via_url(): void
    {
        $principles = array_keys(config('framesai.principles'));
        $firstPrinciple = $principles[0];

        $response = $this->get('/guidelines?principle=' . $firstPrinciple);
        $response->assertOk();

        $hasVisibleGuideline = false;
        foreach (config('framesai.guidelines') as $code => $guideline) {
            if (in_array($firstPrinciple, $guideline['principles'])) {
                $response->assertSee($code);
                $hasVisibleGuideline = true;
            }
        }
        $this->assertTrue($hasVisibleGuideline, 'Nessuna linea guida visibile per il principio ' . $firstPrinciple);
    }

    public function test_guidelines_can_be_filtered_by_specific_guideline_via_url(): void
    {
        $guidelines = array_keys(config('framesai.guidelines'));
        $firstGuideline = $guidelines[0];

        $response = $this->get('/guidelines?guideline=' . $firstGuideline);
        $response->assertOk();

        $response->assertSee($firstGuideline);
    }

    // --- TEST PER VERIFICARE CHE I FILTRI FUNZIONINO EFFETTIVAMENTE ---

    public function test_design_patterns_link_from_guideline_applies_filter(): void
    {
        $guidelines = array_keys(config('framesai.guidelines'));
        $firstGuideline = $guidelines[0];

        $response = $this->get('/design-patterns?guideline=' . $firstGuideline);
        $response->assertOk();

        $hasVisiblePattern = false;
        foreach (config('framesai.design_patterns') as $pattern) {
            if (in_array($firstGuideline, $pattern['guidelines'] ?? [])) {
                $response->assertSee($pattern['code']);
                $hasVisiblePattern = true;
            }
        }
        $this->assertTrue($hasVisiblePattern, 'Nessun pattern visibile per ' . $firstGuideline);
    }

    public function test_success_criteria_link_from_guideline_applies_filter(): void
    {
        $guidelines = array_keys(config('framesai.guidelines'));
        $firstGuideline = $guidelines[0];

        $response = $this->get('/success-criteria?guideline=' . $firstGuideline);
        $response->assertOk();

        $hasVisibleCriterion = false;
        foreach (config('framesai.success_criteria') as $code => $criterion) {
            if (isset($criterion['guideline']) && $criterion['guideline'] === $firstGuideline) {
                $response->assertSee($code);
                $hasVisibleCriterion = true;
            }
        }
        $this->assertTrue($hasVisibleCriterion, 'Nessun criterio visibile per ' . $firstGuideline);
    }
}
