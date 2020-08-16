<?php
include "functions.php";
if (!isset($_SESSION['hash'])) { header("Location: ./login.php"); exit; }
if (!$rPermissions["is_admin"]) { exit; }

if (isset($_GET["flush"])) {
    flushIPs();
    header("Location: ./ips.php");
}

if ($rSettings["sidebar"]) {
    include "header_sidebar.php";
} else {
    include "header.php";
}
        if ($rSettings["sidebar"]) { ?>
        <div class="content-page"><div class="content boxed-layout-ext"><div class="container-fluid">
        <?php } else { ?>
        <div class="wrapper boxed-layout-ext"><div class="container-fluid">
        <?php } ?>
        <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li>
                                        <a href="ips.php?flush">
                                            <button type="button" class="btn btn-danger waves-effect waves-light btn-sm">
                                                <i class="mdi mdi-trash-can"></i> Flush IP's
                                            </button>
                                        </a>
                                        <a href="ip.php">
                                            <button type="button" class="btn btn-success waves-effect waves-light btn-sm">
                                                <i class="mdi mdi-plus"></i> Block IP Address
                                            </button>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Blocked IP Addresses</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" style="overflow-x:auto;">
                                <table id="datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">IP Address</th>
                                            <th>Notes</th>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Attempts</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach (getBlockedIPs() as $rIP) {
                                        ?>
                                        <tr id="ip-<?=$rIP["id"]?>">
                                            <td class="text-center"><?=$rIP["id"]?></td>
                                            <td class="text-center"><?=$rIP["ip"]?></td>
                                            <td><?=$rIP["notes"]?></td>
                                            <td class="text-center"><?=date("Y-m-d", $rIP["date"])?></td>
                                            <td class="text-center"><?=$rIP["attempts_blocked"]?></td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-outline-danger waves-effect waves-light btn-xs" onClick="api(<?=$rIP["id"]?>, 'delete');"><i class="mdi mdi-close"></i></button>
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
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables/buttons.flash.min.js"></script>
        <script src="assets/libs/datatables/buttons.print.min.js"></script>
        <script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables/dataTables.select.min.js"></script>
        <script src="assets/libs/pdfmake/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/vfs_fonts.js"></script>

        <script>
        function api(rID, rType) {
            if (rType == "delete") {
                if (confirm('Are you sure you want to delete this IP? This cannot be undone!') == false) {
                    return;
                } else {
					$.toast("The IP is being unblocked from each server...");
					if (rType == "delete") {
                        $("#ip-" + rID).remove();
                    }
                    $.each($('.tooltip'), function (index, element) {
                        $(this).remove();
                    });
					$('[data-toggle="tooltip"]').tooltip();
				}
            }
            $.getJSON("./api.php?action=ip&sub=" + rType + "&ip=" + rID, function(data) {
                if (data.result === true) {
                    if (rType == "delete") {
                        $.toast("IP successfully deleted.");
                    }
                } else {
                    $.toast("An error occured while processing your request.");
                }
            });
        }
        
        $(document).ready(function() {
            $("#datatable").DataTable({
                language: {
                    paginate: {
                        previous: "<i class='mdi mdi-chevron-left'>",
                        next: "<i class='mdi mdi-chevron-right'>"
                    }
                },
                drawCallback: function() {
                    $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
                },
                responsive: false
            });
            $("#datatable").css("width", "100%");
        });
        </script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>
    </body>
</html>