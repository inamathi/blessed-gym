// window.addEventListener("load", function(){

// //プラグインを定義
// gsap.registerPlugin(ScrollTrigger);

// const area  = document.querySelector(".js-area");
// const wrap  = document.querySelector(".js-wrap");
// const items = document.querySelectorAll(".js-item");
// const num   = items.length;

// //横幅を指定
// gsap.set(wrap,  { width: num * 100 + "%" });
// gsap.set(items, { width: 100 / num + "%" });

// gsap.to(items, {
//   xPercent: -100 * ( num - 1 ), //x方向に移動させる
//   ease: "none",
//   scrollTrigger: {
//     trigger: area, //トリガー
//     start: "top", //開始位置
//     // end: "+=1000", //終了位置 スクロール量の調整
//     end: "+=1200px",
//     pin: true, //ピン留め
//     scrub: true, //スクロール量に応じて動かす
//   }
// });
// });

const mySwiper = new Swiper ('.swiper', {
  loop: true, //無限loop
  slidesPerView: '1.2', //何枚表示するか
  breakpoints: {
    768: {
      slidesPerView: '2',
    },
    1025: {
      slidesPerView: '3',
    }
  },
  speed: 1000, // スライドアニメーションのスピード（ミリ秒）
  centeredSlides : true,
 autoplay: { //自動再生する
   delay: 2000, //次のスライドに切り替わるまでの時間
     disableOnInteraction: false, //ユーザーが操作したら止めるか
     waitForTransition: false, // アニメーションの間にスライドを止めるか
 },
  //ページネーション表示の設定
  // pagination: { 
  //   el: '.swiper-pagination', //ページネーション要素のクラス名
  //   clickable: true, //クリック可能にするか
  //   type: 'bullets', //ページネーションの種類
  // },
 
  //ナビゲーションボタン（矢印）表示の設定
  // navigation: { 
  //   nextEl: '.swiper-button-next', //「次へボタン」要素のクラス名
  //   prevEl: '.swiper-button-prev', //「前へボタン」要素のクラス名
  // },
});