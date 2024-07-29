<?php

class ArraySelect
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
            print_r($this->arr[$i] . ' ');
        }

        print_r("\r\n");
    }

    public function sort(): void
    {
        for ($out = 0; $out < $this->nElems - 1; $out++) {
            $min = $out;
            for ($in = $out + 1; $in < $this->nElems; $in++) {
                if ($this->arr[$in] < $this->arr[$min]) {
                    $min = $in;
                    $this->swap($out, $min);
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