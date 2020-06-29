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
                                    <h2 class="title-1">Website Logo</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-lg-12">
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Place</th>
                                                <th>Logo</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($no = 1)
                                            @foreach($logo as $datalogo)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $datalogo->place }}</td>
                                                <td><img src="{{ url($datalogo->logo) }}" class="img-fluid" style="max-width: 150px; height: auto"/></td>
                                                <td>
                                                    <a href="{{ '#' }}">
                                                        <button class="btn btn-sm btn-warning text-white edit-modal" data-value="{{ $datalogo->id }}" data-toggle="modal" data-target="#mediumModal">EDIT</button>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
            <!-- modal medium -->
			<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Upload Photo</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
                        <form action="{{ url('/a/website-logo/update') }}" method="post">
    						<div class="modal-body">
                                {{ csrf_field() }}
                                <input type="hidden" name="edit_logo"/>
                                <div class="form-group">
                                    <label for="photo">Choose your new logo here</label>
                                    <input type="file" name="photo" class="form-control"/>
                                </div>
    						</div>
    						<div class="modal-footer">
    							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    							<button type="submit" class="btn btn-success">Update</button>
    						</div>
                        </form>
					</div>
				</div>
			</div>
			<!-- end modal medium -->
        </div>
        <!-- End Page Container -->
    </div>

    <!-- Javascript Links -->
    @include('admin/include/javascript')
    <script>
    $(document).ready(function (e) {
        $(document).on("click", ".edit-modal", function (e) {
            var logo_id = $(this).attr('data-value');
            $('input[name="edit_logo"]').val(logo_id);
        });
    });
    </script>
</body>
</html>
