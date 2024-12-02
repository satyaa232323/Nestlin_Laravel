<?php

namespace App\Livewire;

use App\Filament\Resources\KosResource;
use App\Models\Kos;
use Livewire\Component;

class DetailPage extends Component
{
    protected static string $resource = KosResource::class;

    public $kost;
    public function mount($id) // Parameter $id diterima di sini
    {
        $this->kost = Kos::findOrFail($id); 
    }
    public function render()
    {
        return view('livewire.detail-page', [
            'kost' => $this->kost, 
        ]);
    }
    
}