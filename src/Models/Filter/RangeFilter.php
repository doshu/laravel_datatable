<?php

    namespace Doshu\LaravelDatatable\Models\Filter;
    
    class RangeFilter implements FilterInterface {
    
        public function __invoke($index, $value, $collection, \Doshu\LaravelDatatable\Models\TableSchema $table) {
            if(isset($value['from']) && trim($value['from']) !== "") {
                $collection->where($index, '>=', $value['from']);
            }
            if(isset($value['to']) && trim($value['to']) !== "") {
                $collection->where($index, '<=', $value['to']);
            }
        }
        
    }
    
    
?>
