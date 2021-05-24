<?php

include_once "db.php";

class user extends db
{
    protected $tbl = 'users';

    public function login($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        $this->setTbl($this->tbl);
        $user_data = $this->searchData('email', $email);
        if ($password == $user_data->password) {
            $_SESSION['id'] = $user_data->id;
            $_SESSION['name'] = $user_data->name;
            $_SESSION['email'] = $user_data->email;
            if($user_data->isAdmin == 1){
                header("location:panel/admin/index.php?name=$_SESSION[name]");
            }
            //header("location:news.php");
        }
    }
    public function signup($data)
    {
        $email=$data['email'];
        $this->setTbl($this->tbl);
        $user_data = $this->searchData('email', $email);
        if(isset($user_data->email)){
            echo "This email had been exist";
        }else{
            $filds=array_keys($data);
            $this->insertData($filds,$data);
            $_SESSION['name'] = $data['name'];
            echo $_SESSION['name'];
        }
    }

    public function logout()
    {
        session_destroy();
        header("location:index.php?logout=ok");
    }
}