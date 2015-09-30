<?php

namespace Itkg\LegacyBundle\Manager;
use Itkg\LegacyBundle\Model\Element;


/**
 * Class ParentManager
 */
class ParentManager
{
    public function firstParent(array $elements = array())
    {
        $orderedElements = array();

        /** @var Element $element */
        foreach ($elements as $element) {
            $orderedElements[$element->getName()] = $element;
        }

        $element = array_shift($orderedElements);

        while($element->getParent() != null) {
            $element = $orderedElements[$element->getParent()];
        }

        return $element;
    }
}
