<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Mail\User\PasswrodMail;
use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'name' => 'required|string|unique:users,name',
            'email' => 'required|string|email|unique:users,email',
            'role' => 'required|string'
        ], [
            'name.unique' => 'Bular ýalak atly ulanyjy bar!',
            'name.required' => 'Ady giriz!',
            'email.unique' => 'Bular ýalak poçta ulanylýar!',
            'email.required' => 'Poçtany giriz!',
        ]);

        $password = Str::random(10);
        $data['password'] = Hash::make($password);
        $user = User::Create($data);
        Mail::to($data['email'])->send(new PasswrodMail($password));
        event(new Registered($user));

        return redirect()->route('admin.user.index');

    }


}

