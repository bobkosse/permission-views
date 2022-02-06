<?php

namespace Bobkosse\Permissions\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class RolesOverview extends Component
{
    use WithPagination;

    public function render()
    {
        return view('permissions::livewire.roles-overview', [
            'roles' => Role::paginate(10)
        ]);
    }
}
