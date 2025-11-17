<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Artisan;

class AutoLogoutSettings extends Component
{
    public $lifetime;

    public function mount()
    {
        $this->lifetime = config('session.lifetime');
    }

    public function save()
    {
        // Zapisz do pliku .env
        $envPath = base_path('.env');
        $env = file_get_contents($envPath);
        $env = preg_replace('/^SESSION_LIFETIME=.*/m', 'SESSION_LIFETIME=' . $this->lifetime, $env);
        file_put_contents($envPath, $env);
        // Wymuś ponowne wczytanie konfiguracji
        Artisan::call('config:clear');
        session()->flash('message', 'Czas automatycznego wylogowania został zapisany!');
    }
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.auto-logout-settings');
    }
}
