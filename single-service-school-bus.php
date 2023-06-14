<?php

/*
Service-Bus Page
*/

get_header();
?>

<section id="hero">
    <div class="hero-banner">
        <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/bus_topimage.jpg" alt="バス送迎について">
    </div>
</section>


<section id="intro">
    <div class="container">
        <div class="intro-text">
            <h1 class="en-text" data-en="School Bus">送迎バス</h1>
            <p>「Good morning!」<br>
                「See you tomorrow!」<br>
                <br>
                季節とともに移りかわる街路樹の色や、空の色を眺めたり、
                昨日あったおうちの出来事を楽しくおしゃべりしたり、
                添乗の先生の読み聞かせを楽しんだり。
                子どもたちはそれぞれに園までの道のりの中で成長します。
                五感やコミュニケーション力やマナーが自然と身に着きます。
            </p>
        </div>
    </div>
</section>

<div id="single-service-school-bus">
    <section id="bus-service">
        <div class="container">
            <h2 class="rumble underline-3">安心・安全の送迎バスサービス</h2>

            <div class="section-image bg-fill">
                <img src="<?php bloginfo("template_url"); ?>/images/bus_bus_service.jpg" alt="楽しいバスのようす">
            </div>
            <div class="section-text">
                <p>リトルガーデンでは、各園からおよそ5km圏内を目安にバスの送迎をお受けしております。
                    送迎バスは、お子さまご自身で乗降できるPreschool以上のお子さまよりご利用いただけます。
                    ※場所や道路状況によりお受けできない場合もございますので、まずは各園にご相談ください。
                </p>
            </div>
        </div>
    </section>

    <section id="safety-points">
        <div class="container flex-wrap">
            <h2 class="underline-3">送迎バスの5つのポイント</h2>
            <div class="flex">
                <div>
                    <p class="sec-num-right">1</p>
                </div>
                <div>
                    <p>乗車前、乗車中、乗車後の園児の安全確認を徹底しています。</p>
                </div>
            </div>
            <div class="flex">
                <div>
                    <p class="sec-num-right">2</p>
                </div>
                <div>
                    <p>感染症対策を徹底しています。</p>
                    <ul>
                        <li>ドライバー・添乗員は、アルコール消毒とマスクの着用を徹底します。</li>
                        <li>運行前に、ドア・手すり等車内のアルコール消毒を実施します。</li>
                        <li>窓は走行中においても、お子様が手や顔を出さないよう危険防止に留意しながら換気します。</li>
                        <li>お子様の乗降時にアルコールの手指消毒を実施します。</li>
                    </ul>
                </div>
            </div>
            <div class="flex">
                <div>
                    <p class="sec-num-right">3</p>
                </div>
                <div>
                    <p>ご家庭のニーズに合わせ、送迎場所は可能な限り柔軟に対応しています。
                        まずはご希望の園にご相談ください。</p>
                </div>
            </div>
            <div class="flex">
                <div>
                    <p class="sec-num-right">4</p>
                </div>
                <div>
                    <p>ドライバーは安全運転に十分留意しています。アルコールチェッカ―や乗車前の健康観察を実施しています。</p>
                </div>
            </div>
            <div class="flex">
                <div>
                    <p class="sec-num-right">5</p>
                </div>
                <div>
                    <p>リトルガーデンのバスには、本部との通信機能付きドライブレコーダーが設置されております。常にスクールとリトルガーデン本部に映像や位置状況を送信し運行状況モニタリングすることで徹底した安全管理をスクールと本部のダブルチェックで行なっております。</p>
                </div>
            </div>
        </div>
    </section>

    <section id="bus-fee">
        <div class="container">
            <table>
                <tbody>
                    <tr>
                        <th>
                            <h2>料金</h2>
                        </th>
                        <td>
                            <h3>8,800円（税込）／月</h3><br>
                            <span class="note">園によって異なります。詳しくはお問い合わせください</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>


<?php get_footer(); ?>