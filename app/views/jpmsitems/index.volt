{% extends "layouts/admin.volt"%}

{% block content %}
	<div class="panel-heading">
		Dashboard
		<a class="btn btn-success" href="{{url('jpmsitems/create')}}" title="">Create</a>
	</div>
	<div class="panel-body">
		<table class="table table-responsive table-hover table-bordered">			
			<thead>
				<tr>
					<th>Item title</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				{% for item in items %}
				<tr>
					<td>{{item.item_title}}</td>
					<td>
						{{ item.status == 1 ? "Active" : "Inactive"  }}
					</td>
					<td><a class="btn btn-primary" href="{{url('jpmsitems/edit/'~item.id)}}">Edit</a></td>
				</tr>
				{% endfor %}
			</tbody>
		</table>
	</div>
{% endblock %}