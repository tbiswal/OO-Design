<?php

class UserController {

    public function index(User $user) 

    {
        /**
         * Display a listing of the resource
         * @return \Illuminate\Http\Response
         */
        $users  = $user->where('created_at', '>=', Carbon::Yesterday())->get();

        return response()->json(compact('users'),200);
    }

}
