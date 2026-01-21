$(function(){
    gsap.utils.toArray(".popup").forEach(target => {
      gsap.from(target, {
        scrollTrigger: {
            trigger: target, // アニメーション開始のトリガー要素
            start: "top center+=200px", // アニメーション開始位置
            markers: false, // マーカー表示
          },
        opacity: 0,
        yPercent: 50,
      });
    });
  });

