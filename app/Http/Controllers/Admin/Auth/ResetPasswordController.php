<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function createNewPassword()
    {
        return view('admin.auth.create-new-password');
    }

    public function updateNewPassword()
    {
        //
    }
}
