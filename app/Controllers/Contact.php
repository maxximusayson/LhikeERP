<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Email\Email;

class Contact extends Controller
{
    public function sendEmail()
    {
        $email = \Config\Services::email();

        $emailConfig = new \Config\Email();
        $email->setFrom($emailConfig->fromEmail, $emailConfig->fromName);
        $email->setTo('jeneallevalenin@gmail.com'); // Change this to the recipient's email
        $email->setSubject('New Contact Form Message');

        $message = '
        <p><strong>Name:</strong> ' . $this->request->getPost('name') . '</p>
        <p><strong>Email:</strong> ' . $this->request->getPost('email') . '</p>
        <p><strong>Message:</strong> ' . $this->request->getPost('message') . '</p>
    ';
        $email->setMessage($message);

        if ($email->send()) {
            return redirect()->to(base_url('/'))->with('success', 'Email sent successfully!');
        } else {
            return redirect()->back()->with('error', $email->printDebugger(['headers']));
        }
    }
}
