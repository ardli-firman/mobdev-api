<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Client;

class RegistrasiController extends Controller
{
    use IssueTokenTrait;

    private $client;

    public function __construct()
    {
        $this->client = Client::find(2);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'gender' => 'required|in:laki-laki,perempuan',
            'username' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->username,
            'address' => $request->address,
            'gender' => $request->gender,
            'password' => Hash::make($request->password)
        ]);

        return $this->issueToken($request, 'password');
    }
}
