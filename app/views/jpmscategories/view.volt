{% extends "layouts/products.volt" %}


{% block content %}
	
	<div class="row">
			<h1 class="heading">{{cat_title}}</h1>
			<div class="headul"></div>
			
			<div class='products'>
				
		<!-- Product Box - Start -->
		{% for item in items %}			
			<div class="col-lg-4 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 product inviewport animated delay1" data-effect="fadeInUp">				
				<div class="pic">
					<img alt="product-image" width="380px" height="350px" src="{{url()}}public/files/big_pics/{{item.big_pic}}">

					<div class="cart-layer transition">
							<a class="" href="{{url()}}product/{{item.item_url}}"><i class="mdi mdi-image-area"></i></a>
						</div>
				</div>
				<div class="info">
				<h4 class="text-on-primary"><a href="{{url()}}">{{item.item_title}}</a></h4>
			</div>			
			</div>
		{% endfor %}

			</div>
	   </div>

       	 {% if item|length > 10 %}      
	     <div class="row">
	       	<div class="col-xs-12 product_pagination">
	       	<ul class="pagination">
	                                                <li><a href="#">&laquo;</a></li>
	                                                <li><a href="#">1</a></li>
	                                                <li class="active"><a href="#">2</a></li>
	                                                <li><a href="#">3</a></li>
	                                                <li><a href="#">4</a></li>
	                                                <li><a href="#">5</a></li>
	                                                <li><a href="#">&raquo;</a></li>
	                                            </ul>
		       </div>
		</div>
		{% endif %}
		
	


	</div>

{% endblock %}	