<!doctype html>
<html lang="en" dir="ltr">

<?php $title='Index-3' ?>

<?php include './partials/head.php' ?>

<body class="geex-dashboard">
    
<?php include './partials/header.php'?>

<main class="geex-main-content">
		
<?php include './partials/sidebar.php'?>		

<?php include './partials/customizer.php'?>

		<div class="geex-content">
			<div class="geex-content__header">
				<div class="geex-content__header__content">
					<h2 class="geex-content__header__title">Crypto</h2>
					<p class="geex-content__header__subtitle">Welcome to Geex Modern Admin Dashboard</p>
				</div>
				
<div class="geex-content__header__action">
    <div class="geex-content__header__customizer">
        <button class="geex-btn geex-btn__toggle-sidebar">   
            <i class="uil uil-align-center-alt"></i> 
        </button>
        <button class="geex-btn geex-btn__customizer"> 
            <i class="uil uil-pen"></i> 
            <span>Customizer</span>  
        </button>
    </div> 
    <div class="geex-content__header__action__wrap">
        <ul class="geex-content__header__quickaction">
            <li class="geex-content__header__quickaction__item">
                <a href="#" class="geex-content__header__quickaction__link">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18C11.7767 18.0022 13.5025 17.407 14.9 16.31L19.29 20.71C19.383 20.8037 19.4936 20.8781 19.6154 20.9289C19.7373 20.9797 19.868 21.0058 20 21.0058C20.132 21.0058 20.2627 20.9797 20.3846 20.9289C20.5064 20.8781 20.617 20.8037 20.71 20.71C20.8037 20.617 20.8781 20.5064 20.9289 20.3846C20.9797 20.2627 21.0058 20.132 21.0058 20C21.0058 19.868 20.9797 19.7373 20.9289 19.6154C20.8781 19.4936 20.8037 19.383 20.71 19.29L16.31 14.9C17.407 13.5025 18.0022 11.7767 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10ZM10 4C11.1867 4 12.3467 4.35189 13.3334 5.01118C14.3201 5.67047 15.0891 6.60754 15.5433 7.7039C15.9974 8.80026 16.1162 10.0067 15.8847 11.1705C15.6532 12.3344 15.0818 13.4035 14.2426 14.2426C13.4035 15.0818 12.3344 15.6532 11.1705 15.8847C10.0067 16.1162 8.80026 15.9974 7.7039 15.5433C6.60754 15.0891 5.67047 14.3201 5.01118 13.3334C4.35189 12.3467 4 11.1867 4 10C4 8.4087 4.63214 6.88258 5.75736 5.75736C6.88258 4.63214 8.4087 4 10 4Z" fill="#464255"/>
                    </svg>                                              
                </a>
                <div class="geex-content__header__searchform geex-content__header__popup">
                    <input type="text" placeholder="Search" class="geex-content__header__btn" />
                    <i class="uil uil-search"></i>
                </div> 
            </li>
            <li class="geex-content__header__quickaction__item">
                <a href="#" class="geex-content__header__quickaction__link">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 11.9998C12.5523 11.9998 13 11.552 13 10.9998C13 10.4475 12.5523 9.99976 12 9.99976C11.4477 9.99976 11 10.4475 11 10.9998C11 11.552 11.4477 11.9998 12 11.9998Z" fill="#464255"/>
                        <path d="M8 11.9998C8.55229 11.9998 9 11.552 9 10.9998C9 10.4475 8.55229 9.99976 8 9.99976C7.44772 9.99976 7 10.4475 7 10.9998C7 11.552 7.44772 11.9998 8 11.9998Z" fill="#464255"/>
                        <path d="M16 11.9998C16.5523 11.9998 17 11.552 17 10.9998C17 10.4475 16.5523 9.99976 16 9.99976C15.4477 9.99976 15 10.4475 15 10.9998C15 11.552 15.4477 11.9998 16 11.9998Z" fill="#464255"/>
                        <path d="M3.05007 21.87C3.25937 21.9564 3.48366 22.0005 3.71007 22C3.93336 22.0011 4.15461 21.9574 4.36072 21.8716C4.56684 21.7857 4.75364 21.6593 4.91007 21.5L7.41007 19H17.0001C18.3262 19 19.5979 18.4732 20.5356 17.5355C21.4733 16.5979 22.0001 15.3261 22.0001 14V8C22.0001 6.67392 21.4733 5.40215 20.5356 4.46447C19.5979 3.52678 18.3262 3 17.0001 3H7.00007C5.67399 3 4.40222 3.52678 3.46454 4.46447C2.52686 5.40215 2.00007 6.67392 2.00007 8V20.29C1.9969 20.6282 2.09528 20.9596 2.28247 21.2412C2.46966 21.5229 2.73705 21.7419 3.05007 21.87V21.87ZM4.00007 8C4.00007 7.20435 4.31614 6.44129 4.87875 5.87868C5.44136 5.31607 6.20442 5 7.00007 5H17.0001C17.7957 5 18.5588 5.31607 19.1214 5.87868C19.684 6.44129 20.0001 7.20435 20.0001 8V14C20.0001 14.7957 19.684 15.5587 19.1214 16.1213C18.5588 16.6839 17.7957 17 17.0001 17H7.00007C6.86847 16.9992 6.738 17.0245 6.61617 17.0742C6.49433 17.124 6.38351 17.1973 6.29007 17.29L4.00007 19.59V8Z" fill="#464255"/>
                    </svg>                                             
                    <span class="geex-content__header__badge">84</span>
                </a>
                <div class="geex-content__header__popup geex-content__header__popup--message">
                    <h3 class="geex-content__header__popup__title">
                        Messages<span class="content__header__popup__title__count">7</span>
                    </h3>
                    <div class="geex-content__header__popup__content">
                        <ul class="geex-content__header__popup__items">
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            Mahabub Alam
                                            <span class="geex-content__header__popup__item__time">1.2 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count">3</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            David Warner
                                            <span class="geex-content__header__popup__item__time">1.7 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count">3</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            Mitchel Marsh
                                            <span class="geex-content__header__popup__item__time">2.2 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count">3</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            Mike Hesson
                                            <span class="geex-content__header__popup__item__time">2.6 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count">3</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="geex-content__header__quickaction__item">
                <a href="#" class="geex-content__header__quickaction__link">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 20H10C10 20.5304 10.2107 21.0391 10.5858 21.4142C10.9609 21.7893 11.4696 22 12 22C12.5304 22 13.0391 21.7893 13.4142 21.4142C13.7893 21.0391 14 20.5304 14 20H20C20.2652 20 20.5196 19.8946 20.7071 19.7071C20.8946 19.5196 21 19.2652 21 19C21 18.7348 20.8946 18.4804 20.7071 18.2929C20.5196 18.1054 20.2652 18 20 18V11C20 8.87827 19.1571 6.84344 17.6569 5.34315C16.1566 3.84285 14.1217 3 12 3C9.87827 3 7.84344 3.84285 6.34315 5.34315C4.84285 6.84344 4 8.87827 4 11V18C3.73478 18 3.48043 18.1054 3.29289 18.2929C3.10536 18.4804 3 18.7348 3 19C3 19.2652 3.10536 19.5196 3.29289 19.7071C3.48043 19.8946 3.73478 20 4 20V20ZM6 11C6 9.4087 6.63214 7.88258 7.75736 6.75736C8.88258 5.63214 10.4087 5 12 5C13.5913 5 15.1174 5.63214 16.2426 6.75736C17.3679 7.88258 18 9.4087 18 11V18H6V11Z" fill="#464255"/>
                    </svg>                                            
                    <span class="geex-content__header__badge bg-info">2</span>
                </a>
                <div class="geex-content__header__popup geex-content__header__popup--notification">
                    <h3 class="geex-content__header__popup__title">
                        Notification<span class="content__header__popup__title__count">5</span>
                    </h3>
                    <div class="geex-content__header__popup__content">
                        <ul class="geex-content__header__popup__items">
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            Mahabub Alam
                                            <span class="geex-content__header__popup__item__time">1.3 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            Adam Smith
                                            <span class="geex-content__header__popup__item__time">1.7 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            John Doe
                                            <span class="geex-content__header__popup__item__time">2.1 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <div class="geex-content__header__popup__item__img">
                                        <img src="assets/img/avatar/user.svg" alt="Popup Img" class="" />
                                    </div>
                                    <div class="geex-content__header__popup__item__content">
                                        <h5 class="geex-content__header__popup__item__title">
                                            Bruce Wayne
                                            <span class="geex-content__header__popup__item__time">2.4 hrs ago</span>
                                        </h5>
                                        <div class="geex-content__header__popup__item__desc">
                                            Lorem ipsum dolor amet cosec...
                                            <span class="geex-content__header__popup__item__count"></span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="geex-content__header__quickaction__item">
                <a href="#" class="geex-content__header__quickaction__link">
                    <img class="user-img" src="assets/img/avatar/user.svg" alt="user" />
                </a>
                <div class="geex-content__header__popup geex-content__header__popup--author">
                    <div class="geex-content__header__popup__header">
                        <div class="geex-content__header__popup__header__img">
                            <img src="assets/img/avatar/user.svg" alt="user" />
                        </div>
                        <div class="geex-content__header__popup__header__content">
                            <h3 class="geex-content__header__popup__header__title">Mahabub Alam</h3>
                            <span class="geex-content__header__popup__header__subtitle">CEO, PixcelsThemes</span>
                        </div>
                    </div>
                    <div class="geex-content__header__popup__content">
                        <ul class="geex-content__header__popup__items">
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-cog"></i>
                                    Settings
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-dollar-alt"></i>
                                    Billing
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-users-alt"></i>
                                    Activity
                                </a>
                            </li>
                            <li class="geex-content__header__popup__item">
                                <a class="geex-content__header__popup__link" href="#">
                                    <i class="uil uil-bell"></i>
                                    Help
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="geex-content__header__popup__footer">
                        <a href="#" class="geex-content__header__popup__footer__link">
                            <i class="uil uil-arrow-up-left"></i>Logout
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div> 
			</div>

			<div class="geex-content__wrapper">
				<div class="geex-content__section-wrapper">
					<div class="geex-content__feature geex-content__feature--two mb-40">
						<div class="geex-content__feature__swiper-btn">
							<div class="swiper-btn swiper-btn-prev">
								<i class="uil-arrow-left"></i>
							</div>
							<div class="swiper-btn swiper-btn-next">
								<i class="uil-arrow-right"></i>
							</div>
						</div>
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="geex-content__feature__card">
										<div class="geex-content__feature__card__top">
											<div class="geex-content__feature__card__top__img">
												<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
													<path d="M33.3335 19.7919C33.3321 18.0667 31.9335 16.6686 30.2087 16.6667H20.8335V22.9167H30.2087C31.9335 22.9153 33.3321 21.5167 33.3335 19.7919Z" fill="#FFAB2D"/>
													<path d="M20.8335 33.3333H30.2087C31.9344 33.3333 33.3335 31.9343 33.3335 30.2086C33.3335 28.4824 31.9344 27.0833 30.2087 27.0833H20.8335V33.3333Z" fill="#FFAB2D"/>
													<path d="M25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50C38.8071 50 50 38.8071 50 25C49.9842 11.1995 38.8005 0.0158038 25 0ZM37.5003 30.3569C37.4954 34.3003 34.3003 37.4954 30.3575 37.4997V39.2856C30.3575 40.2719 29.5575 41.0714 28.5717 41.0714C27.5853 41.0714 26.7858 40.2719 26.7858 39.2856V37.4997H23.2147V39.2856C23.2147 40.2719 22.4147 41.0714 21.4289 41.0714C20.4425 41.0714 19.6431 40.2719 19.6431 39.2856V37.4997H14.2861C13.2997 37.4997 12.5003 36.7003 12.5003 35.7144C12.5003 34.7281 13.2997 33.9286 14.2861 33.9286H16.0714V16.0714H14.2861C13.2997 16.0714 12.5003 15.2719 12.5003 14.2856C12.5003 13.2992 13.2997 12.4997 14.2861 12.4997H19.6431V10.7144C19.6431 9.72807 20.4425 8.92861 21.4289 8.92861C22.4153 8.92861 23.2147 9.72807 23.2147 10.7144V12.4997H26.7858V10.7144C26.7858 9.72807 27.5853 8.92861 28.5717 8.92861C29.558 8.92861 30.3575 9.72807 30.3575 10.7144V12.4997C34.2856 12.4834 37.4834 15.654 37.5003 19.582C37.509 21.6621 36.6071 23.642 35.0316 25C36.5924 26.3428 37.4932 28.2975 37.5003 30.3569Z" fill="#FFAB2D"/>
												</svg>
											</div>
											<div class="geex-content__feature__card__top__content">
												<h4 class="geex-content__feature__card__top__title">Bitcoin</h4>
												<p class="geex-content__feature__card__top__subtitle">BTC</p>
											</div>
										</div>
										<div class="geex-content__feature__card__text">
											<span class="geex-content__feature__card__price">$ 33.568,60</span>
											<span class="geex-content__feature__card__growth success-color">+12.4%</span>
										</div>
										<div class="geex-content__feature__card__img">
											<svg width="246" height="130" viewBox="0 0 246 130" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 196.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 147.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 98.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 49.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 0.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 245.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<path d="M205.823 78.211L246 0V124C246 127.314 243.314 130 240 130H5.99998C2.68628 130 -1.52588e-05 127.314 -1.52588e-05 124V89.5191C-1.52588e-05 88.2988 0.372086 87.1075 1.06664 86.1041L4.81189 80.6937C6.64693 78.0427 10.2489 77.3159 12.9683 79.0479L25.6354 87.1152C29.1279 89.3395 33.7704 87.4413 34.704 83.4073L44.5318 40.9427C45.6964 35.9108 52.2518 34.6039 55.2571 38.8045L62.5513 49L81.7182 78.823L93.2947 98.8715C95.515 102.717 100.998 102.902 103.472 99.2152L118.107 77.4128C120.612 73.6811 126.179 73.9268 128.346 77.8646L147.924 113.45C150.406 117.961 157.043 117.457 158.814 112.622L173.333 73.0052C175.117 68.1366 181.82 67.6709 184.261 72.246L190.464 83.8748C192.458 87.6143 197.596 88.1632 200.335 84.9295L205.064 79.3479C205.36 78.9991 205.614 78.6176 205.823 78.211Z" fill="#2ED6A3" fill-opacity="0.15"/>
												<path d="M248 1.5L207.833 82.1728C207.618 82.6047 207.351 83.009 207.04 83.377L202.336 88.9294C199.596 92.1631 194.458 91.6143 192.464 87.8748L186.261 76.246C183.821 71.6709 177.118 72.1366 175.333 77.0052L160.815 116.622C159.043 121.457 152.406 121.961 149.924 117.45L130.346 81.8646C128.18 77.9268 122.612 77.6811 120.107 81.4128L105.473 103.215C102.998 106.902 97.5153 106.717 95.295 102.871L83.7184 82.8229L64.5515 53L57.2573 42.8045C54.2521 38.6038 47.6966 39.9108 46.5321 44.9427L36.7043 87.4073C35.7706 91.4413 31.1282 93.3395 27.6357 91.1152L14.9686 83.0478C12.2492 81.3159 8.64717 82.0427 6.81213 84.6936L2.00021 91.6451" stroke="#00A389" stroke-width="4"/>
												<circle cx="246" cy="7" r="7" fill="#00A389"/>
											</svg>								
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="geex-content__feature__card">
										<div class="geex-content__feature__card__top">
											<div class="geex-content__feature__card__top__img">
												<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
													<path d="M25.7918 28.9028C25.2833 29.0721 24.7167 29.0721 24.2082 28.9028L18.75 27.0833L25 37.5L31.25 27.0833L25.7918 28.9028Z" fill="#00ADA3"/>
													<path d="M25 25L31.25 22.5001L25 12.5L18.75 22.5001L25 25Z" fill="#00ADA3"/>
													<path d="M25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50C38.8071 50 50 38.8071 50 25C49.9847 11.1995 38.8005 0.0152589 25 0ZM35.5259 24.0131L26.5973 41.8703C26.1564 42.7526 25.0834 43.1101 24.2016 42.6692C23.8556 42.4965 23.5755 42.2164 23.4027 41.8703L14.4741 24.0131C14.1967 23.4561 14.2283 22.7951 14.5575 22.267L23.4861 7.98147C24.0796 7.1455 25.2376 6.94823 26.0736 7.54169C26.2441 7.66267 26.3929 7.8109 26.5139 7.98147L35.442 22.267C35.7717 22.7951 35.8033 23.4561 35.5259 24.0131Z" fill="#00ADA3"/>
												</svg>
											</div>
											<div class="geex-content__feature__card__top__content">
												<h4 class="geex-content__feature__card__top__title">Ethereum</h4>
												<p class="geex-content__feature__card__top__subtitle">ETH</p>
											</div>
										</div>
										<div class="geex-content__feature__card__text">
											<span class="geex-content__feature__card__price">$ 1.367,82</span>
											<span class="geex-content__feature__card__growth danger-color">-0.2%</span>
										</div>
										<div class="geex-content__feature__card__img">
											<svg xmlns="http://www.w3.org/2000/svg" width="246" height="125" viewBox="0 0 246 125" fill="none">
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 196.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 147.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 98.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 49.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 0.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 245.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<path d="M227.549 69.8054H239C242.314 69.8054 245 72.4916 245 75.8054V89C245 92.3137 242.314 125 239 125H6C2.68629 125 0 92.3137 0 89V0L12.9115 37.4693C14.3301 41.5859 19.5233 42.8683 22.6125 39.8851L31.2491 31.8394C34.3785 28.896 39.4968 30.099 40.9872 34.1284L56.6889 76.5777C58.5058 81.48125 65.3028 81.8791 67.669 77.207L74.61251 63.3333L88.649 31.1907C90.7334 26.3894 97.5367 26.3727 99.6447 31.1637L107.799 49.6968C108.757 51.8746 110.912 53.2804 113.291 53.2804H125.043C127.676 53.2804 130.001 51.5644 130.777 49.0488L141.471 14.3739C143.069 9.19285 150.175 8.62051 152.581 13.479L172.771 54.2385C174.797 58.3283 180.466 58.7485 183.073 55.002L195.414 37.2649C197.925 33.6563 203.336 33.8839 205.535 37.6906L222.353 66.8065C223.425 68.6623 225.405 69.8054 227.549 69.8054Z" fill="#FF5B5B" fill-opacity="0.15"/>
												<path d="M247 70.438H229.539C227.401 70.438 225.425 69.3 224.351 67.451L207.528 38.4816C205.327 34.6906 199.936 34.4634 197.423 38.0556L185.063 55.7264C182.454 59.4564 176.805 59.0366 174.776 54.962L154.575 14.3125C152.163 9.55094 145.076 10.124 143.473 15.2926L132.781 49.7769C132.002 52.2882 129.679 54 127.05 54H115.283C112.908 54 110.756 52.5991 109.7125 50.4271L101.64 31.9889C99.5271 27.2121 92.7428 27.2289 90.6536 32.0161L76.61251 64L69.6625 77.8134C67.2913 82.4707 60.5132 82.0808 58.6918 77.1824L42.9869 34.948C41.4935 30.9318 36.3929 29.7304 33.2639 32.6579L24.6801 40.6891C21.5087 43.6564 16.333 42.3756 14.9114 38.2717L2 1" stroke="#FF5B5B" stroke-width="4"/>
												<circle cx="245" cy="70" r="7" fill="#FF5B5B"/>
											</svg>						
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="geex-content__feature__card">
										<div class="geex-content__feature__card__top">
											<div class="geex-content__feature__card__top__img">
												<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
													<path d="M25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50C38.8071 50 50 38.8071 50 25C49.9842 11.1995 38.8005 0.0158038 25 0ZM33.9286 37.5003H19.6431C18.6567 37.5003 17.8572 36.7008 17.8572 35.7144C17.8572 35.63 17.8632 35.5455 17.8752 35.4616L19.2191 26.0529L16.5046 26.7319C16.3629 26.7678 16.2174 26.7858 16.0714 26.7858C15.085 26.7847 14.2866 25.9847 14.2872 24.9984C14.2883 24.1798 14.8452 23.467 15.6392 23.2676L19.764 22.2365L21.4463 10.461C21.5858 9.48447 22.4905 8.80654 23.467 8.94605C24.4436 9.08556 25.1215 9.99019 24.982 10.9668L23.5052 21.3014L29.9243 19.6965C30.8796 19.4529 31.8512 20.03 32.0943 20.9853C32.3379 21.9406 31.7608 22.9123 30.8055 23.1559C30.8 23.1569 30.7946 23.1586 30.7891 23.1597L22.9591 25.1172L21.7008 33.9286H33.9286C34.915 33.9286 35.7144 34.7281 35.7144 35.7144C35.7144 36.7003 34.915 37.5003 33.9286 37.5003Z" fill="#374C98"/>
												</svg>
											</div>
											<div class="geex-content__feature__card__top__content">
												<h4 class="geex-content__feature__card__top__title">Litecoin</h4>
												<p class="geex-content__feature__card__top__subtitle">LTC</p>
											</div>
										</div>
										<div class="geex-content__feature__card__text">
											<span class="geex-content__feature__card__price">$ 132,71</span>
											<span class="geex-content__feature__card__growth success-color">+2.4%</span>
										</div>
										<div class="geex-content__feature__card__img">
											<svg xmlns="http://www.w3.org/2000/svg" width="246" height="125" viewBox="0 0 246 125" fill="none">
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 196.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 147.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 98.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 49.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 0.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 245.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<path d="M205.823 78.211L246 0V124C246 127.314 243.314 130 240 130H5.99998C2.68628 130 -1.52588e-05 127.314 -1.52588e-05 124V89.5191C-1.52588e-05 88.2988 0.372086 87.1075 1.06664 86.1041L4.81189 80.6937C6.64693 78.0427 10.2489 77.3159 12.9683 79.0479L25.6354 87.1152C29.1279 89.3395 33.7704 87.4413 34.704 83.4073L44.5318 40.9427C45.6964 35.9108 52.2518 34.6039 55.2571 38.8045L62.5513 49L81.7182 78.823L93.2947 98.8715C95.515 102.717 100.998 102.902 103.472 99.2152L118.107 77.4128C120.612 73.6811 126.179 73.9268 128.346 77.8646L147.924 113.45C150.406 117.961 157.043 117.457 158.814 112.622L173.333 73.0052C175.117 68.1366 181.82 67.6709 184.261 72.246L190.464 83.8748C192.458 87.6143 197.596 88.1632 200.335 84.9295L205.064 79.3479C205.36 78.9991 205.614 78.6176 205.823 78.211Z" fill="#2ED6A3" fill-opacity="0.15"/>
												<path d="M248 1.5L207.833 82.1728C207.618 82.6047 207.351 83.009 207.04 83.377L202.336 88.9294C199.596 92.1631 194.458 91.6143 192.464 87.8748L186.261 76.246C183.821 71.6709 177.118 72.1366 175.333 77.0052L160.815 116.622C159.043 121.457 152.406 121.961 149.924 117.45L130.346 81.8646C128.18 77.9268 122.612 77.6811 120.107 81.4128L105.473 103.215C102.998 106.902 97.5153 106.717 95.295 102.871L83.7184 82.8229L64.5515 53L57.2573 42.8045C54.2521 38.6038 47.6966 39.9108 46.5321 44.9427L36.7043 87.4073C35.7706 91.4413 31.1282 93.3395 27.6357 91.1152L14.9686 83.0478C12.2492 81.3159 8.64717 82.0427 6.81213 84.6936L2.00021 91.6451" stroke="#00A389" stroke-width="4"/>
												<circle cx="246" cy="7" r="7" fill="#00A389"/>
											</svg>								
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="geex-content__feature__card">
										<div class="geex-content__feature__card__top">
											<div class="geex-content__feature__card__top__img">
												<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
													<path d="M25.7918 28.9028C25.2833 29.0721 24.7167 29.0721 24.2082 28.9028L18.75 27.0833L25 37.5L31.25 27.0833L25.7918 28.9028Z" fill="#00ADA3"/>
													<path d="M25 25L31.25 22.5001L25 12.5L18.75 22.5001L25 25Z" fill="#00ADA3"/>
													<path d="M25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50C38.8071 50 50 38.8071 50 25C49.9847 11.1995 38.8005 0.0152589 25 0ZM35.5259 24.0131L26.5973 41.8703C26.1564 42.7526 25.0834 43.1101 24.2016 42.6692C23.8556 42.4965 23.5755 42.2164 23.4027 41.8703L14.4741 24.0131C14.1967 23.4561 14.2283 22.7951 14.5575 22.267L23.4861 7.98147C24.0796 7.1455 25.2376 6.94823 26.0736 7.54169C26.2441 7.66267 26.3929 7.8109 26.5139 7.98147L35.442 22.267C35.7717 22.7951 35.8033 23.4561 35.5259 24.0131Z" fill="#00ADA3"/>
												</svg>
											</div>
											<div class="geex-content__feature__card__top__content">
												<h4 class="geex-content__feature__card__top__title">Ethereum</h4>
												<p class="geex-content__feature__card__top__subtitle">ETH</p>
											</div>
										</div>
										<div class="geex-content__feature__card__text">
											<span class="geex-content__feature__card__price">$ 1.367,82</span>
											<span class="geex-content__feature__card__growth danger-color">-0.2%</span>
										</div>
										<div class="geex-content__feature__card__img">
											<svg xmlns="http://www.w3.org/2000/svg" width="246" height="125" viewBox="0 0 246 125" fill="none">
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 196.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 147.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 98.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 49.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 0.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 245.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<path d="M227.549 69.8054H239C242.314 69.8054 245 72.4916 245 75.8054V89C245 92.3137 242.314 125 239 125H6C2.68629 125 0 92.3137 0 89V0L12.9115 37.4693C14.3301 41.5859 19.5233 42.8683 22.6125 39.8851L31.2491 31.8394C34.3785 28.896 39.4968 30.099 40.9872 34.1284L56.6889 76.5777C58.5058 81.48125 65.3028 81.8791 67.669 77.207L74.61251 63.3333L88.649 31.1907C90.7334 26.3894 97.5367 26.3727 99.6447 31.1637L107.799 49.6968C108.757 51.8746 110.912 53.2804 113.291 53.2804H125.043C127.676 53.2804 130.001 51.5644 130.777 49.0488L141.471 14.3739C143.069 9.19285 150.175 8.62051 152.581 13.479L172.771 54.2385C174.797 58.3283 180.466 58.7485 183.073 55.002L195.414 37.2649C197.925 33.6563 203.336 33.8839 205.535 37.6906L222.353 66.8065C223.425 68.6623 225.405 69.8054 227.549 69.8054Z" fill="#FF5B5B" fill-opacity="0.15"/>
												<path d="M247 70.438H229.539C227.401 70.438 225.425 69.3 224.351 67.451L207.528 38.4816C205.327 34.6906 199.936 34.4634 197.423 38.0556L185.063 55.7264C182.454 59.4564 176.805 59.0366 174.776 54.962L154.575 14.3125C152.163 9.55094 145.076 10.124 143.473 15.2926L132.781 49.7769C132.002 52.2882 129.679 54 127.05 54H115.283C112.908 54 110.756 52.5991 109.7125 50.4271L101.64 31.9889C99.5271 27.2121 92.7428 27.2289 90.6536 32.0161L76.61251 64L69.6625 77.8134C67.2913 82.4707 60.5132 82.0808 58.6918 77.1824L42.9869 34.948C41.4935 30.9318 36.3929 29.7304 33.2639 32.6579L24.6801 40.6891C21.5087 43.6564 16.333 42.3756 14.9114 38.2717L2 1" stroke="#FF5B5B" stroke-width="4"/>
												<circle cx="245" cy="70" r="7" fill="#FF5B5B"/>
											</svg>						
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="geex-content__feature__card">
										<div class="geex-content__feature__card__top">
											<div class="geex-content__feature__card__top__img">
												<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
													<path d="M25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50C38.8071 50 50 38.8071 50 25C49.9842 11.1995 38.8005 0.0158038 25 0ZM33.9286 37.5003H19.6431C18.6567 37.5003 17.8572 36.7008 17.8572 35.7144C17.8572 35.63 17.8632 35.5455 17.8752 35.4616L19.2191 26.0529L16.5046 26.7319C16.3629 26.7678 16.2174 26.7858 16.0714 26.7858C15.085 26.7847 14.2866 25.9847 14.2872 24.9984C14.2883 24.1798 14.8452 23.467 15.6392 23.2676L19.764 22.2365L21.4463 10.461C21.5858 9.48447 22.4905 8.80654 23.467 8.94605C24.4436 9.08556 25.1215 9.99019 24.982 10.9668L23.5052 21.3014L29.9243 19.6965C30.8796 19.4529 31.8512 20.03 32.0943 20.9853C32.3379 21.9406 31.7608 22.9123 30.8055 23.1559C30.8 23.1569 30.7946 23.1586 30.7891 23.1597L22.9591 25.1172L21.7008 33.9286H33.9286C34.915 33.9286 35.7144 34.7281 35.7144 35.7144C35.7144 36.7003 34.915 37.5003 33.9286 37.5003Z" fill="#374C98"/>
												</svg>
											</div>
											<div class="geex-content__feature__card__top__content">
												<h4 class="geex-content__feature__card__top__title">Litecoin</h4>
												<p class="geex-content__feature__card__top__subtitle">LTC</p>
											</div>
										</div>
										<div class="geex-content__feature__card__text">
											<span class="geex-content__feature__card__price">$ 132,71</span>
											<span class="geex-content__feature__card__growth success-color">+2.4%</span>
										</div>
										<div class="geex-content__feature__card__img">
											<svg xmlns="http://www.w3.org/2000/svg" width="246" height="125" viewBox="0 0 246 125" fill="none">
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 196.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 147.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 98.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 49.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 0.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<rect x="-0.25" y="0.25" width="0.5" height="124.5" transform="matrix(-1 0 0 1 245.5 0)" stroke="#ECEAF3" stroke-width="0.5"/>
												<path d="M205.823 78.211L246 0V124C246 127.314 243.314 130 240 130H5.99998C2.68628 130 -1.52588e-05 127.314 -1.52588e-05 124V89.5191C-1.52588e-05 88.2988 0.372086 87.1075 1.06664 86.1041L4.81189 80.6937C6.64693 78.0427 10.2489 77.3159 12.9683 79.0479L25.6354 87.1152C29.1279 89.3395 33.7704 87.4413 34.704 83.4073L44.5318 40.9427C45.6964 35.9108 52.2518 34.6039 55.2571 38.8045L62.5513 49L81.7182 78.823L93.2947 98.8715C95.515 102.717 100.998 102.902 103.472 99.2152L118.107 77.4128C120.612 73.6811 126.179 73.9268 128.346 77.8646L147.924 113.45C150.406 117.961 157.043 117.457 158.814 112.622L173.333 73.0052C175.117 68.1366 181.82 67.6709 184.261 72.246L190.464 83.8748C192.458 87.6143 197.596 88.1632 200.335 84.9295L205.064 79.3479C205.36 78.9991 205.614 78.6176 205.823 78.211Z" fill="#2ED6A3" fill-opacity="0.15"/>
												<path d="M248 1.5L207.833 82.1728C207.618 82.6047 207.351 83.009 207.04 83.377L202.336 88.9294C199.596 92.1631 194.458 91.6143 192.464 87.8748L186.261 76.246C183.821 71.6709 177.118 72.1366 175.333 77.0052L160.815 116.622C159.043 121.457 152.406 121.961 149.924 117.45L130.346 81.8646C128.18 77.9268 122.612 77.6811 120.107 81.4128L105.473 103.215C102.998 106.902 97.5153 106.717 95.295 102.871L83.7184 82.8229L64.5515 53L57.2573 42.8045C54.2521 38.6038 47.6966 39.9108 46.5321 44.9427L36.7043 87.4073C35.7706 91.4413 31.1282 93.3395 27.6357 91.1152L14.9686 83.0478C12.2492 81.3159 8.64717 82.0427 6.81213 84.6936L2.00021 91.6451" stroke="#00A389" stroke-width="4"/>
												<circle cx="246" cy="7" r="7" fill="#00A389"/>
											</svg>								
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="geex-content__section geex-content__core mb-40">
						<div class="geex-content__section__header">
							<div class="geex-content__section__header__title-part">
								<h4 class="geex-content__section__header__title">Core Assets</h4>
							</div>
						</div>
						<div class="geex-content__section__content">
							<div class="geex-content__core__top">
								<ul class="nav nav-tabs geex-content__core__nav" id="crypto-asset-tab" role="tablist">
									<li class="geex-content__core__nav__item" role="presentation">
										<button class="geex-content__core__nav__link active" id="crypto-bitcoin-tab" data-bs-toggle="tab" data-bs-target="#crypto-bitcoin-content" type="button" role="tab" aria-controls="crypto-bitcoin-content" aria-selected="true">
											<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
												<path d="M21.3335 12.6668C21.3326 11.5627 20.4375 10.6679 19.3336 10.6667H13.3335V14.6667H19.3336C20.4375 14.6658 21.3326 13.7707 21.3335 12.6668Z" fill="#FFAB2D"/>
												<path d="M13.3335 21.3333H19.3336C20.4381 21.3333 21.3335 20.4379 21.3335 19.3335C21.3335 18.2287 20.4381 17.3333 19.3336 17.3333H13.3335V21.3333Z" fill="#FFAB2D"/>
												<path d="M16 0C7.16347 0 0 7.16347 0 16C0 24.8365 7.16347 32 16 32C24.8365 32 32 24.8365 32 16C31.9899 7.16765 24.8323 0.0101144 16 0ZM24.0002 19.4284C23.997 21.9522 21.9522 23.997 19.4288 23.9998V25.1428C19.4288 25.774 18.9168 26.2857 18.2859 26.2857C17.6546 26.2857 17.1429 25.774 17.1429 25.1428V23.9998H14.8574V25.1428C14.8574 25.774 14.3454 26.2857 13.7145 26.2857C13.0832 26.2857 12.5716 25.774 12.5716 25.1428V23.9998H9.14311C8.51183 23.9998 8.00017 23.4882 8.00017 22.8572C8.00017 22.226 8.51183 21.7143 9.14311 21.7143H10.2857V10.2857H9.14311C8.51183 10.2857 8.00017 9.77404 8.00017 9.14276C8.00017 8.51148 8.51183 7.99983 9.14311 7.99983H12.5716V6.85724C12.5716 6.22596 13.0832 5.71431 13.7145 5.71431C14.3458 5.71431 14.8574 6.22596 14.8574 6.85724V7.99983H17.1429V6.85724C17.1429 6.22596 17.6546 5.71431 18.2859 5.71431C18.9171 5.71431 19.4288 6.22596 19.4288 6.85724V7.99983C21.9428 7.98936 23.9894 10.0185 24.0002 12.5325C24.0058 13.8638 23.4285 15.1309 22.4202 16C23.4191 16.8594 23.9956 18.1104 24.0002 19.4284Z" fill="#FFAB2D"/>
											</svg>
											Bitcoin
										</button>
									</li>
									<li class="geex-content__core__nav__item" role="presentation">
										<button class="geex-content__core__nav__link" id="crypto-ethererum-tab" data-bs-toggle="tab" data-bs-target="#crypto-ethererum-content" type="button" role="tab" aria-controls="crypto-ethererum-content" aria-selected="false">
											<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
												<path d="M16.5068 18.4978C16.1813 18.6062 15.8187 18.6062 15.4932 18.4978L12 17.3333L16 24L20 17.3333L16.5068 18.4978Z" fill="#00ADA3"/>
												<path d="M16 16L20 14.4001L16 8L12 14.4001L16 16Z" fill="#00ADA3"/>
												<path d="M16 0C7.16347 0 0 7.16347 0 16C0 24.8365 7.16347 32 16 32C24.8365 32 32 24.8365 32 16C31.9902 7.16765 24.8323 0.00976567 16 0ZM22.7366 15.3684L17.0223 26.797C16.7401 27.3617 16.0534 27.5905 15.489 27.3083C15.2676 27.1977 15.0883 27.0185 14.9777 26.797L9.26343 15.3684C9.08591 15.0119 9.10614 14.5889 9.3168 14.2509L15.0311 5.10814C15.4109 4.57312 16.1521 4.44687 16.6871 4.82668C16.7963 4.90411 16.8915 4.99898 16.9689 5.10814L22.6829 14.2509C22.8939 14.5889 22.9141 15.0119 22.7366 15.3684Z" fill="#00ADA3"/>
											</svg>
											Ethereum
										</button>
									</li>
									<li class="geex-content__core__nav__item" role="presentation">
										<button class="geex-content__core__nav__link" id="crypto-litecoin-tab" data-bs-toggle="tab" data-bs-target="#crypto-litecoin-content" type="button" role="tab" aria-controls="crypto-litecoin-content" aria-selected="false">
											<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
												<path d="M16 0C7.16347 0 0 7.16347 0 16C0 24.8365 7.16347 32 16 32C24.8365 32 32 24.8365 32 16C31.9899 7.16765 24.8323 0.0101144 16 0ZM21.7143 24.0002H12.5716C11.9403 24.0002 11.4286 23.4885 11.4286 22.8572C11.4286 22.8032 11.4325 22.7491 11.4401 22.6954L12.3002 16.6738L10.563 17.1084C10.4723 17.1314 10.3792 17.1429 10.2857 17.1429C9.65441 17.1422 9.14345 16.6302 9.1438 15.999C9.1445 15.4751 9.50095 15.0189 10.0091 14.8912L12.649 14.2314L13.7256 6.69506C13.8149 6.07006 14.3939 5.63619 15.0189 5.72547C15.6439 5.81476 16.0778 6.39372 15.9885 7.01872L15.0433 13.6329L19.1515 12.6057C19.7629 12.4498 20.3848 12.8192 20.5403 13.4306C20.6962 14.042 20.3269 14.6638 19.7155 14.8197C19.712 14.8204 19.7085 14.8215 19.705 14.8222L14.6938 16.075L13.8885 21.7143H21.7143C22.3456 21.7143 22.8572 22.226 22.8572 22.8572C22.8572 23.4882 22.3456 24.0002 21.7143 24.0002Z" fill="#374C98"/>
											</svg>
											Litecoin
										</button>
									</li>
								</ul>
								<div class="geex-content__core__action">
									<div class="geex-content__core__action__select">
										<select class="asset_select">
											<option value="overview">Market Overview</option>
											<option value="overview1">Overview One</option>
											<option value="overview2">Overview Two</option>
											<option value="overview3">Overview Three</option>
										</select>
										<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
											<path d="M13.9873 19.217C13.7177 19.2146 13.4596 19.1076 13.2674 18.9186L3.08562 8.73681C2.90015 8.54478 2.79752 8.28759 2.79984 8.02062C2.80216 7.75366 2.90924 7.49829 3.09802 7.30951C3.2868 7.12073 3.54217 7.01365 3.80914 7.01133C4.0761 7.00901 4.3333 7.11164 4.52533 7.29711L13.9873 16.7591L23.4493 7.29711C23.5432 7.19986 23.6555 7.12229 23.7798 7.06893C23.904 7.01557 24.0376 6.98748 24.1728 6.98631C24.308 6.98513 24.442 7.01089 24.5672 7.06209C24.6923 7.11328 24.806 7.18889 24.9016 7.28449C24.9972 7.38009 25.0728 7.49377 25.124 7.6189C25.1752 7.74403 25.2009 7.8781 25.1998 8.0133C25.1986 8.14849 25.1705 8.2821 25.1171 8.40632C25.0638 8.53054 24.9862 8.64289 24.889 8.73681L14.7071 18.9186C14.515 19.1076 14.2568 19.2146 13.9873 19.217Z" fill="#AB54DB"/>
										</svg>
									</div>
									<a href="#" class="geex-content__toggle__btn">
										<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
											<path d="M13.9998 8.16667C15.2885 8.16667 16.3332 7.122 16.3332 5.83333C16.3332 4.54467 15.2885 3.5 13.9998 3.5C12.7112 3.5 11.6665 4.54467 11.6665 5.83333C11.6665 7.122 12.7112 8.16667 13.9998 8.16667Z" fill="#A3A3A3"/>
											<path d="M13.9998 16.3334C15.2885 16.3334 16.3332 15.2887 16.3332 14C16.3332 12.7114 15.2885 11.6667 13.9998 11.6667C12.7112 11.6667 11.6665 12.7114 11.6665 14C11.6665 15.2887 12.7112 16.3334 13.9998 16.3334Z" fill="#A3A3A3"/>
											<path d="M13.9998 24.4999C15.2885 24.4999 16.3332 23.4553 16.3332 22.1666C16.3332 20.8779 15.2885 19.8333 13.9998 19.8333C12.7112 19.8333 11.6665 20.8779 11.6665 22.1666C11.6665 23.4553 12.7112 24.4999 13.9998 24.4999Z" fill="#A3A3A3"/>
										</svg>
									</a>
									<ul class="geex-content__toggle__content">
										<li><a href="#">Edit</a></li>
										<li><a href="#">Delete</a></li>
									</ul>
								</div>
							</div>
							<div class="tab-content geex-content__core__content" id="geex-transaction-content">
								<div class="tab-pane geex-content__core__single fade show active" id="crypto-bitcoin-content" role="tabpanel" aria-labelledby="crypto-bitcoin-tab">
									<div class="geex-content__core__content__top">
										<div class="geex-content__core__content__info">
											<div class="geex-content__core__content__info__single">
												<span class="geex-content__core__content__info__subtitle">
													Bitcoin
												</span>
												<span class="geex-content__core__content__info__title">
													BTC / USD
												</span>
											</div>
											<div class="geex-content__core__content__info__single">
												<span class="geex-content__core__content__info__subtitle">
													Mark Price
												</span>
												<span class="geex-content__core__content__info__title">
													148.42
													<span class="geex-content__core__content__info__growth danger-color">-3.28%</span>
												</span>
											</div>
											<div class="geex-content__core__content__info__single">
												<span class="geex-content__core__content__info__subtitle">
													Funding Rate
												</span>
												<span class="geex-content__core__content__info__title">
													-0,0252%/hr
												</span>
											</div>
											<div class="geex-content__core__content__info__single">
												<span class="geex-content__core__content__info__subtitle">
													Volume
												</span>
												<span class="geex-content__core__content__info__title">
													104k
												</span>
											</div>
										</div>
									</div>
									<div class="geex-content__core__content__chart">
										<div id="bitcoin-chart" class="crypto-asset-chart"></div>
									</div>
								</div>
								<div class="tab-pane geex-content__core__single fade" id="crypto-ethererum-content" role="tabpanel" aria-labelledby="crypto-ethererum-tab">
									<div class="geex-content__core__content__top">
										<div class="geex-content__core__content__info">
											<div class="geex-content__core__content__info__single">
												<span class="geex-content__core__content__info__subtitle">
													Ethererum
												</span>
												<span class="geex-content__core__content__info__title">
													ETH / USD
												</span>
											</div>
											<div class="geex-content__core__content__info__single">
												<span class="geex-content__core__content__info__subtitle">
													Mark Price
												</span>
												<span class="geex-content__core__content__info__title">
													148.42
													<span class="geex-content__core__content__info__growth danger-color">-3.28%</span>
												</span>
											</div>
											<div class="geex-content__core__content__info__single">
												<span class="geex-content__core__content__info__subtitle">
													Funding Rate
												</span>
												<span class="geex-content__core__content__info__title">
													-0,0252%/hr
												</span>
											</div>
											<div class="geex-content__core__content__info__single">
												<span class="geex-content__core__content__info__subtitle">
													Volume
												</span>
												<span class="geex-content__core__content__info__title">
													104k
												</span>
											</div>
										</div>
									</div>
									<div class="geex-content__core__content__chart">
										<div id="ethererum-chart" class="crypto-asset-chart"></div>
									</div>
								</div>
								<div class="tab-pane geex-content__core__single fade" id="crypto-litecoin-content" role="tabpanel" aria-labelledby="crypto-litecoin-tab">
									<div class="geex-content__core__content__top">
										<div class="geex-content__core__content__info">
											<div class="geex-content__core__content__info__single">
												<span class="geex-content__core__content__info__subtitle">
													Litecoin
												</span>
												<span class="geex-content__core__content__info__title">
													LTC / USD
												</span>
											</div>
											<div class="geex-content__core__content__info__single">
												<span class="geex-content__core__content__info__subtitle">
													Mark Price
												</span>
												<span class="geex-content__core__content__info__title">
													148.42
													<span class="geex-content__core__content__info__growth danger-color">-3.28%</span>
												</span>
											</div>
											<div class="geex-content__core__content__info__single">
												<span class="geex-content__core__content__info__subtitle">
													Funding Rate
												</span>
												<span class="geex-content__core__content__info__title">
													-0,0252%/hr
												</span>
											</div>
											<div class="geex-content__core__content__info__single">
												<span class="geex-content__core__content__info__subtitle">
													Volume
												</span>
												<span class="geex-content__core__content__info__title">
													104k
												</span>
											</div>
										</div>
									</div>
									<div class="geex-content__core__content__chart">
										<div id="litecoin-chart" class="crypto-asset-chart"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="geex-content__double-column mb-40">
						<div class="geex-content__section geex-content__market">
							<div class="geex-content__section__header">
								<h4 class="geex-content__section__header__title">Market Previews</h4>
							</div>
							<div class="geex-content__section__content geex-content__market__content">
								<div class="geex-content__market__single">
									<div class="geex-content__market__single__icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
											<path d="M21 0C9.40205 0 0 9.40205 0 21C0 32.5979 9.40205 42 21 42C32.5979 42 42 32.5979 42 21C41.9867 9.40754 32.5925 0.0132752 21 0ZM28.5 31.5002H16.5002C15.6716 31.5002 15.0001 30.8287 15.0001 30.0001C15.0001 29.9292 15.0051 29.8582 15.0152 29.7877L16.144 21.8844L13.8639 22.4548C13.7449 22.485 13.6226 22.5001 13.5 22.5001C12.6714 22.4992 12.0008 21.8272 12.0012 20.9986C12.0022 20.3111 12.47 19.7123 13.137 19.5448L16.6018 18.6787L18.0149 8.78727C18.1321 7.96695 18.892 7.39749 19.7123 7.51468C20.5326 7.63187 21.1021 8.39176 20.9849 9.21208L19.7443 17.8931L25.1364 16.545C25.9388 16.3404 26.755 16.8252 26.9592 17.6276C27.1638 18.4301 26.679 19.2463 25.8766 19.4509C25.872 19.4518 25.8674 19.4532 25.8628 19.4541L19.2857 21.0984L18.2287 28.5H28.5C29.3286 28.5 30.0001 29.1716 30.0001 30.0001C30.0001 30.8282 29.3286 31.5002 28.5 31.5002Z" fill="#374C98"/>
										</svg>
									</div>
									<div class="geex-content__market__single__wrapper">
										<div class="geex-content__market__single__content">
											<h4 class="geex-content__market__single__title">LTC/USD</h4>
											<p class="geex-content__market__single__subtitle">March</p>
										</div>
										<div class="geex-content__market__single__growth">
											<span class="geex-content__market__single__growth__amount">$120.25</span>
											<span class="geex-content__market__single__growth__percent success-color">1.24%</span>
										</div>
									</div>
								</div>
								<div class="geex-content__market__single">
									<div class="geex-content__market__single__icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
											<path d="M28 16.6252C27.9988 15.176 26.824 14.0016 25.3752 14H17.5V19.25H25.3752C26.824 19.2488 27.9988 18.074 28 16.6252Z" fill="#FFAB2D"/>
											<path d="M17.5 28H25.3752C26.8248 28 28 26.8248 28 25.3752C28 23.9252 26.8248 22.75 25.3752 22.75H17.5V28Z" fill="#FFAB2D"/>
											<path d="M21 0C9.40205 0 0 9.40205 0 21C0 32.5979 9.40205 42 21 42C32.5979 42 42 32.5979 42 21C41.9867 9.40754 32.5925 0.0132752 21 0ZM31.5002 25.4998C31.4961 28.8122 28.8122 31.4961 25.5003 31.4998V32.9999C25.5003 33.8284 24.8283 34.5 24.0002 34.5C23.1716 34.5 22.5001 33.8284 22.5001 32.9999V31.4998H19.5004V32.9999C19.5004 33.8284 18.8284 34.5 18.0003 34.5C17.1717 34.5 16.5002 33.8284 16.5002 32.9999V31.4998H12.0003C11.1718 31.4998 10.5002 30.8282 10.5002 30.0001C10.5002 29.1716 11.1718 28.5 12.0003 28.5H13.5V13.5H12.0003C11.1718 13.5 10.5002 12.8284 10.5002 11.9999C10.5002 11.1713 11.1718 10.4998 12.0003 10.4998H16.5002V9.00013C16.5002 8.17158 17.1717 7.50003 18.0003 7.50003C18.8288 7.50003 19.5004 8.17158 19.5004 9.00013V10.4998H22.5001V9.00013C22.5001 8.17158 23.1716 7.50003 24.0002 7.50003C24.8288 7.50003 25.5003 8.17158 25.5003 9.00013V10.4998C28.7999 10.486 31.486 13.1493 31.5002 16.4489C31.5076 18.1962 30.75 19.8592 29.4266 21C30.7376 22.1279 31.4943 23.7699 31.5002 25.4998Z" fill="#FFAB2D"/>
										</svg>
									</div>
									<div class="geex-content__market__single__wrapper">
										<div class="geex-content__market__single__content">
											<h4 class="geex-content__market__single__title">BTC/USD</h4>
											<p class="geex-content__market__single__subtitle">January</p>
										</div>
										<div class="geex-content__market__single__growth">
											<span class="geex-content__market__single__growth__amount">$149.50</span>
											<span class="geex-content__market__single__growth__percent danger-color">2.24%</span>
										</div>
									</div>
								</div>
								<div class="geex-content__market__single">
									<div class="geex-content__market__single__icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
											<path d="M21.6651 24.2784C21.2379 24.4206 20.7621 24.4206 20.3349 24.2784L15.75 22.75L21 31.5L26.25 22.75L21.6651 24.2784Z" fill="#00ADA3"/>
											<path d="M21 21L26.25 18.9001L21 10.5L15.75 18.9001L21 21Z" fill="#00ADA3"/>
											<path d="M21 0C9.40204 0 0 9.40204 0 21C0 32.5979 9.40204 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40753 32.5924 0.0128174 21 0ZM29.8417 20.171L22.3417 35.171C21.9714 35.9121 21.07 36.2124 20.3293 35.8421C20.0387 35.697 19.8034 35.4617 19.6583 35.171L12.1582 20.171C11.9252 19.7031 11.9518 19.1479 12.2283 18.7043L19.7283 6.70443C20.2268 6.00222 21.1996 5.8365 21.9018 6.33501C22.0451 6.43664 22.17 6.56115 22.2716 6.70443L29.7712 18.7043C30.0482 19.1479 30.0747 19.7031 29.8417 20.171Z" fill="#00ADA3"/>
										</svg>
									</div>
									<div class="geex-content__market__single__wrapper">
										<div class="geex-content__market__single__content">
											<h4 class="geex-content__market__single__title">ETH/USD</h4>
											<p class="geex-content__market__single__subtitle">February</p>
										</div>
										<div class="geex-content__market__single__growth">
											<span class="geex-content__market__single__growth__amount">$220.25</span>
											<span class="geex-content__market__single__growth__percent success-color">3.27%</span>
										</div>
									</div>
								</div>
								<div class="geex-content__market__single">
									<div class="geex-content__market__single__icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
											<path d="M21 42C25.1534 42 29.2135 40.7685 32.667 38.4608C36.1204 36.1533 38.8121 32.8736 40.4014 29.0364C41.991 25.1991 42.4069 20.9767 41.5965 16.9031C40.7861 12.8295 38.7862 9.08768 35.8492 6.15076C32.9123 3.21386 29.1705 1.21381 25.0969 0.403518C21.0233 -0.40677 16.8009 0.00909841 12.9636 1.59854C9.12641 3.18798 5.84666 5.8796 3.53914 9.33305C1.23163 12.7865 0 16.8466 0 21C0 26.5695 2.21249 31.911 6.15075 35.8493C10.089 39.7875 15.4305 42 21 42Z" fill="#23292F"/>
											<path d="M28.6837 12.0563H31.8412L25.275 18.6075C24.1338 19.7474 22.5868 20.3878 20.9737 20.3878C19.3607 20.3878 17.8137 19.7474 16.6725 18.6075L10.125 12.0563H13.2787L18.2662 17.0325C18.9891 17.7545 19.969 18.1601 20.9906 18.1601C22.0123 18.1601 22.9922 17.7545 23.715 17.0325L28.6837 12.0563Z" fill="white"/>
											<path d="M13.2637 30.2775H10.125L16.7137 23.685C17.8549 22.5451 19.402 21.9048 21.015 21.9048C22.628 21.9048 24.175 22.5451 25.3162 23.685L31.92 30.2775H28.7662L23.7412 25.26C23.0184 24.538 22.0385 24.1324 21.0169 24.1324C19.9952 24.1324 19.0153 24.538 18.2925 25.26L13.2637 30.2775Z" fill="white"/>
										</svg>
									</div>
									<div class="geex-content__market__single__wrapper">
										<div class="geex-content__market__single__content">
											<h4 class="geex-content__market__single__title">XRP/USD</h4>
											<p class="geex-content__market__single__subtitle">June</p>
										</div>
										<div class="geex-content__market__single__growth">
											<span class="geex-content__market__single__growth__amount">$210.25</span>
											<span class="geex-content__market__single__growth__percent success-color">2.27%</span>
										</div>
									</div>
								</div>
								<div class="geex-content__market__single">
									<div class="geex-content__market__single__icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
											<path d="M28 16.6252C27.9988 15.176 26.824 14.0016 25.3752 14H17.5V19.25H25.3752C26.824 19.2488 27.9988 18.074 28 16.6252Z" fill="#FFAB2D"/>
											<path d="M17.5 28H25.3752C26.8248 28 28 26.8248 28 25.3752C28 23.9252 26.8248 22.75 25.3752 22.75H17.5V28Z" fill="#FFAB2D"/>
											<path d="M21 0C9.40205 0 0 9.40205 0 21C0 32.5979 9.40205 42 21 42C32.5979 42 42 32.5979 42 21C41.9867 9.40754 32.5925 0.0132752 21 0ZM31.5002 25.4998C31.4961 28.8122 28.8122 31.4961 25.5003 31.4998V32.9999C25.5003 33.8284 24.8283 34.5 24.0002 34.5C23.1716 34.5 22.5001 33.8284 22.5001 32.9999V31.4998H19.5004V32.9999C19.5004 33.8284 18.8284 34.5 18.0003 34.5C17.1717 34.5 16.5002 33.8284 16.5002 32.9999V31.4998H12.0003C11.1718 31.4998 10.5002 30.8282 10.5002 30.0001C10.5002 29.1716 11.1718 28.5 12.0003 28.5H13.5V13.5H12.0003C11.1718 13.5 10.5002 12.8284 10.5002 11.9999C10.5002 11.1713 11.1718 10.4998 12.0003 10.4998H16.5002V9.00013C16.5002 8.17158 17.1717 7.50003 18.0003 7.50003C18.8288 7.50003 19.5004 8.17158 19.5004 9.00013V10.4998H22.5001V9.00013C22.5001 8.17158 23.1716 7.50003 24.0002 7.50003C24.8288 7.50003 25.5003 8.17158 25.5003 9.00013V10.4998C28.7999 10.486 31.486 13.1493 31.5002 16.4489C31.5076 18.1962 30.75 19.8592 29.4266 21C30.7376 22.1279 31.4943 23.7699 31.5002 25.4998Z" fill="#FFAB2D"/>
										</svg>
									</div>
									<div class="geex-content__market__single__wrapper">
										<div class="geex-content__market__single__content">
											<h4 class="geex-content__market__single__title">BTC/USD</h4>
											<p class="geex-content__market__single__subtitle">April</p>
										</div>
										<div class="geex-content__market__single__growth">
											<span class="geex-content__market__single__growth__amount">$100.25</span>
											<span class="geex-content__market__single__growth__percent danger-color">1.49%</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="geex-content__section geex-content__activity">
							<div class="geex-content__section__header">
								<div class="geex-content__section__header__title-part">
									<h4 class="geex-content__section__header__title">Market Activity</h4>
								</div>
								<div class="geex-content__section__header__content-part">
									<div class="geex-content__section__header__btn">
										<a href="#" class="geex-content__section__header__link">
											View More
										</a>
									</div>
								</div>
								<a href="#" class="geex-content__toggle__btn">
									<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
										<path d="M13.9998 8.16667C15.2885 8.16667 16.3332 7.122 16.3332 5.83333C16.3332 4.54467 15.2885 3.5 13.9998 3.5C12.7112 3.5 11.6665 4.54467 11.6665 5.83333C11.6665 7.122 12.7112 8.16667 13.9998 8.16667Z" fill="#A3A3A3"/>
										<path d="M13.9998 16.3334C15.2885 16.3334 16.3332 15.2887 16.3332 14C16.3332 12.7114 15.2885 11.6667 13.9998 11.6667C12.7112 11.6667 11.6665 12.7114 11.6665 14C11.6665 15.2887 12.7112 16.3334 13.9998 16.3334Z" fill="#A3A3A3"/>
										<path d="M13.9998 24.4999C15.2885 24.4999 16.3332 23.4553 16.3332 22.1666C16.3332 20.8779 15.2885 19.8333 13.9998 19.8333C12.7112 19.8333 11.6665 20.8779 11.6665 22.1666C11.6665 23.4553 12.7112 24.4999 13.9998 24.4999Z" fill="#A3A3A3"/>
									</svg>
								</a>
								<ul class="geex-content__toggle__content">
									<li><a href="#">Edit</a></li>
									<li><a href="#">Delete</a></li>
								</ul>
							</div>
							<div class="geex-content__section__content">
								<div id="market-activity-chart"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="geex-content__widget geex-content__widget--two">
					<div class="geex-content__widget__single geex-content__widget__news">
						<h4 class="geex-content__widget__news__title">All Crypto News Updates</h4>
						<p class="geex-content__widget__news__subtitle">Read more about crypto informations who helps you manage, organize and control your assets safely</p>
						<a href="#" class="geex-btn">
							Learn More
							<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
								<path d="M3.5 13H19.09L13.79 18.29C13.6963 18.3829 13.6219 18.4935 13.5711 18.6154C13.5203 18.7373 13.4942 18.868 13.4942 19C13.4942 19.132 13.5203 19.2627 13.5711 19.3845C13.6219 19.5064 13.6963 19.617 13.79 19.71C13.883 19.8037 13.9936 19.8781 14.1154 19.9289C14.2373 19.9796 14.368 20.0058 14.5 20.0058C14.632 20.0058 14.7627 19.9796 14.8846 19.9289C15.0064 19.8781 15.117 19.8037 15.21 19.71L22.21 12.71C22.3037 12.617 22.3781 12.5064 22.4289 12.3845C22.4797 12.2627 22.5058 12.132 22.5058 12C22.5058 11.868 22.4797 11.7373 22.4289 11.6154C22.3781 11.4935 22.3037 11.3829 22.21 11.29L15.21 4.28997C15.1168 4.19673 15.0061 4.12277 14.8843 4.07231C14.7624 4.02185 14.6319 3.99588 14.5 3.99588C14.2337 3.99588 13.9783 4.10167 13.79 4.28997C13.6968 4.38321 13.6228 4.4939 13.5723 4.61572C13.5219 4.73755 13.4959 4.86811 13.4959 4.99997C13.4959 5.26627 13.6017 5.52167 13.79 5.70997L19.09 11H3.5C3.23478 11 2.98043 11.1053 2.79289 11.2929C2.60536 11.4804 2.5 11.7348 2.5 12C2.5 12.2652 2.60536 12.5195 2.79289 12.7071C2.98043 12.8946 3.23478 13 3.5 13V13Z" fill="white"/>
							</svg>
						</a>
					</div>
					<div class="geex-content__widget__single geex-content__widget__summary">
						<div class="geex-content__widget__summary__header">
							<h4 class="geex-content__widget__summary__title">Summary</h4>
							<a href="#" class="geex-content__toggle__btn">
								<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
									<path d="M13.9998 8.16667C15.2885 8.16667 16.3332 7.122 16.3332 5.83333C16.3332 4.54467 15.2885 3.5 13.9998 3.5C12.7112 3.5 11.6665 4.54467 11.6665 5.83333C11.6665 7.122 12.7112 8.16667 13.9998 8.16667Z" fill="#A3A3A3"/>
									<path d="M13.9998 16.3334C15.2885 16.3334 16.3332 15.2887 16.3332 14C16.3332 12.7114 15.2885 11.6667 13.9998 11.6667C12.7112 11.6667 11.6665 12.7114 11.6665 14C11.6665 15.2887 12.7112 16.3334 13.9998 16.3334Z" fill="#A3A3A3"/>
									<path d="M13.9998 24.4999C15.2885 24.4999 16.3332 23.4553 16.3332 22.1666C16.3332 20.8779 15.2885 19.8333 13.9998 19.8333C12.7112 19.8333 11.6665 20.8779 11.6665 22.1666C11.6665 23.4553 12.7112 24.4999 13.9998 24.4999Z" fill="#A3A3A3"/>
								</svg>
							</a>
							<ul class="geex-content__toggle__content">
								<li><a href="#">Edit</a></li>
								<li><a href="#">Delete</a></li>
							</ul>
						</div>
						<div class="geex-content__widget__summary__content">
							<div id="summary-chart"></div>
						</div>
					</div>
					<div class="geex-content__widget__single geex-content__widget__trading">
						<div class="geex-content__widget__single__header">
							<h4 class="geex-content__widget__single__title">Recent Trading</h4>
							<p class="geex-content__widget__single__subtitle">Maiores dicta atque dolorem temporibus</p>
						</div>
						<div class="geex-content__widget__trading__content">
							<div class="geex-content__widget__trading__single">
								<div class="geex-content__widget__trading__single__icon danger">
									<i class="uil uil-arrow-down"></i>
								</div>
								<div class="geex-content__widget__trading__single__wrapper">
									<div class="geex-content__widget__trading__single__content">
										<h4 class="geex-content__widget__trading__single__title">Sell Bitcoin</h4>
										<p class="geex-content__widget__trading__single__subtitle">4min ago</p>
									</div>
									<span class="geex-content__widget__trading__single__growth danger-color">- $100.21</span>
								</div>
							</div>
							<div class="geex-content__widget__trading__single">
								<div class="geex-content__widget__trading__single__icon success">
									<i class="uil uil-arrow-up"></i>
								</div>
								<div class="geex-content__widget__trading__single__wrapper">
									<div class="geex-content__widget__trading__single__content">
										<h4 class="geex-content__widget__trading__single__title">Buy Ethereum</h4>
										<p class="geex-content__widget__trading__single__subtitle">7min ago</p>
									</div>
									<span class="geex-content__widget__trading__single__growth success-color">+ $500</span>
								</div>
							</div>
							<div class="geex-content__widget__trading__single">
								<div class="geex-content__widget__trading__single__icon success">
									<i class="uil uil-arrow-up"></i>
								</div>
								<div class="geex-content__widget__trading__single__wrapper">
									<div class="geex-content__widget__trading__single__content">
										<h4 class="geex-content__widget__trading__single__title">Buy Litecoin</h4>
										<p class="geex-content__widget__trading__single__subtitle">8min ago</p>
									</div>
									<span class="geex-content__widget__trading__single__growth success-color">- $250</span>
								</div>
							</div>
							<div class="geex-content__widget__trading__single">
								<div class="geex-content__widget__trading__single__icon danger">
									<i class="uil uil-arrow-down"></i>
								</div>
								<div class="geex-content__widget__trading__single__wrapper">
									<div class="geex-content__widget__trading__single__content">
										<h4 class="geex-content__widget__trading__single__title">Sell Bitcoin</h4>
										<p class="geex-content__widget__trading__single__subtitle">January 24th, 2021 at 12:15 AM</p>
									</div>
									<span class="geex-content__widget__trading__single__growth danger-color">- $330</span>
								</div>
							</div>
							<div class="geex-content__widget__trading__single">
								<div class="geex-content__widget__trading__single__icon success">
									<i class="uil uil-arrow-up"></i>
								</div>
								<div class="geex-content__widget__trading__single__wrapper">
									<div class="geex-content__widget__trading__single__content">
										<h4 class="geex-content__widget__trading__single__title">Buy Ripple</h4>
										<p class="geex-content__widget__trading__single__subtitle">January 24th, 2021 at 2:15 AM</p>
									</div>
									<span class="geex-content__widget__trading__single__growth success-color">+ $250</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </main>

    <!-- inject:js-->
    <
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
	<?php include './partials/script.php'?>
    <!-- endinject-->
</body>

</html>