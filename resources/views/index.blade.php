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
      width:150px;
      height:30px;
    }
    .Form-button {
      padding:10px 10px 10px 10px;
    }
    .Form-Item {
      display:flex;
    }
    .thu {
      display:flex;
    }
    .thur {
      display:flex;
    }
    .p-postal-code {
      width:300px;
      height:30px;
    }
    .personality {
      margin-left:50px;
    }
    .example {
      display:flex;
    }
    input {
      margin-top:5px;
      margin-left:20px;
    }
    h2 {
      font-size:15px;
    }
    .Form-Item-Input-Meal {
      width:300px;
    }
    .Form-Item-Input-Building {
      width:300px;
    }
    .example-1 {
      margin-top:-5px;
      margin-left:80px;
      color: lavender;
    }
    .example-2 {
      margin-left:120px;
      margin-top:-5px;
      color: lavender;
    }
    .Form-button {
      padding:10px 30px 10px 30px;
      margin-top:30px;
      margin-left:130px;
    }
    .Form-Item-Textare {
      padding-top:20px;
    }
    textarea {
      margin-top:10px;
      margin-left:20px;
    }
    .sex {
      margin-top:10px;
    }
    .personality {
      margin-top:15px;
    }
    .post {
      margin-left:20px;
      margin-top:9px;
      margin-right:-10px;
    }
    .example-3 {
      margin-left:140px;
      margin-top:0px;
      color:lavender;
    }
    .example-4 {
      margin-left:120px;
      margin-top:-4px;
      color:lavender;
    }
    .example-5 {
      margin-left:70px;
      margin-top:3px;
      color:lavender;
    }
    .example-6 {
      margin-left:80px;
      margin-top:4px;
      color:lavender;
    }
    .boy {
      margin-left:9px;
      margin-top:10px;
    }
    .girl {
      margin-left:9px;
      margin-top:10px;
    }
    button {
      background:black;
      color:white;
    }
    input {
      border-radius:5px;
      border-color: lavender;
    }
    textarea {
      border-radius:5px;
      border-color: lavender;
    }
  </style>
  
  <h1>お問い合わせ</h1>
  <form action="/keep" method="POST">
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
        <h2 class="Form-Item-Label">
         お名前
        </h2>
        <input type="text" class="Form-Item-Input" name="name" value="" required/>
        <input type="text" class="Form-Item-Input" name="username" value="{{ old('username') }}" required/>
      </div>
      <div class="example">
        <p class="example-1">例) 山田</p>
        <p class="example-2">例) 太郎</P>
      </div>
      <div class="Form-Item">
        <h2 class="Form-Item-Label">性別</h2>
        <input type="radio" name="sex" class="personality" value="男性" size="10" checked> <p class="boy">男性</p>
        <input type="radio" name="sex" class="personality" value="女性" size="10"><p class="girl"> 女性</p>
      </div>
      <div class="Form-Item">
        <h2 class="Form-Item-Label">メールアドレス</h2>
        <input type="text" class="Form-Item-Input-Meal" name="meal" value="" required/>
        @error('content') <span class="error">{{ $message }}</span> @enderror
      </div>
      <div class="example">
        <p class="example-3">例) test@example.com</p>
      </div>
      <div class="Form-Item">
         <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
        <div class="h-adr">
          <span class="p-country-name" style="display:none;">Japan</span>
          <div class="thu">
             <h2 class="From-Item-Label">郵便番号</h2>
              <p class="post">〒</p><input type="text" class="p-postal-code" size="9" maxlength="8" name="number"  value="" required/>
          </div>
          <div class="example">
            <p class="example-4">例) 123-4567</p>
          </div>
          <div class="thur">
           <h2>住所</h2>
           <input type="text" height="500" class="p-region p-locality p-street-address" style="width:300px;" name="address" value="" required/>
          </div>
          <div class="example">
            <p class="example-5">例) 東京都渋谷区千駄ヶ谷1-2-3</p>
          </div>
        </div>
      </div>
      <div class="Form-Item">
        <h2 class="Form-Item-Label">
          建物名
        </h2>
        <input type="text" class="Form-Item-Input-Building" name="building" value="" required/>
      </div>
      <div class="example">
        <p class="example-6">例) 千駄ヶ谷マンション101</p>
      </div>
      <div class="Form-Item">
         <h2 class="Form-Item-Label-isMsg">ご意見</h2>
         <textarea class="Form-Item-Textarea" maxlength="120" name="opinion" value=""></textarea>
      </div>
         <button class="Form-button">確認</button>
    </div> 
  </form>

 <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>