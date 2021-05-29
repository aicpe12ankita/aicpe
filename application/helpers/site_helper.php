<?php
	/*
    @Description : Encryption - encrypt the string
    @Author      : Pratik Padhariya (taken from nakshi)
    @Input       : link to be send in String
    @Output      : Encrypted binary to hex string
    @Date        : 27-09-2016
    */
    
    function encrypt($str)
    {  
        $iv = 'fdsfds85435nfdft'; 
        $td = mcrypt_module_open('rijndael-128', '', 'cbc', $iv); 
        mcrypt_generic_init($td, '89432hjfsd891786', $iv);
        $encrypted = mcrypt_generic($td, $str); 
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td); 
        return bin2hex($encrypted);
    }
    
    /*
    @Description : Decryption - decrypt the encrypted string
    @Author      : Pratik Padhariya (taken from nakshi)
    @Input       : Encrypted code
    @Output      : String
    @Date        : 27-09-2016
    */

    function decrypt($code)
    { 
        $code = helper_hex2bin($code);
        $iv = 'fdsfds85435nfdft'; 
        $td = mcrypt_module_open('rijndael-128', '', 'cbc', $iv); 
        mcrypt_generic_init($td, '89432hjfsd891786', $iv);
        $decrypted = mdecrypt_generic($td, $code); 
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td); 
        $ut =  utf8_encode(trim($decrypted)); 
        return $ut;
    }

     /*
    @Description : Hex2bin - convert hex data into binary
    @Author      : Shantanu
    @Input       : Hex code
    @Output      : Binary code
    @Date        : 04-03-2016
    */

    function helper_hex2bin($hexdata)
    {
        $bindata = ''; 
        for ($i = 0; $i < strlen($hexdata); $i += 2)
        {
            $bindata .= chr(hexdec(substr($hexdata, $i, 2)));
        } 
        return $bindata;
    }

     /*
    @Description : function to send mail using email library of codeigniter
    @Author      : Pratik Padhariya
    @Input       : Email and message
    @Output      : 
    @Date        : 28-09-2016
    */

    function sendMail($email,$subject,$message,$additional =array())
    {
        
        $CI =& get_instance();

        if(isset($additional['email_type']) && $additional['email_type']=='PO')
        {
            $from_email = 'purchasing@tntdealsinc.com';

            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'purchasing@tntdealsinc.com', 
                'smtp_pass' => 'JSf!#b1!9R6$', 
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );

        }
        elseif(isset($additional['email_type']) && $additional['email_type']=='Internal')
        {
            $from_email = 'shantanu@topsinfosolutions.com';

            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'shantanu@topsinfosolutions.com', 
                'smtp_pass' => base64_decode('a2FscGFuYTAwNw=='), 
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );

        }
        elseif(isset($additional['email_type']) && $additional['email_type']=='OrderShipment' || $additional['email_type']=='Custom' )
        {
            $from_email = $additional['email'];

            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => $additional['email'],
                'smtp_pass' => $additional['password'],
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );

        }
        else
        {
            $from_email = 'customerservice@pensnmore.com';

            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'customerservice@pensnmore.com', 
                'smtp_pass' => '33VszeEg', 
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
        }
        
        $CI->load->library('email');
        $CI->email->initialize($config);  
        $CI->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $CI->email->set_mailtype('html');
        $CI->email->to($email);// change it to yours
        $CI->email->subject($subject);
        $CI->email->message($message);
        $CI->email->set_newline("\r\n");  

        if(isset($additional['cc']))
        {   
            $CI->email->cc($additional['cc']);
        }

        if(isset($additional['bcc']))
        {   
            $CI->email->bcc($additional['bcc']);
        }

        if(isset($additional['from_email']))
        {   
            $CI->email->from($additional['from_email'],'TNT Deals Inc');
        }
        else
        {
            $CI->email->from($from_email,'TNT Deals Inc');
        }

        if(isset($additional['reply_email']) && is_not_empty($additional['reply_email']))
        { 
            $CI->email->reply_to($additional['reply_email'], 'TNT Deals');
        }
        else
        {
            $CI->email->reply_to($from_email, 'TNT Deals');
        }

        if(isset($additional['attachment']))
        {   
            foreach ($additional['attachment'] as $key => $attach) 
            {
                $CI->email->attach($attach);
            }
        }
        

        if($CI->email->send())
        {
            return TRUE;
        }
        else
        { 
            return FALSE;
        }
    }
    ?>