<?php

namespace Sei\Model;

use Sei\Core\Model;

class Universalmdl extends Model
{



    public function getachie()
    {
        $sql = "SELECT a.id_achi, a.achi_name, a.username, b.fullname, a.achi_konten, a.timestamp FROM penghargaan a, pengguna b WHERE a.username = b.username ORDER BY timestamp DESC";
        $query = $this->db->prepare($sql);

        $query->execute();

        return $query->fetchAll();
    }

    public function insachi($id, $nama, $user, $konten)
    {
        $sql = "INSERT INTO penghargaan (id_achi, achi_name, username, achi_konten) VALUES (:a, :b, :c, :d)";
        $query = $this->db->prepare($sql);
        $parameters = array(':a' => $id, ':b' => $nama, ':c' => $user, ':d' => $konten);
        $query->execute($parameters);

    }

    public function getserverdt()
    {
        $sql = "SELECT DATE_FORMAT(NOW(), '%Y-%m-%d %H:%i:%s') as jam";
        $query = $this->db->prepare($sql);

        $query->execute();
        return $query->fetch();
    }

    public function getplayernb()
    {
        $sql = "SELECT username, fullname FROM pengguna";
        $query = $this->db->prepare($sql);

        $query->execute();
        return $query->fetchAll();
    }

    public function getplayer($x)
    {
        $sql = "SELECT * FROM pengguna_permainan WHERE username = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function getplayersolo($x)
    {
        $sql = "SELECT a.username, a.fullname, b.exp, b.gold, c.lineid, c.nohp, c.email, c.pp FROM pengguna a, pengguna_permainan b, pengguna_detail c WHERE a.username = b.username AND a.username = c.username AND a.username = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function upplayerexp($x, $z)
    {
      $sql = "UPDATE pengguna_permainan SET exp = :x WHERE username = :z";
      $query = $this->db->prepare($sql);
      $parameters = array(':x' => $x, ':z' => $z);
      $query->execute($parameters);
    }

    public function upplayergold($x, $z)
    {
      $sql = "UPDATE pengguna_permainan SET gold = :x WHERE username = :z";
      $query = $this->db->prepare($sql);
      $parameters = array(':x' => $x, ':z' => $z);
      $query->execute($parameters);
    }

}
