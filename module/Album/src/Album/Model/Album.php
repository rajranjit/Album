<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Album
 *
 * @author Rajendra
 */

namespace Album\Model;

class Album {
    public $id;
    public $artist;
    public $title;
    
    public function exchangeArray($data){
        $this->id =     (!empty($data['id'])) ? $data['id'] : null;
        $this->artist = (!empty($data['artist'])) ? $data['artist'] : null;
        $this->title =  (!empty($data['title'])) ? $data['title'] : null;
    }
    
}

?>
