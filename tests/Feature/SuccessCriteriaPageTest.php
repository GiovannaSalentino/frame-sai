<?php

namespace Tests\Feature;

use Tests\TestCase;

class SuccessCriteriaPageTest extends TestCase
{
    public function test_success_criteria_page_shows_header(): void
    {
        $response = $this->get('/success-criteria');

        $response->assertSee('Valutation Success Criteria');
    }

    public function test_success_criteria_page_shows_introductory_text(): void
    {
        $response = $this->get('/success-criteria');

        $response->assertSee('The 16 Success Criteria are atomic, verifiable conditions used to assess whether a system satisfies the requirements of symbiotic artificial intelligence.');
    }

    public function test_success_criteria_page_shows_all_filter(): void
    {
        $response = $this->get('/success-criteria');

        $response->assertSee('All criteria');
        $response->assertSee(count(config('framesai.success_criteria')) . ' available');
    }

    public function test_success_criteria_page_shows_principle_filters(): void
    {
        $response = $this->get('/success-criteria');

        foreach (config('framesai.principles') as $code => $principle) {
            $response->assertSee($principle['name']);
            $response->assertSee($code);

            $count = 0;
            foreach (config('framesai.success_criteria') as $criterion) {
                if (in_array($code, $criterion['principles'])) {
                    $count++;
                }
            }
            $response->assertSee($count . ' Success Criteria');
        }
    }

    public function test_success_criteria_page_shows_guideline_filters(): void
    {
        $response = $this->get('/success-criteria');

        $guidelinesWithCriteria = [];
        foreach (config('framesai.success_criteria') as $criterion) {
            if (isset($criterion['guideline']) && !in_array($criterion['guideline'], $guidelinesWithCriteria)) {
                $guidelinesWithCriteria[] = $criterion['guideline'];
            }
        }

        foreach ($guidelinesWithCriteria as $code) {
            $response->assertSee($code);
            $response->assertSee('Guideline ' . substr($code, 1));

            $count = 0;
            foreach (config('framesai.success_criteria') as $criterion) {
                if (isset($criterion['guideline']) && $criterion['guideline'] === $code) {
                    $count++;
                }
            }
            $response->assertSee($count . ' Success Criteria');
        }
    }

    public function test_success_criteria_page_lists_all_criteria(): void
    {
        $response = $this->get('/success-criteria');

        foreach (config('framesai.success_criteria') as $code => $criterion) {
            $response->assertSee($code);
            $response->assertSee($criterion['title']);
        }
    }


    public function test_success_criteria_show_associated_principles(): void
    {
        $response = $this->get('/success-criteria');

        foreach (config('framesai.success_criteria') as $criterion) {
            foreach ($criterion['principles'] as $code) {
                $response->assertSee($code);
            }
        }
    }

    public function test_success_criteria_principle_badges_link_to_detail_pages(): void
    {
        $response = $this->get('/success-criteria');

        foreach (config('framesai.principles') as $code => $principle) {
            $response->assertSee('href="' . route('principles.show', $principle['slug']) . '"', false);
        }
    }

    public function test_success_criteria_have_guideline_links(): void
    {
        $response = $this->get('/success-criteria');

        foreach (config('framesai.success_criteria') as $criterion) {
            if (isset($criterion['guideline'])) {
                $response->assertSee('href="' . route('guidelines', ['guideline' => $criterion['guideline']]) . '"', false);
                $response->assertSee($criterion['guideline']);
            }
        }
    }

    public function test_success_criteria_can_be_filtered_by_principle_via_url(): void
    {
        $principles = array_keys(config('framesai.principles'));
        $firstPrinciple = $principles[0];

        $response = $this->get('/success-criteria?principle=' . $firstPrinciple);
        $response->assertOk();

        $hasVisibleCriterion = false;
        foreach (config('framesai.success_criteria') as $code => $criterion) {
            if (in_array($firstPrinciple, $criterion['principles'])) {
                $response->assertSee($code);
                $hasVisibleCriterion = true;
            }
        }
        $this->assertTrue($hasVisibleCriterion, 'Nessun criterio visibile per il principio ' . $firstPrinciple);
    }

    public function test_success_criteria_can_be_filtered_by_guideline_via_url(): void
    {
        $guidelinesWithCriteria = [];
        foreach (config('framesai.success_criteria') as $criterion) {
            if (isset($criterion['guideline']) && !in_array($criterion['guideline'], $guidelinesWithCriteria)) {
                $guidelinesWithCriteria[] = $criterion['guideline'];
            }
        }
        $firstGuideline = $guidelinesWithCriteria[0] ?? 'G1';

        $response = $this->get('/success-criteria?guideline=' . $firstGuideline);
        $response->assertOk();

        $hasVisibleCriterion = false;
        foreach (config('framesai.success_criteria') as $code => $criterion) {
            if (isset($criterion['guideline']) && $criterion['guideline'] === $firstGuideline) {
                $response->assertSee($code);
                $hasVisibleCriterion = true;
            }
        }
        $this->assertTrue($hasVisibleCriterion, 'Nessun criterio visibile per la linea guida ' . $firstGuideline);
    }

    public function test_success_criteria_can_be_filtered_by_pattern_via_url(): void
    {
        $patterns = array_keys(config('framesai.design_patterns'));
        $firstPattern = $patterns[0];

        $response = $this->get('/success-criteria?pattern=' . $firstPattern);
        $response->assertOk();

        $patternData = config('framesai.design_patterns.' . $firstPattern);
        $criteriaCodes = $patternData['criteria'] ?? [];

        $hasVisibleCriterion = false;
        foreach ($criteriaCodes as $code) {
            $formattedCode = str_replace('SC', 'SC ', $code);

            if (isset(config('framesai.success_criteria')[$formattedCode])) {
                $response->assertSee($formattedCode);
                $hasVisibleCriterion = true;
            }
        }
        $this->assertTrue($hasVisibleCriterion, 'Nessun criterio visibile per il pattern ' . $firstPattern);
    }

    public function test_success_criteria_can_be_filtered_by_specific_criterion_via_url(): void
    {
        $criteria = array_keys(config('framesai.success_criteria'));
        $firstCriterion = $criteria[0];

        $response = $this->get('/success-criteria?criterion=' . $firstCriterion);
        $response->assertOk();

        $response->assertSee($firstCriterion);
    }
}
