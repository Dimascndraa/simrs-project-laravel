{{-- @dd($patient) --}}
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
        <div class="row align-items-center">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr bg-primary">
                        <h2 class="text-white">
                            Biodata<span class="fw-300"><i>Pasien</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="name" class="form-label">Nama Lengkap *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text"
                                                    class="@error('name') is-invalid @enderror form-control" id="name"
                                                    name="name" placeholder="Nama Lengkap Pasien"
                                                    value="{{ old('name', $patient->name) }}">
                                                @error('name')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
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
                                                <input type="text"
                                                    class="@error('nickname') is-invalid @enderror form-control"
                                                    id="nickname" placeholder="Nama Pangilan Pasien" name="nickname"
                                                    value="{{ old('nickname', $patient->nickname) }}">
                                                @error('nickname')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
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
                                                <select class="@error('title') is-invalid @enderror form-control w-100"
                                                    id="title" name="title">
                                                    <option value="" disabled selected></option>
                                                    <option value="Tn." {{ old('title', $patient->title
                                                        )==="Tn." ? "selected" : "" }}>
                                                        Tuan (Tn)
                                                    </option>
                                                    <option value="Ny." {{ old('title', $patient->title)==="Ny." ?
                                                        "selected"
                                                        : "" }}>
                                                        Nyonya (Ny)
                                                    </option>
                                                    <option value="Sdr." {{ old('title', $patient->title)==="Sdr." ?
                                                        "selected" : "" }}>
                                                        Saudara (Sdr)
                                                    </option>
                                                    <option value="Sdri." {{ old('title', $patient->title)==="Sdri." ?
                                                        "selected" : ""
                                                        }}>
                                                        Saudari (Sdri)
                                                    </option>
                                                    <option value="An." {{ old('title', $patient->title)==="An." ?
                                                        "selected"
                                                        : "" }}>
                                                        Anak (An)
                                                    </option>
                                                    <option value="By." {{ old('title', $patient->title)==="By." ?
                                                        "selected"
                                                        : "" }}>
                                                        Bayi (By)
                                                    </option>
                                                </select>
                                                @error('title')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label d-block" for="gender">
                                                    Jenis Kelamin *
                                                </label>
                                            </div>
                                            <div class="col-sm-8 pl-3">
                                                <div class="custom-control custom-radio d-inline mr-2">
                                                    <input type="radio"
                                                        class="@error('gender') is-invalid @enderror custom-control-input"
                                                        value="laki-laki" id="laki-laki" name="gender" {{ old('gender',
                                                        $patient->gender)==="laki-laki" ? "checked" : "" }}>
                                                    <label class="custom-control-label"
                                                        for="laki-laki">Laki-Laki</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline">
                                                    <input type="radio"
                                                        class="@error('gender') is-invalid @enderror custom-control-input"
                                                        value="perempuan" id="perempuan" name="gender" {{ old('gender',
                                                        $patient->gender)==="perempuan" ? "checked" : "" }}>
                                                    <label class="custom-control-label"
                                                        for="perempuan">Perempuan</label>
                                                    @error('gender')
                                                    <p class="invalid-feedback">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="" class="form-label">Tempat, Tgl. Lahir *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-6">
                                                        <input type="text"
                                                            class="@error('place') is-invalid @enderror form-control"
                                                            id="place" placeholder="Tempat" name="place"
                                                            value="{{ old('place', $patient->place) }}">
                                                        @error('place')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="date"
                                                            class="@error('date_of_birth') is-invalid @enderror form-control"
                                                            id="date_of_birth" placeholder="Tanggal Lahir"
                                                            name="date_of_birth"
                                                            value="{{ old('date_of_birth', $patient->date_of_birth) }}">
                                                        @error('date_of_birth')
                                                        <p class="invalid-feedback">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="religion">
                                                    Agama *
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select
                                                    class="@error('religion') is-invalid @enderror form-control w-100"
                                                    id="religion" name="religion">
                                                    <option value="" disabled selected></option>
                                                    <option value="Islam" {{ old('religion', $patient->
                                                        religion)==="Islam" ? "selected" : ""
                                                        }}>
                                                        Islam
                                                    </option>
                                                    <option value="Kristen Protestan" {{ old('religion', $patient->
                                                        religion)==="Kristen Protestan" ? "selected" : "" }}>
                                                        Kristen Protestan
                                                    </option>
                                                    <option value="Katholik" {{ old('religion', $patient->
                                                        religion)==="Katholik"
                                                        ? "selected" : "" }}>
                                                        Katholik
                                                    </option>
                                                    <option value="Budha" {{ old('religion', $patient->
                                                        religion)==="Budha" ? "selected" : ""
                                                        }}>
                                                        Budha
                                                    </option>
                                                    <option value="Hindu" {{ old('religion', $patient->
                                                        religion)==="Hindu" ? "selected" : ""
                                                        }}>
                                                        Hindu
                                                    </option>
                                                    <option value="Kong Hu Cu" {{ old('religion', $patient->
                                                        religion)==="Kong u Chu"
                                                        ? "selected" : "" }}>
                                                        Kong Hu Cu
                                                    </option>
                                                    <option value="Lain lain" {{ old('religion', $patient->
                                                        religion)==="Lain lain"
                                                        ? "selected" : "" }}>
                                                        Lain lain
                                                    </option>
                                                </select>
                                                @error('religion')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label d-block"
                                                    style="margin-bottom: 1.4rem !important" id="blood_group">
                                                    Golongan Darah
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="o"
                                                        name="blood_group" value="O" {{ old('blood_group',
                                                        $patient->blood_group)==="O"
                                                    ? "checked" : "" }}>
                                                    <label class="custom-control-label" for="o">O</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="a"
                                                        name="blood_group" value="A" {{ old('blood_group',
                                                        $patient->blood_group)==="A"
                                                    ? "checked" : "" }}>
                                                    <label class="custom-control-label" for="a">A</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="b"
                                                        name="blood_group" value="B" {{ old('blood_group',
                                                        $patient->blood_group)==="B"
                                                    ? "checked" : "" }}>
                                                    <label class="custom-control-label" for="b">B</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="ab"
                                                        name="blood_group" value="AB" {{ old('blood_group',
                                                        $patient->blood_group)==="AB"
                                                    ? "checked" : "" }}>
                                                    <label class="custom-control-label" for="ab">AB</label>
                                                </div>
                                                @error('religion')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="allergy" class="form-label">Alergi</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text"
                                                    class="@error('allergy') is-invalid @enderror form-control"
                                                    id="allergy" placeholder="Alergi Pasien" name="allergy"
                                                    value="{{ old('allergy', $patient->allergy) }}">
                                                @error('allergy')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label mr-5 d-block"
                                                    style="margin-bottom: 1.4rem !important">
                                                    Status Pernikahan
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="belum_menikah"
                                                        name="married_status" value="Belum Menikah" {{
                                                        old('married_status', $patient->married_status )
                                                    === "Belum Menikah" ? "checked" : "" }}>
                                                    <label class="custom-control-label" for="belum_menikah">Belum
                                                        Menikah</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="menikah"
                                                        name="married_status" value="Menikah" {{ old('married_status',
                                                        $patient->married_status) === "Menikah" ? "checked" : "" }}>
                                                    <label class="custom-control-label" for="menikah">Menikah</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="janda"
                                                        name="married_status" value="Janda" {{ old('married_status',
                                                        $patient->married_status) === "Janda" ? "checked" : "" }}>
                                                    <label class="custom-control-label" for="janda">Janda</label>
                                                </div>
                                                <div class="custom-control custom-radio d-inline mr-4">
                                                    <input type="radio" class="custom-control-input" id="duda"
                                                        name="married_status" value="Duda" {{ old('married_status',
                                                        $patient->married_status) === "Duda" ? "checked" : "" }}>
                                                    <label class="custom-control-label" for="duda">Duda</label>
                                                </div>
                                                @error('married_status')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="language" class="form-label">Bahasa *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text"
                                                    class="@error('language') is-invalid @enderror form-control"
                                                    id="language" placeholder="Pasien Menggunakan Bahasa"
                                                    value="{{ old('language', $patient->language, 'Indonesia') }}"
                                                    name="language">
                                                @error('language')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="citizenship" class="form-label">Kewarganegaraan</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text"
                                                    class="@error('citizenship') is-invalid @enderror form-control"
                                                    id="citizenship" placeholder="Kewarganegaraan Pasien"
                                                    value="{{ old('citizenship', $patient->citizenship, 'Indonesia') }}"
                                                    name="citizenship">
                                                @error('citizenship')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="id_card" class="form-label">No. KTP/SIM/Paspor</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text"
                                                    class="@error('id_card') is-invalid @enderror form-control"
                                                    id="id_card" placeholder="No. KTP/SIM/Paspor Pasien" name="id_card"
                                                    value="{{ old('id_card', $patient->id_card) }}">
                                                @error('id_card')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="address" class="form-label">Alamat *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text"
                                                    class="@error('address') is-invalid @enderror form-control"
                                                    id="address" placeholder="Alamat Pasien" name="address"
                                                    value="{{ old('address', $patient->address) }}">
                                                @error('address')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="province" class="form-label">Provinsi</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select
                                                    class="@error('province') is-invalid @enderror form-control w-100"
                                                    id="province" name="province">
                                                    <option value="" disabled selected></option>
                                                    @foreach($provinces as $province)
                                                    <option value="{{ $province['id'] }}" class="asdasdasdasdasdsadsa"
                                                        {{ $patient->province == $province['id'] ? "selected" : "" }}>
                                                        {{ $province['nama'] }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('province')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="regency">Kota / Kabupaten
                                                    *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select
                                                    class="@error('regency') is-invalid @enderror form-control w-100"
                                                    id="regency" name="regency">
                                                    <option value="{{ $patient->regency }}">{{ $patient->regency }}
                                                    </option>
                                                </select>
                                                @error('regency')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="subdistrict">Kecamatan *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select
                                                    class="@error('subdistrict') is-invalid @enderror form-control w-100"
                                                    id="subdistrict" name="subdistrict">
                                                    <option value="" disabled selected></option>
                                                </select>
                                                @error('subdistrict')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="ward">Kelurahan *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="@error('ward') is-invalid @enderror form-control w-100"
                                                    id="ward" name="ward">
                                                    <option value="" disabled selected></option>
                                                </select>
                                                @error('ward')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="mobile_phone_number" class="form-label">No. HP/Telp
                                                    *</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text"
                                                    class="@error('mobile_phone_number') is-invalid @enderror form-control"
                                                    id="mobile_phone_number" placeholder="No. HP / Telp Pasien"
                                                    name="mobile_phone_number"
                                                    value="{{ old('mobile_phone_number', $patient->mobile_phone_number) }}">
                                                @error('mobile_phone_number')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="email"
                                                    class="@error('email') is-invalid @enderror form-label">Email</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" id="email"
                                                    placeholder="Alamat Email Pasien" name="email"
                                                    value="{{ old('email', $patient->email) }}">
                                                @error('email')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="last_education">
                                                    Pendidikan Terakhir *
                                                </label>
                                            </div>
                                            <div class="col-sm-8">

                                                <select
                                                    class="@error('last_education') is-invalid @enderror form-control w-100"
                                                    id="last_education" name="last_education">
                                                    <option value="" disabled selected></option>
                                                    <option value="Tidak Sekolah" {{ old('last_education', $patient->
                                                        last_education)==="Tidak Sekolah" ? "selected" : "" }}>
                                                        Tidak Sekolah</option>
                                                    <option value="Belum / Tidak tamat SD" {{ old('last_education',
                                                        $patient->last_education)==="Belum / Tidak tamat SD" ?
                                                        "selected"
                                                        : "" }}>Belum / Tidak tamat SD
                                                    </option>
                                                    <option value="Tamat SD" {{ old('last_education', $patient->
                                                        last_education)==="Tamat SD"
                                                        ? "selected" : "" }}>Tamat SD</option>
                                                    <option value="Tamat SMTP" {{ old('last_education', $patient->
                                                        last_education)==="Tamat SMTP"
                                                        ? "selected" : "" }}>Tamat SMTP</option>
                                                    <option value="Tamat SLTA" {{ old('last_education', $patient->
                                                        last_education)==="Tamat SLTA"
                                                        ? "selected" : "" }}>Tamat SLTA</option>
                                                    <option value="Tamat D3" {{ old('last_education', $patient->
                                                        last_education)==="Tamat D3"
                                                        ? "selected" : "" }}>Tamat D3</option>
                                                    <option value="Tamat S1" {{ old('last_education', $patient->
                                                        last_education)==="Tamat S1"
                                                        ? "selected" : "" }}>Tamat S1</option>
                                                    <option value="Tamat S2" {{ old('last_education', $patient->
                                                        last_education)==="Tamat S2"
                                                        ? "selected" : "" }}>Tamat S2</option>
                                                    <option value="Tamat PT" {{ old('last_education', $patient->
                                                        last_education)==="Tamat PT"
                                                        ? "selected" : "" }}>Tamat PT</option>
                                                </select>
                                                @error('last_education')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="ethnic">
                                                    Suku / Etnis *
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="@error('ethnic') is-invalid @enderror form-control w-100"
                                                    id="ethnic" name="ethnic">
                                                    <option value="" selected disabled></option>
                                                    @foreach ($ethnics as $ethnic)
                                                    <option value="{{ $ethnic->id }}">{{ $ethnic->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('ethnic')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label class="form-label" for="job">
                                                    Pekerjaan *
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="@error('job') is-invalid @enderror form-control w-100"
                                                    id="job" name="job">
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
                                                @error('job')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
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
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="accessible_family" class="form-label">Nama Keluarga</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="accessible_family"
                                                    placeholder="Nama Keluarga yang bisa dihubungi"
                                                    name="accessible_family"
                                                    value="{{ old('accessible_family', $patient->accessible_family) }}">
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
                                                    placeholder="Usia Suami" name="family_age"
                                                    value="{{ old('family_age', $patient->family_age) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="family_job" class="form-label">Pekerjaan</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="family_job"
                                                    placeholder="Pekerjaan Suami" name="family_job"
                                                    value="{{ old('family_job', $patient->family_job) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="father_name" class="form-label">Nama Ayah</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="father_name"
                                                    placeholder="Nama Ayah Pasien" name="father_name"
                                                    value="{{ old('father_name', $patient->father_name) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="family_relationship" class="form-label">Hubungan
                                                    Keluarga</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <select class="form-control w-100" id="family_relationship"
                                                    name="family_relationship">
                                                    <option value="" selected></option>
                                                    <option value="Ibu" {{ old('family_relationship')==="Ibu"
                                                        ? "selected" : "" }}>Ibu</option>
                                                    <option value="Ayah" {{ old('family_relationship')==="Ayah"
                                                        ? "selected" : "" }}>Ayah</option>
                                                    <option value="Suami" {{ old('family_relationship')==="Suami"
                                                        ? "selected" : "" }}>Suami</option>
                                                    <option value="Istri" {{ old('family_relationship')==="Istri"
                                                        ? "selected" : "" }}>Istri</option>
                                                    <option value="Saudara Kandung Laki-laki" {{
                                                        old('family_relationship')==="Saudara Kandung Laki-laki"
                                                        ? "selected" : "" }}>Saudara Kandung Laki-laki
                                                    </option>
                                                    <option value="Saudara Kandung Perempuan" {{
                                                        old('family_relationship')==="Saudara Kandung Perempuan"
                                                        ? "selected" : "" }}>Saudara Kandung Perempuan
                                                    </option>
                                                    <option value="Anak" {{ old('family_relationship')==="Anak"
                                                        ? "selected" : "" }}>Anak</option>
                                                    <option value="Lainnya" {{ old('family_relationship')==="Lainnya"
                                                        ? "selected" : "" }}>Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="family_mobile_phone_number" class="form-label">No. HP /
                                                    Telp</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="family_mobile_phone_number"
                                                    placeholder="No. HP / Telp Suami" name="family_mobile_phone_number"
                                                    value="{{ old('family_mobile_phone_number', $patient->family_mobile_phone_number) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="family_address" class="form-label">Alamat</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="family_address"
                                                    placeholder="Alamat Suami" name="family_address"
                                                    value="{{ old('family_address', $patient->family_address) }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row align-items-center">
                                            <div class="col-sm-4" style="text-align: right">
                                                <label for="mother_name" class="form-label">Nama Ibu</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="mother_name"
                                                    placeholder="Nama Ibu Pasien" name="mother_name"
                                                    value="{{ old('mother_name', $patient->mother_name) }}">
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
                    <div class="panel-hdr bg-primary-500">
                        <h2 class="text-white">
                            Informasi<span class="fw-300"><i>Penjamin</i></span>
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="row align-items-center">
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
                                        <div class="row align-items-center">
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
                                        <div class="row align-items-center">
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
                                        <div class="row align-items-center">
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
                                        <div class="row align-items-center">
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
                                        <div class="row align-items-center">
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
                                        <div class="row align-items-center">
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

        <div class="row align-items-center">
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
            'placeholder': 'Pilih Kelurahan'
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