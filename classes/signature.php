<?php
namespace ssp;
class signature
{
    private $conn;
    public $hash;
    public $file;
    /**
     * signature constructor.
     * @param $conn \mysqli
     * @param $hash string
     */
    public function __construct($conn,$hash)
    {
        $this->conn=$conn;
        $this->hash=$hash;
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $esc_hash=mysqli_escape_string($conn,$hash);
        $sql = "SELECT * FROM signatures WHERE hash='$esc_hash';";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }
    public function add() {

    }
    public function submitter() {}
}