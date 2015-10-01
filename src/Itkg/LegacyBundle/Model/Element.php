<?php

namespace Itkg\LegacyBundle\Model;

/**
 * Class Element
 */
class Element implements ElementInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $parent;

    /**
     * @var array
     */
    protected $sons = array();

    /**
     * @param string      $name
     * @param string|null $parent
     */
    public function __construct($name, $parent = null)
    {
        $this->name = $name;
        $this->parent = $parent;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param Element $son
     */
    public function addSon(Element $son)
    {
        $this->sons[] = $son;
    }

    /**
     * @return array
     */
    public function getSons()
    {
        return $this->sons;
    }
}
