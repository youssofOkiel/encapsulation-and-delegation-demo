<?php 
namespace Model;

class Item
{
  private static int $baseId = 0;
  
  private int $id;
  
  public function __construct(protected ItemSpec $itemSpec) 
  {
    $this->id = self::$baseId;
    self::$baseId++;
  }

  public function getId()
  {
    return $this->id; 
  }

  public function getSpec()
  {
    return $this->itemSpec; 
  }

  // .. setter and gettr for price 
}