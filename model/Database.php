<?php



/**
 * Database class, defines generic methods to access database
 *
 * @author JFP
 */
class Database {

    private $connection;

    /**
     * This method establish a connection with the database
     */
    public function connect() {
        if (!isset($this->connection)) {
            $this->connection = (mysql_connect("localhost", "root", "")) or die(mysql_error());
            mysql_select_db("fynske_medier_task_db", $this->connection) or die(mysql_error());
        }
    }

    /**
     * This Method makes a query on the database
     * @param type $sql
     * @return type
     */
    public function query($sql) {
        $result = mysql_query($sql, $this->connection);
        if (!$result) {
            echo 'MySQL Error: ' . mysql_error();
            exit;
        }
        return $result;
    }

  /**
   * This method returns the number of rows of a resultset
   * @param type $result
   * @return boolean
   */

    function numberOfRows($result) {
        if (!is_resource($result))
            return false;
        return mysql_num_rows($result);
    }

    /**
     * This method returns an array with the resultset
     * @param type $result
     * @return boolean
     */

    function fetch_assoc($result) {
        if (!is_resource($result))
            return false;
        return mysql_fetch_assoc($result);
    }

   /**
    * This method closes the database connection
    */

    public function disconnect() {
        mysql_close();
    }

}
