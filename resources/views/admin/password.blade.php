<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Website Keywords -->
    <meta name="keywords" content="intra, intra corp, intra malang, contractor malang, kontraktor malang, konsultan malang">
    <!-- Website Description -->
    <meta name="description" content="Intra Corp General Contractor and Consultant Engineering based in Malang, Indonesia">
    <!-- Website Author -->
    <meta name="author" content="Rifqi Ardhian">
    <!-- Website Title -->
    <title>{{ $title }}</title>
    <!-- Website Icon -->
    <link rel="icon" href="{{ url('assets/icon/intraicon.ico')}}"/>
    <!-- CSS Links -->
    @include('admin/include/css')
</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- Admin Menu -->
        @include('admin/menu')

        <!-- Start Page Container -->
        <div class="page-container">
            <!-- Header Desktop -->
            @include('admin/header')

            <!-- Start Main Content -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                @if ($message = Session::get('success'))
                                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
									<span class="badge badge-pill badge-success">Success</span>
									{{ $message }}
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
                                @endif
                                @if ($message = Session::get('error'))
                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
									<span class="badge badge-pill badge-danger">Error</span>
									{{ $message }}
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
                                @endif
                            </div>
                        </div>
                        <div class="row m-t-40">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header"><b>Change Password</b></div>
                                    <div class="card-body">
                                        <form action="{{ url('/a/admin/password/update') }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ Session::get('id') }}"/>
                                            <input type="hidden" id="hash" value="{{ Session::get('pass') }}"/>
                                            <div class="form-group">
                                                <label for="username" class="control-label mb-1">Old Password</label>
                                                <div class="input-group">
                                                    <input type="password" id="oldpassword" name="oldpassword" class="form-control">
                                                    <div class="input-group-addon">
                                                        <i toggle="#oldpassword" class="fa fa-eye toggle-password"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="error-message m-b-20"></p>
                                            <div class="form-group">
                                                <label for="firstname" class="control-label mb-1">New Password</label>
                                                <div class="input-group">
                                                    <input type="password" id="newpassword" name="newpassword" class="form-control"/>
                                                    <div class="input-group-addon">
                                                        <i toggle="#newpassword" class="fa fa-eye toggle-password"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="lastname" class="control-label mb-1">Confirm Password</label>
                                                <div class="input-group">
                                                    <input type="password" id="confirmpassword" name="confirmpassword" class="form-control"/>
                                                    <div class="input-group-addon">
                                                        <i toggle="#confirmpassword" class="fa fa-eye toggle-password"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="message m-b-20"></p>
                                            <div>
                                                <button type="submit" id="passupdate" class="btn btn-lg btn-success btn-block">
                                                    <i class="fa fa-check fa-lg"></i>&nbsp;
                                                    <span>Update</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                @include('admin/footer')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Main Content -->
        </div>
        <!-- End Page Container -->
    </div>

    <!-- Javascript Links -->
    @include('admin/include/javascript')
</body>
</html>
