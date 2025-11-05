<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

class HotelCreate extends Component
{
    #[Title('Create Hotel')]

    #[Validate('required',message:'Field nama harus diisi')]
    #[Validate('min:3',message:'Field nama minimal 3 karakter')]
    public $name;

    #[Validate('required')]
    public $phone;
     #[Validate('email')]
    public $email;
     #[Validate('required')]
    public $address;
     #[Validate('required|numeric')]
    public $stars;
     #[Validate('required')]
    public $check_in_time;
     #[Validate('required')]
    public $check_out_time;

    public function render()
    {
        return view('livewire.hotels.hotel-create');
    }

    public function create(){
        $this->validate();
    Hotel::create($this->all());
    return $this->redirect('/hotels',navigate:true);
    }
}
