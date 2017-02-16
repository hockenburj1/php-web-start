<?php

Class User {
    
    function __construct ($userID = 0) {
        global $database;
        $this->database = $database;

		if($userID != 0) {
			$sql = "SELECT id, username FROM users where id = :id";
			$params = array('id' => $userID);
			$users = $this->database->query($sql, $params);
			$user = $users[0];

			$this->userID = $user['id'];
			$this->username = $user['username'];
		}
    }
    
    /*static function getUser($id){
        global $database;
        $sql = "SELECT id, username FROM users where id = :id";
        $params = array('id' => $id);
        $users = $database->query($sql, $params);

        if(!empty($users)) {
            return $users[0];
        }
        else {
            return FALSE;
        }
    }*/
    
    static function authenticate ($username, $password) {
        global $database;
        $sql = "SELECT id FROM users where username = :username AND password = :password";
        $params = array('username' => $username, 'password' => $password);
        $users = $database->query($sql, $params);

        if(!empty($users)) {
            $_SESSION['uid'] = $users[0]['id'];
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
}


