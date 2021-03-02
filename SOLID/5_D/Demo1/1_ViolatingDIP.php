<?php

class PasswordReminder {

    /**
     * @var MySqlConnection
     */
    private $dbConnection;


    public function __construct(MySqlConnection $dbConnection)

    {

        $this->dbConnection = $dbConnection;

    }

}
