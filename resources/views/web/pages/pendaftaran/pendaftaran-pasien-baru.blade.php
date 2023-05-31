@extends('inc.layout')
@section('title','Daftar Rekam Medis')
@section('content')
<main id="js-page-content" role="main" class="page-content">
    <div class="subheader">
        @component('inc.subheader',['subheader_title'=>'st_type_2','sh_icon'=>'home'])
        @slot('sh_descipt') Your first page for content division @endslot
        @endcomponent
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Pendaftaran <span class="fw-300"><i>Pasien Baru</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <form autocomplete="off" novalidate>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="inputName" class="form-label">Nama Lengkap *</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Full name">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="form-label">Nama Panggilan</label>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="single-default">
                                        Title *
                                    </label>
                                    <select class="select2 form-control w-100" id="single-default">
                                        <option value="" disabled selected></option>
                                        <option value="Tn.">Tuan (Tn)</option>
                                        <option value="Ny.">Nyonya (Ny)</option>
                                        <option value="Sdr.">Saudara (Sdr)</option>
                                        <option value="Sdri.">Saudari (Sdri)</option>
                                        <option value="An.">Anak (An)</option>
                                        <option value="By.">Bayi (By)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="frame-wrap">
                                        <label class="form-label mr-5">
                                            Jenis Kelamin *
                                        </label>
                                        <div class="custom-control custom-radio d-inline mr-2">
                                            <input type="radio" class="custom-control-input" id="laki-laki"
                                                name="defaultExampleRadios">
                                            <label class="custom-control-label" for="laki-laki">Laki-Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline">
                                            <input type="radio" class="custom-control-input" id="perempuan"
                                                name="defaultExampleRadios" checked="">
                                            <label class="custom-control-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="form-label">Tempat, Tgl. Lahir</label>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="inputVerify3"
                                                placeholder="Tempat" required="">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="date" class="form-control" id="inputVerify3"
                                                placeholder="Tanggal Lahir" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="single-default">
                                        Agama *
                                    </label>
                                    <select class="select2 form-control w-100" id="single-default">
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
                                <div class="form-group">
                                    <div class="frame-wrap">
                                        <label class="form-label mr-5">
                                            Golongan Darah
                                        </label>
                                        <div class="custom-control custom-radio d-inline mr-4">
                                            <input type="radio" class="custom-control-input" id="o" name="blood_group">
                                            <label class="custom-control-label" for="o">O</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline mr-4">
                                            <input type="radio" class="custom-control-input" id="a" name="blood_group">
                                            <label class="custom-control-label" for="a">A</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline mr-4">
                                            <input type="radio" class="custom-control-input" id="b" name="blood_group">
                                            <label class="custom-control-label" for="b">B</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline mr-4">
                                            <input type="radio" class="custom-control-input" id="ab" name="blood_group">
                                            <label class="custom-control-label" for="ab">AB</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="form-label">Alergi</label>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <div class="frame-wrap">
                                        <label class="form-label mr-5">
                                            Status Pernikahan
                                        </label>
                                        <div class="custom-control custom-radio d-inline mr-4">
                                            <input type="radio" class="custom-control-input" id="belum_menikah"
                                                name="blood_group">
                                            <label class="custom-control-label" for="belum_menikah">Belum
                                                Menikah</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline mr-4">
                                            <input type="radio" class="custom-control-input" id="menikah"
                                                name="blood_group">
                                            <label class="custom-control-label" for="menikah">Menikah</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline mr-4">
                                            <input type="radio" class="custom-control-input" id="janda"
                                                name="blood_group">
                                            <label class="custom-control-label" for="janda">Janda</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline mr-4">
                                            <input type="radio" class="custom-control-input" id="duda"
                                                name="blood_group">
                                            <label class="custom-control-label" for="duda">Duda</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="form-label">Bahasa *</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Full name">
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="form-label">Kewarganegaraan</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Full name">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
@section('plugin')
<script src="/js/formplugins/select2/select2.bundle.js"></script>
<script>
    $(document).ready(function()
            {
                $(function()
                {
                    $('.select2').select2();

                    $(".select2-placeholder-multiple").select2(
                    {
                        placeholder: "Select State"
                    });
                    $(".js-hide-search").select2(
                    {
                        minimumResultsForSearch: 1 / 0
                    });
                    $(".js-max-length").select2(
                    {
                        maximumSelectionLength: 2,
                        placeholder: "Select maximum 2 items"
                    });
                    $(".select2-placeholder").select2(
                    {
                        placeholder: "Select a state",
                        allowClear: true
                    });



                    $(".js-select2-icons").select2(
                    {
                        minimumResultsForSearch: 1 / 0,
                        templateResult: icon,
                        templateSelection: icon,
                        escapeMarkup: function(elm)
                        {
                            return elm
                        }
                    });

                    function icon(elm)
                    {
                        elm.element;
                        return elm.id ? "<i class='" + $(elm.element).data("icon") + " mr-2'></i>" + elm.text : elm.text
                    }

                    $(".js-data-example-ajax").select2(
                    {
                        ajax:
                        {
                            url: "https://api.github.com/search/repositories",
                            dataType: 'json',
                            delay: 250,
                            data: function(params)
                            {
                                return {
                                    q: params.term, // search term
                                    page: params.page
                                };
                            },
                            processResults: function(data, params)
                            {
                                // parse the results into the format expected by Select2
                                // since we are using custom formatting functions we do not need to
                                // alter the remote JSON data, except to indicate that infinite
                                // scrolling can be used
                                params.page = params.page || 1;

                                return {
                                    results: data.items,
                                    pagination:
                                    {
                                        more: (params.page * 30) < data.total_count
                                    }
                                };
                            },
                            cache: true
                        },
                        placeholder: 'Search for a repository',
                        escapeMarkup: function(markup)
                        {
                            return markup;
                        }, // let our custom formatter work
                        minimumInputLength: 1,
                        templateResult: formatRepo,
                        templateSelection: formatRepoSelection
                    });

                    function formatRepo(repo)
                    {
                        if (repo.loading)
                        {
                            return repo.text;
                        }

                        var markup = "<div class='select2-result-repository clearfix d-flex'>" +
                            "<div class='select2-result-repository__avatar mr-2'><img src='" + repo.owner.avatar_url + "' class='width-2 height-2 mt-1 rounded' /></div>" +
                            "<div class='select2-result-repository__meta'>" +
                            "<div class='select2-result-repository__title fs-lg fw-500'>" + repo.full_name + "</div>";

                        if (repo.description)
                        {
                            markup += "<div class='select2-result-repository__description fs-xs opacity-80 mb-1'>" + repo.description + "</div>";
                        }

                        markup += "<div class='select2-result-repository__statistics d-flex fs-sm'>" +
                            "<div class='select2-result-repository__forks mr-2'><i class='fal fa-lightbulb'></i> " + repo.forks_count + " Forks</div>" +
                            "<div class='select2-result-repository__stargazers mr-2'><i class='fal fa-star'></i> " + repo.stargazers_count + " Stars</div>" +
                            "<div class='select2-result-repository__watchers mr-2'><i class='fal fa-eye'></i> " + repo.watchers_count + " Watchers</div>" +
                            "</div>" +
                            "</div></div>";

                        return markup;
                    }

                    function formatRepoSelection(repo)
                    {
                        return repo.full_name || repo.text;
                    }

                });
            });

</script>
@endsection