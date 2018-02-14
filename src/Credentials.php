<?php

namespace TNTExpressConnect;

final class Credentials
{
    private $username;
    private $password;
    private $account;

    public function __construct($username, $password, $account = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->account = $account;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getAccount()
    {
        return $this->account;
    }
}
