@extends('layouts.partials.master')
    @section('content')
    @yield('page-header')
		<div class="page-content">
			<div class="panel">
				<div class="panel-body container-fluid">
				    <div class="row row-lg">
				      	<div class="col-md-12">
				        <!-- Example Basic Form (Form grid) -->
				        	<div class="example-wrap">
						        	@yield('form-header')
						        <div class="example">
									@yield('create-form')
						        </div>
				      		</div>
				    	</div>
					</div>
				</div>
			</div>
		</div>
	@endsection	
