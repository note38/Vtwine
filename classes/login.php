<?php

include 'connect.php';

class UserService
{

    private $email;
    private $password;

    public function login($email, $password)
    {
        global $connection;
        $this->email = mysql_real_escape_string($connection, $email);
        $this->password = mysql_real_escape_string($connection, $password);

        $user_id = $this->_checkCredentials();
        if($user_id){
            $_SESSION['user_id'] = $user_id;
            return $user_id;
        } else {
            echo "user not found!";
        }
        return false;
    }

    protected function _checkCredentials()
    {
        $query = "SELECT *
                    FROM admins
                    WHERE email = '$this->email'";
        $result = mysql_query($query);
        if(!empty($result)){
            $user = mysql_fetch_assoc($result);
            $submitted_pass = sha1($user['salt'] . $this->password);
            if($submitted_pass == $user['password']){
                return $user['id'];
            } else{
                echo "no query found!";
            }
        }
        return false;
    }   
}

?>