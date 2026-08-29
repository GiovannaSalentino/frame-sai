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
        $jsBackLogic = 'window.history.length > 1 ? window.history.back()';
        $fallbackLogic = 'window.location.href=\''.url('/').'\'';

        foreach (['/principles', '/guidelines', '/success-criteria', '/design-patterns'] as $page) {
            $this->get($page)
                ->assertOk()
                ->assertSee($jsBackLogic, false)
                ->assertSee($fallbackLogic, false);
        }


        foreach (config('framesai.principles') as $principle) {

            $this->get('/principles/'.$principle['slug'])
                ->assertOk()
                ->assertSee($jsBackLogic, false)
                ->assertSee($fallbackLogic, false);
        }


        foreach (array_keys(config('framesai.design_patterns')) as $pattern) {
            $this->get('/design-patterns/'.$pattern)
                ->assertOk()
                ->assertSee($jsBackLogic, false)
                ->assertSee($fallbackLogic, false);
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


      public function test_navigation_menu_is_present_on_all_pages(): void
    {

        $menuMapping = [
            '/'                       => 'home',
            '/principles'             => 'principles',
            '/guidelines'             => 'guidelines',
            '/success-criteria'       => 'success-criteria',
            '/design-patterns'        => 'design-patterns',
        ];


        foreach (config('framesai.principles') as $principle) {
            $menuMapping['/principles/'.$principle['slug']] = 'principles';
        }

        foreach (array_keys(config('framesai.design_patterns')) as $pattern) {
            $menuMapping['/design-patterns/'.$pattern] = 'design-patterns';
        }

        foreach ($menuMapping as $url => $expectedActiveKey) {
            $response = $this->get($url);
            $response->assertOk();


            $response->assertSee('class="sticky top-0 mt-5 z-30 flex w-full shrink-0 flex-col items-stretch bg-white px-3 py-3 lg:fixed lg:inset-y-0 lg:left-0 lg:h-screen lg:w-[132px] lg:items-center lg:overflow-hidden lg:px-2 lg:py-3 lg:border-r lg:border-gray-200"', false);
            $response->assertSee('aria-label="Primary navigation"', false);

            $response->assertSee('href="'.route('home').'"', false);
            $response->assertSee('aria-label="FrameSAI homepage"', false);
            $response->assertSee('src="'.asset('img/group.png').'"', false);


            $response->assertSee('aria-label="Main sections"', false);

            $expectedItems = [
                'Homepage'          => route('home'),
                'Principles'        => route('library-principles'),
                'Guidelines'        => route('guidelines'),
                'Success Criteria'  => route('success-criteria'),
                'Design Patterns'   => route('design-pattern'),
            ];

            foreach ($expectedItems as $label => $href) {

                $response->assertSee('href="'.$href.'"', false);
                $response->assertSee($label);
            }


            $icons = ['homepage.png', 'principles.png', 'guidelines.png', 'success-criteria.png', 'design-pattern.png'];
            foreach ($icons as $icon) {
                $response->assertSee('src="'.asset('img/'.$icon).'"', false);

                $response->assertSee('class="pointer-events-none h-8 w-8 object-contain lg:h-12 lg:w-12 invert"', false);
            }


            $activeIndex = array_search($expectedActiveKey, array_keys($menuMapping));

            $menuKeys = ['home', 'principles', 'guidelines', 'success-criteria', 'design-patterns'];
            foreach ($menuKeys as $key) {
                if ($key === $expectedActiveKey) {
                    $response->assertSee('aria-current="page"', false);
                    $response->assertSee('class="flex h-[64px] min-w-0 flex-col items-center justify-center gap-1 rounded-lg px-1 text-gray-900 transition hover:bg-black/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#73cfff] lg:h-[78px] lg:w-full bg-black/10"', false);
                } else {

                }
            }
        }
    }
}

