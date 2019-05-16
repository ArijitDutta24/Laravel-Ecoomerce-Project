@extends('layouts.master')

@section('content')
<!-- Sidebar + Main Content Start-->

	<div class="container margin-top-20">
		<div class="row">
			<div class="col-md-4">
				 <ul class="list-group">
				  <li class="list-group-item">First item</li>
				  <li class="list-group-item">Second item</li>
				  <li class="list-group-item">Third item</li>
				 </ul> 
			</div>

			<div class="col-md-8">
				<div class="widget">
					<h3>Feature Product</h3>
					<div class="row product_list">
						<div class="col-md-4">
							<div class="card">
							  <img class="card-img-top feature-img" src="{{ asset('images/products/'.'redmi 7.jpeg') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">Redmi-7 Pro</h4>
							    <p class="card-text">Rs 13,999/-</p>
							    <a href="#" class="btn btn-outline-primary">Add To Cart</a>
							  </div>
							</div>
						</div>

						

					</div>
				</div>

				<!-- <div class="widget">
					<h3>Category Products</h3>
					<div class="row">
						<div class="col md-4">
							
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>

	<!-- Sidebar + Main Content Start-->
	@endsection