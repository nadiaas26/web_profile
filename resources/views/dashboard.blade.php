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
            <nav class="navbar navbar-expand-lg fixed-top  bg-primary" color="0">
                <div class="container">
                    <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">ROBO-SOIL</a>
                        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span
                                class="navbar-toggler-bar bar2"></span><span
                                class="navbar-toggler-bar bar3"></span></button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#tanaman">Saran Tanaman</a>
                            </li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#perbaikan">Saran Perbaikan</a>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#berita">Berita</a>
                            </li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="/">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="page-content">
        <div class="section" id="tanaman">
            <div class="container">
                <div class="h4 text-center mb-4 title">SARAN TANAMAN</div>
                <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="card-body">
                        <div class="row">
                            <div class="card-body">
                                <div class="h6 mt-0 title">Jenis Tanah</div>
                                <table id="customers">
                                    <tr>
                                        <th>Saran Tanaman</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($data as $value)
                                        <tr>
                                            <td>{{ $value->sarantanaman }}</td>
                                            <td><a class="btn btn-warning fa fa-pencil" data-toggle="modal"
                                                    data-target="#exampleModal{{ $value->id_edu }}"
                                                    style="color: white;"></a>
                                                <a class="btn btn-danger fa fa-trash"
                                                    href="{{ url('hapusedu/' . $value->id_edu) }}"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="card-body ">
                                <form action="simpanpendidikan" method="post">
                                    @csrf
                                    <div class="h6 mt-0 title">Jenis Tanah</div>
                                    <div class="form-group">
                                        <label>Saran Tanaman</label>
                                        <input type="text" name="sarantanaman" class="form-control" value=""
                                            required="" placeholder="" autocomplete="off">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="section" id="perbaikan">
            <div class="container">
                <div class="h4 text-center mb-4 title">SARAN PERBAIKAN</div>
                <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="card-body">
                        <div class="row">
                            <div class="card-body">
                                <div class="h6 mt-0 title">Jenis Tanah</div>
                                <table id="customers">
                                    <tr>
                                        <th>Perbaikan Tanah</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($data as $value)
                                        <tr>
                                            <td>{{ $value->perbaikantanah }}</td>
                                            <td><a class="btn btn-warning fa fa-pencil" data-toggle="modal"
                                                    data-target="#exampleModal{{ $value->id_edu }}"
                                                    style="color: white;"></a>
                                                <a class="btn btn-danger fa fa-trash"
                                                    href="{{ url('hapusedu/' . $value->id_edu) }}"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="card-body ">
                                <form action="simpanpendidikan" method="post">
                                    @csrf
                                    <div class="h6 mt-0 title">Jenis Tanah</div>
                                    <div class="form-group">
                                        <label>Perbaikan Tanah</label>
                                        <input type="text" name="perbaikantanah" class="form-control"
                                            value="" required="" placeholder="" autocomplete="off">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="section" id="berita">
            <div class="container">
                <div class="h4 text-center mb-4 title">Berita</div>
                <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="card-body">
                        <div class="row">
                            <div class="card-body">
                                <div class="h6 mt-0 title">Berita</div>
                                <table id="customers">
                                    <tr>
                                        <th>Judul Berita</th>
                                        <th>Tanggal Berita</th>
                                        <th>Deskripsi Berita</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($data as $value)
                                        <tr>
                                            <td>{{ $value->judul }}</td>
                                            <td>{{ $value->tglberita }}</td>
                                            <td>{{ $value->deskripsi }}</td>
                                            <td><a class="btn btn-warning fa fa-pencil" data-toggle="modal"
                                                    data-target="#exampleModal{{ $value->id_edu }}"
                                                    style="color: white;"></a>
                                                <a class="btn btn-danger fa fa-trash"
                                                    href="{{ url('hapusedu/' . $value->id_edu) }}"></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="card-body ">
                                <form action="simpanpendidikan" method="post">
                                    @csrf
                                    <div class="h6 mt-0 title">Berita</div>
                                    <div class="form-group">
                                        <label>Judul Berita</label>
                                        <input type="text" name="judul" class="form-control" value=""
                                            required="" placeholder="" autocomplete="off">
                                        <label>Tanggal Berita</label>
                                        <input type="date" name="tglberita" class="form-control" value=""
                                            required="" placeholder="" autocomplete="off">
                                        <label>Deskripsi Berita</label>
                                        <input type="text" name="deskripsi" class="form-control" value=""
                                            required="" placeholder="" autocomplete="off">
                                        <button class="btn btn-primary" type="submit">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Edit jenis tanah-->
    @foreach ($data as $value)
        <div class="modal fade" id="exampleModal{{ $value->id_edu }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('editedu/' . $value->id_edu) }}" method="post">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label>Perbaikan Tanah</label>
                                <input type="text" name="perbaikantanah" class="form-control"
                                    value="{{ $value->perbaikantanah }}" required="" placeholder=""
                                    autocomplete="off">
                                <label>Saran Tanaman</label>
                                <input type="text" name="sarantanaman" class="form-control"
                                    value="{{ $value->sarantanaman }}" required="" placeholder=""
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal Edit berita-->
    @foreach ($data as $value)
        <div class="modal fade" id="exampleModaledit{{ $value->id_edu }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('editedu/' . $value->id_edu) }}" method="post">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label>Judul Berita</label>
                                <input type="text" name="judul" class="form-control"
                                    value="{{ $value->judul }}" required="" placeholder="" autocomplete="off">
                                <label>Tanggal Berita</label>
                                <input type="date" name="tglberita" class="form-control"
                                    value="{{ $value->tglberita }}" required="" placeholder=""
                                    autocomplete="off">
                                <label>Deskripsi Berita</label>
                                <input type="date" name="deskripsi" class="form-control"
                                    value="{{ $value->deskripsi }}" required="" placeholder=""
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach


</body>

</html>


<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
</style>

<script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
<script src="js/core/popper.min.js?ver=1.1.0"></script>
<script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
<script src="js/now-ui-kit.js?ver=1.1.0"></script>
<script src="js/aos.js?ver=1.1.0"></script>
<script src="scripts/main.js?ver=1.1.0"></script>




{{-- code Backup --}}


{{--
    <div class="section" id="about">
        <div class="container">
            <div class="h4 text-center mb-4 title">FOTO TANAH</div>
            <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <div class="card-body">
                    <form action="updateimage" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <label>FOTO TANAH</label>
                        <div class="form-group">
                            <div class="form-group">
                                <input type="file" name="image">
                                <button type="submit">Update
                                    Foto Tanah</button>
                            </div>
                        </div>
                    </form>
                    <form action="updatebackground" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <label>Foto Background</label>
                        <div class="form-group">
                            <div class="form-group">
                                <input type="file" name="image">
                                <button type="submit">Update
                                    Foto Background</button>
                            </div>
                        </div>
                    </form>
                    @foreach ($profile as $value)
                        <form action="image-upload" enctype="multipart/form-data" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="card-body ">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control"
                                            value="{{ $value->nama }}" required="" placeholder=""
                                            autocomplete="off">
                                        <label>Tempat, Tanggal Lahir</label>
                                        <input type="text" name="ttl" class="form-control"
                                            value="{{ $value->ttl }}" required="" placeholder=""
                                            autocomplete="off">
                                        <label>Agama</label>
                                        <input type="text" name="Agama" class="form-control"
                                            value="{{ $value->Agama }}" required="" placeholder=""
                                            autocomplete="off">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control"
                                            value="{{ $value->alamat }}" required="" placeholder=""
                                            autocomplete="off">
                                        <label>Kewarganegaraan</label>
                                        <input type="text" name="Kewarganegaraan" class="form-control"
                                            value="{{ $value->Kewarganegaraan }}" required="" placeholder=""
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="form-group">
                                        <label>No Hp</label>
                                        <input type="text" name="no_hp" class="form-control"
                                            value="{{ $value->no_hp }}" required="" placeholder=""
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control"
                                            value="{{ $value->email }}" required="" placeholder=""
                                            autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        <textarea type="text" name="deskripsi" class="form-control" rows="4" value="" required=""
                                            autocomplete="off" placeholder="Deskripsikan Diri Anda Disini" style="">{{ $value->deskripsi }}</textarea>
                                        <button class="btn btn-primary" type="submit" style="float: right;">Update
                                            Data</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}
