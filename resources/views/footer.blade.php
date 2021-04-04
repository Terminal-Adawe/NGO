  <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>{{ $data['aboutus']->about_us }}</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
            @foreach ($data['articles'] as $article)
            <form method='get' action="{{ url('/read') }}">
              {{ csrf_field() }}
              <div class="block-21 mb-4 d-flex">
                <!-- <form method='get' action="{{ url('/read') }}"> -->
                  <input type='hidden' value="{{ $article->id }}" name='id'>
                <button type='submit' class="blog-img mr-4" style="background-image: url('{{ Storage::url($article->image) }}');"></button>
                <div class="text">
                  <h3 class="heading"><button type='submit' class="designless-button-white">{{ $article->title }}</button></h3>
                  <div class="meta">
                    <div><button class="designless-button-grey" type='submit'><span class="icon-calendar"></span> {{ $article->created_at }}</button></div>
                    <div><a href="#"><span class="icon-person"></span> {{ $article->arthur }}</a></div>
                  </div>
                </div>
              <!-- </form> -->
              </div>
              </form>
            @endforeach

              <!-- <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('{{ asset('images/image_2.jpg')}}');"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{ url('/') }}" class="py-2 d-block">Home</a></li>
                <li><a href="{{ url('/about') }}" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Donate</a></li>
                <li><a href="#" class="py-2 d-block">Causes</a></li>
                <li><a href="{{ url('/articles') }}" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">{{ $data['properties']->address }}, {{ $data['properties']->city }}</span></li>
	                <li>
                    <a href="tel:{{ $data['properties']->telephone }}"><span class="icon icon-phone"></span><span class="text">{{ $data['properties']->telephone }}</span></a></li>
	                <li><a href="mailto:{{ $data['properties']->email }}"><span class="icon icon-envelope"></span><span class="text">{{ $data['properties']->email }}</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
  <!-- | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>