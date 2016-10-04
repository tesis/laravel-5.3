<?php

function flash($message, $level = 'info'){
    session()->flash('flash_message', $message);
    session()->flash('flash_message_level', $level);
}

function readableDate($date){
    if(empty($date)){
        return false;
    }
    return date('m/d/Y H:i',strtotime($date));
}
?>