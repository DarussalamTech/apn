<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ApnCommand extends CConsoleCommand {

    public function run($args) {
        $args = (!empty($_GET)) ? $_GET:array('task'=>$args[0]);
    
        $apns = new APNS($args);

        $apns->newMessage(); // FUTURE DATE NOT APART OF APPLE EXAMPLE
        $apns->addMessageAlert('Hello how dsds.');
        
        $apns->addMessageBadge(9);
        
        $apns->addMessageSound('bingbong.aiff');
        $apns->addMessageCustom('acme1', 'bar');
        $apns->addMessageCustom('acme2', 42);
        $apns->queueMessage();

        $apns->processQueue();
       
    }

}

?>
