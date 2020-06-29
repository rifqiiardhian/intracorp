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
                                <div class="overview-wrap">
                                    <h2 class="title-1">Add Services</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-10">
                            <div class="col-lg-12">
                                <a href="{{ url('/a/service')}}"><i class="fas fa-arrow-left"></i> Back to Service Table</a>
                                <div class="card m-t-25">
                                    <div class="card-header"><b>Form New Services</b></div>
                                    <form action="{{ url('/a/service/save') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="name">Services Name</label>
                                                <input type="text" name="name" id="name" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="description" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group"></div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <button type="submit" class="btn btn-success btn-sm">
                                                <i class="fa fa-check"></i> Submit
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
