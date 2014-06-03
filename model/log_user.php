<?php
/**
 * User: Freddy
 * Date: 6/3/14
 */

namespace model;


class log_user {
    private $log_user_id;
    private $user_user_id;
    private $log_time;

    /**
     * @param mixed $log_time
     */
    public function setLogTime($log_time)
    {
        $this->log_time = $log_time;
    }

    /**
     * @return mixed
     */
    public function getLogTime()
    {
        return $this->log_time;
    }

    /**
     * @param mixed $log_user_id
     */
    public function setLogUserId($log_user_id)
    {
        $this->log_user_id = $log_user_id;
    }

    /**
     * @return mixed
     */
    public function getLogUserId()
    {
        return $this->log_user_id;
    }

    /**
     * @param mixed $user_user_id
     */
    public function setUserUserId($user_user_id)
    {
        $this->user_user_id = $user_user_id;
    }

    /**
     * @return mixed
     */
    public function getUserUserId()
    {
        return $this->user_user_id;
    }

    
} 