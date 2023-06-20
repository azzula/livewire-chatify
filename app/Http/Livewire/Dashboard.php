<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\ChMessage;

class Dashboard extends Component
{
    public function render()
    {
        // Total Pengguna Terdaftar
        if(User::get('id')->count() > 0){
            $users = User::get('id')->count();
        }else{
            $users = "0";
        }

        // Total Pesan Terkirim
        if(ChMessage::get('id')->count() > 0){
            $messages = ChMessage::get('id')->count();
        }else{
            $messages = "0";
        }

        return view('livewire.dashboard', ['users' => $users, 'messages' => $messages]);
    }
}
