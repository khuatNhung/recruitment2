<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{!!url('public/css/custom.css')!!}">
	<link rel="stylesheet" href="{!!url('public/bootstrap/css/bootstrap.min.css')!!}">
</head>
<body>
	<div class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<img src="public/ui-images/logotran.png" class="logotran" />
				</div>
				<div class="col-md-9">
				<div class="row">
					<div class="col-md-8">

					</div>
					<div class="col-md-4">
						<a href="">Đăng Nhập</a> or
                     	<a href="">Đăng Ký</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">

					</div>
					<div class="col-md-8">
						<a href="" role="button" class="btn btn-success btn-large" id="addRecruit">Trang chủ</a>
						<a href="" role="button" class="btn btn-success btn-large" id="addRecruit">Tạo CV</a>
						<a href="" role="button" class="btn btn-success btn-large" id="addRecruit">Giới thiệu</a>
					</div>
				</div>


				</div>
			</div>
		</div>
	</div>
	<div class="banner"></div>
	<ul id="ulUnLogin" class="top-menu list-inline col-xs-6 col-sm-5 pull-right wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                            <li><a href="javascript:ShowLogin();">Đăng nhập</a></li>
                            <li>hoặc</li>
                            <li class="register"><a href="javascript:ShowReg();">Đăng ký</a></li>
                        </ul>
	<div class="wapper"></div>
	<div class="footer">
	</div>





	<script src="{!!url('public/admin/plugins/jQuery/jquery-2.2.3.min.js')!!}"></script>
	<script src="{!!url('public/admin/bootstrap/js/bootstrap.min.js')!!}"></script>
</body>
</html>