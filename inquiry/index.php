<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="canonical" href="" />
  <title>お問い合わせ｜サイト名</title>
  <link rel="stylesheet" href="../common/css/style.css">
  <link type="text/css" rel="stylesheet" href="../common/exValidation-master/styles/exvalidation.css" />
  <link rel="stylesheet" href="../common/font-awesome/css/font-awesome.min.css">
  <script type="text/javascript" src="../common/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="../common/js/script.js"></script>
  <script type="text/javascript" src="../common/exValidation-master/scripts/jQselectable.js"></script>
<script type="text/javascript" src="../common/exValidation-master/scripts/exvalidation.js"></script>
<script type="text/javascript" src="../common/exValidation-master/scripts/exchecker-ja.js"></script>
</head>
<body>

<form id="toi" name="toi" action="inquiry-view.php" onsubmit="" method="post">
<div id="checkbox">
  <table class="table--inquiry">
      <tr>
        <th>チェックボックス</th>
      </tr>
      <tr>
        <td><input type="checkbox" value="hogehoge" id="checkbox_01" name="checkbox[]"> </td>
      </tr>
      <tr>
        <td><input type="checkbox" value="hogehoge" id="checkbox_01" name="checkbox[]"> </td>
      </tr>
  </table>
  <!-- /.table--inquiry -->
</div>
<!-- #checkbox -->

<table class="table--inquiry">
        <tr>
          <td><span class="inquiry__text--required">※</span>お名前</td>
          <td>（姓）<input type="text" name="lastname" id="lastname" value=""> （名）<input type="text" name="firstname" id="firstname" value=""></td>
        </tr>
        <tr>
          <td><span class="inquiry__text--required">※</span>ふりがな</td>
          <td>（姓）<input type="text" name="lastnamekana" id="lastnamekana" value=""> （名）<input type="text" name="firstnamekana" id="firstnamekana" value=""></td>
        </tr>
        <tr>
          <td><span class="inquiry__text--required">※</span>郵便番号（ハイフン不要）</td>
          <td><input type="text" name="zip" id="zip" value="" size="10"></td>
        </tr>
        <tr>
          <td><span class="inquiry__text--required">※</span>都道府県</td>
          <td>
            <select id="pref" name="pref">
<optgroup label="">
<option value=""></option>
</optgroup>
<optgroup label="北海道">
<option value="北海道">北海道</option>
</optgroup>
<optgroup label="東北">
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
</optgroup>
<optgroup label="関東">
<option value="東京都">東京都</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="神奈川県">神奈川県</option>
</optgroup>
<optgroup label="北陸">
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
</optgroup>
<optgroup label="甲信越">
<option value="新潟県">新潟県</option>
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>
</optgroup>
<optgroup label="東海">
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
</optgroup>
<optgroup label="関西">
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
</optgroup>
<optgroup label="中四国">
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
</optgroup>
<optgroup label="九州">
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
</optgroup>
<optgroup label="沖縄">
<option value="沖縄県">沖縄県</option>
</optgroup>
</select>
          </td>
        </tr>
        <tr>
          <td><span class="inquiry__text--required">※</span>市区町村</td>
          <td><input type="text" name="address2" id="address2" value="" size="66"></td>
        </tr>
        <tr>
          <td><span class="inquiry__text--required">※</span>丁目番地、建物名など</td>
          <td><input type="text" name="address3" id="address3" value="" size="66"></td>
        </tr>
        <tr>
          <td><span class="inquiry__text--required">※</span>電話番号（半角数字）<span class="coOr"></span></td>
          <td><input type="text" name="tel" id="tel" value="" size="30"></td>
        </tr>
        <tr>
          <td>FAX番号</td>
          <td><input type="text" name="fax" value="" size="30">
                </td>
        </tr>
        <tr>
          <td><span class="inquiry__text--required">※</span>メールアドレス</td>
          <td><input type="text" name="email" id="email" value="" size="30" ></td>
        </tr>
        <tr>
          <td><span class="inquiry__text--required">※</span>お申込み会員区分</td>
          <td>
            <ol id="radio">
          <li><label for="inq01" id="inq01_label" class="mfp"><input type="radio" name="radio" id="inq01" value="カタログのご請求" class="mfp" />
          カタログのご請求</label>
          </li>
          <li><label for="inq02" id="inq02_label" class="mfp"><input type="radio" name="radio" id="inq02" value="製品に関する問合せ" class="mfp" />
          製品に関する問合せ（価格、仕様）</label>
          </li>
          <li><label for="inq03" id="inq03_label" class="mfp"><input type="radio" name="radio" id="inq03" value="技術に関する問合せ" class="mfp" />
          技術に関する問合せ（操作、取扱い等）</label>
          </li>
          </ol>
          </td>
          </tr>
            <tr>
          <td>備考</td>
          <td><textarea name="bikou" id="bikou" wrap="soft" cols="50" rows="8"></textarea></td>
        </tr>
      </table>

      <input type="submit" value="内容を確認する" id="submit-button">
  </form>


<script type="text/javascript">
  var validation = $("form")
    .exValidation({
      firstValidate: false,
      rules: {
        lastname: "chkrequired",
        firstname:"chkrequired",
        lastnamekana: "chkrequired chkfurigana",
        firstnamekana: "chkrequired chkfurigana",
        email: "chkrequired chkemail chkhankaku",
        tel: "chkrequired chktel",
        zip: "chkrequired chknumonly",
        address2: "chkrequired",
        address3: "chkrequired",
        radio: "chkradio",
        street: "chkgroupt chkrequired",
        checkbox: "chkcheckbox",
        pref: "chkselect",
        file: "chkfile"
      },
      stepValidation: true
  });
</script>

</body>
</html>