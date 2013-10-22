<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlbumTable
 *
 * @author Rajendra
 */
namespace Album\Model;
use Zend\Db\TableGateway\TableGateway;
class AlbumTable {
    protected $tableGateway;
    
    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }
    
  
}

?>
