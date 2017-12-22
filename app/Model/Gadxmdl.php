<?php

namespace Sei\Model;

use Sei\Core\Model;

class Gadxmdl extends Model
{
    public function getengine()
    {
        $sql = "SELECT * FROM gadx_engine";
        $query = $this->db->prepare($sql);

        $query->execute();

        return $query->fetch();
    }

    public function getplayer()
    {
        $sql = "SELECT a.username, b.fullname, c.exp, c.gold FROM gadx_player a, pengguna b, pengguna_permainan c WHERE a.username = b.username AND a.username = c.username ORDER BY a.timestamp DESC";
        $query = $this->db->prepare($sql);

        $query->execute();

        return $query->fetchAll();
    }

    public function insplayer($user){
      $sql = "INSERT INTO gadx_player(username) VALUES (:user)";
      $query = $this->db->prepare($sql);
      $parameters = array(':user' => $user);
      $query->execute($parameters);
    }

}
