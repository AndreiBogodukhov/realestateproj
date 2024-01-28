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
                                    <td>NanTan</td>
                                    <td>Sagittarius</td>
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
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Simple Datatable End -->
                <!-- multiple select row Datatable start -->
                				<!-- horizontal Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">horizontal Basic Forms</h4>
							<p class="mb-30">All bootstrap element classies</p>
						</div>
						<div class="pull-right">
							<a href="#horizontal-basic-form1" class="btn btn-primary btn-sm scroll-click"
								rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source
								Code</a>
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
						<div class="form-group">
							<label>Readonly input</label>
							<input class="form-control" type="text" placeholder="Readonly input here…" readonly />
						</div>
						<div class="form-group">
							<label>Disabled input</label>
							<input type="text" class="form-control" placeholder="Disabled input" disabled="" />
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<label class="weight-600">Custom Checkbox</label>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck1" />
										<label class="custom-control-label" for="customCheck1">Check this custom
											checkbox</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck2" />
										<label class="custom-control-label" for="customCheck2">Check this custom
											checkbox</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck3" />
										<label class="custom-control-label" for="customCheck3">Check this custom
											checkbox</label>
									</div>
									<div class="custom-control custom-checkbox mb-5">
										<input type="checkbox" class="custom-control-input" id="customCheck4" />
										<label class="custom-control-label" for="customCheck4">Check this custom
											checkbox</label>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<label class="weight-600">Custom Radio</label>
									<div class="custom-control custom-radio mb-5">
										<input type="radio" id="customRadio1" name="customRadio"
											class="custom-control-input" />
										<label class="custom-control-label" for="customRadio1">Toggle this custom
											radio</label>
									</div>
									<div class="custom-control custom-radio mb-5">
										<input type="radio" id="customRadio2" name="customRadio"
											class="custom-control-input" />
										<label class="custom-control-label" for="customRadio2">Or toggle this other
											custom radio</label>
									</div>
									<div class="custom-control custom-radio mb-5">
										<input type="radio" id="customRadio3" name="customRadio"
											class="custom-control-input" />
										<label class="custom-control-label" for="customRadio3">Or toggle this other
											custom radio</label>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Disabled select menu</label>
							<select class="form-control" disabled="">
								<option>Disabled select</option>
							</select>
						</div>
						<div class="form-group">
							<label>input plaintext</label>
							<input type="text" readonly class="form-control-plaintext" value="email@example.com" />
						</div>
						<div class="form-group">
							<label>Textarea</label>
							<textarea class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Help text</label>
							<input type="text" class="form-control" />
							<small class="form-text text-muted">
								Your password must be 8-20 characters long, contain letters
								and numbers, and must not contain spaces, special characters,
								or emoji.
							</small>
						</div>
						<div class="form-group">
							<label>Example file input</label>
							<input type="file" class="form-control-file form-control height-auto" />
						</div>
						<div class="form-group">
							<label>Custom file input</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" />
								<label class="custom-file-label">Choose file</label>
							</div>
						</div>
					</form>
					<div class="collapse collapse-box" id="horizontal-basic-form1">
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"
									data-clipboard-target="#horizontal-basic"><i class="fa fa-clipboard"></i> Copy
									Code</a>
								<a href="#horizontal-basic-form1" class="btn btn-primary btn-sm pull-right"
									rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i>
									Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="horizontal-basic">
<form>
	<div class="form-group">
		<label>Text</label>
		<input class="form-control" type="text" placeholder="Johnny Brown">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input class="form-control" value="bootstrap@example.com" type="email">
	</div>
	<div class="form-group">
		<label>URL</label>
		<input class="form-control" value="https://getbootstrap.com" type="url">
	</div>
	<div class="form-group">
		<label>Telephone</label>
		<input class="form-control" value="1-(111)-111-1111" type="tel">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input class="form-control" value="password" type="password">
	</div>
	<div class="form-group">
		<label>Readonly input</label>
		<input class="form-control" type="text" placeholder="Readonly input here…" readonly>
	</div>
	<div class="form-group">
		<label>Disabled input</label>
		<input type="text" class="form-control" placeholder="Disabled input" disabled="">
	</div>
	<div class="form-group">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<label class="weight-600">Custom Checkbox</label>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck1-1">
					<label class="custom-control-label" for="customCheck1-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck2-1">
					<label class="custom-control-label" for="customCheck2-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck3-1">
					<label class="custom-control-label" for="customCheck3-1">Check this custom checkbox</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input" id="customCheck4-1">
					<label class="custom-control-label" for="customCheck4-1">Check this custom checkbox</label>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<label class="weight-600">Custom Radio</label>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio4">Toggle this custom radio</label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio5">Or toggle this other custom radio</label>
				</div>
				<div class="custom-control custom-radio mb-5">
					<input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="customRadio6">Or toggle this other custom radio</label>
				</div>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label>Disabled select menu</label>
		<select class="form-control" disabled="">
			<option>Disabled select</option>
		</select>
	</div>
	<div class="form-group">
		<label>input plaintext</label>
		<input type="text" readonly class="form-control-plaintext" value="email@example.com">
	</div>
	<div class="form-group">
		<label>Textarea</label>
		<textarea class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>Help text</label>
		<input type="text" class="form-control">
		<small class="form-text text-muted">
		  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
		</small>
	</div>
	<div class="form-group">
		<label>Example file input</label>
		<input type="file" class="form-control-file form-control height-auto">
	</div>
	<div class="form-group">
		<label>Custom file input</label>
		<div class="custom-file">
			<input type="file" class="custom-file-input">
			<label class="custom-file-label">Choose file</label>
		</div>
	</div>
</form>

</code></pre>
						</div>
					</div>
				</div>
				<!-- horizontal Basic Forms End -->
            </div>

        </div>
    </div>

    <?php include('footer_admin.php'); ?>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>