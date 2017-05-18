<?php

namespace Itkg\LegacyBundle\Manager;

use Itkg\LegacyBundle\Model\Element;

/**
 * Class ElementManager
 */
class ElementManager
{
    /**
     * @param array $options
     *
     * @return Element
     */
    public function create(array $options = array())
    {
        $element = new Element($options['name']);

        if (count($options) == 1) {
            return $element;
        }

        if (array_key_exists('parent', $options)) {
            $parent = new Element($options['parent']['name']);
            $parent->addSon($element);
        }

        foreach ($options['sons'] as $son) {
            $son = new Element($son['name']);
            $element->addSon($son);
        }

        if (isset ($parent)) {
            return $parent;
        }

        return $element;
    }
}
