<?php
/**
 * User: Freddy
 * Date: 6/3/14
 */


class Department {
    private $department_id;
    private $department_name;

    /**
     * @param mixed $department_id
     */
    public function setDeptId($department_id)
    {
        $this->department_id = $department_id;
    }

    /**
     * @return mixed
     */
    public function getDeptId()
    {
        return $this->department_id;
    }

    /**
     * @param mixed $department_name
     */
    public function setDeptName($department_name)
    {
        $this->department_name = $department_name;
    }

    /**
     * @return mixed
     */
    public function getDeptName()
    {
        return $this->department_name;
    }

    public function insert()
	{
        $db->insert();
		try {
			$dbh = new PDO('mysql:dbname=absensi;host=localhost', 'root', '');
		} catch (PDOException $e) {
			echo "Error: Could not connect. " . $e->getMessage();
		}
		$sql = "INSERT INTO department (department_id, department_name) VALUES ('".$this->department_id."','".$this->department_name."')";
		$sth = $dbh->prepare($sql);
		$sth->execute(array('widgets'));
		$temp = $sth->fetch(PDO::FETCH_ASSOC);
		echo "1";
	}

    public function update()
    {
        try {
            $dbh = new PDO('mysql:dbname=absensi;host=localhost', 'root', '');
        } catch (PDOException $e) {
            echo "Error: Could not connect. " . $e->getMessage();
        }
        $sql = "UPDATE department SET department_name='".$this->department_name."' WHERE department_id='".$this->department_id."'";
        $sth = $dbh->prepare($sql);
        $sth->execute(array('widgets'));
        $temp = $sth->fetch(PDO::FETCH_ASSOC);
        echo "1";
    }
} 