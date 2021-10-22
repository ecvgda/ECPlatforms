<?php


namespace App\Models;


class User
{
    private $user_name;
    private $email;
    private $password;
    private $age;

    /**
     * User constructor.
     * @param $user_name
     * @param $email
     * @param $password
     * @param $age
     */
    public function __construct($user_name = null, $email = null, $password = null, $age = null)
    {
        $this->user_name = $user_name;
        $this->email = $email;
        $this->password = $password;
        $this->age = $age;
    }


    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name): void
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }


}