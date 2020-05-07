<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="format-detection" content="telephone=no,email=no">
    <link rel="icon" href="/common/img/favicon/favicon.ico" type="image/vnd.microsoft.icon">
    <title>Document</title>
    <!--メタキーワード、ディスクリプション-->
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href="/dest/css/base.css">
    <link rel="stylesheet" href="/dest/css/top.css">
    <!--全ページ共通のcss、jsファイル読み込み-->
    <?php include($_SERVER['DOCUMENT_ROOT']. '/dest/include/link.php'); ?>

    <!--各ページごとのcssファイル読み込み-->
    <link rel="stylesheet" href="/css/uniq.css">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/dest/include/google-analytics.php'); ?>
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/dest/include/tag.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/dest/include/header.php'); ?>
    <!--ここからメインコンテンツ--->
    <main>
        <section class="mv">
            <h1 class="mv__copy"><span class="mv__copyTxt">Create lots of</span>
                <span class="mv__copyAshirai">
                    <img src="/dest/img/top/img_top_ashirai01.svg" alt="Love">
                </span>
                <span class="mv__copyTxt">to make the best moment</span>
            </h1>
            <figure class="mv__photo"><img src="/dest/img/top/img_top_01@2x.jpg" alt="BESTBRIDAL"></figure>
            <p class="mv__scroll">SCROLL</p>
        </section>

        <section class="philosophyBox">
            <div class="philosophyBoxInner">
                <div class="container">
                    <div class="philosophyFltBox">
                        <div class="philosophyFltBox__l">
                            <h2 class="philosophyTitle"><span>Philosophy</span>
                                <img src="/dest/img/top/img_top_copy.svg" alt="人生の瞬間を。1日の、そのひと時を。">
                            </h2>
                            <p class="philosophyTxt"> ｢いい」を超えた「最高」にするために、<br class="pcDisp">必要なものはなんだろう。</p>
                            <p class="btn__gobal btn__gobalPink"><a href=""></a></p>
                        </div>
                        <div class="philosophyFltBox__r">
                            <figure class="philosophyPhoto"><img src="/dest/img/top/img_top_02@2x.jpg" alt="画像">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="serviceBox">
            <div class="serviceBoxInner">
                <div class="container">
                    <h2 class="head02__global">Service<span>サービス</span></h2>
                    <ul class="threeColomBox__global">
                        <li>
                            <figure class="threeColomBox__photo"><span><img src="/dest/img/top/img_top_03@2x.jpg"
                                        alt=""></span>
                            </figure>
                            <p class="threeColomBox__title">Wedding</p>
                        </li>
                        <li>
                            <figure class="threeColomBox__photo hover__photo"><span><img
                                        src="/dest/img/top/img_top_03@2x.jpg" alt=""></span>
                            </figure>
                            <p class="threeColomBox__title">Wedding</p>
                        </li>
                        <li>
                            <figure class="threeColomBox__photo hover__photo"><span><img
                                        src="/dest/img/top/img_top_03@2x.jpg" alt=""></span>
                            </figure>
                            <p class="threeColomBox__title">Wedding</p>
                        </li>
                        <li>
                            <figure class="threeColomBox__photo hover__photo"><span><img
                                        src="/dest/img/top/img_top_03@2x.jpg" alt=""></span>
                            </figure>
                            <p class="threeColomBox__title">Wedding</p>
                        </li>
                        <li>
                            <figure class="threeColomBox__photo hover__photo"><span><img
                                        src="/dest/img/top/img_top_03@2x.jpg" alt=""></span>
                            </figure>
                            <p class="threeColomBox__title">Wedding</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="infoBox">
            <div class="infoBoxInner">
                <h2 class="head02__global">Service<span>サービス</span></h2>
                <ul class="infoBox__list">
                    <li>
                        <time class="infoBox__listTime">2020.05<span>01</span></time>
                        <p class="infoBox__listTxt">ダミー新着情報がここに入ります。ダミー新着情報がここに入ります。ダミー新着情報がここに入ります。</p>
                    </li>
                </ul>
                <p class="btn__gobal btn__gobalBlack"><a href="">View all INFO</a></p>
            </div>
        </section>


        <section class="blogBox">
            <div class="container">
                <div class="blog__titleBox">
                    <h2 class="head02__global">Bridal Blog<span>愛のかけら</span></h2>
                    <p class="btn__gobal btn__gobalWhite"><a href="">View all INFO</a></p>
                </div>
                <ul class="blogBox__list">
                    <li>
                        <div class="blogBox__listInner">
                            <figure class="blogBox__photo hover__photo">
                                <span>
                                    <img src="/dest/img/top/img_top_05@2x.jpg" alt="">
                                </span>
                            </figure>
                            <div class="blogList__txtBox">
                                <time class="blogList__txtBoxTime">2020.02.12</time>
                                <p class="blogList__txtBoxTxt">人生で最高の日になりました。</p>
                                <p class="btn__simple"><a href="">View more</a></p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="blogBox__listInner">
                            <figure class="blogBox__photo hover__photo">
                                <span>
                                    <img src="/dest/img/top/img_top_05@2x.jpg" alt="">
                                </span>
                            </figure>
                            <div class="blogList__txtBox">
                                <time class="blogList__txtBoxTime">2020.02.12</time>
                                <p class="blogList__txtBoxTxt">人生で最高の日になりました。</p>
                                <p class="btn__simple"><a href="">View more</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="topBannerBox01">
            <div class="container">
                <ul class="threeColomBox__global">
                    <li>
                        <figure class="threeColomBox__photo hover__photo">
                            <span><img src="/dest/img/top/img_top_05@2x.jpg" alt=""></span>
                        </figure>
                    </li>
                </ul>
            </div>
        </section>

        <section class="topicsBox">
            <div class="topicsBoxInner">
                <div class="topicsListBox">
                    <div class="topicsListFltBox">
                        <h2 class="topicsBox__title">Topics<span>トピックス</span></h2>
                        <p class="btn__gobal btn__gobalPink"><a href=""></a></p>
                    </div>
                    <ul class="topicsListBox__list">
                        <li>
                            <a href="">
                                <time class="topicsListBox__listTime">2020.05</time>
                                <p class="topicsListBox__listTxt">ダミー新着情報がここに入ります。ダミー新着情報がここに入ります。ダミー新着情報がここに入ります。</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <time class="topicsListBox__listTime">2020.05</time>
                                <p class="topicsListBox__listTxt">ダミー新着情報がここに入ります。ダミー新着情報がここに入ります。ダミー新着情報がここに入ります。</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <section class="topBannerBox02">
            <div class="container">
                <ul class="threeColomBox__global">
                    <li>
                        <figure class="threeColomBox__photo hover__photo">
                            <span><img src="/dest/img/top/img_top_05@2x.jpg" alt=""></span>
                        </figure>
                    </li>
                    <li>
                        <figure class="threeColomBox__photo hover__photo">
                            <span><img src="/dest/img/top/img_top_05@2x.jpg" alt=""></span>
                        </figure>
                    </li>
                    <li>
                        <figure class="threeColomBox__photo hover__photo">
                            <span><img src="/dest/img/top/img_top_05@2x.jpg" alt=""></span>
                        </figure>
                    </li>
                    <li>
                        <figure class="threeColomBox__photo hover__photo">
                            <span><img src="/dest/img/top/img_top_05@2x.jpg" alt=""></span>
                        </figure>
                    </li>
                </ul>
            </div>
        </section>

    </main>
    <!--ここまでメインコンテンツ--->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/dest/include/footer.php'); ?>

</body>

</html>