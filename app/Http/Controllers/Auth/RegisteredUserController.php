<?php

namespace App\Http\Controllers\Auth;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;
use App\Models\Avatar;
use App\Models\Shop;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    use ApiResponser;
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {

        return response()->json(
            [
                'message' => 'Vous êtes connecté avec succès',
                'token' =>  $request->user()->createToken($request->token_name)
            ],
            200,
            [
                'Content-Type' => 'application/json;charset=UTF-8',
                'Charset' => 'utf-8'
            ],
            JSON_UNESCAPED_UNICODE
        );
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required', 'string', 'email',
                'firstName' => ['required', 'string', 'max:255'],
                'max:255', 'unique:users'
            ],
            'avatar_id' => ['required'],
            'money' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $avatar = Avatar::create([
            'src' => $request->avatar_id,
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'avatar_id' => $avatar->id,
            'password' => Hash::make($request->password),
            'money' => $request->money,
        ]);
        $shops= Shop::create([
            'user_id' => $user->id,
            'name' =>'La boutique  de' . $user->name,
            'caisse' => random_int(500, 1000),
        ]);

        event(new Registered($user));

        Auth::login($user);


        return response()->json(
            [
                'data' => $user,
                'message' => 'vous êtes connecté avec succès',
                'status' => 200,
                'user' => Auth::user(),
                'token' => $request->user()->createToken('API Token')->plainTextToken
            ],
            200,
            [
                'Content-Type' => 'application/json;charset=UTF-8',
                'Charset' => 'utf-8',
                'Content-Type' => 'multipart/form-data'
            ],
            JSON_UNESCAPED_UNICODE
        );
    }
}
