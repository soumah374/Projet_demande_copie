<?php

namespace App\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Panier;
use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginForm()
    {
       return view('Auth::login');
    }

    public function profils()
    {
        $idUsers=Auth::user()->id;

        $UsersInfos=Auth::user();

        return view('Auth::profils');
    }

    public function login(Request $request)
    {
        request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $verifyUser = User::where('email', $request->email)
                            ->where('statuts', 1)
                            ->first();

        if($verifyUser && $verifyUser->statuts == 1)
        {
            $credentials = $request->only('email', 'password');

            if (Auth::Attempt($credentials))
            {
                return redirect()->intended('/dashboard');
            }
            // toastr()->error('Accès refusé!!!','Alert');
            return redirect()->back();
        }else{
            Session::flash('error',"Identifiant ou mot de passe incorrect");
        }
        // toastr()->info('Téléphone ou mot de passe incorrect!!!','Information');

        $verifyprofile = User::where('email', $request->email)
                                    ->where('statuts', 0)
                                    ->first();

        if($verifyprofile && $verifyprofile->statuts == 0)
        {
            $credentials = $request->only('email', 'password');

            if (Auth::Attempt($credentials))
            {
                return redirect()->route('profile');
            }
            // toastr()->error('Accès refusé!!!','Alert');
            return redirect()->back();
        }else{
            Session::flash('error',"Identifiant ou mot de passe incorrect");
        }
        return back();
    }



    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function update(Request $request)
    {
        $usersInfos=Auth::user();
        $usersInfos->nom=$request->nom;
        $usersInfos->email=$request->email;
        $usersInfos->telephone=$request->telephone;
        $usersInfos->update();
        return back();
    }


}
