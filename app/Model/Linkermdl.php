<?php

namespace Sei\Model;

use Sei\Core\Model;

class Linkermdl extends Model
{
    /*  REG */
    public function insuser($username, $password, $fullname, $ta)
    {
        $sql = "INSERT INTO pengguna (username, password, fullname, type_account) VALUES (:username, :password, :fullname, :ta)";
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username, ':password' => $password, ':fullname' => $fullname, ':ta' => $ta);
        $query->execute($parameters);
    }

    public function insuserdetail($username, $lineid, $nohp, $email, $pp)
    {
        $sql = "INSERT INTO pengguna_detail (username, lineid, nohp, email, pp) VALUES (:username, :lineid, :nohp, :email, :pp)";
        $query = $this->db->prepare($sql);
        $parameters = array(':username' => $username, ':lineid' => $lineid, ':nohp' => $nohp, ':email' => $email, ':pp' => $pp);
        $query->execute($parameters);
    }

    public function cekuserdx($x)
    {
        $sql = "SELECT username FROM pengguna WHERE username = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);

        return $query->rowCount();
    }

    public function cekuserlinedx($x)
    {
        $sql = "SELECT username FROM pengguna_detail WHERE lineid = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);

        return $query->rowCount();
    }

    public function cekuserlinedxfx($x)
    {
        $sql = "SELECT username FROM pengguna_detail WHERE lineid = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);

        return $query->fetch();
    }

    public function cekuseremaildx($x)
    {
        $sql = "SELECT username FROM pengguna_detail WHERE email = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);

        return $query->rowCount();
    }

    public function cekuseremaildxfx($x)
    {
        $sql = "SELECT username FROM pengguna_detail WHERE email = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);

        return $query->fetch();
    }

    public function cekusernohpdx($x)
    {
        $sql = "SELECT username FROM pengguna_detail WHERE nohp = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);

        return $query->rowCount();
    }

    public function cekusernohpdxfx($x)
    {
        $sql = "SELECT username FROM pengguna_detail WHERE nohp = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);

        return $query->fetch();
    }

    /* LOGIN */
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

    public function getuserdeta($x)
    {
        $sql = "SELECT * FROM pengguna_detail WHERE username = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function getuserdetafull($x)
    {
        $sql = "SELECT a.username, a.fullname, b.exp, b.gold, c.pp  FROM pengguna a, pengguna_permainan b, pengguna_detail c
        WHERE a.username = b.username AND a.username = c.username AND a.username = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
        $query->execute($parameters);
        return $query->fetch();
    }

    public function getuserdetafullfx($x)
    {
        $sql = "SELECT a.username, a.fullname, c.pp, c.lineid, c.nohp, c.email  FROM pengguna a, pengguna_detail c
        WHERE a.username = c.username AND a.username = :x";
        $query = $this->db->prepare($sql);
        $parameters = array(':x' => $x);
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

    public function upuserdata($user, $fullname)
    {

        $sql = "UPDATE pengguna SET fullname = :fullname WHERE username = :user";
        $query = $this->db->prepare($sql);
        $parameters = array(':fullname' => $fullname, ':user' => $user);
        $query->execute($parameters);
    }

    public function upuserdatapass($user, $fullname, $pass)
    {

        $sql = "UPDATE pengguna SET fullname = :fullname, password = :pass WHERE username = :user";
        $query = $this->db->prepare($sql);
        $parameters = array(':fullname' => $fullname, ':user' => $user, ':pass' => $pass);
        $query->execute($parameters);
    }

    public function upuserdatadeta($user, $lineid, $nohp, $email)
    {

        $sql = "UPDATE pengguna_detail SET lineid = :lineid, nohp = :nohp, email = :email WHERE username = :user";
        $query = $this->db->prepare($sql);
        $parameters = array(':lineid' => $lineid, ':nohp' => $nohp, ':user' => $user, ':email' => $email);
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
