<?php
/**
 * User: Freddy
 * Date: 7/20/14
 */

class db {
    function insert($table,$column,$value){
        try {
            $dbh = new PDO('mysql:dbname=absensi;host=localhost', 'root', '');
        } catch (PDOException $e) {
            echo "Error: Could not connect. " . $e->getMessage();
        }
        $sql = "INSERT INTO $table ($column) VALUES ($value)";
        $sth = $dbh->prepare($sql);
        $sth->execute(array('widgets'));
    }

    function update($table,$value,$condition){
        try {
            $dbh = new PDO('mysql:dbname=absensi;host=localhost', 'root', '');
        } catch (PDOException $e) {
            echo "Error: Could not connect. " . $e->getMessage();
        }
        $sql = "UPDATE $table SET $value WHERE $condition";
        $sth = $dbh->prepare($sql);
        $sth->execute(array('widgets'));
        $temp = $sth->fetch(PDO::FETCH_ASSOC);
    }

    function select($sql){
        // attempt a connection
        try {
            $dbh = new PDO('mysql:dbname=absensi;host=localhost', 'root', '');
        } catch (PDOException $e) {
            echo "Error: Could not connect. " . $e->getMessage();
        }
        // set error mode
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // attempt some queries
        try {
            // execute SELECT query, store each row as an object

            $sth = $dbh->query($sql);
            while ($row = $sth->fetchObject()) {
                $data[] = $row;
            }
            return $data;
            // close connection, clean up
            unset($dbh);
        }
        catch (Exception $e) {
            echo ('ERROR: ' . $e->getMessage());
        }
    }
}