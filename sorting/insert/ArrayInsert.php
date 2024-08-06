<?php

namespace insert;

class ArrayInsert
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
        for ($out = 1; $out < $this->nElems - 1; $out++) {
            $temp = $this->arr[$out];
            $in = $out;
            while($in > 0 && $this->arr[$in - 1] >= $temp) {
                $this->arr[$in] = $this->arr[$in - 1];
                --$in;
            }
            $this->arr[$in] = $temp;
        }
    }
}