<?php

namespace Model;

class ItemSpec
{
    public function __construct(
        protected string $name,
        protected float $price,
        protected string $color = 'null'
    ) {
        //
    }

    public function match(ItemSpec $searchItemSpec): bool
    {
        if ($this->name == $searchItemSpec->getName()) {
            return true;
        }

        if ($this->price <= $searchItemSpec->getPrice()) {
            return true;
        }

        if ($this->color == $searchItemSpec->getColor()) {
            return true;
        }

        return false;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getColor()
    {
        return $this->color;
    }
}