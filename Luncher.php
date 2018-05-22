<?php
/*
─═ঊঈঊঈ═─╮
sudo ID : @KINGMNbo
─═ঊঈঊঈ═─╯
*/
define('API_KEY','596126641:AAGyLyeT0ayCsKk0NkdwZjnv9AF3Mns0UWk');

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function sendmessage($chat_id, $text){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>"MarkDown"
 ]);
 }
function sendaction($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
	 function sendphoto($chat_id, $photo, $caption){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
	function Forward($KojaShe,$AzKoja,$KodomMSG)
{
    bot('ForwardMessage',[
        'chat_id'=>$KojaShe,
        'from_chat_id'=>$AzKoja,
        'message_id'=>$KodomMSG
    ]);
}
	function save($filename,$TXTdata)
{
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    fwrite($myfile, "$TXTdata");
    fclose($myfile);
}
	//====================EightTeam======================//
 
//-//////
$update = json_decode(file_get_contents('php://input'));
$sher = file_get_contents("https://eblis.elithost.ga/sher.php");
$love = file_get_contents("https://gardteam.elithost.ir/love.php");
$tas = file_get_contents("https://eblis.elithost.ga/tas.php");
$zekr = file_get_contents("https://gardteam.elithost.ir/zekr.php");
$faz = file_get_contents("https://eblis.elithost.ga/faz.php");
$jok = file_get_contents("https://gardteam.elithost.ir/joke.php");
$danestani = file_get_contents("https://eblis.elithost.ga/danestani.php");
$date = file_get_contents("https://provps.ir/td?td=date");
$time = file_get_contents("https://provps.ir/td?td=time");
$sang = file_get_contents("https://eblis.elithost.ga/sang.php");
$kaqaz = file_get_contents("https://eblis.elithost.ga/kaqaz.php");
$gheychi = file_get_contents("https://eblis.elithost.ga/gheychi.php");
$fal = file_get_contents("https://eblis.elithost.ga/fal.php");
$message = $update->message; 
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$username = $update->message->from->username;
$ADMIN = 483370175;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$message_id = $update->callback_query->message->message_id;
$EightTeam = file_get_contents("data/".$from_id."/EightTeam.txt");
//---------------//
if(preg_match('/^\/([Ss]tart)/',$text)){
 if (!file_exists("data/$from_id/EightTeam.txt")) {
        mkdir("data/$from_id");
        save("data/$from_id/EightTeam.txt","no");
          $myfile2 = fopen("data/users.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
    }
sendaction($chat_id, typing);
        bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' =>"سلام $name به ربات سرگرم شو خوش اومدی 🤠 این ربات قابلیت های زیادی داره مثل جک فاز سنگین فال حافظ و... 😄🤚
جهت ورود به ربات روی دکمه ورود به ربات🚪  کلیک نمایید 😁",
                'parse_mode'=>$mode,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"ورود به ربات 🚪",'callback_data'=>"a"]
              ]
              ]
        ])
 ]);
}

//////////////

//====================EightTeam======================//
elseif($data == "a"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خب خوش اومدید به ربات 😻
از امکانات ربات استفاده کنید 😊",
                'parse_mode'=>$mode,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
			                    [
['text'=>"جوک 😂",'callback_data'=>"j"],['text'=>"فاز سنگین 🚬",'callback_data'=>"faz"]
              ],
              [
              ['text'=>"دانستنی 🤔",'callback_data'=>"d"],['text'=>"ذکر هفته 📚",'callback_data'=>"zekr"]
              ],
              [
              ['text'=>"شعر حافظ 📖",'callback_data'=>"f"],['text'=>"متن عاشقانه ❤️",'callback_data'=>"love"]
              ],
              [
['text'=>"انداختن تاس 🎲",'callback_data'=>"tas"],['text'=>"مشخصات شما 👤",'callback_data'=>"info"]
              ],
              [
['text'=>"سنگ کاغد قیچی ✌️",'callback_data'=>"san"],['text'=>"فال حافظ 📜",'callback_data'=>"hafez"]
              ],
              [
['text'=>"تاریخ و ساعت ⏰",'callback_data'=>"sa"]
              ],
              [
['text'=>"درباره سازنده 🔖",'callback_data'=>"da"],['text'=>"پشتیبانی ربات 👥️",'callback_data'=>"po"]
              ],
              [
['text'=>"راهنما ربات 🎗",'callback_data'=>"r"],['text'=>"کانال ما 😄️",'callback_data'=>"ca"]
              ]
              ]
        ])
 ]);
}
if($text == '/info'){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"یوزرنیم شما: @$username
نام شما: $name
ایدی عددی شما : $chat_id",
 ]);
}
elseif($data == "tas"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"$tas",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($data == "hafez"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"به قسمت فایل حافظ خوش اومدید 😻
جهت گرفتن فال نیت کرده و شعر زیر را بخوانید 😶

ای حافظ شیرازی! تو محرم هر رازی! تو را به خدا و به شاخ نباتت قسم می دهم که هر چه صلاح و مصلحت می بینی برایم آشکار و آرزوی مرا براورده سازی. 

سپس بر روی دکمه نیت کردم کلیک نمایید 💙",
                'parse_mode'=>$mode,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
			                    [
                        ['text' => "نیت کردم", 'callback_data' => "fal"]
              ]
              ]
])
]);
}
elseif($data == "fal"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"$fal",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($data == "san"){
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"خب خب میخای سنگ کاغذ قیچی بازی کنی 😁
یکی رو انتخواب کن ببینم 😛",
                'parse_mode'=>$mode,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
			                    [
                        ['text' => "سنگ 👊", 'callback_data' => "sang"],['text' => "کاغذ 🖐", 'callback_data' => "kaqaz"],['text' => "قیچی ✌️", 'callback_data' => "gheychi"]
              ]
              ]
])
]);
}
elseif($data == "sang"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"$sang",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($data == "kaqaz"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"$kaqaz",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($data == "gheychi"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"$gheychi",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($data == "sa"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"تاریخ 📆 : $date
ساعت ⏰ : $time",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($data == "po"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"جهت ارتباط با پشتیبانی به آیدی های زیر پیام دهید 🤚😃
ایدی ربات پشتیبانی خود یا ایدی خود",
 'parse_mode'=>"HTML",
 ]);
}
elseif($data == "da"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"این ربات پیشرفته توسط 
@KINGMNbo
نوشته شده است 😻
",
 'parse_mode'=>"HTML",
 ]);
}
elseif($data == "ca"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"لینک عضویت در چنل ما :
https://telegram.me/ایدی چنل خود 😻",
 'parse_mode'=>"HTML",
 ]);
}
elseif($data == "r"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"کار با ربات ما آسونه 😁💙
روی دکمه شیشه ای مورد نظرت میزنی و چیزی که میخای بهت میده ❤️ مثل جوک فاز سنگین و...😝🤠
ایدی چنل خود ",
 'parse_mode'=>"HTML",
 ]);
}
elseif($data == "info"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"جهت دریافت مشخصات خود روی /info کلیک نمایید ❤️🤠",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($data == "zekr"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"$zekr",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($data == "d"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"$danestani",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($data == "j"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"$jok",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($data == "faz"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"$faz",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($data == "f"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"$sher",
 'parse_mode'=>"MarkDown",
 ]);
}
elseif($data == "love"){
bot('sendMessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"$love",
 'parse_mode'=>"MarkDown",
 ]);
}
/////EightTeam//
elseif($text == "/panel" && $from_id == $ADMIN){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"ادمین عزیز 😁به پنل مدیریتی ربات خودش امدید",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            'keyboard'=>[
              [
              ['text'=>"آمار"],['text'=>"پیام همگانی"]
              ],
              ],'resize_keyboard'=>true
        ])
            ]);
        }
elseif($text == "آمار ربات خود😄" && $from_id == $ADMIN){
 sendaction($chat_id,'typing');
    $user = file_get_contents("data/users.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
 sendmessage($chat_id , " آمار کاربران : $member_count" , "html");
}
elseif($text == "پیام همگانی" && $from_id == $ADMIN){
    save("data/$from_id/EightTeam.txt","bc");
 sendaction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" پیام مورد نظر رو در قالب متن بفرستید:",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
   [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($EightTeam == "bc" && $from_id == $ADMIN){
    save("data/$from_id/EightTeam.txt","no");
 SendAction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" پیام همگانی فرستاده شد.",
  ]);
 $all_member = fopen( "data/users.txt", "r");
  while( !feof( $all_member)) {
    $user = fgets( $all_member);
   SendMessage($user,$text,"html") 

  }
}
?>the
