@extends('layouts.app')
@section('content')
<!---->

<div class="container" ><!--style="max-width: 1000px;"-->
  @include('index.carousel')
  <hr style="size:10px;">

  <div class="row text-center">
    <h1>薪販売・配達承ります！！</h1>
    
  </div>

  <div class="row">
    <h3 style="text-align: center;">商品の紹介</h3>
    <div class=col-6>
    <img src="{{ asset('img/maki_2.jpg') }}" class="d-block w-100" alt="..." style="height: 200px;">
    </div>
  <div class="col-6">
    <h4>薪の説明・特徴</h4>
    <p>薪の種類</br>
      ケヤキ（広葉樹）・ナラ（広葉樹）<br>
      堅く、火持ちしやすい広葉樹を常時乾燥した状態でご用意しています。</p>
    </p>
    <p>
      薪の長さ<br>
      36~40cm
    </p>
    

  </div>
  
  <div class="row">
    <h3 style="text-align: center;">価格</h3>
     <div class="col-4">
       <img src="{{ asset('img/maki_2.jpg') }}" class="d-block w-100" alt="会社の外観" style="height: 200px;">
     </div>
     <div class="col-8">
      <p>
        メッシュカゴ<br>約1㎥:￥29600円(税込)
      </p>
      <p>
        配達:5000円～
      </p>

     </div>
  </div>

  <div class="row">
    <h3>引き取り場所</h3>
    <div class="col-8">

    @include('index.place-carousel')
    </div>
    <div class="col-4">

    </div>

  </div>

  <div class="row">
      <h3 style="text-align: center;">よくある質問</h3>
      @include('index.accodion')
  </div>

  <div class="row">
    <h3 style="text-align: center;">会社概要</h3>
    <div class="col-4">
    <img src="{{ asset('img/maki_2.jpg') }}" class="d-block w-100" alt="会社の外観" style="height: 200px;">

    </div>
    <div class="col-8">
      <p>会社名　シンカイ銘木</p>
      <p>代表者　畠山真一</p>
      <p>所在地　〒931-8434　富山県富山市三上6</p>
      <p>電　話　076-451-8048</p>
      <p>事業内容　集成材加工・立木伐採・薪販売</p>

    </div>
  </div>
  
  <div class="row text-center">
    
    <h1>お問い合わせ</h1>
    <p>お問い合わせ・ご注文は、下記電話にて承っています</p>
    <p>TEl:076-451-8048</p>
    <p>営業時間　9:00～17:00</p>

  </div>

  
</div>
@endsection