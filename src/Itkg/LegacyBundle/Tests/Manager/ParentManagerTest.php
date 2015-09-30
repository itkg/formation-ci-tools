<?php

namespace Itkg\LegacyBundle\Tests\Manager;

use Itkg\LegacyBundle\Manager\ParentManager;
use Phake;

/**
 * Test ParentManagerTest
 */
class ParentManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ParentManager
     */
    protected $manager;

    /**
     * Set up the test
     */
    public function setUp()
    {
        $this->manager = new ParentManager();
    }

    /**
     * Test get first parent
     */
    public function testGetFirstParent()
    {
        $element = Phake::mock('Itkg\LegacyBundle\Model\Element');

        $parent = $this->manager->firstParent(array($element, $element));

        $this->assertSame($element, $parent);
    }
}
