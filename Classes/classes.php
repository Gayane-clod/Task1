<?php


namespace Classes\User
 {
  
  class User {
	
    private $name;
    private $surenam;
    private $email;
    private $password;

    public function setName($name){
        $this->name = $name;
      	
    }

    public function setSurename($surename){
		$this->surename = $surename;

    }

    public function setEmail($email){
		$this->email = $email;
	}

    public function setPassword($password){
		$this->password = $password;

    }


    public function save(){

        $db = mysqli_connect('localhost', 'root', '', 'my_db') or die('error with connecting db');
        mysqli_set_charset($db, "utf8") or die("error with kodirovka");
    
        mysqli_query($db, "INSERT INTO my_table VALUES(NULL, '$this->name', '$this->surename', '$this->email', '$this->password')");
    
    }


    public function getAll(){
        $db = mysqli_connect('localhost', 'root', '', 'my_db') or die('error with connecting db');
        mysqli_set_charset($db, "utf8") or die("error with kodirovka");

        $result = mysqli_query($db,"SELECT * FROM my_table");

        $storeArray = Array();
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $storeArray[] =  $row;
      }
        foreach ($storeArray as $item){
            echo '**********';
            foreach ($item as $key => $val){
            echo '<br>'.$key.' => '.$val;
          }
            echo '<br>************';
        }
    }

    public function getByEmail($email){
      
        $db = mysqli_connect('localhost', 'root', '', 'my_db') or die('error with connecting db');
        mysqli_set_charset($db, "utf8") or die("error with kodirovka");

        $result = mysqli_query($db,"SELECT * FROM my_table");

        $storeArray = Array();

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            if($row['email'] == $email){
                $storeArray[] =  $row;
                 
            }
            // else{
            //     echo "<script>alert('Wrong user Details')</script>";
            // }    
            }

        foreach ($storeArray as $item){
          echo '<pre>';
          print_r($item);
          echo '</pre>';
            
        }
    }

    public function getById($id){
      
        $db = mysqli_connect('localhost', 'root', '', 'my_db') or die('error with connecting db');
        mysqli_set_charset($db, "utf8") or die("error with kodirovka");

        $result = mysqli_query($db,"SELECT * FROM my_table");

        $storeArray = Array();

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            if($row['id'] == $id){
                $storeArray[] =  $row;
                 
            }
            // else{
            //     echo "<script>alert('Wrong user Details')</script>";
            // }
        }

        foreach ($storeArray as $item){
            echo '<pre>';
            print_r($item);
            echo '</pre>';
             
            }
    }

  }
  
}

namespace Classes\Mail
{
    class Email 
    {
        public function send($from, $to, $message){
            require_once './../vendor/autoload.php';

            // Create the Transport
            $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
              ->setUsername('gkanaryan@gmail.com')
              ->setPassword('Chaxals559995')
            ;
            
            // Create the Mailer using your created Transport
            $mailer = new \Swift_Mailer($transport);
            
            // Create a message
            $message = (new \Swift_Message('Wonderful Subject'))
              ->setFrom([$from])
              ->setTo([$to])
              ->setBody($message);
            
              // Send the message
            $result = $mailer->send($message); 
        }
    }
}


?>