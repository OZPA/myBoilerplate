<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
  <link rel="canonical" href="" />
  <title>お問い合わせ内容確認｜サイト名</title>
  <link rel="stylesheet" href="../common/css/style.css">
  <link type="text/css" rel="stylesheet" href="../common/exValidation-master/styles/exvalidation.css" />
  <link rel="stylesheet" href="../common/font-awesome/css/font-awesome.min.css">
  <script type="text/javascript" src="../common/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="../common/js/script.js"></script>
  <script type="text/javascript" src="../common/exValidation-master/scripts/jQselectable.js"></script>
<script type="text/javascript" src="../common/exValidation-master/scripts/exvalidation.js"></script>
<script type="text/javascript" src="../common/exValidation-master/scripts/exchecker-ja.js"></script>
</head>
<body class="body body--articlePage body--inquiry">

<form id="toi" name="toi" action="inquiry-send.php" onsubmit="return Checkform()" method="post">
<p>下記内容が、お客様が入力された内容です。<br />お間違えの無いことをご確認の上、送信ボタンをクリックして下さい。</p>

<?
$checkbox = implode("<br />", $_POST["checkbox"]);
$lastname=$_POST['lastname'];
$firstname=$_POST['firstname'];
$lastnamekana=$_POST['lastnamekana'];
$firstnamekana=$_POST['firstnamekana'];
$zip=$_POST['zip'];
$pref=$_POST['pref'];
$address22 = $_POST["address2"];
$address2 = mb_convert_kana($address22,"sKV","UTF-8");
$address32 = $_POST["address3"];
$address3 = mb_convert_kana($address32,"sKV","UTF-8");
$tel=$_POST['tel'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$naiyou2 = $_POST["naiyou"];
$naiyou = mb_convert_kana($naiyou2,"sKV","UTF-8");
//print_r($_POST);
//?>
<table class="table--inquiry">
  <tr>
    <td>ご注文内容</td>
    <td>
    <?=$checkbox?>
    <input type="hidden" name="checkbox" value="<?=$checkbox?>">
    </td>
  </tr>
  <tr>
    <td>お名前</td>
    <td>
    （姓）<?=$lastname?>　　
    （名）<?=$firstname?>
    <input type="hidden" name="lastname" value="<?=$lastname?>">
    <input type="hidden" name="firstname" value="<?=$firstname?>">
    </td>
  </tr>
  <tr>
    <td>ふりがな</td>
    <td>
    （姓）<?=$lastnamekana?>　　
    （名）<?=$firstnamekana?>
    <input type="hidden" name="lastnamekana" value="<?=$lastnamekana?>">
    <input type="hidden" name="firstnamekana" value="<?=$firstnamekana?>">
    </td>
  </tr>

  <tr>
    <td>郵便番号</td>
    <td>
      <?=$zip?>
      <input type="hidden" name="zip" value="<?=$zip?>">
    </td>
  </tr>
  <tr>
    <td>ご住所　都道府県</td>
    <td><?=$pref?><input type="hidden" name="pref" value="<?=$pref?>"></td>
  </tr>
  <tr>
    <td>市区町村</td>
    <td><?=$address2?><input type="hidden" name="address2" value="<?=$address2?>"></td>
  </tr>
  <tr>
    <td>丁目番地</td>
    <td><?=$address3?><input type="hidden" name="address3" value="<?=$address3?>"></td>
    </tr>
  <tr>
    <td>電話番号</td>
    <td><?=$tel?><input type="hidden" name="tel" value="<?=$tel?>"></td>
  </tr>
  <tr>
    <td>FAX番号</td>
    <td><?=$fax?><input type="hidden" name="fax" value="<?=$fax?>"></td>
  </tr>
  <tr>
    <td>メールアドレス</td>
    <td><?=$email?><input type="hidden" name="email" value="<?=$email?>"></td>
  </tr>
    <tr>
    <td>ラジオ</td>
    <td><?=$radio?><input type="hidden" name="radio" value="<?=$radio?>"></td>
  </tr>
  <tr>
    <td>お問い合わせ内容</td>
    <td><textarea name="naiyou" wrap="soft" cols="50" rows="8" readonly><?=$naiyou?></textarea></td>
  </tr>
</table>
        <input type="submit" value="送信" id="submit-button">
</div>
<!-- .cont -->

</form>

</body>
</html>