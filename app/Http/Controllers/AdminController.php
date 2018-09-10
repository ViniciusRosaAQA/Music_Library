<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
      return view('admin_manage');
    }

    public function viewuser ()
    {
        $userslist = User::all()->toArray();

        return view('view_user', compact('userslist'));
    }

    /**
     * Choose action for existing user account
     *
     * @param Request $request
     * @return Response
     *
     */

    public function useraction (Request $request)
    {
        switch ($request['actionbutton'])
        { // Alternate values
            case 'edit':
                $useredit =  User::where('name', $request['name'])->get();

                return view('edit_user', compact('useredit'));
                break;
            case 'remove':
                $this->deleteuser($request['name']);
                break;
        }
    }

    /**
     * Update user
     *
     * @param Request $request
     * @return Response
     *
     */

    public function updateuser (Request $request)
    { // Update the user selected

        $image = true;

        $useredit =  User::where('name', $request['name'])->get();

        if ($request['password'] == ''){
            $pass = false;
        } else {
            $request['password'] = Hash::make($request['password']);
            $pass = true;
        }

        if ($request['image'] == '') {
            $image = false;
        }

        if ($pass && $image == false)
        {
            User::where('name', $request['name'])->update($request->except('_token','image'));
        } else if ($pass == false && $image == false) {
            User::where('name', $request['name'])->update($request->except('_token','password','image'));
        } else if ($pass && $image){
            User::where('name', $request['name'])->update($request->except('_token'));
        } else if ($pass == false && $image){
            User::where('name', $request['name'])->update($request->except('_token','password'));
        } else {
            echo 'Error';
        }

        return $this->index();
    }

    /**
     * Delete existing user
     *
     * @param String $userexisting
     * @return Response
     *
     */

    public function deleteuser (String $userexisting){

        User::where('name', $userexisting)->forceDelete(); // delete user

        return view('home');
    }
}
