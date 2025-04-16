<?php
require_once "config.php";
class Nonselect extends Config
{
    public function nonsel($qry)
    {
        $selstmt = $this->conn();
        if($selstmt->query($qry))
        {
            $res=1;
        }
        else
        {
            $res=0;
            
        }
        return $res;
    }
}