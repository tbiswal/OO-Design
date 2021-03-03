<?php

interface UserRepositoryInterface {
    public function getAfterDate();
    public function create();
}

class UserRepository implements UserRepositoryInterface {

    /**
    * Gets user records  from the databse registered
    * after certain date
    *
    * @param Carbon $date
    *
    * @return Illuminate\Database\Eloquent\Collection
    */
    public function getAfterDate(Carbon $date)
    {
        return User::where('created_at', '>', $date)->get();
    }

    /**
    * Saves the resource in the database
    *
    * @param object $userData
    *
    * @return App\User
    */
    public function create($userData)
    {
        $user           = new User();
        $user->name     = $userData->name;
        $user->email    = $userData->email;
        $user->password = bcrypt($userData->password);

        $user->save();

        return $user;
    }

}


class UserController {

    public function index(UserRepositoryInterface $user) 

    {
        /**
         * Display a listing of the resource
         * @return \Illuminate\Http\Response
         */
        $users  = $user->getAfterDate(Carbon::yesterday());

        return response()->json(compact('users'),200);
    }

}
