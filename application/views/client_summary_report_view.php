<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>JCORE - <?php echo $title; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="description" content="Avenxo Admin Theme">
        <meta name="author" content="">
        <?php echo $_def_css_files; ?>
        <link rel="stylesheet" href="assets/plugins/spinner/dist/ladda-themeless.min.css">
        <link type="text/css" href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
        <link type="text/css" href="assets/plugins/datatables/dataTables.themify.css" rel="stylesheet">
        <link href="assets/plugins/datapicker/datepicker3.css" rel="stylesheet">
        <link href="assets/plugins/select2/select2.min.css" rel="stylesheet">
        <style>
            html {
                zoom: 85%;
            }
            .panel.panel-default .panel-heading {
                border-color: transparent;
            }
            .row-border .form-group {
                padding: 5px 0;
            }
            .modal-content {
                border: 1px solid #404040;
            }
            .panel {
                border: none;
                -webkit-box-shadow: 0px 0px 12px -1px rgba(156,151,156,1);
                -moz-box-shadow: 0px 0px 12px -1px rgba(156,151,156,1);
                box-shadow: 0px 0px 12px -1px rgba(156,151,156,1);
            }
            .breadcrumb {
                margin-bottom: 0!important;
            }    
            .toolbar{
                float: left;
            }
            td.details-control {
                background: url('assets/img/Folder_Closed.png') no-repeat center center;
                cursor: pointer;
            }
            tr.details td.details-control {
                background: url('assets/img/Folder_Opened.png') no-repeat center center;
            }
            .child_table{
                padding: 5px;
                border: 1px #ff0000 solid;
            }
            .glyphicon.spinning {
                animation: spin 1s infinite linear;
                -webkit-animation: spin2 1s infinite linear;
            }
            @keyframes spin {
                from { transform: scale(1) rotate(0deg); }
                to { transform: scale(1) rotate(360deg); }
            }
            @-webkit-keyframes spin2 {
                from { -webkit-transform: rotate(0deg); }
                to { -webkit-transform: rotate(360deg); }
            }
        </style>
    </head>
    <body class="animated-content">
    <?php echo $_top_navigation; ?>
        <div id="wrapper">
            <div id="layout-static">
            <?php echo $_side_bar_navigation;?>
                <div class="static-content-wrapper white-bg">
                    <div class="static-content"  >
                        <div class="page-content"><!-- #page-content -->
                            <?php echo $_chat_template; ?>
                            <ol class="breadcrumb">
                                <li><a href="dashboard">Dashboard</a></li>
                                <li><a href="Client_summary_report">Client Summary Report</a></li>
                            </ol>
                            <div class="container-fluid">
                                <div data-widget-group="group1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="div_documents_list"><center>
                                                <div class="panel panel-default" style="border-top:5px solid rgb(76, 175, 80); width: 80%;">
                                                    <h1 style="padding-left: 20px;text-align: left!important;"><span class="fa fa-bars" aria-hidden="true" style="color: rgb(76, 175, 80);"></span> Client Payment Summary <small>| Report</small> </h1><hr>
                                                    <div class="panel-body table-responsive">
                                                    	<div class="col-xs-12 col-sm-4">
                                                    		<div class="form-group">
                                                    			<strong class="pull-left">Month:</strong>
		                                                    	<select id="cbo_month" class="form-control">
		                                                    		<option value="1">January</option>
		                                                    		<option value="2">February</option>
		                                                    		<option value="3">March</option>
		                                                    		<option value="4">April</option>
		                                                    		<option value="5">May</option>
		                                                    		<option value="6">June</option>
		                                                    		<option value="7">July</option>
		                                                    		<option value="8">August</option>
		                                                    		<option value="9">September</option>
		                                                    		<option value="10">October</option>
		                                                    		<option value="11">November</option>
		                                                    		<option value="12">December</option>
		                                                    	</select>
                                                    		</div>
                                                    	</div>
                                                        <table id="tbl_customer_ledger" class="table-striped custom-design" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width:35%;">Company Name</th>
                                                                    <th style="width:10%;text-align: center;">Print</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody></tbody>
                                                        </table>
                                                    </div>
                                                    <div class="panel-footer"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .container-fluid -->
                    </div> <!-- #page-content -->
                </div>
                <footer role="contentinfo">
                    <div class="clearfix">
                        <ul class="list-unstyled list-inline pull-left">
                            <li><h6 style="margin: 0;">&copy; 2017 - JDEV IT BUSINESS SOLUTIONS</h6></li>
                        </ul>
                        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
                    </div>
                </footer>
                </div>
        </div>
    </div>
    <?php echo $_switcher_settings; ?>
    <?php echo $_def_js_files; ?>
    <script src="assets/plugins/spinner/dist/spin.min.js"></script>
    <script src="assets/plugins/spinner/dist/ladda.min.js"></script>
    <script type="text/javascript" src="assets/plugins/datatables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/select2/select2.full.min.js"></script>
    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="assets/plugins/fullcalendar/moment.min.js"></script>
    <!-- Data picker -->
    <script src="assets/plugins/datapicker/bootstrap-datepicker.js"></script>
    <!-- numeric formatter -->
    <script src="assets/plugins/formatter/autoNumeric.js" type="text/javascript"></script>
    <script src="assets/plugins/formatter/accounting.js" type="text/javascript"></script>
    <script>
        (function(){
            var dt,_cboMonth;
            var _selectedID;

            var initializeControls=function(){
                $('.date-picker').datepicker({
                    todayBtn: "linked",
                    keyboardNavigation: false,
                    forceParse: false,
                    calendarWeeks: true,
                    autoclose: true
                });
                _cboMonth=$('#cbo_month').select2({
                    placeholder:'Please Select Month'
                });        
                InitializeDataTable();    
            }();

            var bindEventHandlers=function(){
                _cboMonth.on('select2:select',function(){
                    dt.destroy();
                    InitializeDataTable();
                });

	            $('#tbl_customer_ledger').on('click','button[name="print_check"]',function(){
		            _selectRowObj=$(this).closest('tr');
		            var data=dt.row(_selectRowObj).data();
		            _selectedID=data.customer_id;

		           	window.open('Client_summary_report/transaction/print?cusid='+_selectedID+'&m='+_cboMonth.val()+'&c='+data.company_name);
	        	});
            }();
            
            function InitializeDataTable() {
                dt=$('#tbl_customer_ledger').DataTable({
                    "dom": '<"toolbar">frtip',
                    "bLengthChange":false,
                    "bFilter":false,
                    "ajax": {
                        "url":"Client_summary_report/transaction/list?m="+_cboMonth.val(),
                        "type":"GET",
                        "bDestroy":true
                    },
                    "columns":[
                        { targets:[0],data: "company_name" },
                        {  targets:[1],
	                    render: function (data, type, full, meta){
		                        var btn_check_print='<button class="btn btn-success btn-sm" name="print_check" style="margin-right:0px;text-transform: none;" data-toggle="tooltip" data-placement="top" ><i class="fa fa-print"></i> Print</button>';
		                        return '<center>'+btn_check_print+'</center>';
		                    } 
		                }
                    ]
                });
            };
        })();
    </script>
    </body>
</html>
