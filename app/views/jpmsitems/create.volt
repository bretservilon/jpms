{% extends "layouts/admin.volt"%}

{% block content %}
	<div class="panel-heading">
		Create		
	</div>
	<div class="panel-body">
	{{form("jpmsitems/submit")}}
		Title: <input type="text" name="item_title">
		<br><br>
		Status: <select name="status">
			<option value="1">Active</option>
			<option value="0">Not Active</option>
			
		</select>
		<br><br>
		

		Description:
		<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
		<textarea name="item_description"></textarea>
        <script>
            CKEDITOR.replace( 'item_description' );
        </script>

		<br><br>
		<button type="submit">Submit</button>
	</form>

	</div>
{% endblock %}