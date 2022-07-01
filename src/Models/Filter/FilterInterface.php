<?php

    namespace Doshu\LaravelDatatable\Models\Filter;
    
    
    interface FilterInterface {
    
        public function __invoke($index, $value, $collection, \Doshu\LaravelDatatable\Models\TableSchema $table);
    
    }

?>
