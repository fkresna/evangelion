<?php
/**
 * User: Freddy
 * Date: 6/3/14
 */

namespace model;


class user {
    private $user_id;
    private $user_name;
    private $password;
    private $user_role_user_role_id;
    private $user_status;

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_role_user_role_id
     */
    public function setUserRoleUserRoleId($user_role_user_role_id)
    {
        $this->user_role_user_role_id = $user_role_user_role_id;
    }

    /**
     * @return mixed
     */
    public function getUserRoleUserRoleId()
    {
        return $this->user_role_user_role_id;
    }

    /**
     * @param mixed $user_status
     */
    public function setUserStatus($user_status)
    {
        $this->user_status = $user_status;
    }

    /**
     * @return mixed
     */
    public function getUserStatus()
    {
        return $this->user_status;
    }
} 