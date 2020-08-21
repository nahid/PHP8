<?php declare(strict_types=1);

class Calculator
{
    public int|float $result = 0;

    public function operation(mixed $operator, int|float $value) : self
    {
        if ($operator == '+') {
            $this->result += $value;
        }

        if ($operator == '-') {
            $this->result -= $value;
        }

        if ($operator == '*') {
            $this->result *= $value;
        }

        if ($operator == '/') {
            $this->result /= $value;
        }

        return $this;
    }

    public function getResult() : float|int
    {
        return $this->result;
    }

}


/*$c = new Calculator();

echo $c->operation(value: 1000, operator: "+")
    ->operation('-', 50.5)
    ->getResult();*/

class Str
{
    public function __toString()
    {
        return "PHP8";
    }

}

function getStr(Stringable $str)
{
    echo $str;
}

//getStr(new Str());

// create FFI object, loading libc and exporting function printf()
$ffi = FFI::cdef(
    "int printf(const char *format, ...);", // this is a regular C declaration
    "libc.so.6");
// call C's printf()
$ffi->printf("Hello %s!\n", "world");