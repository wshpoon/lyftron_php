<?php

abstract class CarDetail
{
    protected $isBroken;
    protected $isPaintDamaged;

    public function __construct(bool $status)
    {
        $this->isBroken = $status;
        $this->isPaintDamaged = $status;
    }

    public function isBroken(): bool
    {
        return $this->isBroken;
    }

    public function isPaintDamaged(): bool
    {
        return $this->isPaintDamaged;
    }
}

class Door extends CarDetail
{
}

class Tyre extends CarDetail
{
}

class Paint extends CarDetail
{
}
class Car
{
    /**
     * @var CarDetail[]
     */
    private $details;

    /**
     * @param CarDetail[] $details
     */
    public function __construct(array $details)
    {
        $this->details = $details;
    }

    public function isBroken(): bool
    {
        foreach ($this->details as $detail) {
            if ($detail->isBroken()) {
                return true;
            }
        }
        return false;
    }

    public function isPaintDamaged(): bool
    {
        foreach ($this->details as $detail) {
            if ($detail->isPaintDamaged()) {
                return true;
            }
        }
        return false;
    }
}

$car = new Car([new Door(true), new Tyre(false), new Paint(true)]); // we pass a list of all details