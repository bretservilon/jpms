{% extends "layouts/admin.volt"%}

{% block content %}
	<div class="panel-heading">
	
	{{form("jpmscatassign/submit/"~ item_id, "class": "form-horizontal")}}

                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                        {{ select   (
                        'cat_id',
                        sub_categories,
                        'using': ['id'],
                        'useEmpty': true,
                        'emptyText': "Choose category", 'emptyValue': "",
                        'class': "form-control",
                        'required': ""
                        ) }}
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-sm-10" align="center">
                        {{ submit_button("Upload", "class": "btn btn-primary")}}
                        {{ link_to("jpmsitems/edit/"~item_id, "Cancel", "class": "btn btn-default")}}
                    </div>
                </div>

                </form>
	

	</div>

	{% if query|length > 0 %}
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i> Categories</h4>
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>
                            <tr>
                                <th>Count</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for row in query %}
                                {% for row1 in query_for_all_subs %}
                                    {% if row.storecategories.parent_cat_id == row1.id %}
                                        {% set parent_name = row1.cat_title %}
                                    {% endif %}
                                {% endfor %}
                                <tr>
                                    <td>{{ loop.index }}</td>
                                    <td>
                                        {{ parent_name ~ " => " ~ row.storecategories.cat_title }}
                                    </td>
                                    <td>{{ link_to("jpmscatassign/delete/"~row.id, "Delete", "class":"btn btn-danger" , "onclick": "return confirm('Are you sure you want to delete this assign category?')")}}</td>

                                </tr>
                            {% endfor %}
                            </tbody>

                        </table>
                    </section>
                </div><!-- /content-panel -->
            </div><!-- /col-lg-4 -->
        </div>
    {% endif %}
{% endblock %}