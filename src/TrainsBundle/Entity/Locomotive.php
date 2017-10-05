<?php

namespace TrainsBundle\Entity;


class Locomotive
{

    public $id;

    public $serial;

    public $name;

    /**
     * Locomotive constructor.
     * @param $id
     * @param $serial
     * @param $name
     */
    public function __construct($id, $serial, $name)
    {
        $this->id = $id;
        $this->serial = $serial;
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * @param mixed $serial
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }



}
