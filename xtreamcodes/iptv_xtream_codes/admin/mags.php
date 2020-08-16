<?php
include "session.php"; include "functions.php";

if ($rPermissions["is_admin"]) {
    $rRegisteredUsers = getRegisteredUsers();
} else {
    $rRegisteredUsers = getRegisteredUsers($rUserInfo["id"]);
}

if ($rSettings["sidebar"]) {
    include "header_sidebar.php";
} else {
    include "header.php";
}
        if ($rSettings["sidebar"]) { ?>
        <div class="content-page"><div class="content"><div class="container-fluid">
        <?php } else { ?>
        <div class="wrapper"><div class="container-fluid">
        <?php } ?>
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li>
                                        <a href="#" onClick="clearFilters();">
                                            <button type="button" class="btn btn-warning waves-effect waves-light btn-sm">
                                                <i class="mdi mdi-filter-remove"></i>
                                            </button>
                                        </a>
                                        <a href="#" onClick="changeZoom();">
                                            <button type="button" class="btn btn-info waves-effect waves-light btn-sm">
                                                <i class="mdi mdi-magnify"></i>
                                            </button>
                                        </a>
                                        <?php if (!$detect->isMobile()) { ?>
                                        <a href="#" onClick="toggleAuto();">
                                            <button type="button" class="btn btn-dark waves-effect waves-light btn-sm">
                                                <i class="mdi mdi-refresh"></i> <span class="auto-text">Auto-Refresh</span>
                                            </button>
                                        </a>
                                        <?php } else { ?>
                                        <a href="javascript:location.reload();" onClick="toggleAuto();">
                                            <button type="button" class="btn btn-dark waves-effect waves-light btn-sm">
                                                <i class="mdi mdi-refresh"></i> Refresh
                                            </button>
                                        </a>
                                        <?php }
                                        if ($rPermissions["is_admin"]) { ?>
                                        <a href="mag.php">
                                            <button type="button" class="btn btn-primary waves-effect waves-light btn-sm">
                                                <i class="mdi mdi-link"></i> Link MAG Device
                                            </button>
                                        </a>
                                        <?php } ?>
                                        <a href="user<?php if ($rPermissions["is_reseller"]) { echo "_reseller"; } ?>.php?mag">
                                            <button type="button" class="btn btn-success waves-effect waves-light btn-sm">
                                                <i class="mdi mdi-plus"></i> Add MAG Device
                                            </button>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">MAG Devices</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" style="overflow-x:auto;">
                                <form id="mag_form">
                                    <div class="form-group row mb-4">
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" id="mag_search" value="" placeholder="Search Devices...">
                                        </div>
                                        <label class="col-md-2 col-form-label text-center" for="mag_reseller">Filter Results</label>
                                        <div class="col-md-3">
                                            <select id="mag_reseller" class="form-control" data-toggle="select2">
                                                <option value="" selected>All Resellers</option>
                                                <?php foreach ($rRegisteredUsers as $rRegisteredUser) { ?>
                                                <option value="<?=$rRegisteredUser["id"]?>"><?=$rRegisteredUser["username"]?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <select id="mag_filter" class="form-control" data-toggle="select2">
                                                <option value="" selected>No Filter</option>
                                                <option value="1">Active</option>
                                                <option value="2">Disabled</option>
                                                <option value="3">Banned</option>
                                                <option value="4">Expired</option>
                                                <option value="5">Trial</option>
                                            </select>
                                        </div>
                                        <label class="col-md-1 col-form-label text-center" for="mag_show_entries">Show</label>
                                        <div class="col-md-1">
                                            <select id="mag_show_entries" class="form-control" data-toggle="select2">
                                                <?php foreach (Array(10, 25, 50, 250, 500, 1000) as $rShow) { ?>
                                                <option<?php if ($rAdminSettings["default_entries"] == $rShow) { echo " selected"; } ?> value="<?=$rShow?>"><?=$rShow?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                                <table id="datatable-users" class="table dt-responsive nowrap font-normal">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th>Username</th>
                                            <th class="text-center">MAC Adress</th>
                                            <th>Owner</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Online</th>
                                            <th class="text-center">Trial</th>
                                            <th class="text-center">Expiration</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div> <!-- end container -->
        </div>
		<?php if ($rPermissions["is_admin"]) { ?>
		<div class="modal fade messageModal" role="dialog" aria-labelledby="messageModal" aria-hidden="true" style="display: none;" data-id="">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="messageModal">MAG Event</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<div class="col-12">
							<select id="message_type" class="form-control" data-toggle="select2" >
								<option value="" selected>Select an Event:</option>
								<optgroup label="">
									<option value="play_channel">Play Channel</option>
									<option value="reload_portal">Reload Portal</option>
									<option value="reboot">Reboot Device</option>
									<option value="send_msg">Send Message</option>
									<option value="cut_off">Close Portal</option>
								</optgroup>
							</select>
						</div>
						<div class="col-12" style="margin-top:20px;display:none;" id="send_msg_form">
							<div class="form-group row mb-4">
								<div class="col-md-12">
									<textarea id="message" name="message" class="form-control" rows="3" placeholder="Enter a custom message..."></textarea>
								</div>
							</div>
							<div class="form-group row mb-4">
								<label class="col-md-9 col-form-label" for="reboot_portal">Reboot Portal on Confirmation</label>
								<div class="col-md-3">
									<input name="reboot_portal" id="reboot_portal" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
								</div>
							</div>
						</div>
						<div class="col-12" style="margin-top:20px;display:none;" id="play_channel_form">
							<div class="form-group row mb-4">
								<label class="col-md-3 col-form-label" for="selected_channel">Channel</label>
								<div class="col-md-9">
									<select id="selected_channel" name="selected_channel" class="form-control" data-toggle="select2" style="width:100%;"></select>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button disabled id="message_submit" type="button" class="btn btn-primary waves-effect">Send Event</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<?php } ?>
        <!-- end wrapper -->
        <?php if ($rSettings["sidebar"]) { echo "</div>"; } ?>
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 copyright text-center"><?=getFooter()?></div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/libs/jquery-toast/jquery.toast.min.js"></script>
        <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>
		<script src="assets/libs/switchery/switchery.min.js"></script>
        <script src="assets/libs/select2/select2.min.js"></script>
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables/buttons.flash.min.js"></script>
        <script src="assets/libs/datatables/buttons.print.min.js"></script>
        <script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables/dataTables.select.min.js"></script>
        <script src="assets/js/pages/form-remember.js"></script>
        <script src="assets/js/app.min.js"></script>

        <script>
        var autoRefresh = true;
        var rClearing = false;
        
        function api(rID, rType) {
            if (rType == "delete") {
                if (confirm('Are you sure you want to delete this user and device?') == false) {
                    return;
                }
            }
            $.getJSON("./api.php?action=user&sub=" + rType + "&user_id=" + rID, function(data) {
                if (data.result === true) {
                    if (rType == "delete") {
                        $.toast("User and device has been deleted.");
                    } else if (rType == "enable") {
                        $.toast("User and device has been enabled.");
                    } else if (rType == "disable") {
                        $.toast("User and device has been disabled.");
                    } else if (rType == "unban") {
                        $.toast("User and device has been unbanned.");
                    } else if (rType == "ban") {
                        $.toast("User and device has been banned.");
                    }
                    $.each($('.tooltip'), function (index, element) {
                        $(this).remove();
                    });
                    $('[data-toggle="tooltip"]').tooltip("hide");
                    $("#datatable-users").DataTable().ajax.reload(null, false);
                } else {
                    $.toast("An error occured while processing your request.");
                }
            });
        }
        function toggleAuto() {
            if (autoRefresh == true) {
                autoRefresh = false;
                $(".auto-text").html("Manual Mode");
            } else {
                autoRefresh = true;
                $(".auto-text").html("Auto-Refresh");
            }
        }
        function getFilter() {
            return $("#mag_filter").val();
        }
        function getReseller() {
            return $("#mag_reseller").val();
        }
        
        function reloadUsers() {
            if (autoRefresh == true) {
                $('[data-toggle="tooltip"]').tooltip("hide");
                $("#datatable-users").DataTable().ajax.reload(null, false);
            }
            setTimeout(reloadUsers, 10000);
        }
        function changeZoom() {
            if ($("#datatable-users").hasClass("font-large")) {
                $("#datatable-users").removeClass("font-large");
                $("#datatable-users").addClass("font-normal");
            } else if ($("#datatable-users").hasClass("font-normal")) {
                $("#datatable-users").removeClass("font-normal");
                $("#datatable-users").addClass("font-small");
            } else {
                $("#datatable-users").removeClass("font-small");
                $("#datatable-users").addClass("font-large");
            }
            $("#datatable-users").DataTable().draw();
        }
        function clearFilters() {
            window.rClearing = true;
            $("#mag_search").val("").trigger('change');
            $('#mag_filter').val("").trigger('change');
            $('#mag_reseller').val("").trigger('change');
            $('#mag_show_entries').val("<?=$rAdminSettings["default_entries"] ?: 10?>").trigger('change');
            window.rClearing = false;
            $('#datatable-users').DataTable().search($("#mag_search").val());
            $('#datatable-users').DataTable().page.len($('#mag_show_entries').val());
            $("#datatable-users").DataTable().page(0).draw('page');
            $('[data-toggle="tooltip"]').tooltip("hide");
            $("#datatable-users").DataTable().ajax.reload( null, false );
        }
		<?php if ($rPermissions["is_admin"]) { ?>
		function message(id, mac) {
            $('.messageModal').data('id', id);
			$("#messageModal").text("Send Event - " + mac.toUpperCase());
			$("#message_type").val("").trigger("change");
			$("#message").val("");
			$("#selected_channel").val("");
			$("#send_msg_form").hide();
			$("#play_channel_form").hide();
            $('.messageModal').modal('show');
        }
		<?php } ?>
        $(document).ready(function() {
			$(window).keydown(function(event){
				if(event.keyCode == 13) {
					event.preventDefault();
					return false;
				}
			});
            formCache.init();
            formCache.fetch();
            
            $.fn.dataTable.ext.errMode = 'none';
            $('select').select2({width: '100%'});
			$(".js-switch").each(function (index, element) {
                var init = new Switchery(element);
            });
            $("#datatable-users").DataTable({
                language: {
                    paginate: {
                        previous: "<i class='mdi mdi-chevron-left'>",
                        next: "<i class='mdi mdi-chevron-right'>",
                    },
                    infoFiltered: ""
                },
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
                    $('[data-toggle="tooltip"]').tooltip();
                },
                createdRow: function(row, data, index) {
                    $(row).addClass('user-' + data[0]);
                },
                responsive: false,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "./table_search.php",
                    "data": function(d) {
                        d.id = "mags",
                        d.filter = getFilter(),
                        d.reseller = getReseller()
                    }
                },
                columnDefs: [
                    {"className": "dt-center", "targets": [0,2,4,5,6,7,8]},
                    {"orderable": false, "targets": [8]},
                    {"visible": false, "targets": [1]}
                ],
                order: [[ 0, "desc" ]],
                pageLength: <?=$rAdminSettings["default_entries"] ?: 10?>,
                stateSave: true
            });
            $("#datatable-users").css("width", "100%");
            $('#mag_search').keyup(function(){
                if (!window.rClearing) {
                    $('#datatable-users').DataTable().search($(this).val()).draw();
                }
            });
            $('#mag_show_entries').change(function(){
                if (!window.rClearing) {
                    $('#datatable-users').DataTable().page.len($(this).val()).draw();
                }
            });
            $('#mag_filter').change(function(){
                if (!window.rClearing) {
                    $('[data-toggle="tooltip"]').tooltip("hide");
                    $("#datatable-users").DataTable().ajax.reload( null, false );
                }
            });
            $('#mag_reseller').change(function(){
                if (!window.rClearing) {
                    $('[data-toggle="tooltip"]').tooltip("hide");
                    $("#datatable-users").DataTable().ajax.reload( null, false );
                }
            });
			<?php if ($rPermissions["is_admin"]) { ?>
			$("#message_type").change(function(){
				if ($(this).val() == "send_msg") {
					$("#send_msg_form").show();
					$("#play_channel_form").hide();
					$("#message_submit").attr("disabled", false);
				} else if ($(this).val() == "play_channel") {
					$("#send_msg_form").hide();
					$("#play_channel_form").show();
					$("#message_submit").attr("disabled", false);
				} else {
					$("#send_msg_form").hide();
					$("#play_channel_form").hide();
					if ($(this).val() == "") {
						$("#message_submit").attr("disabled", true);
					} else {
						$("#message_submit").attr("disabled", false);
					}
				}
			});
			$('#selected_channel').select2({
              ajax: {
                url: './api.php',
                dataType: 'json',
                data: function (params) {
                  return {
                    search: params.term,
                    action: 'streamlist',
                    page: params.page
                  };
                },
                processResults: function (data, params) {
                  params.page = params.page || 1;
                  return {
                    results: data.items,
                    pagination: {
                        more: (params.page * 100) < data.total_count
                    }
                  };
                },
                cache: true
              },
              placeholder: 'Start typing to search...',
			  width: "100%"
            });
			$("#message_submit").click(function() {
				rArray = {"id": $('.messageModal').data('id'), "type": $("#message_type").val()};
				if (rArray.type.length > 0) {
					if (rArray.type == "send_msg") {
						rArray.message = $("#message").val();
						if ($("#reboot_portal").is(":checked")) {
							rArray.reboot_portal = 1;
						} else {
							rArray.reboot_portal = 0;
						}
					} else if (rArray.type == "play_channel") {
						rArray.channel = $("#selected_channel").val();
						if (!rArray.channel) {
							rArray.channel = "";
						}
					}
					if ((rArray.type == "send_msg") && (rArray.message.length == 0)) {
						$.toast("Please enter a message to send to the MAG device.");
					} else if ((rArray.type == "play_channel") && (rArray.channel.length == 0)) {
						$.toast("Please select a channel.");
					} else {
						$('.messageModal').modal('hide');
						$.getJSON("./api.php?action=send_event&data=" + encodeURIComponent(JSON.stringify(rArray)), function(data) {
							if (data.result === true) {
								$.toast("MAG event has been submitted.");
							} else {
								$.toast("MAG event could not be submitted.");
							}
						});
					}
				}
			});
            <?php }
			if (!$detect->isMobile()) { ?>
            setTimeout(reloadUsers, 10000);
            <?php } ?>
            $('#datatable-users').DataTable().search($(this).val()).draw();
        });
        $(window).bind('beforeunload', function() {
            formCache.save();
        });
        </script>
    </body>
</html>