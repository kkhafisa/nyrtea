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
                        <a href="#header-bottom-wrap" style="color : #ba0171;">home</a>
                      </li>
                      <li>
                        <a href="#services" style="color : #ba0171;">about Us</a>
                      </li>
                      <li>
                        <a href="#product" style="color : #ba0171;">produk</a>
                      </li>
                      <li>
                        <a href="#testimoni-product" style="color : #ba0171;">testimoni Produk</a>
                      </li>
                      <li>
                        <a href="#bonus" style="color : #ba0171;">bonus Reward</a>
                      </li>
                      <li>
                        <a href="#news" style="color : #ba0171;">Event</a>
                      </li>
                      <li>
                        <a href="#profile" style="color : #ba0171;">profile</a>
                      </li>
                      <li>
                        <a href="#support" style="color : #ba0171;">support System</a>
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
      <!-- #header-wrap -->
      <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
          <div id="header-bottom-inner" class="site-header-bottom-inner ">
            <!-- .slider -->
            <section class="hero slider is-clearfix top-custom">
              <div class="owl-carousel dots carousel-items-  ">
                @foreach($slides as $slide)
                  <div>
                      <img src="{{ route('file.show', encrypt($slide->foto)) }}">
                  </div>
                  @endforeach
                </div>
            </section>
          </div>
          <!-- #header-bottom-inner -->
        </div>
        <!-- #header-bottom -->
      </div>
      <!-- #header-bottom-wrap -->
      <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
          <div id="content-area-inner" class="site-content-area-inner">
            <!-- import content layouts and modules -->
            <!-- start adding page content -->
            <section id="services" class="section padding-bottom-none is-clearfix">
              <div class="container">
                <h1 class="heading-title style-1">About Us</h1>
                <br>
                <br>
                <div class="columns is-variable is-8 is-multiline">
                  <div class="column is-6-desktop is-12-tablet" >
                    <br>
                    <p><b>PT NYRTEA BEAUTIKA NUSANTARA</b> bergerak dalam penjualan langsung berjenjang dengan produk - produk kecantikan, serta didukung oleh sistem dan teknologi sehingga mempermudah pencapaian kesuksesan bagi para mitranya.</p>
                    <br>
                    <p><b>Visi</b><br>
                    Menjadi perusahaan yang dapat mensejahterahkan seluruh stakeholder dan membawa berkah
                    </p><br>
                    <p><b>Visi</b><br>
                    Melayani dengan sepenuh hati<br>
                    Melahirkan SDM yang amanah, sukses, dan bermanfaat<br>
                    Mendistribusikan produk yang berkualitas tinggi
                    </p>
                    <!-- .works-button -->
                  </div>
                  <div class="column is-6-desktop is-12-tablet has-text-centered" >
                    <div class="works-latest">
                      <div class="works-latest-item">
                        <img  src="{{asset('frontend/images/nyrtea/about.jpg')}}" >
                        <!-- .works-latest-icon -->
                      </div>
                      <!-- .works-latest-item -->
                    </div>
                  </div>
                </div>
                <!-- .columns -->
                <br>
                <br>
                <br> </div>
            </section>
            <section class="section watch-video is-clearfix" id="product">
              <div class="container">
                <h1 class="heading-title style-1">Produk</h1>
                <br>
                <br>
                <div class="columns is-variable is-8 is-multiline">
                  <div class="column is-4-desktop is-12-tablet has-text-centered" >
                    <div class="works-latest">
                      <div class="works-latest-item">
                        <img src="{{asset('frontend/images/nyrtea/pro-1.jpg')}}">
                        <!-- .works-latest-icon -->
                      </div>
                      <!-- .works-latest-item -->
                    </div>
                  </div>
                  <div class="column is-8-desktop is-12-tablet" >
                    <br>
                    <h2 class="heading-title style-2 has-text-left">Arnifa Sabun Green Yogurt
                      <br>
                      <span class="subtitle" style="font-size:16px;">BPOM NA18170500163</span>
                    </h2>
                    <div class="columns is-variable is-multiline">
                      <div class="column is-6-deskstop">
                        <p>
                        <ul>  
                        <li>Kandungan Utama:</li>
                        <li>- Extract Daun Teh</li>
                        <li>- Yogurt</li>
                        <li>- Klorofil</li>
                        <li>- Extract Sarang Burung Walet</li>
                        <li>- Minyak Zaitun</li>
                        <li>- Minyak Kelapa</li>
                        </ul>
                        </p>
                      </div>
                      <div class="column is-6-deskstop">
                        <p>
                        <ul>
                        <li>Manfaat:</li>
                        <li>- Membersihkan Kulit</li>
                        <li>- Menyegarkan Kulit</li>
                        <li>- Menjaga Kulit Agar Tetap Sehat</li>
                        <li>- Mengatasi Kulit Kusam</li>
                        <li>- Melembabkan Kulit</li>
                        <li>- Mengurangi Jerawat</li>
                        <li>- Memudarkan Flek dan Kerutan Wajah</li>
                        <li>- Mencegah Penuaan Dini</li>
                        <li>- Menghaluskan Kulit</li>
                        </ul>
                        </p>
                      </div>
                    </div>
                    <!-- .works-button -->
                  </div>
                </div>
                <br>
                <div class="columns is-variable is-8 is-multiline">
                  <div class="column is-4-desktop is-12-tablet has-text-centered" >
                    <div class="works-latest">
                      <div class="works-latest-item">
                        <img src="{{asset('frontend/images/nyrtea/pro-2.jpg')}}">
                        <!-- .works-latest-icon -->
                      </div>
                      <!-- .works-latest-item -->
                    </div>
                  </div>
                  <div class="column is-8-desktop is-12-tablet" >
                    <br>
                    <h2 class="heading-title style-2 has-text-left">Care and Protect - Sunscreen Cream
                      <br>
                      <span class="subtitle" style="font-size:16px;">BPOM NA18220103215</span>
                    </h2>
                    <div class="columns is-variable is-multiline">
                      <div class="column is-6-deskstop">
                        <p>
                        <ul>
                        <li>Kandungan Utama:</li>
                        <li>- Ethylhexyl Methoxycinnamate</li>
                        <li>- Titanium Dioxide :</li>
                        <li>- Glycerin </li>
                        <li>- Propylene Glycol</li>
                        <li>- Phenylisopropyl Caprylyl Dimethicone</li>
                        <li>- Synthetic Fluorphlogopite</li>
                        </ul>
                        </p>
                      </div>
                      <div class="column is-6-deskstop">
                        <p>
                        <ul>
                        <li>Manfaat:</li>
                        <li>- Mengandung tabir surya SPF 30,  yang efektif untuk menangkal efek buruk paparan sinar UV </li>
                        <li>- Menjaga elastisitas dan kilap pada kulit wajah dan mampu menjadikan riasan wajah lebih mudah dan halus</li>
                        <li>- Melindungi dari sinar UV A dan UV B</li>
                        <li>- Melembabkan Kulit</li>
                        <li>- Mengandung Vitamin E sebagai antioksidan</li>
                        <li>- Membuat Kulit Lebih Lembut</li>
                        </ul>
                        </p>
                      </div>
                    </div>
                    <!-- .works-button -->
                  </div>
                </div>
                <br>
                <div class="columns is-variable is-8 is-multiline">
                  <div class="column is-4-desktop is-12-tablet has-text-centered" >
                    <div class="works-latest">
                      <div class="works-latest-item">
                        <img src="{{asset('frontend/images/nyrtea/pro-3.jpg')}}">
                        <!-- .works-latest-icon -->
                      </div>
                      <!-- .works-latest-item -->
                    </div>
                  </div>
                  <div class="column is-8-desktop is-12-tablet" >
                    <br>
                    <h2 class="heading-title style-2 has-text-left">Complete Whitening - Night Cream
                      <br>
                      <span class="subtitle" style="font-size:16px;">BPOM NA18220112624</span>
                    </h2>
                    <div class="columns is-variable is-multiline">
                      <div class="column is-6-deskstop">
                        <p>
                        <ul>
                        <li>Kandungan Utama:</li>
                        <li>- Arbutin</li>				
                        <li>- Gluconolactone</li>		
                        <li>- Succinic Acid	</li>	
                        <li>- Soluble Collagen</li>	
                        <li>- Niacinamide  		</li>
                        <li>- Sodium Hyaluronate	</li>
                        <li>- Tocopheryl Acetate  	</li>
                        <li>- PEG/PPG-20/20 PCD	</li>
                        <li>- Fluorphlogopite</li>
                        </ul>
                        </p>
                      </div>
                      <div class="column is-6-deskstop">
                        <p>
                        <ul>
                        <li>Manfaat:</li>
                        <li>- Eksfoliasi ringan yang berfungsi untuk meregenerasi sel kulit baru </li>
                        <li>- Membantu melembutkan dan melembabkan kulit wajah</li>
                        <li>- Membantu kulit wajah tampak lebih putih dan cerah</li>
                        <li>- Menjaga elastisitas dan kilap pada kulit wajah,</li>
                        <li>- Mengurangi jerawat dan komedo,</li>
                        <li>- Menjaga kulit dari tanda penuaan dini sehingga kulit tampak lebih kencang.</li>
                        </ul>
                        </p>
                      </div>
                    </div>
                    <!-- .works-button -->
                  </div>
                </div>
                </li>
                <div class="columns is-variable is-8 is-multiline">
                  <div class="column is-4-desktop is-12-tablet has-text-centered" >
                    <div class="works-latest">
                      <div class="works-latest-item">
                        <img src="{{asset('frontend/images/nyrtea/pro-4.jpg')}}">
                        <!-- .works-latest-icon -->
                      </div>
                      <!-- .works-latest-item -->
                    </div>
                  </div>
                  <div class="column is-8-desktop is-12-tablet" >
                    <br>
                    <h2 class="heading-title style-2 has-text-left">White & Glow Booster Serum
                      <br>
                      <span class="subtitle" style="font-size:16px;">BPOM NA18231902217</span>
                    </h2>
                    <div class="columns is-variable is-multiline">
                      <div class="column is-6-deskstop">
                        <p>
                        <ul> 
                        <li>Kandungan Utama:</li>
                        <li>- Allantoin </li>
                        <li>- Cysteamine Hcl</li> 
                        <li>- Ascorbic Acid Vit.C</li> 
                        <li>- Collagen </li>
                        <li>- Niacinamide Vit.B3 </li>
                        <li>- Sodium Hyaluronate </li>
                        <li>- Gluconolactone PHA </li>
                        <li>- Succinic Acid</li>
                        </ul>
                        </p>
                      </div>
                      <div class="column is-6-deskstop">
                        <p>
                          <ul>
                            <li>Manfaat:</li>
                            <li>- Eksfoliasi ringan yang berfungsi untuk meregenerasi sel kulit baru</li>
                            <li>- Sebagai anti iritasi </li>
                            <li>- Membantu mengurangi jerawat dan komedo</li>
                            <li>- Mengurangi garis-garis halus pada kulit wajah</li>
                            <li>- Memperbaiki tampilan dari bintik hitam, melasma dan hiperpigmentasi</li>
                            <li>- Mampu mencerahkan kulit wajah</li>
                            <li>- Melembutkan, melembabkan dan menambah elastisitas kulit wajah</li>
                          </ul>
                        </p>
                      </div>
                      <br>
                    </div>
                    <!-- .works-button -->
                  </div>
                  <br>
                  <div class="column is-12-deskstop">
                    <p>** Khusus White & Glow Booster Serum, berlaku Bonus Tambahan</p>
                  </div>
                </div>
                <br>
                <div class="columns is-variable is-8 is-multiline">
                  <div class="column is-4-desktop is-12-tablet has-text-centered" >
                    <div class="works-latest">
                      <div class="works-latest-item">
                        <img src="{{asset('frontend/images/nyrtea/pro-5.jpg')}}">
                        <!-- .works-latest-icon -->
                      </div>
                      <!-- .works-latest-item -->
                    </div>
                  </div>
                  <div class="column is-8-desktop is-12-tablet" >
                    <br>
                    <h2 class="heading-title style-2 has-text-left">Feminine Care Soap
                      <br>
                      <span class="subtitle" style="font-size:16px;">BPOM NA18221600142</span>
                    </h2>
                    <div class="columns is-variable is-multiline">
                      <div class="column is-6-deskstop">
                        <p>
                        <ul> 
                        <li>Kandungan Utama:</li>
                        <li>- Minyak Zaitun  </li>
                        <li>- Tawas  </li>
                        <li>- Sirih  </li>
                        <li>- Ekstrak Lidah Buaya </li>
                        <li>- Ekstrak Manjakani</li>
                        <li>- Minyak Bulus </li>
                        <li>- Minyak Daun Mint</li>
                        </ul>
                        </p>
                      </div>
                      <div class="column is-6-deskstop">
                        <p>
                          <ul>
                            <li>Manfaat:</li>
                            <li>- Membersihkan, menyegarkan dan menjaga kewanitaan tetap sehat</li>
                            <li>- Melembabkan</li>
                            <li>- Mengurangi bau yang tidak sedap</li>
                          </ul>
                        </p>
                      </div>
                    </div>
                    <!-- .works-button -->
                  </div>
                </div>
               </div>
            </section>
            <section id="testimoni-product" class="section  testimonials-list is-clearfix">
              <div class="container">
                <h1 class="heading-title style-3 has-text-white">testimoni Produk</h1>
                <!-- <div class="testimonials-quote has-text-centered">
                  <span class="icon">
                    <i class="fas fa-quote-right"></i>
                  </span>
                </div> -->
                <div class="testimonials style-4 owl-carousel dots carousel-items-  ">
                  <div>
                      <img src="{{asset('frontend/images/nyrtea/testi-1.jpg')}}" class="img-testi">
                  </div>
                  <div>
                    <img src="{{asset('frontend/images/nyrtea/testi-2.jpg')}}" class="img-testi"> 
                  </div>
                  <div>
                      <img src="{{asset('frontend/images/nyrtea/testi-3.jpg')}}" class="img-testi"> 
                  </div>
                </div>
              </div>
            </section>
            <section id="bonus" class="section hero is-clearfix">
              <div class="container">
                <div class="owl-carousel dots">
                  <div>
                      <img src="{{asset('frontend/images/nyrtea/mp-1.jpg')}}">
                      <div style="padding-top:8px;">
                        <h4 class="has-text-centered">BONUS DAN REWARD</h4>
                      </div>
                  </div>
                  <div>
                      <img src="{{asset('frontend/images/nyrtea/mp-2.jpg')}}">
                      <div style="padding-top:8px;">
                      <h4 class="has-text-centered">BONUS SPONSOR</h4>

                      <p>
                      Bonus Sponsor adalah bonus yang diperoleh sebesar Rp50.000 dari Nilai belanja awal orang yang disponsori langsung.
                      <br />
                      Bonus Sponsor dihitung harian dan dibayarkan pada hari berikutnya
                      </p>  
                      </div>
                  </div>
                  <div>
                      <img src="{{asset('frontend/images/nyrtea/mp-3.jpg')}}">
                      <div style="padding-top:8px;">
                      <h4 class="has-text-centered">BONUS PAIRING</h4>

                      <p>
                      Bonus Pairing adalah Bonus yang diterima sebesar Rp. 100.000,- setiap terjadi pasangan 5 Hak Usaha kiri dan 5 Hak Usaha kanan.
                      Maksimum Rp 2juta/hari
                      <br />
                      <br />
                      Bonus Pairing dihitung harian dan dibayarkan pada hari berikutnya
                      </p>  
                      </div>
                  </div>
                  <div>
                      <img src="{{asset('frontend/images/nyrtea/mp-4.jpg')}}">
                      <h4 class="has-text-centered">REWARD</h4>

                      <p>
                      Reward diberikan berdasarkan perhitungan jumlah Hak Usaha pada kaki kiri dan kanan. 
                      <br />
                      Setelah Reward tercapai, perhitungan reward akan diteruskan ke reward berikutnya, Reward berlaku akumulasi.
                      <br />
                      <br />
                      Reward dihitung harian dan dibayarkan pada hari berikutnya, jika sudah memenuhi syarat Reward
                      </p>  
                      </div>
                  </div>
                </div>
              </div>
            </section>
            <section id="clients" class="section has-background-secondary-2 testimonials-list is-clearfix">
              <div class="container">
                <h1 class="heading-title style-3 has-text-white">testimoni </h1>
                </div>
                <div class="testimonials style-4 owl-carousel dots carousel-items-  ">
                  <div >
                      <img src="{{asset('frontend/images/nyrtea/testimoni-1.jpg')}}" class="img-testi">
                  </div>
                  <div >
                      <img src="{{asset('frontend/images/nyrtea/testimoni-2.jpg')}}" class="img-testi">
                  </div>
                  <div >
                      <img src="{{asset('frontend/images/nyrtea/testimoni-3.jpg')}}" class="img-testi">
                  </div>
                  <div >
                      <img src="{{asset('frontend/images/nyrtea/testimoni-4.jpg')}}" class="img-testi">
                  </div>
                  <div >
                      <img src="{{asset('frontend/images/nyrtea/testimoni-5.jpg')}}" class="img-testi">
                  </div>
                </div>
              </div>
            </section>
            <section class="section call-to-action style-1 has-background-primary is-clearfix">
              <div class="container">
                <div class="level">
                  <div>
                    <h1 class="title has-text-white">Segera bergabung bersama kami</h1>
                  </div>
                  <div class="level-right">
                    <a href="/" class="button is-white"> <i class="fab fa-whatsapp fa-lg "></i>&nbsp;&nbsp; Hubungi kami</a>
                  </div>
                  <!-- .level-right -->
                </div>
                <!-- .level -->
              </div>
            </section>
            <section id="news" class="section has-background-primary-light is-clearfix">
              <div class="container">
                <h1 class="heading-title style-1 has-text-left">Event</h1>
                <div class="blog-list style-2 owl-carousel navs carousel-items-3">
                  @foreach($datas as $data)

                  
                    <article class="blog-post">
                      <figure class="post-image">
                        <a href="{{ route('welcome.detail', $data->id) }}">
                             <img src="{{ route('file.show', encrypt($data->foto)) }}" style="
                            height: 250px; margin-left: auto;
                            margin-right: auto;">
                           </a>
                      </figure>
                      <div class="entry-header">
                        <h2 class="entry-title">
                          <a href="{{ route('welcome.detail', $data->id) }}">{{$data-> name}}</a>
                        </h2>
                        <div class="post-meta">
                          <ul>
                            <li>
                              <span>{{date('M d, Y', strtotime($data->date_agenda))}}</span>
                            </li>
                          </ul>
                        </div>
                        <!-- .post-meta -->
                      </div>
                      <!-- .entry-header -->
                      <div class="entry-content">
                        <p>{{$data->description}}</p>
                      </div>
                      <!-- .entry-content -->
                    </article>
                  @endforeach
                  <!-- .blog-post -->
                  <!-- .blog-post -->
                </div>
              </div>
            </section>
            
          </div>
          <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
      </div>
      <!-- #content-main-wrap -->
      <!-- #footer-top-wrap -->
      <section id="profile" class="section padding-bottom-none is-clearfix">
          <div class="container">
                <h1 class="heading-title style-1">Profil</h1>
                <br>
                <br>
                <div class="columns is-variable is-8 is-multiline">
                  <div class="column is-5-desktop is-12-tablet has-text-centered" >
                    <div class="works-latest">
                      <div class="works-latest-item" style="margin-bottom:1rem;">
                        <img  src="{{asset('frontend/images/nyrtea/profil-1.jpg')}}" >
                        <!-- .works-latest-icon -->
                      </div>
                      <div class="works-latest-item" style="margin-top:1rem;">
                        <img  src="{{asset('frontend/images/nyrtea/profil-2.jpg')}}" >
                        <!-- .works-latest-icon -->
                      </div>
                      <!-- .works-latest-item -->
                    </div>
                  </div>
                  <div class="column is-7-desktop is-12-tablet" >
                    <div class="has-text-centered ">
                      <h1 class="subtitle" style="margin-bottom:0.5rem">Aji Priyambodo</h1>
                      <span class="">Direktur</span>
                    </div>
                   
                    <br>
                    <p>
                      <ul>
                        <li>Berpengalaman 30 tahun di Industri Multi Level Marketing System Breakaway ataupun Bynari System.</li>
                        <br>
                        <li>Sebagai Leader dan Manajemen perusahaan MLM, baik perusahaan Lokal ataupun skala International.</li>
                        <br>
                        <li>Meniti karir di manajemen perusahaan MLM dimulai sebagai Supervisor, Sales Manager, General Manager sampai dengan Direktur.</li>
                        <br>
                        <li>Sebagai Trainer Public Speaking, Leadership Training ataupun pembicara Motivasi.</li>
                        <br>
                        <li>Berpengalaman mengelola Support system yang sederhana dan mudah didupilkasi.</li>
                      </ul>
                    </p>
                    <!-- .works-button -->
                  </div>
                  
                </div>
                <!-- .columns -->
                <br>
                <br>
                <br> 
              </div>
          </section>
          <section id="support" class="section has-background-primary-light is-clearfix">
            <div class="container">
              <div class="has-text-centered">
                <h1 class="heading-title" style="margin-bottom:1.5rem !important">Support System</h1>
                <span class="subtitle">Nyrtea Business Support (NBS)</span>
              </div>
              <br>
              <div class="columns is-variable is-8 is-multiline">
                <div class="column is-5-desktop is-12-tablet has-text-centered" >
                  <div class="works-latest">
                    <div class="works-latest-item">
                      <img  src="{{asset('frontend/images/nyrtea/support-1.jpg')}}" >
                      <!-- .works-latest-icon -->
                    </div>
                    <!-- .works-latest-item -->
                  </div>
                </div>
                <div class="column is-7-desktop is-12-tablet" >
                  <p>
                    <ul>
                      <li> NYRTEA BUSINESS SUPPORT (NBS) adalah sebuah sistem pendukung yang dikelola bersama antara para leader NYRTEA dan perusahaan. </li>
                      <br>
                      <li>Hal ini dilakukan agar mitra usaha dan perusahaan terjadi saling synergi dan bisa koordinasi dalam mengembangkan usahanya.</li>
                      <br>
                      <li>NBS akan memberikan cara bagaimana membangun pondasi dengan tepat dan benar bagi pembangun usaha jaringan baik secara online maupun offline.</li>
                      <br>
                      <li>Sistem pendukung NBS dirancang untuk membantu membangun jaringan yang kuat dan solid dengan cara yang sederhana sehingga mudah diduplikasi siapa saja apapun latar belakangnya. </li>
                      <br>
                    </ul>
                  </p>
                  <p>
                    <ul>
                      <li><strong>Pertemuan yang diadakan oleh NBS:</strong></li>
                      <br>
                      <li>- <strong>Nyrtea Opportunity Presentation (NOP)</strong>, pertemuan pengenalan Produk dan Marketing Plan</li>
                      <li>Tujuan: Memberikan keyakinan kepada calon member untuk bergabung.</li>
                      <br>
                      <li>- <strong>How To Run your business (HTR)</strong>, pertemuan bagi mitra baru agar bisnisnya bisa berlari dengan kencang dan stabil</li>
                      <li>Tujuan: Peserta mengetahui cara - cara untuk menjalankan bisnisnya</li>
                      <br>
                      <li>- <strong>Business Training (BT)</strong>, pelatihan untuk memberikan pemahaman yg benar tentang bisnis MLM</li>
                      <li>Tujuan: Peserta lebih memiliki keyakinan dan komitmen terhadap bisnis Nyrtea, bahwa mereka sudah berada di bisnis yg tepat</li>
                      <br>
                      <li>- <strong>Train The Trainer (TTT)</strong>, melatih sebagai seorang pembicara yang handal</li>
                      <li>Tujuan: Menciptakan banyak orang yang bisa melakukan presentasi, minimal di Home sharing.</li>
                      <br>
                      <li>- <strong>Road to Emerald ( RTE )</strong>, mempersiapkan menjadi seorang Leader dengan memiliki sikap dan Leadership yang baik </li>
                      <li>Tujuan: Membangun motivasi untuk mencapai Emerald secepatnya</li>
                      <br>
                      <li>- <strong>Nyrtea Sucsess Story (NSS)</strong>, pertemuan tentang kisah dan kiat sukses seorang Diamond ke atas</li>
                      <li>Tujuan: Memberikan keyakinan kepada calon member untuk bergabung serta memberikan motivasi bagi peserta</li>
                      <br>
                      <li>- <strong>Recognition Day/Anniversary</strong>,Perayaan kesuksesan, pemberian penghargaan Reward , kiat-kiat dan kisah sukses member dengan skala besar. 
                            Diadakan 6 bulan sekali, bergantian dengan acara Anniversary
                      </li>
                      <li>Tujuan: Memberikan keyakinan dan gambaran yang lebih besar tentang bisnis Nyrtea, sebagai target yang jelas untuk naik peringkat</li>
                      <br>
                    </ul>
                  </p>
                  <!-- .works-button -->
                </div>
                
              </div>
            </div>
          </section>
          <!-- <section id="works" class="section hero stories has-background-primary-light padding-bottom-none is-clearfix">
            <div class="container">
              <div class="columns is-variable is-multiline">
                <div class="column is-6-desktop is-12-tablet">
                  <h1 class="heading-title style-1 has-text-left">Galeries</h1>
                </div> -->
                <!-- <div class="column is-6-desktop is-12-tablet">
                  <div class="works isotope has-text-right">
                    <ul class="isotope-filter style-2 margin-bottom-none">
                      <li data-filter="*" class="active">all</li>
                      <li data-filter=".branding" class="">branding</li>
                      <li data-filter=".prototype" class="">prototype</li>
                      <li data-filter=".development" class="">development</li>
                    </ul>
                  </div>
                </div> -->
              <!-- </div>
              <br> </div> -->
            <!-- .container -->
            <!-- <div class="works isotope masonry image-hover effect-1 margin-bottom-none">
              <div class="columns is-variable is-0 is-gapless is-multiline" style="position: relative; height: 876.25px;">
                <div class="column is-3 branding aos-init aos-animate" style="position: absolute; left: 0%; top: 0px;">
                  <div class="work-item">
                    <figure>
                      <a href="{{asset('frontend/images/nyrtea/galeri-1.jpg')}}" class="mfp-lightbox mfp-image">
                        <img alt="" src="{{asset('frontend/images/nyrtea/galeri-1.jpg')}}">
                      </a> -->
                      <!-- <figcaption>
                        <div>
                          <h3>Caminando</h3>
                          <h5>Creative</h5>
                        </div>
                        <a href="./portfolio/single.html">View more</a>
                      </figcaption> -->
                    <!-- </figure>
                  </div> -->
                  <!-- .work-item -->
                <!-- </div>
                <div class="column is-3 prototype aos-init aos-animate" style="position: absolute; left: 25%; top: 0px;">
                  <div class="work-item">
                    <figure>
                      <a href="{{asset('frontend/images/nyrtea/galeri-2.jpg')}}" class="mfp-lightbox mfp-image">
                        <img alt="" src="{{asset('frontend/images/nyrtea/galeri-2.jpg')}}">
                      </a> -->
                      <!-- <figcaption>
                        <div>
                          <h3>Calligraphy</h3>
                          <h5>Branding</h5>
                        </div>
                        <a href="./portfolio/single.html">View more</a>
                      </figcaption> -->
                    <!-- </figure>
                  </div> -->
                  <!-- .work-item -->
                <!-- </div>
                <div class="column is-3 development aos-init aos-animate" style="position: absolute; left: 50%; top: 0px;">
                  <div class="work-item">
                    <figure>
                      <a href="{{asset('frontend/images/nyrtea/galeri-3.jpg')}}" class="mfp-lightbox mfp-image">
                        <img alt="" src="{{asset('frontend/images/nyrtea/galeri-3.jpg')}}">
                      </a> -->
                      <!-- <figcaption>
                        <div>
                          <h3>Abstract</h3>
                          <h5>Vector</h5>
                        </div>
                        <a href="./portfolio/single.html">View more</a>
                      </figcaption> -->
                    <!-- </figure>
                  </div> -->
                  <!-- .work-item -->
                <!-- </div>
                <div class="column is-3 branding aos-init aos-animate" style="position: absolute; left: 75%; top: 0px;">
                  <div class="work-item">
                    <figure>
                      <a href="{{asset('frontend/images/nyrtea/galeri-4.jpg')}}" class="mfp-lightbox mfp-image">
                        <img alt="" src="{{asset('frontend/images/nyrtea/galeri-4.jpg')}}">
                      </a> -->
                      <!-- <figcaption>
                        <div>
                          <h3>lifestyle</h3>
                          <h5>healthy</h5>
                        </div>
                        <a href="./portfolio/single.html">View more</a>
                      </figcaption> -->
                    <!-- </figure>
                  </div> -->
                  <!-- .work-item -->
                <!-- </div>
                <div class="column is-3 prototype aos-init aos-animate" style="position: absolute; left: 0%; top: 438.125px;">
                  <div class="work-item">
                    <figure>
                      <a href="{{asset('frontend/images/nyrtea/galeri-5.jpg')}}" class="mfp-lightbox mfp-image">
                        <img alt="" src="{{asset('frontend/images/nyrtea/galeri-5.jpg')}}">
                      </a> -->
                      <!-- <figcaption>
                        <div>
                          <h3>Caminando</h3>
                          <h5>Creative</h5>
                        </div>
                        <a href="./portfolio/single.html">View more</a>
                      </figcaption> -->
                    <!-- </figure>
                  </div> -->
                  <!-- .work-item -->
                </div>
                <!-- <div class="column is-3 development aos-init aos-animate" style="position: absolute; left: 25%; top: 438.125px;">
                  <div class="work-item">
                    <figure>
                      <a href="{{asset('frontend/images/nyrtea/galeri-6.jpg')}}" class="mfp-lightbox mfp-image">
                        <img alt="" src="{{asset('frontend/images/nyrtea/galeri-6.jpg')}}">
                      </a> -->
                      <!-- <figcaption>
                        <div>
                          <h3>Calligraphy</h3>
                          <h5>Branding</h5>
                        </div>
                        <a href="./portfolio/single.html">View more</a>
                      </figcaption> -->
                    <!-- </figure>
                  </div> -->
                  <!-- .work-item -->
                <!-- </div>
                <div class="column is-3 branding aos-init aos-animate" style="position: absolute; left: 50%; top: 438.125px;">
                  <div class="work-item">
                    <figure>
                      <a href="{{asset('frontend/images/nyrtea/galeri-7.jpg')}}" class="mfp-lightbox mfp-image">
                        <img alt="" src="{{asset('frontend/images/nyrtea/galeri-7.jpg')}}">
                      </a> -->
                      <!-- <figcaption>
                        <div>
                          <h3>Abstract</h3>
                          <h5>Vector</h5>
                        </div>
                        <a href="./portfolio/single.html">View more</a>
                      </figcaption> -->
                    <!-- </figure>
                  </div> -->
                  <!-- .work-item -->
                <!-- </div>
                <div class="column is-3 prototype aos-init aos-animate" style="position: absolute; left: 75%; top: 438.125px;">
                  <div class="work-item">
                    <figure>
                      <a href="{{asset('frontend/images/nyrtea/galeri-8.jpg')}}" class="mfp-lightbox mfp-image">
                        <img alt="" src="{{asset('frontend/images/nyrtea/galeri-8.jpg')}}">
                      </a> -->
                      <!-- <figcaption>
                        <div>
                          <h3>lifestyle</h3>
                          <h5>healthy</h5>
                        </div>
                        <a href="./portfolio/single.html">View more</a>
                      </figcaption> -->
                    <!-- </figure>
                    
                  </div> -->
                  <!-- .work-item -->
                <!-- </div>
              </div> -->
              <!-- .columns -->
            <!-- </div> -->
            <!-- .works -->
          <!-- </section> -->
          <section id="news" class="section has-background-primary-light is-clearfix">
              <div class="container">
                <div class="has-text-centered">
                  <h1 class="heading-title">Paket Produk</h1>
                  <span class="subtitle">Paket bergabung dengan pilihan 4 paket</span>
                </div>
                <br>
                <div class="columns is-variable is-8 is-multiline">
                  <div class="column is-3-desktop is-12-tablet has-text-centered" >
                    <div class="works-latest">
                      <div class="works-latest-item">
                        <img  src="{{asset('frontend/images/nyrtea/pack-1.jpg')}}" >
                        <!-- .works-latest-icon -->
                      </div>
                      <!-- .works-latest-item -->
                    </div>
                  </div>
                  <div class="column is-3-desktop is-12-tablet has-text-centered" >
                    <div class="works-latest">
                      <div class="works-latest-item">
                        <img  src="{{asset('frontend/images/nyrtea/pack-2.jpg')}}" >
                        <!-- .works-latest-icon -->
                      </div>
                      <!-- .works-latest-item -->
                    </div>
                  </div>
                  <div class="column is-3-desktop is-12-tablet has-text-centered" >
                    <div class="works-latest">
                      <div class="works-latest-item">
                        <img  src="{{asset('frontend/images/nyrtea/pack-3.jpg')}}" >
                        <!-- .works-latest-icon -->
                      </div>
                      <!-- .works-latest-item -->
                    </div>
                  </div>
                  <div class="column is-3-desktop is-12-tablet has-text-centered" >
                    <div class="works-latest">
                      <div class="works-latest-item">
                        <img  src="{{asset('frontend/images/nyrtea/pack-4.jpg')}}" >
                        <!-- .works-latest-icon -->
                      </div>
                      <!-- .works-latest-item -->
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section class="section site-footer-top follow-us-section is-clearfix">
              <div class="container has-text-centered">
                <h1 class="heading-title style-3 has-text-white">Join Sekarang</h1>
                <br>
                <div class="has-text-centered">
                  <div class="global-social-links">
                    <ul>
                      <li>
                        <a href="#" >
                          <img src="{{asset('frontend/images/wa.png')}}" style="width:25%"> </a>
                          <!-- <span class="icon"> -->
                            <!-- <i class="fab fa-whatsapp fa-lg" style="padding-top:10px;"></i> -->
                          <!-- </span> -->
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>
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
      <!-- #footer-bottom-wrap -->
      <!-- show floating buttons -->
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                       @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

               @foreach($datas as $data)
                    <div>{{ $data->name }}</div>
               @endforeach
            </div>
        </div> -->
</div>
@endsection