<?php

// src/entiry/propertySearch.php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert ; # 检验输入的数值是否有效


class propertySearch
{
    /**
     * @var int|null
     */
    private $maxPrice; 
    /**
     * @var int|null
     * @Assert\Range(min=10,max=400) # 这个范围是10-400 否则无效
     */
    private $minSurface;

    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }
    public function setMaxPrice(int $maxPrice): propertySearch
    {
        $this->maxPrice = $maxPrice ;
        return $this;
    }
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }
    public function setMinSurface( int $minSurface): propertySearch
    {
        $this->minSurface = $minSurface ;
        return $this;
    }
}
