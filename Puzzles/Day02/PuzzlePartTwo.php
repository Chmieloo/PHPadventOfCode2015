<?php

namespace Puzzles\Day02;

class PuzzlePartTwo extends Puzzle
{
    protected function processInput()
    {
        $totalRibbonLength = 0;
        foreach ($this->input as $dimensions) {
            $dimensions = explode('x', trim($dimensions));
            sort($dimensions);

            $boxRibbonLength =
                $dimensions[0] + $dimensions[0] +
                $dimensions[1] + $dimensions[1];

            $bowLength = $dimensions[0] * $dimensions[1] * $dimensions[2];

            $totalRibbonLength += $boxRibbonLength + $bowLength;
        }

        $this->solution = $totalRibbonLength;
    }
}
