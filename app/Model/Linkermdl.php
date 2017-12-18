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

    public function getuser($x, $z)
    {
        $sql = "SELECT * FROM pengguna WHERE username = :x AND password = :z";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x, ':z' => $z);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function getuserdx($x)
    {
        $sql = "SELECT * FROM pengguna, pengguna_permainan WHERE pengguna_permainan.username = pengguna.username AND pengguna.username = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function checkplayer($x)
    {
        $sql = "SELECT username FROM pengguna_permainan WHERE username = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);

        return $query->rowCount();
    }

    public function getplayer($x)
    {
        $sql = "SELECT * FROM pengguna_permainan WHERE username = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function upuser_session($x, $z)
    {

        $sql = "UPDATE pengguna SET session_id = :x WHERE username = :z";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x, ':z' => $z);
        $query->execute($parameters);
    }

    public function insplayer($x)
    {

        $sql = "INSERT INTO pengguna_permainan (username, exp, gold) VALUES (:x, 0, 0)";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);
    }


}
