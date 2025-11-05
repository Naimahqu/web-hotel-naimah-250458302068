<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class HotelEdit extends Component
{
    #[Title('Edit Hotel')]

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

    public $hotel;


    public function mount($id){
        $this->hotel = Hotel::find($id);
        $this->name = $this->hotel->name;
        $this->phone = $this->hotel->phone;
        $this->email = $this->hotel->email;
        $this->stars = $this->hotel->stars;
        $this->address = $this->hotel->address;
        $this->check_in_time = $this->hotel->check_in_time;
        $this->check_out_time = $this->hotel->check_out_time;
        
    }
    public function render()
    {
        return view('livewire.hotels.hotel-edit');
    }

    public function update(){
        $this->validate();
        $this->hotel->update($this->all());
        return $this->redirect('/hotels', navigate:true);
    }
}
