<?php

namespace Puzzles\Day01;

class PuzzlePartTwo extends Puzzle
{
    protected function processInput()
    {
        $instructions = str_split(trim($this->input[0]));
        $floorNumber = 0;
        foreach ($instructions as $num => $instruction) {
            switch ($instruction) {
                case '(':
                    $floorNumber++;
                    break;
                case ')':
                    $floorNumber--;
                    break;
            }

            if ($floorNumber < 0) {
                $this->solution = $num + 1;
                return null;
            }
        }
    }
}
