<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="彭爸爸狗園,流浪狗,領養代替購買,結紮,加入志工,捐款,領養">
        <meta name="description" content="彭爸爸狗園 流浪狗財團法人機構">
        <meta name="author" content="彭祥瑀">

        <title>彭爸爸狗園</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-clean-work.css" rel="stylesheet">

<!--

Tooplate 2132 Clean Work

https://www.tooplate.com/view/2132-clean-work

Free Bootstrap 5 HTML Template

-->
    </head>
    
    <body>

        <header class="site-header">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-house-fill me-2"></i>
                            流浪狗財團法人機構
                        </p>
                        
                        <p class="d-flex me-4 mb-0">
                            <i class="bi bi-person"></i>
                            <?php session_start(); 
                            echo "歡迎回來" . $_SESSION['umail'];
                            ?>
                        </p>


                        <p class="d-flex d-lg-block d-md-block d-none me-4 mb-0">
                            <i class="bi-clock-fill me-2"></i>
                            <strong class="me-2">Mon - Fri</strong> 8:00 AM - 5:30 PM
                        </p>

                        <p class="site-header-icon-wrap text-white d-flex mb-0 ms-auto">
                            <i class="site-header-icon bi-whatsapp me-2"></i>
                            <a href="tel: 110-220-9800" class="text-white">
                                0969696969
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/bubbles.png" class="logo img-fluid" alt="">

                    <span class="ms-2">彭爸爸狗園</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">首頁</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.html">關於我們</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">其他資訊</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="services.html">服務項目</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">聯絡資訊</a>
                        </li>

                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="dogcatsignup.html">報名參觀</a>
                        </li>
                        
                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="logout.php">登出</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            <section class="hero-section hero-section-full-height d-flex justify-content-center align-items-center">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12 text-center mx-auto">
                            <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                                <span>我們愛護</span>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">狗狗</b>
                                    <b>貓咪</b>
                                    <b>需要幫助的你</b>
                                </span>
                            </h1>

                            <a class="custom-btn btn button button--atlas smoothscroll me-3" href="#intro-section">
                                <span>簡介</span>

                                <div class="marquee" aria-hidden="true">
                                    <div class="marquee__inner">
                                        <span>我愛台妹</span>
                                        <span>我愛台妹</span>
                                        <span>我愛台妹</span>
                                        <span>我愛台妹</span>
                                    </div>
                                </div>
                            </a>

                            <a class="custom-btn custom-border-btn custom-btn-bg-white btn button button--pan smoothscroll" href="#services-section">
                                <span>探索服務</span>
                            </a>
                        </div>

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L40,229.3C80,235,160,245,240,250.7C320,256,400,256,480,240C560,224,640,192,720,176C800,160,880,160,960,138.7C1040,117,1120,75,1200,80C1280,85,1360,139,1400,165.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
            </section>


            <section class="intro-section" id="intro-section">
                <div class="container">
                    <div class="row justify-content-lg-center align-items-center">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">你最可靠 &amp; 信任 <br> 的夥伴</h2>

                            <p><a href="#">彭爸爸狗園</a> 是一個透明的慈善機構，由藍鑽講師彭祥瑀在2069年創立，我們保持三大原則，分別是是卓越、信念以及誠信，我們不僅在慈善機構提供服務，還時常參與社會運動，幫助地方民眾社區發展，讓更多人了解流浪狗的需求和宣導領養代替購買。</p>
                            <p>你 <strong>可能沒注意到</strong>  狗園有開放參觀，不定時舉辦狗狗交流會，請 <a href="https://web.nttu.edu.tw/s45/midtermreport/contact.html" target="_blank">聯繫我們</a> 取得更詳細的資訊。</p>
                        </div>

                        <div class="col-lg-6 col-12 custom-block-wrap">
                            <img src="images/male-wearing-apron-female-white-t-shirt-smiling-broadly-being-glad-clean.png" class="img-fluid">

                            <div class="custom-block d-flex flex-column">
                                <h6 class="text-white mb-3">Call me if you got lost:</h6>

                                <p class="d-flex mb-0">
                                    <i class="bi-telephone-fill custom-icon me-2"></i>

                                    <a href="tel: 110-220-9800">
                                        0969696969
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="services-section section-padding section-bg" id="services-section">                
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-4">關於我們最好的服務</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail.html">
                                                <img src="images/services/people-taking-care-office-cleaning.jpg" class="services-image img-fluid" alt="">
                                                <img src="images/services/person-taking-care-office.jpg" class="services-image services-image-hover img-fluid" alt="">

                                                <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            $690
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            2 hrs
                                                        </p>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail.html">結紮</a>
                                            </h4>

                                            <p>解決大部分流浪狗產生</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star"></i>
                                                    <i class="bi-star"></i>
                                                </div>

                                                <a href="services-detail.html" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Learn More</span>

                                                    <div class="marquee" aria-hidden="true">
                                                        <div class="marquee__inner">
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail2.html">
                                                <img src="images/services/young-smiling-woman-wearing-rubber-gloves-cleaning-stove.jpg" class="services-image img-fluid" alt="">
                                                <img src="images/services/woman-holding-rag-detergent-cleaning-cooker.jpg" class="services-image services-image-hover img-fluid" alt="">

                                                <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            $free
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            陪伴終生
                                                        </p>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail2.html">領養</a>
                                            </h4>

                                            <p>領養代替購買!!!</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                </div>

                                                <a href="services-detail2.html" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Learn More</span>

                                                    <div class="marquee" aria-hidden="true">
                                                        <div class="marquee__inner">
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb mb-lg-0">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail3.html">
                                                <img src="images/services/man-polishing-car-inside-car-service.jpg" class="services-image img-fluid" alt="">
                                                <img src="images/services/man-polishing-car-inside.jpg" class="services-image services-image-hover img-fluid" alt="">

                                                <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            $free
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            Anytime
                                                        </p>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail3.html">加入志工</a>
                                            </h4>

                                            <p>想為浪浪們盡一份心力嗎? 快來加入我們!!!</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                </div>

                                                <a href="services-detail3.html" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Learn More</span>

                                                    <div class="marquee" aria-hidden="true">
                                                        <div class="marquee__inner">
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb mb-lg-0">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail4.html">
                                                <img src="images/services/professional-industrial-cleaner-protective-uniform-cleaning-floor-food-processing-plant.jpg" class="services-image img-fluid" alt="">
                                                <img src="images/services/close-up-mop-cleaning-industrial-plant-floor.jpg" class="services-image services-image-hover img-fluid" alt="">

                                                <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            $誠意
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            Anytime
                                                        </p>
                                                    </div>                                                    
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail4.html">捐款</a>
                                            </h4>

                                            <p>贊助我們提供給小毛孩更好的環境和維護</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star"></i>
                                                </div>

                                                <a href="services-detail4.html" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Learn More</span>

                                                    <div class="marquee" aria-hidden="true">
                                                        <div class="marquee__inner">
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                            <span>Learn More</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="testimonial-section section-padding section-bg">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="text-white mb-4">顧客回饋</h2>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="featured-block">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="images/avatar/happy-customer-01.jpg" class="avatar-image img-fluid">

                                    <div class="ms-3">
                                        <h4 class="mb-0">張景勛</h4>

                                        <div class="reviews-icons mb-1">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <p class="mb-0">親愛的張景勛同學，根據校園網路後台數據顯示：在2023年2月21日至2023年4月26日期間內你瀏覽同志交友網頁134次，嚴重違反臺東大學《學生網絡安全準則》。 當前應以學業為重，為了規範你的平時行為，請你於2023年4月27日7:40至教務處報到，進行網絡安全與健康教育講座。 並在講座之後向法律系主任提交2000字心得體驗，截止時間2023年4日30日。 青少年應以學習為重，希望你能深刻檢討，吸取教訓，規範自己以後的行為，健康上網。[臺東大學資訊組]</p>
                            </div>

                            <div class="featured-block mb-lg-0">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="images/avatar/55688.jpg" class="avatar-image img-fluid">

                                    <div class="ms-3">
                                        <h4 class="mb-0">傅芃穎</h4>

                                        <div class="reviews-icons mb-1">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <p class="mb-0">我覺得我被冒犯了，抽五包菸</p>
                            </div>
                        </div>


                        <div class="col-lg-4 col-12">
                            <div class="featured-block">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="images/avatar/happy-customer-03.jpg" class="avatar-image img-fluid">

                                    <div class="ms-3">
                                        <h4 class="mb-0">陳泓仁</h4>

                                        <div class="reviews-icons mb-1">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>

                                <p class="mb-0">BO BO BO BO</p>
                            </div>
                        </div>

                            <div class="col-lg-4 col-12">
				<div class="ms-3">
                                <?php
                                    try{
                                        require("../db/01_conn.php");
                                        $sql = "SELECT uname, umail, sservice, ffeedback FROM feedback";
                                        $result = $connect->query($sql);
                                        if ($result->rowCount() > 0) {
                                            while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                                                $uname2=$row['uname'];
                                                $umail2=$row['umail'];
                                                $sservice2=$row['sservice'];
                                                $ffeedback2=$row['ffeedback'];
                                ?>
                                            
                                                <div class="featured-block">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <img src="images/123.jpg" class="avatar-image img-fluid">
                                                        <div class="ms-3">
                                                            <h4 class="mb-0"><?php echo $uname2; ?></h4>
                                                            <div class="reviews-icons mb-1">
                                                                <i class="bi-star-fill"></i>
                                                                <i class="bi-star-fill"></i>
                                                                <i class="bi-star-fill"></i>
                                                                <i class="bi-star-fill"></i>
                                                                <i class="bi-star-fill"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0"><?php echo $sservice2; ?></p>
                                                    <p class="mb-0"><?php echo $ffeedback2; ?></p>
                                                </div>
                                            </div>
                                <?php
                                            } 
                                        } else {
                                            $msg="Error Message <br>\n";
                                        }
                                    } catch(PDOException $e){
                                        echo $e->getMessage() . "<br>\n";
                                    }
                                    $connect = null;
                                ?>
                            </div>
                        </div>
                    </div>
                </section>


            <section class="partners-section">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-12 col-12">
                            <h4 class="partners-section-title bg-white shadow-lg">創辦人</h4>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="images/partners/toprak-leasing.jpg" class="partners-image img-fluid">
                        </div>


                    </div>
                </div>
            </section>
        </main>


        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex align-items-center mb-4 pb-2">
                        <div>
                            <img src="images/bubbles.png" class="logo img-fluid" alt="">
                        </div>

                        <ul class="footer-menu d-flex flex-wrap ms-5">
                            <li class="footer-menu-item"><a href="about.html" class="footer-menu-link">關於我們</a></li>

                            <li class="footer-menu-item"><a href="http://algo.nttu.edu.tw/1111ITWWW/11111245/" class="footer-menu-link">部落格</a></li>

                            <li class="footer-menu-item"><a href="contact.html#volunteer-name" class="footer-menu-link">回饋</a></li>

                            <li class="footer-menu-item"><a href="contact.html" class="footer-menu-link">聯絡資訊</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                        <h5 class="site-footer-title mb-3">提供的服務</h5>

                        <ul class="footer-menu">
                            <li class="footer-menu-item">
                                <a href="services-detail.html" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    結紮
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="services-detail2.html" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    領養
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="services-detail3.html" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    加入志工
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="services-detail4.html" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    捐款
                                </a>
                            </li>

                            
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                        <h5 class="site-footer-title mb-3">辦公室</h5>

                        <p class="text-white d-flex mt-3 mb-2">
                            <i class="bi-geo-alt-fill me-2"></i>
                            臺東縣臺東市大學路二段369號
                        </p>

                        <p class="text-white d-flex mb-2">
                            <i class="bi-telephone-fill me-2"></i>

                            <a href="tel: 110-220-9800" class="site-footer-link">
                                0969696969
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <i class="bi-envelope-fill me-2"></i>

                            <a href="mailto:info@company.com" class="site-footer-link">
                                11111245@gm.nttu.edu.tw
                            </a>
                        </p>

                        <ul class="social-icon mt-4">
                            <li class="social-icon-item">
                                <a href="https://twitter.com/dogecoin?lang=zh-Hant" class="social-icon-link button button--skoll">
                                    <span></span>
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.facebook.com/wangbaOfficial/" class="social-icon-link button button--skoll">
                                    <span></span>
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://www.instagram.com/tsai_ingwen/" class="social-icon-link button button--skoll">
                                    <span></span>
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 mt-3 mt-lg-0 mt-md-0">
                        <div class="featured-block">
                            <h5 class="text-white mb-3">服務時間</h5>

                            <strong class="d-block text-white mb-1">Mon - Fri</strong>

                            <p class="text-white mb-3">8:00 AM - 5:30 PM</p>

                            <strong class="d-block text-white mb-1">Sat</strong>

                            <p class="text-white mb-0">6:00 AM - 2:30 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">                       
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/init.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
