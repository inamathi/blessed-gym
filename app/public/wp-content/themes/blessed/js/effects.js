// // 対象の要素を取得
// const sliceHeading = document.querySelector(".slice-heading");

// // テキストコンテンツを取得
// const sliceHeadingTextContent = sliceHeading.textContent;

// // テキストコンテンツを一文字ずつ分割して<span>タグで囲んで新しい文字列を作成
// const sliceHeadingSliceContent = [...sliceHeadingTextContent]
//   .map((char) => `<span>${char}</span>`)
//   .join("");
// // 新しい文字列をHTMLに挿入
// sliceHeading.innerHTML = sliceHeadingSliceContent;
const targets = document.querySelectorAll(".slice-heading span");
if (targets.length) {
  gsap.fromTo(
    ".slice-heading span", // アニメーションさせる要素
    {
      autoAlpha: 0, // アニメーション開始前は透明
      y: 20, // 20px下に移動
    },
    {
      autoAlpha: 1, // アニメーション後は出現(透過率0)
      y: 0, // 20px上に移動
      stagger: 0.05, // 0.2秒遅れて順番に再生
      scrollTrigger: {
        trigger: ".slice-heading span", // アニメーションが始まるトリガーとなる要素
        start: "top center", // アニメーションが始まる位置
        markers: false, // マーカー表示
      },
    }
  );
}
