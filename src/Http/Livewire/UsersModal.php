<?php

namespace Bobkosse\Permissions\Http\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersModal extends Component
{
    public Collection $roles;

    public Collection $permissions;

    public function mount()
    {
        $this->roles = Role::all();
        $this->permissions = Permission::all();
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
