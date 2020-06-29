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
                                    <h2 class="title-1">Website Profile</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Edit the website profile here</div>
                                    <form action="{{ url('/a/website-profile/update') }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $id_webprofile }}"/>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="companyname" class="control-label mb-1"><b>Company Name</b></label>
                                                <input id="companyname" name="companyname" type="text" class="form-control" value="{{ $companyname }}"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="officeaddress" class="control-label mb-1"><b>Office Address</b></label>
                                                <textarea name="officeaddress" id="officeaddress" class="form-control">{{ $office }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="workshopaddress" class="control-label mb-1"><b>Workshop Address</b></label>
                                                <textarea name="workshopaddress" id="workshopaddress" class="form-control">{{ $workshop }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="textareabout" class="control-label mb-1"><b>History / About</b></label>
                                                <textarea name="textareaabout" id="textareabout" class="form-control">{{ $about }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="textareavision" class="control-label mb-1"><b>Vision</b></label>
                                                <textarea name="textareavision" id="textareavision" class="form-control">{{ $vision }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="textareamission" class="control-label mb-1"><b>Mission</b></label>
                                                <textarea name="textareamission" id="textareamission" class="form-control">{{ $mission }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="textareagoals" class="control-label mb-1"><b>Goals</b></label>
                                                <textarea name="textareagoals" id="textareagoals" class="form-control">{{ $goals }}</textarea>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <button type="submit" class="btn btn-success btn-sm">
                                                <i class="fa fa-check"></i> Update
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
    <script src="{{ url('assets/admin/js/ckconfigprofile.js')}}"></script>
</body>
</html>
