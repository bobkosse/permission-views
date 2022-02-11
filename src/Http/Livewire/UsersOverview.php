<?php

namespace Bobkosse\Permissions\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersOverview extends Component
{
    use WithPagination;

    public $showModal = false;

    protected $listeners = ['closeUserModal'];

    public function render()
    {
        return view('permissions::livewire.users-overview', [
            'users' => User::paginate(10)
        ]);
    }

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeUserModal()
    {
        $this->showModal = false;
        $this->render();
    }
}
