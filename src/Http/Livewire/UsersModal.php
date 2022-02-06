<?php

namespace Bobkosse\Permissions\Http\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UsersModal extends Component
{
    public Collection $roles;

    public function mount()
    {
        $this->roles = Role::all();
    }

    public function render()
    {
        return view('permissions::livewire.users-modal');
    }

    public function closeModal()
    {
        $this->emit('closeUserModal');
    }
}
