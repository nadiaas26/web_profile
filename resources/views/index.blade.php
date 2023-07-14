<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ROBO-SOIL</title>
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:400,700,200') }}" rel="stylesheet">
    <link href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('css/aos.css?ver=1.1.0') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css?ver=1.1.0') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css?ver=1.1.0') }}" rel="stylesheet">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
</head>

<body id="top">
    <header>
        <div class="profile-page sidebar-collapse">
            <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
                <div class="container">
                    <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">ROBO-SOIL DATA</a>
                        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span
                                class="navbar-toggler-bar bar2"></span><span
                                class="navbar-toggler-bar bar3"></span></button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <!-- <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">Tentang</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#education">Pendidikan</a>
                            </li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a>
                            </li>  -->
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="page-content">
        <div>
            <div class="profile-page">
                <div class="wrapper">
                    <div class="page-header page-header-small" filter-color="green">
                        @foreach ($profile as $value)
                            <div class="page-header-image" data-parallax="true"
                                style="background-image: url('background/{{ $value->background }}')"></div>
                            <div class="container">
                                <div class="content-center">
                                    <div class="cc-profile-image"><a href="#"><img
                                                src="images/{{ $value->image }}" alt="Image" /></a></div>
                                    <div class="h2 title">{{ $value->nama }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="section" id="about">
                <div class="container">
                    <div class="card" data-aos="fade-up" data-aos-offset="10">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="card-body">
                                    @foreach ($profile as $value)
                                        <div class="h4 mt-0 title">About</div>
                                        <p>{{ $value->deskripsi }}</p>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="card-body">
                                    <div class="h4 mt-0 title">Informasi</div>
                                    @foreach ($profile as $value)
                                        <div class="row">
                                            <div class="col-sm-4"><strong class="text-uppercase">Nama</strong></div>
                                            <div class="col-sm-8">{{ $value->nama }}</div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Agama</strong></div>
                                            <div class="col-sm-8">{{ $value->Agama }}</div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Negara</strong></div>
                                            <div class="col-sm-8">{{ $value->Kewarganegaraan }}</div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Ttl</strong></div>
                                            <div class="col-sm-8">{{ $value->ttl }}</div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
                                            <div class="col-sm-8">{{ $value->no_hp }}</div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                                            <div class="col-sm-8">{{ $value->email }}</div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-sm-4"><strong class="text-uppercase">Address:</strong>
                                            </div>
                                            <div class="col-sm-8">{{ $value->alamat }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section" id="education">
                <div class="container cc-education">
                    <div class="h4 text-center mb-4 title">Jenis Tanah</div>
                    @foreach ($data as $value)
                        <div class="card">
                            <div class="row">
                                <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50"
                                    data-aos-duration="500">
                                    <div class="card-body cc-education-header">
                                        <p>{{ $value->tahun }}</p>
                                        <div class="h5">{{ $value->sekolah }}</div>
                                    </div>
                                </div>
                                <div class="col-md-9" data-aos="fade-left" data-aos-offset="50"
                                    data-aos-duration="500">
                                    <div class="card-body">
                                        <div class="h5">{{ $value->pendidikan }}</div>
                                        <p class="category">{{ $value->tahun }}</p>
                                        <p>{{ $value->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    @foreach ($profile as $value)
        <footer class="footer">
            <div class="h4 title text-center">{{ $value->nama }}</div>
            <div class="text-center text-muted">
                <p>&copy; Creative CV. All rights reserved.<br>Design - <a class="credit"
                        href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
            </div>
        </footer>
    @endforeach

    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="js/core/popper.min.js?ver=1.1.0"></script>
    <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="js/aos.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
</body>

</html>
