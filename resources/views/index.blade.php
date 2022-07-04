<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <style>
    .Form-Item-Textarea {
      height:100px;
      width:300px;
    }
    .Form-Item-Input {
      width:300px;
      height:30px;
    }
    input:valid {
      border:1px solid green;
    }
    input:invalid {
      border:1px solid red;
    }
    .Form-button {
      padding:10px 10px 10px 10px;
    }
  </style>
  <form id="form">
    @csrf
   <div class="Form">
    @if (count($errors) > 0)
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
    @endif
    <div class="Form-Item">
     <p class="Form-Item-Label">
      氏名
     </p>
     <input type="text" class="Form-Item-Input" required/>
    </div>
    <div class="Form-Item">
     <p class="Form-Item-Label">年齢</p>
     <input type="text" class="Form-Item-Input" required/>
     @error('content') <span class="error">{{ $message }}</span> @enderror
    </div>
    <div>
     <p class="Form-Item">性別</p>
     <input type="radio" name="sex" value="男性" checked> 男性
     <input type="radio" name="sex" value="女性"> 女性
    </div>
    <div class="Form-Item">
      <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
     <div class="h-adr">
       <span class="p-country-name" style="display:none;">Japan</span>
        〒<input type="text" class="p-postal-code" size="8" maxlength="8" required/><br>
            <select class="p-region-id">
              <option value="">--</option>
              <option value="1">北海道</option>
              <option value="2">青森県</option>
              <option value="3">岩手県</option>
              <option value="4">宮城県</option>
              <option value="5">秋田県</option>
              <option value="6">山形県</option>
              <option value="7">福島県</option>
              <option value="8">茨城県</option>
              <option value="9">栃木県</option>
              <option value="10">群馬県</option>
              <option value="11">埼玉県</option>
              <option value="12">千葉県</option>
              <option value="13">東京都</option>
              <option value="14">神奈川県</option>
              <option value="15">新潟県</option>
              <option value="16">富山県</option>
              <option value="17">石川県</option>
              <option value="18">福井県</option>
              <option value="19">山梨県</option>
              <option value="20">長野県</option>
              <option value="21">岐阜県</option>
              <option value="22">静岡県</option>
              <option value="23">愛知県</option>
              <option value="24">三重県</option>
              <option value="25">滋賀県</option>
              <option value="26">京都府</option>
              <option value="27">大阪府</option>
              <option value="29">奈良県</option>
              <option value="30">和歌山県</option>
              <option value="31">鳥取県</option>
              <option value="32">島根県</option>
              <option value="33">岡山県</option>
              <option value="34">広島県</option>
              <option value="35">山口県</option>
              <option value="36">徳島県</option>
              <option value="37">香川県</option>
              <option value="38">愛媛県</option>
              <option value="39">高知県</option>
              <option value="40">福岡県</option>
              <option value="41">佐賀県</option>
              <option value="42">長崎県</option>
              <option value="43">熊本県</option>
              <option value="44">大分県</option>
              <option value="45">宮崎県</option>
              <option value="46">鹿児島県</option>
              <option value="47">沖縄県</option>
           </select><br>
           <input type="text" class="p-locality p-street-address p-extended-address"/><br>
     </div>
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label isMsg">お問い合わせ内容</p>
      <textarea class="Form-Item-Textarea"></textarea>
    </div>
    <form method="POST" action="/keep">
      @csrf
      <button class="Form-button">送信</button>
    </form>
   </div>
  </form>

 <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>