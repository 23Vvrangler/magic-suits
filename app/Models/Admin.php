<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Admin extends Model
{
    // Propiedades del modelo
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Método para crear un nuevo administrador
    public static function createAdmin($request)
    {
        $admin = new Admin();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->save();
        return $admin;
    }

    // Método para autenticar un administrador
    public static function authenticateAdmin($request)
    {
        $admin = Admin::where('email', $request->input('email'))->first();
        if ($admin && Hash::check($request->input('password'), $admin->password)) {
            return $admin;
        }
        return null;
    }

    // Método para obtener todos los administradores
    public static function getAllAdmins()
    {
        return Admin::all();
    }

    // Método para obtener un administrador por ID
    public static function getAdminById($id)
    {
        return Admin::find($id);
    }

    // Método para actualizar un administrador
    public static function updateAdmin($request, $id)
    {
        $admin = Admin::find($id);
        if ($admin) {
            $admin->name = $request->input('name');
            $admin->email = $request->input('email');
            if ($request->input('password')) {
                $admin->password = Hash::make($request->input('password'));
            }
            $admin->save();
            return $admin;
        }
        return null;
    }

    // Método para eliminar un administrador
    public static function deleteAdmin($id)
    {
        $admin = Admin::find($id);
        if ($admin) {
            $admin->delete();
            return true;
        }
        return false;
    }
}