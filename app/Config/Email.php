<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public $fromEmail = 'jeneallevalenin@gmail.com'; // Your Gmail address
    public $fromName  = 'Guest'; // Sender name
    public $protocol  = 'smtp';
    public $SMTPHost  = 'smtp.gmail.com';
    public $SMTPUser  = 'jeneallevalenin@gmail.com'; // Your Gmail address
    public $SMTPPass  = 'otyobcpgzlkyjzam'; // Your Gmail App Password (Do NOT use your normal password!)
    public $SMTPPort  = 587;
    public $SMTPTimeout = 30;
    public $SMTPCrypto = 'tls';
    public $mailType  = 'html';
    public $charset   = 'utf-8';
    public $wordWrap  = true;
    public $validate  = true;
}
