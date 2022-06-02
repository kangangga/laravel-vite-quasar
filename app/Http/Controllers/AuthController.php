<?php

namespace App\Http\Controllers;

use App\Services\LoginService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function user(Request $request)
    {
        # code...
    }

    public function login(Request $request)
    {
        return inertia('auth/login');
    }

    public function doLogin(Request $request)
    {
        try {

            $branch = LoginService::checkBranchCode($request);

            $user = LoginService::checkEmail($request, $branch);

            LoginService::checkPassword($request, $user);

            return redirect()->route('home');
        } catch (\Exception $e) {

            return redirect()
                ->route('login')
                ->with('error', $e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        LoginService::logout($request);

        return redirect()->route('login');
    }
}
