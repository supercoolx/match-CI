<?php

$this->load->view('common/header');
?>

<div class="hero">
    <div class="hlogo"><img src="<?php echo base_url() ?>assets/images/logo.webp" alt="logo"></div>
    <div class="hslogan">
        <h1>
            <div class="ttl">
                <div><span>好きな時に</span></div>
            </div>
            <div class="ttl">
                <div><span>好きな仕事をする</span></div>
            </div>
        </h1>
        <div class="txtouter">
            <div class="txt">
                <div>
                    <p>Do your favorite work when you want to do.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="pic">
        <picture>
            <source media="(max-width:1100px)" srcset="<?php echo base_url() ?>assets/images/hero-1000.jpg?v=20211013"><img
                src="<?php echo base_url() ?>assets/images/hero1920.jpg?v=20211013" alt="">
        </picture>
    </div>
</div>
<div class="lpmain">
    <section class="service" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/service-bg.webp">
        <div class="inner">
            <div class="box">
                <div class="left">
                    <div class="secttl">
                        <h2>Service</h2>
                    </div>
                    <p class="sectxt">経験豊富なエンジニアが貴社の課題を解決いたします。</p>
                </div>
                <div class="items">
                    <div class="pic_item">
                        <div><a href="engineer"></a>
                            <div class="pic" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/service1.jpg"></div>
                            <div class="content">
                                <div class="order">Service 01.</div>
                                <hgroup>
                                    <h3>System Engineering Services</h3>
                                    <h4>システムエンジニアリングサービス</h4>
                                </hgroup>
                                <p>エンジニアへ</p>
                            </div>
                        </div>
                    </div>
                    <div class="pic_item">
                        <div><a href="business"></a>
                            <div class="pic" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/service2.jpg"></div>
                            <div class="content">
                                <div class="order">Service 02.</div>
                                <hgroup>
                                    <h3>SES Sales Agency</h3>
                                    <h4>SES営業代行</h4>
                                </hgroup>
                                <p>営業担当者へ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="office">
        <div class="inner">
            <div class="box">
                <div class="right">
                    <div class="secttl">
                        <h2>Office</h2>
                    </div>
                    <p class="sectxt">日比谷、六本木、新宿、三田、内幸町、渋谷<br>お好きな場所で働くことができます。</p>
                    <div class="links">
                        <ul>
                            <li><a href="https://www.vr-view.jp/orix/co/hibiya/final/" target="_blank">日比谷オフィス</a></li>
                            <li><a href="https://www.vr-view.jp/orix/co/roppongi/final/" target="_blank">六本木オフィス</a>
                            </li>
                            <li><a href="https://www.vr-view.jp/orix/co/shinjuku/final/" target="_blank">新宿オフィス</a></li>
                            <li><a href="https://www.vr-view.jp/orix/co/final2017/" target="_blank">三田オフィス</a></li>
                            <li><a href="https://www.vr-view.jp/orix/co/uchisaiwaicho/final/"
                                    target="_blank">内幸町オフィス</a>
                            </li>
                            <li><a href="https://www.vr-view.jp/orix/co/shibuya/final/" target="_blank">渋谷オフィス</a></li>
                        </ul>
                    </div>
                </div>
                <div class="items">
                    <div class="pic_item">
                        <div>
                            <div class="pic" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/office1.jpg"></div>
                            <div class="content">
                                <div class="order">Office 01.</div>
                                <hgroup>
                                    <h3>Free drink</h3>
                                    <h4>フリードリンク</h4>
                                </hgroup>
                                <p>コーヒーやお茶、紅茶等、豊富な種類のドリンクを好きな時に好きなだけご利用いただけます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="pic_item">
                        <div>
                            <div class="pic" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/office2.jpg"></div>
                            <div class="content">
                                <div class="order">Office 02.</div>
                                <hgroup>
                                    <h3>Energy pod</h3>
                                    <h4>エナジーポッド</h4>
                                </hgroup>
                                <p>質の高い仮眠を実現するためにデザインされた専用マシンで疲れた身体を癒してください。</p>
                            </div>
                        </div>
                    </div>
                    <div class="pic_item">
                        <div>
                            <div class="pic" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/office3.jpg"></div>
                            <div class="content">
                                <div class="order">Office 03.</div>
                                <hgroup>
                                    <h3>Free space</h3>
                                    <h4>フリースペース</h4>
                                </hgroup>
                                <p>オフィス全体はアロマに包まれた空間です。</p>
                            </div>
                        </div>
                    </div>
                    <div class="pic_item">
                        <div>
                            <div class="pic" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/office4.jpg"></div>
                            <div class="content">
                                <div class="order">Office 04.</div>
                                <hgroup>
                                    <h3>Private booth</h3>
                                    <h4>個人ブース</h4>
                                </hgroup>
                                <p>個人ブースは3種類のアロマを自由に使えます。<br>また、照明の色や明るさ等も自由に調整可能です。</p>
                            </div>
                        </div>
                    </div>
                    <div class="pic_item">
                        <div>
                            <div class="pic" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/office5.jpg"></div>
                            <div class="content">
                                <div class="order">Office 05.</div>
                                <hgroup>
                                    <h3>Phone booth</h3>
                                    <h4>フォンブース</h4>
                                </hgroup>
                                <p>フォンブースは全6ブースあり、4ブースは自由にご利用いただけます。2ブースは事前予約で利用できます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="pic_item">
                        <div>
                            <div class="pic" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/office11.jpg"></div>
                            <div class="content">
                                <div class="order">Office 06.</div>
                                <hgroup>
                                    <h3>Conference room</h3>
                                    <h4>カンファレンスルーム</h4>
                                </hgroup>
                                <p>様々な広さの会議室をご利用いただけます。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="profile" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/profilebg.jpg">
        <div class="secttl">
            <h2>profile</h2>
        </div>
        <p class="txt">
            SIer、Web系と両方の業界を経験し、<span class="nowrap">SESからフリーランス、</span><br>ベンチャー企業の社員として<span
                class="nowrap">多くのプロジェクトを遂行。</span><br>大規模ネットワークの設計構築や中小規模システム<span
                class="nowrap">全体のインフラ設計</span><br>構築運用保守、AWSやAzureを用いたインフラ設計構築、<span
                class="nowrap">スマホアプリ</span><br>のUI設計構築、GASを使用した業務の自動化、<span
                class="nowrap">社内SE等、</span><br>多岐にわたる業務に従事。<br>エンジニアとしてのキャリアを経て<span class="nowrap">Scope株式会社設立。</span>
        </p>
        <div class="name">
            <p>代表取締役社長 兼 CEO</p>
            <h3>成島 孝則</h3>
        </div>
    </section>
    <div class="slogan">
        <div class="pc"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 630.33 79.11">
                <path class="cls-1"
                    d="M36,17.14C36,27.36,28.61,34,17.23,34H2.64V.34h15C28.75.34,36,6.91,36,17.14Zm-11.38.09c0-5-2.83-8.25-7.15-8.25H13.78V25.35H18C22,25.35,24.58,22.18,24.58,17.23ZM72,17.14c0,10-7.78,17.33-18.49,17.33S35,27.17,35,17.14,42.77,0,53.47,0,72,7.2,72,17.14Zm-25.54.05c0,4.6,3.36,8,7.2,8s6.91-3.41,6.91-8-3.07-7.93-6.91-7.93S46.42,12.58,46.42,17.19Zm58.8,6.33V34H94.08V23.76L81.79.34H92.88l6.77,13,6.53-13h11.09Zm46.37-6.38c0,10-7.78,17.33-18.49,17.33s-18.48-7.3-18.48-17.33S122.4,0,133.1,0,151.59,7.2,151.59,17.14Zm-25.54.05c0,4.6,3.36,8,7.2,8s6.91-3.41,6.91-8-3.07-7.93-6.91-7.93S126.05,12.58,126.05,17.19Zm42.09,8c2.74,0,4.85-2.11,4.85-5.47V.34h11.14V19.73c0,8.93-6.29,14.74-16,14.74s-16.28-5.81-16.28-14.74V.34H163V19.73A5.2,5.2,0,0,0,168.14,25.2ZM205.39,34l-4-8.74h-4.18V34H186.05V.34h16.27c9.12,0,14.35,4.36,14.35,12,0,4.9-1.87,8.55-5.33,10.66L218,34ZM197.18,16.8h5.14c2.4,0,3.79-1.49,3.79-4.08s-1.39-3.94-3.79-3.94h-5.14ZM257.52.34V8.78H241.58v5.81h14.93V23H241.58V34H230.45V.34Zm21.79,28.89H266.69L265,34H253.53L267.74.34h11.43L292.85,34H281Zm-2.74-8-3.45-9.85-3.55,9.85ZM298.75.34l7,22.08L312.62.34H324L311.13,34H299.61L286.84.34Zm59.81,16.8c0,10-7.78,17.33-18.48,17.33s-18.48-7.3-18.48-17.33S329.37,0,340.08,0,358.56,7.2,358.56,17.14ZM333,17.19c0,4.6,3.36,8,7.2,8s6.91-3.41,6.91-8-3.07-7.93-6.91-7.93S333,12.58,333,17.19ZM378.62,34l-4-8.74h-4.18V34H359.28V.34h16.27c9.12,0,14.35,4.36,14.35,12,0,4.9-1.87,8.55-5.33,10.66l6.63,11ZM370.41,16.8h5.14c2.4,0,3.79-1.49,3.79-4.08S378,8.78,375.55,8.78h-5.14ZM402.81.34V34H391.68V.34Zm30.53,0V9.12h-9.6V34H412.6V9.12h-9.55V.34Zm28.7,0V8.78H444.72v4.13h15.74v8.45H444.72v4.18h17.76V34h-28.9V.34Zm23.52,0,5.09,22.08,5-22.08h10.85l5.09,22.08,5-22.08H528L517,34H505.48l-4.65-20.12L496,34H484.55L473.66.34Zm76.95,16.8c0,10-7.78,17.33-18.48,17.33s-18.49-7.3-18.49-17.33S533.32,0,544,0,562.51,7.2,562.51,17.14ZM537,17.19c0,4.6,3.36,8,7.2,8s6.91-3.41,6.91-8S548,9.26,544.17,9.26,537,12.58,537,17.19ZM582.57,34l-4-8.74h-4.18V34H563.22V.34H579.5c9.12,0,14.35,4.36,14.35,12,0,4.9-1.87,8.55-5.33,10.66l6.63,11ZM574.36,16.8h5.14c2.4,0,3.79-1.49,3.79-4.08s-1.39-3.94-3.79-3.94h-5.14ZM617,34l-7-11.57-3.27,3.65V34H595.62V.34h11.14V12l10-11.66h12.82l-12,13.53L630.33,34ZM11.91,45,17,67.06,22,45H32.84l5.08,22.08,5-22.08H54.29l-11,33.65H31.83L27.17,58.52l-4.8,20.11H10.9L0,45Zm53.28,0V58H75.6V45H86.74V78.63H75.6V66.48H65.19V78.63H54.05V45Zm52.41,0v8.45H100.27v4.13H116V66H100.27v4.18H118v8.45H89.14V45Zm11.57,0,13.29,17.28V45h10.09V78.63h-9.32L130,61.44V78.63H119.86V45Zm58.32,23.19V78.63H176.35V68.41L164.06,45h11.09l6.77,13,6.53-13h11.09Zm46.37-6.39c0,10-7.78,17.33-18.48,17.33s-18.49-7.3-18.49-17.33,7.78-17.14,18.49-17.14S233.86,51.84,233.86,61.78Zm-25.54,0c0,4.61,3.36,8,7.2,8s6.91-3.4,6.91-8-3.07-7.92-6.91-7.92S208.32,57.22,208.32,61.83Zm42.1,8c2.73,0,4.84-2.11,4.84-5.47V45H266.4V64.37c0,8.93-6.29,14.74-16,14.74s-16.28-5.81-16.28-14.74V45h11.14V64.37A5.2,5.2,0,0,0,250.42,69.84ZM289.58,45l5.09,22.08,5-22.08h10.85l5.09,22.08,5-22.08H332L321,78.63H309.5l-4.65-20.11-4.8,20.11H288.57L277.68,45Zm62.16,28.9H339.12l-1.73,4.75H326L340.17,45H351.6l13.68,33.65H353.42Zm-2.73-8-3.46-9.84L342,65.91ZM374.11,45l13.3,17.28V45h10.08V78.63h-9.32L374.92,61.44V78.63H364.8V45ZM428,45v8.78h-9.6V78.63H407.28V53.76h-9.56V45Zm40.37,0v8.78h-9.6V78.63H447.64V53.76h-9.55V45Zm34.08,16.8c0,10-7.78,17.33-18.48,17.33s-18.48-7.3-18.48-17.33S473.28,44.64,484,44.64,502.46,51.84,502.46,61.78Zm-25.54,0c0,4.61,3.36,8,7.2,8s6.92-3.4,6.92-8-3.08-7.92-6.92-7.92S476.92,57.22,476.92,61.83Zm71.57,0c0,10.22-7.34,16.85-18.72,16.85H515.18V45h15C541.29,45,548.49,51.56,548.49,61.78Zm-11.38.1c0-5-2.83-8.26-7.15-8.26h-3.65V70h4.18C534.52,70,537.11,66.82,537.11,61.88Zm47.38-.1c0,10-7.78,17.33-18.48,17.33s-18.48-7.3-18.48-17.33S555.3,44.64,566,44.64,584.49,51.84,584.49,61.78Zm-25.54,0c0,4.61,3.36,8,7.2,8s6.92-3.4,6.92-8-3.08-7.92-6.92-7.92S559,57.22,559,61.83Z" />
            </svg></div>
        <div class="sp"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 404.1 170.8">
                <path class="st0" d="M36.4,18.5c0,10.2-7.3,16.8-18.7,16.8H3.1V1.7h15C29.2,1.7,36.4,8.3,36.4,18.5z M25,18.6c0-5-2.8-8.3-7.2-8.3
	h-3.6v16.4h4.2C22.4,26.7,25,23.6,25,18.6z M72.4,18.5c0,10-7.8,17.3-18.5,17.3s-18.5-7.3-18.5-17.3c0-10,7.8-17.1,18.5-17.1
	S72.4,8.6,72.4,18.5z M46.9,18.6c0,4.6,3.4,8,7.2,8s6.9-3.4,6.9-8s-3.1-7.9-6.9-7.9C50.2,10.7,46.9,14,46.9,18.6z M105.7,24.9v10.5
	H94.5V25.1L82.2,1.7h11.1l6.8,13l6.5-13h11.1L105.7,24.9z M152,18.5c0,10-7.8,17.3-18.5,17.3s-18.5-7.3-18.5-17.3
	c0-10,7.8-17.1,18.5-17.1S152,8.6,152,18.5z M126.5,18.6c0,4.6,3.4,8,7.2,8s6.9-3.4,6.9-8s-3.1-7.9-6.9-7.9
	C129.8,10.7,126.5,14,126.5,18.6z M168.6,26.6c2.7,0,4.8-2.1,4.8-5.5V1.7h11.1v19.4c0,8.9-6.3,14.7-16,14.7
	c-9.8,0-16.3-5.8-16.3-14.7V1.7h11.1v19.4C163.4,24.4,165.8,26.6,168.6,26.6z M205.8,35.4l-4-8.7h-4.2v8.7h-11.1V1.7h16.3
	c9.1,0,14.4,4.4,14.4,12c0,4.9-1.9,8.5-5.3,10.7l6.6,10.9H205.8z M197.6,18.2h5.1c2.4,0,3.8-1.5,3.8-4.1c0-2.5-1.4-3.9-3.8-3.9h-5.1
	V18.2z M30.2,46.4v8.4H14.2v5.8h14.9v8.4H14.2V80H3.1V46.4H30.2z M51.9,75.3H39.3L37.6,80H26.2l14.2-33.7h11.4L65.5,80H53.6
	L51.9,75.3z M49.2,67.3l-3.5-9.8l-3.6,9.8H49.2z M71.4,46.4l7,22.1l6.9-22.1h11.4L83.8,80H72.2L59.5,46.4H71.4z M131.2,63.2
	c0,10-7.8,17.3-18.5,17.3s-18.5-7.3-18.5-17.3c0-10,7.8-17.1,18.5-17.1S131.2,53.2,131.2,63.2z M105.7,63.2c0,4.6,3.4,8,7.2,8
	s6.9-3.4,6.9-8s-3.1-7.9-6.9-7.9C109,55.3,105.7,58.6,105.7,63.2z M151.3,80l-4-8.7H143V80h-11.1V46.4h16.3c9.1,0,14.4,4.4,14.4,12
	c0,4.9-1.9,8.5-5.3,10.7l6.6,10.9H151.3z M143,62.8h5.1c2.4,0,3.8-1.5,3.8-4.1c0-2.5-1.4-3.9-3.8-3.9H143V62.8z M175.4,46.4V80
	h-11.1V46.4H175.4z M206,46.4v8.8h-9.6V80h-11.1V55.1h-9.6v-8.8H206z M234.7,46.4v8.4h-17.3v4.1h15.7v8.4h-15.7v4.2h17.8V80h-28.9
	V46.4H234.7z M258.2,46.4l5.1,22.1l5-22.1h10.8l5.1,22.1l5-22.1h11.4l-11,33.7h-11.5l-4.7-20.1L268.7,80h-11.5l-10.9-33.7H258.2z
	 M335.1,63.2c0,10-7.8,17.3-18.5,17.3c-10.7,0-18.5-7.3-18.5-17.3c0-10,7.8-17.1,18.5-17.1C327.4,46,335.1,53.2,335.1,63.2z
	 M309.6,63.2c0,4.6,3.4,8,7.2,8c3.8,0,6.9-3.4,6.9-8s-3.1-7.9-6.9-7.9C312.9,55.3,309.6,58.6,309.6,63.2z M355.2,80l-4-8.7H347V80
	h-11.1V46.4h16.3c9.1,0,14.4,4.4,14.4,12c0,4.9-1.9,8.5-5.3,10.7l6.6,10.9H355.2z M347,62.8h5.1c2.4,0,3.8-1.5,3.8-4.1
	c0-2.5-1.4-3.9-3.8-3.9H347V62.8z M389.7,80l-7-11.6l-3.3,3.6V80h-11.1V46.4h11.1V58l10-11.7h12.8l-12,13.5L403,80H389.7z M12.3,91
	l5.1,22.1l5-22.1h10.8l5.1,22.1l5-22.1h11.4l-11,33.7H32.3l-4.7-20.1l-4.8,20.1H11.3L0.4,91H12.3z M65.6,91v13.1H76V91h11.1v33.7H76
	v-12.1H65.6v12.1H54.5V91H65.6z M118,91v8.4h-17.3v4.1h15.7v8.4h-15.7v4.2h17.8v8.4H89.6V91H118z M129.6,91l13.3,17.3V91H153v33.7
	h-9.3l-13.2-17.2v17.2h-10.1V91H129.6z M187.9,114.2v10.5h-11.1v-10.2L164.5,91h11.1l6.8,13l6.5-13H200L187.9,114.2z M234.3,107.8
	c0,10-7.8,17.3-18.5,17.3s-18.5-7.3-18.5-17.3c0-10,7.8-17.1,18.5-17.1S234.3,97.9,234.3,107.8z M208.8,107.9c0,4.6,3.4,8,7.2,8
	c3.8,0,6.9-3.4,6.9-8c0-4.6-3.1-7.9-6.9-7.9C212.1,99.9,208.8,103.2,208.8,107.9z M250.9,115.9c2.7,0,4.8-2.1,4.8-5.5V91h11.1v19.4
	c0,8.9-6.3,14.7-16,14.7c-9.8,0-16.3-5.8-16.3-14.7V91h11.1v19.4C245.7,113.7,248.1,115.9,250.9,115.9z M12.3,135.6l5.1,22.1l5-22.1
	h10.8l5.1,22.1l5-22.1h11.4l-11,33.7H32.3l-4.7-20.1l-4.8,20.1H11.3L0.4,135.6H12.3z M74.5,164.5H61.9l-1.7,4.8H48.7l14.2-33.7h11.4
	L88,169.3H76.2L74.5,164.5z M71.8,156.6l-3.5-9.8l-3.6,9.8H71.8z M96.9,135.6l13.3,17.3v-17.3h10.1v33.7h-9.3l-13.2-17.2v17.2H87.6
	v-33.7H96.9z M150.8,135.6v8.8h-9.6v24.9H130v-24.9h-9.6v-8.8H150.8z M191.1,135.6v8.8h-9.6v24.9h-11.1v-24.9h-9.6v-8.8H191.1z
	 M225.2,152.5c0,10-7.8,17.3-18.5,17.3c-10.7,0-18.5-7.3-18.5-17.3c0-10,7.8-17.1,18.5-17.1C217.4,135.3,225.2,142.5,225.2,152.5z
	 M199.7,152.5c0,4.6,3.4,8,7.2,8c3.8,0,6.9-3.4,6.9-8s-3.1-7.9-6.9-7.9C203,144.6,199.7,147.9,199.7,152.5z M271.3,152.5
	c0,10.2-7.3,16.8-18.7,16.8h-14.6v-33.7h15C264.1,135.6,271.3,142.2,271.3,152.5z M259.9,152.5c0-5-2.8-8.3-7.2-8.3h-3.6v16.4h4.2
	C257.3,160.7,259.9,157.5,259.9,152.5z M307.3,152.5c0,10-7.8,17.3-18.5,17.3c-10.7,0-18.5-7.3-18.5-17.3c0-10,7.8-17.1,18.5-17.1
	C299.5,135.3,307.3,142.5,307.3,152.5z M281.7,152.5c0,4.6,3.4,8,7.2,8c3.8,0,6.9-3.4,6.9-8s-3.1-7.9-6.9-7.9
	C285,144.6,281.7,147.9,281.7,152.5z" />
            </svg>
        </div>
    </div>
    <section class="vision">
        <div class="inner">
            <div class="para para1">
                <div class="pic-outer">
                    <div class="pic" lazy="loading"><img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                            data-src="<?php echo base_url() ?>assets/images/vision1.jpg"></div>
                </div>
                <div class="cnt">
                    <div class="secttl">
                        <h2>vision</h2>
                    </div>
                    <h3>働く人達の「理不尽」を無くしたい</h3>
                    <p>あなたの今の職場はどのような組織構造となっているでしょうか。<br>おそらく、上下関係によって役割分担されているかと想像しますが、<br>適切に機能しているでしょうか。<br>多くの人達は、この上下関係によって理不尽な経験をされていると感じます。<br>例えば、<br>上司の機嫌や評価を下げないように、上司の間違いや失敗を部下が責任を負う。<br>優秀で責任感のある部下が真面目に仕事をしても、上司の感情論で低評価を受けてしまう。<br>上司は自身の保身のために、部下に責任転嫁し、優秀な部下を昇進させないようにする。<br>社長や一部役員が高い給与を貰い、優秀な従業員を安い給与で利用する。<br>他にも様々な形で「理不尽」なことがあります。<br>私は、評価されるべき人が正当に評価され、より生産性の高い仕事を実現するためには、<br>このような「理不尽」は無くすべきだと強く感じています。
                    </p>
                </div>
            </div>
            <div class="para para2">
                <div class="pic-outer">
                    <div class="pic" lazy="loading"><img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                            data-src="<?php echo base_url() ?>assets/images/vision2.jpg"></div>
                </div>
                <div class="cnt">
                    <p>では、どうすればこのような「理不尽」が無くなるでしょうか。<br>私は、前述のような状況を目の当たりにし、現状の組織構造に問題があると感じています。<br>端的に言うと、上下関係が組織構造の在り方として唯一の方法になっているため、理不尽な状況を作り出してしまうと考えています。<br>一方で、昨今増えているフリーランスという働き方は、取引先企業のクライアントと対等な関係であるため、理不尽な上下関係を持ちません。<br>弊社では、フリーランスを目指す人達を応援しています。<br>現状に不満を抱いている人達は、弊社を踏み台にし、あなたの思い描くキャリアパスを実現してください。<br>私は、現状の上下関係とは違う、心理的安全性の高い組織構造を作っていきたいと考えています。<br>一緒に、働く人達の「理不尽」の無い世界を目指しませんか。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="lpmd" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/mi.webp">
        <section class="message">
            <div class="secttl">
                <h2>message</h2>
            </div>
            <div class="part part2 company_name" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/message-bg2.webp">
                <div class="inner">
                    <div class="pic" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/company.jpg"></div>
                    <div class="content">
                        <h3>Company Name</h3>
                        <h4>会社名</h4>
                        <p>Scopeには以下の意味があります。<br>知力・研究・活動などの及ぶ範囲，視野<br>活動や思考などを働かせる余地，機会
                        </p>
                        <p>弊社の従業員やサービスを利用してくれている人達に、新しい発見や気づき、次のステップに繋がる機会を与えられる存在になりたいという想いから名付けました。<br>※現在、自社サービスは開発中。2022年4月にリリース予定。
                        </p>
                    </div>
                </div>
            </div>
            <div class="part part1 engineer" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/message-bg1.webp">
                <div class="inner">
                    <div class="pic" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/engineer.jpg"></div>
                    <div class="content">
                        <h3>To Engineer</h3>
                        <h4>エンジニアへ</h4>
                        <p>突然ですが、現代社会を生き抜く上で特に必要だと感じる能力は何でしょうか。<br>私は「思考力」だと思います。</p>
                        <p>現代の教育の大半は、考えさせることよりも暗記させることに多くの時間を費やしていると感じます。<br>しかし、インターネットを活用し検索することで、必要な時に必要な情報を無料で収集することができる時代です。<br>IT業界は、技術の移り変わりが激しい日進月歩な業界であるため、記憶した知識はすぐに陳腐化してしまいます。<br>そのため、どのような課題があるのか考え、また、課題解決のアプローチとして、自身で仮説を立てて論理的に分析、検証を行うことが必要になります。<br>IT業界で働くということは、前述したプロセスを繰り返し実行するため、「思考力」を身に付けることができる最高の環境だと私は感じます。<br>「思考力」を高めることができれば、あらゆる問題に対応できるようになり、あなたの視野は広がり、仕事の幅も広がることでしょう。
                        </p>
                        <p>膨大かつ複雑化した情報社会の中で、あなたはどのように課題を見つけ解決しますか？<br>もし、少しでもITに興味がありましたら、是非チャレンジすることをお勧めします。<br>一緒に働ける日を楽しみにしております。
                        </p>
                    </div>
                </div>
            </div>
            <div class="part part2 business" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/message-bg2.webp">
                <div class="inner">
                    <div class="pic" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/man.jpg">
                    </div>
                    <div class="content">
                        <h3>To Sales person</h3>
                        <h4>営業担当者へ</h4>
                        <p>努力して成果を上げているにも関わらず、正当な評価を受けていない営業の方は多いと思います。<br>Scope株式会社では、ご紹介いただいた案件や人材で契約成立した場合、<br>1件につき毎月3～10万円をお支払いします。<br>契約数に比例して給与UPできる弊社で、是非あなたの能力を活かしてください。<br>私たちは副業する人を応援しています。<br>もっと自由な働き方を広めていきましょう。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="recruit">
            <div class="inner">
                <div class="secttl">
                    <h2>recruit</h2>
                </div>
                <p class="sectxt">昨今、エンジニアのキャリアパスは多様化しています。<br>弊社では、その人の志向に合った環境を提供します。</p>
            </div>
            <div class="links">
                <div class="link">
                    <article><a href="<?php echo base_url() ?>engineer_unexperienced"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link1.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>Engineer unexperienced</h4>
                                <h3>エンジニア未経験者</h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>project_manager"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link2.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>Project Manager</h4>
                                <h3>プロジェクトマネージャー</h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>application_engineer"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link3.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>Application Engineer</h4>
                                <h3>アプリケーションエンジニア</h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>network_engineer_design_construction"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link4.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>Network Engineer (Design and construction)</h4>
                                <h3>ネットワークエンジニア(設計構築) </h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>network_engineer_operation_maintenance"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link5.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>Network Engineer (Operation maintenance)</h4>
                                <h3>ネットワークエンジニア(運用保守) </h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>server_engineer_design_construction"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link6.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>Server Engineer (Design and construction)</h4>
                                <h3>サーバーエンジニア(設計構築) </h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>server_engineer_operational_monitoring"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link7.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>Server Engineer (Operational monitoring)</h4>
                                <h3>サーバーエンジニア(運用監視) </h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>cloud_engineer"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link13.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>Cloud engineer</h4>
                                <h3>クラウドエンジニア</h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>game_engineer"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link10.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>Game engineer</h4>
                                <h3>ゲームエンジニア</h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>front_end_engineer"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link12.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>Front-end engineer</h4>
                                <h3>フロントエンドエンジニア</h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>server_side_engineer"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link11.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>Back-End Engineer</h4>
                                <h3>バックエンドエンジニア</h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>ui_designer"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link14.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>UI designer</h4>
                                <h3>UIデザイナー</h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>planner"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link15.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>Planner</h4>
                                <h3>プランナー</h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>corporate_sales"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link8.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>Corporate sales</h4>
                                <h3>法人営業</h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
                <div class="link">
                    <article><a href="<?php echo base_url() ?>ses_sales_agency"></a>
                        <div class="bg" lazy="loading-bg-img" data-src="<?php echo base_url() ?>assets/images/link9.jpg"></div>
                        <div class="title">
                            <hgroup>
                                <h4>SES sales agency</h4>
                                <h3>SES営業代行</h3>
                            </hgroup>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </div>
    <section class="entry">
        <div class="secttl">
            <h2>entry</h2>
        </div>
        <div class="box">
            <div class="col">
                <div class="order">01</div>
                <div class="txt">
                    <p>エントリー</p>
                </div>
            </div>
            <div class="col">
                <div class="order">02</div>
                <div class="txt">
                    <p>書類選考</p>
                </div>
            </div>
            <div class="col">
                <div class="order">03</div>
                <div class="txt">
                    <p>面&nbsp;&nbsp;&nbsp接</p>
                </div>
            </div>
            <div class="col">
                <div class="order">04</div>
                <div class="txt">
                    <p>内&nbsp;&nbsp;&nbsp定</p>
                </div>
            </div>
        </div>
        <div class="require_form"><?php $this->load->view('index/index/recruit-form');?></div>
    </section>
    <div class="lpbtm">
        <section class="company">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.2077975034967!2d139.7687455152585!3d35.67188508019648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188be1ad5732e5%3A0x4d47f5494db8a075!2z5pel5pys44CB44CSMTA0LTAwNjEg5p2x5Lqs6YO95Lit5aSu5Yy66YqA5bqn77yR5LiB55uu77yS77yS4oiS77yR77yRIDLpmo4!5e0!3m2!1sja!2s!4v1628567143450!5m2!1sja!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="inner">
                <div class="box">
                    <div class="boxinner">
                        <div class="secttl">
                            <h2>Company</h2>
                        </div>
                        <dl>
                            <dt>会社名称</dt>
                            <dd>Scope株式会社</dd>
                        </dl>
                        <dl>
                            <dt>本社所在地</dt>
                            <dd>〒104-0061<br>東京都中央区銀座一丁目22番11号　銀座大竹ビジデンス2階</dd>
                        </dl>
                        <dl>
                            <dt>電話番号</dt>
                            <dd>03-6680-8680</dd>
                        </dl>
                        <dl>
                            <dt>設立</dt>
                            <dd>2021年8月</dd>
                        </dl>
                        <dl>
                            <dt>資本金</dt>
                            <dd>5,000,000円</dd>
                        </dl>
                        <dl>
                            <dt>取引銀行</dt>
                            <dd>PayPay銀行</dd>
                        </dl>
                        <dl>
                            <dt>事業内容</dt>
                            <dd>·システムエンジニアリングサービス<br>·SES営業代行サービス</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
        <section class="contacts">
            <div class="wrapper">
                <div class="secttl">
                    <h2>Contact</h2>
                </div>
                <?php $this->load->view('index/index/page-contact');?>
            </div>
        </section>
    </div>
</div>
<div class="top"></div>
<?php $this->load->view('common/footer');?>