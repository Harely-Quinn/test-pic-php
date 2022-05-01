<?php,

if (empty(getenv('BOT_TOKEN'))){
$token = "API_Token";
} else {
$token = getenv('BOT_TOKEN');
}

ob_start();
$BOT_KEY = '5222789174:AAFZH_qkAmQeZWJhRzBShYefV3-NppsXoDQ';/*TOKEN BOT*/
define('API_KEY',$BOT_KEY,0);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url); curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}

$update = json_decode(file_get_contents("php://input"));
  $chat_id = $update->message->chat->id;
  $userId = $update->message->from->id;
  $firstname = $update->message->from->first_name;
  $lastname = $update->message->from->last_name;
  $username = $update->message->from->username;
  $chattype = $update->message->chat->type;
  $message = $update->message->text;
  $message_id = $update->message->message_id;
  $replytomessageis = $update->message->reply_to_message->text;
  $data = $update->callback_query->data;
  $callbackfname = $update->callback_query->from->first_name;
  $callbacklname = $update->callback_query->from->last_name;
  $callbackusername = $update->callback_query->from->username;
  $callbackchatid = $update->callback_query->message->chat->id;
  $callbackuserid = $update->callback_query->message->reply_to_message->from->id;
  $callbackmessageid = $update->callback_query->message->message_id;

if ($text == '/rasm') {
    bot('sendPhoto', [
      'chat_id' => $chat_id,
      'photo'=> "https://res.cloudinary.com/dk-find-out/image/upload/q_80,w_1920,f_auto/A-Alamy-BXWK5E_vvmkuf.jpg"
    ]);
  }
