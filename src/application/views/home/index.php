<!-- /*
* Template Name: Blogy
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="/public/assets/theme/fonts/icomoon/style.css">
	<link rel="stylesheet" href="/public/assets/theme/fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

	<link rel="stylesheet" href="/public/assets/theme/css/tiny-slider.css">
	<link rel="stylesheet" href="/public/assets/theme/css/aos.css">
	<link rel="stylesheet" href="/public/assets/theme/css/glightbox.min.css">
	<link rel="stylesheet" href="/public/assets/theme/css/style.css">

	<link rel="stylesheet" href="/public/assets/theme/css/flatpickr.min.css">


	<title>FoxSwing &mdash; Coffee Shop</title>
    <style>
        #id-cart{
            position: relative;
        }
        #id-cart span{
            position: absolute;
            color: red;
        }
    </style>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="index.html" class="logo m-0 float-start">LamCafe<span class="text-primary">.</span></a>
						</div>
						<div class="col-8 text-center">
							<form action="#" class="search-form d-inline-block d-lg-none">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form>
                            <button id="id-cart" data-toggle="modal" data-target=".bd-example-modal-lg" style="padding:0 10px"  class="btn btn-primary" type="button"><i style="font-size: 2em;" class="bi bi-cart"></i><span></span></button>
                            
							
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>
							<form action="#" class="search-form d-none d-lg-inline-block">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="bi-search"></span>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- Start retroy layout blog posts -->
	<section class="section bg-light">
		<div class="container">
			<div class="row align-items-stretch retro-layout">
				<div class="col-md-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('/public/assets/theme/images/img_2_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Customer satisfaction is our success</h2>
						</div>
					</a>
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('/public/assets/theme/images/img_5_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Thank you for choosing our products</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="single.html" class="h-entry img-5 h-100 gradient">

						<div class="featured-img" style="background-image: url('/public/assets/theme/images/img_1_vertical.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Let's enjoy this moment</h2>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="single.html" class="h-entry mb-30 v-height gradient">

						<div class="featured-img" style="background-image: url('/public/assets/theme/images/img_3_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Don't give up</h2>
						</div>
					</a>
					<a href="single.html" class="h-entry v-height gradient">

						<div class="featured-img" style="background-image: url('/public/assets/theme/images/img_4_horizontal.jpg');"></div>

						<div class="text">
							<span class="date">Apr. 14th, 2022</span>
							<h2>Be happy with us</h2>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End retroy layout blog posts -->

	

	

	<!-- Start posts-entry -->
	

	<section class="section">
		<div class="container">

			<div class="row mb-4">
				<div class="col-sm-6">
					<h2 class="posts-entry-title">Sản phẩm</h2>
				</div>
				<!-- <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div> -->
			</div>
            
			<div class="row">
            <?php foreach($list as $item):?>
				<div class="col-lg-4 mb-4">
					<div class="post-entry-alt">
						<a href="single.html" class="img-link"><img src="<?php echo $item['IMAGE'] ?>" alt="Image" class="img-fluid"></a>
						<div class="excerpt">
							

							<h2><a href="single.html"><?php echo $item['NAME'] ?></a></h2>
							
                            <div class="post-meta align-items-center text-left clearfix">
                            <h5><b><?php echo $item['PRICE'] ?>đ</b></h5>
							</div>
							<p><?php echo $item['DESCRIPTION']?></p>
							<p><a href="#" data-id="<?php echo $item['ID'] ?>" data-name="<?php echo $item['NAME'] ?>" data-price = "<?php echo $item['PRICE'] ?>" class="read-more add-to-cart">Add to cart</a></p>
						</div>
					</div>
				</div>
                <?php endforeach;?>
				
			</div>
			
		</div>
	</section>

	


	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">About</h3>
						<p>Never stop dreaming, never stop believing, never give up, never stop trying, and never stop learning</p>
					</div> <!-- /.widget -->
					<div class="widget">
						<h3>Social</h3>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4 ps-lg-5">
					<div class="widget">
						<h3 class="mb-4">Company</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Vision</a></li>
							<li><a href="#">Mission</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Privacy</a></li>
						</ul>
						<ul class="list-unstyled float-start links">
							<li><a href="#">Partners</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Creative</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<div class="widget">
						<h3 class="mb-4">Recent Post Entry</h3>
						<div class="post-entry-footer">
							<ul>
								<li>
									<a href="">
										<img src="/public/assets/theme/images/img_1_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="/public/assets/theme/images/img_2_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="">
										<img src="/public/assets/theme/images/img_3_sq.jpg" alt="Image placeholder" class="me-4 rounded">
										<div class="text">
											<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
											<div class="post-meta">
												<span class="mr-2">March 15, 2018 </span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>


					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

			<div class="row mt-5">
				<div class="col-12 text-center">
          <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed by <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      </div> <!-- /.container -->
    </footer> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>

    <!-- modal gio hang -->
    <div class="modal fade bd-example-modal-lg" id="id-modal-cart" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Giỏ hàng</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button> -->
                </div>
                <div class="modal-body">
                    <form>
                        <div id="id-list-cart" class="mb-4"></div>
						<div class="text-right" style="text-align: right; font-weight: bold;" id="total-cart"></div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="/public/assets/theme/js/bootstrap.bundle.min.js"></script>
    <script src="/public/assets/theme/js/tiny-slider.js"></script>

    <script src="/public/assets/theme/js/flatpickr.min.js"></script>


    <script src="/public/assets/theme/js/aos.js"></script>
    <script src="/public/assets/theme/js/glightbox.min.js"></script>
    <script src="/public/assets/theme/js/navbar.js"></script>
    <script src="/public/assets/theme/js/counter.js"></script>
    <script src="/public/assets/theme/js/custom.js"></script>

    <script>
        var keyCart = 'carts';
        $(document).ready(function(){
            initCart();
            $(document).on('click', '.add-to-cart', function(){
                addCart($(this));
            })

            $(document).on('click', '#id-cart', function(){
                showCart();
                
            })

            $(document).on('click', '.item-p-cart a', function(){
                
                deleteItemInCart($(this));
                
            })

			$(document).on('change', '.item-p-cart input[type=number]', function(){
				var arr = getDataCart();
				$(this).closest('#id-list-cart').find('.item-p-cart').each(function(){
					var id = $(this).find('input[type=hidden]').val();
					var number = $(this).find('input[type=number]').val();
					var index = arr.findIndex(function(elm){
						return elm.id == id;
					})
					if(index!==-1){
						var item = arr[index];
						item.num = Number(number);
						arr[index] = item;
					}

				});
				setDataCart(arr);
				showCart();
				
				var id = $(this).closest('.item-p-cart').find('input[type=hidden]').val();
			})

            $(document).on('submit', 'form', function(){
                $.post( "/index.php/home/addCart", $(this).serialize(), function(data) {
                    if(data && data.success){
                        alert('Đã đặt hàng thành công!');
                        setDataCart([]);
                        initCart();
                        $('#id-modal-cart').modal('hide');
                    }else{
                        alert('Lỗi vui lòng quay lại sau!');
                    }
                    
                }, 'json')
                return false;
            })
            
            
        });

        function showCart(){
            var arr = getDataCart();
            if(arr.length === 0){
                $('#id-modal-cart').modal('hide');
                alert('Không có sản phẩm nào trong giỏ hàng!');
                
                return;
            }
            var htmlList = '';
			var total = 0;
            for(var i = 0; i < arr.length; i++){
				total += Number(arr[i]['num']) * Number(arr[i]['price']);
                htmlList += '<div class="item-p-cart border-bottom d-flex justify-content-between mb-2 pb-2"><input  type="hidden" value="'+arr[i]['id']+'" name="product['+i+'][id]"/><span>'+arr[i]['name']+'</span> <input type="number" min="1" style="width: 50px" name="product['+i+'][num]" value="'+arr[i]['num']+'"/> <span>'+arr[i]['price']+'</span> <a href="#" class="text-danger"><i class="bi bi-x-circle-fill"></i></a></div>'
            }
            $('#id-list-cart').html(htmlList);
			$('#total-cart').html(total);
            $('#id-modal-cart').modal('show');
        }

        /**
         * delete item cart
         */
        function deleteItemInCart(obj){
            var id = obj.closest('div').find('input[type=hidden]').val();
            
            var arr = getDataCart();
            var index = arr.findIndex((elm) => elm.id == id);
            if(index !== -1){
                arr.splice(index, 1);
            }
            setDataCart(arr);
            showCart();
            initCart();
            return false;
        }

        /**
         * show num product in cart
         */
        function initCart(){
            var objCart = $('#id-cart');
            var arr = getDataCart();
            if(arr.length === 0){
                objCart.find('span').hide();
            }else{
                objCart.find('span').html(arr.length);
                objCart.find('span').show();
            }
        }

        /**
         * add product to cart
         */
        function addCart(obj){
            var id =  obj.attr('data-id');
                var name = obj.attr('data-name');
				var price = obj.attr('data-price');
                var arr = getDataCart();
                var find = arr.find((elm) => elm.id == id);
                if(find){
                    alert('Mặt hàng này đã có trong giỏ hàng');
                    return false;
                }
                arr.push({id: id, name: name, num: 1, price: price});
                setDataCart(arr);
                initCart();
                return;
        }

        /**
         * get data cart in localStorage
         */
        function getDataCart(){
            var arr = localStorage.getItem(keyCart);
                if(arr){
                    try{
                        arr = JSON.parse(arr);
                    }catch(err){
                        arr = [];
                    }
                    
                }else{
                    arr = [];
                }
            return arr;
        }

        /**
         * set data in cart
         */
        function setDataCart(arr){
            localStorage.setItem(keyCart, JSON.stringify(arr));
        }
    </script>    
  </body>
  </html>
