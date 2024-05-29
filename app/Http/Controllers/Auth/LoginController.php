<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
	public function showLoginForm()
	{
		return view('auth.login');
	}

	public function login(Request $request)
	{
		$this->validator($request->all())->validate();

		if (Auth::attempt($request->only('email', 'password'))) {
			return redirect()->route('home');
		}

		return back()->withErrors([
			'email' => 'The provided credentials do not match our records.',
		]);
	}

	protected function validator(array $data)
	{
		return Validator::make($data, [
			'email' => ['required', 'string', 'email', 'max:255'],
			'password' => ['required', 'string', 'min:8'],
		]);
	}

	public function logout(Request $request)
	{
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();

		return redirect()->route('login');
	}
}
