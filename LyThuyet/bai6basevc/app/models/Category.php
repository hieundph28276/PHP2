<?php
namespace App\Models;
class Category extends BaseModel
{
    protected $table = "category";
    public function getCategory(){
        $sql = "select * from $this->table";
        $this -> setQuery($sql);
        return $this -> loadAllRows();
    }
}