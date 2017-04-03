{% extends "layouts/admin.volt"%}

{% block content %}
	
	<div class="panel-body">
		 {{form("jpmsitems/uploadimage_submit/"~ id, "class": "form-horizontal","enctype": "multipart/form-data")}}                      
            		 
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Upload Image</label>
                              <div class="col-sm-10">
 								{{ file_field("big_pic", "class": "form-control", "placeholder": "Choose picture", "required": "") }}
 							  </div>
                          </div><br>
                          <div class="form-group">
                              
                              <div class="col-sm-10" align="center">
 								{{ submit_button("Upload", "class": "btn btn-primary")}}
	              				{{ link_to("jpmsitems/edit/"~id, "Cancel", "class": "btn btn-default")}}
 							  </div>
                          </div>

                      </form>


	</div>
{% endblock %}