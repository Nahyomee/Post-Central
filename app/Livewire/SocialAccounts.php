<?php

namespace App\Livewire;

use App\Models\SMPlatform;
use Livewire\Component;

class SocialAccounts extends Component
{

    public function render()
    {
        return view('livewire.social-accounts', [
            'socials' =>  SMPlatform::query()->paginate(2)
        ]);
    }

}
