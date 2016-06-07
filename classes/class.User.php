<?php

Class User {
    private $id;
    
    function User () {
        global $database;
        $this->database = $database;
    }
    
    static function findByID($id){
        global $database;
        $sql = "SELECT id, username FROM users where id = :id";
        $params = array('id' => $id);
        $users = $database->queryObject('User', $sql, $params);

        if(!empty($users)) {
            return $users[0];
        }
        else {
            return FALSE;
        }
    }
    
    static function authenticate ($username, $password) {
        global $database;
        $sql = "SELECT id FROM users where username = :username AND password = :password";
        $params = array('username' => $username, 'password' => $password);
        $users = $database->queryObject('User', $sql, $params);

        if(!empty($users)) {
            $_SESSION['uid'] = $users[0]->id;
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
}


