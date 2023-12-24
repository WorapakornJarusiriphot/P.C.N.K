<?php
class Community {
    private $ConDB;

    public function __construct()
    {
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getALL() {
        $sql = "SELECT * FROM community";
        $query = $this->ConDB->prepare($sql);
        if ($query->execute()) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
            return false;
        }
    }

    public function getCommunity($id) {
        $sql = "SELECT * FROM community where id = " . $id;
        $query = $this->ConDB->prepare($sql);
        if ($query->execute()) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } else {
            return false;
        }
    }

    public function getCommunityByLocation($location) {
        $sql = "SELECT * FROM community WHERE location = " . $location;
        $query = $this->ConDB->prepare($sql);
        if ($query->execute()) {
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result;
        } else {
            return false;
        }
    }

    public function AddCommunity($data) {//
        $sql = "INSERT INTO `community` (`id`, `name`, `activity`, `location`, `images`)";
        $sql .=  "VALUES ('', :name, :activity, :location, :images);";
        $query = $this->ConDB->prepare($sql);
        if ($query->execute($data)) { //
            return true;
        } else {
            return false;
        }
    }


    public function UpdateCommunity($id, $name, $activity, $location, $images) {
        $sql = "UPDATE community SET name = '$name', activity = '$activity', location = '$location', images = '$images' WHERE id = '$id';";
        $query = $this->ConDB->prepare($sql);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function DelCommunity($id) {
        $sql = "DELETE FROM community where id = '" . $id . "'";
        $query = $this->ConDB->prepare($sql);
        if ($query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>