<?php

/* mysqli_database.php */

class mysqli_database
{
    private mysqli $connect;

    public function selectValue($key, $cond)
    {
        $sql_stmt = "SELECT " . $key . " FROM table WHERE " . $cond;
        return @mysqli_query($this->connect, $sql_stmt); /* *SINK* */
    }
}
