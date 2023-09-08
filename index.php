<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

<!-- 본인코드삽입 -->
<div class="wrap">
    <!-- <header data-include-path="./outline/header.html"></header> -->
    <main id="main">
      <section id="main_home" class="sec sec1 main_home">
        <div class="swiper mainSwiper">
          <div class="swiper-wrapper main_wrapper">
            <div class="swiper-slide main_slide s1">
              <p class="slider-title main_slide_tit">타이틀1</p>
            </div>
            <div class="swiper-slide main_slide s2">
              <p class="slider-title main_slide_tit">타이틀2</p>
            </div>
            <div class="swiper-slide main_slide s3">
              <p class="slider-title main_slide_tit">타이틀3</p>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
        <script>
          var swiper = new Swiper(".mainSwiper", {
            spaceBetween: 30,
            effect: "fade",
            autoplay: {
              delay: 4000,
              disableOnInteraction: false,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
          });
        </script>
      </section>
      <div id="main_contents">
        <section class="sec sec2 info_wrap">
          <div class="inner">
            <div class="sec_title_g">
              <div class="title1">
                JEI COPERATION
              </div>
              <div class="title2">
                대한민국 교육명가<br>
                교육문화사업의 Leader
              </div>
              <div class="txt1">
                재능그룹은 1977년 창립 이래, ‘보다 나은 교육을 통한 보다 나은 삶’으로의 변화를 추구해온 종합교육문화기업입니다.<br>
                무한한 가능성을 가진 아이들에게 올바른 교육환경을 제공하여 창의적인 인재로 육성하는 것을 사명으로 여기며<br>
                교육문화 사업에 매진하여 왔습니다.
              </div>
            </div>
          </div>
        </section>

        <!-- 230829 -->
        <section class="sec sec3 business_wrap">
          <div class="inner"><!-- sec_title_g -->
            <div class="sec_title_g">
              <div class="title_box">
                <div class="title1">
                  BUSINESS
                </div>
                <div class="title3">
                  보다 나은 교육을 통한<br>
                  보다 나은 삶
                </div>
                <div class="txt1">
                  재능그룹은 종합교육 네트워크를 구축하여<br>
                  평생교육을 실현하고 있습니다.
                </div>
                <div class="btn">
                  <a href="#">
                    <span>더보기</span>
                    <span class="arrow_next">
                      <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                          d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>

            <div class="contents">
              <div class="util opacityAni is-inview">
                <div class="swiper-pagenav">
                  <div class="pager">
                    <span class="now">01</span>
                    /
                    <span class="total">04</span>
                  </div>
                  <button class="arrow_prev slick-arrow" type="button" style="display: block;">
                    <span class="blind">이전</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                      viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <path
                        d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                    </svg>
                  </button>
                  <div class="control_btn">
                    <button class="pause slick-pause" type="button">
                      <span class="blind">슬라이드 멈춤</span>
                      <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                          d="M48 64C21.5 64 0 85.5 0 112V400c0 26.5 21.5 48 48 48H80c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H48zm192 0c-26.5 0-48 21.5-48 48V400c0 26.5 21.5 48 48 48h32c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48H240z" />
                      </svg>
                    </button>
                    <button class="play slick-play off" type="button">
                      <span class="blind">슬라이드 재생</span>
                      <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                          d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </button>
                  </div>

                  <button class="arrow_next slick-arrow" type="button" style="display: block;">
                    <span class="blind">다음</span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                      viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <path
                        d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                    </svg>
                  </button>
                </div>

              </div>
              <div class="business_slider">

                <div class="item swiper-slide b1 showimg" data-scroll>
                  <a href="#">
                    <div class="img custom_mousemove">
                      <span style="background:url('/work/jei/images/flower.jpg')no-repeat center/cover;"></span>
                    </div>
                    <div class="info">
                      <div class="title">
                        <div class="g">
                          <div class="tit">타이틀1</div>
                          <div class="tit">title1</div>
                        </div>
                      </div>
                      <div class="txt1">
                        <p>subtitle</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item swiper-slide b2 showimg" data-scroll>
                  <a href="#">
                    <div class="img custom_mousemove">
                      <span style="background:url('/work/jei/images/flower.jpg')no-repeat center/cover;"></span>
                    </div>
                    <div class="info">
                      <div class="title">
                        <div class="g">
                          <div class="tit">타이틀1</div>
                          <div class="tit">title1</div>
                        </div>
                      </div>
                      <div class="txt1">
                        <p>subtitle</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item swiper-slide b3 showimg" data-scroll>
                  <a href="#">
                    <div class="img custom_mousemove">
                      <span style="background:url('/work/jei/images/flower.jpg')no-repeat center/cover;"></span>
                    </div>
                    <div class="info">
                      <div class="title">
                        <div class="g">
                          <div class="tit">타이틀1</div>
                          <div class="tit">title1</div>
                        </div>
                      </div>
                      <div class="txt1">
                        <p>subtitle</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="item swiper-slide b4 showimg" data-scroll>
                  <a href="#">
                    <div class="img custom_mousemove">
                      <span style="background:url('/work/jei/images/flower.jpg')no-repeat center/cover;"></span>
                    </div>
                    <div class="info">
                      <div class="title">
                        <div class="g">
                          <div class="tit">타이틀1</div>
                          <div class="tit">title1</div>
                        </div>
                      </div>
                      <div class="txt1">
                        <p>subtitle</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <script>
          $('.business_slider').slick({
            speed: 600,
            autoplay: true,
            autoplaySpeed: 3500,
            infinite: true,
            slidesToScroll: 1,
            focusOnSelect: true,
            variableWidth: true,
            arrows: true,
            pauseOnHover: false,
            pauseOnFocus: false,
            swipe: false,
            touchMove: false,
            draggable: false,
            prevArrow: $('.business_wrap').find('.arrow_prev'),
            nextArrow: $('.business_wrap').find('.arrow_next'),
          });

          // control toggle
          $('.pause').click(function () {
            $('.business_slider').slick('slickPause');
          });
          $('.play').click(function () {
            $('.business_slider').slick('slickPlay');
          });

          $(".control_btn").click(function () {
            if ($(".swiper-pagenav .control_btn .play").hasClass('off')) {

              $(".swiper-pagenav .control_btn .play").removeClass('off');
              $(".swiper-pagenav .control_btn .pause").addClass('off');

            } else {
              $(".swiper-pagenav .control_btn .pause").removeClass('off');
              $(".swiper-pagenav .control_btn .play").addClass('off');
            }
          });


          // business slide
          if (typeof $.fn.Slick === 'undefined') {

            $('.business_slider').find('.b1').addClass('on');
            $('.business_slider .item.on').next().next().addClass('slick-on');

            $('.business_slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
              $('.business_slider').find('div[class*="b"]').removeClass('on');
              $('.business_slider .item').removeClass('slick-on');
              $('.business_slider').find('.item:not(.slick-cloned).b' + (nextSlide + 1)).addClass('on');
              $('.business_wrap .pager .now').text('0' + (nextSlide + 1));
              $('.business_slider .item.on:not(.slick-cloned)').next().next().addClass('slick-on');
            });
            $('.business_slider').on('afterChange', function (event, slick, currentSlide, nextSlide) {

            });
          }

        </script>


        <section class="sec sec4 merit_wrap">
          <div class="inner">
            <div class="sec_title_g type2">
              <div class="title1">
                MERIT
              </div>
              <div class="title2">
                새로운 교육을 만들어 갈 재능그룹
              </div>
              <div class="txt1">
                재능그룹이 생각하고 실천하는
                평생교육입니다.
              </div>
            </div>
          </div>
          <div class="contents">
            <div class="merit_list">
              <div class="merit_item">
                <div class="bg" style="background: url('/work/jei/images/merit1.jpg')no-repeat center/cover;"></div>
                <div class="title_box">
                  <div class="title">title1</div>
                  <div class="txt1">
                    subtitle1<br>
                    subtitle2
                  </div>
                </div>
              </div>
              <div class="merit_item">
                <div class="bg" style="background: url('/work/jei/images/merit2.jpg')no-repeat center/cover;"></div>
                <div class="title_box">
                  <div class="title">title1</div>
                  <div class="txt1">
                    subtitle1<br>
                    subtitle2
                  </div>
                </div>
              </div>
              <div class="merit_item">
                <div class="bg" style="background url('/work/jei/images/merit3.jpg')no-repeat center/cover;":></div>
                <div class="title_box">
                  <div class="title">title1</div>
                  <div class="txt1">
                    subtitle1<br>
                    subtitle2
                  </div>
                </div>
              </div>
              <div class="merit_item">
                <div class="bg" style="background: url('/work/jei/images/merit4.jpg')no-repeat center/cover;"></div>
                <div class="title_box">
                  <div class="title">title1</div>
                  <div class="txt1">
                    subtitle1<br>
                    subtitle2
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="sec sec5 edu_wrap sec_type1">
          <div class="inner">
            <div class="sec_title_g type2">
              <div class="title1">JEI EDUCATION</div>
              <div class="title2">자율적이고 창의적인 인재육성</div>
              <div class="txt1">재능교육은 스스로 학습할 수 있는 능력을 가진<br>
                창의적인 인재를 육성합니다.</div>
            </div>
          </div>
          <div class="contents fix_wrap">
            <div class="fix">
              <div class="bg in_view"
                style="background: url(../../images/back.jpg) center center / cover no-repeat;">
              </div>
              <div class="inner">
                <div class="sec_title_g">
                  <div class="title3">
                    재능교육만의 독창적인 학습법<br>
                    ‘스스로 학습법’
                  </div>
                  <div class="txt1">
                    스스로학습법은 스스로 학습할 수 있는 교육환경을 제공하여<br>
                    문제해결능력을 지닌 자율적이고 창의적인 인재로 육성하는<br>
                    재능교육만의 독창적인 학습법입니다.
                  </div>
                </div>
              </div>
              <div class="link">
                <a href="#">
                  <span class="tit">스스로 이야기</span>
                  <span class="arrow_link_next">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                      viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <style>

                      </style>
                      <path
                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg>
                  </span>
                </a>
                <a href="#">
                  <span class="tit">스스로의 힘</span>
                  <span class="arrow_link_next">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                      viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <style>

                      </style>
                      <path
                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="sec sec6 board_wrap">
          <div class="inner">
            <div class="sec_title_g type2">
              <div class="title_box">
                <div class="title1">
                  BUSINESS
                </div>
                <div class="title2">
                  보다 나은 교육을 통한<br>
                  보다 나은 삶
                </div>
                <div class="txt1">
                  재능그룹은 종합교육 네트워크를 구축하여<br>
                  평생교육을 실현하고 있습니다.
                </div>
                <div class="btn">
                  <a href="#">
                    <span>더보기</span>
                    <span class="arrow_next">
                      <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                          d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
              <div class="indicator">
                <button class="btns arrow_prev">
                  <span class="blind">이전</span>
                  <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                    viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                      d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                  </svg>
                </button>
                <button class="btns arrow_next">
                  <span class="blind">다음</span>
                  <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                    viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                      d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="contents">
              <div class="board_list">
                <div class="swiper boardSwiper">
                  <div class="swiper-wrapper boardswiper_wrapper">
                    <div class="swiper-slide board_slide bs1">
                      <a href="#">
                        <div class="cate">
                          NEWS
                        </div>
                        <div class="title">
                          <p class="e_">
                            창의교육,<br> 창의 융합 사고력 코딩학습 출시
                          </p>
                        </div>
                        <div class="txt1">
                          <p class="e_">
                            창의교육이 ‘스스로 생각하는 힘’을 기를 수 있는, 초등학생을 위한 온라인 창의 융합 사고력 코딩 학습을 출시한다고 26일 밝혔다.
                          </p>
                        </div>
                        <div class="date">2023.08.21</div>
                        <button class="more_view">MORE VIEW</button>
                      </a>
                    </div>
                    <div class="swiper-slide board_slide bs2">
                      <a href="#">
                        <div class="cate">
                          NEWS
                        </div>
                        <div class="title">
                          <p class="e_">
                            창의교육,<br> 창의 융합 사고력 코딩학습 출시
                          </p>
                        </div>
                        <div class="txt1">
                          <p class="e_">
                            창의교육이 ‘스스로 생각하는 힘’을 기를 수 있는, 초등학생을 위한 온라인 창의 융합 사고력 코딩 학습을 출시한다고 26일 밝혔다.
                          </p>
                        </div>
                        <div class="date">2023.08.21</div>
                        <button class="more_view">MORE VIEW</button>
                      </a>
                    </div>
                    <div class="swiper-slide board_slide bs3">
                      <a href="#">
                        <div class="cate">
                          NEWS
                        </div>
                        <div class="title">
                          <p class="e_">
                            창의교육,<br> 창의 융합 사고력 코딩학습 출시
                          </p>
                        </div>
                        <div class="txt1">
                          <p class="e_">
                            창의교육이 ‘스스로 생각하는 힘’을 기를 수 있는, 초등학생을 위한 온라인 창의 융합 사고력 코딩 학습을 출시한다고 26일 밝혔다.
                          </p>
                        </div>
                        <div class="date">2023.08.21</div>
                        <button class="more_view">MORE VIEW</button>
                      </a>
                    </div>
                    <div class="swiper-slide board_slide bs4">
                      <a href="#">
                        <div class="cate">
                          NEWS
                        </div>
                        <div class="title">
                          <p class="e_">
                            창의교육,<br> 창의 융합 사고력 코딩학습 출시
                          </p>
                        </div>
                        <div class="txt1">
                          <p class="e_">
                            창의교육이 ‘스스로 생각하는 힘’을 기를 수 있는, 초등학생을 위한 온라인 창의 융합 사고력 코딩 학습을 출시한다고 26일 밝혔다.
                          </p>
                        </div>
                        <div class="date">2023.08.21</div>
                        <button class="more_view">MORE VIEW</button>
                      </a>
                    </div>
                    <div class="swiper-slide board_slide bs5">
                      <a href="#">
                        <div class="cate">
                          NEWS
                        </div>
                        <div class="title">
                          <p class="e_">
                            창의교육,<br> 창의 융합 사고력 코딩학습 출시
                          </p>
                        </div>
                        <div class="txt1">
                          <p class="e_">
                            창의교육이 ‘스스로 생각하는 힘’을 기를 수 있는, 초등학생을 위한 온라인 창의 융합 사고력 코딩 학습을 출시한다고 26일 밝혔다.
                          </p>
                        </div>
                        <div class="date">2023.08.21</div>
                        <button class="more_view">MORE VIEW</button>
                      </a>
                    </div>
                    <div class="swiper-slide board_slide bs6">
                      <a href="#">
                        <div class="cate">
                          NEWS
                        </div>
                        <div class="title">
                          <p class="e_">
                            창의교육,<br> 창의 융합 사고력 코딩학습 출시
                          </p>
                        </div>
                        <div class="txt1">
                          <p class="e_">
                            창의교육이 ‘스스로 생각하는 힘’을 기를 수 있는, 초등학생을 위한 온라인 창의 융합 사고력 코딩 학습을 출시한다고 26일 밝혔다.
                          </p>
                        </div>
                        <div class="date">2023.08.21</div>
                        <button class="more_view">MORE VIEW</button>
                      </a>
                    </div>
                    <div class="swiper-slide board_slide bs7">
                      <a href="#">
                        <div class="cate">
                          NEWS
                        </div>
                        <div class="title">
                          <p class="e_">
                            창의교육,<br> 창의 융합 사고력 코딩학습 출시
                          </p>
                        </div>
                        <div class="txt1">
                          <p class="e_">
                            창의교육이 ‘스스로 생각하는 힘’을 기를 수 있는, 초등학생을 위한 온라인 창의 융합 사고력 코딩 학습을 출시한다고 26일 밝혔다.
                          </p>
                        </div>
                        <div class="date">2023.08.21</div>
                        <button class="more_view">MORE VIEW</button>
                      </a>
                    </div>
                    <div class="swiper-slide board_slide bs8">
                      <a href="#">
                        <div class="cate">
                          NEWS
                        </div>
                        <div class="title">
                          <p class="e_">
                            창의교육,<br> 창의 융합 사고력 코딩학습 출시
                          </p>
                        </div>
                        <div class="txt1">
                          <p class="e_">
                            창의교육이 ‘스스로 생각하는 힘’을 기를 수 있는, 초등학생을 위한 온라인 창의 융합 사고력 코딩 학습을 출시한다고 26일 밝혔다.
                          </p>
                        </div>
                        <div class="date">2023.08.21</div>
                        <button class="more_view">MORE VIEW</button>
                      </a>
                    </div>
                  </div>

                </div>
              </div>
              <div class="util">
                <div class="swiper-scrollbar"></div>
              </div>
              <script>
                var swiper = new Swiper(".boardSwiper", {
                  slidesPerView: "auto",
                  spaceBetween: 32,
                  scrollbar: {
                    el: ".swiper-scrollbar",
                    clickable: true,
                  },
                  navigation: {
                    nextEl: ".indicator .arrow_next",
                    prevEl: ".indicator .arrow_prev",
                  },
                });
              </script>
            </div>
        </section>
        <section class="sec sec5 edu_wrap sec_type1">
          <div class="inner">
            <div class="sec_title_g type2">
              <div class="title1">JEI EDUCATION</div>
              <div class="title2">자율적이고 창의적인 인재육성</div>
              <div class="txt1">재능교육은 스스로 학습할 수 있는 능력을 가진<br>
                창의적인 인재를 육성합니다.</div>
            </div>
          </div>
          <div class="contents fix_wrap">
            <div class="fix">
              <div class="bg in_view"
                style="background: url(../../images/back.jpg) center center / cover no-repeat;">
              </div>
              <div class="inner">
                <div class="sec_title_g">
                  <div class="title3">
                    재능교육만의 독창적인 학습법<br>
                    ‘스스로 학습법’
                  </div>
                  <div class="txt1">
                    스스로학습법은 스스로 학습할 수 있는 교육환경을 제공하여<br>
                    문제해결능력을 지닌 자율적이고 창의적인 인재로 육성하는<br>
                    재능교육만의 독창적인 학습법입니다.
                  </div>
                </div>
              </div>
              <div class="link">
                <a href="#">
                  <span class="tit">스스로 이야기</span>
                  <span class="arrow_link_next">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                      viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <style>

                      </style>
                      <path
                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg>
                  </span>
                </a>
                <a href="#">
                  <span class="tit">스스로의 힘</span>
                  <span class="arrow_link_next">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                      viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <style>

                      </style>
                      <path
                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    <!-- <footer data-include-path="./outline/footer.html"></footer> -->
  </div>
<div class="latest_top_wr">
  <div class="inner">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_block', 'gallery', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
    echo latest('basic', 'notice', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
  </div>
</div>

<!-- //본인코드삽입 -->


<?php
include_once(G5_PATH.'/tail.php');