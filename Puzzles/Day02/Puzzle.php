<?php

namespace Puzzles\Day02;

use Puzzles\Abstraction\Puzzle as PuzzleAbstract;

/**
 * Puzzle day 2
 * Common class for day 2
 * Advent Of Code 2015
 */
class Puzzle extends PuzzleAbstract
{
    protected $solution;

    public function __construct()
    {
        $this->loadInput();
        $this->processInput();
    }

    protected function loadInput()
    {
        if (file_exists(__DIR__ . '/' . static::$fileName)) {
            $this->input = file(__DIR__ . '/' . static::$fileName);
        }
    }

    /**
     * Direct output for both answers
     */
    public function renderSolution()
    {
        echo 'Solution: ' . $this->solution . PHP_EOL;
    }
}
