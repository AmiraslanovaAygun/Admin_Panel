<!doctype html>
<html lang="en" dir="ltr">

<?php $title='contact' ?>

<?php include './partials/head.php' ?>

<body class="geex-dashboard">
	
<?php include './partials/header.php'?>

<main class="geex-main-content">
		
<?php include './partials/sidebar.php'?>	

<?php include './partials/customizer.php'?>

		<div class="geex-content">
			<div class="geex-content__header">
				<div class="geex-content__header__content">
					<h2 class="geex-content__header__title">Contacts</h2>
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
                            <span class="geex-content__header__popup__header__subtitle">CEO, ThemeWant</span>
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
					<div class="geex-content__section geex-content__section--transparent geex-content__todo">
						<div class="geex-content__todo__content tab-content custom-al" id="geex-todo-task-content">
							<div class="tab-pane fade show active" id="geex-todo-task-content-important">
								<div class="geex-content__todo__header custom-al">
									<div class="geex-content__todo__header__title">
										<button class="geex-btn geex-btn--primary geex-btn__add-modal"><i class="uil-plus"></i> New Contact</button>
									</div>
									<ul class="nav nav-tabs geex-todo-tab geex-content__todo__header__filter" id="geex-todo-tab" role="tablist">
										<li>
											<button class="geex-btn geex-btn--primary-transparent">Favourites (20)
												<i class="uil uil-heart"></i>
											</button>
										</li>
										<li class="geex-content__todo__header__filter__sortby">
											<select>
												<option value="newest">Newest Contacts</option>
												<option value="oldest">Oldest</option>
												<option value="name">Name</option>
											</select>
											<i class="uil-angle-down"></i>
										</li>
										<li class="nav-item" role="presentation">
											<a href="#" id="todo_list_tab" class="" data-bs-toggle="tab" data-bs-target="#todo_list_content" type="button" role="tab" aria-controls="todo_list_content" aria-selected="false">
												<i class="uil-bars"></i>
											</a>
										</li>
										<li class="nav-item" role="presentation">
											<a href="#" id="todo_grid_tab" class="active" data-bs-toggle="tab" data-bs-target="#todo_grid_content" type="button" role="tab" aria-controls="todo_grid_contant" aria-selected="false">
												<i class="uil-apps"></i>
											</a>
										</li>
									</ul>
								</div>
								<div class="tab-content geex-transaction-content">
									<div class="tab-pane fade  " id="todo_list_content" role="tabpanel" aria-labelledby="todo_list_tab">

										<div class="geex-content__section geex-content__form table-responsive">


											<table class="table-reviews-geex-1">
												<thead>
													<tr style="width: 100%;">
														<th style="width: 20%;">Name</th>
														<th style="width: 20%;">Designation</th>
														<th  style="width: 20%;">Company</th>
														<th style="width: 20%;">Phone</th>
														<th style="width: 20%;">Email</th>
													</tr>
												</thead>
												<tbody class="">
													<tr>
														<td>
															<div class="author-area">
																<div class="profile-picture">
																	<img src="assets/img/contact/01.png" alt="reviews">
																</div>
																<p>david millar</p>
															</div>
														</td>
														<td>
															<span class="designation">(CEO)*</span>
														</td>
														<td>
															<span class="name">ReacThemes</span>
														</td>
														<td><a href="tel:+4733378901">+8801265648289</a></td>
														<td><a href="mailto:webmaster@example.com">millar@mail.com</a></td>
													</tr>
													<tr>
														<td>
															<div class="author-area">
																<div class="profile-picture">
																	<img src="assets/img/contact/02.png" alt="reviews">
																</div>
																<p>Brian Pfeffer</p>
															</div>
														</td>
														<td>
															<span class="designation">Senior Developer</span>
														</td>
														<td>
															<span class="name">ThemeWant</span>
														</td>
														<td><a href="tel:+4733378901">+880121238789</a></td>
														<td><a href="mailto:webmaster@example.com">Brian@mail.com</a></td>
													</tr>
													<tr>
														<td>
															<div class="author-area">
																<div class="profile-picture">
																	<img src="assets/img/contact/03.png" alt="reviews">
																</div>
																<p>Tamim Iqbal</p>
															</div>
														</td>
														<td>
															<span class="designation">Developer</span>
														</td>
														<td>
															<span class="name">ReacThemes</span>
														</td>
														<td><a href="tel:+4733378901">+880125968789</a></td>
														<td><a href="mailto:webmaster@example.com">Tamim@mail.com</a></td>
													</tr>
													<tr>
														<td>
															<div class="author-area">
																<div class="profile-picture">
																	<img src="assets/img/contact/04.png" alt="reviews">
																</div>
																<p>Mehadi Meraj</p>
															</div>
														</td>
														<td>
															<span class="designation">Senior Designer</span>
														</td>
														<td>
															<span class="name">ThemeWant</span>
														</td>
														<td><a href="tel:+4733378901">+880123235419</a></td>
														<td><a href="mailto:webmaster@example.com">Mehadi@mail.com</a></td>
													</tr>
													<tr>
														<td>
															<div class="author-area">
																<div class="profile-picture">
																	<img src="assets/img/contact/05.png" alt="reviews">
																</div>
																<p>Sakib al Hasan</p>
															</div>
														</td>
														<td>
															<span class="designation">Designer</span>
														</td>
														<td>
															<span class="name">ReacThemes</span>
														</td>
														<td><a href="tel:+4733378901">+880123464239</a></td>
														<td><a href="mailto:webmaster@example.com">Sakib@mail.com</a></td>
													</tr>
													<tr>
														<td>
															<div class="author-area">
																<div class="profile-picture">
																	<img src="assets/img/contact/06.png" alt="reviews">
																</div>
																<p>MR.John Lee</p>
															</div>
														</td>
														<td>
															<span class="designation">Content Writer</span>
														</td>
														<td>
															<span class="name">ThemeWant</span>
														</td>
														<td><a href="tel:+4733378901">+880123456889</a></td>
														<td><a href="mailto:webmaster@example.com">John@mail.com</a></td>
													</tr>
													<tr>
														<td>
															<div class="author-area">
																<div class="profile-picture">
																	<img src="assets/img/contact/07.png" alt="reviews">
																</div>
																<p>Christopher</p>
															</div>
														</td>
														<td>
															<span class="designation">(COO)</span>
														</td>
														<td>
															<span class="name">ReacThemes</span>
														</td>
														<td><a href="tel:+4733378901">+880123468789</a></td>
														<td><a href="mailto:webmaster@example.com">Christopher@mail.com</a></td>
													</tr>
													<tr>
														<td>
															<div class="author-area">
																<div class="profile-picture">
																	<img src="assets/img/contact/08.png" alt="reviews">
																</div>
																<p>MR.Christopher</p>
															</div>
														</td>
														<td>
															<span class="designation">Central Usability Officer</span>
														</td>
														<td>
															<span class="name">ThemeWant</span>
														</td>
														<td><a href="tel:+4733378901">+880123468789</a></td>
														<td><a href="mailto:webmaster@example.com">Christopher@mail.com</a></td>
													</tr>
												</tbody>
											</table>
										</div>

									</div>
									<div class="tab-pane fade show active" id="todo_grid_content" role="tabpanel" aria-labelledby="todo_grid_tab">

										<div class="row g-40">
											<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
												<!-- single contact grid area start -->
												<div class="single-contact-grid-area">
													<div class="top-area">
														<div class="avatar">
															<img src="assets/img/contact/01.png" alt="">
														</div>
														<div class="action-area">
															<div class="single">
																<i class="uil uil-heart"></i>
															</div>
															<div class="single geex-content__chat__header__filter__btn">
																<i class="uil uil-ellipsis-v"></i>
															</div>
															
															<div class="geex-content__chat__header__filter__content">
																<a class="dropdown-item" href="#">view</a>
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Details</a>
															</div>
														</div>
													</div>
													<div class="details-area">
														<h4 class="name">Ahmed Leffler</h4>
														<span class="designation">Central Usability Officer</span>
														<div class="contact-wrapper">
															<a href="#" class="single-contact">
																<i class="uil uil-bag"></i>
																<p>Highspeed Studios</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-phone"></i>
																<p>+012 345 689</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-envelope"></i>
																<p>tamara@mail.com</p>
															</a>
														</div>
													</div>
												</div>
												<!-- single contact grid area end -->
											</div>
											<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
												<!-- single contact grid area start -->
												<div class="single-contact-grid-area">
													<div class="top-area">
														<div class="avatar">
															<img src="assets/img/contact/02.png" alt="avatar">
														</div>
														<div class="action-area">
															<div class="single">
																<i class="uil uil-heart"></i>
															</div>
															<div class="single geex-content__chat__header__filter__btn">
																<i class="uil uil-ellipsis-v"></i>
															</div>
															
															<div class="geex-content__chat__header__filter__content">
																<a class="dropdown-item" href="#">view</a>
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Details</a>
															</div>
														</div>
													</div>
													<div class="details-area">
														<h4 class="name">Brian Pfeffer</h4>
														<span class="designation">Chief Tactics Supervisor</span>
														<div class="contact-wrapper">
															<a href="#" class="single-contact">
																<i class="uil uil-bag"></i>
																<p>Highspeed Studios</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-phone"></i>
																<p>+012 345 689</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-envelope"></i>
																<p>tamara@mail.com</p>
															</a>
														</div>
													</div>
												</div>
												<!-- single contact grid area end -->
											</div>
											<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
												<!-- single contact grid area start -->
												<div class="single-contact-grid-area">
													<div class="top-area">
														<div class="avatar">
															<img src="assets/img/contact/03.png" alt="">
														</div>
														<div class="action-area">
															<div class="single">
																<i class="uil uil-heart"></i>
															</div>
															<div class="single geex-content__chat__header__filter__btn">
																<i class="uil uil-ellipsis-v"></i>
															</div>
															
															<div class="geex-content__chat__header__filter__content">
																<a class="dropdown-item" href="#">view</a>
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Details</a>
															</div>
														</div>
													</div>
													<div class="details-area">
														<h4 class="name">Crhistine Zboncak</h4>
														<span class="designation">UI Designer</span>
														<div class="contact-wrapper">
															<a href="#" class="single-contact">
																<i class="uil uil-bag"></i>
																<p>Highspeed Studios</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-phone"></i>
																<p>+012 345 689</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-envelope"></i>
																<p>tamara@mail.com</p>
															</a>
														</div>
													</div>
												</div>
												<!-- single contact grid area end -->
											</div>
											<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
												<!-- single contact grid area start -->
												<div class="single-contact-grid-area">
													<div class="top-area">
														<div class="avatar">
															<img src="assets/img/contact/04.png" alt="">
														</div>
														<div class="action-area">
															<div class="single">
																<i class="uil uil-heart"></i>
															</div>
															<div class="single geex-content__chat__header__filter__btn">
																<i class="uil uil-ellipsis-v"></i>
															</div>
															
															<div class="geex-content__chat__header__filter__content">
																<a class="dropdown-item" href="#">view</a>
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Details</a>
															</div>
														</div>
													</div>
													<div class="details-area">
														<h4 class="name">David Koelpin</h4>
														<span class="designation">District Mobility Designer</span>
														<div class="contact-wrapper">
															<a href="#" class="single-contact">
																<i class="uil uil-bag"></i>
																<p>Highspeed Studios</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-phone"></i>
																<p>+012 345 689</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-envelope"></i>
																<p>tamara@mail.com</p>
															</a>
														</div>
													</div>
												</div>
												<!-- single contact grid area end -->
											</div>
											<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
												<!-- single contact grid area start -->
												<div class="single-contact-grid-area">
													<div class="top-area">
														<div class="avatar">
															<img src="assets/img/contact/05.png" alt="">
														</div>
														<div class="action-area">
															<div class="single">
																<i class="uil uil-heart"></i>
															</div>
															<div class="single geex-content__chat__header__filter__btn">
																<i class="uil uil-ellipsis-v"></i>
															</div>
															
															<div class="geex-content__chat__header__filter__content">
																<a class="dropdown-item" href="#">view</a>
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Details</a>
															</div>
														</div>
													</div>
													<div class="details-area">
														<h4 class="name">Erika Smitham</h4>
														<span class="designation">Central Usability Officer</span>
														<div class="contact-wrapper">
															<a href="#" class="single-contact">
																<i class="uil uil-bag"></i>
																<p>Highspeed Studios</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-phone"></i>
																<p>+012 345 689</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-envelope"></i>
																<p>tamara@mail.com</p>
															</a>
														</div>
													</div>
												</div>
												<!-- single contact grid area end -->
											</div>
											<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
												<!-- single contact grid area start -->
												<div class="single-contact-grid-area">
													<div class="top-area">
														<div class="avatar">
															<img src="assets/img/contact/06.png" alt="avatar">
														</div>
														<div class="action-area">
															<div class="single">
																<i class="uil uil-heart"></i>
															</div>
															<div class="single geex-content__chat__header__filter__btn">
																<i class="uil uil-ellipsis-v"></i>
															</div>
															
															<div class="geex-content__chat__header__filter__content">
																<a class="dropdown-item" href="#">view</a>
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Details</a>
															</div>
														</div>
													</div>
													<div class="details-area">
														<h4 class="name">Franklin Stiedemann</h4>
														<span class="designation">Chief Tactics Supervisor</span>
														<div class="contact-wrapper">
															<a href="#" class="single-contact">
																<i class="uil uil-bag"></i>
																<p>Highspeed Studios</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-phone"></i>
																<p>+012 345 689</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-envelope"></i>
																<p>tamara@mail.com</p>
															</a>
														</div>
													</div>
												</div>
												<!-- single contact grid area end -->
											</div>
											<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
												<!-- single contact grid area start -->
												<div class="single-contact-grid-area">
													<div class="top-area">
														<div class="avatar">
															<img src="assets/img/contact/07.png" alt="">
														</div>
														<div class="action-area">
															<div class="single">
																<i class="uil uil-heart"></i>
															</div>
															<div class="single geex-content__chat__header__filter__btn">
																<i class="uil uil-ellipsis-v"></i>
															</div>
															
															<div class="geex-content__chat__header__filter__content">
																<a class="dropdown-item" href="#">view</a>
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Details</a>
															</div>
														</div>
													</div>
													<div class="details-area">
														<h4 class="name">Geovanny Bruen</h4>
														<span class="designation">UI Designer</span>
														<div class="contact-wrapper">
															<a href="#" class="single-contact">
																<i class="uil uil-bag"></i>
																<p>Highspeed Studios</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-phone"></i>
																<p>+012 345 689</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-envelope"></i>
																<p>tamara@mail.com</p>
															</a>
														</div>
													</div>
												</div>
												<!-- single contact grid area end -->
											</div>
											<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
												<!-- single contact grid area start -->
												<div class="single-contact-grid-area">
													<div class="top-area">
														<div class="avatar">
															<img src="assets/img/contact/08.png" alt="">
														</div>
														<div class="action-area">
															<div class="single">
																<i class="uil uil-heart"></i>
															</div>
															<div class="single geex-content__chat__header__filter__btn">
																<i class="uil uil-ellipsis-v"></i>
															</div>
															
															<div class="geex-content__chat__header__filter__content">
																<a class="dropdown-item" href="#">view</a>
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Details</a>
															</div>
														</div>
													</div>
													<div class="details-area">
														<h4 class="name">John Okuneva</h4>
														<span class="designation">District Mobility Designer</span>
														<div class="contact-wrapper">
															<a href="#" class="single-contact">
																<i class="uil uil-bag"></i>
																<p>Highspeed Studios</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-phone"></i>
																<p>+012 345 689</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-envelope"></i>
																<p>tamara@mail.com</p>
															</a>
														</div>
													</div>
												</div>
												<!-- single contact grid area end -->
											</div>


											<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
												<!-- single contact grid area start -->
												<div class="single-contact-grid-area">
													<div class="top-area">
														<div class="avatar">
															<img src="assets/img/contact/09.png" alt="">
														</div>
														<div class="action-area">
															<div class="single">
																<i class="uil uil-heart"></i>
															</div>
															<div class="single geex-content__chat__header__filter__btn">
																<i class="uil uil-ellipsis-v"></i>
															</div>
															
															<div class="geex-content__chat__header__filter__content">
																<a class="dropdown-item" href="#">view</a>
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Details</a>
															</div>
														</div>
													</div>
													<div class="details-area">
														<h4 class="name">Tamara Scevenko</h4>
														<span class="designation">Central Usability Officer</span>
														<div class="contact-wrapper">
															<a href="#" class="single-contact">
																<i class="uil uil-bag"></i>
																<p>Highspeed Studios</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-phone"></i>
																<p>+012 345 689</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-envelope"></i>
																<p>tamara@mail.com</p>
															</a>
														</div>
													</div>
												</div>
												<!-- single contact grid area end -->
											</div>
											<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
												<!-- single contact grid area start -->
												<div class="single-contact-grid-area">
													<div class="top-area">
														<div class="avatar">
															<img src="assets/img/contact/10.png" alt="avatar">
														</div>
														<div class="action-area">
															<div class="single">
																<i class="uil uil-heart"></i>
															</div>
															<div class="single geex-content__chat__header__filter__btn">
																<i class="uil uil-ellipsis-v"></i>
															</div>
															
															<div class="geex-content__chat__header__filter__content">
																<a class="dropdown-item" href="#">view</a>
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Details</a>
															</div>
														</div>
													</div>
													<div class="details-area">
														<h4 class="name">Thomas Wunsch</h4>
														<span class="designation">Chief Tactics Supervisor</span>
														<div class="contact-wrapper">
															<a href="#" class="single-contact">
																<i class="uil uil-bag"></i>
																<p>Highspeed Studios</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-phone"></i>
																<p>+012 345 689</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-envelope"></i>
																<p>tamara@mail.com</p>
															</a>
														</div>
													</div>
												</div>
												<!-- single contact grid area end -->
											</div>
											<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
												<!-- single contact grid area start -->
												<div class="single-contact-grid-area">
													<div class="top-area">
														<div class="avatar">
															<img src="assets/img/contact/11.png" alt="">
														</div>
														<div class="action-area">
															<div class="single">
																<i class="uil uil-heart"></i>
															</div>
															<div class="single geex-content__chat__header__filter__btn">
																<i class="uil uil-ellipsis-v"></i>
															</div>
															
															<div class="geex-content__chat__header__filter__content">
																<a class="dropdown-item" href="#">view</a>
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Details</a>
															</div>
														</div>
													</div>
													<div class="details-area">
														<h4 class="name">Veronica Hodkiewicz</h4>
														<span class="designation">UI Designer</span>
														<div class="contact-wrapper">
															<a href="#" class="single-contact">
																<i class="uil uil-bag"></i>
																<p>Highspeed Studios</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-phone"></i>
																<p>+012 345 689</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-envelope"></i>
																<p>tamara@mail.com</p>
															</a>
														</div>
													</div>
												</div>
												<!-- single contact grid area end -->
											</div>
											<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
												<!-- single contact grid area start -->
												<div class="single-contact-grid-area">
													<div class="top-area">
														<div class="avatar">
															<img src="assets/img/contact/12.png" alt="">
														</div>
														<div class="action-area">
															<div class="single">
																<i class="uil uil-heart"></i>
															</div>
															<div class="single geex-content__chat__header__filter__btn">
																<i class="uil uil-ellipsis-v"></i>
															</div>
															
															<div class="geex-content__chat__header__filter__content">
																<a class="dropdown-item" href="#">view</a>
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Details</a>
															</div>
														</div>
													</div>
													<div class="details-area">
														<h4 class="name">David Koelpin</h4>
														<span class="designation">District Mobility Designer</span>
														<div class="contact-wrapper">
															<a href="#" class="single-contact">
																<i class="uil uil-bag"></i>
																<p>Highspeed Studios</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-phone"></i>
																<p>+012 345 689</p>
															</a>
															<a href="#" class="single-contact">
																<i class="uil uil-envelope"></i>
																<p>tamara@mail.com</p>
															</a>
														</div>
													</div>
												</div>
												<!-- single contact grid area end -->
											</div>
										</div>
									</div>
								</div>
								<div class="geex-content__todo__footer">
									<div class="geex-content__todo__footer__text">Showing 4 of 256 data</div>
									<div class="geex-content__todo__footer__pagination">
										<ul class="geex-pagination">
											<li class="geex-pagination__item">
												<a href="#" class="geex-pagination__link active">1</a>
											</li>
											<li class="geex-pagination__item">
												<a href="#" class="geex-pagination__link">2</a>
											</li>
											<li class="geex-pagination__item">
												<a href="#" class="geex-pagination__link">3</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="geex-todo-task-content-completed">
								<div class="geex-content__todo__header">
									<div class="geex-content__todo__header__title">
										<i class="uil-info-circle"></i>
										<h4> Completed Task</h4>
									</div>
									<ul class="nav nav-tabs geex-todo-tab geex-content__todo__header__filter" id="geex-todo-tab-completed" role="tablist">
										<li class="geex-content__todo__header__filter__sortby">
											<select>
												<option value="newest">Newest</option>
												<option value="oldest">Oldest</option>
												<option value="name">Name</option>
											</select>
											<i class="uil-angle-down"></i>
										</li>
										<li class="nav-item" role="presentation">
											<a href="#" id="todo_list_tab-completed" class="active" data-bs-toggle="tab" data-bs-target="#todo_list_content-completed" type="button" role="tab" aria-controls="todo_list_content-completed" aria-selected="false">
												<i class="uil-bars"></i>
											</a>
										</li>
										<li class="nav-item" role="presentation">
											<a href="#" id="todo_grid_tab-completed" data-bs-toggle="tab" data-bs-target="#todo_grid_content-completed" type="button" role="tab" aria-controls="todo_grid_contant" aria-selected="false">
												<i class="uil-apps"></i>
											</a>
										</li>
									</ul>
								</div>
								<div class="tab-content geex-transaction-content">
									<div class="tab-pane fade show active" id="todo_list_content-completed" role="tabpanel" aria-labelledby="todo_list_tab-completed">
										<div class="geex-content__todo__list">
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__checkbox">
													<input type="checkbox" name="completed-todo-1" id="completed-todo-1" />
													<label for="completed-todo-1">
														<i class="uil-check"></i>
													</label>
												</div>
							
												<div class="geex-content__todo__list__single__text">
													<span class="geex-content__todo__list__single__subtitle">January 24th, 2021  04:25 PM</span>
													<h4 class="geex-content__todo__list__single__title">Create custom floating action buttton in Geex Mobile</h4>
												</div>
												
												<div class="geex-content__todo__list__single__tag">
													<a href="#" class="geex-content__todo__list__single__tag__item primary">
														<i class="uil uil-tag-alt"></i>
														Team
													</a>
													<a href="#" class="geex-content__todo__list__single__tag__item warning">
														<i class="uil uil-tag-alt"></i>
														Important
													</a>
												</div>
							
												<div class="geex-content__todo__list__single__author">
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/1.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/2.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/3.svg" alt="avatar" />
													</a>
												</div>
											</div>
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__checkbox">
													<input type="checkbox" name="completed-todo-2" id="completed-todo-2" />
													<label for="completed-todo-2">
														<i class="uil-check"></i>
													</label>
												</div>
							
												<div class="geex-content__todo__list__single__text">
													<span class="geex-content__todo__list__single__subtitle">January 24th, 2021  04:25 PM</span>
													<h4 class="geex-content__todo__list__single__title">Revision 1 : Remove background in main banner Geex Website</h4>
												</div>
												
												<div class="geex-content__todo__list__single__tag">
													<a href="#" class="geex-content__todo__list__single__tag__item primary">
														<i class="uil uil-tag-alt"></i>
														Team
													</a>
													<a href="#" class="geex-content__todo__list__single__tag__item danger">
														<i class="uil uil-tag-alt"></i>
														High
													</a>
												</div>
							
												<div class="geex-content__todo__list__single__author">
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/4.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/5.svg" alt="avatar" />
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="todo_grid_content-completed" role="tabpanel" aria-labelledby="todo_grid_tab-completed">
										<div class="geex-content__todo__list geex-content__todo__list--grid">
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__checkbox">
													<input type="checkbox" name="completed-todo-11" id="completed-todo-11" />
													<label for="completed-todo-11">
														<i class="uil-check"></i>
													</label>
												</div>
							
												<div class="geex-content__todo__list__single__text">
													<span class="geex-content__todo__list__single__subtitle">January 24th, 2021  04:25 PM</span>
													<h4 class="geex-content__todo__list__single__title">Create custom floating action buttton in Geex Mobile</h4>
												</div>
												
												<div class="geex-content__todo__list__single__tag">
													<a href="#" class="geex-content__todo__list__single__tag__item primary">
														<i class="uil uil-tag-alt"></i>
														Team
													</a>
													<a href="#" class="geex-content__todo__list__single__tag__item warning">
														<i class="uil uil-tag-alt"></i>
														Important
													</a>
												</div>
							
												<div class="geex-content__todo__list__single__author">
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/1.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/2.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/3.svg" alt="avatar" />
													</a>
												</div>
											</div>
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__checkbox">
													<input type="checkbox" name="completed-todo-12" id="completed-todo-12" />
													<label for="completed-todo-12">
														<i class="uil-check"></i>
													</label>
												</div>
							
												<div class="geex-content__todo__list__single__text">
													<span class="geex-content__todo__list__single__subtitle">January 24th, 2021  04:25 PM</span>
													<h4 class="geex-content__todo__list__single__title">Revision 1 : Remove background in main banner Geex Website</h4>
												</div>
												
												<div class="geex-content__todo__list__single__tag">
													<a href="#" class="geex-content__todo__list__single__tag__item primary">
														<i class="uil uil-tag-alt"></i>
														Team
													</a>
													<a href="#" class="geex-content__todo__list__single__tag__item danger">
														<i class="uil uil-tag-alt"></i>
														High
													</a>
												</div>
							
												<div class="geex-content__todo__list__single__author">
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/4.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/5.svg" alt="avatar" />
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="geex-todo-task-content-removed">
								<div class="geex-content__todo__header">
									<div class="geex-content__todo__header__title">
										<i class="uil-info-circle"></i>
										<h4> Removed Task</h4>
									</div>
									<ul class="nav nav-tabs geex-todo-tab geex-content__todo__header__filter" id="geex-todo-removed" role="tablist">
										<li class="geex-content__todo__header__filter__sortby">
											<select>
												<option value="newest">Newest</option>
												<option value="oldest">Oldest</option>
												<option value="name">Name</option>
											</select>
											<i class="uil-angle-down"></i>
										</li>
										<li class="nav-item" role="presentation">
											<a href="#" id="todo_list_tab-removed" class="active" data-bs-toggle="tab" data-bs-target="#todo_list_content-removed" type="button" role="tab" aria-controls="todo_list_content-removed" aria-selected="false">
												<i class="uil-bars"></i>
											</a>
										</li>
										<li class="nav-item" role="presentation">
											<a href="#" id="todo_grid_tab-removed" data-bs-toggle="tab" data-bs-target="#todo_grid_content-removed" type="button" role="tab" aria-controls="todo_grid_contant-removed" aria-selected="false">
												<i class="uil-apps"></i>
											</a>
										</li>
									</ul>
								</div>
								<div class="tab-content geex-transaction-content">
									<div class="tab-pane fade show active" id="todo_list_content-removed" role="tabpanel" aria-labelledby="todo_list_tab-removed">
										<div class="geex-content__todo__list">
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__checkbox">
													<input type="checkbox" name="removed-todo-1" id="removed-todo-1" />
													<label for="removed-todo-1">
														<i class="uil-check"></i>
													</label>
												</div>
							
												<div class="geex-content__todo__list__single__text">
													<span class="geex-content__todo__list__single__subtitle">January 24th, 2021  04:25 PM</span>
													<h4 class="geex-content__todo__list__single__title">Create custom floating action buttton in Geex Mobile</h4>
												</div>
												
												<div class="geex-content__todo__list__single__tag">
													<a href="#" class="geex-content__todo__list__single__tag__item primary">
														<i class="uil uil-tag-alt"></i>
														Team
													</a>
													<a href="#" class="geex-content__todo__list__single__tag__item warning">
														<i class="uil uil-tag-alt"></i>
														Important
													</a>
												</div>
							
												<div class="geex-content__todo__list__single__author">
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/1.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/2.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/3.svg" alt="avatar" />
													</a>
												</div>
											</div>
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__checkbox">
													<input type="checkbox" name="removed-todo-2" id="removed-todo-2" />
													<label for="removed-todo-2">
														<i class="uil-check"></i>
													</label>
												</div>
							
												<div class="geex-content__todo__list__single__text">
													<span class="geex-content__todo__list__single__subtitle">January 24th, 2021  04:25 PM</span>
													<h4 class="geex-content__todo__list__single__title">Revision 1 : Remove background in main banner Geex Website</h4>
												</div>
												
												<div class="geex-content__todo__list__single__tag">
													<a href="#" class="geex-content__todo__list__single__tag__item primary">
														<i class="uil uil-tag-alt"></i>
														Team
													</a>
													<a href="#" class="geex-content__todo__list__single__tag__item danger">
														<i class="uil uil-tag-alt"></i>
														High
													</a>
												</div>
							
												<div class="geex-content__todo__list__single__author">
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/4.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/5.svg" alt="avatar" />
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="todo_grid_content-removed" role="tabpanel" aria-labelledby="todo_grid_tab-removed">
										<div class="geex-content__todo__list geex-content__todo__list--grid">
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__checkbox">
													<input type="checkbox" name="removed-todo-11" id="removed-todo-11" />
													<label for="removed-todo-11">
														<i class="uil-check"></i>
													</label>
												</div>
							
												<div class="geex-content__todo__list__single__text">
													<span class="geex-content__todo__list__single__subtitle">January 24th, 2021  04:25 PM</span>
													<h4 class="geex-content__todo__list__single__title">Create custom floating action buttton in Geex Mobile</h4>
												</div>
												
												<div class="geex-content__todo__list__single__tag">
													<a href="#" class="geex-content__todo__list__single__tag__item primary">
														<i class="uil uil-tag-alt"></i>
														Team
													</a>
													<a href="#" class="geex-content__todo__list__single__tag__item warning">
														<i class="uil uil-tag-alt"></i>
														Important
													</a>
												</div>
							
												<div class="geex-content__todo__list__single__author">
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/1.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/2.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/3.svg" alt="avatar" />
													</a>
												</div>
											</div>
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__checkbox">
													<input type="checkbox" name="removed-todo-12" id="removed-todo-12" />
													<label for="removed-todo-12">
														<i class="uil-check"></i>
													</label>
												</div>
							
												<div class="geex-content__todo__list__single__text">
													<span class="geex-content__todo__list__single__subtitle">January 24th, 2021  04:25 PM</span>
													<h4 class="geex-content__todo__list__single__title">Revision 1 : Remove background in main banner Geex Website</h4>
												</div>
												
												<div class="geex-content__todo__list__single__tag">
													<a href="#" class="geex-content__todo__list__single__tag__item primary">
														<i class="uil uil-tag-alt"></i>
														Team
													</a>
													<a href="#" class="geex-content__todo__list__single__tag__item danger">
														<i class="uil uil-tag-alt"></i>
														High
													</a>
												</div>
							
												<div class="geex-content__todo__list__single__author">
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/4.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/5.svg" alt="avatar" />
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="geex-todo-task-content-due">
								<div class="geex-content__todo__header">
									<div class="geex-content__todo__header__title">
										<i class="uil-info-circle"></i>
										<h4> Due Task</h4>
									</div>
									<ul class="nav nav-tabs geex-todo-tab geex-content__todo__header__filter" id="geex-todo-tab-due" role="tablist">
										<li class="geex-content__todo__header__filter__sortby">
											<select>
												<option value="newest">Newest</option>
												<option value="oldest">Oldest</option>
												<option value="name">Name</option>
											</select>
											<i class="uil-angle-down"></i>
										</li>
										<li class="nav-item" role="presentation">
											<a href="#" id="todo_list_tab-due" class="active" data-bs-toggle="tab" data-bs-target="#todo_list_content-due" type="button" role="tab" aria-controls="todo_list_content-due" aria-selected="false">
												<i class="uil-bars"></i>
											</a>
										</li>
										<li class="nav-item" role="presentation">
											<a href="#" id="todo_grid_tab-due" data-bs-toggle="tab" data-bs-target="#todo_grid_content-due" type="button" role="tab" aria-controls="todo_grid_contant-due" aria-selected="false">
												<i class="uil-apps"></i>
											</a>
										</li>
									</ul>
								</div>
								<div class="tab-content geex-transaction-content">
									<div class="tab-pane fade show active" id="todo_list_content-due" role="tabpanel" aria-labelledby="todo_list_tab-due">
										<div class="geex-content__todo__list">
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__checkbox">
													<input type="checkbox" name="due-todo-1" id="due-todo-1" />
													<label for="due-todo-1">
														<i class="uil-check"></i>
													</label>
												</div>
							
												<div class="geex-content__todo__list__single__text">
													<span class="geex-content__todo__list__single__subtitle">January 24th, 2021  04:25 PM</span>
													<h4 class="geex-content__todo__list__single__title">Create custom floating action buttton in Geex Mobile</h4>
												</div>
												
												<div class="geex-content__todo__list__single__tag">
													<a href="#" class="geex-content__todo__list__single__tag__item primary">
														<i class="uil uil-tag-alt"></i>
														Team
													</a>
													<a href="#" class="geex-content__todo__list__single__tag__item warning">
														<i class="uil uil-tag-alt"></i>
														Important
													</a>
												</div>
							
												<div class="geex-content__todo__list__single__author">
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/1.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/2.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/3.svg" alt="avatar" />
													</a>
												</div>
											</div>
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__checkbox">
													<input type="checkbox" name="due-todo-2" id="due-todo-2" />
													<label for="due-todo-2">
														<i class="uil-check"></i>
													</label>
												</div>
							
												<div class="geex-content__todo__list__single__text">
													<span class="geex-content__todo__list__single__subtitle">January 24th, 2021  04:25 PM</span>
													<h4 class="geex-content__todo__list__single__title">Revision 1 : Remove background in main banner Geex Website</h4>
												</div>
												
												<div class="geex-content__todo__list__single__tag">
													<a href="#" class="geex-content__todo__list__single__tag__item primary">
														<i class="uil uil-tag-alt"></i>
														Team
													</a>
													<a href="#" class="geex-content__todo__list__single__tag__item danger">
														<i class="uil uil-tag-alt"></i>
														High
													</a>
												</div>
							
												<div class="geex-content__todo__list__single__author">
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/4.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/5.svg" alt="avatar" />
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="todo_grid_content-due" role="tabpanel" aria-labelledby="todo_grid_tab-due">
										<div class="geex-content__todo__list geex-content__todo__list--grid">
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__checkbox">
													<input type="checkbox" name="due-todo-11" id="due-todo-11" />
													<label for="due-todo-11">
														<i class="uil-check"></i>
													</label>
												</div>
							
												<div class="geex-content__todo__list__single__text">
													<span class="geex-content__todo__list__single__subtitle">January 24th, 2021  04:25 PM</span>
													<h4 class="geex-content__todo__list__single__title">Create custom floating action buttton in Geex Mobile</h4>
												</div>
												
												<div class="geex-content__todo__list__single__tag">
													<a href="#" class="geex-content__todo__list__single__tag__item primary">
														<i class="uil uil-tag-alt"></i>
														Team
													</a>
													<a href="#" class="geex-content__todo__list__single__tag__item warning">
														<i class="uil uil-tag-alt"></i>
														Important
													</a>
												</div>
							
												<div class="geex-content__todo__list__single__author">
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/1.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/2.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/3.svg" alt="avatar" />
													</a>
												</div>
											</div>
											<div class="geex-content__todo__list__single">
												<div class="geex-content__todo__list__single__checkbox">
													<input type="checkbox" name="due-todo-12" id="due-todo-12" />
													<label for="due-todo-12">
														<i class="uil-check"></i>
													</label>
												</div>
							
												<div class="geex-content__todo__list__single__text">
													<span class="geex-content__todo__list__single__subtitle">January 24th, 2021  04:25 PM</span>
													<h4 class="geex-content__todo__list__single__title">Revision 1 : Remove background in main banner Geex Website</h4>
												</div>
												
												<div class="geex-content__todo__list__single__tag">
													<a href="#" class="geex-content__todo__list__single__tag__item primary">
														<i class="uil uil-tag-alt"></i>
														Team
													</a>
													<a href="#" class="geex-content__todo__list__single__tag__item danger">
														<i class="uil uil-tag-alt"></i>
														High
													</a>
												</div>
							
												<div class="geex-content__todo__list__single__author">
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/4.svg" alt="avatar" />
													</a>
													<a href="#" class="geex-content__todo__list__single__author__img">
														<img src="assets/img/avatar/todo/5.svg" alt="avatar" />
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					<div class="geex-content__modal__form">
						<div class="geex-content__modal__form__header">
							<h3 class="geex-content__modal__form__title">Add New Contact</h3>
							<button class="geex-content__modal__form__close">
								<i class="uil-times"></i>
							</button>
						</div>
						<form class="geex-content__modal__form__wrapper">
							<div class="geex-content__modal__form__item">
								<input type="text" name="geex-content__modal__form__name" class="geex-content__modal__form__input" placeholder="Name" />
							</div>
							<div class="geex-content__modal__form__item">
								<input type="text" name="geex-content__modal__form__name" class="geex-content__modal__form__input" placeholder="Designation" />
							</div>
							<div class="geex-content__modal__form__item">
								<input type="text" name="geex-content__modal__form__name" class="geex-content__modal__form__input" placeholder="Studio Name" />
							</div>
							<div class="geex-content__modal__form__item">
								<input type="text" name="geex-content__modal__form__name" class="geex-content__modal__form__input" placeholder="Phone Number" />
							</div>
							<div class="geex-content__modal__form__item">
								<input type="text" name="geex-content__modal__form__name" class="geex-content__modal__form__input" placeholder="Email Address" />
							</div>
							<div class="geex-content__modal__form__item">
								<button type="submit" class="geex-content__modal__form__submit">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			




		</div>
	</main>

	<!-- inject:js-->
	<script src="./assets/vendor/js/jquery/jquery-3.5.1.min.js"></script>
	<script src="./assets/vendor/js/jquery/jquery-ui.js"></script>
	<script src="./assets/vendor/js/bootstrap/bootstrap.min.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/moment.min.js"></script>
	<script src="https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.js"></script>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script src="./assets/js/main.js"></script>
	<!-- endinject-->
</body>

</html>