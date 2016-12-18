<?php

namespace Puzzles\Day01;

class PuzzlePartOne extends Puzzle
{
    protected function processInput()
    {
        # Take only first line
        $input = $this->input[0];
        while (substr_count($input, '()') > 0) {
            $input = strtr($input, ['()' => '']);
        }
        $pos = strpos($input, ')(');
        $down = $pos + 1;
        $up = strlen($input) - $down;
        $this->solution = ($up - $down);
    }
}
