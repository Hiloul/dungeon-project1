<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InviteController extends Controller
{
    public function invite()
{
    // show the user a form with an email field to invite a new user
}
public function process()
{
    // process the form submission and send the invite by email
}
public function accept($token)
{
    // here we'll look up the user by the token sent provided in the URL
}
}
