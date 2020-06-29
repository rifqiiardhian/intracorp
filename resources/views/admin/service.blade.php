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
                                    <h2 class="title-1">Services</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-lg-12">
                                <a href="{{ url('/a/service/add')}}">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small m-b-10">
                                        <i class="zmdi zmdi-plus"></i>add services
                                    </button>
                                </a>
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Services</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($no = 1)
                                            @foreach($services as $dataservice)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td style="max-width: 300px">
                                                    <b>{{ $dataservice->name }}</b>
                                                    <br/>
                                                    {{ $dataservice->description }}
                                                </td>
                                                <td>
                                                    <span>
                                                        <a href="{{ url('/a/service/edit?serviceId=' .$dataservice->id)}}"><button class="btn btn-sm btn-warning text-white"><i class="fa fa-pencil-alt"></i></button></a>
                                                    </span>
                                                    <span>
                                                        <a href="{{ '#' }}"><button class="btn btn-sm btn-danger delete-modal" data-value="{{ $dataservice->id }}" data-toggle="modal" data-target="#staticModal"><i class="fas fa-trash-alt"></i></button></a>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $services->links() }}
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
            <!-- modal static -->
			<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
			 data-backdrop="static">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticModalLabel">Confirmation</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
                        <form action="{{ url('/a/service/delete') }}" method="post">
    					<div class="modal-body">
                            <input type="hidden" name="delete_services"/>
                            {{ csrf_field() }}
    						<p>
    							Are you sure want to delete services data ?
    						</p>
    					</div>
    					<div class="modal-footer">
    						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    						<button type="submit" class="btn btn-success">Yes</button></a>
    					</div>
                        </form>
					</div>
				</div>
			</div>
			<!-- end modal static -->
        </div>
        <!-- End Page Container -->
    </div>

    <!-- Javascript Links -->
    @include('admin/include/javascript')
    <script>
    $(document).ready(function (e) {
        $(document).on("click", ".delete-modal", function (e) {
            var delete_id = $(this).attr('data-value');
            $('input[name="delete_services"]').val(delete_id);
        });
    });
    </script>
</body>
</html>
