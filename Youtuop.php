<?php
#@armof
#php_aba
ob_start();
$API_KEY = "1636906049:AAHY7vuCfUFZOxO4mc35o1nvMBkyGsKPisQ";
define('API_KEY',$API_KEY);
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
 function sendmessage($F_PPP, $php_aba, $model){
 bot('sendMessage',[
 'chat_id'=>$F_PPP,
 'text'=>$php_aba,
 'parse_mode'=>$mode
 ]);
 }
 function sendphoto($F_PPP, $photo, $captionl){
 bot('sendphoto',[
 'chat_id'=>$F_PPP,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendaudio($F_PPP, $audio, $caption, $title ,$performer){
 bot('sendaudio',[
 'chat_id'=>$F_PPP,
 'audio'=>$audio,
 'caption'=>$caption,
 'title'=>$title,
 'performer'=>$performer
 ]);
 }
 function senddocument($F_PPP, $document, $caption){
 bot('senddocument',[
 'chat_id'=>$F_PPP,
 'document'=>$document,
 'caption'=>$caption
 ]);
 }
 function sendsticker($F_PPP, $sticker){
 bot('sendsticker',[
 'chat_id'=>$F_PPP,
 'sticker'=>$sticker
 ]);
 }
 function sendvideo($F_PPP, $video, $caption){
 bot('sendvideo',[
 'chat_id'=>$F_PPP,
 'video'=>$video,
 'caption'=>$caption
 ]);
 }
 function sendvoice($F_PPP, $voice, $caption){
 bot('sendvoice',[
 'chat_id'=>$F_PPP,
 'voice'=>$voice,
 'caption'=>$caption
 ]);
 }
 function sendaction($F_PPP, $action){
 bot('sendchataction',[
 'chat_id'=>$F_PPP,
 'action'=>$action
 ]);
 }
 function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
//====================Matthew======================//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$F_PPP = $message->chat->id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->userame;
$php_aba = $message->text;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;
$reply = $update->message->reply_to_message;
$mustafa = file_get_contents("mustafa.txt");
$admin = "ايدي"; 
$ARMOF = file_get_contents("ARMOF.txt");
$ARMOF0 = file_get_contents("ARMOF0.txt");
$ARMOF1= file_get_contents("ARMOF1.txt");
$ARMOF5 = file_get_contents("ARMOF2.txt");
$ARMOF6 = file_get_contents("ARMOF3.txt");
$ARMOF20 = json_decode(file_get_contents('php://input'));
$ARMOF18 = $update->message;
$ARMOF13 = $ARMOF18->chat->id;
$ARMOF17 = $ARMOF18->text;
$meme = $ARMOF20->callback_query->data;
$ARMOF12 = $ARMOF20->callback_query->message->chat->id;
$ARMOF14 =  $ARMOF20->callback_query->message->message_id;
$ARMOF15 = $ARMOF18->from->first_name;
$ARMOF16 = $ARMOF18->from->username;
$ARMOF11 = $ARMOF18->from->id;
$ARMOF2 = explode("\n",file_get_contents("ARMOF4.txt"));
$ARMOF3 = count($ARMOF2)-1;
if ($ARMOF18 && !in_array($ARMOF11, $ARMOF2)) {
    file_put_contents("ARMOF4.txt", $ARMOF11."\n",FILE_APPEND);
  }
$ARMOF9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ARMOF0&user_id=".$ARMOF11);
$ARMOF10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ARMOF1&user_id=".$ARMOF11);
if($ARMOF18 && (strpos($ARMOF9,'"status":"left"') or strpos($ARMOF9,'"Bad Request: USER_ID_INVmustafaD"') or strpos($ARMOF9,'"status":"kicked"') or strpos($ARMOF10,'"status":"left"') or strpos($ARMOF10,'"Bad Request: USER_ID_INVmustafaD"') or strpos($ARMOF10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$ARMOF13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$ARMOF0.'
'.$ARMOF1,
]);return false;}
if($ARMOF17 == "/admin" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>"مرحبآ بك ،  [$fn](tg://user?id=$F_PPP)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"ARMOF0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"ARMOF2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"ARMOF4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"ARMOF"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"ARMOF5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"ARMOF6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"ARMOF7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"ARMOF9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"ARMOF10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"ARMOF11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"ARMOF12"]],
   ] 
   ])
]);
}
if($meme == "ARMOF" ){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
"text"=>"  • مرحبا بك ، [$Name](tg://user?id=$F_PPP2)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"ARMOF0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"ARMOF2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"ARMOF4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"ARMOF"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"ARMOF5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"ARMOF6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"ARMOF7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"ARMOF9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"ARMOF10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"ARMOF11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"ARMOF12"]],
   ] 
   ])
]);
unlink("ARMOF.txt");
}
if($meme == "ARMOF0"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF0");
}
if($ARMOF17 and $ARMOF == "ARMOF0" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF0.txt","$ARMOF17");
unlink("ARMOF.txt");
}
if($meme == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'ARMOF'],
['text'=>'• نعم ، ✅','callback_data'=>'ARMOF1'],
]    
]])
]);    
}
if($meme == "ARMOF1"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF0.txt");
}
if($meme == "ARMOF2"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@Watan_e',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF1");
}
if($ARMOF17 and $ARMOF == "ARMOF1" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF1.txt","$ARMOF17");
unlink("ARMOF.txt");
}
if($meme == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'ARMOF'],
['text'=>'• نعم ، ✅','callback_data'=>'ARMOF3'],
]    
]])
]);    
}
if($meme == "ARMOF3"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF1.txt");
}
if($meme == "ARMOF4"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $ARMOF0 📢 
- القناة الثانية ،  $ARMOF1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
}
if($meme == "ARMOF5"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $ARMOF3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF2");
}
if($ARMOF18 and $ARMOF == "ARMOF2" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
for($i=0;$i<count($ARMOF2); $i++){
bot('forwardMessage', [
'chat_id'=>$ARMOF2[$i],
'from_chat_id'=>$ARMOF11,
'message_id'=>$ARMOF18->message_id
]);
unlink("ARMOF.txt");
}
}
if($meme == "ARMOF6"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $ARMOF3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF3");
}
if($ARMOF17 and $ARMOF == "ARMOF3" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
for($i=0;$i<count($ARMOF2); $i++){
bot('sendMessage', [
'chat_id'=>$ARMOF2[$i],
'text'=>$ARMOF17
]);
unlink("ARMOF.txt");
}
}
if($meme == "ARMOF7"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>"- عدد مشتركين البوت  [ $ARMOF3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
}
if($meme == "ARMOF9"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF2.txt","ARMOF");
}
if($ARMOF17 == "/start" and $ARMOF5 == "ARMOF" and $ARMOF11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$ARMOF15](tg://user?id=$F_PPP) ، 🦕
- المعرف ، [@$ARMOF16](tg://user?id=$F_PPP) ، 🐢
- الايدي ، [$ARMOF11](tg://user?id=$F_PPP) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $ARMOF3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($meme == "ARMOF10"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF2.txt");
}
if($meme == "ARMOF11"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF3.txt","ARMOF");
}
if($ARMOF18 and $ARMOF6 == "ARMOF" and $ARMOF11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$ARMOF11,
'message_id'=>$ARMOF18->message_id
]);
}
if($ARMOF18 and $ARMOF6 == "ARMOF" and $ARMOF11 == $admin){
bot('sendMessage',[
'chat_id'=>$ARMOF18->reply_to_message->forward_from->id,
    'text'=>$ARMOF17,
    ]);
}
if($meme == "ARMOF12"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF3.txt");
} 

if($php_aba == "/start"){
bot('sendMessage',[
'chat_id'=>$F_PPP,
'text'=>"*
🔳أّهِ̀لَأّ بِګ $name 𝆴𝄵                              
🔳فِّ̀يِّ بِوِتّ أّلَتّحٌ̀مَ̀يِّلَ مَ̀نِ̀ يِّوِتّيِّوِبِ 
🔳أّرَّ̀س̀́لَ لَيِّ ر̀أّبِطّ̀́ أّلَفِّ̀دِ̀يِّوِ فِّ̀قِ̀طّ̀́ 
🔳مَ̀نِ̀ خَلَأّلَ @VId او ابحث
*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([   
 'inline_keyboard'=>[
[['text'=>"📎| لشـرآء آلبوت .",'url'=>"t.me/armof"]],
]])
]);
}
$chatid = $update->callback_query->message->chat->id;
if(preg_match("/(.*?)(youtube)|(you)(.*?)/",$php_aba)){
$K=json_decode(file_get_contents("https://youtube-downloader3.herokuapp.com/video_info.php?url=$php_aba"), true); 
$V=$K['links'][0]['url'];
file_put_contents("$v");
  bot('sendmessage',[
 'chat_id'=>$F_PPP,
'message_id'=>$message_id,
 'text'=>"جاري التحميل انتظر لطفا 🦋💞",
'reply_to_message_id'=>$message->message_id, 

]);
bot('sendvideo',[
'chat_id'=>$F_PPP,
'message_id'=>$message_id,
'video'=>$V,
'caption'=>"*تم تحميل الفديو *",
 'parse_mode'=>"MarkDown",
 ]);
bot('sendmessage',[
 'chat_id'=>$F_PPP,
  'message_id'=>$message_id,
'text'=>"*🔳🔳🔳🔳🔳🔳🔳🔳🔳🔳🔳🔳🔳🔳🔳🔳🔳*",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
            ['text'=>"فديو->mp3",'callback_data'=>"d1"],['text'=>"تحويل الفديو لمتحركه🎥",'callback_data'=>"d2"]
            ],
              ]
        ])
 ]);
}
else
{
bot('editMessageText',[
 'chat_id'=>$F_PPP,
 'message_id'=>$message_id + 1,
 'text'=>'لايمكن تحميل هذا الفديو',
 'reply_to_message_id'=>$message->message_id, 
 ]);
}
if($data == "back"){
bot('sendmessage',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=>"اهلا بك في قسم الفديو",
 'parse_mode'=>"MarkDown",
       'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
            ['text'=>"فديو->mp3",'callback_data'=>"d1"],['text'=>" تحويل الفديو لمتحركه🎥",'callback_data'=>"d2"]
            ],
              [
              ['text'=>"رجوع",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
if($data == "d1"){
file_put_contents("mustafa.txt","d1");
bot('editmessageText',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
'text'=>"⬜️ اعد توجيه الفديو او ارسل الفديو 🦋🤍",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"رجوع",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
if($data == "d2"){
file_put_contents("mustafa.txt","d2");
bot('editmessagetext',[
 'chat_id'=>$chatid,
  'message_id'=>$message_id,
 'text'=> " اعد توجيه الفديو او ارسل الفديو 🦋🤍",
 'parse_mode'=>"MarkDown",
      'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
              ['text'=>"رجوع",'callback_data'=>"back"]
              ]
              ]
        ])
 ]);
}
if($mustafa == "d1"){
 file_put_contents("mustafa.txt","No");
$video = $message->video;
$file = $video->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('ArMoF.mp3',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('sendaudio',[
 'chat_id'=>$F_PPP,
 'audio'=>new CURLFile('ArMoF.mp3'),
 ]);
 }
if($mustafa == "d2"){
 file_put_contents("mustafa.txt","No");
$video = $message->video;
$file = $video->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('ArMoF.gif',file_get_contents('https://api.telegram.org/file/bot'.$API_KEY.'/'.$patch));
bot('senddocument',[
 'chat_id'=>$F_PPP,
 'document'=>new CURLFile('ArMoF.gif'),
 ]);
 }
#@armof
#@php_aba
?>