<php

class DB {
    $type='mysql';
    $conn=null;
    $user='';
    $pass='';
    
    public function setUser($user=null) {
        if($user===null) return false;
        $this->user = $user;
    }
    public function setPass($pass=null) {
        if($pass === null) return false;
        $this->pass = $pass;
    }
    public function connect() {
        if(($this->conn = mysql_connect('localhost', $this->user, $this->pass)) == false) return false;
        return true;
    }
}  

?>