{% extends "layouts/admin.volt"%}

{% block content %}
	<div class="panel-heading">
		Create Category		 
	</div>
	<div class="panel-body">
	{{form("jpmscategories/submit")}}
		Parent Category: {{ select(
                'category',
                 categoriess,
                 'using': ['id', 'cat_title'],
                'useEmpty': true,
                'emptyText': 'Base', 'emptyValue': '0'                
                ) }}
		<br><br>

		Name: <input type="text" name="cat_title">
		<br><br>
		<button type="submit">Submit</button>
	</form>

	</div>
{% endblock %}