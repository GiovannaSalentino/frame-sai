<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class SuccessCriteriaController extends Controller
{
    public function index(): View
    {
        // 🔥 MODIFICA: Aggiungi il conteggio dei success criteria per ogni principio
        $principles = collect(config('framesai.principles'))
            ->map(function (array $principle, string $code) {
                // Conta quanti success criteria hanno questo principio
                $count = collect(config('framesai.success_criteria'))
                    ->filter(fn (array $criterion) => in_array($code, $criterion['principles'], true))
                    ->count();

                return [...$principle, 'code' => $code, 'count' => $count];
            })
            ->values()
            ->all();

        $criteria = collect(config('framesai.success_criteria'))
            ->map(fn (array $criterion, string $code) => [...$criterion, 'code' => $code])
            ->values()
            ->all();

        $guidelines = collect($criteria)
            ->groupBy('guideline')
            ->map(fn ($items, string $code) => ['code' => $code, 'count' => $items->count()])
            ->sortBy(fn (array $guideline) => (int) substr($guideline['code'], 1))
            ->values()
            ->all();

        return view('pages.success-criteria', compact('principles', 'criteria', 'guidelines'));
    }
}
