<?php

namespace Bobkosse\Permissions\Http\Livewire;

use App\Models\User;
use Bobkosse\Permissions\Console\Commands\SyncPermissions;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserManagement extends Component
{
    public Collection $roles;

    public Array $permissions;

    public array $user = [
        'name' => '',
        'email' => '',
        'password' => '',
        'password_confirmation' => '',
        'roles' => [],
        'permissions' => []
    ];
    
    protected $rules = [
        'user.name' => 'required|min:3',
        'user.email' => 'required|email:rfc,dns|unique:users,email',
        'user.password' => 'required|min:8|confirmed',
        'user.roles' => 'present|array',
        'user.permissions' => 'array'
    ];

    protected $messages = [
        'user.name.required' => 'The name is required',
        'user.name.min' => 'The name must contain :min characters at least',
        'user.email.required' => 'The e-mail address is required',
        'user.email.email' => 'The e-mail address must be valid',
        'user.email.unique' => 'The e-mail address must be unique in your userbase',
        'user.password.required' => 'The password is required',
        'user.password.min' => 'The password must contain :min characters at least',
        'user.password.confirmed' => 'The password must match the confirmed password',
        'user.roles.present' => 'The user needs at least one role',
        'user.roles.array' => 'The given roles list must be an array',
        'user.permissions.array' => 'The given permissions list must be an array',
    ];

    public function mount()
    {
        if(Config::get('permissions.auto_sync')) {
            $sync = new SyncPermissions();
            $sync->handle();
        }
        $this->roles = Role::all();
        $this->permissions = Config::get('permissions.permissions');
    }

    public function render()
    {
        return view('permissions::livewire.users-management');
    }

    public function createUser()
    {
        // $this->validate();

        dd($this->user);

        // $user = new User();
        // $user->name = $this->user['name'];
        // $user->email = $this->user['email'];
        // $user->password = Hash::make($this->user['password']);
        // $user->save();

        // $user->assignRole($this->user['roles']);
        // $user->givePermissionTo($this->user['permissions']);

        // @TODO: Redirect route
    }
}
