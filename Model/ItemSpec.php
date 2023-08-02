<?php

namespace Model;

class ItemSpec
{
    public function __construct(
        protected string $name,
        protected float $price,
        protected ?string $color = null
    ) {
        //
    }

    public function match(ItemSpec $searchItemSpec): bool
    {
        if ($this->name != $searchItemSpec->getName()) {
            return false;
        }
         
        if ($this->price < $searchItemSpec->getPrice()) {
            return false;
        }
        
        if (!is_null($searchItemSpec->getColor())) {
            if ($this->color != $searchItemSpec->getColor()) {
                return false;
            }
        }

        return true;
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