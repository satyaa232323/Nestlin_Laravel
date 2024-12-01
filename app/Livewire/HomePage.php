<?php

namespace App\Livewire;

use App\Models\Kos;
use Livewire\Component;

class HomePage extends Component
{
    
    public function mount(){
    }
        
    public function render()
    {
        $kosts = Kos::all();
        return view('livewire.home-page', ['kosts' => $kosts]);
    }

   
}