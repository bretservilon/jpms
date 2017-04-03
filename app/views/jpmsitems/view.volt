{% extends "layouts/products.volt" %}


{% block content %}
	
	<div class="row">
			<h1 class="heading">{{item_title}}</h1>
			<div class="headul"></div>
			
			<div class="product-full">
					<!-- <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 info inviewport animated delay1" data-effect="fadeIn">
						<h3 class="title"><a href="blog-single.html">TEN AMAZING AND STRANGE PICTURES BY PROFESSIONALS</a></h3>
						<h3 class="price"><span class="label">OFFER PRICE:</span> <span class="text-primary">$19.99</span> <span class="discount">MRP: $29.99</span> <span class="percent">(Flat 30% OFF)</span></h3>
					</div> -->

					<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 media inviewport animated delay1" data-effect="fadeIn">
						<img alt="product-image"	 width="380px" height="350px" src="{{url()}}public/files/big_pics/{{item.big_pic}}">
					</div>

					<div class="clearfix"></div>

					<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 info inviewport animated delay1" data-effect="fadeIn">
						<h4>Specifications</h4>
						<p class="margin-bottom-25">{{item.item_}}</p>
							<ul class="margin-bottom-50">
								<li>Donec pede justo, fringilla, aliquet nec, vulputatee</li>
								<li>Donec pede justo, fringilla, aliquet nec, vulputatee</li>
								<li>Donec pede justo, fringilla, aliquet nec, vulputatee</li>
								<li>Donec pede justo, fringilla, aliquet nec, vulputatee</li>
								<li>Donec pede justo, fringilla, aliquet nec, vulputatee</li>
								<li>Donec pede justo, fringilla, aliquet nec, vulputatee</li>
							</ul>
						<h4>Technical Details</h4>
						<p class="margin-bottom-25">Donec pede justo, fringilla, aliquet nec, vulputatee egerdiet erdiett arcu. In  justo, rhoncus ut, imperdiet a, venenatis vitaerdiet erde justo. llam dictum felis eu pede mollis pretium diet a, venenatis vita sto. Nullam dictum felis eu pede mollis pretiumdiet a, venenatis ie ust. ullam dictum felis eu pedemol iumpretium ieta.</p>
							<ul class="margin-bottom-50">
								<li>Donec pede justo, fringilla, aliquet nec, vulputatee</li>
								<li>Donec pede justo, fringilla, aliquet nec, vulputatee</li>
								<li>Donec pede justo, fringilla, aliquet nec, vulputatee</li>
								<li>Donec pede justo, fringilla, aliquet nec, vulputatee</li>
								<li>Donec pede justo, fringilla, aliquet nec, vulputatee</li>
								<li>Donec pede justo, fringilla, aliquet nec, vulputatee</li>
							</ul>
					</div>

					<div class="clearfix"></div>
				
					<!-- Comments Section - Start -->

	   </div>	


	</div>

{% endblock %}	