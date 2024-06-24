<?php

namespace App\Livewire\Url;

use App\Models\Url;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.url.index', [
            'urls' => Url::latest()->paginate(10),
        ]);
    }
}
