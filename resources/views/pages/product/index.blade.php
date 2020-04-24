


@extends('layouts.master')
@section('content')
<h3>pages\product\index</h3>
{{--Sidebar+content start--}}

<div class="container margin-top-20">
	<div class="row">



		<div class="col-md-4">
@include('partials.sidebar')
<a href="http://localhost:8000/">Home Page</a>
		</div>





									<div class="col-md-8">



										<div class="widget">
												<h3 align="center">MOBILE</h3>
											<div class="row">

					

@foreach ($products as $product)

<div class"card-body">



																<div class="col-md-3">
																
                                                <div class="card">
	 												
<img class="card-img-top feacher-img" src="{{ asset('images/products/'.'1.png')  }}" alt="samsung galaxy">
   			<h4 class="card-title">Walton
												{{$product->title}}
												
												</h4>

												<p class="card-text">{{$product->price}}</p>
									<a href="#" class="btn btn-outline-success">See Profile</a>
															</div>
														</div>
												</div>
											</div>
										</div>
										
										
										
										
							@endforeach			
										
										
								</div>








											</div>
										</div>
								</div>

	
	                    </div>

                            </div>
                    {{--Sidebar+content end--}}

                            @endsection

   
                                                                                                                                                                   
                                                                                                                                              
                                     																								
									