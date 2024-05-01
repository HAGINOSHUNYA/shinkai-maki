@extends('layouts.app')
@section('content')
<!---->
<hr>
<div class="container" ><!--style="max-width: 1000px;"-->
  @include('index.carousel')
  <hr style="size:10px;">

  <div class="row text-center">
    <h1>薪販売・配達承ります！！</h1>
    
  </div>

  
    <h3 style="text-align: center;" id="1">商品の紹介</h3>
      <div class="row parent">
         <img src="{{ asset('img/img5.jpg') }}" class="background-image" alt="..." style="height: 500px;">
        <div class="col-12 ">
          <img src="{{ asset('img/img2.jpg') }}" class="overlay-image" alt="..." style="height: 250px; width:250px;">
          <p class="overlay-font">ナラやケヤキなどの広葉樹を常時乾燥状態でご用意しております。</p>
        </div>
      </div>

  <div class="row">
    <h3 style="text-align: center;" id="2">価格</h3>
    <div class="col-8">
        @include('index.place-carousel')
    </div>
     <div class="col-4" style="background-color: azure;">
      <p class="content">メッシュカゴ<br>約1㎥:￥27000円(税抜き)</p>
      <p class="content">配達:5000円～</p>
      <p><small>※機材の関係で道路状況に応じて料金は変動します。<br>
          詳しくはお問い合わせください。</small></p>
     </div>
  </div>

  <div class="row">
    <h3 style="text-align: center;" id="3">引き取り場所</h3>
    <img src="{{ asset('img/map.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
  </div>

  <hr>
  <div class="row">
    <div class="col-6">
      <img src="{{ asset('img/img10.jpg') }}" class="d-block w-100" alt="..." style="height: 500px;">
    </div>
    <div class="col-6" style="background-color: azure;">
      <p class="content">富山県富山市三上97</p>
    </div>

  <div class="row">
    <p></p>
  </div>

  <div class="row">
      <h3 style="text-align: center;" id="4">よくある質問</h3>
      @include('index.accodion')
  </div>

  <div class="row">
    <h3 style="text-align: center;" id="5">会社概要・お問い合わせ</h3>
    <div class="col-4">
    <img src="{{ asset('img/logo.jpg') }}" class="d-block w-100" alt="会社の外観" style="height: 300px;">

    </div>
    <div class="col-8">
      <p>会社名　シンカイ銘木</p>
      <p>代表者　畠山真一</p>
      <p>所在地　〒931-8434　富山県富山市三上6</p>
      <p>電　話　076-451-8048</p>
      <p>事業内容　集成材加工・立木伐採・薪販売</p>
      <p>営業時間　9:00～17:00</p>
      <p>お問い合わせ・ご注文は、電話にて承っています</p>
    </div>
  </div>
 
  
</div>
@endsection