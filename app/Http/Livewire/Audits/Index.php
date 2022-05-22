<?php

namespace App\Http\Livewire\Audits;

use App\Models\Audit;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // TODO: Remove because its for testing purpose
        $audits = collect();
        foreach (range(1,12) as $item) {
            $audits->push($item);
        }
        return view('livewire.audits.index', [
            'audits' => $audits
//            'audits' => Audit::all()
        ])
            ->layout('layouts.pages.base', ['breadcrumb_name' => 'audits']);
    }
}
