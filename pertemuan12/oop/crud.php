<<<<<<< HEAD
<?php
require_once "Database.php";

class Crud
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function create($jabatan, $keterangan)
    {
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        $res = $this->db->conn->query($query);

        return $res;
    }

    public function read()
    {
        $query = "SELECT*FROM jabatan";
        $result = $this->db->conn->query($query);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }

    public function readById($id)
    {
        $query = "SELECT * FROM jabatan WHERE id = '$id'";
        $result = $this->db->conn->query($query);

        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function udpate($id, $jabatan, $keterangan)
    {
        $query = "UPDATE jabatan SET jabatan='$jabatan', keterangan='$keterangan' WHERE id='$id'";
        $result = $this->db->conn->query($query);

        return $result;
    }

    public function delete($id)
    {
        $query = "DELETE FROM jabatan WHERE id='$id'";
        $result = $this->db->conn->query($query);

        return $result;
    }
}
=======
<?php
require_once "Database.php";

class Crud
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function create($jabatan, $keterangan)
    {
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        $res = $this->db->conn->query($query);

        return $res;
    }

    public function read()
    {
        $query = "SELECT*FROM jabatan";
        $result = $this->db->conn->query($query);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }

    public function readById($id)
    {
        $query = "SELECT * FROM jabatan WHERE id = '$id'";
        $result = $this->db->conn->query($query);

        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    public function udpate($id, $jabatan, $keterangan)
    {
        $query = "UPDATE jabatan SET jabatan='$jabatan', keterangan='$keterangan' WHERE id='$id'";
        $result = $this->db->conn->query($query);

        return $result;
    }

    public function delete($id)
    {
        $query = "DELETE FROM jabatan WHERE id='$id'";
        $result = $this->db->conn->query($query);

        return $result;
    }
}
>>>>>>> e22765833210c7ed994a68d514f436d60f4db267
?>