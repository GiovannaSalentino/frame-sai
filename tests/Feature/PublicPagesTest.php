<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    public function test_public_pages_are_available(): void
    {
        $pages = array_merge([
            '/',
            '/principles',
            '/principles/transparency',
            '/principles/fairness',
            '/principles/automation-level',
            '/principles/protection',
            '/guidelines',
            '/success-criteria',
            '/design-patterns',
        ], array_map(
            fn (string $pattern) => '/design-patterns/'.$pattern,
            array_keys(config('framesai.design_patterns'))
        ));

        foreach ($pages as $page) {
            $this->get($page)->assertOk();
        }
    }

    public function test_invalid_resources_return_not_found(): void
    {
        $this->get('/principles/unknown')->assertNotFound();
        $this->get('/design-patterns/99')->assertNotFound();
    }

    public function test_the_complete_framework_catalog_is_rendered(): void
    {
        $this->get('/guidelines')
            ->assertOk()
            ->assertSee('G12')
            ->assertSee('12 available');

        $this->get('/success-criteria')
            ->assertOk()
            ->assertSee('Valutation Success Criteria')
            ->assertSee('SC5.6')
            ->assertSee('16 available');

        $this->get('/design-patterns')
            ->assertOk()
            ->assertSee('DP11')
            ->assertSee('14 documented patterns');
    }

    public function test_back_links_point_to_the_expected_parent_pages(): void
    {
        foreach (['/principles', '/guidelines', '/success-criteria', '/design-patterns'] as $page) {
            $this->get($page)
                ->assertOk()
                ->assertSee('href="'.url('/').'"', false);
        }

        $this->get('/principles/transparency')
            ->assertOk()
            ->assertSee('href="'.url('/principles').'"', false);

        foreach (array_keys(config('framesai.design_patterns')) as $pattern) {
            $this->get('/design-patterns/'.$pattern)
                ->assertOk()
                ->assertSee('href="'.url('/design-patterns').'"', false);
        }
    }

    public function test_documented_pattern_figures_are_rendered_with_clean_captions(): void
    {
        $patternsWithFigures = ['2', '3', '4', '4-1', '5', '5-1', '6', '8', '11'];

        foreach ($patternsWithFigures as $pattern) {
            $data = config('framesai.design_patterns.'.$pattern);

            $this->assertFileExists(public_path($data['example_image']));

            $this->get('/design-patterns/'.$pattern)
                ->assertOk()
                ->assertSee(asset($data['example_image']), false)
                ->assertSee($data['example_caption'])
                ->assertDontSee('Figure ');
        }
    }

    public function test_legacy_library_urls_redirect_to_the_new_routes(): void
    {
        $this->get('/library-principles')->assertRedirect('/principles');
        $this->get('/design-pattern')->assertRedirect('/design-patterns');
    }
}
