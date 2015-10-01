<?php

namespace Itkg\LegacyBundle\Model;


/**
 * Interface ElementInterface
 */
interface ElementInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return ElementInterface
     */
    public function getParent();

    /**
     * @param ElementInterface $son
     */
    public function addSon(Element $son);

    /**
     * @return array
     */
    public function getSons();
}
