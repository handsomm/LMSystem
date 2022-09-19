<?php $this->view('includes/header'); ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/dashboard.css">
<aside>
	<div class="top">
		<div class="logo">
			<img src="<?= ROOT ?>/assets/images/logo.png" alt="" />
			<h2>LM<span class="danger">System</span></h2>
		</div>
		<div class="close" id="close-btn">
			<span class="material-icons-sharp"> close </span>
		</div>
	</div>
	<div class="sidebar">
		<a href="#" class="active">
			<span class="material-icons-sharp"> grid_view </span>
			<h3>Dashboard</h3>
		</a>
		<a href="<?= ROOT ?>/profile">
			<span class="material-icons-sharp"> person </span>
			<h3>Profile</h3>
		</a>
		<a href="#">
			<span class="material-icons-sharp"> contacts </span>
			<h3>User Information</h3>
		</a>
		<a href="#">
			<span class="material-icons-sharp"> library_books </span>
			<h3>Manage Books</h3>
		</a>
		<a href="#">
			<span class="material-icons-sharp"> auto_stories </span>
			<h3>Issue Book</h3>
		</a>
		<a href="#">
			<span class="material-icons-sharp"> mail_outline </span>
			<h3>Messages</h3>
			<span class="message-count">6</span>
		</a>
		<a href="#">
			<span class="material-icons-sharp"> people </span>
			<h3>Manage Users</h3>
		</a>
		<a href="#">
			<span class="material-icons-sharp"> bookmark </span>
			<h3>Issued Books</h3>
		</a>
		<a href="#">
			<span class="material-icons-sharp"> request_quote </span>
			<h3>Requested Books</h3>
		</a>
		<a href="<?= ROOT ?>/logout">
			<span class="material-icons-sharp"> logout </span>
			<h3>Logout</h3>
		</a>
	</div>
</aside>

<!-- END OF ASIDE -->
<main>
	<div class="top">
		<h1>Dashboard</h1>

		<ul class="breadcumbs">
			<li class="breadcumb_item">
				<a href="#" class="breadcumb_link text-muted breadcumb_link_active">Home</a>
			</li>
		</ul>
	</div>

	<div class="date">
		<input type="date">
	</div>

	<div class="insights">
		<div class="member">
			<span class="material-icons-sharp"> analytics </span>
			<div class="middle">
				<div class="left">
					<h3>Total Members</h3>
					<h1>22</h1>
				</div>
				<div class="progress">
					<svg>
						<defs>
							<linearGradient id="GradientColor">
								<stop offset="0%" stop-color="#e91e63" />
								<stop offset="100%" stop-color="#673ab7" />
							</linearGradient>
						</defs>
						<circle cx="38" cy="38" r="36"></circle>
					</svg>
					<div class="number">
						<p>81%</p>
					</div>
				</div>
				<!-- <style>
					.skill {
						position: relative;
						width: 92px;
						height: 92px;
						/* background: cornflowerblue; */
					}

					.outer {
						width: 92px;
						height: 92px;
						border-radius: 50%;
						box-shadow: 3px 3px 6px -1px rgba(0, 0, 0, 0.15),
							-3px -3px 6px -1px rgba(0, 0, 0, 0.15);
						padding: 5px;
					}

					.inner {
						width: 82px;
						height: 82px;
						border-radius: 50%;
						display: flex;
						justify-content: center;
						align-items: center;
						box-shadow: inset 3px 3px 4px -1px rgba(0, 0, 0, 0.15),
							inset -3px -3px 4px -1px rgba(0, 0, 0, 0.15);
						/* -.5px -.5px 0px rgba(255, 255, 255, 1),
                .5px .5px 0px rgba(255, 255, 255, .15),
                0px 12px 10px -8px rgba(0, 0, 0, 0.05); */
					}

					#number {
						font-weight: 600;
						color: #555;
					}

					main .skill circle {
						fill: none;
						stroke: url(#GradientColor);
						stroke-width: 5;
						stroke-dasharray: 270;
						stroke-dashoffset: 270;
						animation: anim 2s linear forwards;
					}

					svg {
						position: absolute;
						top: 0;
						left: 0;
					}

					@keyframes anim {
						100% {
							stroke-dashoffset: 48.6;
						}
					}
				</style> -->
				<!-- <div class="skill">
					<div class="outer">
						<div class="inner">
							<div id="number">

							</div>
							<svg>
								<defs>
									<linearGradient id="GradientColor">
										<stop offset="0%" stop-color="#e91e63" />
										<stop offset="100%" stop-color="#673ab7" />
									</linearGradient>
								</defs>
								<circle cx="46" cy="46" r="43" stroke-linecap="round" />
							</svg>
						</div>
					</div>
				</div> -->
			</div>
			<small class="text-muted">Last 24 Hours</small>
		</div>
		<!-- END OF MEMBER -->
		<div class="books">
			<span class="material-icons-sharp"> bar_chart </span>
			<div class="middle">
				<div class="left">
					<h3>Total Books</h3>
					<h1>34</h1>
				</div>
				<!-- <div class="skill">
					<div class="outer">
						<div class="inner">
							<div id="number">

							</div>
							<svg>
								<defs>
									<linearGradient id="GradientColor">
										<stop offset="0%" stop-color="#e91e63" />
										<stop offset="100%" stop-color="#673ab7" />
									</linearGradient>
								</defs>
								<circle cx="46" cy="46" r="43" stroke-linecap="round" />
							</svg>
						</div>
					</div>
				</div> -->
				<div class="progress">
					<svg>
						<circle cx="38" cy="38" r="36"></circle>
					</svg>
					<div class="number">
						<p>67%</p>
					</div>
				</div>
			</div>
			<small class="text-muted">Last 24 Hours</small>
		</div>
		<!-- END OF BOOKS -->
		<div class="issued">
			<span class="material-icons-sharp"> stacked_line_chart </span>
			<div class="middle">
				<div class="left">
					<h3>Total Issued Books</h3>
					<h1>11</h1>
				</div>
				<div class="progress">
					<svg>
						<circle cx="38" cy="38" r="36"></circle>
					</svg>
					<div class="number">
						<p>44%</p>
					</div>
				</div>
			</div>
			<small class="text-muted">Last 24 Hours</small>
		</div>
		<!-- END OF ISSUED -->
		<div class="fines">
			<span class="material-icons-sharp"> attach_money </span>
			<div class="middle">
				<div class="left">
					<h3>Total Fines</h3>
					<h1>512</h1>
				</div>
				<div class="progress">
					<svg>
						<circle cx="38" cy="38" r="36"></circle>
					</svg>
					<div class="number">
						<p>67%</p>
					</div>
				</div>
			</div>
			<small class="text-muted">Last 24 Hours</small>
		</div>
		<!-- END OF FINES -->
		<div class="status">
			<span class="material-icons-sharp"> insights </span>
			<div class="middle">
				<div class="left">
					<h3>Status</h3>
					<h1></h1>
				</div>
				<div class="progress">
					<svg>
						<circle cx="38" cy="38" r="36"></circle>
					</svg>
					<div class="number">
						<p>70%</p>
					</div>
				</div>
			</div>
			<small class="text-muted">Last 24 Hours</small>
		</div>
		<!-- END OF STATUS -->
		<div class="request_b">
			<span class="material-icons-sharp"> request_quote </span>
			<div class="middle">
				<div class="left">
					<h3>Requested Books</h3>
					<h1>5</h1>
				</div>
				<div class="progress">
					<svg>
						<circle cx="38" cy="38" r="36"></circle>
					</svg>
					<div class="number">
						<p>83%</p>
					</div>
				</div>
			</div>
			<small class="text-muted">Last 24 Hours</small>
		</div>
		<!-- END OF INCOME -->
	</div>

	<!-- END OF INSIGHTS -->

	<div class="recent-orders">
		<h2>Recent Orders</h2>
		<table>
			<thead>
				<tr>
					<th>Product Name</th>
					<th>Product Number</th>
					<th>Payment</th>
					<th>Status</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Foldable mini drone</td>
					<td>85631</td>
					<td>Due</td>
					<td class="warning">Pending</td>
					<td class="primary">Details</td>
				</tr>
				<tr>
					<td>Foldable mini drone</td>
					<td>85631</td>
					<td>Due</td>
					<td class="warning">Pending</td>
					<td class="primary">Details</td>
				</tr>
				<tr>
					<td>Foldable mini drone</td>
					<td>85631</td>
					<td>Due</td>
					<td class="warning">Pending</td>
					<td class="primary">Details</td>
				</tr>
			</tbody>
		</table>
		<a href="#">Show All</a>
	</div>
</main>

<!-- END OF MAIN -->

<div class="right">
	<div class="top">
		<button id="menu-btn">
			<span class="material-icons-sharp"> menu </span>
		</button>
		<div class="theme-toggler">
			<span class="material-icons-sharp active"> light_mode </span>
			<span class="material-icons-sharp"> dark_mode </span>
		</div>
		<div class="profile">
			<div class="info">
				<p>Hey, <b><?= Auth::getFirstname(); ?></b></p>
				<small class="text-muted">Admin</small>
			</div>
			<div class="profile-photo">
				<img src="<?= ROOT ?>/assets/images/profile-1.jpg" alt="">
			</div>
		</div>
	</div>
	<!-- END OF TOP -->
	<div class="recent-updates">
		<h2>Recent Updates</h2>
		<div class="updates">
			<div class="update">
				<div class="profile-photo">
					<img src="<?= ROOT ?>/assets/images/profile-2.jpg" alt="">
				</div>
				<div class="message">
					<p><b>Shibu </b> received his order of Night lion tech GPS drone</p>
					<small class="text-muted">2 minutes ago</small>
				</div>
			</div>
			<div class="update">
				<div class="profile-photo">
					<img src="<?= ROOT ?>/assets/images/profile-3.jpg" alt="">
				</div>
				<div class="message">
					<p><b>Alina </b> Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
					<small class="text-muted">2 minutes ago</small>
				</div>
			</div>
			<div class="update">
				<div class="profile-photo">
					<img src="<?= ROOT ?>/assets/images/profile-4.jpg" alt="">
				</div>
				<div class="message">
					<p><b>Priyanka </b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi,
						velit.</p>
					<small class="text-muted">2 minutes ago</small>
				</div>
			</div>
		</div>
	</div>

	<!-- END OF RECENT UPDATES -->

	<div class="sales-analytic">
		<h2>Sale Analytics</h2>
		<div class="item online">
			<div class="icon">
				<span class="material-icons-sharp"> shopping_cart </span>
			</div>
			<div class="right">
				<div class="info">
					<h3>ONLINE ORDERS</h3>
					<small class="text-muted">Last 24 Hours</small>
				</div>
				<h5 class="success">+39%</h5>
				<h3>3849</h3>
			</div>
		</div>
		<div class="item offline">
			<div class="icon">
				<span class="material-icons-sharp"> local_mall </span>
			</div>
			<div class="right">
				<div class="info">
					<h3>OFFLINE ORDERS</h3>
					<small class="text-muted">Last 24 Hours</small>
				</div>
				<h5 class="success"> -17%</h5>
				<h3>1100</h3>
			</div>
		</div>
		<div class="item costumers">
			<div class="icon">
				<span class="material-icons-sharp"> person </span>
			</div>
			<div class="right">
				<div class="info">
					<h3>NEW COSTUMERS</h3>
					<small class="text-muted">Last 24 Hours</small>
				</div>
				<h5 class="success"> +25%</h5>
				<h3>849</h3>
			</div>
		</div>
		<div class="item add-product">
			<div>
				<span class="material-icons-sharp"> add </span>
				<h3>Add Product</h3>
			</div>
		</div>
	</div>
</div>

<!-- <script>
	let number = document.getElementById('number');
	let counter = 0;
	setInterval(() => {
		if (counter == 81) {
			clearInterval();
		} else {
			counter += 1;
			number.innerHTML = counter + "%";
			number.classList.add('text-muted')
		}
	}, 20);
</script> -->

<?php $this->view('includes/footer'); ?>