<?php
require_once "config.php";
class Select extends Config
{
    public function sel($qry)
    {
        $selstmt = $this->conn()->query($qry);
        while ($row = $selstmt->fetch()) {
            $res[] = $row;
        }
        //return $res;
        if (empty($res)) {}
        else { return $res; }
    }
}
