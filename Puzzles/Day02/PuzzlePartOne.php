<?php

namespace Puzzles\Day02;

class PuzzlePartOne extends Puzzle
{
    protected function processInput()
    {
        $totalArea = 0;
        foreach ($this->input as $dimensions) {
            $dimensions = explode('x', trim($dimensions));
            sort($dimensions);

            $boxArea =
                2 * $dimensions[0] * $dimensions[1] +
                2 * $dimensions[1] * $dimensions[2] +
                2 * $dimensions[0] * $dimensions[2];

            $slack = $dimensions[0] * $dimensions[1];

            $totalArea += $boxArea + $slack;
        }

        $this->solution = $totalArea;
    }
}
