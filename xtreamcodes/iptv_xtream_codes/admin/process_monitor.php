<?php
include "session.php"; include "functions.php";
if (!$rPermissions["is_admin"]) { exit; }

if ((!isset($_GET["server"])) OR (!isset($rServers[$_GET["server"]]))) {
    header("Location: ./dashboard.php");exit;
}

if (isset($_GET["clear"])) {
    freeTemp($_GET["server"]);
    header("Location: ./process_monitor.php?server=".$_GET["server"]);exit;
}

if (isset($_GET["clear_s"])) {
    freeStreams($_GET["server"]);
    header("Location: ./process_monitor.php?server=".$_GET["server"]);exit;
}

$rStreams = getStreamPIDs($_GET["server"]);
$rFS = getFreeSpace($_GET["server"]);

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
                                        <a href="javascript:location.reload();" style="margin-right:10px;">
                                            <button type="button" class="btn btn-dark waves-effect waves-light btn-sm">
                                                <i class="mdi mdi-refresh"></i> Refresh
                                            </button>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Process Monitor</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 
                <div class="row">
                    <div class="col-12">
                        <?php if (count($rFS) > 0) { ?>
                        <div class="card">
                            <div class="card-body" style="overflow-x:auto;">
                                <table class="table table-borderless mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Mount Point</th>
                                            <th class="text-center">Size</th>
                                            <th class="text-center">Used</th>
                                            <th class="text-center">Available</th>
                                            <th class="text-center">Used %</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($rFS as $rSystem) { ?>
                                        <tr>
                                            <td><?=$rSystem["mount"]?></td>
                                            <td class="text-center"><?=$rSystem["size"]?></td>
                                            <td class="text-center"><?=$rSystem["used"]?></td>
                                            <td class="text-center"><?=$rSystem["avail"]?></td>
                                            <td class="text-center"><?php if(intval(rtrim($rSystem["percentage"], "%")) >= 80) { echo "<span class='text-danger'>".$rSystem["percentage"]."</span>"; } else { echo $rSystem["percentage"]; }; ?></td>
                                            <td class="text-center">
                                                <?php if (substr($rSystem["mount"], strlen($rSystem["mount"])-3, 3) == "tmp") { ?>
                                                <a href="./process_monitor.php?server=<?=$_GET["server"]?>&clear"><button data-toggle="tooltip" data-placement="top" title="" data-original-title="Clear temporary directory." type="button" class="btn btn-outline-danger waves-effect waves-light btn-xs"><i class="mdi mdi-close"></i></button></a>
                                                <?php } else if (substr($rSystem["mount"], strlen($rSystem["mount"])-7, 7) == "streams") { ?>
												<a href="./process_monitor.php?server=<?=$_GET["server"]?>&clear_s"><button data-toggle="tooltip" data-placement="top" title="" data-original-title="Clear streams directory. This will restart all streams!" type="button" class="btn btn-outline-danger waves-effect waves-light btn-xs"><i class="mdi mdi-close"></i></button></a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="card">
                            <div class="card-body" style="overflow-x:auto;">
                                <form id="user_activity_search">
                                    <div class="form-group row mb-4">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="live_search" value="xtreamc+" placeholder="Search Processes...">
                                        </div>
                                        <label class="col-md-1 col-form-label text-center" for="live_filter">Server</label>
                                        <div class="col-md-3">
                                            <select id="live_filter" class="form-control" data-toggle="select2">
                                                <?php foreach ($rServers as $rServer) { ?>
                                                <option value="<?=$rServer["id"]?>"<?php if ($_GET["server"] == $rServer["id"]) { echo " selected"; } ?>><?=$rServer["server_name"]?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <label class="col-md-1 col-form-label text-center" for="live_show_entries">Show</label>
                                        <div class="col-md-1">
                                            <select id="live_show_entries" class="form-control" data-toggle="select2">
                                                <?php foreach (Array(10, 25, 50, 250, 500, 1000) as $rShow) { ?>
                                                <option<?php if ($rAdminSettings["default_entries"] == $rShow) { echo " selected"; } ?> value="<?=$rShow?>"><?=$rShow?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                                <table id="datatable-activity" class="table dt-responsive nowrap font-small">
                                    <thead>
                                        <tr>
                                            <th>PID</th>
                                            <th>User</th>
                                            <th>Type</th>
                                            <th>Process</th>
                                            <th>CPU (%)</th>
                                            <th>MEM (MB)</th>
                                            <th>Time</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach (getPIDs($_GET["server"]) as $rProcess) { ?>
                                        <tr>
                                            <td><?=$rProcess["pid"]?></td>
                                            <td><?=$rProcess["user"]?></td>
                                            <td><?=Array("pid" => "Main - ", "monitor_pid" => "Monitor - ", "delay_pid" => "Delayed - ", "activity" => "User Activity - ", "timeshift" => "Timeshift - ", null => "")[$rStreams[$rProcess["pid"]]["pid_type"]].Array(1 => "Stream", 2 => "Movie", 3 => "Created Channel", 4 => "Radio", 5 => "Episode", null => "System")[$rStreams[$rProcess["pid"]]["type"]]?></td>
                                            <td><?php if (isset($rStreams[$rProcess["pid"]])) { echo "<a href='".Array(1 => "stream", 2 => "movie", 3 => "created_channel", 4 => "radio", 5 => "episode")[$rStreams[$rProcess["pid"]]["type"]].".php?id=".$rStreams[$rProcess["pid"]]["id"]."'>".$rStreams[$rProcess["pid"]]["title"].'</a>'; } else { echo $rProcess["command"]; } ?></td>
                                            <td><?=number_format($rProcess["cpu"],1)?></td>
                                            <td><?=number_format($rProcess["rss"] / 1024.0, 0)?></td>
                                            <td><?=$rProcess["time"]?></td>
                                            <td>
                                                <?php if (isset($rStreams[$rProcess["pid"]])) { ?>
                                                <a href="<?=Array(1 => "stream", 2 => "movie", 3 => "created_channel", 4 => "radio", 5 => "episode")[$rStreams[$rProcess["pid"]]["type"]].".php?id=".$rStreams[$rProcess["pid"]]["id"]?>"><button data-toggle="tooltip" data-placement="top" title="" data-original-title="View" type="button" class="btn btn-outline-info waves-effect waves-light btn-xs"><i class="mdi mdi-eye"></i></button></a>
                                                <?php } else { ?>
                                                <button disabled type="button" class="btn btn-outline-info waves-effect waves-light btn-xs"><i class="mdi mdi-eye"></i></button>
                                                <?php }
                                                if ($rProcess["user"] == "xtreamc+") { ?>
                                                <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Kill Process - This is not recommended, find the root cause and address it! Killing a stream will only force it to restart." type="button" class="btn btn-outline-danger waves-effect waves-light btn-xs" onClick="kill(<?=$_GET["server"]?>, <?=$rProcess["pid"]?>);"><i class="mdi mdi-close"></i></button>
                                                <?php } else { ?>
                                                <button disabled type="button" class="btn btn-outline-danger waves-effect waves-light btn-xs"><i class="mdi mdi-close"></i></button>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
            </div> <!-- end container -->
        </div>
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

        <!-- Datatables init -->
        <script>
        function kill(rServerID, rID) {
            $.getJSON("./api.php?action=process&pid=" + rID + "&server=" + rServerID, function(data) {
                if (data.result === true) {
                    $.toast("Connection has been killed. It will remain in this list until reload.");
                    $.each($('.tooltip'), function (index, element) {
                        $(this).remove();
                    });
                    $('[data-toggle="tooltip"]').tooltip("hide");
                } else {
                    $.toast("An error occured while processing your request.");
                }
            });
        }
        $(document).ready(function() {
			$(window).keydown(function(event){
				if(event.keyCode == 13) {
					event.preventDefault();
					return false;
				}
			});
            $('select').select2({width: '100%'});
            $("#datatable-activity").DataTable({
                language: {
                    paginate: {
                        previous: "<i class='mdi mdi-chevron-left'>",
                        next: "<i class='mdi mdi-chevron-right'>"
                    },
                    infoFiltered: ""
                },
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
                    $('[data-toggle="tooltip"]').tooltip();
                },
                responsive: false,
                processing: true,
                columnDefs: [
                    {"className": "dt-center", "targets": [0,1,2,4,5,6,7]}
                ],
                
                <?php if (isset($_GET["mem"])) { ?>
                order: [[ 5, "desc" ]],
                <?php } else { ?>
                order: [[ 4, "desc" ]],
                <?php } ?>
                pageLength: <?=$rAdminSettings["default_entries"] ?: 10?>,
                lengthMenu: [10, 25, 50, 250, 500, 1000]
            });
            $("#datatable-activity").css("width", "100%");
            $('#live_search').keyup(function(){
                $('#datatable-activity').DataTable().search($(this).val()).draw();
            });
            $('#live_show_entries').change(function(){
                $('#datatable-activity').DataTable().page.len($(this).val()).draw();
            });
            $('#live_filter').change(function(){
                window.location.href = "./process_monitor.php?server=" + $(this).val();
            });
            $('#datatable-activity').DataTable().search($('#live_search').val()).draw();
        });
        </script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>
    </body>
</html>