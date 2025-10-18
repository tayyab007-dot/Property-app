<?php

namespace App\Livewire\dashboard\queries;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Query;


#[Layout('livewire.dashboard.layouts.app')]
class Index extends Component
{
    public function render()
    {
        $queries = Query::latest()->get();

        return view('livewire.dashboard.queries.index', [
            'queries' => $queries,
        ]);
    }
}
