<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['change_to_admin']]);
    }

    public function change_to_admin()
    {
      $user = auth()->user();
      $role = Role::where('name' , 'admin')->first();
      $user->role_id = $role->id;
      $user->save();

      return response()->json([
          'message' => 'Berhasil diubah ke admin',
      ]);
    }

    public function index()
    {
      return response()->json([
          'message' => 'Anda berhasil masuk ke halaman admin',
      ]);
    }
}
