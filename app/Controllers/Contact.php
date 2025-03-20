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
        $email->setSubject('New Contact Information');
        $message = '
        <div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
            <h2 style="text-align: center; color: #333; margin-bottom: 20px;">Contact Form Information</h2>
            <p style="font-size: 16px; color: #555; margin-bottom: 10px;">
                <strong style="color: #333;">Name:</strong> ' . htmlspecialchars($this->request->getPost("name")) . '
            </p>
            <p style="font-size: 16px; color: #555; margin-bottom: 10px;">
                <strong style="color: #333;">Email:</strong> <a href="mailto:' . htmlspecialchars($this->request->getPost("email")) . '" style="color: #007bff;">' . htmlspecialchars($this->request->getPost("email")) . '</a>
            </p>
            <p style="font-size: 16px; color: #555; margin-bottom: 10px;">
                <strong style="color: #333;">Message:</strong>
            </p>
            <div style="padding: 15px; background-color: #fff; border-radius: 5px; border-left: 4px solid #007bff; font-size: 16px; color: #333;">
                ' . nl2br(htmlspecialchars($this->request->getPost("message"))) . '
            </div>
            <p style="text-align: center; margin-top: 20px; font-size: 14px; color: #888;">
                <em>This message was sent from your website contact form.</em>
            </p>
        </div>';
    
        $email->setMessage($message);

        if ($email->send()) {
            return redirect()->to(base_url('/'))->with('success', 'Email sent successfully!');
        } else {
            return redirect()->back()->with('error', $email->printDebugger(['headers']));
        }
    }

    //second  only the email can be sent
    public function sendEmail2()
    {
        $email = \Config\Services::email();

        $emailConfig = new \Config\Email();
        $email->setFrom($emailConfig->fromEmail, $emailConfig->fromName);
        $email->setTo('jeneallevalenin@gmail.com');
        $email->setSubject('user Submitted for contact');

        $message = '
            <div style="font-family: Arial, sans-serif; padding: 20px; background-color: #f8f8f8; border-top: 2px solid #007bff; border-radius: 0 0 8px 8px;">
                <h3 style="text-align: center; color: #333; margin-bottom: 10px;">New Contact Submission</h3>
                
                <p style="font-size: 16px; color: #555; text-align: center; margin-bottom: 10px;">
                    <strong style="color: #333;">Sender Email:</strong> 
                    <a href="mailto:' . htmlspecialchars($this->request->getPost("email")) . '" style="color: #007bff; text-decoration: none;">
                        ' . htmlspecialchars($this->request->getPost("email")) . '
                    </a>
                </p>
                
                <p style="font-size: 14px; color: #777; text-align: center; margin-top: 15px;">
                    <em>This email was submitted through your documentation website.</em>
                </p>
            </div>';
        $email->setMessage($message);
        if($email->send()){
            return redirect()->to(base_url('/'))->with('success', 'Email sent successfully!');
        }else{
            return redirect()->back()->with('error', $email->printDebugger(['headers']));
        }
    }
}
