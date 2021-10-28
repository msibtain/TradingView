<?php
class Condition {
    
    private $table;

    function __construct() {
        $this->table = 'conditions';
    }

    function Select($id='') {
        global $db;
        
        $where = "WHERE 1";
        
        if($id)
        {
            $where .= " AND id = $id";
        }

        $query = "SELECT * FROM {$this->table} $where";
        $results = $db->get_results($query);

        return $results;
    }

    function Add($post) {
        
    }
    
    function Edit($id, $set) {
        global $db;
        $db->update( $this->table, $set, '`id` = ' . $id );
    }
    
    function Delete($id) {
        
    }
}

$condition = new Condition();