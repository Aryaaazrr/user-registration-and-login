<?php
class Database
{
    private $dbFile;
    public $conn;
  
    public function __construct() {
        $this->dbFile = __DIR__ . '/database/imago_authentication.db';
        
        try {
           if (!is_dir(dirname($this->dbFile))) {
                mkdir(dirname($this->dbFile), 0777, true);
            }

            $this->conn = new PDO("sqlite:" . $this->dbFile);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->conn->exec("
                CREATE TABLE IF NOT EXISTS users (
                    id_users INTEGER PRIMARY KEY AUTOINCREMENT,
                    username TEXT NOT NULL,
                    email TEXT NOT NULL UNIQUE,
                    password TEXT NOT NULL,
                    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
                )
            ");
        } catch (PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }
    }
  
    // Cek data input
    public function validate($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    // Erorr and Success Alert
    public function showMessage($type, $message)
    {
      if ($type == 'danger') {
        return '<div class="alert ' . $type . '">
                  <p class="danger">' . $message . '</p>
                  </div>';
      } else {
        return '<div class="alert ' . $type . '">
                  <p class="success">' . $message . '</p>
                </div>';
      }
    }
}

$db = new Database();