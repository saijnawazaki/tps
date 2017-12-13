<?php

namespace Sei\Model;

use Sei\Core\Model;

class Linkermdl extends Model
{

    public function checkuser($x, $z)
    {
        $sql = "SELECT username FROM pengguna WHERE username = :x AND password = :z";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x, ':z' => $z);
        $query->execute($parameters);

        return $query->rowCount();
    }


}
