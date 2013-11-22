<?php

class ApnController extends Controller {

    public function actionIndex() {
        $args = (!empty($_GET)) ? $_GET : array('task' => $argv[1]);


// CREATE APNS OBJECT, WITH DATABASE OBJECT AND ARGUMENTS

        $apns = new APNS($args);

        $apns->newMessage(2); // FUTURE DATE NOT APART OF APPLE EXAMPLE
        $apns->addMessageAlert('Hello how dsds.');
        $apns->addMessageBadge(9);
        $apns->addMessageSound('bingbong.aiff');
        $apns->addMessageCustom('acme1', 'bar');
        $apns->addMessageCustom('acme2', 42);
        $apns->queueMessage();

        $apns->processQueue();
    }

}