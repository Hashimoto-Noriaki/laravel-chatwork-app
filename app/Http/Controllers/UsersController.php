<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }


}
