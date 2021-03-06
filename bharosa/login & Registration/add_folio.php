<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Folio</title>

		<meta name="description" content="3 styles with inline editable feature" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/jquery.gritter.min.css" />
		<link rel="stylesheet" href="assets/css/select2.min.css" />
		<link rel="stylesheet" href="assets/css/datepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-editable.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/fonts/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <link rel="stylesheet" href="assets/css/mine.css"  />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">

		<?php include 'navbar.php';?>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<?php include 'sidebar.php';?>
			
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li> <i class="ace-icon fa fa-home home-icon"></i> You are viewing <strong>"Viveka Nand Bharti's (CAN : XXXXXJCAXX)"</strong> profile</li>
						</ul><!-- /.breadcrumb -->

						 <!-- /.nav-search -->
					</div>

					<div class="page-content">

						<div class="page-header">
							<h1>
								Folio
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Add Folio
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>

									Data Saved
									<strong class="green">
										Successfuly
									</strong>,
								</div>
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form">
                                    <div class="form-group has-warning">
                                      <label for="txtAccnt" class="col-xs-12 col-sm-3 control-label no-padding-right">Folio Number<span class="text-danger">*</span></label>
                                      <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                                        <input type="text" id="folioNumber" name="folioNumber" class="width-100" placeholder="Enter Folio Number" />
                                        </span> </div>
                                    </div>
                                    <div class="form-group has-warning">
                                      <label for="radAcType" class="col-xs-12 col-sm-3 control-label no-padding-right">Fund House<span class="text-danger">*</span></label>
                                      <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                                        <select name="fundHouse" class="margin-reset" id="fundHouse">
                                          <option value="">Select an option</option>
                                          <option value="1">Axis Mutual Fund</option>
                                          <option value="2">Birla Sunlife Mutual Fund</option>
                                          <option value="3">DSP Blackrock Mutual Fund</option>
                                          <option value="4">Edelweiss Mutual Fund</option>
                                          <option value="5">Frankin Templeton Mutual Fund</option>
                                          <option value="6">HDFC Mutual Fund</option>
                                          <option value="7">ICICI Prudential Mutual Fund</option>
                                          <option value="8">IDBI Mutual Fund</option>
                                          <option value="9">IDFC Mutual Fund</option>
                                          <option value="10">IIFL Mutual Fund</option>
                                          <option value="11">Indiabulls Mutual Fund</option>
                                          <option value="12">Kotak Mutual Fund</option>
                                          <option value="13">L &amp; T Mutual Fund</option>
                                          <option value="14">Motilal Oswal Mutual Fund</option>
                                          <option value="15">Peerless Mutual Fund</option>
                                          <option value="16">PPFAS Mutual Fund</option>
                                          <option value="17">Principal Mutual Fund</option>
                                          <option value="18">Quantum Mutual Fund</option>
                                          <option value="19">Reliance Mutual Fund</option>
                                          <option value="20">Religare Mutual Fund</option>
                                          <option value="21">SBI Mutual Fund</option>
                                          <option value="22">Sundaram Mutual Fund</option>
                                          <option value="23">Tata Mutual Fund</option>
                                          <option value="24">Taurus Mutual Fund</option>
                                          <option value="25">UTI Mutual Fund</option>
                                        </select>
                                        </span> </div>
                                    </div>
                                    
                                    <div class="form-group has-warning">
                                      <label for="radAcType" class="col-xs-12 col-sm-3 control-label no-padding-right">Scheme Name<span class="text-danger">*</span></label>
                                      <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                                        <select name="fundHouse" class="margin-reset" id="fundHouse">
                                          <option value="">Select Scheme Name</option>
                                          <option value="1">Axis Mutual Fund</option>
                                          <option value="2">Birla Sunlife Mutual Fund</option>
                                          <option value="3">DSP Blackrock Mutual Fund</option>
                                           <option value="21">SBI Mutual Fund</option>
                                          <option value="22">Sundaram Mutual Fund</option>
                                          <option value="23">Tata Mutual Fund</option>
                                          <option value="24">Taurus Mutual Fund</option>
                                          <option value="25">UTI Mutual Fund</option>
                                        </select>
                                        </span> </div>
                                    </div>
                                    <div class="form-group has-warning">
                                      <label for="txtDob" class="col-xs-12 col-sm-3 control-label no-padding-right">Mode Of Operation </label>
                                      <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                                        <input name="usergender" value="Male" type="radio" class="ace input-lg" checked="">
                                        <span class="lbl"> Single</span>
                                        <input name="usergender" value="Female" type="radio" class="ace input-lg">
                                        <span class="lbl"> Joint</span> </span> </div>
                                    </div>
                                    <div class="form-group has-warning">
                                      <label for="txtAccnt" class="col-xs-12 col-sm-3 control-label no-padding-right">Joint Folio Holder Name <span class="text-danger">*</span></label>
                                      <div class="col-xs-12 col-sm-5"> <span class="input-icon block input-icon-right">
                                        <input type="text" id="jointFolioHolderName" name="jointFolioHolderName" class="width-100" />
                                        </span> </div>
                                    </div>

									<div class="space-4"></div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
												<i class="ace-icon fa fa-plus bigger-110"></i>
												Add Folio
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
								</form>
								<!-- PAGE CONTENT ENDS -->
                                
                                <div class="content">
            
            <div class="table-responsive commontable">
            <h3 class="lighter block green">Folio Detail</h3>
              <table width="100%" class="table table-striped table-bordered table-hover" id="simple-table" >
                <thead>
                  <tr>
                    <th>Fund House</th>
                    <th>Scheme Name</th>
                    <th>Folio Number</th>
                    <th>Mode of Operation</th>
                    <th>Joint Holder Name</th>
                    <th>Action</th>
                    <th>Transactions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Axis Mutual Fund</td>
                    <td>Axis Long Term Equity Fund</td>
                    <td>1234</td>
                    <td>Single</td>
                    <td>Shanu</td>
                    <td><a href="javascript:void(0)" >  <i class="fa fa-trash-o"></i></a> &nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" >  <i class="fa fa-pencil"></i></a></td>
                    <td><a href="#modal_transaction"   data-toggle="modal" > <i class="ace-icon fa fa-plus bigger-110"></i></a></td>
                  </tr>
                  
                  <tr>
                    <td>Axis Mutual Fund</td>
                    <td>Axis Long Term Equity Fund</td>
                    <td>1234</td>
                    <td>Single</td>
                    <td>Shanu</td>
                    <td><a href="javascript:void(0)" >  <i class="fa fa-trash-o"></i></a> &nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" >  <i class="fa fa-pencil"></i></a></td>
                    <td><a href="#modal_transaction"   data-toggle="modal" > <i class="ace-icon fa fa-plus bigger-110"></i></a></td>
                  </tr>



                  <tr>
                    <td>Axis Mutual Fund</td>
                    <td>Axis Long Term Equity Fund</td>
                    <td>1234</td>
                    <td>Single</td>
                    <td>Shanu</td>
                    <td><a href="javascript:void(0)" >  <i class="fa fa-trash-o"></i></a> &nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" >  <i class="fa fa-pencil"></i></a></td>
                    <td><a href="#modal_transaction"   data-toggle="modal" > <i class="ace-icon fa fa-plus bigger-110"></i></a></td>
                  </tr>


                  <tr>
                    <td>Axis Mutual Fund</td>
                    <td>Axis Long Term Equity Fund</td>
                    <td>1234</td>
                    <td>Single</td>
                    <td>Shanu</td>
                    <td><a href="javascript:void(0)" >  <i class="fa fa-trash-o"></i></a> &nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" >  <i class="fa fa-pencil"></i></a></td>
                    <td><a href="#modal_transaction"   data-toggle="modal" > <i class="ace-icon fa fa-plus bigger-110"></i></a></td>
                  </tr>
                  
                  
                  </tbody>
              </table>
              
              </div>
              
            </div>
                                 
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php include 'footer.php';?><!-- /.main-container -->

			
			
			<div id="modal_transaction" class="modal fade" tabindex="-1" >
  <div class="modal-dialog modalTransaction ">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="smaller lighter blue no-margin">Add Transaction</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12">
            <div   class="message-navbar2 clearfix">
              <div class="row">
                <div class="col-xs-12 col-md-6 padformSelect"  > <span class="lbl schemeName">Scheme Name : Axis Bank - Equity Manager - Growth</span> </div>
                <div class="col-xs-12 col-md-2 padformSelect"> Folio No. </div>
                <div class="col-xs-12 col-md-3 padform">
                  <select name="fundHouse" class="input-medium width-100 schemeheight" id="schemename">
                    <option value="">232</option>
                    <option value="1">1223</option>
                    <option value="2">45565</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
           <div class="table-responsive commontable">
          <table width="100%" class="table table-striped table-bordered table-hover" id="simple-table">
            <thead>
              <tr>
                <th>Date</th>
                <th>Type</th>
                <th>Amount (Rs)</th>
                <th>Units</th>
                <th>NAV (Rs)</th>
                <th>Opening Unit Balance</th>
                <th>Closing Unit Balance</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>March 15, 2016 5:42 PM</td>
                <td>Purchase</td>
                <td>5000</td>
                <td>2</td>
                <td>2000</td>
                <td>3000</td>
                <td>2000</td>
                <td><a href="javascript:void(0)" > <i class="fa fa-trash-o"></i></i></a></td>
              </tr>
              <tr>
                <td>March 15, 2016 5:42 PM</td>
                <td>Purchase</td>
                <td>5000</td>
                <td>2</td>
                <td>2000</td>
                <td>3000</td>
                <td>2000</td>
                <td><a href="javascript:void(0)" > <i class="fa fa-trash-o"></i> &nbsp;&nbsp; <i class="ace-icon fa fa-plus "></i></a></td>
              </tr>
            </tbody>
          </table>
          </div>
          <div class="clearfix form-actions">
            <div class="col-md-offset-3 col-md-9">
              <button class="btn btn-info" type="button"> <i class="ace-icon fa fa-check bigger-110"></i> Save </button>
              &nbsp; &nbsp; &nbsp;
              <button class="btn" type="reset"> <i class="ace-icon fa fa-undo bigger-110"></i> Reset </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
  <!-- /.modal-dialog --> 
</div>
			
		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery.2.1.1.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery.1.11.1.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.gritter.min.js"></script>
		<script src="assets/js/bootbox.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/jquery.hotkeys.min.js"></script>
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/fuelux.spinner.min.js"></script>
		<script src="assets/js/bootstrap-editable.min.js"></script>
		<script src="assets/js/ace-editable.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			
				//editables on first profile page
				$.fn.editable.defaults.mode = 'inline';
				$.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
			    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
			                                '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';    
				
				//editables 
				
				//text editable
			    $('#username')
				.editable({
					type: 'text',
					name: 'username'
			    });

				//text editable
			    $('#emailid')
				.editable({
					type: 'text',
					name: 'emailid'
			    });				
			
				//text editable
			    $('#mobno')
				.editable({
					type: 'text',
					name: 'mobno'
			    });	
				
				//select2 editable
				var countries = [];
			    $.each({ "CA": "Canada", "IN": "India", "US": "United States"}, function(k, v) {
			        countries.push({id: k, text: v});
			    });
			
				var cities = [];
				cities["CA"] = [];
				$.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
					cities["CA"].push({id: v, text: v});
				});
				cities["IN"] = [];
				$.each(["New Delhi", "Mumbai", "Bangalore"] , function(k, v){
					cities["IN"].push({id: v, text: v});
				});
				cities["US"] = [];
				$.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
					cities["US"].push({id: v, text: v});
				});
				
				var currentValue = "IN";
			    $('#country').editable({
					type: 'select2',
					value : 'IN',
					//onblur:'ignore',
			        source: countries,
					select2: {
						'width': 140
					},		
					success: function(response, newValue) {
						if(currentValue == newValue) return;
						currentValue = newValue;
						
						var new_source = (!newValue || newValue == "") ? [] : cities[newValue];
						
						//the destroy method is causing errors in x-editable v1.4.6+
						//it worked fine in v1.4.5
						/**			
						$('#city').editable('destroy').editable({
							type: 'select2',
							source: new_source
						}).editable('setValue', null);
						*/
						
						//so we remove it altogether and create a new element
						var city = $('#city').removeAttr('id').get(0);
						$(city).clone().attr('id', 'city').text('Select City').editable({
							type: 'select2',
							value : null,
							//onblur:'ignore',
							source: new_source,
							select2: {
								'width': 140
							}
						}).insertAfter(city);//insert it after previous instance
						$(city).remove();//remove previous instance
						
					}
			    });
			
				$('#city').editable({
					type: 'select2',
					value : 'New Delhi',
					//onblur:'ignore',
			        source: cities[currentValue],
					select2: {
						'width': 140
					}
			    });
			
			
				
				//custom date editable
				$('#signup').editable({
					type: 'adate',
					date: {
						//datepicker plugin options
						    format: 'dd/mm/yyyy',
						viewformat: 'dd/mm/yyyy',
						 weekStart: 1
						 
						//,nativeUI: true//if true and browser support input[type=date], native browser control will be used
						//,format: 'yyyy-mm-dd',
						//viewformat: 'yyyy-mm-dd'
					}
				})
			
			    $('#age').editable({
			        type: 'spinner',
					name : 'age',
					spinner : {
						min : 16,
						max : 99,
						step: 1,
						on_sides: true
						//,nativeUI: true//if true and browser support input[type=number], native browser control will be used
					}
				});
				
			
			    $('#login').editable({
			        type: 'slider',
					name : 'login',
					
					slider : {
						 min : 1,
						  max: 50,
						width: 100
						//,nativeUI: true//if true and browser support input[type=range], native browser control will be used
					},
					success: function(response, newValue) {
						if(parseInt(newValue) == 1)
							$(this).html(newValue + " hour ago");
						else $(this).html(newValue + " hours ago");
					}
				});
			
				$('#about').editable({
					mode: 'inline',
			        type: 'wysiwyg',
					name : 'about',
			
					wysiwyg : {
						//css : {'max-width':'300px'}
					},
					success: function(response, newValue) {
					}
				});
				
				
				
				// *** editable avatar *** //
				try {//ie8 throws some harmless exceptions, so let's catch'em
			
					//first let's add a fake appendChild method for Image element for browsers that have a problem with this
					//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
					try {
						document.createElement('IMG').appendChild(document.createElement('B'));
					} catch(e) {
						Image.prototype.appendChild = function(el){}
					}
			
					var last_gritter
					$('#avatar').editable({
						type: 'image',
						name: 'avatar',
						value: null,
						image: {
							//specify ace file input plugin's options here
							btn_choose: 'Change Avatar',
							droppable: true,
							maxSize: 110000,//~100Kb
			
							//and a few extra ones here
							name: 'avatar',//put the field name here as well, will be used inside the custom plugin
							on_error : function(error_type) {//on_error function will be called when the selected file has a problem
								if(last_gritter) $.gritter.remove(last_gritter);
								if(error_type == 1) {//file format error
									last_gritter = $.gritter.add({
										title: 'File is not an image!',
										text: 'Please choose a jpg|gif|png image!',
										class_name: 'gritter-error gritter-center'
									});
								} else if(error_type == 2) {//file size rror
									last_gritter = $.gritter.add({
										title: 'File too big!',
										text: 'Image size should not exceed 100Kb!',
										class_name: 'gritter-error gritter-center'
									});
								}
								else {//other error
								}
							},
							on_success : function() {
								$.gritter.removeAll();
							}
						},
					    url: function(params) {
							// ***UPDATE AVATAR HERE*** //
							//for a working upload example you can replace the contents of this function with 
							//examples/profile-avatar-update.js
			
							var deferred = new $.Deferred
			
							var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
							if(!value || value.length == 0) {
								deferred.resolve();
								return deferred.promise();
							}
			
			
							//dummy upload
							setTimeout(function(){
								if("FileReader" in window) {
									//for browsers that have a thumbnail of selected image
									var thumb = $('#avatar').next().find('img').data('thumb');
									if(thumb) $('#avatar').get(0).src = thumb;
								}
								
								deferred.resolve({'status':'OK'});
			
								if(last_gritter) $.gritter.remove(last_gritter);
								last_gritter = $.gritter.add({
									title: 'Avatar Updated!',
									text: 'Uploading to server can be easily implemented. A working example is included with the template.',
									class_name: 'gritter-info gritter-center'
								});
								
							 } , parseInt(Math.random() * 800 + 800))
			
							return deferred.promise();
							
							// ***END OF UPDATE AVATAR HERE*** //
						},
						
						success: function(response, newValue) {
						}
					})
				}catch(e) {}
				
				/**
				//let's display edit mode by default?
				var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
				if(blank_image) {
					$('#avatar').editable('show').on('hidden', function(e, reason) {
						if(reason == 'onblur') {
							$('#avatar').editable('show');
							return;
						}
						$('#avatar').off('hidden');
					})
				}
				*/
			
				//another option is using modals
				$('#avatar2').on('click', function(){
					var modal = 
					'<div class="modal fade">\
					  <div class="modal-dialog">\
					   <div class="modal-content">\
						<div class="modal-header">\
							<button type="button" class="close" data-dismiss="modal">&times;</button>\
							<h4 class="blue">Change Avatar</h4>\
						</div>\
						\
						<form class="no-margin">\
						 <div class="modal-body">\
							<div class="space-4"></div>\
							<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
						 </div>\
						\
						 <div class="modal-footer center">\
							<button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
							<button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
						 </div>\
						</form>\
					  </div>\
					 </div>\
					</div>';
					
					
					var modal = $(modal);
					modal.modal("show").on("hidden", function(){
						modal.remove();
					});
			
					var working = false;
			
					var form = modal.find('form:eq(0)');
					var file = form.find('input[type=file]').eq(0);
					file.ace_file_input({
						style:'well',
						btn_choose:'Click to choose new avatar',
						btn_change:null,
						no_icon:'ace-icon fa fa-picture-o',
						thumbnail:'small',
						before_remove: function() {
							//don't remove/reset files while being uploaded
							return !working;
						},
						allowExt: ['jpg', 'jpeg', 'png', 'gif'],
						allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
					});
			
					form.on('submit', function(){
						if(!file.data('ace_input_files')) return false;
						
						file.ace_file_input('disable');
						form.find('button').attr('disabled', 'disabled');
						form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");
						
						var deferred = new $.Deferred;
						working = true;
						deferred.done(function() {
							form.find('button').removeAttr('disabled');
							form.find('input[type=file]').ace_file_input('enable');
							form.find('.modal-body > :last-child').remove();
							
							modal.modal("hide");
			
							var thumb = file.next().find('img').data('thumb');
							if(thumb) $('#avatar2').get(0).src = thumb;
			
							working = false;
						});
						
						
						setTimeout(function(){
							deferred.resolve();
						} , parseInt(Math.random() * 800 + 800));
			
						return false;
					});
							
				});
			
				
			
				//////////////////////////////
				$('#profile-feed-1').ace_scroll({
					height: '250px',
					mouseWheelLock: true,
					alwaysVisible : true
				});
			
				$('a[ data-original-title]').tooltip();
			
				$('.easy-pie-chart.percentage').each(function(){
				var barColor = $(this).data('color') || '#555';
				var trackColor = '#E2E2E2';
				var size = parseInt($(this).data('size')) || 72;
				$(this).easyPieChart({
					barColor: barColor,
					trackColor: trackColor,
					scaleColor: false,
					lineCap: 'butt',
					lineWidth: parseInt(size/10),
					animate:false,
					size: size
				}).css('color', barColor);
				});
			  
				///////////////////////////////////////////
			
				//right & left position
				//show the user info on right or left depending on its position
				$('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
					var $this = $(this);
					var $parent = $this.closest('.tab-pane');
			
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $this.offset();
					var w2 = $this.width();
			
					var place = 'left';
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
					
					$this.find('.popover').removeClass('right left').addClass(place);
				}).on('click', function(e) {
					e.preventDefault();
				});
			
			
				///////////////////////////////////////////
				$('#user-profile-3')
				.find('input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Change avatar',
					btn_change:null,
					no_icon:'ace-icon fa fa-picture-o',
					thumbnail:'large',
					droppable:true,
					
					allowExt: ['jpg', 'jpeg', 'png', 'gif'],
					allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
				})
				.end().find('button[type=reset]').on(ace.click_event, function(){
					$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
				})
				.end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				})
				$('.input-mask-phone').mask('(999) 999-9999');
			
				$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);
			
			
				////////////////////
				//change profile
				$('[data-toggle="buttons"] .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('.user-profile').parent().addClass('hide');
					$('#user-profile-'+which).parent().removeClass('hide');
				});
				
				$('[data-rel=popover]').popover({container:'body'});
				
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					try {
						$('.editable').editable('destroy');
					} catch(e) {}
					$('[class*=select2]').remove();
				});
			});
		</script>
	</body>
</html>
