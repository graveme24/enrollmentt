@extends('layouts.guest')

@section('content')
<section id="infinite" class="text-white tm-font-big tm-parallax" >
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md tm-navbar" id="">
      <div class="container">
        <div class="tm-next">
            <a href="#infinite" class="navbar-brand">Haven of Wisdom Academy</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link tm-nav-link" href="#infinite">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tm-nav-link" href="#whatwedo">Enrollment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link tm-nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
                <a href="../login" class="nav-link tm-nav-link" >Login to Portal</a>
            </li>

          </ul>

        </div>
      </div>
    </nav>



    <div class="text-center tm-hero-text-container">
      <div class="tm-hero-text-container-inner">
        @if (\Session::has('wait'))
        <div class="alert alert-success alert-styled-left alert-dismissible" style="margin-left: 300px;
    margin-right: 300px;">
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
            <ul>
                {!! \Session::get('wait') !!}
            </ul>
        </div>
        @endif
          <h2 class="tm-hero-title">Haven of Wisdom Academy</h2>
      </div>
    </div>

    <div class="tm-next tm-intro-next">
      <a href="#whatwedo" class="text-center tm-down-arrow-link">
        <i class="fas fa-2x fa-arrow-down tm-down-arrow"></i>
      </a>
    </div>
  </section>

  <section id="whatwedo" class="tm-section-pad-top">

    <div class="container">

          <div class="row tm-content-box"><!-- first row -->
              <div class="col-lg-12 col-xl-12">
                  <div class="tm-intro-text-container">
                      <h2 class="tm-text-primary mb-4 tm-section-title">Haven of Wisdom (Enrollment)</h2>
                      <p class="mb-4 tm-intro-text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, sit. Temporibus alias rem tenetur odio dolore eaque autem exercitationem quia repudiandae a. Cupiditate, error odit voluptates ex dolor ratione nobis possimus blanditiis fugiat. Ullam eaque consequuntur tenetur repellat reiciendis. Voluptas odit quisquam neque itaque qui laboriosam aperiam, impedit aut animi est, corporis magni voluptate laborum, illum rem aliquid nisi vel quasi facere non officiis dolor rerum. Magni pariatur corporis, distinctio placeat nisi aliquam dolore? Harum, eligendi. Magni officiis ipsum quas, aliquam aspernatur laboriosam numquam consequatur, sunt at quia reprehenderit ipsa nobis itaque repudiandae natus! Enim earum repellendus consequatur. Quo, odit?</p>
                  </div>
              </div>

          </div><!-- first row -->

          <div class="row tm-content-box"><!-- second row -->
              <div class="col-lg-1">
                  <i class="far fa-3x fa-chart-bar text-center tm-icon"></i>
              </div>
              <div class="col-lg-5">
                  <div class="tm-intro-text-container">
                      <h2 class="tm-text-primary mb-4">Pre-Register</h2>
                      <p class="mb-4 tm-intro-text">
                          Go to this link for Pre-Registration.
                            <a href="{{ route('registration') }}">Register</a>
                        </p>
                  </div>
              </div>

              <div class="col-lg-1">
                  <i class="far fa-3x fa-comment-alt text-center tm-icon"></i>
              </div>
              <div class="col-lg-5">
                  <div class="tm-intro-text-container">
                    <h2 class="tm-text-primary mb-4">Inquiry</h2>
                  </div>
              </div>

          </div><!-- second row -->

          <div class="row tm-content-box"><!-- third row -->
              <div class="col-lg-1">
                  <i class="fas fa-3x fa-fingerprint text-center tm-icon"></i>
              </div>
              <div class="col-lg-5">
                  <div class="tm-intro-text-container">
                      <h2 class="tm-text-primary mb-4">Top Security</h2>
                      <p class="mb-4 tm-intro-text">
                    You have <strong>no</strong> authority to post this template as a ZIP file on your template collection websites. You can <strong>use</strong> this template for your commercial websites.</p>

                        <div class="tm-continue">
                          <a href="#testimonials" class="tm-intro-text tm-btn-primary">Learn More</a>
                      </div>
                  </div>
              </div>

              <div class="col-lg-1">
                  <i class="fas fa-3x fa-users text-center tm-icon"></i>
              </div>
              <div class="col-lg-5">
                  <div class="tm-intro-text-container">
                    <h2 class="tm-text-primary mb-4">Social Work</h2>
                      <p class="mb-4 tm-intro-text">
                    You can change <a href="https://fontawesome.com/icons?d=gallery">Font Awesome icons</a> by either <b><em>fas or far</em></b> in the HTML codes. For Examples:<br>
                    <em>&lt;i class=&quot;fas fa-users&quot;&gt;&lt;i class=&quot;far fa-chart-bar&quot;&gt;</em> </p>

                        <div class="tm-continue">
                          <a href="#testimonials" class="tm-intro-text tm-btn-primary">Details</a>
                      </div>
                  </div>
              </div>

          </div><!-- third row -->

      </div>

  </section>



  {{-- <section id="gallery" class="tm-section-pad-top">
    <div class="container tm-container-gallery">
      <div class="row">
        <div class="text-center col-12">
            <h2 class="tm-text-primary tm-section-title mb-4">Gallery</h2>
            <p class="mx-auto tm-section-desc">
              Praesent sed pharetra lorem, blandit convallis mi. Aenean ornare elit ac metus lacinia, sed iaculis nibh semper. Pellentesque est urna, lobortis eu arcu a, aliquet tristique urna.
            </p>
        </div>
      </div>
      <div class="row">
          <div class="col-12">
              <div class="mx-auto tm-gallery-container">
                  <div class="grid tm-gallery">
                    <a href="img/gallery-img-01.jpg">
                      <figure class="effect-honey tm-gallery-item">
                        <img src="img/gallery-tn-01.jpg" alt="Image 1" class="img-fluid">
                        <figcaption>
                          <h2><i>Physical Health <span>Exercise!</span></i></h2>
                        </figcaption>
                      </figure>
                    </a>
                    <a href="img/gallery-img-02.jpg">
                      <figure class="effect-honey tm-gallery-item">
                        <img src="img/gallery-tn-02.jpg" alt="Image 2" class="img-fluid">
                        <figcaption>
                          <h2><i>Rain on Glass <span>Second Image</span></i></h2>
                        </figcaption>
                      </figure>
                    </a>
                    <a href="img/gallery-img-03.jpg">
                      <figure class="effect-honey tm-gallery-item">
                        <img src="img/gallery-tn-03.jpg" alt="Image 3" class="img-fluid">
                        <figcaption>
                          <h2><i><span>Sea View</span> Mega City</i></h2>
                        </figcaption>
                      </figure>
                    </a>
                    <a href="img/gallery-img-04.jpg">
                      <figure class="effect-honey tm-gallery-item">
                        <img src="img/gallery-tn-04.jpg" alt="Image 4" class="img-fluid">
                        <figcaption>
                          <h2><i>Dream Girl <span>Thoughts</span></i></h2>
                        </figcaption>
                      </figure>
                    </a>
                    <a href="img/gallery-img-05.jpg">
                      <figure class="effect-honey tm-gallery-item">
                        <img src="img/gallery-tn-05.jpg" alt="Image 5" class="img-fluid">
                        <figcaption>
                          <h2><i><span>Workstation</span> Offices</i></h2>
                        </figcaption>
                      </figure>
                    </a>
                    <a href="img/gallery-img-06.jpg">
                      <figure class="effect-honey tm-gallery-item">
                        <img src="img/gallery-tn-06.jpg" alt="Image 6" class="img-fluid">
                        <figcaption>
                          <h2><i>Just Above <span>The City</span></i></h2>
                        </figcaption>
                      </figure>
                    </a>
                    <a href="img/gallery-img-01.jpg">
                      <figure class="effect-honey tm-gallery-item">
                        <img src="img/gallery-tn-01.jpg" alt="Image 7" class="img-fluid">
                        <figcaption>
                          <h2><i>Another <span>Exercise Time</span></i></h2>
                        </figcaption>
                      </figure>
                    </a>
                    <a href="img/gallery-img-02.jpg">
                      <figure class="effect-honey tm-gallery-item">
                        <img src="img/gallery-tn-02.jpg" alt="Image 8" class="img-fluid">
                        <figcaption>
                          <h2><i>Repeated <span>Image Spot</span></i></h2>
                        </figcaption>
                      </figure>
                    </a>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </section> --}}

  <!-- Contact -->
  <section id="contact" class="tm-section-pad-top tm-parallax-2">

    <div class="container tm-container-contact">

      <div class="row">

          <div class="text-center col-12">
              <h2 class="tm-section-title mb-4">Contact Us</h2>
              <p class="mb-5">
                Proin enim orci, tincidunt quis suscipit in, placerat nec est. Vestibulum posuere faucibus posuere. Quisque aliquam velit eget leo blandit egestas. Nulla id posuere felis, quis tristique nulla.
              </p><br>
          </div>

          {{-- <div class="col-sm-12 col-md-6">
            <form action="" method="get">
              <input id="name" name="name" type="text" placeholder="Your Name" class="tm-input" required />
              <input id="email" name="email" type="email" placeholder="Your Email" class="tm-input" required />
              <textarea id="message" name="message" rows="8" placeholder="Message" class="tm-input" required></textarea>
              <button type="submit" class="btn tm-btn-submit">Submit</button>
            </form>
          </div> --}}

          <div class="col-sm-12 col-md-6">

              {{-- <div class="contact-item">
                <a rel="nofollow" href="https://www.tooplate.com/contact" class="item-link">
                    <i class="far fa-2x fa-comment mr-4"></i>
                    <span class="mb-0">Chat Online</span>
                </a>
              </div> --}}

              <div class="contact-item">
                <a rel="nofollow" href="mailto:mail@company.com" class="item-link">
                    <i class="far fa-2x fa-envelope mr-4"></i>
                    <span class="mb-0">havenowisdom@gmail.com</span>
                </a>
              </div>

              <div class="contact-item">
                <a rel="nofollow" href="https://www.google.com/maps" class="item-link">
                    <i class="fas fa-2x fa-map-marker-alt mr-4"></i>
                    <span class="mb-0">Alapan St, Imus, Cavite</span>
                </a>
              </div>

              <div class="contact-item">
                <a rel="nofollow" href="tel:0100200340" class="item-link">
                    <i class="fas fa-2x fa-phone-square mr-4"></i>
                    <span class="mb-0">(046) 471 1386</span>
                </a>
              </div>

              <div class="contact-item">&nbsp;</div>

          </div>


      </div><!-- row ending -->

    </div>

        <footer class="text-center small tm-footer">
        <p class="mb-0">
        Copyright &copy; 2020 HWA

        {{-- . <a rel="nofollow" href="https://www.tooplate.com" title="HTML templates">Designed by TOOPLATE</a></p> --}}
      </footer>

  </section>
@endsection
