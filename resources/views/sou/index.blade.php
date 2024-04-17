<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>しゃぶしゃぶレストラン-湊(SOU)-</title>

	<!-- オンライン公開しない -->
	<meta name="robots" content="noindex , nofollow">
	<meta name="description" content="しゃぶしゃぶレストラン-湊(SOU)-のホームページ">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset ('favicon_package_v0.16/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('favicon_package_v0.16/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('favicon_package_v0.16/favicon-16x16.png')}}">
	<link rel="manifest" href="{{ asset ('favicon_package_v0.16/site.webmanifest')}}">
	<link rel="mask-icon" href="{{ asset ('favicon_package_v0.16/safari-pinned-tab.svg')}}" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Vidaloka&display=swap">
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Roboto:wght@100&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<!-- Styles -->
	<link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
	<!-- スワイパーCSS読み込み -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.5/swiper-bundle.min.css">
	<link href="{{ asset ('css/style.css')}}" rel="stylesheet">

	@livewireStyles
</head>

<body>


	<div class="load">
		<div><img src="{{ asset ('img/sou_material/load_icon.png')}}" alt="読み込み中"></div>
	</div>

	<header>
		<img src="{{ asset ('img/sou_material/header_left1.png')}}" alt="ヘッダー装飾">
		<img src="{{ asset ('img/sou_material/header.png')}}" alt="ヘッダー画像">
		<img src="{{ asset ('img/sou_material/header_right1.png')}}" alt="ヘッダー装飾">

		<nav class="head-nav">
			<div class="nav-button">{{ __('lang.nav') }}</div>
			<ul>
				<li class="nav-item"><a href="#concept">
						<p>{{ __('lang.concept') }}</p>
					</a></li>
				<li class="nav-item"><a href="#menu">
						<p>{{ __('lang.menu') }}</p>
					</a></li>
				<li class="nav-item"><a href="#store">
						<p>{{ __('lang.store') }}</p>
					</a></li>
				<li class="nav-item"><a href="#access">
						<p>{{ __('lang.access') }}</p>
					</a></li>
				<!-- <li class="nav-item"><a href="#contact">
						<p>{{ __('lang.contact') }}</p>
					</a></li> -->
				<li class="nav-item"><a href="tel:011-211-6300">
						<p>{{ __('lang.reservation') }}</p>
					</a></li>
				<li class="nav-item sp-">
					<div class="language">
						<button class="lang-button"><i class="fa-sharp fa-solid fa-language" style="color: #fff;"></i><span style="color: #fff; padding:0 5px">language</span><i class="fa-solid fa-angle-down" style="color: #fff;"></i><i class="fa-solid fa-angle-up hide" style="color: #fff;"></i></button>
						<ul class="lang-select hide">
							<li><a href="{{ route('language.switch', 'ja') }}">日本語</a></li>
							<li><a href="{{ route('language.switch', 'en') }}">English</a></li>
							<li><a href="{{ route('language.switch', 'ko') }}">한국어</a></li>
							<li><a href="{{ route('language.switch', 'zh-Hanz') }}">简体字</a></lie=>
							<li><a href="{{ route('language.switch', 'zh-Hant') }}">繁体字</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</nav>

	</header>

	<main>

		<div class="tel-sticky">
			<div class="tel-box">
				<div class="tel-border"></div>
				<div class="tel-border"></div>
				<div class="tel-border"></div>
				<div class="tel-border"></div>
				<div class="tel-number">
				<p>{!! __('lang.reservation_info') !!}</p>
					<!-- <p>{{ __('lang.reservation_info') }}</p> -->
					<p><a class="tel-link" href="tel:011-211-6300"><i class="fa-solid fa-phone" style="color: #000000;"></i>011-211-6300</a></p>
					<div class="language">
						<button class="lang-button"><i class="fa-sharp fa-solid fa-language" style="color: #000000;"></i><span>language</span><i class="fa-solid fa-angle-down" style="color: #000000;"></i><i class="fa-solid fa-angle-up hide"></i></button>
						<ul class="lang-select hide">
							<li><a href="{{ route('language.switch', 'ja') }}">日本語</a></li>
							<li><a href="{{ route('language.switch', 'en') }}">English</a></li>
							<li><a href="{{ route('language.switch', 'ko') }}">한국어</a></li>
							<li><a href="{{ route('language.switch', 'zh-Hanz') }}">简体字</a></lie=>
							<li><a href="{{ route('language.switch', 'zh-Hant') }}">繁体字</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- トップ -->
		<section class="top">

			<div class="key-visual">

				<div class="scroll-sign">
					<div></div>
				</div>

				<div class="key-catch-wrapper">
					<div class="key-catch">
						<h1><span>『和』</span>日本の文化を世界へ</h1>
					</div>
				</div>

				<!-- Slider main container -->
				<div class="swiper">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
							<div class="swiper-img"><img src="{{ asset ('img/sou_food/syabu_tabeho.webp')}}" width="5616" height="3744" alt="しゃぶしゃぶ食べ放題"></div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-img"><img src="{{ asset ('img/sou_food/zuwai_tabeho.webp')}}" width="5616" height="3744" alt="しゃぶしゃぶ＆ズワイガニ食べ放題"></div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-img"><img src="{{ asset ('img/sou_food/3kani_tabeho.webp')}}" width="5616" height="3744" alt="しゃぶしゃぶ＆3大ガニ食べ放題"></div>
						</div>
					</div>
				</div>
				<!-- Slider main container -->
				<div class="swiper1">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
							<div class="swiper-img"><img src="{{ asset ('img/sou_food/syabu_tabeho.webp')}}" width="5616" height="3744" alt="しゃぶしゃぶ食べ放題"></div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-img"><img src="{{ asset ('img/sou_food/zuwai_tabeho.webp')}}" width="5616" height="3744" alt="しゃぶしゃぶ＆ズワイガニ食べ放題"></div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-img"><img src="{{ asset ('img/sou_food/3kani_tabeho.webp')}}" width="5616" height="3744" alt="しゃぶしゃぶ＆3大ガニ食べ放題"></div>
						</div>
					</div>
				</div>
			</div>

		</section>


		<div class="noren">
		</div>

		<!-- コンセプト -->
		<section id="concept" class="concept wrapper">

			<div class="container">
				<h2 class=" section-title"><span>{{ __('lang.concept') }}</span></h2>

				<div class="key-catch-wrapper">
					@if (app()->getLocale() == 'en')
					<div class="key-catch en">
						<h1><span>{{ __('lang.wa') }}</span>{{ __('lang.catch') }}<span class="line"></span></h1>
					</div>
					@else
					<div class="key-catch">
						<h1><span>{{ __('lang.wa') }}</span>{{ __('lang.catch') }}<span class="line"></span></h1>
					</div>
					@endif
					<p class="sp">{{ __('lang.sentence1') }}<br>{{ __('lang.sentence2') }}</p>
				</div>

				<div class="f-2b">
					<div class="left-box inview"><img src="{{ asset ('img/store1.jpg')}}" width="1061" height="862" alt="店内1"></div>
					<div class="right-box">
						<p>{{ __('lang.sentence1') }}<br>{{ __('lang.sentence2') }}</p>
					</div>
					<div class="float-box inview"><img src="{{ asset ('img/store2.jpg')}}" width="1063" height="861" alt="店内2"></div>
				</div>
			</div>

		</section>

		<!-- メニュー -->
		<section id="menu" class="menu wrapper">

			<div class="container">
				<h2 class=" section-title "><span>{{ __('lang.menu') }}</span></h2>
				<h3 class="course-title">{{ __('lang.dinner') }}</h3>

				<!-- ディナー -->
				<div class="menu-box dinner">

					<!-- Slider main container -->
					<div class="swiper2">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide">
								<p>{{__('lang.sentence3')}}
									@if (app()->getLocale() !== 'en')
									<br class="sp">
									@endif
									{{__('lang.sentence4')}}
								</p>
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/syabu_tabeho.webp')}}" width="5616" height="3744" alt="しゃぶしゃぶ食べ放題">
										<p><span></span>{{__('lang.sentence5')}}</p>
										<p>{{__('lang.sentence6')}}</p>
										@if (app()->getLocale() !== 'en')
										<p class="sp" style="font-size:2rem">　</p>
										@endif
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<p>{{__('lang.sentence8')}}
									@if (app()->getLocale() !== 'en')
									<br class="sp">
									@endif {{__('lang.sentence9')}}
								</p>
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/zuwai_tabeho.webp')}}" width="5616" height="3744" alt="しゃぶしゃぶ＆ズワイガニ食べ放題">
										<p><span></span>{{__('lang.sentence10')}}
											@if (app()->getLocale() !== 'en')
											<br class="sp">
											@endif
											{{__('lang.sentence11')}}
										</p>
										<p>{{__('lang.sentence12')}}</p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<p>{{__('lang.sentence14')}}
									@if (app()->getLocale() !== 'en')
									<br class="sp">
									@endif
									{{__('lang.sentence15')}}
								</p>
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/3kani_tabeho.webp')}}" width="5616" height="3744" alt="しゃぶしゃぶ＆3大ガニ食べ放題">
										<p><span></span>{{__('lang.sentence16')}}
											@if (app()->getLocale() !== 'en')
											<br class="sp">
											@endif
											{{__('lang.sentence17')}}
										</p>
										<p>{{__('lang.sentence18')}}</p>
									</div>
								</div>
							</div>

						</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>

						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>

						<!-- If we need scrollbar -->
						<!-- <div class="swiper-scrollbar"></div> -->
					</div>

					<p class="image-attention">※写真はイメージです</p>

				</div>

				<!-- ランチ -->

				<div class="menu-box lunch">
					<h3 class="course-title">{{ __('lang.lunch') }}</h3>
					<p>{{__('lang.sentence20')}}<br class="sp">{{__('lang.sentence21')}}</p>

					<!-- Slider main container -->
					<div class="swiper4 swiper-sp">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide">
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/tonkatsu.webp')}}" width="5616" height="3744" alt="手仕込みとんかつ御前">
										<p><span></span>{{__('lang.sentence22')}}</p>
										<p>{{__('lang.sentence23')}}</p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/teriyaki.webp')}}" width="5616" height="3744" alt="豚照り焼き御前">
										<p><span></span>{{__('lang.sentence25')}}</p>
										<p>{{__('lang.sentence26')}}</p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/karaage.webp')}}" width="5616" height="3744" alt="SOU特製鶏唐揚げ御前">
										<p><span></span>{{__('lang.sentence27')}}</p>
										<p>{{__('lang.sentence28')}}</p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/nanban.webp')}}" width="5616" height="3744" alt="チキン南蛮定食">
										<p><span></span>{{__('lang.sentence30')}}</p>
										<p>{{__('lang.sentence31')}}</p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/hokke.webp')}}" width="5616" height="3744" alt="ホッケ焼き御前">
										<p><span></span>{{__('lang.sentence33')}}</p>
										<p>{{__('lang.sentence34')}}</p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/tenpura.webp')}}" width="5616" height="3744" alt="天ぷら御膳">
										<p><span></span>{{__('lang.sentence35')}}</p>
										<p>{{__('lang.sentence36')}}</p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/syojin.webp')}}" width="5616" height="3744" alt="精進料理">
										<p><span></span>{{__('lang.sentence38')}}</p>
										<p>{{__('lang.sentence39')}}</p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/syabu.webp')}}" width="5616" height="3744" alt="和牛しゃぶしゃぶ御前">
										<p><span></span>{{__('lang.sentence41')}}</p>
										<p>{{__('lang.sentence42')}}</p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/mizutaki.webp')}}" width="5616" height="3744" alt="博多水炊き御前">
										<p><span></span>{{__('lang.sentence44')}}</p>
										<p>{{__('lang.sentence45')}}</p>
									</div>
								</div>
							</div>

						</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>

						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>

						<!-- If we need scrollbar -->
						<!-- <div class="swiper-scrollbar"></div> -->
					</div>


					<!-- 代替案 slide3つずつ -->

					<!-- Slider main container -->
					<div class="swiper4 swiper-3page">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->

							<div class="swiper-slide">
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/tonkatsu.webp')}}" width="5616" height="3744" alt="手仕込みとんかつ御前">
										<p><span></span>{{__('lang.sentence22')}}</p>
										<p>{{__('lang.sentence23')}}</p>
									</div>
								</div>

								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/teriyaki.webp')}}" width="5616" height="3744" alt="豚照り焼き御前">
										<p><span></span>{{__('lang.sentence25')}}</p>
										<p>{{__('lang.sentence26')}}</p>
									</div>
								</div>

								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/karaage.webp')}}" width="5616" height="3744" alt="SOU特製鶏唐揚げ御前">
										<p><span></span>{{__('lang.sentence27')}}</p>
										<p>{{__('lang.sentence28')}}</p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/nanban.webp')}}" width="5616" height="3744" alt="チキン南蛮定食">
										<p><span></span>{{__('lang.sentence30')}}</p>
										<p>{{__('lang.sentence31')}}</p>
									</div>
								</div>

								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/hokke.webp')}}" width="5616" height="3744" alt="ホッケ焼き御前">
										<p><span></span>{{__('lang.sentence33')}}</p>
										<p>{{__('lang.sentence34')}}</p>
									</div>
								</div>

								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/tenpura.webp')}}" width="5616" height="3744" alt="天ぷら御膳">
										<p><span></span>{{__('lang.sentence35')}}</p>
										<p>{{__('lang.sentence36')}}</p>
									</div>
								</div>
							</div>

							<div class="swiper-slide">
								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/syojin.webp')}}" width="5616" height="3744" alt="精進料理">
										<p><span></span>{{__('lang.sentence38')}}</p>
										<p>{{__('lang.sentence39')}}</p>
									</div>
								</div>

								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/syabu.webp')}}" width="5616" height="3744" alt="和牛しゃぶしゃぶ御前">
										<p><span></span>{{__('lang.sentence41')}}</p>
										<p>{{__('lang.sentence42')}}</p>
									</div>
								</div>

								<div class="swiper-div">
									<div class="article">
										<img src="{{ asset ('img/sou_food/mizutaki.webp')}}" width="5616" height="3744" alt="博多水炊き御前">
										<p><span></span>{{__('lang.sentence44')}}</p>
										<p>{{__('lang.sentence45')}}</p>
									</div>
								</div>
							</div>

						</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>

						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>

						<!-- If we need scrollbar -->
						<!-- <div class="swiper-scrollbar"></div> -->
					</div>
					<p class="image-attention">※写真はイメージです</p>

				</div>


			</div>

		</section>

		<section id="store" class="store">

			<div class="container">
				<h2 class=" section-title "><span>{{ __('lang.store') }}</span></h2>

				<div class="store-article">
					<table>
						<tr>
							<th>{{__('lang.sentence46')}}</th>
							<td>
								<p>{{__('lang.sentence47')}}</p>
							</td>
						</tr>
						<tr>
							<th>{{__('lang.sentence48')}}</th>
							<td>
								<p>TEL.<a class="tel-link" href="tel:011-211-6300">011-211-6300</a></p>
								<p>FAX.011-351-1739</p>
							</td>
						</tr>
						<!-- <tr>
							<th>{{__('lang.sentence49')}}</th>
							<td>
								<p>{{__('lang.sentence50')}}<small>（Lo 14:30）</small></p>
								<p>{{__('lang.sentence51')}}<small>（Lo 21:30）</small></p>
							</td>
						</tr> 依頼により削除-->
						<tr>
							<th>{{__('lang.sentence52')}}</th>
							<td>
								<p>{{__('lang.sentence53')}}</p>
							</td>
						</tr>

					</table>
				</div>
			</div>

			<div class="sticky-background">
				<!-- Slider main container -->
				<div class="swiper3">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
							<div class="swiper-img"><img src="{{ asset ('img/store1.jpg')}}" width="1061" height="862" alt="店内1"></div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-img"><img src="{{ asset ('img/store2.jpg')}}" width="1063" height="861" alt="店内2"></div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-img"><img src="{{ asset ('img/store3.jpg')}}" width="1061" height="521" alt="店内3"></div>
						</div>
						<div class="swiper-slide">
							<div class="swiper-img"><img src="{{ asset ('img/store4.jpg')}}" width="1052" height="523" alt="店内4"></div>
						</div>
					</div>
				</div>

			</div>


		</section>


		<section id="access" class="access wrapper">

			<div class="container">
				<h2 class=" section-title "><span>{{ __('lang.access') }}</span></h2>
				<div class="f-2b">
					<div class="left-box">
						<div>
							<p>〒813-0017<br>{{__('lang.sentence54')}}<br>{{__('lang.sentence55')}}</p>
							<p>{{__('lang.sentence56')}}<br>{{__('lang.sentence57')}}</p>
						</div>
					</div>
					<div class="right-box"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6641.439861599784!2d130.41262989410788!3d33.66441809322169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35418faf66d6a537%3A0x402992a9a69e4dc6!2zaXNsYW5kIGV5Ze-9nOOCouOCpOODqeODs-ODiSDjgqLjgqQ!5e0!3m2!1sja!2sjp!4v1703936640796!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
				</div>
			</div>

		</section>

		<section id="contact" class="contact wrapper">
		</section>

		<!-- <section id="contact" class="contact wrapper">

			<div class="container">
				<h2 class=" section-title "><span>{{ __('lang.contact') }}</span></h2>
				<p>{{__('lang.sentence58')}}<br>
					{{__('lang.sentence59')}}<br>
					{{__('lang.sentence60')}}
				</p>

				livewire('form')　先頭に@を追加でお問い合わせフォーム復活

			</div>

		</section> -->

		<div class="top-btn-wrapper"><button type="button" class="page-top hide" aria-label="ページトップへスクロールします"><a href="#"><img src="{{ asset ('img/sou_material/top.png')}}" alt="トップへ戻る"></a></button></div>

	</main>

	<footer class="wrapper">

		<div class="foot-flex container">
			<div class="foot-logo"><a href="#"><img src="{{ asset ('img/sou_material/sou_logo.png')}}" alt="ロゴ"></a></div>
			<nav class="foot-nav">
				<ul>
					<li class="nav-item">
						<p><a href="#concept">{{ __('lang.concept') }}</a></p>
					</li>
					<li class="nav-item">
						<p><a href="#menu">{{ __('lang.menu') }}</a></p>
					</li>
					<li class="nav-item">
						<p><a href="#store">{{ __('lang.store') }}</a></p>
					</li>
					<li class="nav-item">
						<p><a href="#access">{{ __('lang.access') }}</a></p>
					</li>
					<!-- <li class="nav-item">
						<p><a href="#contact">{{ __('lang.contact') }}</a></p>
					</li> -->
				</ul>
			</nav>
			<div class="foot-logo"><a target="_blank" href="https://zareru.japanexperience.jp"><img src="{{ asset ('img/sou_material/zareru_logo.png')}}" alt="戯ロゴ"></a></div>
		</div>

		<small>&copy;2024 SOU</small>
	</footer>

	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.1.5/swiper-bundle.min.js"></script>
	<script src="js/jquery.inview.min.js"></script>
	<script script src="js/script.js"></script>

	@livewireScripts
</body>

</html>
