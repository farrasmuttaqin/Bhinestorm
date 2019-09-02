@extends('layout/main')

@section('title',$nama)

@section('container')

{{ $nama }}
<section class="ftco-section ftco-degree-bg" style="background-color:white;">
  <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-md-10 ftco-animate text-center">
          <h1 class="mb-4">We love to 
            <strong class="typewrite" data-period="4000" data-type='[ "Develop your website.", "Create your mobile app."]'>
              <span class="wrap"></span>
            </strong>
          </h1>
          <h3>Don't be afraid to Dream Big !</h3>
          <br>
          <p><a href="https://vimeo.com/45830194" class="btn btn-primary btn-outline-white px-4 py-3 popup-vimeo"><span class="ion-ios-play mr-2"></span> Watch our Video</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Our Services</span>
        <h2>Racks provides a fully featured text services platform!</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-layers"></span></div></div>
          <div class="media-body p-2">
            <h3 class="heading">Unlimited Features</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-gears"></span></div></div>
          <div class="media-body p-2">
            <h3 class="heading">Multiple Functions</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-paper-plane"></span></div></div>
          <div class="media-body p-2">
            <h3 class="heading">Advanced Visualizations</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>    
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-live_help"></span></div></div>
          <div class="media-body p-2">
            <h3 class="heading">Community &amp; Supports</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
    </div>
  </div>
</section>

<section class="ftco-section-parallax ftco-degree-bg">
  <div class="parallax-img d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
          <h2 class="h1 font-weight-bold">Turn every channel into a revenue channel and drive business growth</h2>
          <p><a href="#" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">View more details</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container-fluid">
    <div class="row no-gutters justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Works</span>
        <h2>Recent Works</h2>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="block-3 d-md-flex ftco-animate">
        <a href="portfolio.html" class="image" style="background-image: url('{{ url('/') }}assets/images/work-1.jpg'); "></a>
        <div class="text">
          <h4 class="subheading">Illustration</h4>
          <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        </div>
      </div>
      <div class="block-3 d-md-flex ftco-animate">
        <a href="portfolio.html" class="image order-2" style="background-image: url('{{ url('/') }}assets/images/work-2.jpg'); "></a>
        <div class="text order-1">
          <h4 class="subheading">Application</h4>
          <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        </div>
      </div>
      <div class="block-3 d-md-flex ftco-animate">
        <a href="portfolio.html" class="image" style="background-image: url('{{ url('/') }}assets/images/work-3.jpg'); "></a>
        <div class="text">
          <h4 class="subheading">Web Design</h4>
          <h2 class="heading"><a href="portfolio.html">Even the all-powerful Pointing has no control</a></h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section ftco-degree-bg">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Customer Says</span>
        <h2>Our satisfied customer says</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <div class="item text-center">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Dennis Green</p>
                <span class="position">Marketing Manager</span>
              </div>
            </div>
          </div>
          <div class="item text-center">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Dennis Green</p>
                <span class="position">Interface Designer</span>
              </div>
            </div>
          </div>
          <div class="item text-center">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Dennis Green</p>
                <span class="position">UI Designer</span>
              </div>
            </div>
          </div>
          <div class="item text-center">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Dennis Green</p>
                <span class="position">Web Developer</span>
              </div>
            </div>
          </div>
          <div class="item text-center">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Dennis Green</p>
                <span class="position">System Analytics</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-counter ftco-degree-bg" id="section-counter">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <h2>Our achievements</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="1000">0</strong>
            <span>Customers are satisfied with our professional support</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="12000">0</strong>
            <span>Amazing preset options to be mixed and combined</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="10000">0</strong>
            <span>Average response time on live chat support channel</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading">Blog</span>
        <h2>Recent Blog</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20" style="background-image: url('{{ url('/') }}assets/images/image_1.jpg');">
          </a>
          <div class="text p-4 d-block">
            <div class="meta mb-3">
              <div><a href="#">July 12, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="blog-entry" data-aos-delay="100">
          <a href="blog-single.html" class="block-20" style="background-image: url('{{ url('/') }}assets/images/image_2.jpg');">
          </a>
          <div class="text p-4">
            <div class="meta mb-3">
              <div><a href="#">July 12, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="blog-entry" data-aos-delay="200">
          <a href="blog-single.html" class="block-20" style="background-image: url('{{ url('/') }}assets/images/image_3.jpg');">
          </a>
          <div class="text p-4">
            <div class="meta mb-3">
              <div><a href="#">July 12, 2018</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection