<?php

namespace Sei\Model;

use Sei\Core\Model;

class Betdxmdl extends Model
{

    public function getbdxengine()
    {
        $sql = "SELECT * FROM betdx_engine";
        $query = $this->db->prepare($sql);

        $query->execute();

        return $query->fetch();
    }

    public function getbdxplayer()
    {
        $sql = "SELECT * FROM betdx_player, pengguna, pengguna_permainan WHERE betdx_player.username = pengguna.username AND betdx_player.username = pengguna_permainan.username";
        $query = $this->db->prepare($sql);

        $query->execute();

        return $query->fetchAll();
    }

    public function cekbdxbet($x)
    {
      $sql = "SELECT username FROM betdx_player WHERE username = :x";
      $query = $this->db->prepare($sql);
      $parameters = array(':x' => $x);
      $query->execute($parameters);
      return $query->rowCount();
    }

    public function getbdxbet($x)
    {
      $sql = "SELECT bdx_rbet FROM betdx_player WHERE username = :x";
      $query = $this->db->prepare($sql);
      $parameters = array(':x' => $x);
      $query->execute($parameters);

      return $query->fetch();
    }

    public function insbdxbet($y, $x, $z)
    {
      $sql = "INSERT INTO betdx_player(username, bdx_bet, bdx_rbet) VALUES (:y, :x, :z)";
      $query = $this->db->prepare($sql);
      $parameters = array(':y' => $y, ':x' => $x, ':z' => $z);
      $query->execute($parameters);
    }

    public function upbdxbet($x, $z)
    {
      $sql = "UPDATE betdx_player SET bdx_bet = :x WHERE username = :z";
      $query = $this->db->prepare($sql);
      $parameters = array(':x' => $x, ':z' => $z);
      $query->execute($parameters);
    }

    public function upbdxrbet($x, $z)
    {
      $sql = "UPDATE betdx_player SET bdx_rbet = :x WHERE username = :z";
      $query = $this->db->prepare($sql);
      $parameters = array(':x' => $x, ':z' => $z);
      $query->execute($parameters);
    }



}
