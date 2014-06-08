<?php
/**
 * User: Freddy
 * Date: 6/3/14
 */

namespace model;


class organization {
    private $org_id;
    private $org_name;
    private $org_category_org_category_id;
    private $org_status;

    /**
     * @param mixed $org_category_org_category_id
     */
    public function setOrgCategoryOrgCategoryId($org_category_org_category_id)
    {
        $this->org_category_org_category_id = $org_category_org_category_id;
    }

    /**
     * @return mixed
     */
    public function getOrgCategoryOrgCategoryId()
    {
        return $this->org_category_org_category_id;
    }

    /**
     * @param mixed $org_id
     */
    public function setOrgId($org_id)
    {
        $this->org_id = $org_id;
    }

    /**
     * @return mixed
     */
    public function getOrgId()
    {
        return $this->org_id;
    }

    /**
     * @param mixed $org_name
     */
    public function setOrgName($org_name)
    {
        $this->org_name = $org_name;
    }

    /**
     * @return mixed
     */
    public function getOrgName()
    {
        return $this->org_name;
    }

    /**
     * @param mixed $org_status
     */
    public function setOrgStatus($org_status)
    {
        $this->org_status = $org_status;
    }

    /**
     * @return mixed
     */
    public function getOrgStatus()
    {
        return $this->org_status;
    }
} 