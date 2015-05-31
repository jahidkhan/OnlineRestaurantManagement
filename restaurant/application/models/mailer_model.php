<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mailer_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
   function sendEmail($data, $templateName) {
//        echo "<pre>";
//        print_r($data);

        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($data['from_address'], $data['full_name']);
        $this->email->to($data['to_address']);
        //$this->email->cc($data['cc_address']);
        $this->email->subject($data['subject']);
        $body = $this->load->view('mailScripts/' . $templateName, $data, true);
        echo $body;
        exit();
        $this->email->message($body);
        //$this->email->send();
        $this->email->clear();
    }
    
    
    
     function send_password_Email($mdata,$templateName)
                     {
        echo "<pre>";
        print_r($mdata);

        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($mdata['from_address'], $mdata['last_name']);
        $this->email->to($mdata['to_address']);
        //$this->email->cc($data['cc_address']);
        $this->email->subject($mdata['subject']);
        $body = $this->load->view('mailScripts/' . $templateName, $mdata, true);
        echo $body;
        exit();
        $this->email->message($body);
        //$this->email->send();
        $this->email->clear();
    }
     function sendEmail2($data, $templateName) {
//        echo "<pre>";
//        print_r($data);

        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($data['from_address'], $data['full_name']);
        $this->email->to($data['to_address']);
        //$this->email->cc($data['cc_address']);
        $this->email->subject($data['subject']);
        $body = $this->load->view('mailScripts2/' . $templateName, $data, true);
        echo $body;
        exit();
        $this->email->message($body);
        //$this->email->send();
        $this->email->clear();
    }
    
    
    
    
    
}