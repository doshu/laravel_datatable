<?php

    namespace Doshu\LaravelDatatable\Models\Filter;
    
    class SelectFilter implements FilterInterface {
    
        public function __invoke($index, $value, $collection, \Doshu\LaravelDatatable\Models\TableSchema $table) {
            if($value !== null && $value !== "") {
                $collection->where($index, '=', $value);
            }
        }
        
    }
    
    
?>
