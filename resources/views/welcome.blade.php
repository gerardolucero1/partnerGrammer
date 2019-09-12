@extends('layouts.backend')
@section('content')

<div class="wrapper mb-5">
			<!-- Servicios-->
			<div class="testimonials-2 section section-testimonials">
				<div class="container mt-5">
					<div class="row">
						<div class="col-lg-5 col-md-5" style="">
                            <img onMouseOver="manitance()" src="http://www.partnergrammer.com/manitance_icon.png" class="maintenance" alt="" style="">
							<img onMouseOver="mobile()" src="http://www.partnergrammer.com/mobile_icon.png" class="mobile" alt="" style="">
							<img onMouseOver="web()" src="http://www.partnergrammer.com/webdevelopment_icon.png" class="web" alt="" style="">
							<img onMouseOver="custom()" src="http://www.partnergrammer.com/custom_icon.png" class="custom">
						</div>
						
						
						<div class="col-lg-7 col-md-7">			
							<h1>Our Services</h1>							
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border:solid; border-color:#E3E3E3; border-width:1px; padding-bottom:20px; padding-top:20px;">
								<p id="title_services" style="font-size:2.5em;">Web Development</p>
								<p id="content">Everything from sophisticated business automation platforms, to complex e-commerce platforms, leverage web development to provide powerful software to the world in real-time.<br>
                                At Partnergrammer, Web Development forms a cornerstone of our business technology practices. We use technologies like Java, PHP, .NET & Python to build scalable, 
                                enterprise-grade software that stands up to rigorous use across a variety of daily situations and it is friendly to use.
                                </p>
								
								<!-- <div class="" style="background:#1abc9c; padding:10px; text-align:center;; padding-left:20px; padding-right:20px; color:white; width:40%; margin-left:30%; margin-top:20px; cursor:pointer">CONTACT US</div>
 -->								<button type="button" style="background-color:#1abc9c; border-color: #1abc9c ;padding:10px; text-align:center;; padding-left:20px; padding-right:20px; color:white; width:40%; margin-left:30%; margin-top:20px" class="btn btn-info" data-toggle="modal" data-target="#ContactModal">CONTACT US</button>
								
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
  
@endsection 