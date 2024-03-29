<?php include_once("./header.php"); ?>
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					    <div class="breadcrumbs">
					       <h2>My Account</h2> 
					       <ul class="breadcrumbs-list">
						        <li>
						            <a title="Return to Home" href="index.php">Home</a>
						        </li>
						        <li>My Account</li>
						    </ul>
					    </div>
					</div>
				</div>
			</div>
		</div> 
        <!-- Breadcrumbs Area Start -->
        <!-- My Account Area Start -->
		<div class="my-account-area section-padding">
			<div class="container">
				<div class="section-title2">
					<h2>Procced to Checkout</h2>
					<p>Welcome to your account. Here you can manage all of your personal information and orders.</p>
				</div>
				<div class="row">
					<div class="addresses-lists">
						<div class="col-xs-12 col-sm-6 col-lg-6">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<i class="fa fa-building"></i>
											   <span>Add my first address</span>
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											<div class="coupon-info">
												<h1 class="heading-title">Your addresses </h1>
												<p class="coupon-text">To add a new address, please fill out the form below.</p>
												<p class="required">*Required field</p>
												<form action="#">
													<p class="form-row">
														<input type="text" placeholder="Your Full Name *">
													</p>
													<p class="form-row">
														<input type="text" placeholder="Address *">
													</p>
													<p class="form-row">
														<input type="text" placeholder="City *" />
													</p>
													<div class="shop-select">
														<label>Country <span class="required">*</span></label>
														<select>
															<option value="volvo">Bangladesh</option>
															<option value="saab">Algeria</option>
															<option value="mercedes">Afghanistan</option>
															<option value="audi">Ghana</option>
															<option value="audi2">Albania</option>
															<option value="audi3">Bahrain</option>
															<option value="audi4">Colombia</option>
															<option value="audi5">Dominican Republic</option>
														</select> 										
													</div>	
													<p class="form-row">
														<input type="text" placeholder="Mobile phone *" />
													</p>
													<p class="required">** You must register at least one phone number.</p>
													<p class="form-row order-notes">
														<textarea placeholder="Additional information"></textarea>
													</p>
													<p class="form-row">
														<input type="text" placeholder="Please assign an address title for future reference. *" />
													</p>
													<a title="Save" class="btn button button-small" href="index.php">
														<span>
															  Save
															<i class="fa fa-chevron-right"></i>
														</span>
													</a>
												</form>
											</div>											
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<i class="fa fa-list-ol"></i>
												<span>My credit slips</span>
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body">
											<div class="coupon-info">
												<h1 class="heading-title">Order history </h1>
												<p class="coupon-text">Here are the orders you've placed since your account was created.</p>
												<div class="order-history">
													<p class="alert">You have not placed any orders.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												<i class="fa fa-file-o"></i>
												<span>My addresses</span>
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="panel-body">
											<div class="coupon-info">
												<h1 class="heading-title">Order history </h1>
												<p class="coupon-text">Here are the orders you've placed since your account was created.</p>
												<div class="order-history">
													<p class="alert">You have not placed any orders.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingFour">
										<h4 class="panel-title">
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												<i class="fa fa-building"></i>
												<span>My personal information</span>
											</a>
										</h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
										<div class="panel-body">
											<div class="coupon-info">
												<h1 class="heading-title">Your personal information</h1>
												<p class="coupon-text">Please be sure to update your personal information if it has changed.</p>
												<p class="required">*Required field</p>
												<form action="#">
													<div class="form-row">
														<label><span class="required">*</span>Social title</label>
														<div class="radio-inline">
															<label class="top">
																<span class="checked">
																	<input type="radio" /> 
																</span>
																Mr.
															</label>
														</div>
														<div class="radio-inline">
															<label class="top">
																<span class="checked">
																	<input type="radio" /> 
																</span>
																Mrs.
															</label>
														</div>
													</div>
													<p class="form-row">
														<input type="text" placeholder="Your Full Name *" />
													</p>
													<p class="form-row">
														<input type="text" placeholder="E-mail address" />
													</p>
													<div class="country-select shop-select">
														<label>Date of Birth</label>
														<div class="row">
															<div class="col-xs-4">
																<select>
																	<option>1</option>
																	<option>2</option>
																	<option>3</option>
																	<option>4</option>
																	<option>5</option>
																	<option>6</option>
																	<option>7</option>
																	<option>8</option>
																	<option>9</option>
																	<option>10</option>
																	<option>11</option>
																	<option>12</option>
																	<option>13</option>
																	<option>14</option>
																	<option>15</option>
																	<option>16</option>
																	<option>17</option>
																	<option>18</option>
																	<option>19</option>
																	<option>20</option>
																	<option>21</option>
																	<option>22</option>
																	<option>23</option>
																	<option>24</option>
																	<option>25</option>
																	<option>26</option>
																	<option>27</option>
																	<option>28</option>
																	<option>29</option>
																	<option>30</option>
																</select> 																
															</div>
															<div class="col-xs-4">
																<select>
																	<option>January</option>
																	<option>February </option>
																	<option>March </option>
																	<option>April </option>
																	<option>May </option>
																	<option>June </option>
																	<option>July </option>
																	<option>August </option>
																	<option>September </option>
																	<option>October </option>
																	<option>November </option>
																	<option>December </option>
																</select> 																
															</div>
															<div class="col-xs-4">
																<select>
																	<option>1990</option>
																	<option>1991</option>
																	<option>1992</option>
																	<option>1993</option>
																	<option>1994</option>
																	<option>1995</option>
																	<option>1996</option>
																	<option>1997</option>
																	<option>1998</option>
																	<option>1999</option>
																	<option>2000</option>
																	<option>2001</option>
																	<option>2002</option>
																	<option>2003</option>
																	<option>2004</option>
																	<option>2005</option>
																	<option>2006</option>
																	<option>2007</option>
																	<option>2008</option>
																	<option>2009</option>
																	<option>2010</option>
																	<option>2011</option>
																	<option>2012</option>
																	<option>2013</option>
																	<option>2014</option>
																	<option>2016</option>
																	<option>2016</option>
																	<option>2017</option>
																	<option>2018</option>
																	<option>2019</option>
																	<option>2020</option>
																</select> 																
															</div>
														</div>										
													</div>
													<p class="form-row">
														<input type="text" placeholder="Current Password" />
													</p>
													<p class="form-row">
														<input type="text" placeholder="New Password" />
													</p>
													<p class="form-row">
														<input type="text" placeholder="Confirmation" />
													</p>
													<div class="checkbox">
														<label>
															<span><input type="checkbox" /></span>
															Sign up for our newsletter!
														</label>
													</div>
													<div class="checkbox">
														<label>
															<span><input type="checkbox" /></span>
															Receive special offers from our partners!
														</label>
													</div>
													<a title="Save" class="btn button button-small" href="index.php">
														<span>
															  Save
															<i class="fa fa-chevron-right"></i>
														</span>
													</a>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-6">
							<div class="myaccount-link-list">								
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a  href="wishlist.php">
												<i class="fa fa-heart"></i>
												<span>My wishlists</span>
											</a>
										</h4>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a  href="cart.php">
												<i class="fa fa-list-ol"></i>
												<span>Order history and details</span>
											</a>
										</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="create-account-button pull-left">
							<a href="index.php" class="btn button button-small" title="Home">
								<span>
									<i class="fa fa-chevron-left"></i>
									  Home
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- My Account Area End -->
        <?php include_once("./footer.php"); ?>