<?php

namespace App\Livewire;

use App\Models\Kos;
use Livewire\Component;

class MenuPage extends Component
{
    public function render()
    {
        $kosts = Kos::all();
        return view('livewire.menu-page', ['kosts' => $kosts]);
    }
}