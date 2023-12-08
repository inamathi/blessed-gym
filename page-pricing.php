<?php
    /*
    Template Name: template_pricing
    */
?>
<?php include("header-page.php"); ?>
<main class="page-pricing">
    <div class="page-strengths_top">
        <div class="top-item">
            <h1>コース＆料金設定</h1>
            <figure class="top-item-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_cols-posi.svg" alt="BLESSED | conditioning gym" class="footer_mobile_top_logo" />
            </figure>
        </div>
    </div>
    <!-- campaign -->
    <?php
        include('component_campaign.php');
    ?>
    <!-- キャッチ -->
    <div class="pricing_catch">
        <h2 class="pricing_body-catch slice-heading popup">成果を得るには継続が不可欠！<wbr>続けやすいサブスクリプションが<wbr>おすすめです</h2>
    </div>
    <!-- 料金 -->
    <div class="pricing_wrapper">
        <ul class="pricing_list">
            <li class="pricing_list-item">
                <h3 class="item_title">
                    <span class="item_title-label">オススメ！</span>
                    <span class="item_title-content">お得なサブスクリプション</span>
                </h3>
                <ul class="pricing_list-item-contents">
                    <li class="item_content">
                        <div class="item_content-unitprice">
                            <div class="item_content-unitprice-times">4回／月（1回／週）</div>
                        </div>
                        <div class="item_content-unitprice-campaign">
                            <span class="normal-price">¥30,000</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="campaign-price"><span>¥</span>20,000</span>
                        </div>
                        <div class="item_content-minit">¥5,000／１session（60分）</div>
                    </li>
                    <li class="item_content">
                        <div class="item_content-unitprice">
                            <div class="item_content-unitprice-times">8回／月（2回／週）</div>
                        </div>
                        <div class="item_content-unitprice-campaign">
                            <span class="normal-price">¥40,000</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="campaign-price"><span>¥</span>33,000</span>
                        </div>
                        <div class="item_content-minit">¥4,125/１session（60分）</div>
                    </li>
                </ul>
            </li>
            <li  class="pricing_list-item">
                <h3 class="item_title">
                    <span class="item_title-label">毎日でもトレーニングしたい！</span>
                    <span class="item_title-content">通い放題コース（定員制）</span>
                </h3>
                <ul class="pricing_list-item-contents">
                    <li class="item_content">
                        <div class="item_content-unitprice">
                            <div class="item_content-unitprice-times">通い放題</div>
                        </div>
                        <div class="item_content-unitprice-campaign">
                            <span class="normal-price">¥60,000</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="campaign-price"><span>¥</span>55,000</span>
                        </div>
                        <div class="item_content-minit">16回利用 ¥3,438/１session（60分）</div>
                    </li>
                </ul>
            </li>
            <li  class="pricing_list-item">
                <h3 class="item_title">
                    <span class="item_title-label">1sessionにじっくり時間をかけたい！</span>
                    <span class="item_title-content">回数券コース（定員制）</span>
                </h3>
                <ul class="pricing_list-item-contents">
                    <li class="item_content">
                        <div class="item_content-unitprice">
                            <div class="item_content-unitprice-times">４回／月コース</div>
                        </div>
                        <div class="item_content-unitprice-campaign">
                            <span class="normal-price">¥40,000</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="campaign-price"><span>¥</span>32,000</span>
                        </div>
                        <div class="item_content-minit">¥8,000／１session（80分）</div>
                    </li>
                    <li class="item_content">
                        <div class="item_content-unitprice">
                            <div class="item_content-unitprice-times">８回／月コース</div>
                        </div>
                        <div class="item_content-unitprice-campaign">
                            <span class="normal-price">¥70,000</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="campaign-price"><span>¥</span>61,600</span>
                        </div>
                        <div class="item_content-minit">¥7,700／１session（80分）</div>
                    </li>
                    <li class="item_content">
                        <div class="item_content-unitprice">
                            <div class="item_content-unitprice-times">12回／月コース</div>
                        </div>
                        <div class="item_content-unitprice-campaign">
                            <span class="normal-price">¥112,000</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="campaign-price"><span>¥</span>89,700</span>
                        </div>
                        <div class="item_content-minit">¥7,475／１session（80分）</div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="pricing_table-wrapper">
        <h3 class="pricing_table-title">各コースのセッション時間と単価（1sessionごと）</h3>
        <table class="pricing_table-table">
            <tr>
                <td class="course">サブスクリプション<span>（４回／月）</span></td>
                <td class="min">60分</td>
                <td class="price">¥5,000</td>
            </tr>
            <tr>
                <td class="course">サブスクリプション<span>（８回／月）</span></td>
                <td class="min">60分</td>
                <td class="price">¥4,125</td>
            </tr>
            <tr>
                <td class="course">通い放題<span>（例：１６回／月）</span></td>
                <td class="min">60分</td>
                <td class="price">¥3,438</td>
            </tr>
            <tr>
                <td class="course">回数券<span>（４回）</span></td>
                <td class="min">80分</td>
                <td class="price">¥8,000</td>
            </tr>
            <tr>
                <td class="course">回数券<span>（８回）</span></td>
                <td class="min">80分</td>
                <td class="price">¥7,700</td>
            </tr>
            <tr>
                <td class="course">回数券<span>（１２回）</span></td>
                <td class="min">80分</td>
                <td class="price">¥7,475</td>
            </tr>
        </table>
        <h3 class="pricing_table-title">サブスクリプションをオススメする理由</h3>
        <div class="pricing_table-description">
            <p>
                一定期間でのトレーニングの継続が予定されている場合、より計画的にトレーニングのスケジュールを組むことができます。<wbr>
                これにより、トレーニングによる効果を最大化することが期待できます。<wbr>
                ぜひサブスクリプションをご利用ください。
            </p>
        </div>
    </div>
    <!-- キャッチ -->
    <div class="pricing_catch">
        <h2 class="pricing_body-catch slice-heading popup">BLESSEDは<wbr>将来のアスリートを応援します！</h2>
    </div>
    <div class="pricing_option-wrapper">
        <!-- 学割 -->
        <ul class="pricing_list">
            <li class="pricing_list-item">
                <h3 class="item_title">
                    <span class="item_title-content">学割コース</span>
                </h3>
                <ul class="pricing_list-item-contents">
                    <li class="item_content">
                        <div class="item_content-option">
                            <span class="item_content-option-times">４回／月 （１回／週）</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="item_content-option-price"><span>¥</span>15,400</span>
                        </div>
                        <div class="item_content-option-minit">¥3,850／１session（60分）</div>
                    </li>
                </ul>
                <div class="item_content-option-description">
                    <ul>
                        <li>
                            <span class="material-symbols-outlined">check</span><span class="text">定期的な身体のメンテナンス</span>
                        </li>
                        <li>
                            <span class="material-symbols-outlined">check</span><span class="text">自重を利用したトレーニングの指導</span>
                        </li>
                        <li>
                            <span class="material-symbols-outlined">check</span><span class="text">一般トレーニング</span>
                        </li>
                        <li>
                            <span class="material-symbols-outlined">check</span><span class="text">競技特性を考慮したトレーニングの指導</span>
                        </li>
                        <li>
                            <span class="material-symbols-outlined">check</span><span class="text">大会前などコンディショニング</span>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!-- 説明ブロック -->
        <div class="pricing_option-description">
            <h2 class="pricing_option-description-title popup">高いパフォーマンスを発揮するには、<wbr>定期的な身体のメンテナンスが欠かせません</h2>
            <div class="pricing_option-description-body">
                <p>
                    一生懸命に競技に取り組むあまり、身体のメンテナンスがおざなりになっていませんか？
                </p>
                <p>
                    身体のメンテナンスをしないと、パフォーマンスが上がらないばかりか、焦って間違ったトレーニングを繰り返してしまい、怪我につながるリスクもあります。
                </p>
                <p>
                    定期的に身体のメンテナンス、コンディショニングを行うことで、トレーニングの効果がより効率的に身体に現れるのに加え、正しい身体の使い方ができることで、大きなパフォーマンスアップにつなげることができます。
                </p>
                <p>
                    せっかく全力で競技に取り組むなら、正しいトレーニング、正しい身体の使い方で、パフォーマンスアップを目指しましょう！
                </p>
            </div>
        </div>
        <!-- ジュニア -->
        <ul class="pricing_list">
            <li class="pricing_list-item">
                <h3 class="item_title">
                <span class="item_title-label">仲間と一緒に楽しくトレーニング！</span>
                    <span class="item_title-content">ジュニア（ペア）コース</span>
                </h3>
                <ul class="pricing_list-item-contents">
                    <li class="item_content">
                        <div class="item_content-option">
                            <span class="item_content-option-times">１名につき（４名まで）</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="item_content-option-price"><span>¥</span>3,300</span>
                        </div>
                        <div class="item_content-option-minit">１session（60分）</div>
                    </li>
                </ul>
            </li>
            <li class="pricing_list-item">
                <h3 class="item_title">
                <span class="item_title-label">ひとりで集中トレーニング</span>
                    <span class="item_title-content">ジュニアコース</span>
                </h3>
                <ul class="pricing_list-item-contents">
                    <li class="item_content">
                        <div class="item_content-option">
                            <span class="item_content-option-times">マンツーマンSession</span>
                            <span class="material-symbols-outlined item-block-after-arrow">arrow_forward</span>
                            <span class="item_content-option-price"><span>¥</span>4,400</span>
                        </div>
                        <div class="item_content-option-minit">１session（60分）</div>
                    </li>
                </ul>
                <div class="item_content-option-description">
                    <ul>
                        <li>
                            <span class="material-symbols-outlined">check</span><span class="text">身体を自由に扱うための体操指導</span>
                        </li>
                        <li>
                            <span class="material-symbols-outlined">check</span><span class="text">スピードやアジリティなど<wbr>神経系の発達に主眼を置いたトレーニング</span>
                        </li>
                        <li>
                            <span class="material-symbols-outlined">check</span><span class="text">一般トレーニング</span>
                        </li>
                        <li>
                            <span class="material-symbols-outlined">check</span><span class="text">競技特性を考慮したトレーニングの指導</span>
                        </li>
                        <li>
                            <span class="material-symbols-outlined">check</span><span class="text">大会前などコンディショニング</span>
                        </li>
                        <li>
                            <span class="material-symbols-outlined">check</span><span class="text">チーム指導</span>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!-- 説明ブロック -->
        <div class="pricing_option-description">
            <h2 class="pricing_option-description-title popup">ゴールデンエイジと呼ばれる時期。<wbr>身体を思い通りに動かすには<wbr>神経系のトレーニングが欠かせません</h2>
            <div class="pricing_option-description-body">
                <p>
                    ジュニア時期、まずはスポーツを楽しむことはもちろん大切です。ただ、スポーツを楽しむには、自分の身体を思い通りに動かすことができれば、そのスポーツをもっと楽しみ、もっと好きになることができます。
                </p>
                <p>
                    BLESSEDでは、ゴールデンエイジと呼ばれる子供たちに、楽しみながら身体能力を上げていくトレーニングを指導します。同時に身体のメンテナンスをしていくことで、怪我しにくい身体を作ることもできます。
                </p>
                <p>
                    チームスポーツに取り組んでいるお子様も多いと思いますが、なかなかチーム練習だけではケアしきれない部分も多いのが実情かと思います。
                </p>
                <p>
                    勝ち負けや数字の結果だけでない、動ける身体づくりの部分にも目を向けてみませんか？
                </p>
            </div>
        </div>
    </div>
    <!-- お問い合わせ -->
    <section class="form" id="form" name="form">
        <span class="section_heading-label">体験申し込みフォーム</span>
        <div class="form_wrapper">
            <?php echo do_shortcode('[contact-form-7 id="b8b731d" title="blessed_contactForm"]'); ?>
        </div>
    </section>
    <!-- top btn -->
    <div class="btn_pagetop">
        <a href="#wrap">
            <span></span>
            <span></span>
        </a>
    </div>
</main>
<?php
    include('footer.php');
?>