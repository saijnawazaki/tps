<?php

class SeiHelper
{

    static public function sei_echo($values) {

        $values = htmlspecialchars($values, ENT_QUOTES, 'UTF-8');

        return $values;
    }

}
