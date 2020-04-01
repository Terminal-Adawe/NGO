<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>Youth Alive Ghana</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  </head>
  <body>
    
  @include ('navbar')
    
    <div class="hero-wrap" style="background-image: url('{{ Voyager::image($data['properties']->mainimage) }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $data['properties']->our_mission }}</h1>
            <!-- <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by <a href="#">Colorlib.com</a></p> -->

            <!-- <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span class="icon-play mr-2"></span>Watch Video</a></p> -->
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-counter ftco-intro" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
              	<span>Served Over</span>
                <strong class="number" data-number="1432805">0</strong>
                <span>Children in 190 countries in the world</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Donate Money</h3>
              	<p>{{ $data['properties']->donate_money_phrase }}</p>
              	<p><a href="#" class="btn btn-white px-3 py-2 mt-2">Donate Now</a></p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
              	<h3 class="mb-4">Be a Volunteer</h3>
              	<p>{{ $data['properties']->be_volunteer_phrase }}</p>
              	<p><a href="#" class="btn btn-white px-3 py-2 mt-2">Be A Volunteer</a></p>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Our Mission</h3>
                <p>{{ $data['properties']->our_mission }}</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Our vision</h3>
                <p>{{ $data['properties']->our_vision }}</p>
              </div>
            </div>      
          </div>
          <!-- <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading">Sponsorship</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div> -->
        </div>
    	</div>
    </section>


    <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Causes</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="carousel-cause owl-carousel">
              @foreach ($data['causes'] as $cause)
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url('{{ Voyager::image($cause->image) }}');"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#">{{ $cause->title }}</a></h3>
		    						<p>{{ $cause->summary }}</p>
		    						<!-- <span class="donation-time mb-3 d-block">Last donation 1w ago</span> -->
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                <!-- <span class="fund-raised d-block">$12,000 raised of $30,000</span> -->
		    					</div>
		    				</div>
	    				</div>
	    			  @endforeach
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

<!--     <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Latest Donations</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url('{{ URL::asset('images/person_1.jpg')}}');"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
        					<span class="position">Donated Just now</span>
        					<div class="text">
		        				<p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url('{{ URL::asset('images/person_2.jpg')}}');"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
        					<span class="position">Donated Just now</span>
        					<div class="text">
		        				<p>Donated <span>$150</span> for <a href="#">Children Needs Food</a></p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url('{{ URL::asset('images/person_3.jpg')}}');"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Ivan Jacobson</a></h3>
        					<span class="position">Donated Just now</span>
        					<div class="text">
		        				<p>Donated <span>$250</span> for <a href="#">Children Needs Food</a></p>
		        			</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
    </section> -->

    <section class="ftco-gallery">
    	<div class="d-md-flex">
        @foreach ($data['pictures'] as $picture)
          <a href="{{ Voyager::image($picture->image) }}" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url('{{ Voyager::image($picture->image) }}');">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="icon-search"></span>
          </div>
          </a>
        @endforeach
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent articles</h2>
            <p>articles on the journey so far...</p>
          </div>
        </div>
        <div class="row d-flex">

          @foreach ($data['articles'] as $article)
          <form method='get' class="col-4 col-md-4 col-sm-6 d-flex ftco-animate" action="{{ url('/read') }}">
            {{ csrf_field() }}
            <input type='hidden' value="{{ $article->id }}" name='id'>
            <div class="blog-entry align-self-stretch">
              <button type='submit' href="blog-single.html" class="block-20" style="background-image: url('{{ Storage::url($article->image) }}');">
              </button>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">{{ $article->arthur }}</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><button type='submit' class="btn-link" style="background-color: none; border: none;" href="#">{{ $article->title }}</button></h3>
                <p>{{ $article->summary }}</p>
              </div>
            </div>
        </form>
          @endforeach


        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">What's happening...</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <blockquote class="twitter-tweet"><p lang="en" dir="ltr">&quot;End child marriage. Empower the next generation&quot; <a href="https://twitter.com/wiyala?ref_src=twsrc%5Etfw">@Wiyala</a> has a message for everyone. Child marriage kills the dreams of the girl child and jeopardises her education <a href="https://twitter.com/hashtag/EndChildMarriage?src=hash&amp;ref_src=twsrc%5Etfw">#EndChildMarriage</a> <a href="https://twitter.com/hashtag/BuildingThemForTheFuture?src=hash&amp;ref_src=twsrc%5Etfw">#BuildingThemForTheFuture</a> <a href="https://twitter.com/GPChildMarriage?ref_src=twsrc%5Etfw">@GPChildMarriage</a><a href="https://twitter.com/UNICEFGhana?ref_src=twsrc%5Etfw">@UNICEFGhana</a> <a href="https://twitter.com/gacaghana?ref_src=twsrc%5Etfw">@gacaghana</a> <a href="https://twitter.com/GirlsNotBrides?ref_src=twsrc%5Etfw">@GirlsNotBrides</a> <a href="https://t.co/b149ExqUYD">pic.twitter.com/b149ExqUYD</a></p>&mdash; Youth Alive (@YouthAlive_GH) <a href="https://twitter.com/YouthAlive_GH/status/1133710640445632512?ref_src=twsrc%5Etfw">May 29, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
             <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Adolescent sexual and reproductive health rights and responsibilities workshop organised for peer educators in the UER. Our workshops not only educate students on their S&amp;RH, but also builds their capacities and gives them assertiveness training. <a href="https://twitter.com/hashtag/BuildingThemForTheFuture?src=hash&amp;ref_src=twsrc%5Etfw">#BuildingThemForTheFuture</a> <a href="https://t.co/Q9fDyP44er">https://t.co/Q9fDyP44er</a></p>&mdash; Youth Alive (@YouthAlive_GH) <a href="https://twitter.com/YouthAlive_GH/status/1164880556578000897?ref_src=twsrc%5Etfw">August 23, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <blockquote class="twitter-tweet"><p lang="en" dir="ltr">By educating each other, we put ourselves in a position of power. In order to achieve anything, it is important to come together to share resources and knowledge - Rachel Brown, vice president of the Global Union Diaspora <a href="https://t.co/CNekohGybg">pic.twitter.com/CNekohGybg</a></p>&mdash; Youth Alive (@YouthAlive_GH) <a href="https://twitter.com/YouthAlive_GH/status/1158680572857913344?ref_src=twsrc%5Etfw">August 6, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>
        </div>
      </div>
    </section>
		
	<!-- 	<section class="ftco-section-3 img" style="background-image: url('{{ URL::asset('images/bg_3.jpg')}}');">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex">
    		<div class="col-md-6 d-flex ftco-animate">
    			<div class="img img-2 align-self-stretch" style="background-image: url('{{ URL::asset('images/bg_4.jpg')}}');"></div>
    		</div>
    		<div class="col-md-6 volunteer pl-md-5 ftco-animate">
    			<h3 class="mb-3">Be a volunteer</h3>
    			<form action="#" class="volunter-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
            </div>
          </form>
    		</div>    			
    		</div>
    	</div>
    </section> -->
    
    @include('footer')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ URL::asset('js/popper.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ URL::asset('js/aos.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ URL::asset('js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="{{ URL::asset('js/main.js') }}"></script>
    
  </body>
</html>