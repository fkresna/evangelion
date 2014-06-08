<?php
/**
 * User: Freddy
 * Date: 6/3/14
 */

namespace model;


class org_category {
    private $org_category_id;
    private $org_category_name;

    /**
     * @param mixed $org_category_id
     */
    public function setOrgCategoryId($org_category_id)
    {
        $this->org_category_id = $org_category_id;
    }

    /**
     * @return mixed
     */
    public function getOrgCategoryId()
    {
        return $this->org_category_id;
    }

    /**
     * @param mixed $org_category_name
     */
    public function setOrgCategoryName($org_category_name)
    {
        $this->org_category_name = $org_category_name;
    }

    /**
     * @return mixed
     */
    public function getOrgCategoryName()
    {
        return $this->org_category_name;
    }
} 