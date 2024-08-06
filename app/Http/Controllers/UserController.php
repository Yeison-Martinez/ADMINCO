<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // ------------------------------------- metodo index -------------------------------------
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users'=>$users]);
    }

    // ------------------------------------- metodo Create -------------------------------------
    public function create()
    {
        return view('users.create');
    }

    // ------------------------------------- metodo Store -------------------------------------
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'document_type' => 'required',
            'document_number' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $usuario = new User();

        $usuario->name = $request->name;
        $usuario->lastname = $request->lastname;
        $usuario->document_type = $request->document_type;
        $usuario->document_number = $request->document_number;
        $usuario->cell = $request->cell;
        $usuario->email = $request->email;
        $usuario->address = $request->address;
        $usuario->birthdate = $request->birthdate;
        $usuario->password = Hash::make($request->password);

        $usuario->save();
        // dd($usuario);
        return redirect()->route('users.index')->with('mensaje', 'El usuario ha sido registrado con exito');
    }

    // ------------------------------------- metodo Show -------------------------------------
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', ['user'=>$user]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user'=>$user]);
    }

    // ------------------------------------- metodo Update -------------------------------------
    public function update(Request $request, User $user)
    {


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'document_type' => 'required',
            'document_number' => 'required',
            // 'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            // 'password' => 'nullable|confirmed',
        ]);

        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->document_type = $request->document_type;
        $user->document_number = $request->document_number;

        // if ($request->email === $user->email) {
        //     $user->email = $user->email;
        // } else {
        //     # code...
        //     $user->email = $request->email;
        // }
        $user->email = $request->email;
        

        $user->address = $request->address;
        $user->birthdate = $request->birthdate;
        $user->password = Hash::make($request->password);
        $user->save();

        // $user = User::findOrFail($user->id);
        $user->update($request->all());
        return redirect()->route('users.index')->with('mensaje_update','La informacion se actualizo con exito');
    }

    // ------------------------------------- metodo Destroy -------------------------------------
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('mensaje_delete', 'Usuario eliminado con exito');
    }
}
