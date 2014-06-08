<?php
/**
 * User: Freddy
 * Date: 6/3/14
 */

namespace model;


class presence {
    private $presence_id;
    private $schedule_schedule_id;
    private $member_member_id;
    private $presence_status;

    /**
     * @param mixed $member_member_id
     */
    public function setMemberMemberId($member_member_id)
    {
        $this->member_member_id = $member_member_id;
    }

    /**
     * @return mixed
     */
    public function getMemberMemberId()
    {
        return $this->member_member_id;
    }

    /**
     * @param mixed $presence_id
     */
    public function setPresenceId($presence_id)
    {
        $this->presence_id = $presence_id;
    }

    /**
     * @return mixed
     */
    public function getPresenceId()
    {
        return $this->presence_id;
    }

    /**
     * @param mixed $presence_status
     */
    public function setPresenceStatus($presence_status)
    {
        $this->presence_status = $presence_status;
    }

    /**
     * @return mixed
     */
    public function getPresenceStatus()
    {
        return $this->presence_status;
    }

    /**
     * @param mixed $schedule_schedule_id
     */
    public function setScheduleScheduleId($schedule_schedule_id)
    {
        $this->schedule_schedule_id = $schedule_schedule_id;
    }

    /**
     * @return mixed
     */
    public function getScheduleScheduleId()
    {
        return $this->schedule_schedule_id;
    }


} 