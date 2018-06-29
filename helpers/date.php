<?php
class formate{ 
 public function formDate($date){
    return date('F j, y g:i:A', strtotime($date));
 }
}
?>