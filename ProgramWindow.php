<?php

class ProgramWindow
{
    public int $x;
    public int $y;
    public int $width;
    public int $height;

    public function __construct() {
        $this->x = 0;
        $this->y = 0;
        $this->height = 600;
        $this->width = 800;
    }

    function resize(Size $size)
    {
        $this->height = $size->height;
        $this->width = $size->width;
    }

    function move(Position $position)
    {
        $this->x = $position->x;
        $this->y = $position->y;
    }
}
