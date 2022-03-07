<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    
    public function getAll()
    {

    }

    public function getMenuById($id)
    {
        //Emulamos el método ::find($id) del modelo User
        return $this->users[$id - 1];
    }
    
    public function store()
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}
