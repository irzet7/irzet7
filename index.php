  }


          } /* end of function for safe IP input */











    /* for port to send bytes */

   

    /*
     *                       An indentifier port number (List of TCP and UDP port numbers)
     *
     *
     *
     *   Port	 TCP	         UDP	            Description	                                 IANA status
     *
     *    0    Reserved	      Reserved	             Reserved	                                   Official
     *
     *   21    TCP/SCTP        Assigned	    File Transfer Protocol (FTP) control (command)	   Official
     *
     *   22    TCP/SCTP         UDP	   Secure Shell (SSH),secure logins, file transfers 
     *                                         (scp, sftp)  and port forwarding	                   Official
     *
     *   23	TCP	     Assigned	   Telnet protocol—unencrypted text communications	   Official
     *
     *   25	TCP	     Assigned	    Simple Mail Transfer Protocol (SMTP), used for 
     *                                         email routing between mail servers	           Official
     *
     *   53      TCP	      UDP	        Domain Name System (DNS)	                   Official
     * 
     *   80     TCP/SCTP      UDP	    Hypertext Transfer Protocol (HTTP)	                   Official
     *
     *  110	TCP	    Assigned	  Post Office Protocol, version 3 (POP3)	           Official
     *
     *  143	TCP	   Assigned	Internet Message Access Protocol (IMAP), management  
     *                                      of electronic mail messages on a server	           Official
     *
     *  443   TCP/SCTP     Assigned	Hypertext Transfer Protocol over TLS/SSL (HTTPS)	   Official
     *
     *  465	TCP		          Authenticated SMTP over TLS/SSL (SMTPS)	           Unofficial
     *
     *  587	TCP	  Assigned	   email message submission (SMTP)	                   Official
     *
     *  993	TCP	  Assigned	Internet Message Access Protocol over TLS/SSL (IMAPS)	   Official
     *
     *  995	TCP	   UDP	          Post Office Protocol 3 over TLS/SSL (POP3S)	           Official
     *
     * 1433	TCP	   UDP	  Microsoft SQL Server database management system (MSSQL) server   Official
     *
     * 3306	TCP	Assigned	          MySQL database system	                           Official
     *
     * 3389	TCP	  UDP	    Microsoft Terminal Server (RDP) officially registered 
     *                                       as Windows Based Terminal (WBT)	                   Official
     *
     * 5631	TCP	       pcANYWHEREdata, Symantec pcAnywhere (version 7.52 and later) data   Official
     *
     */

   

     public $port_list =  array  ('reserved' =>  '0'    ,  'ftp'     =>  '21'   ,  'ssh'        =>  '22'  ,
                                  'telnet'   =>  '23'   ,  'smtp'    =>  '25'   ,  'dns'        =>  '53'  , 
                                  'http'     =>  '80'   ,  'pop3'    =>  '110'  ,  'imap'       =>  '143' ,  
                                  'https'    =>  '443'  ,  'smtp/s'  =>  '465'  ,  'smtp/n'     =>  '587' ,
                                  'imap4'    =>  '993'  ,  'pop3/s'  =>  '995'  ,  'sql'        =>  '1433',
                                  'mysql'    =>  '3306' ,  'rdp'     =>  '3389' ,  'pc/anyware' =>  '5631');
                                 



    protected function DEFAULT_PORT($port) 
     {

       $port = $this->port_list['reserved'];
        echo $port;

      }/* end of function for port number */





       /* for destroyed PORT function */

        public function DIS_DEFAULT_PORT() 
           {
         unset($port);
         unset($port_list);
           }






   } /* end of class DDOS_ATTACK */









  class DDOS_ATTACK_SEND extends DDOS_ATTACK 
       {

     function __construct() 
       {
       parent::__construct();
        }


     }




    class DDOS_ATTACK_SEND_TO extends DDOS_ATTACK
        {

    public function DEFAULT_PORT($port)
         {
         parent::DEFAULT_PORT();
          }
       


        public function DIS_DEFAULT_PORT() 
           {
          parent::DEFAULT_PORT();
         unset($port);
         unset($port_list);
           }


         }






?>
