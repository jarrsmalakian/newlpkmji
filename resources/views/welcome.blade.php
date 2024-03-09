<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <link
            href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
            rel="stylesheet"
        />

        <title>
            LPK Mitra Jaya Indonesia | Lembaga Pengirim Tenaga Magang ke Jepang
        </title>

        <!-- Additional CSS Files -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('assets/css/bootstrap.min.css')}}"
        />

        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('assets/css/font-awesome.css')}}"
        />

        <link
            rel="stylesheet"
            href="{{ asset('assets/css/templatemo-training-studio.css')}}"
        />
    </head>

    <body>
        <!-- ***** Preloader Start ***** -->
        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->

        <!-- ***** Header Area Start ***** -->
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="https://lpkmji.id" class="logo"
                                >Mitra Jaya<em> Indonesia</em></a
                            >
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li class="scroll-to-section">
                                    <a href="#top" class="active">Home</a>
                                </li>
                                <li class="scroll-to-section">
                                    <a href="#features">About us</a>
                                </li>
                                <li class="scroll-to-section">
                                    <a href="#our-classes">Program </a>
                                </li>
                                <li class="scroll-to-section">
                                    <a href="#schedule">jadwal</a>
                                </li>
                                <li class="scroll-to-section">
                                    <a href="#contact-us">kontak</a>
                                </li>
                                @if (Route::has('login')) @auth
                                <li class="main-button">
                                    <a href="{{ url('/dashboard') }}">ADMIN</a>
                                </li>
                                @else
                                <li class="main-button">
                                    <a href="{{ url('/login') }}">Login</a>
                                </li>
                            </ul>
                            <a class="menu-trigger">
                                <span>Menu</span>
                            </a>

                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->

        <!-- ***** Main Banner Area Start ***** -->
        <div class="main-banner" id="top">
            <video autoplay muted loop id="bg-video">
                <source
                    src="{{ asset('assets/images/gym-video.mp4')}}"
                    type="video/mp4"
                />
            </video>

            <div class="video-overlay header-text">
                <div class="caption">
                    <!-- <h6>let's grow tothether with us</h6> -->
                    <h2>let's grow together <em>with us</em></h2>
                    <div class="main-button scroll-to-section">
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}">daftar magang</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Main Banner Area End ***** -->

        <!-- ***** Features Item Start ***** -->
        <section class="section" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="section-heading">
                            <h2>Tentang <em>Kami</em></h2>
                            <img
                                src="{{ asset('assets/images/line-dec.png')}}"
                                alt="waves"
                            />
                            <div class="clearfix">
                                <img
                                    src="{{ asset('assets/images/hakim.jpg')}}"
                                    class="col-md-6 float-md-end mb-3 ms-md-3"
                                    alt="direktur"
                                />

                                <p>
                                    <strong>Mitra Jaya Indonesia</strong> adalah
                                    Lembaga yang dikelola secara langsung oleh
                                    berbagai macam profesional dan ahli yang
                                    terakreditasi serta berpengalaman, bergerak
                                    dibidang perekrutan, pelatihan, pengiriman
                                    tenaga magang, internship, study di Jepang
                                    dengan selalu memprioritaskan Etos dan Etika
                                    kerja yang tinggi, efektif dan inovatif yang
                                    selalu mengedepankan nilai-nilai
                                    keharmonisan dan profesionalisme kerja yang
                                    berkualitas. Dengan semakin berkembangnya
                                    zaman dan semakin banyaknya permintaan
                                    kerjasama dari pihak Jepang, kami selalu
                                    melakukan peningkatan kinerja dengan lebih
                                    fokus kepada kegiatan inti dengan
                                    mengedepankan kualitas, efektifitas,
                                    efisiensi kerja, kepuasan pelanggan dan
                                    keharmonisan hubungan dengan patners. Mitra
                                    Jaya Indonesia didirikan pada tahun 2008,
                                    telah menjalin kerjasama dengan beberapa
                                    Yayasan Jepang dari awal berdiri. Tidak
                                    dipungkiri perbedaan budaya, kehidupan dan
                                    cara befikir antara masyarakat Indonesia dan
                                    Jepang merupakan tantangan yang harus
                                    dilalui dan dipecahkan dengan sebaik
                                    baiknya. Dengan mengutamakan prinsip
                                    keselarasan dan keharmonisan kami telah
                                    berhasil mempertahankan hubungan baik dengan
                                    patner kami di Jepang lebih dari 10 tahun.
                                    Eksistensi dan perkembangan Mitra Jaya
                                    Indonesia telah menunjukan bukti jelas bahwa
                                    kerja keras dari semua staff kami yang
                                    profesional dalam kerjasama yang
                                    berkesinambungan, dan disertai dengan Visi
                                    dan Misi yang kuat telah melahirkan motto
                                    semboyan baru ditahun 2021 , yaitu “Lets
                                    grow together" Mari bekerjasama bersama
                                    kami, bersama sama berkembang, tumbuh
                                    menjadi lebih besar, sehingga memberikan
                                    manfaat untuk sesama dan untuk negara kita.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <ul class="features-items">
                            <!-- VISI -->
                            <li class="feature-item">
                                <div class="right-content">
                                    <h4 style="text-align: center">VISI</h4>
                                    <p style="text-align: center">
                                        "Mewujudkan siswa yang memiliki
                                        penguasaan ilmu dan teknologi serta
                                        memiliki kepribadian, moralitas dan
                                        mental yang baik"
                                    </p>
                                </div>
                            </li>

                            <!-- MISI -->
                            <li class="feature-item">
                                <div class="right-content">
                                    <h4 style="text-align: center">MISI</h4>
                                    <p>
                                        Dilakukan dengan 3 pola pendekatan yaitu
                                        :
                                        <br />
                                        <b>Pengajaran</b><br />
                                        Keahlian berbahasa Jepang serta budaya
                                        Jepang. (fisik prima, mental tangguh,
                                        dan pantang menyerah).
                                        <br />
                                        <b>Penanaman</b><br />
                                        Pembentukan fisik dan jasmani serta
                                        kedisiplinan yang tinggi.
                                        <br />
                                        <b>Pengasuhan</b><br />
                                        Pembentukan akhlak mental dan spiritual
                                        serta disiplin ibadah.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="features-items">
                            <li class="feature-item">
                                <div class="left-icon">
                                    <img
                                        src="{{ asset('assets/images/features-first-icon.jpg')}}"
                                        alt="gedung"
                                    />
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Item End ***** -->

        <!-- ***** Features Item Start ***** -->
        <section class="section" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading">
                            <h2>bidang <em>pekerjaan</em></h2>
                            <img
                                src="{{ asset('assets/images/line-dec.png')}}"
                                alt="waves"
                            />
                            <p>
                                Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Aliquid officiis magni quo,
                                numquam odit rem sit modi unde quis saepe!
                                Cumque enim esse consectetur animi laborum
                                maiores fugit voluptatibus hic?
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="features-items">
                            <li class="feature-item">
                                <div class="left-icon">
                                    <!-- <img
                                        src="assets/images/features-first-icon.png"
                                        alt="First One"
                                    /> -->
                                </div>
                                <div class="right-content">
                                    <h4>Iron Working</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Nostrum fuga
                                        reprehenderit totam. Maxime, architecto.
                                        Provident exercitationem, repellendus
                                        ullam, sequi, voluptates a dolores
                                        laboriosam commodi nulla impedit
                                        aperiam. Enim, sapiente quae.
                                    </p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="right-content">
                                    <h4>Casting</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Assumenda, dicta quam
                                        laudantium magnam explicabo impedit
                                        ducimus, sed suscipit voluptates omnis
                                        non magni labore laboriosam eaque hic
                                        corporis laborum recusandae earum!
                                    </p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="right-content">
                                    <h4>Plating</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Magni, deleniti!
                                        Voluptatibus molestias quas voluptatem
                                        cupiditate omnis. Ut numquam, voluptates
                                        unde placeat, id, tempore vel totam
                                        porro similique ea officia culpa. > for
                                        images and video background used in this
                                        HTML template.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="features-items">
                            <li class="feature-item">
                                <div class="right-content">
                                    <h4>Konstruksi</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Fuga, amet? Unde
                                        dolor, velit iure harum odio error
                                        delectus autem, maxime ut omnis
                                        necessitatibus. Et, ratione unde!
                                        Impedit quas obcaecati cumque.
                                    </p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="right-content">
                                    <h4>Pertanian &amp; Peternakan</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Saepe, repellat
                                        commodi. Maxime molestias debitis dicta
                                        illum, placeat suscipit! Molestias
                                        voluptate dicta ipsum quos. Distinctio
                                        placeat dolores dolore minima
                                        dignissimos consequuntur.
                                    </p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="right-content">
                                    <h4>Garmen</h4>
                                    <p>
                                        Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Eos, in. Eligendi
                                        voluptatum provident quo nemo!
                                        Repudiandae voluptate esse unde quae
                                        doloribus nisi cupiditate laborum
                                        tempore, nam harum debitis facilis
                                        explicabo.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Features Item End ***** -->

        <!-- ***** Call to Action Start ***** -->
        <section class="section" id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cta-content">
                            <h2>
                                masa depan <em>lebih baik</em>, bersama
                                <em>mitra </em>jaya indonesia
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Distinctio dolor iusto cum
                                libero facere suscipit exercitationem laborum
                                laudantium quibusdam, temporibus nemo quo error
                                mollitia impedit corporis fugit unde hic
                                numquam!
                            </p>
                            <div class="main-button scroll-to-section">
                                <a href="#our-classes">Become a member</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Call to Action End ***** -->

        <!-- ***** Our Classes Start ***** -->
        <section class="section" id="our-classes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading">
                            <h2>program <em>belajar</em></h2>
                            <img
                                src="{{ asset('assets/images/line-dec.png')}}"
                                alt=""
                            />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Culpa, facilis totam dolore
                                quia, laborum non facere accusantium molestias
                                illum inventore consectetur! Iste necessitatibus
                                beatae sunt explicabo doloremque optio nam a?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row" id="tabs">
                    <div class="col-lg-4">
                        <ul>
                            <li>
                                <a href="#tabs-1">Bahasa Jepang</a>
                            </li>
                            <li>
                                <a href="#tabs-2">Budaya Jepang</a>
                            </li>
                            <li>
                                <a href="#tabs-3">Pengetahuan Magang</a>
                            </li>
                            <li>
                                <a href="#tabs-4"
                                    >FMD (Fisik, Mental, Disiplin &amp; Wawasan
                                    Kebangsaan)</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <section class="tabs-content">
                            <article id="tabs-1">
                                <img
                                    src="{{ asset('assets/images/training-image-01.jpg')}}"
                                    alt="First Class"
                                />
                                <h4>Bahasa Jepang</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Labore amet officiis culpa
                                    earum. Sint autem quis nobis sequi,
                                    voluptates doloremque voluptatum libero
                                    necessitatibus labore, asperiores distinctio
                                    natus? Hic, et consequatur.
                                </p>
                            </article>
                            <article id="tabs-2">
                                <img
                                    src="{{ asset('assets/images/training-image-02.jpg')}}"
                                    alt="Second Training"
                                />
                                <h4>Pengetahuan Hidup di Jepang</h4>
                                <p>
                                    Integer dapibus, est vel dapibus mattis, sem
                                    mauris luctus leo, ac pulvinar quam tortor a
                                    velit. Praesent ultrices erat ante, in
                                    ultricies augue ultricies faucibus. Nam
                                    tellus nibh, ullamcorper at mattis non,
                                    rhoncus sed massa. Cras quis pulvinar eros.
                                    Orci varius natoque penatibus et magnis dis
                                    parturient montes, nascetur ridiculus mus.
                                </p>
                            </article>
                            <article id="tabs-3">
                                <img
                                    src="{{ asset('assets/images/training-image-03.jpg')}}"
                                    alt="Third Class"
                                />
                                <h4>Pengetahuan Magang</h4>
                                <p>
                                    Fusce laoreet malesuada rhoncus. Donec
                                    ultricies diam tortor, id auctor neque
                                    posuere sit amet. Aliquam pharetra, augue
                                    vel cursus porta, nisi tortor vulputate
                                    sapien, id scelerisque felis magna id felis.
                                    Proin neque metus, pellentesque pharetra
                                    semper vel, accumsan a neque.
                                </p>
                            </article>
                            <article id="tabs-4">
                                <img
                                    src="{{ asset('assets/images/training-image-04.jpg')}}"
                                    alt="Fourth Training"
                                />
                                <h4>
                                    FMD (Fisik, Mental, Disiplin &amp; Wawasan
                                    Kebangsaan)
                                </h4>
                                <p>
                                    Pellentesque habitant morbi tristique
                                    senectus et netus et malesuada fames ac
                                    turpis egestas. Aenean ultrices elementum
                                    odio ac tempus. Etiam eleifend orci lectus,
                                    eget venenatis ipsum commodo et.
                                </p>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Our Classes End ***** -->

        <section class="section" id="schedule">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading dark-bg">
                            <h2>kegiatan <em>belajar</em></h2>
                            <img
                                src="{{ asset('assets/images/line-dec.png')}}"
                                alt=""
                            />
                            <p>
                                Kegiatan belajar selama 5 bulan (20 minggu)
                                kurang lebih 1.015 jam yang meliputi :
                            </p>
                            <p style="text-align: left">
                                1. Bahasa Jepang 815 jam (Grammar, Reading,
                                Writing, Listening and Conversation)
                            </p>
                            <p style="text-align: left">
                                2. Pengetahuan Hidup di Jepang 40 jam (Rules at
                                Work and Safety work life of Japanese style)
                            </p>
                            <p style="text-align: left">
                                3. Pengetahuan Magang di Jepang 40 jam.
                            </p>
                            <p style="text-align: left">
                                4. FMD 120 jam (Fisik, Mental, Disiplin dan
                                Wawasan Kebangsaan)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filters">
                            <ul class="schedule-filter">
                                <li class="active" data-tsfilter="monday">
                                    Senin
                                </li>
                                <li data-tsfilter="tuesday">Selasa</li>
                                <li data-tsfilter="wednesday">Rabu</li>
                                <li data-tsfilter="thursday">Kamis</li>
                                <li data-tsfilter="friday">Jumat</li>
                                <li data-tsfilter="saturday">Sabtu</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-10 offset-lg-1">
                        <div class="schedule-table filtering">
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="day-time">Bahasa Jepang</td>
                                        <td
                                            class="monday ts-item show"
                                            data-tsmeta="monday"
                                        ></td>
                                        <td
                                            class="tuesday ts-item"
                                            data-tsmeta="tuesday"
                                        ></td>
                                        <td>Habib Sensei</td>
                                    </tr>
                                    <tr>
                                        <td class="day-time">
                                            Pengetahuan Hidup di Jepang
                                        </td>
                                        <td
                                            class="friday ts-item"
                                            data-tsmeta="friday"
                                        ></td>
                                        <td
                                            class="thursday friday ts-item"
                                            data-tsmeta="thursday"
                                            data-tsmeta="friday"
                                        ></td>
                                        <td>Lili Sensei</td>
                                    </tr>
                                    <tr>
                                        <td class="day-time">
                                            Pengetahuan Magang
                                        </td>
                                        <td
                                            class="tuesday ts-item"
                                            data-tsmeta="tuesday"
                                        ></td>
                                        <td
                                            class="monday ts-item show"
                                            data-tsmeta="monday"
                                        ></td>
                                        <td>Nana Sensei</td>
                                    </tr>
                                    <tr>
                                        <td class="day-time">Olahraga</td>
                                        <td
                                            class="wednesday ts-item"
                                            data-tsmeta="wednesday"
                                        ></td>
                                        <td
                                            class="friday ts-item"
                                            data-tsmeta="friday"
                                        ></td>
                                        <td>Eko Sensei</td>
                                    </tr>
                                    <tr>
                                        <td class="day-time">Religi</td>
                                        <td
                                            class="thursday ts-item"
                                            data-tsmeta="thursday"
                                        ></td>
                                        <td
                                            class="wednesday ts-item"
                                            data-tsmeta="wednesday"
                                        ></td>
                                        <td>Bpk. Hadi</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Testimonials Starts ***** -->
        <section class="section" id="trainers">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading">
                            <h2>Instruktur <em>Berpengalaman</em></h2>
                            <img
                                src="{{ asset('assets/images/line-dec.png')}}"
                                alt=""
                            />
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptatibus quod quis
                                officiis nam qui mollitia laboriosam illum
                                aperiam dolorum magnam! Eos sed pariatur
                                veritatis rerum voluptatum laboriosam at a quam?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img
                                    src="{{ asset('assets/images/first-trainer.jpg')}}"
                                    alt=""
                                />
                            </div>
                            <div class="down-content">
                                <span>Sensei</span>
                                <h4>Habib</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Reprehenderit, adipisci?
                                    Optio quam a ipsum, quisquam neque ullam sit
                                    maxime beatae eos officia est adipisci
                                    voluptas eaque laborum, maiores sapiente
                                    earum.
                                </p>
                                <ul class="social-icons">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-facebook"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-twitter"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-linkedin"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-behance"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img
                                    src="{{ asset('assets/images/second-trainer.jpg')}}"
                                    alt=""
                                />
                            </div>
                            <div class="down-content">
                                <span>Sensei</span>
                                <h4>Nana</h4>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Aspernatur voluptatibus
                                    quidem id reiciendis impedit aliquid
                                    consectetur tempora? Exercitationem
                                    doloremque adipisci incidunt quod facere
                                    magnam beatae ipsum animi quam magni!
                                    Commodi!
                                </p>
                                <ul class="social-icons">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-facebook"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-twitter"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-linkedin"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-behance"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img
                                    src="{{ asset('assets/images/third-trainer.jpg')}}"
                                    alt=""
                                />
                            </div>
                            <div class="down-content">
                                <span>Sensei</span>
                                <h4>Fani</h4>
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit. Deleniti esse, minus
                                    molestias libero voluptatum eos perferendis,
                                    ipsam excepturi, eum atque modi suscipit
                                    tenetur amet. Aliquam molestias nobis alias
                                    eveniet consequatur.
                                </p>
                                <ul class="social-icons">
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-facebook"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-twitter"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-linkedin"></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i class="fa fa-behance"></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Testimonials Ends ***** -->

        <!-- Pertanyaan Yang Sering di Ajukan -->
        <section class="section" id="trainers">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section-heading">
                            <h2>Pertanyaan Yang <em>Sering Diajukan</em></h2>
                            <img
                                src="{{ asset('assets/images/line-dec.png')}}"
                                alt=""
                            />

                            <div
                                class="accordion accordion-flush"
                                id="accordionFlushExample"
                            >
                                <div class="accordion-item">
                                    <h2
                                        class="accordion-header"
                                        id="flush-headingOne"
                                    >
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne"
                                            aria-expanded="true"
                                            aria-controls="flush-collapseOne"
                                        >
                                            A. Persyaratan Apa Yang Dibutuhkan
                                            Untuk Mendaftar ?
                                        </button>
                                    </h2>
                                    <div
                                        id="flush-collapseOne"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne"
                                        data-bs-parent="#accordionFlushExample"
                                    >
                                        <div class="accordion-body">
                                            <ol>
                                                <li>
                                                    Usia minimal 19,5 tahun dan
                                                    maksimal 26 tahun sesuai
                                                    persyaratan User.
                                                </li>
                                                <li>
                                                    Pendidikan minimal SMA, SMK,
                                                    MA, Paket C atau yang setara
                                                    (kecuali dipersyaratkan
                                                    User).
                                                </li>
                                                <li>
                                                    Tinggi badan minimal 162 cm
                                                    bagi pria dan minimal 155 cm
                                                    bagi wanita (kecuali
                                                    dipersyaratkan User).
                                                </li>
                                                <li>
                                                    Berat badan proporsional,
                                                    maksimal 78 kg.
                                                </li>
                                                <li>
                                                    Sehat Jasmani dan Rohani.
                                                </li>
                                                <li>
                                                    Penglihatan normal dan tidak
                                                    buta warna, minus mata
                                                    maksimal -0,25 (kecuali ada
                                                    yang diperbolehkan memakai
                                                    kaca mata oleh pihak User).
                                                </li>
                                                <li>
                                                    Dalam kondisi sehat, tidak
                                                    pernah menderita
                                                    penyakit-penyakit seperti
                                                    sakit pinggang, migrain,
                                                    tekanan darah tinggi,
                                                    penyakit jantung, TBC,
                                                    hepatitis, dan lain-lain
                                                    yang kemungkinan dapat
                                                    mengganggu dalam proses
                                                    Pendidikan dan Pemagangan
                                                    nantinya.
                                                </li>
                                                <li>
                                                    Belum pernah mengajukan atau
                                                    mengikuti Program Pemagangan
                                                    ke Jepang maupun Program
                                                    lainnya ke Jepang, atau
                                                    tidak pernah tersangkut
                                                    masalah dengan keimigrasian
                                                    Indonesia dan Jepang.
                                                </li>
                                                <li>
                                                    Memiliki semua kelengkapan
                                                    dokumen dan tidak
                                                    bermasalah, seperti KTP, KK,
                                                    Akte Kelahiran, Ijasah
                                                    Pendidikan terakhir.
                                                    (pastikan eja’an nama sama
                                                    semua)
                                                </li>
                                                <li>
                                                    Jujur dan tidak sedang
                                                    terikat dengan LPK (Lembaga
                                                    Pendidikan Ketrampilan)
                                                    manapun.
                                                </li>
                                                <li>
                                                    Telah memahami dan
                                                    menyetujui semua proses
                                                    Pendidikan dan Pemagangan.
                                                </li>
                                                <li>
                                                    Telah mendapat ijin
                                                    mengikuti Pendidikan dan
                                                    Program Pemagangan dari
                                                    pihak orang tua dan
                                                    keluarga.
                                                </li>
                                            </ol>

                                            <p>
                                                <i
                                                    >* Untuk memastikan
                                                    lowongan-lowongan yang
                                                    tersedia, silahkan lihat di
                                                    laman Facebook dan Instagram
                                                    Mitra Jaya Indonesia.</i
                                                >
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2
                                        class="accordion-header"
                                        id="flush-heading1"
                                    >
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse1"
                                            aria-expanded="true"
                                            aria-controls="flush-collapse1"
                                        >
                                            B. Bagaimana Cara Mendaftar Di Mitra
                                            Jaya Indonesia ?
                                        </button>
                                    </h2>
                                    <div
                                        id="flush-collapse1"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-heading1"
                                        data-bs-parent="#accordionFlushExample"
                                    >
                                        <div class="accordion-body">
                                            <ol>
                                                <li>
                                                    Cara mendaftar di
                                                    <strong
                                                        >LPK Mitra Jaya
                                                        Indonesia</strong
                                                    >
                                                    cukup mudah dan dapat
                                                    dilakukan dimana saja, yaitu
                                                    dilakukan secara Online
                                                    dengan mendaftar di laman
                                                    ini, mengisi semua data yang
                                                    ditanyakan dalam Form
                                                    Pendaftaran secara online.
                                                </li>
                                                <li>
                                                    Selain itu bisa dengan
                                                    mendownload CV pendaftaran,
                                                    setelah di isi lengkap
                                                    kemudian di kirim ke email
                                                    lpkmitrajayaindonesia@yahoo.co.id
                                                </li>
                                                <li>
                                                    Bisa datang langsung ke
                                                    kantor
                                                    <strong
                                                        >LPK Mitra Jaya
                                                        Indonesia</strong
                                                    >
                                                    Magelang
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2
                                        class="accordion-header"
                                        id="flush-heading2"
                                    >
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse2"
                                            aria-expanded="true"
                                            aria-controls="flush-collapse2"
                                        >
                                            C. Prosedur Atau Persyaratan Apa
                                            Saja Yang Diperlukan ?
                                        </button>
                                    </h2>
                                    <div
                                        id="flush-collapse2"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-heading2"
                                        data-bs-parent="#accordionFlushExample"
                                    >
                                        <div class="accordion-body">
                                            <ol>
                                                <li>
                                                    Persyaratan umum untuk
                                                    mengikuti Program Pemagangan
                                                    telah dijelaskan dalam
                                                    halaman
                                                    <strong
                                                        >LPK Mitra Jaya
                                                        Indonesia</strong
                                                    >. Secara umum adalah
                                                    berusia minimal 19.5 tahun,
                                                    belum pernah mengikuti atau
                                                    mengajukan dokumen Program
                                                    Pemagangan sebelumnya, atau
                                                    tidak pernah bermasalah
                                                    dengan Imigrasi atau Hukum
                                                    di Jepang.
                                                </li>
                                                <li>
                                                    Selanjutnya adalah memenuhi
                                                    kriteria/persyaratan LPK
                                                    Mitra Jaya Indonesia dan
                                                    user. Izin keluarga juga
                                                    menjadi salah satu
                                                    persyaratan yang utama.
                                                </li>
                                                <li>
                                                    Bagi mereka yang telah
                                                    mendaftar dan dipanggil oleh
                                                    staf perekrutan kami, maka
                                                    akan mengikuti Seleksi Tahap
                                                    Pertama berupa Tes Tertulis,
                                                    Tes Fisik, Interview dan
                                                    tes-tes lainnya jika
                                                    diperlukan. Bagi mereka yang
                                                    dinyatakan lulus Seleksai
                                                    Tahap Pertama, akan
                                                    dipanggil Seleksi Tahap
                                                    Kedua dengan Matching user.
                                                    Kesiapan dokumen (fotokopi
                                                    KK, KTP, Ijasah, dsbnya)
                                                    mungkin juga akan
                                                    dipastikan, disamping
                                                    persetujuan orang tua yang
                                                    juga akan dipastikan.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2
                                        class="accordion-header"
                                        id="flush-heading3"
                                    >
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse3"
                                            aria-expanded="true"
                                            aria-controls="flush-collapse3"
                                        >
                                            D. Berapa biaya yang harus
                                            dipersiapkan ?
                                        </button>
                                    </h2>
                                    <div
                                        id="flush-collapse3"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-heading3"
                                        data-bs-parent="#accordionFlushExample"
                                    >
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    Pada prinsipnya, tidak ada
                                                    biaya selama proses
                                                    pendaftaran.
                                                </li>
                                                <li>
                                                    Biaya yang diperlukan adalah
                                                    tes tahap pertama, tes MCU
                                                    (Medical Check up),
                                                    Pembuatan Paspor, Biaya
                                                    Pelatihan dan
                                                    pemberangkatan.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2
                                        class="accordion-header"
                                        id="flush-heading4"
                                    >
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse4"
                                            aria-expanded="true"
                                            aria-controls="flush-collapse4"
                                        >
                                            E. Lowongan apa saja yang tersedia ?
                                        </button>
                                    </h2>
                                    <div
                                        id="flush-collapse4"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-heading4"
                                        data-bs-parent="#accordionFlushExample"
                                    >
                                        <div class="accordion-body">
                                            <ol>
                                                <li>
                                                    Di bidang pengolahan besi
                                                    baja (iron working, casting,
                                                    Plating, Konstruksi)
                                                </li>
                                                <li>Pertanian</li>
                                                <li>Peternakan</li>
                                                <li>Perikanan</li>
                                                <li>Konstruksi</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2
                                        class="accordion-header"
                                        id="flush-heading5"
                                    >
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse5"
                                            aria-expanded="true"
                                            aria-controls="flush-collapse5"
                                        >
                                            F. Berapa lama Pendidikan di LPK
                                            Mitra Jaya Indonesia, dan
                                            fasilitas-fasilitas apa saja yang
                                            akan didapatkan ?
                                        </button>
                                    </h2>
                                    <div
                                        id="flush-collapse5"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-heading5"
                                        data-bs-parent="#accordionFlushExample"
                                    >
                                        <div class="accordion-body">
                                            <ol>
                                                <li>
                                                    Pendidikan di
                                                    <strong
                                                        >LPK Mitra Jaya
                                                        Indonesia</strong
                                                    >
                                                    selama 5 sampai dengan 6
                                                    bulan, disesuaikan dengan
                                                    permohonan dari User di
                                                    Jepang. Pendidikan dilakukan
                                                    8 jam dari hari Senin hingga
                                                    Jumat, dan 4 jam di hari
                                                    Sabtu.
                                                </li>
                                                <li>
                                                    Asrama (tempat tinggal),
                                                    sarapan pagi, makan siang,
                                                    makan malam, perlengkapan
                                                    belajar, perlengkapan
                                                    ibadah, pakaian training
                                                    olahraga, jas, koper.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2
                                        class="accordion-header"
                                        id="flush-heading6"
                                    >
                                        <button
                                            class="accordion-button collapsed"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse6"
                                            aria-expanded="true"
                                            aria-controls="flush-collapse6"
                                        >
                                            G. Apakah LPK Mitra Jaya Indonesia
                                            bisa menjamin pasti berangkat ke
                                            Jepang ?
                                        </button>
                                    </h2>
                                    <div
                                        id="flush-collapse6"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="flush-heading6"
                                        data-bs-parent="#accordionFlushExample"
                                    >
                                        <div class="accordion-body">
                                            <ol>
                                                <li>
                                                    Jika calon Pemagang telah
                                                    lulus Seleksi User, lulus
                                                    tes MCU Tahap Pertama dan
                                                    masuk Pendidikan di LPK
                                                    Mitra Jaya Indonesia, pada
                                                    prinsipnya kemungkinan besar
                                                    pasti akan berangkat ke
                                                    Jepang.
                                                </li>
                                                <li>
                                                    Namun, pihak User Jepang
                                                    atau
                                                    <strong
                                                        >LPK Mitra Jaya
                                                        Indonesia</strong
                                                    >
                                                    juga dapat membatalkan, jika
                                                    calon Pemagang melanggar
                                                    peraturan, dinilai tidak
                                                    bisa mengikuti Program
                                                    Pendidikan, memiliki masalah
                                                    kesehatan atau masalah sikap
                                                    mental yang dianggap tidak
                                                    bisa beradaptasi hidup di
                                                    Jepang kemudian harinya.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pertanyaan Yang Sering di Ajukan End -->

        <!-- ***** Contact Us Area Starts ***** -->
        <section class="section" id="contact-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div id="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.722310157253!2d110.20713311002598!3d-7.495879873900101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8f12a8f5acd3%3A0x569c3f8c542dc94d!2sLPK%20Mitra%20Jaya%20Indonesia%20New!5e0!3m2!1sen!2sid!4v1709741653610!5m2!1sen!2sid"
                                width="100%"
                                height="600px"
                                frameborder="0"
                                style="border: 0"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="contact-form">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input
                                                name="name"
                                                type="text"
                                                id="name"
                                                placeholder="Your Name*"
                                                required=""
                                            />
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input
                                                name="email"
                                                type="text"
                                                id="email"
                                                pattern="[^ @]*@[^ @]*"
                                                placeholder="Your Email*"
                                                required=""
                                            />
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <fieldset>
                                            <input
                                                name="subject"
                                                type="text"
                                                id="subject"
                                                placeholder="Subject"
                                            />
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea
                                                name="message"
                                                rows="6"
                                                id="message"
                                                placeholder="Message"
                                                required=""
                                            ></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button
                                                type="submit"
                                                id="form-submit"
                                                class="main-button"
                                            >
                                                Send Message
                                            </button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Contact Us Area Ends ***** -->

        <!-- ***** Footer Start ***** -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            Copyright &copy; 2024 LPK Mitra Jaya Indonesia -
                            Designed by
                            <a
                                rel="nofollow"
                                href="https://lpkmji.id"
                                class="tm-text-link"
                                target="_parent"
                                >Admin</a
                            ><br />
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"
        ></script>
        <script src="{{ asset('assets/js/jquery-2.1.0.min.js')}}"></script>

        <!-- Plugins -->
        <script src="{{ asset('assets/js/scrollreveal.min.js')}}"></script>
        <script src="{{ asset('assets/js/waypoints.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('assets/js/imgfix.min.js')}}"></script>
        <script src="{{ asset('assets/js/mixitup.js')}}"></script>
        <script src="{{ asset('assets/js/accordions.js')}}"></script>

        <!-- Global Init -->
        <script src="{{ asset('assets/js/custom.js')}}"></script>
        @endauth 
        
        @endif
    </body>
</html>
