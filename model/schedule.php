<?php
/**
 * User: Freddy
 * Date: 6/3/14
 */

namespace model;


class schedule {
    private $schedule_id;
    private $date;
    private $information;

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $information
     */
    public function setInformation($information)
    {
        $this->information = $information;
    }

    /**
     * @return mixed
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @param mixed $schedule_id
     */
    public function setScheduleId($schedule_id)
    {
        $this->schedule_id = $schedule_id;
    }

    /**
     * @return mixed
     */
    public function getScheduleId()
    {
        return $this->schedule_id;
    }

} 