<?php
ob_start();
?>
<!doctype html>
<html lang="en" dir="ltr">

<?php $title = 'index' ?>

<?php include './partials/head.php' ?>

<body class="geex-dashboard">

	<?php include './partials/header.php' ?>

	<main class="geex-main-content">

		<?php include './partials/sidebar.php' ?>

		<?php include './partials/customizer.php' ?>

		<div class="geex-content">
			<div class="geex-content__header">
				<div class="geex-content__header__content">
					<h2 class="geex-content__header__title">Dashboard</h2>
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
										<path d="M2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18C11.7767 18.0022 13.5025 17.407 14.9 16.31L19.29 20.71C19.383 20.8037 19.4936 20.8781 19.6154 20.9289C19.7373 20.9797 19.868 21.0058 20 21.0058C20.132 21.0058 20.2627 20.9797 20.3846 20.9289C20.5064 20.8781 20.617 20.8037 20.71 20.71C20.8037 20.617 20.8781 20.5064 20.9289 20.3846C20.9797 20.2627 21.0058 20.132 21.0058 20C21.0058 19.868 20.9797 19.7373 20.9289 19.6154C20.8781 19.4936 20.8037 19.383 20.71 19.29L16.31 14.9C17.407 13.5025 18.0022 11.7767 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10ZM10 4C11.1867 4 12.3467 4.35189 13.3334 5.01118C14.3201 5.67047 15.0891 6.60754 15.5433 7.7039C15.9974 8.80026 16.1162 10.0067 15.8847 11.1705C15.6532 12.3344 15.0818 13.4035 14.2426 14.2426C13.4035 15.0818 12.3344 15.6532 11.1705 15.8847C10.0067 16.1162 8.80026 15.9974 7.7039 15.5433C6.60754 15.0891 5.67047 14.3201 5.01118 13.3334C4.35189 12.3467 4 11.1867 4 10C4 8.4087 4.63214 6.88258 5.75736 5.75736C6.88258 4.63214 8.4087 4 10 4Z" fill="#464255" />
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
										<path d="M12 11.9998C12.5523 11.9998 13 11.552 13 10.9998C13 10.4475 12.5523 9.99976 12 9.99976C11.4477 9.99976 11 10.4475 11 10.9998C11 11.552 11.4477 11.9998 12 11.9998Z" fill="#464255" />
										<path d="M8 11.9998C8.55229 11.9998 9 11.552 9 10.9998C9 10.4475 8.55229 9.99976 8 9.99976C7.44772 9.99976 7 10.4475 7 10.9998C7 11.552 7.44772 11.9998 8 11.9998Z" fill="#464255" />
										<path d="M16 11.9998C16.5523 11.9998 17 11.552 17 10.9998C17 10.4475 16.5523 9.99976 16 9.99976C15.4477 9.99976 15 10.4475 15 10.9998C15 11.552 15.4477 11.9998 16 11.9998Z" fill="#464255" />
										<path d="M3.05007 21.87C3.25937 21.9564 3.48366 22.0005 3.71007 22C3.93336 22.0011 4.15461 21.9574 4.36072 21.8716C4.56684 21.7857 4.75364 21.6593 4.91007 21.5L7.41007 19H17.0001C18.3262 19 19.5979 18.4732 20.5356 17.5355C21.4733 16.5979 22.0001 15.3261 22.0001 14V8C22.0001 6.67392 21.4733 5.40215 20.5356 4.46447C19.5979 3.52678 18.3262 3 17.0001 3H7.00007C5.67399 3 4.40222 3.52678 3.46454 4.46447C2.52686 5.40215 2.00007 6.67392 2.00007 8V20.29C1.9969 20.6282 2.09528 20.9596 2.28247 21.2412C2.46966 21.5229 2.73705 21.7419 3.05007 21.87V21.87ZM4.00007 8C4.00007 7.20435 4.31614 6.44129 4.87875 5.87868C5.44136 5.31607 6.20442 5 7.00007 5H17.0001C17.7957 5 18.5588 5.31607 19.1214 5.87868C19.684 6.44129 20.0001 7.20435 20.0001 8V14C20.0001 14.7957 19.684 15.5587 19.1214 16.1213C18.5588 16.6839 17.7957 17 17.0001 17H7.00007C6.86847 16.9992 6.738 17.0245 6.61617 17.0742C6.49433 17.124 6.38351 17.1973 6.29007 17.29L4.00007 19.59V8Z" fill="#464255" />
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
										<path d="M4 20H10C10 20.5304 10.2107 21.0391 10.5858 21.4142C10.9609 21.7893 11.4696 22 12 22C12.5304 22 13.0391 21.7893 13.4142 21.4142C13.7893 21.0391 14 20.5304 14 20H20C20.2652 20 20.5196 19.8946 20.7071 19.7071C20.8946 19.5196 21 19.2652 21 19C21 18.7348 20.8946 18.4804 20.7071 18.2929C20.5196 18.1054 20.2652 18 20 18V11C20 8.87827 19.1571 6.84344 17.6569 5.34315C16.1566 3.84285 14.1217 3 12 3C9.87827 3 7.84344 3.84285 6.34315 5.34315C4.84285 6.84344 4 8.87827 4 11V18C3.73478 18 3.48043 18.1054 3.29289 18.2929C3.10536 18.4804 3 18.7348 3 19C3 19.2652 3.10536 19.5196 3.29289 19.7071C3.48043 19.8946 3.73478 20 4 20V20ZM6 11C6 9.4087 6.63214 7.88258 7.75736 6.75736C8.88258 5.63214 10.4087 5 12 5C13.5913 5 15.1174 5.63214 16.2426 6.75736C17.3679 7.88258 18 9.4087 18 11V18H6V11Z" fill="#464255" />
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
									<?php
									session_start();
									$imagePath = $_SESSION['imagePath'];
									echo "<img class='user-img' src='assets/img/profile_pics/$imagePath' alt='user' />";
									?>
								</a>
								<div class="geex-content__header__popup geex-content__header__popup--author">
									<div class="geex-content__header__popup__header">
										<div class="geex-content__header__popup__header__img">
											<?php
											$imagePath = $_SESSION['imagePath'];
											echo "<img src='assets/img/profile_pics/$imagePath' alt='user' />";
											?>
										</div>
										<div class="geex-content__header__popup__header__content">
											<?php
											$userEmail = '';
											$userName = '';
											$userSurname = '';
											if (!isset($_SESSION['userEmail'])) {
												header("Location: signin.php");
												ob_end_flush();
												exit;
											} else {
												$userName = $_SESSION['userName'];
												$userSurname = $_SESSION['userSurname'];
												$userEmail = $_SESSION['userEmail'];
												echo "<span class='geex-content__header__popup__header__subtitle'>$userName $userSurname</span>";
											}
											?>

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

										<form action="logout.php" method="POST">
											<button type="submit" class="uil uil-arrow-up-left"> Logout
											</button>
										</form>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="geex-content__wrapper">
				<div class="geex-content__section-wrapper">
					<div class="geex-content__feature mb-40">
						<div class="geex-content__feature__card">
							<div class="geex-content__feature__card__text">
								<p class="geex-content__feature__card__subtitle">Memory</p>
								<h4 class="geex-content__feature__card__title">200TB</h4>
								<span class="geex-content__feature__card__badge">+2.5%</span>
							</div>
							<div class="geex-content__feature__card__img">
								<img src="assets/img/feature/feature-2.svg" alt="feature" />
							</div>
						</div>
						<div class="geex-content__feature__card">
							<div class="geex-content__feature__card__text">
								<p class="geex-content__feature__card__subtitle">Visitors</p>
								<h4 class="geex-content__feature__card__title">87,245k</h4>
								<span class="geex-content__feature__card__badge danger-color">-4.4%</span>
							</div>
							<div class="geex-content__feature__card__img">
								<img src="assets/img/feature/feature-3.svg" alt="feature" />
							</div>
						</div>
						<div class="geex-content__feature__card">
							<div class="geex-content__feature__card__text">
								<p class="geex-content__feature__card__subtitle">New Users</p>
								<h4 class="geex-content__feature__card__title">4,750</h4>
								<span class="geex-content__feature__card__badge">+2.5%</span>
							</div>
							<div class="geex-content__feature__card__img">
								<img src="assets/img/feature/feature-1.svg" alt="feature" />
							</div>
						</div>
					</div>

					<div class="geex-content__section geex-content__server-request mb-40">
						<div class="geex-content__section__header">
							<div class="geex-content__section__header__title-part">
								<h4 class="geex-content__section__header__title">Server Request</h4>
							</div>
						</div>
						<div class="geex-content__section__content">
							<div id="line-chart" class="server-request-chart"></div>
						</div>
					</div>

					<div class="geex-content__double-column mb-40">
						<div class="geex-content__section geex-content__visitor-count">
							<div class="geex-content__section__header">
								<div class="geex-content__section__header__title-part">
									<h4 class="geex-content__section__header__title">Visitors</h4>
								</div>
								<div class="geex-content__section__header__content-part">
									<div class="geex-content__section__header__btn">
										<a href="#" class="geex-content__section__header__link">
											View More
										</a>
									</div>
								</div>
							</div>
							<div class="geex-content__section__content">
								<div class="geex-content__visitor-count__number">
									<h2 class="geex-content__visitor-count__number__title">98,425k</h2>
									<div class="geex-content__visitor-count__number__text">
										<span class="geex-content__visitor-count__number__subtitle">+2.5%</span>
										<p class="geex-content__visitor-count__number__desc">Than last week</p>
									</div>
								</div>
								<div id="column-chart"></div>
							</div>
						</div>
						<div class="geex-content__section geex-content__chat-summary">
							<div class="geex-content__section__header">
								<div class="geex-content__section__header__title-part">
									<h4 class="geex-content__section__header__title">Chart Summary</h4>
								</div>
								<div class="geex-content__section__header__content-part">
									<div class="geex-content__section__header__btn">
										<a href="#" class="geex-content__section__header__link">
											Download Report
										</a>
									</div>
								</div>
							</div>
							<div class="geex-content__section__content">
								<div id="pie-chart"></div>
							</div>
						</div>
					</div>

					<div class="geex-content__section geex-content__section--transparent geex-content__review">
						<div class="geex-content__section__header">
							<div class="geex-content__section__header__title-part">
								<h4 class="geex-content__section__header__title">User Review</h4>
							</div>
							<div class="geex-content__section__header__content-part">
								<div class="geex-content__section__header__btn geex-content__section__header__swiper-btn">
									<div class="swiper-btn swiper-btn-prev">
										<i class="uil-arrow-left"></i>
									</div>
									<div class="swiper-btn swiper-btn-next">
										<i class="uil-arrow-right"></i>
									</div>
								</div>
							</div>
						</div>
						<div class="geex-content__section__content">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<?php
									include './partials/helpers.php';
									$filePath = "data.csv";
									$transactions = getTransactions($filePath);
									foreach ($transactions as $transaction) {
										$userName = $transaction['userName'];
										$userSurname = $transaction['userSurname'];
										$userPath = $transaction['imagePath'];
										echo "<div class='swiper-slide'>";
										echo "<div class='geex-content__review__single'>";
										echo "<div class='geex-content__review__single__header'>";
										echo "<div class='geex-content__review__single__header__img'>";
										echo "	<img src='assets/img/profile_pics/$userPath' alt='User'  />";
										echo "</div>";
										echo "<div class='geex-content__review__single__header__text'>";
										echo "	<h4 class='geex-content__review__single__header__title'>$userName $userSurname</h4>";
										echo "</div>";
										echo "</div>";
										echo "<div class='geex-content__review__single__content'>";
										echo "	<p class='geex-content__review__single__header__subtitle'>$userEmail</p>";
										echo "</div>";
										echo "</div>";
										echo "</div>";
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="geex-content__widget">
					<div class="geex-content__widget__single">
						<div class="geex-content__widget__single__header">
							<h4 class="geex-content__widget__single__title">Server Status</h4>
							<p class="geex-content__widget__single__subtitle">Consectetur et quo dolor vero.</p>
						</div>
						<div class="geex-content__widget__single__content">
							<div id="stack-chart"></div>
						</div>
					</div>
					<div class="geex-content__widget__single">
						<div class="geex-content__widget__single__header">
							<h4 class="geex-content__widget__single__title">Recent Problems</h4>
							<p class="geex-content__widget__single__subtitle">Maiores dicta atque dolorem temporibus</p>
						</div>
						<div class="geex-content__widget__single__content">
							<div class="geex-content__widget__single__cta mb-30">
								<div class="geex-content__widget__single__cta__img">
									<img src="assets/img/icon/google.svg" alt="google" />
								</div>
								<div class="geex-content__widget__single__cta__text">
									<h4 class="geex-content__widget__single__cta__title">Google</h4>
									<a href="https://www.google.com" class="geex-content__widget__single__cta__link">https://www.google.com</a>
								</div>
								<div class="geex-content__widget__single__cta__status">
									<a href="#" class="geex-content__widget__single__cta__btn danger-bg">Down</a>
								</div>
							</div>
							<div class="geex-content__widget__single__cta mb-30">
								<div class="geex-content__widget__single__cta__img">
									<img src="assets/img/icon/facebook.svg" alt="google" />
								</div>
								<div class="geex-content__widget__single__cta__text">
									<h4 class="geex-content__widget__single__cta__title">Facebook</h4>
									<a href="https://www.google.com" class="geex-content__widget__single__cta__link">https://www.facebook.com</a>
								</div>
								<div class="geex-content__widget__single__cta__status">
									<a href="#" class="geex-content__widget__single__cta__btn success-bg">Stable</a>
								</div>
							</div>
							<div class="geex-content__widget__single__cta">
								<div class="geex-content__widget__single__cta__img">
									<img src="assets/img/icon/youtube.svg" alt="google" />
								</div>
								<div class="geex-content__widget__single__cta__text">
									<h4 class="geex-content__widget__single__cta__title">Youtube</h4>
									<a href="https://www.google.com" class="geex-content__widget__single__cta__link">https://www.youtube.com</a>
								</div>
								<div class="geex-content__widget__single__cta__status">
									<a href="#" class="geex-content__widget__single__cta__btn warning-bg">Warning</a>
								</div>
							</div>
						</div>
					</div>
					<div class="geex-content__widget__single">
						<div class="geex-content__widget__single__header">
							<h4 class="geex-content__widget__single__title">Latest Activity</h4>
							<p class="geex-content__widget__single__subtitle">Sit et tempora dicta omnis ab quia quo quo.</p>
						</div>
						<div class="geex-content__widget__single__content">
							<div class="geex-content__widget__single__timeline">
								<div class="geex-content__widget__single__timeline__content">
									<h4 class="geex-content__widget__single__timeline__content__title">January 2nd, 04:35 AM</h4>
									<p class="geex-content__widget__single__timeline__content__subtitle">Illum omnis quo illum nisi. Nesciunt est accusamus. Blanditiis nisi quae eum nisi similique. Modi consequuntur totam</p>
								</div>
							</div>
							<div class="geex-content__widget__single__timeline">
								<div class="geex-content__widget__single__timeline__content">
									<h4 class="geex-content__widget__single__timeline__content__title">January 4th, 06:19 AM</h4>
									<p class="geex-content__widget__single__timeline__content__subtitle">Corrupti unde qui molestiae labore ad adipisci veniam perspiciatis quasi. Quae labore vel.</p>
								</div>
							</div>
							<div class="geex-content__widget__single__timeline">
								<div class="geex-content__widget__single__timeline__content">
									<h4 class="geex-content__widget__single__timeline__content__title">January 5th, 12:34 AM</h4>
									<p class="geex-content__widget__single__timeline__content__subtitle">Maiores doloribus qui. Repellat accusamus minima ipsa ipsam aut debitis quis sit voluptates. Amet necessitatibus non minus quaerat et quis.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- inject:js-->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>

	<?php include './partials/script.php' ?>
	<!-- endinject-->
</body>

</html>