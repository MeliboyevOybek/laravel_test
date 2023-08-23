@extends('main.layouts')


@section('content')
    <div class="advisor_section layout_padding">
        <div class="container">
            {{-- <h1 class="what_text">What We Do</h1>
        </div>
    </div>
    <div class="advisor_section_2 layout_padding">
        <div class="container">
            <div class="box_section">
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <div class="box_main">
                            <div class="image_3"></div>
                            <h4 class="consultative_text">Consultative Training</h4>
                            <p class="readable_text">Readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the readable</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="box_main active">
                            <div class="image_4 active"></div>
                            <h4 class="consultative_text active">Consultative Training</h4>
                            <p class="readable_text active">Readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the readable</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="box_main">
							<div>
								Name  @class(['p-4', 'font-bold' => true])
							</div>
                            <div class="image_5"></div>
                            <h4 class="consultative_text">Consultative Training</h4>
                            <p class="readable_text">Readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the readable</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section start -->
    <div class="footer_section layout_padding margin_top">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3 col-sm-6">
    				<h4 class="address_text">ADDRESS</h4>
    				<p class="simply_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been  </p>
    			</div>
    			<div class="col-lg-3 col-sm-6">
    				<h4 class="address_text">QUICK LINKS</h4>
    				<div class="footer_menu_main">
    				    <div class="footer_menu"> --}}
    				    	{{-- <ul>
    				    		<li><a href="index.html.html">Home</a></li>
    				    		<li><a href="blog.html">Blog</a></li>
    				    		<li><a href="about.html">About</a></li>
    				    		<li><a href="services.html">Services</a></li>
    				    		<li><a href="contact.html">Contact Us</a></li>
    				    	</ul> --}}
    				    {{-- </div>
    				</div>
    			</div> --}}
    			<div class="col-lg-6 col-sm-12">
    				<div class="newsletter_section">
    					<div class="newsletter_left">
    						<h4 class="address_text">Newsletter</h4>
    					</div>
    					<div class="newsletter_right">
    						<div class="social_icon">
                                @foreach ($products as $item)
                                <ul>
    				    	    	<li><a href="{{url("product/".$item->id)}}"><img src="{{ $item->image }}"></a></li>
    				                <p class="simply_text">{{ $item->content }} </p>
                                    <li>
                                    <h5 class="categoriesIn__title__h5"></h5>
                                    <h4 class="categoriesIn__title__h4">{{ $item->product_code }}</h4>          
                                    </li>
                                    <li>
                                    <h5 class="categoriesIn__title__h5"></h5>
                                    
                                    <h4 class="categoriesIn__money">{{ $item->price }}</h4>
                                    </li>
                                    <div>
                                    <a href="{{route('addToCartProducts' , $item->id)}}" class="btn btn-success"><div data-v-52274b1e="" draggable="true" class="app-icon grid-icon__icon is-stickers"><img srcset="https://img.icons8.com/?size=2x&amp;id=2212PsH6OEOq&amp;format=png 2x, https://img.icons8.com/?size=1x&amp;id=2212PsH6OEOq&amp;format=png 1x" src="https://img.icons8.com/?size=2x&amp;id=2212PsH6OEOq&amp;format=png 2x" alt="Shopping Cart icon" loading="lazy" width="60" height="60"> <!----></div></a>
                                    
                                    </div>
    				    	    </ul> 
                                @endforeach
    				    	    
    				        </div>
    					</div>
    				{{-- </div>
    				<input type="text" class="mail_bt" placeholder="Enter Your Email" name="Enter Your Email">
    				<input type="text" class="mail_bt" placeholder="Phone" name="Phone">
    				<div class="subscribe_bt"><a href="#">Subscribe</a></div>
    			</div> --}}
    		</div>
    	</div>
    </div>
    @endsection