<?php

class Queries
{
    public function signin_query()
    {
        $sql = "SELECT id, username, password FROM admin_credentials WHERE username=:uname";
        return $sql;
    }
}

class Server
{
    public function adaptive_server()
    {
        return $_SERVER["REQUEST_METHOD"] == "POST";
    }
}
