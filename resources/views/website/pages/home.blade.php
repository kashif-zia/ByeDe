@extends('website/layouts/master')
@section('title', "Byde")
@section('description', "...")
@section('content')
<!-- top-banner -->
<section class="main-banner">
<div class="operating-comany-btn"><a href="#" class="operating-link">運営会社</a></div>
    <div class="container">
    
        <h1 class="main-hading">デリバリーサービス 一括管理！</h1>
        <div class="row">
            <div class="col-md-6">
                <img src="/website/assets/images/desktop-img.png" width="100%">
            </div>
            <div class="col-md-6">
                <div class="logo-div">
                    <img src="/website/assets/images/logo.png" class="logo-img">
                </div>
            </div>
        </div>
        <div class="banner-btn"><a href="#" class="bannerbtn-link">問い合わせはコチラ</a></div>
    </div>
</section>
<!-- section -->
<section class="occurrence-issues-section">
    <div class="container">
        <h2 class="Occurrence-h2">デリバリーサービスを複数契約することによる<br> 課題の発生、導入によるメリット</h2>
        <div class="occurrence-box">
            <p class="occurrence-p">このような<span class="circle-text">お悩み</span> はございませんか？</p>
            <div class="icon-div">
                <div class="row mx-0 pb-3">
                    <div class="col-md-6">
                        <div class="icon-box">
                            <img src="/website/assets/images/mobile-img.png">
                            <p class="icon-text">タブレットの数の増加で、 スペースが圧迫されている</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-box">
                            <img src="/website/assets/images/printer.png">
                            <p class="icon-text">プリンターと連結されて いないので、レシート発行が 手間になっている</p>
                        </div>
                    </div>
                </div>
                <div class="row mx-0 pt-3">
                    <div class="col-md-6">
                        <div class="icon-box">
                            <img src="/website/assets/images/location.png">
                            <p class="icon-text">もっとデリバリーサービスを 増やしたい</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon-box">
                            <img src="/website/assets/images/chart.png">
                            <p class="icon-text">デリバリーサービスの 売上管理が煩雑</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="clip-path">
    <div class="container">
        <h2 class="such-trouble-h2">そのようなお悩みを</h2>
        <div class="such-trouble-row">
            <div class="col-md-5">
                <img src="/website/assets/images/logo.png" class="byde-logo">
            </div>
            <div class="col-md-2 but-col-2">
                <p class="but-text"> が</p>
            </div>
            <div class="col-md-5 resolution-col-5">
                <p class="solved-text">解決<br> します！</p>
            </div>
        </div>
    </div>
</section>
<section class="benifit-intro-section">
    <div class="container-fliud">
        <div class="intro-merit">
            <div class="mx-5 ">
                <img src="/website/assets/images/dark-logo.png" class="darkbyde-logo">
            </div>
            <div class="but-col">
                <p class="but-p"> を</p>
            </div>
            <div class="d-flex justify-content-center flex-column mx-3">
                <p class="introducing-p">
                    <span class="introducing-txt"> 導入することによる</span>
                    <br>
                    <span class="merit-txt">メリット</span>
                    <p>
            </div>
        </div>
        <div class="intro-merit-list">
            <div class="img-half">
                <img src="/website/assets/images/half-screen.png" width="90%">
            </div>
            <div class="intro-meritlist-item">
                <div class="intro-icon-box">
                    <img src="/website/assets/images/mobile-icon.png">
                    <p class="icon-text">タブレット一台で <br>複数デリバリーを管理可能</p>
                </div>
                <div class="intro-icon-box">
                    <img src="/website/assets/images/confirmation-order-printer.png">
                    <p class="icon-text">プリンターとの連携により、<br> 簡単に注文を確認</p>
                </div>
                <div class="intro-icon-box">
                    <img src="/website/assets/images/dark-chart.png">
                    <p class="icon-text">複数デリバリーの売上を<br> 一括で管理可能</p>
                </div>
                <div class="intro-icon-box">
                    <img src="/website/assets/images/stop-icon.png">
                    <p class="icon-text">対応が間に合わなくなった時には、<br> 受付を一括で停止可能</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="">
            <p class="system-p">システムイメージ</p>
            <img src="/website/assets/images/byde-graph.png" width="100%">
        </div>
    </div>
</section>
<section class="contactus-banner">
    <div class="container">
        <h1 class="contact-hading">ご利用料金についてはお問い合わせください！</h1>
        <div class="contact-btn"><a href="#" class="contactbtn-link">問い合わせはコチラ</a></div>
    </div>
</section>
<section class="customer-request-section">
    <div class="container">
        <h2 class="customer-request-heading">お客様のご要望に沿った提案をさせていただきます</h2>
        <div class="feature-byde">
            <h3 class="feature-byde-h3">ByDeの機能</h3>
        </div>
        <div class="row screen-tab-row">
            <div class="col-md-6">
                <span class="tab-circle-text">新規注文</span>
                <img src="/website/assets/images/tab-screen-one.png" width="100%" class="tab-screen-img">
            </div>
            <div class="col-md-6">
                <span class="tab-circle-text">新規注文</span>
                <img src="/website/assets/images/tab-screen-two.png" width="100%" class="tab-screen-img">
            </div>
        </div>
        <div class="row screen-tab-row">
            <div class="col-md-6">
                <span class="tab-circle-text">売上確認</span>
                <img src="/website/assets/images/tab-screen-three.png" width="100%" class="tab-screen-img">
            </div>
            <div class="col-md-6">
                <span class="tab-circle-text">プリンター 連携</span>
                <img src="/website/assets/images/tab-screen-four.png" width="100%" class="tab-screen-img">
            </div>
        </div>
    </div>
</section>
<section class="news-section">
    <div class="container">
        <h2 class="news-h2">お知らせ</h2>
        <div class="news-box">
            <div class="row my-2">
                <div class="col-md-2">
                    <p class="news-date">2022/9/1</p>
                </div>
                <div class="col-md-10">
                    <h2 class="news-title">お知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせ</h2>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-2">
                    <p class="news-date">2022/9/1</p>
                </div>
                <div class="col-md-10">
                    <h2 class="news-title">お知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせ</h2>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-2">
                    <p class="news-date">2022/9/1</p>
                </div>
                <div class="col-md-10">
                    <h2 class="news-title">お知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせ</h2>
                </div>
            </div>
        </div>
        <div class="news-more"><a href="#" class="news-link">もっと見る＞</a></div>
    </div>
</section>
<section class="faq-section">
    <div class="container-fluid">
        <h2 class="faq-h2">FAQ </h2>
        <div class="row">
            <div class="col-md-7 p-0">
                <div class="faq-question-left">
                    <span class="question-h">Q</span><span class="question-p">簡単に操作は可能ですか？</span>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row ans-row">
            <div class="col-md-5"></div>
            <div class="col-md-7 p-0">
                <div class="faq-question-right">
                    <span class="question-h">A</span><span class="question-p">専門的な知識は一切必要ございません。<br>
                        導入時には弊社スタッフがサポートをさせていただきます。</span>
                </div>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col-md-7 p-0">
                <div class="faq-question-left">
                    <span class="question-h">Q</span><span class="question-p">タブレットやプリンターは <br>新しく用意する必要がありますか？</span>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row ans-row">
            <div class="col-md-5"></div>
            <div class="col-md-7 p-0">
                <div class="faq-question-right">
                    <span class="question-h">A</span><span class="question-p">機種によりますが、お手持ちのもので利用可能です。<br>
                        レンタルサービスも行なっております。</span>
                </div>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col-md-7 p-0">
                <div class="faq-question-left">
                    <span class="question-h">Q</span><span class="question-p">初期設定にはどの程度かかりますか？</span>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row ans-row">
            <div class="col-md-5"></div>
            <div class="col-md-7 p-0">
                <div class="faq-question-right">
                    <span class="question-h">A</span><span class="question-p">弊社スタッフが遠隔・対面でサポートを
                        <br>行わせていただきますのでご安心ください。</span>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="inquiry-form">
    <div class="container custom-container">
        <div class="inquiry-form-title text-center">
            <h2>お問い合わせ</h2>
        </div>
        <div class="inquiry-form-content text-center m-auto">
            <div class="mb-3">
                <div class="d-flex">
                    <label class="inquiry-form-label" for="name">ご担当者様氏名<span
                            class="inquiry-form-label-sub-title">必須</span></label>
                </div>
                <div class="inquiry-input">
                    <input type="text" id="name" required>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex">
                    <label class="inquiry-form-label" for="phone">ご担当者様電話番号<span
                            class="inquiry-form-label-sub-title">必須</span></label>
                </div>
                <div class="inquiry-input">
                    <input type="text" id="phone" required>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex">
                    <label class="inquiry-form-label" for="email">ご担当者様メールアドレス<span
                            class="inquiry-form-label-sub-title">必須</span></label>
                </div>
                <div class="inquiry-input">
                    <input type="text" id="email" required>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex">
                    <label class="inquiry-form-label" for="store-name">法人名、もしくは店舗名<span
                            class="inquiry-form-label-sub-title">必須</span></label>
                </div>
                <div class="inquiry-input">
                    <input type="text" id="store-name" required>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex">
                    <label class="inquiry-form-label" for="store-name">店舗数
                        <span class="inquiry-form-label-sub-title">必須</span></label>
                </div>
                <div class="d-flex">
                    <select class="num-of-store-select" name="" id="">
                        <option value=""></option>
                        <option value="">1</option>
                        <option value="">10</option>
                        <option value="">20</option>
                    </select>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-flex mb-3">
                    <label class="inquiry-form-label" for="store-name">現在ご利用になっているデリバリーサービス
                        <span class="inquiry-form-label-sub-title">必須</span>
                    </label>
                </div>
                <div class="">
                    <div class="d-flex justify-content-between align-items-center flex-wrap check-boxes">
                        <div class="checkbox-content d-flex mr-4 mb-2">
                            <input class="mr-1" type="checkbox" name="" id="">
                            <h5 class="checkbox-title mb-0">Uber Eats</h5>
                        </div>
                        <div class="checkbox-content d-flex mr-4 mb-2">
                            <input class="mr-1" type="checkbox" name="" id="">
                            <h5 class="checkbox-title mb-0">Demaecan</h5>
                        </div>
                        <div class="checkbox-content d-flex mr-4 mb-2">
                            <input class="mr-1" type="checkbox" name="" id="">
                            <h5 class="checkbox-title mb-0">Menu</h5>
                        </div>
                        <div class="checkbox-content d-flex mr-4 mb-2">
                            <input class="mr-1" type="checkbox" name="" id="">
                            <h5 class="checkbox-title mb-0">Wolt</h5>
                        </div>
                        <div class="checkbox-content d-flex mr-4 mb-2">
                            <input class="mr-1" type="checkbox" name="" id="">
                            <h5 class="checkbox-title mb-0">anycarry</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center flex-wrap check-boxes">
                    <div class="checkbox-content d-flex mr-4 mb-2">
                        <input class="mr-1" type="checkbox" name="" id="">
                        <h5 class=" inquiry-form-label mb-0">現在は導入していないが、導入に伴いByDeの利用を検討している</h5>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex">
                    <label class="inquiry-form-label" for="store-url">法人、もしくは店舗ホームページURL<span
                            class="inquiry-form-url-sub-title">任意</span></label>
                </div>
                <div class="inquiry-input">
                    <input type="text" id="store-url" required>
                </div>
            </div>
            <div class="mb-3">
                <div class="d-flex">
                    <label class="inquiry-form-label" for="inquiry-content">お問い合わせ内容<span
                            class="inquiry-form-label-sub-title">必須</span></label>
                </div>
                <div class="inquiry-input">
                    <!-- <input type="text" id="inquiry-content" required> -->
                    <textarea name="" id="" cols="30" rows="8" class="inquiry-textarea w-100"></textarea>
                </div>
            </div>
            <div class="inquiry-send-button">
                <a class="inquiry-send-btn" href="#">送信する</a>
            </div>
        </div>
    </div>
</section>
@endsection
