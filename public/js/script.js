"use strict";

$(function () {
    /* 初回のみローディングアニメーション */
    function webStorage() {
        if (sessionStorage.getItem("access")) {
            $(".load").hide();
        } else {
            $("body").addClass("scroll-lock");
            setTimeout(function () {
                $(".load").fadeOut(2000);
                $("body").removeClass("scroll-lock");
            }, 3000);
            sessionStorage.setItem("access", 0);
        }
    }
    webStorage();

    /* inviewモーション */
    $(".inview").on("inview", function () {
        $(this).addClass("is-inview");
    });

    /* swiperスライダー */
    const swiper = new Swiper(".swiper", {
        // オプションパラメータ
        loop: true,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
            delay: 5000,
        },
        speed: 1500,
        allowTouchMove: false,
        disableOnInteraction: false,
    });

    /* swiper1スライダー */
    const swiper1 = new Swiper(".swiper1", {
        // オプションパラメータ
        loop: true,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
            delay: 5000,
        },
        speed: 1500,
        allowTouchMove: false,
        disableOnInteraction: false,
    });

    /* swiper2スライダー */
    const swiper2 = new Swiper(".swiper2", {
        // オプションパラメータ
        speed: 800,
        centeredSlides: true,
        slidesPerView: 1,
        allowTouchMove: true,
        grabCursor: true,
        loop: true,
        autoplay: {
            delay: 8000,
        },
        // ナビボタンが必要なら追加
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        // ページネーションが必要なら追加
        pagination: {
            el: ".swiper-pagination",
        },
    });

    /* swiper3スライダー */
    const swiper3 = new Swiper(".swiper3", {
        // オプションパラメータ
        loop: true,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
            delay: 5000,
        },
        speed: 1500,
        allowTouchMove: false,
        disableOnInteraction: false,
    });

    /* swiper4スライダー */
    const swiper4 = new Swiper(".swiper4", {
        // オプションパラメータ
        speed: 800,
        centeredSlides: true,
        slidesPerView: 1,
        allowTouchMove: true,
        grabCursor: true,
        loop: true,
        autoplay: {
            delay: 8000,
        },
        // ナビボタンが必要なら追加
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        // ページネーションが必要なら追加
        pagination: {
            el: ".swiper-pagination",
        },

        // breakpoints: {
        //     // スライドの表示枚数：1025px以上の場合
        //     1025: {
        //         slidesPerView: 3,
        //     },
        // },
    });

    /* アコーディオンメニュー */
    $(".lang-button").on("click", function () {
        $(".lang-select").toggle(300);
        $(".fa-angle-down , .fa-angle-up").toggle();
    });

    /* ナビゲーションオープン・クローズ */
    $(".head-nav").on("mouseover", function () {
        $(".head-nav").addClass("slide");
    });

    $(".nav-button").on("click", function () {
        $(".head-nav").addClass("slide");
    });

    $(".head-nav").on("mouseout", function () {
        $(".head-nav").removeClass("slide");
    });

    $(window).on("scroll", function () {
        $(".head-nav").removeClass("slide");
    });

    // ナビのリンクを押したらクローズする
    $(".head-nav a").on("click", function () {
        $(".head-nav").removeClass("slide");
    });

    /* スクロールギミック */
    const pagetop = $(".page-top");
    const tel = $(".tel-sticky");
    // window(node)がスクロールされた時に実行
    $(window).on("scroll", function () {
        /* ページトップボタン */
        // ページトップからのスクロール量が1000pxを超えたらボタンを表示（非表示）
        if ($(this).scrollTop() > 1000) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }

        /* tel-boxの移動 */
        // ページトップからのスクロール量が600pxを超えたらtel-boxを画面に追従させる
        if ($(this).scrollTop() > 600) {
            tel.css("transform", "translateY(330px)");
        } else {
            tel.css("transform", "translateY(0)");
        }
    });

    // /* メニュー切り替えフィルター */
    // var filters = $(".menu-tab [data-filter]");
    // var boxes = $(".menu [data-category]");

    // // ここからメニューきりかえ
    // filters.click(function (e) {
    //     e.preventDefault();

    //     filters.removeClass("active");
    //     $(this).addClass("active");

    //     var filterTime = $(this).attr("data-filter");

    //     boxes
    //         .css("display", "none")
    //         .promise()
    //         .done(function () {
    //             boxes
    //                 .filter('[data-category = "' + filterTime + '"]')
    //                 .css("display", "block");
    //         });
    // });
});
