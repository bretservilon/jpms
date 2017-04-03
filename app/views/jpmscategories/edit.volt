{% extends "layouts/admin.volt"%}

{% block content %}
	<div class="panel-heading">
		Edit Category		 
	</div>
	<div class="panel-body">
	{{form("jpmscategories/edit_submit/"~id)}}
		Parent Category: {{ select(
                    'category',
                    categories,
                    'using': ['id', 'cat_title'],
                    'useEmpty': true,
                    'emptyText': (current_parent_cat_title == "") ? "base" : current_parent_cat_title, 'emptyValue': (current_parent_cat_id < 1) ? "0" : current_parent_cat_id
                   
                    ) }}
		<br><br>

		Name: <input type="text" value="{{category.cat_title}}" name="cat_title">
		<br><br>
		<button type="submit">Submit</button>
	</form>

	</div>
{% endblock %}