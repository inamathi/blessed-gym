// スクロールで隠れるヘッダ（mobile）
$(function(){
    const header = $('#header_mobile');
    let pastPos = 0;
    $(window).on('scroll', function(){
        const scroll = $(window).scrollTop();
        const start = 108; //クラスの付け外しが行われるポイント。一番上から指定ピクセルスクロールしたら、実行される
      if(scroll >= pastPos && scroll >= start){ //もし('スクロール量が現在の位置を上回ったら' 尚且つ 'スクロール量が指定ピクセルを超えていたら')
            header.addClass('hide');
        } else if(scroll < pastPos) {
            header.removeClass('hide');
        } else {
            header.removeClass('hide');
        }
    //   console.log(pastPos, scroll, '現在位置／最後のスクロール位置');
      pastPos = scroll;
      //今までのスクロール量に現在のスクロール量を代入する。
    });
});

// スクロールで隠れるヘッダ（wide）
$(function(){
    const header = $('#header_wide');
    let pastPos = 0;
    $(window).on('scroll', function(){
        const scroll = $(window).scrollTop();
        const start = 116; //クラスの付け外しが行われるポイント。一番上から指定ピクセルスクロールしたら、実行される
      if(scroll >= pastPos && scroll >= start){ //もし('スクロール量が現在の位置を上回ったら' 尚且つ 'スクロール量が指定ピクセルを超えていたら')
            header.addClass('hide');
        } else if(scroll < pastPos) {
            header.removeClass('hide');
        } else {
            header.removeClass('hide');
        }
    //   console.log(pastPos, scroll, '現在位置／最後のスクロール位置');
      pastPos = scroll;
      //今までのスクロール量に現在のスクロール量を代入する。
    });
});

// スクロールで隠れるフッタ
$(function(){
    const header = $('#footbnr');
    let pastPos = 0;
    $(window).on('scroll', function(){
        const scroll = $(window).scrollTop();
        const start = 108; //クラスの付け外しが行われるポイント。一番上から指定ピクセルスクロールしたら、実行される
      if(scroll >= pastPos && scroll >= start){ //もし('スクロール量が現在の位置を上回ったら' 尚且つ 'スクロール量が指定ピクセルを超えていたら')
            header.addClass('hide');
        } else if(scroll < pastPos) {
            header.removeClass('hide');
        } else {
            header.removeClass('hide');
        }
    //   console.log(pastPos, scroll, '現在位置／最後のスクロール位置');
      pastPos = scroll;
      //今までのスクロール量に現在のスクロール量を代入する。
    });
});

// スクロールで現れるバナー
$(function(){
    const header = $('#float_banner');
    let pastPos = 0;
    $(window).on('scroll', function(){
        const scroll = $(window).scrollTop();
        const start = 400; //クラスの付け外しが行われるポイント。一番上から指定ピクセルスクロールしたら、実行される
      if(scroll >= start){ //もし('スクロール量が現在の位置を上回ったら' 尚且つ 'スクロール量が指定ピクセルを超えていたら')
            header.removeClass('hide');
        } else {
            header.addClass('hide');
        }
    //   console.log(pastPos, scroll, '現在位置／最後のスクロール位置');
      pastPos = scroll;
      //今までのスクロール量に現在のスクロール量を代入する。
    });
});

// メニュークリックでshadeを消す
$(function(){
    $('#header_gnav').click(function() {
        console.log('hogehogegegegegegege');
       // チェックを外す
       $('#drawer_checkbox').removeAttr('checked', true).prop('checked', false).change();
    });
 });

// トップに戻るボタン
$(document).ready(function() {
    var pagetop = $('.btn_pagetop');
      $(window).scroll(function () {
         if ($(this).scrollTop() > 400) {
              pagetop.fadeIn();
         } else {
              pagetop.fadeOut();
              }
         });
         pagetop.click(function () {
             $('body, html').animate({ scrollTop: 0 }, 500);
                return false;
     });
  });

// スムーズスクロール
var headerHeight = $('.header').outerHeight();
var urlHash = location.hash;
if(urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function(){
        var target = $(urlHash);
        var position = target.offset().top - headerHeight;
        $('body,html').stop().animate({scrollTop:position}, 500);
    }, 1000);
};
$('a[href^="#"]').click(function() {
    var href= $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - (headerHeight - 50);
    $('body,html').stop().animate({scrollTop:position}, 500);
});



// アンカー位置までスクロール
// $(function () {
//   var urlHash = location.hash;
//   console.log(urlHash)
//   if (urlHash) {
//     $('body, html').stop().scrollTop(0);
//     setTimeout(function(){
//       var headerHight = 110;
//       var target = $(urlHash);
//       var position = target.offset().top - headerHight;
//       $('body,html').stop().animate({scrollTop:position}, 400);
//   }, 100);
//   console.log('haaaakkkkkkaaa');
// }
// });

// $(function(){
// 	//現在のページURLのハッシュ部分を取得
// 	const hash = location.hash;
//     console.log(hash, 'hakkkaaaaa');
// 	//ハッシュ部分がある場合の条件分岐
// 	if(hash){
// 		//ページ遷移後のスクロール位置指定
// 		$("html, body").stop().scrollTop(0);
// 		//処理を遅らせる
// 		setTimeout(function(){
// 			//リンク先を取得
// 			const target = $(hash),
// 			//リンク先までの距離を取得
// 			position = target.offset().top;
// 			//指定の場所までスムーススクロール
// 			$("html, body").animate({scrollTop:position}, 500, "swing");
// 		});
// 	} else {
//         console.log('hogegegegegeg');
//     }
// });
