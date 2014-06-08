<?php
/**
 * User: Freddy
 * Date: 6/3/14
 */

namespace model;


class user_role {
    private $user_role_id;
    private $user_role_name;

    /**
     * @param mixed $user_role_id
     */
    public function setUserRoleId($user_role_id)
    {
        $this->user_role_id = $user_role_id;
    }

    /**
     * @return mixed
     */
    public function getUserRoleId()
    {
        return $this->user_role_id;
    }

    /**
     * @param mixed $user_role_name
     */
    public function setUserRoleName($user_role_name)
    {
        $this->user_role_name = $user_role_name;
    }

    /**
     * @return mixed
     */
    public function getUserRoleName()
    {
        return $this->user_role_name;
    }
} 