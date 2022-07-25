'use strict'

/*=================================================
トップへ戻るボタンの実装
===================================================*/
$(function () {
  var pagetop = $('.page-top');
  // ボタン非表示
  pagetop.hide();

  // 1200px スクロールしたらボタン表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1200) {
      pagetop.fadeIn();
      // 画面が1200pxより上なら、ボタンを表示しない
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false;
  });
});


/*=================================================
ハンバーガーメニューについて
===================================================*/
{
  const open = document.getElementById('open');
  const overlay = document.querySelector('.overlay');
  const close = document.getElementById('close');


  // クリックしたら処理してねの指示
    open.addEventListener('click', () => {
    overlay.classList.add('show');
    open.classList.add('hide')
    // hideクラスを作成してマテリアルアイコン開いた時にアイコン（閉）の後ろに透ける（開）マークをなくすため
  });

  close.addEventListener('click', () => {
    overlay.classList.remove('show');
    open.classList.remove('hide')
  });
}
