<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Professional;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordController extends Controller
{

    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'email',
            'password' => 'password|confirmed|min:6'
        ]);

        $user = User::where('email',$request->email)->first();
        $candidate = Candidate::where('email',$request->email)->first();
        $professional = Professional::where('email',$request->email)->first();

        if($request->nouveau_password === $request->c_nouveau_password){
            if($user->is_prof == 1){
                $user->password = Hash::make($request->nouveau_password);
                $user->save();
                $professional->password = Hash::make($request->nouveau_password);
                $professional->save();
                return redirect()->route('welcome')->with('success','Votre mot de passe a été réinitialisé!');
            }else{
                $user->password = Hash::make($request->nouveau_password);
                $user->save();
                $candidate->password = Hash::make($request->nouveau_password);
                $candidate->save();
                return redirect()->route('welcome')->with('success','Votre mot de passe a été réinitialisé!');
            }
        }
        return redirect()->back()->with('danger','Nouveau mot de passe et Comfirmation mot de passe doivent être identiques !');
    }
}
