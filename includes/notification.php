<?php 
function message($msg="", $msgtype="") {
      if(!empty($msg)) {
        // then this is "set message"
        // make sure you understand why $this->message=$msg wouldn't work
        $_SESSION['message'] = $msg;
        $_SESSION['msgtype'] = $msgtype;
      } else {
        // then this is "get message"
            return $message;
      }
    }
    function check_message(){
    
        if(isset($_SESSION['message'])){
            if(isset($_SESSION['msgtype'])){
                if ($_SESSION['msgtype']=="info"){
                    echo  '<div class="alert alert-info">'. $_SESSION['message'] . '</div>';
                     
                }elseif($_SESSION['msgtype']=="error"){
                    echo  '<div class="alert alert-danger">' . $_SESSION['message'] . '</div>';
                                    
                }elseif($_SESSION['msgtype']=="success"){
                    echo  '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
                }   
                unset($_SESSION['message']);
                unset($_SESSION['msgtype']);
            }
  
        }   

    }
?>