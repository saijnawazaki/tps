<?php

namespace Sei\Model;

use Sei\Core\Model;

class Wibuminemdl extends Model
{
  //
  public function insbattlefield($no, $username, $fm, $dm)
  {
      $sql = "INSERT INTO wibumine_battlefield (no, username, force_mine, dmg_mine)
      VALUES (:no, :username, :fm, :dm)";
      $query = $this->db->prepare($sql);
      $parameters = array(':no' => $no, ':username' => $username, ':fm' => $fm, ':dm' => $dm);
      $query->execute($parameters);
  }

  public function cekplayerav($x)
  {
    $sql = "SELECT username FROM wibumine_player WHERE username = :x";
    $query = $this->db->prepare($sql);
    $parameters = array(':x' => $x);
    $query->execute($parameters);
    return $query->rowCount();
  }

  public function upmine($no, $username, $fm, $dm)
  {
      $sql = "UPDATE wibumine_battlefield SET username = :username, force_mine = :fm, dmg_mine = :dm WHERE no = :no";
      $query = $this->db->prepare($sql);
      $parameters = array(':no' => $no, ':username' => $username, ':fm' => $fm, ':dm' => $dm);
      $query->execute($parameters);
  }

  public function getbattlefield(){
    $sql = "SELECT * FROM wibumine_battlefield ORDER BY no + 1";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function inslog($konten, $icon)
  {
    $sql = "INSERT INTO wibumine_log(log_konten, icon_konten) VALUES (:konten, :icon)";
    $query = $this->db->prepare($sql);
    $parameters = array(':konten' => $konten, ':icon' => $icon);
    $query->execute($parameters);
  }

  public function insplayer($username, $hp, $score)
  {
    $sql = "INSERT INTO wibumine_player(username, hp, score) VALUES (:username, :hp, :score)";
    $query = $this->db->prepare($sql);
    $parameters = array(':username' => $username, ':hp' => $hp, ':score' => $score);
    $query->execute($parameters);
  }

  public function cekmineusername($x)
  {
    $sql = "SELECT username FROM wibumine_battlefield WHERE no = :x";
    $query = $this->db->prepare($sql);
    $parameters = array(':x' => $x);
    $query->execute($parameters);
    return $query->fetch();
  }

  public function cekmineforce($x)
  {
    $sql = "SELECT force_mine, username, dmg_mine FROM wibumine_battlefield WHERE no = :x";
    $query = $this->db->prepare($sql);
    $parameters = array(':x' => $x);
    $query->execute($parameters);
    return $query->fetch();
  }

  public function cekminer($x)
  {
    $sql = "SELECT username, hp, score FROM wibumine_player WHERE username = :x";
    $query = $this->db->prepare($sql);
    $parameters = array(':x' => $x);
    $query->execute($parameters);
    return $query->fetch();
  }

  public function uphpminer($x, $z)
  {
    $sql = "UPDATE wibumine_player SET hp = :x WHERE username = :z";
    $query = $this->db->prepare($sql);
    $parameters = array(':x' => $x, ':z' => $z);
    $query->execute($parameters);

  }

  public function upscoreminer($x, $z)
  {
    $sql = "UPDATE wibumine_player SET score = :x WHERE username = :z";
    $query = $this->db->prepare($sql);
    $parameters = array(':x' => $x, ':z' => $z);
    $query->execute($parameters);

  }



  public function cekminerall()
  {
    $sql = "SELECT * FROM wibumine_player";
    $query = $this->db->prepare($sql);
    return $query->fetchAll();
  }
  //
}
