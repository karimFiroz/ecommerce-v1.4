


@extends('layouts.master')
@section('content')
<h3>pages\home</h3>
{{--Sidebar+content start--}}
<h1 align="center">Featured Products</h1>
<div class="container margin-top-20">
	<div class="row">
		<div class="col-md-4">
@include('partials.sidebar')

<a href="http://localhost:8000/">Home Page</a><br />
<a href="http://localhost:8000/home">Pull Data</a><br />

<a href="http://localhost:8000/contact">Contact Us</a><br />


	<a href="https://firozlearninghome.blogspot.com"target=" __blank">My Blog</a><br />
	<a href="https://firozshahschool.blogspot.com"target=" __blank">School Blog</a><br />
	<a href="https://firozshah.github.io/school"target=" __blank">School Web</a><br />
	<a href="https://karimfiroz.github.io/firoz"target=" __blank">My Web</a><br />
     <a href="https://github.com/laravel/laravel"target=" __blank">GitHub</a><br />
                    
    <a href="https://laravel.com/docs"target=" __blank">Documentation</a><br />
    <a href="https://laracasts.com"target=" __blank">Laracasts</a><br />
    <a href="https://laravel-news.com"target=" __blank">News</a><br />
   <a href="https://blog.laravel.com"target=" __blank">Blog</a><br />
   <a href="https://nova.laravel.com"target=" __blank">Nova</a><br />
    <a href="https://forge.laravel.com"target=" __blank">Forge</a><br />
    <a href="https://vapor.laravel.com"target=" __blank">Vapor</a><br />
    <a href="https://laravel.com/docs/7.x/migrations"target="  _blank">Migration</a><br />
    <a href="http://localhost/firozshah/"target="  _blank">Firozshah School</a><br />
		</div>





			<div class="col-md-8">



				<div class="widget">
						<h3 align="center">MOBILE</h3>
					<div class="row">
					<div class="col-md-3">
						<div class="card">
	<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'1.png')  }}" alt="samsung galaxy">
							<div class="card-body">
										<h4 class="card-title">Walton</h4>
									    <p class="card-text">3000/-TK</p>
									    <a href="#" class="btn btn-outline-success">See Profile</a>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="card">
<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'2.png')  }}" alt="samsung galaxy">
								  <div class="card-body">
								    <h4 class="card-title">Oppo</h4>
								    <p class="card-text">5000/-TK</p>
								    <a href="#" class="btn btn-outline-success">See Profile</a>
								</div>
						</div>
					</div>

					<div class="col-md-3">
					<div class="card">
<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'3.png')  }}" alt="samsung galaxy">
					<div class="card-body">
							    <h4 class="card-title">Samsung</h4>
							    <p class="card-text">4000/-TK</p>
							    <a href="#" class="btn btn-outline-success">See Profile</a>
					</div>
					</div>
					</div>

							<div class="col-md-3">
							<div class="card">
<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'4.png')  }}" alt="samsung galaxy">
								  <div class="card-body">
								    <h4 class="card-title">Nokia</h4>
								    <p class="card-text">6000/-TK</p>
								    <a href="#" class="btn btn-outline-success">See Profile</a>
								  </div>
							</div>
						</div>
					</div>
				</div>





				<div class="widget">
						<h3 align="center">LAPTOP</h3>
					<div class="row">
						<div class="col-md-3">
							<div class="card">
<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'5.png')  }}" alt="samsung galaxy">
								<div class="card-body">
									    <h4 class="card-title">Lenovo</h4>
									    <p class="card-text">35,000/-TK</p>
									    <a href="#" class="btn btn-outline-success">See Profile</a>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card">
<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'6.png')  }}" alt="samsung galaxy">
								<div class="card-body">
									    <h4 class="card-title">HP</h4>
									    <p class="card-text">40,000/-TK</p>
									    <a href="#" class="btn btn-outline-success">See Profile</a>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card">
<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'7.png')  }}" alt="samsung galaxy">
								<div class="card-body">
									    <h4 class="card-title">Dell</h4>
									    <p class="card-text">50,000/-TK</p>
									    <a href="#" class="btn btn-outline-success">See Profile</a>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card">
<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'8.png')  }}" alt="samsung galaxy">
								<div class="card-body">
									    <h4 class="card-title">Fujitsu</h4>
									    <p class="card-text">90,000/-TK</p>
									    <a href="#" class="btn btn-outline-success">See Profile</a>
								</div>
							</div>
						</div>
					</div>
				</div>


	


			


				<div class="widget">
						<h3 align="center">TV</h3>
					<div class="row">
						<div class="col-md-3">
							<div class="card">
<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'9.png')  }}" alt="Transtec">
								  <div class="card-body">
								    <h4 class="card-title">Transtec</h4>
								    <p class="card-text">50,000/-TK</p>
								    <a href="#" class="btn btn-outline-success">See Profile</a>
								  </div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card">
<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'10.png')  }}" alt="Hitachi">
								  <div class="card-body">
								    <h4 class="card-title">Hitachi</h4>
								    <p class="card-text">40,000/-TK</p>
								    <a href="#" class="btn btn-outline-success">See Profile</a>
								  </div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card">
<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'11.png')  }}" alt="panasonic">
								  <div class="card-body">
								    <h4 class="card-title">Panasonic</h4>
								    <p class="card-text">30,000/-TK</p>
								    <a href="#" class="btn btn-outline-success">See Profile</a>
								  </div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card">
<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'12.png')  }}" alt="Singer">
								  <div class="card-body">
								    <h4 class="card-title">Singer</h4>
								    <p class="card-text">20,000/-TK</p>
								    <a href="#" class="btn btn-outline-success">See Profile</a>
								  </div>
							</div>
						</div>
					</div>
				</div>






	
		</div>

	
	</div>
</div>
{{--Sidebar+content end--}}

@endsection