{% extends "layouts/admin.volt"%}

{% block content %}
	<div class="panel-heading">
	{% if item.big_pic %}
		{{ link_to("jpmsitems/delete_image/"~ item.id, "Delete Image", "class": "btn btn-danger" )}}
	{% else %}
		    {{ link_to("jpmsitems/upload_image/"~ item.id, "Upload Image", "class": "btn btn-primary" )}}
	{% endif %}	
		{{ link_to("jpmscatassign/update/"~ item.id, "Update Item Categories", "class": "btn btn-primary" )}}
	</div>

	<div class="col-md-7 col-md-offset-2">
        {% if item.big_pic %}
        	<div class="form-panel">
				{% set big_pic_path = "public/files/big_pics/"~item.big_pic %}            
	  			{{ image(big_pic_path, "class": "img-responsive") }}    			
  			</div>
  		{% endif %}
            
    </div>

    <br><br>
	<div class="panel-body">
	{{form("jpmsitems/edit_submit/"~item.id)}}
		Title: <input type="text" value="{{item.item_title}}" name="item_title">
		<br><br>
		Status: <select name="status">
			<option value="{{item.status}}">{{item.status == 1 ? "Active": "Not Active"}}</option>
			<option value="1">Active</option>
			<option value="0">Not Active</option>
			
		</select>
		<br><br>
		Description:
		<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
		<textarea name="item_description">{{item.item_description}}</textarea>
        <script>
            CKEDITOR.replace( 'item_description' );
        </script>


		<br><br>
		<button type="submit">Submit</button>
	</form>

	</div>
{% endblock %}