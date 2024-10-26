<?php
class UserModel {
    private $con;

    public function __construct($con) {
        $this->con = $con;
    }

    public function login($identifier) {
        $query = "SELECT * FROM users WHERE username = ? OR email = ?";
        $stmt = $this->con->prepare($query);
        $stmt->execute([$identifier, $identifier]); 
    
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }
    
    public function register($firstName, $lastName, $username, $password, $email) {
        $query = "INSERT INTO users (first_name, last_name, username, password, email) 
                  VALUES (:first_name, :last_name, :username, :password, :email)";
        $stmt = $this->con->prepare($query);

        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':last_name', $lastName);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);

        try {
            $stmt->execute();
            return "Registration successful";
        } catch (PDOException $e) {
            return "Registration failed: " . $e->getMessage();
        }
    }
}
?>
