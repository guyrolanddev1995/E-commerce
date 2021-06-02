<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends BaseController
{
    public function create()
    {
        $this->setPageTitle('Roles', 'Ajouter un role');
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Role::create([
            'guard_name' => 'admin', 
            'name' => $request->name
        ]);
    }
}
