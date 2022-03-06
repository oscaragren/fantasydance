<?php

class Score {

    private $pdo;
    private $stmt;
    private $error;

    function __construct() {
        try {
            $this->pdo = new PDO(
                "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";", DB_USER, DB_PASSWORD
            );
        } catch (PDOException $e ){
            print "Error!:" . $e->getMessage() . "</br>"; // Kanske ändra här sen!
        }
    }

    function __destruct() {
        $this->pdo = null;
        $this->stmt = null;
    }

    // ADD SCORE
    function add($id, $user, $score, $time) {
        try {
            $this->stmt = $this->pdo->prepare(
                "INSERT INTO 'scoreboard' ('comp_id', 'user', 'score', 'comp_time') VALUES (?,?,?,?);"
            );
            $this->stmt->execute([$id, $user, $score, $time]);
            return true;
        } catch (Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    // GET SCORE
    function get($id) {
        $this->stmt = $this->pdo->prepare(
            'SELECT * FROM "scoreboard" WHERE "comp_id"=?;'
        );
        $this->stmt->execute([$id]);
        return $this->stmt->fetchAll();
    }

    // CHECK LATEST SCORE UPDATE
    function check($id) {
        $this->stmt = $this->pdo->prepare(
            "SELECT UNIX_TIMESTAMP('comp_time') 'unix' FROM 'scoreboard' WHERE 'comp_id'=? ORDER BY 'comp_time' DESC LIMIT 1;"
        );
        $this->stmt->execute([$id]);
        $last = $this->stmt->fetch();
        return is_array($last) ? $last["unix"] : 0;
    }

}
// DATABASE SETTINGS
define("DB_HOST", "127.0.0.1");
define("DB_NAME", "fantasydans");
define("DB_USER", "root");
define("DB_PASSWORD", "");
