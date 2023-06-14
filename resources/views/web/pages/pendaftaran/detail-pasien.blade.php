@extends('inc.layout')
@section('content')
<style>
    .biodata-pasien {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .btn-biodata {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 5px;
        margin: 10px;
    }

    .btn-flatcx {
        width: 30px;
        height: 30px;
        line-height: 30px;
        border: 1px solid #ccc;
        color: var(--primary-color);
        font-size: 1.5em;
        border-radius: 50%;
        text-align: center;
        vertical-align: middle;
    }

    .form-control[disabled],
    .form-control[readonly],
    fieldset[disabled] .form-control {
        background-color: transparent;
        border-bottom-color: rgba(12, 12, 12, 0.2);
        border-bottom-style: dashed;
        outline: none;
        border-top: none;
        border-right: none;
        border-left: none;
    }


    li.blue-box {
        background: #eef5fd;
        color: #3F51B5;
    }

    li.red-box {
        background: #fff4f7;
        color: #F44336;
    }

    li.green-box {
        background: #f1fdda;
        color: #8BC34A;
    }

    li.cyan-box {
        background: #edfbfd;
        color: #00BCD4;
    }

    li.orange-box {
        background: #fff1dc;
        color: #FF9800;
    }

    li.purple-box {
        background: #f5e8f7;
        color: #9C27B0;
    }

    li.brown-box {
        background: #efdad2;
        color: #ab6e58;
    }

    .box-menu li {
        padding: 20px 30px;
        margin: 20px;
        width: 200px;
        background: #f2f0f5;
        text-align: center;
        cursor: pointer;
        border: 1px solid #e5e5e5;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.33);
    }

    .box-menu .circle-menu {
        height: 50px;
        width: 50px;
        line-height: 50px;
        font-size: 2.5em;
        transition: all .15s linear;
    }
</style>

<main id="js-page-content" role="main" class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        <i class='bx bxs-id-card' style="transform: scale(1.5); margin-right: .5rem;"></i>
                        Biodata <span class="fw-300"><i>Pasien</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-2 biodata-pasien">
                                <img src="http://192.168.1.253/real/include/avatar/woman-icon.png"
                                    style="width: 120px; height: 120px;">
                                <div class="btn-biodata">
                                    <span class="btn-flatcx pointer" alt="Riwayat Kunjungan" title="Riwayat Kunjungan"
                                        onclick="popupwindow(base_url() + 'patient/past_visit/4459', 'p_past_visit', 1024, 400, 'no'); return false;"><i
                                            class="mdi mdi-clipboard-pulse"></i></span>
                                    <button class="btn-flatcx" id="button" alt="Detail Biodata Pasien"
                                        title="Detail Biodata Pasien"><i class="mdi mdi-account-edit"></i></button>
                                </div>
                            </div>
                            <div class="col-md-10 col-bg-10">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <label for="s_tgl_1" class="col-md-4 control-label">No Rekam
                                                    Medis</label>
                                                <div class="col-md">
                                                    <input class="form-control" type="text"
                                                        value="{{ $patient->medical_record_number }}"
                                                        readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <label for="s_tgl_1" class="col-md-4 control-label">Jenis
                                                    Kelamin</label>
                                                <div class="col-md">
                                                    <input class="form-control" type="text"
                                                        value="{{ $patient->gender }}" readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <label for="s_tgl_1" class="col-md-4 control-label">Nama Pasien</label>
                                                <div class="col-md">
                                                    <input class="form-control" type="text" value="{{ $patient->name }}"
                                                        readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <label for="s_tgl_1" class="col-md-4 control-label">Alamat</label>
                                                <div class="col-md">
                                                    <input class="form-control" type="text"
                                                        value="{{ $patient->address }}" readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <label for="s_tgl_1" class="col-md-4 control-label">Tempat, Tgl.
                                                    Lahir</label>
                                                <div class="col-md">
                                                    <input class="form-control" type="text"
                                                        value="{{ $patient->place }}, {{ $patient->date_of_birth }}"
                                                        readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <label for="s_tgl_1" class="col-md-4 control-label">Telp/HP</label>
                                                <div class="col-md">
                                                    <input class="form-control" type="text"
                                                        value="{{ $patient->mobile_phone_number }}" readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <label for="s_tgl_1" class="col-md-4 control-label">Umur</label>
                                                <div class="col-md">
                                                    <input class="form-control" type="text" value="{{ $age }}"
                                                        readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="row align-items-center">
                                                <label for="s_tgl_1" class="col-md-4 control-label">Catatan
                                                    Penting</label>
                                                <div class="col-md">
                                                    <input class="form-control" type="text" value=""
                                                        readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-end mt-3">
                                    <div class="col-md-4">
                                        <button class="btn btn-primary pull-right waves-effect"
                                            onclick="popupwindow('http://192.168.1.253/real/regprint/print_kartu_pdf/4459','p_card', 400,400,'no'); return false"><i
                                                class="mdi mdi-printer"></i> Kartu pasien</button>
                                        <button class="btn btn-primary pull-right waves-effect" id="identitas"><i
                                                class="mdi mdi-printer"></i> Identitas Pasien</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr bg-success">
                    <h2 class="text-light">
                        <i class="mdi mdi-hospital-building mdi-24px"></i> Biodata <span
                            class="fw-300"><i>Pasien</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <ul class="box-menu">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <li class="menu-layanan blue-box" data-layanan="reg_rajal">
                                                <div class="circle-menu waves-effect waves-light blue darken-3">
                                                    <i class="mdi mdi-stethoscope"></i>
                                                </div>
                                                <span>Rawat Jalan</span>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="menu-layanan red-box" data-layanan="reg_igd">
                                                <div class="circle-menu waves-effect waves-light red">
                                                    <i class="mdi mdi-hospital"></i>
                                                </div>
                                                <span>I G D</span>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="menu-layanan green-box" data-layanan="reg_odc">
                                                <div class="circle-menu waves-effect waves-light greencx">
                                                    <i class="mdi mdi-bed"></i>
                                                </div>
                                                <span>O D C</span>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="menu-layanan cyan-box" data-layanan="reg_ranap">
                                                <div class="circle-menu waves-effect waves-light cyan">
                                                    <i class="mdi mdi-bed"></i>
                                                </div>
                                                <span>Rawat Inap</span>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="menu-layanan orange-box" data-layanan="reg_lab">
                                                <div class="circle-menu waves-effect waves-light orange lighten-2">
                                                    <i class="mdi mdi-flask-outline"></i>
                                                </div>
                                                <span>Laboratorium</span>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="menu-layanan purple-box" data-layanan="reg_rad">
                                                <div class="circle-menu waves-effect waves-light purple lighten-2">
                                                    <i class="mdi mdi-radioactive"></i>
                                                </div>
                                                <span>Radiologi</span>
                                            </li>
                                        </div>
                                        <div class="col-md-4">
                                            <li class="menu-layanan brown-box" data-layanan="reg_hemo">
                                                <div class="circle-menu waves-effect waves-light browncx">
                                                    <i class="mdi mdi-high-definition-box"></i>
                                                </div>
                                                <span>Hemodialisa</span>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
@section('plugin')
<!-- JavaScript untuk menampilkan pop-up Edit -->
<script>
    // Mendapatkan referensi tombol berdasarkan ID
    var button = document.getElementById('button');
    var identitas = document.getElementById('identitas');
    var width = window.screen.width;
    var height = window.screen.height;
    
    // Menambahkan event listener untuk tombol
    button.addEventListener('click', function() {
    // Membuka pop-up window saat tombol diklik
    window.open('{{ route("edit.pendaftaran.pasien", $patient->id) }}', '_blank', 'width=500' + width + ',height='+ height);
    });
    identitas.addEventListener('click', function() {
    // Membuka pop-up window saat tombol diklik
    window.open('{{ route("print.identitas.pasien", $patient->id) }}', '_blank', 'width=500' + width + ',height='+ height);
    });
</script>
@endsection