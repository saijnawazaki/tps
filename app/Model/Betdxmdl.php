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

    public function getbdxlog()
    {
        $sql = "SELECT * FROM betdx_log ORDER BY ts_konten DESC LIMIT 10";
        $query = $this->db->prepare($sql);

        $query->execute();

        return $query->fetchAll();
    }

    public function getbdxlog_detail()
    {
        $sql = "SELECT * FROM betdx_log ORDER BY ts_konten DESC";
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

    public function cekbetnya($x)
    {
      $sql = "SELECT username FROM betdx_player WHERE bdx_bet = :x";
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

    public function clearbdxlog(){
      //TRUNCATE TABLE
      $sql = "TRUNCATE TABLE betdx_log";
      $query = $this->db->prepare($sql);

      $query->execute();
    }

    public function clearbdxplayer(){
      //TRUNCATE TABLE
      $sql = "TRUNCATE TABLE betdx_player";
      $query = $this->db->prepare($sql);

      $query->execute();
    }

    public function getbdxbetpower($x)
    {
      $sql = "SELECT bdx_power FROM betdx_engine WHERE bdx_id = :x";
      $query = $this->db->prepare($sql);
      $parameters = array(':x' => $x);
      $query->execute($parameters);

      return $query->fetch();
    }

    public function getbdxenginev($x)
    {
      $sql = "SELECT * FROM betdx_engine WHERE bdx_id = :x";
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

    public function insbdxbetlog($konten, $icon)
    {
      $sql = "INSERT INTO betdx_log(log_konten, icon_konten) VALUES (:konten, :icon)";
      $query = $this->db->prepare($sql);
      $parameters = array(':konten' => $konten, ':icon' => $icon);
      $query->execute($parameters);
    }

    public function upbdxbetengine($z, $x, $c, $v, $b, $n, $m, $a, $s, $d, $f)
    {
      $sql = "UPDATE betdx_engine SET bdx_max = :z, bdx_min = :x, bdx_real = :c, bdx_exp = :v, bdx_gold = :b, bdx_gift = :n, bdx_sponsor = :m, bdx_end = :a, bdx_power = :d, bdx_req = :f WHERE bdx_id = :s";
      $query = $this->db->prepare($sql);
      $parameters = array(':z' => $z, ':x' => $x, ':c' => $c, ':v' => $v, ':b' => $b, ':n' => $n, ':m' => $m, ':a' => $a, ':s' => $s, ':d' => $d, ':f' => $f);
      $query->execute($parameters);
    }

    public function upbdxbet($x, $z)
    {
      $sql = "UPDATE betdx_player SET bdx_bet = :x WHERE username = :z";
      $query = $this->db->prepare($sql);
      $parameters = array(':x' => $x, ':z' => $z);
      $query->execute($parameters);
    }

    public function uprealbet($x, $z)
    {
      $sql = "UPDATE betdx_engine SET bdx_real = :x WHERE bdx_id = :z";
      $query = $this->db->prepare($sql);
      $parameters = array(':x' => $x, ':z' => $z);
      $query->execute($parameters);
    }

    public function upbetdxpower($x, $z)
    {
      $sql = "UPDATE betdx_engine SET bdx_power = :x WHERE bdx_id = :z";
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
