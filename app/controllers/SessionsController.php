<?php

class SessionsController extends \BaseController {

    /**
     * Display the login
     *
     * @return Response
     */
    public function login()
    {
        return View::make('sessions.login');
    }

    public function logout() {
        Auth::logout();
        return Redirect::route('login');
    }

    public function authenticate() {
        $credentials = Input::only('email','password');
        if(Auth::attempt($credentials)) {
            return Redirect::intended(URL::route('dashboard.photos.index'));
        }
        Session::flash('alert_danger','Usuario / password inválidos');
        return Redirect::route('login');
    }

}
