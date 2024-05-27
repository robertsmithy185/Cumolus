<?php
class Action{
    private $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }
    
    public function tambahkandataUser($username, $email, $password){
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        // Hash password

        if (strlen($password) < 8) {
            header("Location: Register.html?error=2");
            exit();
        }
        
        // Verifikasi Email
        try {
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0) {
                header("Location: Register.html?error=3");
                exit();
            }
        } catch (mysqli_sql_exception $e) {
            header("Location: Register.html?error=2");
            exit();
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        try {
            $stmt = $this->conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $hashed_password);
            $stmt->execute();
            header("Location: Login.html");
            exit();
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() == 1062) {
                header("Location: Register.html?error=1");
                exit();
            }
        }
        
        $this->conn->close();
    }
    public function cekDatauser($username, $password){
        try {
            $stmt = $this->conn->prepare("SELECT password FROM users WHERE username=?");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
        
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $hashed_password = $row['password'];
                
                if (password_verify($password, $hashed_password)) {
                    $_SESSION['username'] = $username;
                    header("Location: main.php");
                    exit();
                } else {
                    header("Location: Login.html?error=2");
                    exit();
                }
            } else {
                header("Location: Login.html?error=1");
                exit();
            }
        } catch (mysqli_sql_exception $e) {
            // Handle exceptions
            header("Location: Login.html?error=2");
            exit();
        }

        $this->conn->close();
    }
}
?>
