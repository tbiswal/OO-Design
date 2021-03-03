<?php

interface UserProviderInterface {

    public function find($id);

    public function findByUsername($username);

}

class Authenticator {


    public function __construct(UserProviderInterface $users,
                             HasherInterface $hash) 
    {

        $this->hash = $hash;

        $this->users = $users;

    }


    public function findUser($id) 

    {

        return $this->users->find($id);

    }


    public function authenticate($credentials) 

    {

        $user = $this->users->findByUsername($credentials['username']); 

        return $this->hash->make($credentials['password']) == $user->password;

    }

}


class RedisUserProvider implements UserProviderInterface {


    public function __construct(RedisConnection $redis)

    {

        $this->redis = $redis;

    }


    public function find($id)

    {

        $this->redis->get('users:'.$id);
    }


    public function findByUsername()

    {
        $id = $this->redis->get('user:id:'.$username);

        return $this->find($id);
    }

}
