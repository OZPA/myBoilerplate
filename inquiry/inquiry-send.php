<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="canonical" href="" />
  <title>お問い合わせ頂き誠にありがとうございました｜サイト名</title>
  <link rel="stylesheet" href="../common/css/style.css">
  <link rel="stylesheet" href="../common/font-awesome/css/font-awesome.min.css">
  <script type="text/javascript" src="../common/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="../common/js/script.js"></script>
</head>
<?
$lastname=$_POST['lastname'];
$firstname=$_POST['firstname'];
$fullname=$lastname.$firstname;
$lastnamekana=$_POST['lastnamekana'];
$firstnamekana=$_POST['firstnamekana'];
$fullnamekana=$lastnamekana.$firstnamekana;
$zip=$_POST['zip'];
$pref=$_POST['pref'];
$address2=$_POST['address2'];
$address3=$_POST['address3'];
	$jyusyo=$pref.$address2.$address3;
$tel=$_POST['tel'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$checkbox=$_POST['checkbox'];
$radio=$_POST['radio'];
$bikou=$_POST['bikou'];
//print_r($_POST);


//宛先＆FROM設定
$fm_name="お問い合わせ";
$mad = "メールアドレス";
$mad1 = "メールアドレス";

$head = "FROM:$mad";
$head2 = "FROM:$email";

$ml_title = "サイト名！！フォームより".$fm_name."を承りました。";

$reply_h .= "$fullname 様\n";
$reply_h .= "お問い合わせいただき誠にありがとうございました。\n";
$reply_h .= "\n";
$reply_h .= "以下は、お客様が入力された情報です。\n";
$reply_h .= "---------------------------------------------------------------------------\n";
$reply_b .= "ご注文内容　　　：　$checkbox\n";
$reply_b .= "お名前　　　　　：　$fullname\n";
$reply_b .= "ふりがな　　　　：　$fullnamekana\n";
$reply_b .= "郵便番号　　　　：　$zip\n";
$reply_b .= "住　所　　　　　：　$jyusyo\n";
$reply_b .= "電話番号　　　　：　$tel\n";
$reply_b .= "ＦＡＸ番号　　　：　$fax\n";
$reply_b .= "メールアドレス　：　$email\n";
$reply_b .= "$radio\n";
$reply_b .= "$bikou\n";
$reply_b .= "---------------------------------------------------------------------------\n";
$reply_b .= "ご不明な点がございましたら、下記までお問い合わせください。\n";
$reply_b .= "サイト名\n";
$reply_b .= "住所\n";
$reply_b .= "TEL：\n";
$reply_b .= "FAX：\n";
$reply_b .= "E-mail： \n";

//メール本文組立（ユーザー）
$reply=$reply_h.$reply_b;

// カレントの言語を日本語に設定する
mb_language("ja");
// 内部文字エンコードを設定する
mb_internal_encoding("UTF-8");


if($email !=""){
	//ユーザーに送信
	mb_send_mail($email,$ml_title,$reply,$head);
	//会社に送信
	mb_send_mail($mad,$ml_title,$reply,$head2);
	mb_send_mail($mad1,$ml_title,$reply,$head2);
}

?>
<body>

<p>お問い合わせ頂き誠にありがとうございました。</p>
<p><?=$ml_title?><br />
ご登録いただいたメールアドレスにオートアンサーメールが届きます。<br />
※携帯電話のメールを登録された方は、メール拒否設定を解除してください。</p>

<p><a href="/">トップページへ戻る</a></p>

</body>
</html>