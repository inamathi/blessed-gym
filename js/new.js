// 投稿から３日以内の記事に NEW を表示
// 対象の要素を取得
const blogNew = document.querySelector(".blog_new");

// テキストコンテンツを取得
const blogNewTextContent = blogNew.textContent;

// テキストコンテンツを一文字ずつ分割して<span>タグで囲んで新しい文字列を作成
const blogNewSliceContent = [...blogNewTextContent]
  .map((char) => `<span>${char}</span>`)
  .join("");
// 新しい文字列をHTMLに挿入
blogNew.innerHTML = blogNewSliceContent;

gsap.fromTo(
  ".blog_new span", // アニメーションさせる要素
  {
    autoAlpha: 0, // アニメーション開始前は透明
    scale: 0, // 拡大率0(表示なし)
  },
  {
    autoAlpha: 1, // アニメーション後は出現(透過率0)
    scale: 1, // 拡大率等倍
    stagger: 0.2, // 0.2秒遅れて順番に再生
    scrollTrigger: {
      trigger: ".blog_new span", // アニメーションが始まるトリガーとなる要素
      start: "top center", // アニメーションが始まる位置
      markers: false, // マーカー表示
    },
  }
);

//セクションタイトルをアニメーション表示
$(function(){
  gsap.utils.toArray(".section_heading-label").forEach(sectitles => {
    const secHeadLabelNew = sectitles;

    const secHeadLabelNewContent = secHeadLabelNew.textContent;
    console.log(secHeadLabelNewContent, 'それぞれのタイトル');
    const secHeadLabelSliceContent = [...secHeadLabelNewContent]
    .map((char) => `<span>${char}</span>`)
    .join("");

    secHeadLabelNew.innerHTML = secHeadLabelSliceContent;
    console.log(sectitles);
    gsap.fromTo(
      sectitles.querySelectorAll('span'),
      {
        autoAlpha: 0,
        scale: 0,
        yPercent: 50,
      },
      {
        autoAlpha: 1,
        scale: 1,
        stagger: 0.05,
        scrollTrigger: {
          trigger: sectitles,
          start: "top center",
          markers: false,
        },
    });
  });
});

