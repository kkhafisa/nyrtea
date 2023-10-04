@extends('layouts.frontend')

@section('main-fr-content')
<div id="site-wrap" class="site bg-header">
    <div id="header-wrap" class="is-clearfix">
        <header id="header" class="site-header">
          <div id="header-inner" class="site-header-inner container">
            <div class="level">
              <div class="level-left">
                 <div id="header-logo" class="site-logo ">
                 <!-- <div id="logo-inner" class="site-logo-inner"> -->
                    <!-- <a href="#header-bottom-wrap"> -->
                      <!-- <span class="logo-text">Nyrtea</span> -->
                      <img src="{{ asset('img/logo.png') }}" alt="">
                    <!-- </a> -->
                  <!-- </div> -->
                  <!-- #logo-inner -->
                </div>
                <!-- #header-logo -->
              </div>
              <!-- .level-left -->
              <div class="level-left">
                <div class="nav-wrap">
                  <nav class="main-navigation left">
                    <ul class="menu">
                      <li class="mega-menu niche-templates ">
                        <a href="/#header-bottom-wrap" style="color : #ba0171;">home</a>
                      </li>
                      <li>
                        <a href="/#services" style="color : #ba0171;">about Us</a>
                      </li>
                      <li>
                        <a href="/#product" style="color : #ba0171;">produk</a>
                      </li>
                      <li>
                        <a href="/#testimoni-product" style="color : #ba0171;">testimoni Produk</a>
                      </li>
                      <li>
                        <a href="/#bonus" style="color : #ba0171;">bonus Reward</a>
                      </li>
                      <li>
                        <a href="/#news" style="color : #ba0171;">Event</a>
                      </li>
                      <li>
                        <a href="/#profile" style="color : #ba0171;">profile</a>
                      </li>
                      <li>
                        <a href="/#support" style="color : #ba0171;">support System</a>
                      </li>
                    </ul>
                  </nav>
                  <!-- #site-navigation -->
                </div>
                <!-- #nav-wrap -->
              </div>
              <!-- .level-left -->
              <div class="level-right">
                <ul class="header-menu-icons ">
                  <!-- <li class="">
                  <a href="{{ route('login') }}" class="button is-primary is-small is-rounded" style="padding-top:8px;">Login</a>
                  </li> -->
                </ul>
                <!-- .header-menu-icons -->
                <!-- .modal.search-form-overlay -->
              </div>
              <!-- .level-right -->
            </div>
            <!-- .level -->
          </div>
          <!-- #header-inner -->
        </header>
        <!-- #header -->
      </div>
    </div>
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
          <div id="header-bottom-inner" class="site-header-bottom-inner ">
            <section class="hero page-title is-medium has-text-centered portfolio ken-burns top-custom">
              <div class="ken-burns-background" style="background-color:#ba0171"></div>
              <div class="hero-body">
                <div class="container">
                  <h1>gallery</h1>
                  <h3>Break Through Self Doubt And Fear</h3>
                </div>
                <!-- .hero-body -->
              </div>
              <!-- .container -->
            </section>
            <!-- .page-title -->
          </div>
          <!-- #header-bottom-inner -->
        </div>
        <!-- #header-bottom -->
      </div>
      <!-- #header-bottom-wrap -->
      <!-- import content layouts and modules -->
      <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
          <div id="content-area-inner" class="site-content-area-inner">
            <!-- works section -->
                  
            @foreach($event as $event)
            <section class="section works-list is-clearfix">
              <div class="container">
                <h1 class="heading-title style-1">{{$event-> name }}</h1>
                <p class="heading-title-bottom has-text-centered">{{$event -> description}}</p>
                <br>
                <div class="works isotope masonry image-hover effect-10 mfp-lightbox-gallery">
                  <div class="columns is-variable is-3 is-multiline">
                    @foreach($datas as $data)
                    <div class="column is-4 branding " data-aos="fade-up">
                      <div class="work-item">
                        <figure>
                          <a href="{{ route('file.show', encrypt($data->foto)) }}" class="mfp-lightbox mfp-image">
                            <img alt="" src="{{ route('file.show', encrypt($data->foto)) }}" style="min-width: 375px;">
                            <figcaption>
                              <ul class="social">
                                <li>
                                  <span class="icon">
                                    <i class="icon-magnifier"></i>
                                  </span>
                                </li>
                              </ul>
                            </figcaption>
                          </a>
                        </figure>
                      </div>
                      <!-- .work-item -->
                    </div>
                    @endforeach
                  </div>
                  <!-- .columns -->
                </div>
                <!-- .works -->
                <br> </div>
            </section>
            @endforeach
            <!-- subscribe section -->
            <!-- <section class="section subscribe-section has-background-primary-light is-clearfix">
              <div class="container">
                <h1 class="heading-title style-1">Stay in touch</h1>
                <p>We think in different ways and our thinking is decided by many factors. Some are known.</p>
                <div class="subscribe-form ">
                  <form>
                    <div class="field has-addons has-addons-centered ">
                      <div class="control">
                        <input class="input" type="text" placeholder="Your Email Address"> </div>
                      <div class="control">
                        <a href="#" class="button">Sign Up!</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section> -->
            <!-- . -->
          </div>
          <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
      </div>
      <div id="footer-wrap" class="is-clearfix">
        <footer id="footer" class="site-footer">
          <div id="footer-inner" class="site-footer-inner container">
            <div class="columns is-variable is-5 is-multiline">
              <div class="column is-4">
                <div class="widget widget-html">
                  <div class="textwidget">
                    <div id="footer-logo" class="site-logo ">
                      <a href="/">
                        <!-- <span class="logo-text"> Nyrtea</span> -->
                        <img src="{{ asset('frontend/images/logo.png') }}" alt="">
                      </a>
                    </div>
                    <!-- #footer-logo -->
                    <br>
                    <p></p>
                    <div class="footer-social-links ">
                      <ul>
                        <li>
                          <a href="#" target="_blank">
                            <span class="icon">
                              <i class="fab fa-facebook-f"></i>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#" target="_blank">
                            <span class="icon">
                              <i class="fab fa-twitter"></i>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#" target="_blank">
                            <span class="icon">
                              <i class="fab fa-instagram"></i>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#" target="_blank">
                            <span class="icon">
                              <i class="fab fa-pinterest-p"></i>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- .textwidget -->
                </div>
              </div>
              <!-- .column -->
              <div class="column">
                <div class="widget widget-links">
                </div>
                <!-- .widget -->
              </div>
              <!-- .column -->
              <!-- .column -->
              <!-- .column -->
            </div>
            <!-- .columns -->
          </div>
          <!-- #footer-inner -->
        </footer>
        <!-- #footer -->
      </div>
      <!-- #footer-wrap -->
      <div id="footer-bottom-wrap" class="is-clearfix">
        <div id="footer-bottom" class="site-footer-bottom">
          <div id="footer-bottom-inner" class="site-footer-bottom-inner ">
            <section class="section footer-bottom-content">
              <div class="container">
                <h2 class="display-none">footer</h2>
                <div class="level">
                  <div class="level-left">
                    <span class="footer-copyright">
                      <a href='/'>Nyrtea</a> ©
                      <span class='current-year'></span>. All Rights Reserved. </span>
                  </div>
                  <!-- .level-left -->
                  <div class="level-right">
                    <div class="nav-wrap">
                      <nav class="main-navigation right">
                        <ul class="menu">
                        </ul>
                      </nav>
                      <!-- #site-navigation -->
                    </div>
                    <!-- #nav-wrap -->
                  </div>
                  <!-- .level-right -->
                </div>
                <!-- .level -->
              </div>
            </section>
            <!-- .footer-bottom-content -->
          </div>
          <a href="https://api.whatsapp.com/send/?phone=6281111111&amp;text&amp;type=phone_number&amp;app_absent=0" target="_blank" class="tooltipmake" style="position: fixed; right: 0px; bottom: 0px; margin-bottom: 40px; margin-right: 15px; border-radius: 50%; display: block; font-size: 12px;" data-orginal-font-size="12" data-orginal-line-height="26" data-orginal-letter-spacing="0"><img src="{{asset('frontend/images/wa2.png')}}" style="height:45px;width:45px;"><span class="tooltiptext" data-orginal-font-size="10" data-orginal-line-height="16" data-orginal-letter-spacing="0" style="font-size: 10px;"></span></a>
          <!-- #footer-bottom-inner -->
        </div>
        <!-- #footer-bottom -->
      </div>
</div>
@endsection