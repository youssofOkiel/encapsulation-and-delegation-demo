<?php 
namespace Model;

require 'Model\Item.php';
require 'Model\ItemSpec.php';

class Warehouse
{
  public function __construct(protected array $items = []) 
  {
    //
  }

  public function addItem(ItemSpec $itemSpec): void
  {
    $item = new Item($itemSpec);
    
    $this->items[] = $item; 
  }
  
  public function getItems(): array
  {
    return $this->items;
  }

  public function search(ItemSpec $searchItemSpec): Item|bool
  {
    foreach($this->items as $item){
      if($item->getSpec()->match($searchItemSpec))
        {
           return $item;
        }
     }

    return false; 
  }
  
}