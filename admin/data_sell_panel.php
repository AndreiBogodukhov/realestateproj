<?php
session_start();

// Проверяем, авторизован ли администратор
if (!isset($_SESSION['admin_id'])) {
    // Если не авторизован, перенаправляем на страницу входа
    header("Location: signin.php");
    exit;
}

// Дальнейший код страницы админ-панели
?>

<!DOCTYPE html="ru">
<html>

<?php include("head_admin.php"); ?>

<body>
    <?php include("panels.php"); ?>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Квартиры от собственников</h4>
                        <!-- <p class="mb-0">
                            you can find more options
                            <a class="text-primary" href="https://datatables.net/" target="_blank">Click Here</a>
                        </p> -->
                    </div>
                    <div class="pb-20">
                        <table class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Name</th>
                                    <th>Price</th>
                                    <th>District</th>
                                    <th>Address</th>
                                    <th>Date</th>
                                    <th class="datatable-nosort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-plus">Квартира NanTao</td>
                                    <td>200 000</td>
                                    <td>Nan Tao</td>
                                    <td>Trainer Avenue Peoria</td>
                                    <td>2018</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-plus">Квартира 2</td>
                                    <td>400 000</td>
                                    <td>Bang Tao</td>
                                    <td>Nissa</td>
                                    <td>2020</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Simple Datatable End -->
                <!-- multiple select row Datatable start -->
                
                
                <!-- Export Datatable End -->
            </div>
            <!-- <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By
                <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
            </div> -->
        </div>
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                
                <!-- Simple Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Сотрудники</h4>
                        
                    </div>
                    <div class="pb-20">
                        <table id="employeeTable" class="data-table table stripe hover nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus">Имя RU</th>
                                    <th>Имя EN</th>
                                    <th>Должность RU</th>
                                    <th>Должность EN</th>
                                    <th class="datatable-nosort">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr>
                                    <td class="table-plus">Андрей</td>
                                    <td>Andrei</td>
                                    <td>Директор</td>
                                    <td>Director</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr> -->
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Simple Datatable End -->
                <!-- multiple select row Datatable start -->
                
                
                <!-- Export Datatable End -->
            </div>
            <!-- <div class="footer-wrap pd-20 mb-20 card-box">
                DeskApp - Bootstrap 4 Admin Template By
                <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
            </div> -->
        </div>
    </div>
    <!-- welcome modal start -->

    <!-- <button class="welcome-modal-btn">
        <i class="fa fa-download"></i> Заргузить
    </button> -->
    <!-- welcome modal end -->
    <!-- js -->
    <!-- End Google Tag Manager (noscript) -->
    <script src="../js/admin_create_table.js"></script>
    <?php include('footer_admin.php'); ?>
</body>

</html>