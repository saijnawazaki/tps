<?php

namespace Sei\Model;

use Sei\Core\Model;

class Universalmdl extends Model
{


    public function getserverdt()
    {
        $sql = "SELECT DATE_FORMAT(NOW(), '%Y-%m-%d %H:%i:%s') as jam";
        $query = $this->db->prepare($sql);

        $query->execute();
        return $query->fetch();
    }



}
