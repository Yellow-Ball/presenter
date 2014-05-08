@include('admin.header')
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
						@yield('page_title', '')
						<small>@yield('subtitle', '')</small>
					</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->

			@if( Session::has('message') )
				<div class="row">
					<div class="col-lg-12">
						<div class="alert alert-info">
							{{ Session::get('message') }}
                        </div>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
			@endif

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-body">
							@yield('content', '')
						</div>
					</div>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->

		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

  @include('admin.footer')