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
                                <li><a href="categories">Services Category Management</a></li>
                            </ol>

                            <div class="container-fluid">
                                <div data-widget-group="group1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="div_category_fields">
                                                <div class="panel panel-default" style="border-top:5px solid rgb(76, 175, 80);">
                                                    <!-- <div class="panel-heading">
                                                        <b style="color: white; font-size: 12pt;"><i class="fa fa-bars"></i>&nbsp;Services Category Management</b>
                                                    </div> -->
                                                    <h1 style="padding-left: 20px;"><span class="fa fa-cogs" style="border: 3px solid rgb(76, 175, 80); padding: 10px 12px 10px 12px; border-radius: 50%; color: rgb(76, 175, 80);"></span> Service Category <small> | Category</small></h1><hr>
                                                    <div class="panel-body table-responsive" >
                                                        
                                                        <table id="tbl_categories" class="table-striped custom-design" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Category Name</th>
                                                                    <th>Category Description</th>
                                                                    <th>
                                                                        <center>Action</center>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody></tbody>
                                                        </table>
                                                    </div>
                                                    <div class="panel-footer"></div>
                                                </div>
                                            </div>
                                                <div id="modal_categories" class="modal fade" role="dialog">
                                                    <div class="modal-dialog modal-md">
                                                        <div class="modal-content" style="border-top:5px solid rgb(76, 175, 80);">
                                                            <!-- <div class="modal-header">
                                                                <h3 style="color: white;">Category Management</h3>
                                                            </div> -->
                                                            <h1 style="padding-left: 20px;"><span class="fa fa-cogs" style="border: 3px solid rgb(76, 175, 80); padding: 10px 12px 10px 12px; border-radius: 50%; color: rgb(76, 175, 80);"></span> Service Category <small class="title-modal"> | Category</small></h1><hr>
                                                            <div class="modal-body" >
                                                        
                                                                <form id="frm_categories" role="form" class="form-horizontal row-border">
                                                                    <div class="form-group">
                                                                        <label class="col-xs-12 ">* Category Name :</label>
                                                                        <div class="col-xs-12">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-users"></i>
                                                                                </span>
                                                                                <input type="text" name="category_name" class="form-control" placeholder="Category Name" data-error-msg="Category name is required!" required />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-xs-12 ">Category Description :</label>
                                                                        <div class="col-xs-12">
                                                                            <textarea name="category_description" class="form-control" placeholder="Description"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="row">
                                                                    <div class="col-xs-12">
                                                                        <button id="btn_save" class="btn-primary btn" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;"><span class=""></span> Save
                                                                        </button>
                                                                        <button id="btn_cancel" class="btn-default btn" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;"> Cancel
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- .container-fluid -->
                    </div> <!-- #page-content -->
                </div>

                <div id="modal_confirmation" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
                    <div class="modal-dialog modal-md">
                        
                         <div class="modal-content" style="border-top:5px solid rgb(76, 175, 80);">
                        <h1 style="padding-left: 20px;"><span class="fa fa-cogs" style="border: 3px solid rgb(76, 175, 80); padding: 10px 12px 10px 12px; border-radius: 50%; color: rgb(76, 175, 80);"></span> Service Category<small> | Confirm Deletion </small></h1><hr>
                           <!--  <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                <h4 class="" style="color: white;"><span id="modal_mode"> </span>Confirm Deletion</h4>
                            </div> -->

                            <div class="modal-body">
                                <p id="modal-body-message">Are you sure ?</p>
                            </div>

                            <div class="modal-footer">
                                <button id="btn_yes" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
                                <button id="btn_close" type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div><!---modal-->

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

    <script>

    $(document).ready(function(){
        var dt; var _txnMode; var _selectedID; var _selectRowObj;

        $('#btn_cancel').on('click', function() {
            $('#modal_categories').modal('hide');
        });

        var initializeControls=function(){
            dt=$('#tbl_categories').DataTable({
                "dom": '<"toolbar">frtip',
                "bLengthChange":false,
                "language": {
                    "searchPlaceholder":"Search Category"
                },
                "ajax" : "Categories/transaction/list",
                "columns": [

                    { targets:[0],data: "category_name" },
                    { targets:[1],data: "category_description" },
                    {
                        targets:[2],
                        render: function (data, type, full, meta){
                            var btn_edit='<button class="btn btn-primary btn-sm" name="edit_info"  style="margin-left:-15px;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
                            var btn_trash='<button class="btn btn-danger btn-sm" name="remove_info" style="margin-right:0px;" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                            return '<center>'+btn_edit+'&nbsp;'+btn_trash+'</center>';
                        }
                    }
                ]
            });

            var createToolBarButton=function(){
                var _btnNew='<button class="btn btn-primary"  id="btn_new" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;" data-toggle="modal" data-target="" data-placement="left" title="New Service Category" >'+
                    '<i class="fa fa-plus-circle"></i> New Service Category</button>';
                $("div.toolbar").html(_btnNew);
            }();
        }();

        var bindEventHandlers=(function(){
            var detailRows = [];

            $('#btn_new').click(function(){
                _txnMode="new";
                //showList(false);
                clearFields();
                $('.title-modal').text(' | New Category');
                 $('#modal_categories').modal('show');
            });

            $('#tbl_categories tbody').on('click','button[name="edit_info"]',function(){
                _txnMode="edit";
                _selectRowObj=$(this).closest('tr');
                var data=dt.row(_selectRowObj).data();
                _selectedID = data.category_id;
                $('.title-modal').text(' | Edit Category');

                $('input,textarea').each(function(){
                    var _elem=$(this);
                    $.each(data,function(name,value){
                        if(_elem.attr('name')==name){
                            _elem.val(value);
                        }
                    });
                });

                $('#modal_categories').modal('show');
            });

            $('#tbl_categories tbody').on('click','button[name="remove_info"]',function(){
                _selectRowObj=$(this).closest('tr');
                var data=dt.row(_selectRowObj).data();
                _selectedID = data.category_id;

                $('#modal_confirmation').modal('show');
            });

            $('#btn_yes').click(function(){
                removeCategory().done(function(response){
                    showNotification(response);
                    dt.row(_selectRowObj).remove().draw();
                });
            });

            $('#btn_cancel').click(function(){
                $('modal_categories').modal('hide');
            });

            $('#btn_save').click(function(){
                if(validateRequiredFields()){
                    if(_txnMode=="new"){
                            createCategory().done(function(response){
                            showNotification(response);
                            dt.row.add(response.row_added[0]).draw();
                            clearFields();
                            $('#modal_categories').modal('hide');
                        }).always(function(){
                            showSpinningProgress($('#btn_save'));
                        });
                    }else{
                            updateCategory().done(function(response){
                            showNotification(response);
                            dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                            clearFields();
                            $('#modal_categories').modal('hide');
                        }).always(function(){
                            showSpinningProgress($('#btn_save'));
                        });
                    }
                }
            });
        })();

        var validateRequiredFields=function(){
            var stat=true;

            $('div.form-group').removeClass('has-error');
            $('input[required],textarea[required]','#frm_categories').each(function(){
                if($(this).val()==""){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('div.form-group').addClass('has-error');
                    stat=false;
                    return false;
                }
            });
            return stat;
        };

        var createCategory=function(){
            var _data=$('#frm_categories').serializeArray();

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Categories/transaction/create",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };

        var updateCategory=function(){
            var _data=$('#frm_categories').serializeArray();
            _data.push({name : "category_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Categories/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };

        var removeCategory=function(){
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Categories/transaction/delete",
                "data":{category_id : _selectedID}
            });
        };

        var showList=function(b){
            if(b){
                $('#div_documents_list').show();
                $('#div_category_fields').hide();
            }else{
                $('#div_documents_list').hide();
                $('#div_category_fields').show();
            }
        };

        var showNotification=function(obj){
            PNotify.removeAll();
            new PNotify({
                title:  obj.title,
                text:  obj.msg,
                type:  obj.stat
            });
        };

        var showSpinningProgress=function(e){
            $(e).find('span').toggleClass('glyphicon glyphicon-refresh spinning');
        };

        var clearFields=function(){
            $('input[required],textarea','#frm_categories').val('');
            $('form').find('input:first').focus();
        };

        function format ( d ) {
            return '<br /><table style="margin-left:10%;width: 80%;">' +
            '<thead>' +
            '</thead>' +
            '<tbody>' +
            '<tr>' +
            '<td>Category Name : </td><td><b>'+ d.category_name+'</b></td>' +
            '</tr>' +
            '<tr>' +
            '<td>Category Description : </td><td>'+ d.category_desc+'</td>' +
            '</tr>' +
            '</tbody></table><br />';
        };
    });

    </script>

    </body>

</html>