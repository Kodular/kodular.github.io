<?php

if (!isset($_POST["email"])) {
  exit(header('Location: /'));
} else {
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
    //your site secret key
    $secret = '';
    //get verify response data
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if($responseData->success) {
      $subs = file('emails.txt');
      foreach($subs as $sub) {
        if(str_replace("\n",'',$sub)==$_POST['email']){
          $found = true;
          break;
        }
      }
      if ($found==true) {
        exit(header('Location: /home/?0'));
      }
      $file = fopen('emails.txt', 'a');
      fwrite($file, $_POST['email'] . "\n");
      fclose($file);

      $url = 'https://api.elasticemail.com/v2/email/send';
      try {
           $post = array('from' => 'no-reply@makeroid.tk',
      		'fromName' => 'Makeroid',
      		'apikey' => '',
      		'subject' => 'Subscription',
      		'to' => $_POST["email"],
      		'bodyHtml' => '<h2>Thanks supporting us on Makeroid!</h2>You will be notified when Makeroid will be released<br>Also, as you have signed up, you will take part in a contest to choose some testers for our service<br><br>Regards,<br><i>Makeroid Team</i><br><hr /><br>If this is an error, please notify at support@makeroid.tk',
      		'isTransactional' => false);
      		$ch = curl_init();
      		curl_setopt_array($ch, array(
                  CURLOPT_URL => $url,
      			CURLOPT_POST => true,
      			CURLOPT_POSTFIELDS => $post,
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_HEADER => false,
      			CURLOPT_SSL_VERIFYPEER => false
              ));
              $result=curl_exec ($ch);
              curl_close ($ch);
              echo $result;
          exit(header('Location: /home/?1'));
      }
      catch(Exception $ex){
      	echo $ex->getMessage();
      }
    } else {
      exit(header('Location: /home/?2'));
    }
  } else {
    exit(header('Location: /home/?3'));
  }
}
