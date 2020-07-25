<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{


    public function index()
    {
        $this->load->view('index');
    }

    public function about()
    {
        $this->load->view('about');
    }
    public function privacy()
    {
        $this->load->view('privacy');
    }
    public function term()
    {
        $this->load->view('term');
    }
    public function sendMail()
    {
        $receiving_email_address = 'admin@etnicode.com';

        if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
            include($php_email_form);
        } else {
            die('Unable to load the "PHP Email Form" Library!');
        }

        $contact = new PHP_Email_Form;
        $contact->ajax = true;

        $contact->to = $receiving_email_address;
        $contact->from_name = $_POST['name'];
        $contact->from_email = $_POST['email'];
        $contact->subject = $_POST['subject'];

        // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials

        $contact->smtp = array(
            'host' => 'mail.etnicode.com',
            'username' => 'admin@etnicode.com',
            'password' => 'etnicodeindonesia',
            'port' => '465'
        );


        $contact->add_message($_POST['name'], 'From');
        $contact->add_message($_POST['email'], 'Email');
        $contact->add_message($_POST['message'], 'Message', 10);

        echo $contact->send();
    }
}
