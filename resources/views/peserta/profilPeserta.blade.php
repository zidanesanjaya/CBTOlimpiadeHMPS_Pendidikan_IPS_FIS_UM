@extends('layouts.app')

@section('content')
<!-- Page Content -->
    <!-- User Info -->
    <div class="bg-image bg-image-bottom" style="background-image: url('/codebase/media/photos/photo13@2x.jpg');">
        <div class="bg-primary-dark-op py-30">
            <div class="content content-full text-center">
                <!-- Avatar -->
                <div class="mb-15">
                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="/codebase/media/avatars/avatar15.jpg" alt="">
                </div>
                <!-- END Avatar -->

                <!-- Personal -->
                <h1 class="h3 text-white font-w700 mb-10">
                    John Smith
                </h1>
                <h2 class="h5 text-white-op">
                    Peserta dari <a class="text-primary-light">(asal_sekolah)</a>
                </h2>
                <!-- END Personal -->
            </div>
        </div>
    </div>
    <!-- END User Info -->

    <!-- Main Content -->
    <!-- Page Content -->
    <div class="content">
        <div class="block w">
            <div class="block-header block-header-default">
                <h3 class="block-title">Detail <small>Profil</small></h3>
            </div>
            <div class="block-content">
                <div class="form-group row">
                    <label class="col-12">Nama Ketua</label>
                    <div class="col-md-9">
                        <div class="form-control-plaintext">(Username)</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12">E-Mail</label>
                    <div class="col-md-9">
                        <div class="form-control-plaintext">(E-Mail Siswa)</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12">Asal Sekolah</label>
                    <div class="col-md-9">
                        <div class="form-control-plaintext">(AsalSekolah)</div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-12">Guru Pendamping</label>
                    <div class="col-md-9">
                        <div class="form-control-plaintext">(Nama Guru Pendamping)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
    <!-- END Main Content -->
<!-- END Page Content -->
@endsection