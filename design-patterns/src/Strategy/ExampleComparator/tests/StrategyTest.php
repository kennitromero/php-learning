<?php

namespace DesignPatterns\strategy\ExampleComparator\Tests;

use DesignPatterns\Strategy\ExampleComparator\Context;
use DesignPatterns\strategy\ExampleComparator\Strategies\DateComparator;
use DesignPatterns\strategy\ExampleComparator\Strategies\IdComparator;
use PHPUnit\Framework\TestCase;

/**
 * Class StrategyTest
 * @package DesignPatterns\Strategy\ExampleComparator\Tests
 * @author Kennit Ruz <kruz@merqueo.com>
 */
class StrategyTest extends TestCase
{
    /**
     * @return array
     */
    public function provideIntegers(): array
    {
        return [
            [
                [['id' => 2], ['id' => 1], ['id' => 3]],
                ['id' => 1],
            ],
            [
                [['id' => 3], ['id' => 2], ['id' => 1]],
                ['id' => 1],
            ],
        ];
    }

    /**
     * @return array
     */
    public function provideDates(): array
    {
        return [
            [
                [['date' => '2014-03-03'], ['date' => '2015-03-02'], ['date' => '2013-03-01']],
                ['date' => '2013-03-01'],
            ],
            [
                [['date' => '2014-02-03'], ['date' => '2013-02-01'], ['date' => '2015-02-02']],
                ['date' => '2013-02-01'],
            ],
        ];
    }

    /**
     * @test
     * @dataProvider provideIntegers
     *
     * @param array $collection
     * @param array $expected
     */
    public function testIdComparator($collection, $expected)
    {
        $obj = new Context(new IdComparator());
        $elements = $obj->executeStrategy($collection);

        $firstElement = array_shift($elements);
        $this->assertSame($expected, $firstElement);
    }

    /**
     * @dataProvider provideDates
     *
     * @param array $collection
     * @param array $expected
     */
    public function testDateComparator($collection, $expected)
    {
        $obj = new Context(new DateComparator());
        $elements = $obj->executeStrategy($collection);

        $firstElement = array_shift($elements);
        $this->assertSame($expected, $firstElement);
    }
}
