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

                <!-- horizontal Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Добавление квартир собственников</h4>
                            <p class="mb-30"></p>
                        </div>
                    </div>
                    <form>
                        <div class="form-group">
                            <label>Text</label>
                            <input class="form-control" type="text" placeholder="Johnny Brown" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" value="bootstrap@example.com" type="email" />
                        </div>
                        <div class="form-group">
                            <label>URL</label>
                            <input class="form-control" value="https://getbootstrap.com" type="url" />
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input class="form-control" value="1-(111)-111-1111" type="tel" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" value="password" type="password" />
                        </div>
                        <!-- <div class="form-group">
							<label>Readonly input</label>
							<input class="form-control" type="text" placeholder="Readonly input here…" readonly />
						</div>
						<div class="form-group">
							<label>Disabled input</label>
							<input type="text" class="form-control" placeholder="Disabled input" disabled="" />
						</div> -->

                        <!-- <div class="form-group">
							<label>Disabled select menu</label>
							<select class="form-control" disabled="">
								<option>Disabled select</option>
							</select>
						</div> -->
                        <!-- <div class="form-group">
							<label>input plaintext</label>
							<input type="text" readonly class="form-control-plaintext" value="email@example.com" />
						</div> -->
                        <div class="form-group">
                            <label>Описание(ru)</label>
                            <textarea class="form-control"></textarea>
                            <small class="form-text text-muted">
                                Текст должен быть не более 4000 символов
                            </small>
                            <label>Описание(en)</label>
                            <textarea class="form-control"></textarea>
                            <small class="form-text text-muted">
                                Текст должен быть не более 4000 символов
                            </small>
                        </div>
                        <!-- <div class="form-group">
                            <label>Example file input</label>
                            <input type="file" class="form-control-file form-control height-auto" />
                        </div>
                        <div class="form-group">
                            <label>Custom file input</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" />
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div> -->
                    </form>

                </div>

                <!-- <div class="collapse collapse-box" id="horizontal-basic-form1">
                        <div class="code-box">
                            <div class="clearfix">
                                <a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#horizontal-basic"><i class="fa fa-clipboard"></i> Copy
                                    Code</a>
                                <a href="#horizontal-basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i>
                                    Hide Code</a>
                            </div>
                        </div>
                    </div> -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Image Dropzone</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Image Dropzone
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    January 2018
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pd-20 card-box mb-30">
                    <div class="clearfix mb-20">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Dropzone</h4>
                        </div>
                    </div>
                    <form class="dropzone" action="#" id="my-awesome-dropzone">
                        <div class="fallback">
                            <input type="file" name="file" />
                        </div>
                    </form>
                </div>
            </div>

            <!-- horizontal Basic Forms End -->
        </div>

    </div>
    </div>

    <?php include('footer_admin.php'); ?>
    <script>
		Dropzone.autoDiscover = false;
		$(".dropzone").dropzone({
			addRemoveLinks: true,
			removedfile: function (file) {
				var name = file.name;
				var _ref;
				return (_ref = file.previewElement) != null
					? _ref.parentNode.removeChild(file.previewElement)
					: void 0;
			},
		});
	</script>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>