<?PHP

namespace controllers;

class SignupController{
    private $uid;
    private $password;
    private $passwordrepeat;
    private $email;
public function __construct($uid, $password, $passwordrepeat, $email){

    $this->uid = $uid;
    $this->password = $password;
    $this->passwordrepeat = $passwordrepeat;
    $this->email = $email;
}
private function emptyInput(){ //檢查是否為空
    $result = '';
    if(empty($this->uid || $this->password || $this->passwordrepeat || $this->email)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}
private function invalidUid(){ //檢查username格式是否正確
    $result = '';
    if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}

private function invalidEmail(){ //檢查mail格式是否正確
    $result = '';
    if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}

private function passwordMatch(){ //檢查mail格式是否正確
    $result = '';
    if(!$this->password !== $this->passwordrepeat){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}


}