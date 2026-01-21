// 投稿から３日以内の記事に NEW を表示
// 対象の要素を取得
const blogNew = document.querySelector(".blog_new");

// nullでjsが止まらないように防止
if (blogNew) {
  const blogNewTextContent = blogNew.textContent;
  const blogNewSliceContent = [...blogNewTextContent]
    .map((char) => `<span>${char}</span>`)
    .join("");

  blogNew.innerHTML = blogNewSliceContent;

  gsap.fromTo(
    ".blog_new span",
    { autoAlpha: 0, scale: 0 },
    {
      autoAlpha: 1,
      scale: 1,
      stagger: 0.2,
      scrollTrigger: {
        trigger: ".blog_new span",
        start: "top center",
        markers: false,
      },
    }
  );
}

//セクションタイトルをアニメーション表示
$(function () {
  gsap.utils.toArray(".section_heading-label").forEach((sectitles) => {
    const secHeadLabelNew = sectitles;

    const secHeadLabelNewContent = secHeadLabelNew.textContent;
    const secHeadLabelSliceContent = [...secHeadLabelNewContent]
      .map((char) => `<span>${char}</span>`)
      .join("");

    secHeadLabelNew.innerHTML = secHeadLabelSliceContent;
    console.log(sectitles);
    gsap.fromTo(
      sectitles.querySelectorAll("span"),
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
      }
    );
  });
});
