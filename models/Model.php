<?php
// Model.php
class Model
{
    private $db;
    protected $table;

    public function __construct()
    {
        $config = include($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

        try {
            $this->db = new mysqli(
                $config["host"],
                $config["username"],
                $config["password"],
                $config["dbname"]
            );
        } catch (mysqli_sql_exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function all()
    {
        $res = $this->db->query("SELECT * FROM {$this->table}");
        $data = $res->fetch_all(MYSQLI_ASSOC);

        return $data;
    }

    public function find($id)
    {
        $res = $this->db->query("SELECT * FROM {$this->table} WHERE id = $id");
        $data = $res->fetch_assoc();

        return $data;
    }

    public function create($data)
    {
        $keys = array_keys($data);
        $keysString = implode(", ", $keys);

        $values = array_map(function ($value) {
            return "'" . $this->db->real_escape_string($value) . "'";
        }, array_values($data));
        $valuesString = implode(", ", $values);

        $query = "INSERT INTO {$this->table} ($keysString) VALUES ($valuesString)";

        $res = $this->db->query($query);

        if ($res) {
            $lastId = $this->db->insert_id;
            return $this->find($lastId);
        } else {
            return false;
        }
    }


public function update($data)
{
    $updatePairs = [];

    foreach ($data as $key => $value) {
        $escapedValue = $this->db->real_escape_string($value);
        $updatePairs[] = "$key = '$escapedValue'";
    }

    $id = $this->db->real_escape_string($data['id']);

    $query = "UPDATE {$this->table} SET " . implode(", ", $updatePairs) . " WHERE id = '$id'";

    $this->db->query($query);
}


    public function destroy($id)
    {
        $id = $this->db->real_escape_string($id);
        $this->db->query("DELETE FROM {$this->table} WHERE id = '$id'");
    }

    public function getByCorreo($correo)
    {
        $correo = $this->db->real_escape_string($correo);
        $query = "SELECT * FROM {$this->table} WHERE correo = '$correo'";
        $res = $this->db->query($query);
        return $res->fetch_assoc();
    }
}
?>