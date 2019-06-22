<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function getContactsName(Request $request){
        return 'Это контакт';
    }
}
