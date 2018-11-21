<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validatedData = request()->validate([
            'name' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = new User;
        $user->name = request('name');
        $user->password = Hash::make(request('password'));
        $user->save();

        return redirect('users')
            ->with('success','User created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $houses = House::all();
        return view('users.edit', compact('user','houses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:users,name,'.$user->id,
            'password' => 'string|min:6|nullable',
            'houses' => 'nullable',
        ]);

        $user->name = request('name');
        if(!empty(request('password'))){
            $user->password = Hash::make(request('password'));
        }
        $user->save();
        $houses = House::all();
        foreach ($houses as $house){
            if(is_array(request('houses')) && in_array($house->id, request('houses'))){
                    $house->professor_id = $user->id;
                    $house->save();
            }elseif($house->professor_id == $user->id){
                    $house->professor_id = null;
                    $house->save();
            }
        }

        return redirect(route('users.index'))
            ->with('success','Gebruiker is succesvol aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Request $request, User $user)
    {
       $user->delete();

        return redirect(route('users.index'));
    }
}
