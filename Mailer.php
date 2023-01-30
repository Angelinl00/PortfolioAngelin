<?php 

namespace App ;

class Mailer {
    private $to ;
    private $subject ;
    private $message ;
    private $header ;

    public function __construct($to , $subject , $message) {
        $this->to = $to ;
        $this->subject = $subject ;
        $this->message = $message ;
    }
}