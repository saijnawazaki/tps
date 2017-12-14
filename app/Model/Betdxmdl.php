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



}
