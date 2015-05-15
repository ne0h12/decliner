<?php
/**
 * Author: <sfdiem5@gmail.com>
 * Date: 14.05.15
 */

namespace Decliner\Declinable;


class Word
{
    private $nominativ;
    private $genetiv;
    private $plural;

    public function __construct($nominativ, $genetiv, $plural)
    {
        $this->nominativ = $nominativ;
        $this->genetiv = $genetiv;
        $this->plural = $plural;
    }

    /**
     * @return mixed
     */
    public function getNominativ()
    {
        return $this->nominativ;
    }

    /**
     * @return mixed
     */
    public function getGenetiv()
    {
        return $this->genetiv;
    }

    /**
     * @return mixed
     */
    public function getPlural()
    {
        return $this->plural;
    }


}