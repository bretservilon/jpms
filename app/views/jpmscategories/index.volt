{% extends "layouts/admin.volt"%}

{% block content %}
	<div class="panel-heading">
		Categories
		<a class="btn btn-success" href="{{url('jpmscategories/create')}}" title="">Create</a>
	</div>
	<div class="panel-body">
		<table class="table table-responsive table-hover table-bordered">			
			<thead>
				<tr>
					<th>Category Title</th>					
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				{% for cat in categories %}
				<tr>
					<td>{{cat.cat_title}}</td>
					
					<td><a class="btn btn-primary" href="{{url('jpmscategories/edit/'~cat.id)}}">Edit</a>
					<a class="btn btn-info" href="{{url('jpmscategories/index/'~cat.id)}}">View Inside</a>
					</td>
					
				</tr>
				{% endfor %}
			</tbody>
		</table>
	</div>
{% endblock %}