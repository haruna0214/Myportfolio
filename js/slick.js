'use strict'

/*=================================================
PICKUP スライダー
===================================================*/
{
  $(document).ready(function () {
    $(".slider-lists").slick({
      autoplay: true, //自動再生する
      autoplaySpeed: 2000, //自動再生するスピード 2秒
      dots: true,//ドット部分を表示する
      arrows: true, // 無限スクロールにするかどうか。最後の画像の次は最初の画像が表示
      infinite: true, //無限にスライドする
      speed: 500, //フェードするスピード 0.5秒
      pauseOnHover: false, // 自動再生時にドットにマウスオンで一時停止するかどうか
    });
  });
}
