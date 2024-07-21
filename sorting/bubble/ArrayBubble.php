<?php

class ArrayBubble
{
    private array $arr = [];
    private int $nElems = 0;

    public function insert(int $value): void
    {
        $this->arr[$this->nElems] = $value;
        $this->nElems++;
    }

    public function display(): void
    {
        for ($i = 0; $i < $this->nElems; $i++) {
            print_r($this->arr[$i].' ');
        }

        print_r("\r\n");
    }

    public function sort(): void
    {
        for ($out = $this->nElems - 1; $out > 1; $out--) {
            for ($in = 0; $in < $out; $in++) {
                if ($this->arr[$in] > $this->arr[$in + 1]) {
                    $this->swap($in, $in + 1);
                }
            }
        }
    }

    private function swap(int $one, int $two): void
    {
        $temp = $this->arr[$one];
        $this->arr[$one] = $this->arr[$two];
        $this->arr[$two] = $temp;
    }
}