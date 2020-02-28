<?php

require "./connection.php";

class Login {
    private $table = "users";
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function login() {

        global $connection;

        $query = "SELECT * FROM " . $this->table .  " WHERE username = ?";

        $stmt = $connection->prepare($query);

        $this->username = htmlspecialchars(strip_tags($this->username));

        $stmt->bind_param("s", $this->username);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows==1){
            while ($row = $result->fetch_assoc()) {
                if (password_verify($this->password, $row['password'])){
                    session_start();
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['first_name'] = $row['first_name'];
                    $_SESSION['last_name'] = $row['last_name'];
                    echo "success";
                }
            }
        }
        $stmt->close();
        $connection->close();



//        if($stmt->execute()) {
////            if ($stmt->num_rows>0&&password_verify($this->password, password_hash($this->password, PASSWORD_DEFAULT))) {
//
//        }
    }
}