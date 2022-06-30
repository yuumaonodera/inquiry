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
  </style>
 <form>
  <div class="Form">
   <div class="Form-Item">
    <p class="Form-Item-Label">
      氏名
    </p>
    <input type="text" class="Form-Item-Input">
   </div>
   <div class="Form-Item">
    <p class="Form-Item-Label">年齢</p>
    <input type="text" class="Form-Item-Input">
    @error('content') <span class="error">{{ $message }}</span> @enderror
   </div>
   <div>
    <p class="Form-Item">性別</p>
    <input type="radio" name="sex" value="男性" checked> 男性
    <input type="radio" name="sex" value="女性"> 女性
   </div>
   <div class="Form-Item">
    <p class="Form-Item-Label">郵便番号</p>
    <input type="text" class="Form-Item-Input" >
    <button>郵便番号検索</button>
   </div>
   <div class="Form-Item">
    <th>都道府県</th>
    <input></input>
   </div>
   <div class="Form-Item">
    <th>市町村</th>
    <input></input>
   </div>
   <div class="Form-Item">
    <th>町内番号地</th>
    <input></input>
   </div>
   <div class="Form-Item">
    <th>建物名</th>
    <input></input>
   </div>
   <div class="Form-Item">
    <p class="Form-Item-Label">住所</p>
    <input type="email" class="Form-Item-Input" >
   </div>
   <div class="Form-Item">
     <p class="Form-Item-Label isMsg">お問い合わせ内容</p>
     <textarea class="Form-Item-Textarea"></textarea>
   </div>
   <input type="submit" class="Form-Btn" value="送信する">
  </div>
 </form>
 <script src="main.js"></script>
</body>

</html>