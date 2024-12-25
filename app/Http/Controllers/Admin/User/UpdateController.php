<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(User $user)
    {
        $data = request()->validate([
            'name' => 'required|string|unique:users,name,' . $user->id,
            'email' => 'required|string|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string',
            'role' => 'nullable|string'
        ], [
            'name.unique' => 'Bular ýalak atly ulanyjy bar!',
            'name.required' => 'Ady giriz!',
            'email.unique' => 'Bular ýalak poçta ulanylýar!',
            'email.required' => 'Poçtany giriz!',
        ]);
        $user->update($data);

        return redirect()->route('admin.user.show', compact('user'));
    }
}
