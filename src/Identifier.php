<?php

namespace rsporteman\Snippet;


trait Identifier
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @param $id integer
     * @return $this
     */
    public function setId($id)
    {
        if(!\is_int($id)){
            throw new \InvalidArgumentException('Param must be an Integer.');
        }
        $this->id = $id;
        return $this;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}