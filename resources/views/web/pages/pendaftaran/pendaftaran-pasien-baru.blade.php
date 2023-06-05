{{-- @dd($provinces) --}}
@extends('inc.layout')
@section('title','Pendaftaran Pasien Baru')
@section('content')
<main id="js-page-content" role="main" class="page-content">
    <div class="subheader">
        @component('inc.subheader',['subheader_title'=>'st_type_2','sh_icon'=>'home'])
        @slot('sh_descipt') Your first page for content division @endslot
        @endcomponent
    </div>

    <form autocomplete="off" action="{{ route('simpan.pendaftaran.pasien') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr bg-primary">
                        <h2 class="text-white">
                            Biodata<span class="fw-300"><i>Pasien</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="name" class="form-label">Nama Lengkap *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Nama Lengkap Pasien">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="nickname" name="nickname" class="form-label">Nama
                                                    Panggilan</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="nickname"
                                                    placeholder="Nama Pangilan Pasien" name="nickname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="title">
                                                    Title *
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control w-100" id="title" name="title">
                                                    <option value="" disabled selected></option>
                                                    <option value="Tn.">Tuan (Tn)</option>
                                                    <option value="Ny.">Nyonya (Ny)</option>
                                                    <option value="Sdr.">Saudara (Sdr)</option>
                                                    <option value="Sdri.">Saudari (Sdri)</option>
                                                    <option value="An.">Anak (An)</option>
                                                    <option value="By.">Bayi (By)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label d-block" for="gender">
                                                    Jenis Kelamin *
                                                </label>
                                            </div>
                                            <div class="col-sm-8 pl-3">
                                                <div class="custom-control custom-radio d-inline mr-2">
                                                    <input type="radio" class="custom-control-input" value="laki-laki"
                                                        id="laki-laki" name="gender">
                                                    <label class="custom-control-label"
                                                        for="laki-laki">Laki-Laki</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline">
                                                    <input type="radio" class="custom-control-input" value="perempuan"
                                                        id="perempuan" name="gender">
                                                    <label class="custom-control-label"
                                                        for="perempuan">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="" class="form-label">Tempat, Tgl. Lahir</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="place"
                                                            placeholder="Tempat" name="place">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="date" class="form-control" id="date_of_birth"
                                                            placeholder="Tanggal Lahir" name="date_of_birth">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="religion">
                                                    Agama *
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control w-100" id="religion" name="religion">
                                                    <option value="" disabled selected></option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                                    <option value="Katholik">Katholik</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                                                    <option value="Lain lain">Lain lain</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label d-block"
                                                    style="margin-bottom: 1.4rem !important" id="blood_group">
                                                    Golongan Darah
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="o"
                                                        name="blood_group">
                                                    <label class="custom-control-label" for="o">O</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="a"
                                                        name="blood_group">
                                                    <label class="custom-control-label" for="a">A</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="b"
                                                        name="blood_group">
                                                    <label class="custom-control-label" for="b">B</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="ab"
                                                        name="blood_group">
                                                    <label class="custom-control-label" for="ab">AB</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="allergy" class="form-label">Alergi</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="allergy"
                                                    placeholder="Alergi Pasien" name="allergy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label mr-5 d-block"
                                                    style="margin-bottom: 1.4rem !important">
                                                    Status Pernikahan
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="belum_menikah"
                                                        name="married_status">
                                                    <label class="custom-control-label" for="belum_menikah">Belum
                                                        Menikah</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="menikah"
                                                        name="married_status">
                                                    <label class="custom-control-label" for="menikah">Menikah</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="janda"
                                                        name="married_status">
                                                    <label class="custom-control-label" for="janda">Janda</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="duda"
                                                        name="married_status">
                                                    <label class="custom-control-label" for="duda">Duda</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="language" class="form-label">Bahasa *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="language"
                                                    placeholder="Pasien Menggunakan Bahasa" value="Indonesia"
                                                    name="language">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="citizenship" class="form-label">Kewarganegaraan</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="citizenship" placeholder=""
                                                    value="Indonesia" name="citizenship">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="id_card" class="form-label">No. KTP/SIM/Paspor</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="id_card"
                                                    placeholder="No. KTP/SIM/Paspor Pasien" name="id_card">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="address" class="form-label">Alamat *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="address"
                                                    placeholder="Alamat Pasien" name="address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="province" class="form-label">Provinsi</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control w-100" id="province" name="province">
                                                    <option value="" disabled selected></option>
                                                    @foreach($provinces as $province)
                                                    <option value="{{ $province['id'] }}">{{ $province['nama'] }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="regency">Kota / Kabupaten
                                                    *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control w-100" id="regency" name="regency">
                                                    <option value="" disabled selected></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="subdistrict">Kecamatan *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control w-100" id="subdistrict" name="subdistrict">
                                                    <option value="" disabled selected></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="ward">Kelurahan *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control w-100" id="ward" name="ward">
                                                    <option value="" disabled selected></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="mobile_phone_number" class="form-label">No. HP/Telp</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="mobile_phone_number"
                                                    placeholder="No. HP / Telp Pasien" name="mobile_phone_number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="email" class="form-label">Email</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Alamat Email Pasien" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="last_education">
                                                    Pendidikan Terakhir *
                                                </label>
                                            </div>
                                            <div class="col-sm-8">

                                                <select class="form-control w-100" id="last_education"
                                                    name="last_education">
                                                    <option value="" disabled selected></option>
                                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                    <option value="Belum / Tidak tamat SD">Belum / Tidak tamat SD
                                                    </option>
                                                    <option value="Tamat SD">Tamat SD</option>
                                                    <option value="Tamat SMTP">Tamat SMTP</option>
                                                    <option value="Tamat SLTA">Tamat SLTA</option>
                                                    <option value="Tamat D3">Tamat D3</option>
                                                    <option value="Tamat S1">Tamat S1</option>
                                                    <option value="Tamat S2">Tamat S2</option>
                                                    <option value="Tamat PT">Tamat PT</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="ethnic">
                                                    Suku / Etnis *
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control w-100" id="ethnic" name="ethic">
                                                    <option value="" selected disabled></option>
                                                    <option value="Aceh">Aceh</option>
                                                    <option value="Alas">Alas</option>
                                                    <option value="Alor">Alor</option>
                                                    <option value="Ambon">Ambon</option>
                                                    <option value="Aneuk Jamee">Aneuk Jamee</option>
                                                    <option value="Arab">Arab</option>
                                                    <option value="Arfak">Arfak</option>
                                                    <option value="Asmat">Asmat</option>
                                                    <option value="Atoni">Atoni</option>
                                                    <option value="Auwye/Mee">Auwye/Mee</option>
                                                    <option value="Bajao">Bajao</option>
                                                    <option value="Bali">Bali</option>
                                                    <option value="Banggai">Banggai</option>
                                                    <option value="Bangka">Bangka</option>
                                                    <option value="Banjar">Banjar</option>
                                                    <option value="Banten">Banten</option>
                                                    <option value="Batak">Batak</option>
                                                    <option value="Bawean">Bawean</option>
                                                    <option value="Belitung">Belitung</option>
                                                    <option value="Betawi">Betawi</option>
                                                    <option value="Biak Numfor">Biak Numfor</option>
                                                    <option value="Bima">Bima</option>
                                                    <option value="Bugis">Bugis</option>
                                                    <option value="Buol">Buol</option>
                                                    <option value="Buton">Buton</option>
                                                    <option value="Cirebon">Cirebon</option>
                                                    <option value="Dani">Dani</option>
                                                    <option value="Dauwa">Dauwa</option>
                                                    <option value="Daya">Daya</option>
                                                    <option value="Dayak">Dayak</option>
                                                    <option value="Dompu">Dompu</option>
                                                    <option value="Duri">Duri</option>
                                                    <option value="Enim">Enim</option>
                                                    <option value="Flores">Flores</option>
                                                    <option value="Galela">Galela</option>
                                                    <option value="Gayo">Gayo</option>
                                                    <option value="Gorontalo">Gorontalo</option>
                                                    <option value="Jawa">Jawa</option>
                                                    <option value="Kaili">Kaili</option>
                                                    <option value="Kei">Kei</option>
                                                    <option value="Kerinci">Kerinci</option>
                                                    <option value="Komering">Komering</option>
                                                    <option value="Kutai">Kutai</option>
                                                    <option value="Lamaholot">Lamaholot</option>
                                                    <option value="Lampung">Lampung</option>
                                                    <option value="Lauje">Lauje</option>
                                                    <option value="Lembak">Lembak</option>
                                                    <option value="Lio">Lio</option>
                                                    <option value="Luwu">Luwu</option>
                                                    <option value="Madura">Madura</option>
                                                    <option value="Makassar">Makassar</option>
                                                    <option value="Makian">Makian</option>
                                                    <option value="Mamasa">Mamasa</option>
                                                    <option value="Mamuju">Mamuju</option>
                                                    <option value="Mandar">Mandar</option>
                                                    <option value="Manggarai">Manggarai</option>
                                                    <option value="Mbojo">Mbojo</option>
                                                    <option value="Melayu">Melayu</option>
                                                    <option value="Mentawai">Mentawai</option>
                                                    <option value="Minahasa">Minahasa</option>
                                                    <option value="Minangkabau">Minangkabau</option>
                                                    <option value="Mongondow">Mongondow</option>
                                                    <option value="Moni">Moni</option>
                                                    <option value="Muna">Muna</option>
                                                    <option value="Musi">Musi</option>
                                                    <option value="Ngada">Ngada</option>
                                                    <option value="Ngalik">Ngalik</option>
                                                    <option value="Nias">Nias</option>
                                                    <option value="Ogan">Ogan</option>
                                                    <option value="Osing/Using">Osing/Using</option>
                                                    <option value="Palembang">Palembang</option>
                                                    <option value="Pamona">Pamona</option>
                                                    <option value="Pasir">Pasir</option>
                                                    <option value="Rambang">Rambang</option>
                                                    <option value="Rawas">Rawas</option>
                                                    <option value="Rejang">Rejang</option>
                                                    <option value="Rote">Rote</option>
                                                    <option value="Saluan">Saluan</option>
                                                    <option value="Sangir">Sangir</option>
                                                    <option value="Saparua">Saparua</option>
                                                    <option value="Sasak">Sasak</option>
                                                    <option value="Sawu">Sawu</option>
                                                    <option value="Selayar">Selayar</option>
                                                    <option value="Seram">Seram</option>
                                                    <option value="Simeulue">Simeulue</option>
                                                    <option value="Sula">Sula</option>
                                                    <option value="Sumba">Sumba</option>
                                                    <option value="Sumbawa">Sumbawa</option>
                                                    <option value="Sunda">Sunda</option>
                                                    <option value="Talaud">Talaud</option>
                                                    <option value="Tanimbar">Tanimbar</option>
                                                    <option value="Ternate">Ternate</option>
                                                    <option value="Tidore">Tidore</option>
                                                    <option value="Timor Leste">Timor Leste</option>
                                                    <option value="Tionghoa">Tionghoa</option>
                                                    <option value="Tobelo">Tobelo</option>
                                                    <option value="Tolaki">Tolaki</option>
                                                    <option value="Tomini">Tomini</option>
                                                    <option value="Toraja">Toraja</option>
                                                    <option value="Yapen">Yapen</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="job">
                                                    Pekerjaan *
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control w-100" id="job" name="job">
                                                    <option value="" disabled selected></option>
                                                    <option value="Belum Bekerja">Belum Bekerja</option>
                                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                                    <option value="Petani">Petani</option>
                                                    <option value="Nelayan">Nelayan</option>
                                                    <option value="Buruh Harian">Buruh Harian</option>
                                                    <option value="PNS">PNS</option>
                                                    <option value="BUMN">BUMN</option>
                                                    <option value="POLRI">POLRI</option>
                                                    <option value="TNI">TNI</option>
                                                    <option value="Swasta / Karyawan Kontrak">Swasta / Karyawan
                                                        Kontrak
                                                    </option>
                                                    <option value="Wirausaha">Wirausaha</option>
                                                    <option value="Lain-lain">Lain-lain</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr bg-info-500">
                        <h2 class="text-white">
                            Informasi<span class="fw-300"><i>Keluarga</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="accessible_family" class="form-label">Nama Keluarga</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="accessible_family"
                                                    placeholder="Nama Keluarga yang bisa dihubungi"
                                                    name="accessible_family">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="family_age" class="form-label">Usia</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="family_age"
                                                    placeholder="Usia Suami" name="family_age">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="family_job" class="form-label">Pekerjaan</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="family_job"
                                                    placeholder="Pekerjaan Suami" name="family_job">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="father_name" class="form-label">Nama Ayah</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="father_name"
                                                    placeholder="Nama Ayah Pasien" name="father_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="family_relationship" class="form-label">Hubungan
                                                    Keluarga</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control w-100" id="family_relationship"
                                                    name="family_relationship">
                                                    <option value="" selected></option>
                                                    <option value="Ibu">Ibu</option>
                                                    <option value="Ayah">Ayah</option>
                                                    <option value="Suami">Suami</option>
                                                    <option value="Istri">Istri</option>
                                                    <option value="Saudara Kandung Laki-laki">Saudara Kandung Laki-laki
                                                    </option>
                                                    <option value="Saudara Kandung Perempuan">Saudara Kandung Perempuan
                                                    </option>
                                                    <option value="Anak">Anak</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="family_mobile_phone_number" class="form-label">No. HP /
                                                    Telp</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="family_mobile_phone_number"
                                                    placeholder="No. HP / Telp Suami" name="family_mobile_phone_number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="family_address" class="form-label">Alamat</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="family_address"
                                                    placeholder="Alamat Suami" name="family_address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="mother_name" class="form-label">Nama Ibu</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="mother_name"
                                                    placeholder="Nama Ibu Pasien" name="mother_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr bg-success-500">
                        <h2 class="text-white">
                            Informasi<span class="fw-300"><i>Penjamin</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="guarantor_name" class="form-label">Nama Penjamin</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control w-100" id="guarantor_name"
                                                    name="guarantor_name">
                                                    <option value="" disabled selected></option>
                                                    <option value="224">BPJS KESEHATAN</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="guarantor_number" class="form-label">No. Polis /
                                                    BPJS</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="guarantor_number"
                                                    placeholder="Nomor Polis / BPJS" name="guarantor_number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="employee_name" class="form-label">Nama Pegawai</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="employee_name"
                                                    placeholder="Nama Pegawai (Pasien)" name="employee_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="patient_relationship" class="form-label">Hubungan
                                                    Pasien</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="patient_relationship"
                                                    placeholder="Hubungan Pasien" name="patient_relationship">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="company" class="form-label">Perusahaan</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="company"
                                                    placeholder="Nama Perusahaan" name="company">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="employee_number" class="form-label">No. Pegawai</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="employee_number"
                                                    placeholder="Nomor Kepegawaian Pasien" name="employee_number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="unit" class="form-label">Bagian</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="unit" placeholder="Bagian"
                                                    name="unit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="group" class="form-label">Grup</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="group" placeholder="Grup"
                                                    name="group">
                                            </div>
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
            <div class="col-6">
                <a href="{{ route('pendaftaran.pasien.daftar_rm') }}"
                    class="btn btn-lg btn-outline-primary waves-effect waves-themed">
                    <span class="fal fa-arrow-left mr-1"></span>
                    Kembali
                </a>
            </div>
            <div class="col-5" style="text-align: right">
                <button type="submit" class="btn btn-lg btn-primary waves-effect waves-themed">
                    <span class="fal fa-user-plus mr-1"></span>
                    Simpan
                </button>
            </div>
        </div>

    </form>

</main>
@endsection
@section('plugin')
<script src="/js/formplugins/select2/select2.bundle.js"></script>
<script>
    $(document).ready(function() {
        $('#title').select2({
            'placeholder': 'Pilih Title'
        , });

        $('#religion').select2({
            'placeholder': 'Pilih Agama'
        , });

        $('#subdistrict').select2({
            'placeholder': 'Pilih Kecamatan'
        , });

        $('#ward').select2({
            'placeholder': 'Pilih Kabupaten'
        , });

        $('#regency').select2({
            'placeholder': 'Pilih Kabupaten'
        , });

        $('#province').select2({
            'placeholder': 'Pilih Provinsi'
        , });

        $('#last_education').select2({
            'placeholder': 'Pilih Pendidikan Terakhir'
        , });

        $('#ethnic').select2({
            'placeholder': 'Pilih Suku / Etnis'
        , });

        $('#job').select2({
            'placeholder': 'Pilih Pekerjaan'
        , });

        $('#guarantor_name').select2({
            'placeholder': 'Pilih Penjamin'
        , });

        $('#family_relationship').select2({
            'placeholder': 'Pilih Hubungan Keluarga'
        , });
    });

</script>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#province').change(function() {
            var provinceId = $(this).val();
            if (provinceId) {
                $('#regency').prop('disabled', true);
                $('#regency').html('<option value="">Loading...</option>');

                $.ajax({
                    url: 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=' + provinceId
                    , type: 'GET'
                    , success: function(response) {
                        if (response.kota_kabupaten && response.kota_kabupaten.length > 0) {
                            $('#regency').prop('disabled', false);
                            var options = '<option value="">Pilih Kota/Kabupaten</option>';
                            response.kota_kabupaten.forEach(function(city) {
                                options += '<option value="' + city.id + '">' + city.nama + '</option>';
                            });
                            $('#regency').html(options);
                            $('#subdistrict').html('<option value="">Pilih Kecamatan</option>');
                            $('#subdistrict').html('<option value="">Pilih Kelurahan</option>');
                        } else {
                            $('#regency').html('<option value="">No cities found</option>');
                            $('#subdistrict').html('<option value="">Pilih Kecamatan</option>');
                            $('#ward').html('<option value="">Pilih Kelurahan</option>');
                        }
                    }
                });
            } else {
                $('#regency').prop('disabled', true);
                $('#regency').html('<option value="">Pilih Kota/Kabupaten</option>');
                $('#subdistrict').html('<option value="">Pilih Kecamatan</option>');
                $('#ward').html('<option value="">Pilih Kelurahan</option>');
            }
        });

        $('#regency').change(function() {
            var cityId = $(this).val();
            if (cityId) {
                console.log(cityId);
                $('#subdistrict').prop('disabled', true);
                $('#subdistrict').html('<option value="">Loading...</option>');

                $.ajax({
                    url: 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=' + cityId
                    , type: 'GET'
                    , success: function(response) {
                        if (response.kecamatan && response.kecamatan.length > 0) {
                            $('#subdistrict').prop('disabled', false);
                            var options = '<option value="">Pilih Kota/Kabupaten</option>';
                            response.kecamatan.forEach(function(subdistrict) {
                                options += '<option value="' + subdistrict.id + '">' + subdistrict.nama + '</option>';
                            });
                            $('#subdistrict').html(options);
                            $('#ward').html('<option value="">Pilih Kecamatan</option>');
                            $('#ward').html('<option value="">Pilih Kelurahan</option>');
                        } else {
                            $('#subdistrict').html('<option value="">No districts found</option>');
                            $('#ward').html('<option value="">Pilih Kelurahan</option>');
                        }
                    }
                });
            } else {
                $('#subdistrict').prop('disabled', true);
                $('#subdistrict').html('<option value="">Pilih Kecamatan</option>');
                $('#ward').html('<option value="">Pilih Kelurahan</option>');
            }
        });

        $('#subdistrict').change(function() {
            var subDistrictId = $(this).val();
            console.log(subDistrictId);
            if (subDistrictId) {
                $('#ward').prop('disabled', true);
                $('#ward').html('<option value="">Loading...</option>');

                $.ajax({
                    url: 'https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=' + subDistrictId
                    , type: 'GET'
                    , success: function(response) {
                        if (response.kelurahan && response.kelurahan.length > 0) {
                            $('#ward').prop('disabled', false);
                            var options = '<option value="">Pilih Kelurahan</option>';
                            response.kelurahan.forEach(function(ward) {
                                options += '<option value="' + ward.id + '">' + ward.nama + '</option>';
                            });
                            $('#ward').html(options);
                        } else {
                            $('#ward').html('<option value="">No wards found</option>');
                        }
                    }
                });
            } else {
                $('#ward').prop('disabled', true);
                $('#ward').html('<option value="">Pilih Kelurahan</option>');
            }
        });
    });

</script>