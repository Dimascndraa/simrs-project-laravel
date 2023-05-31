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
                        Daftar <span class="fw-300"><i>Rekam Medis</i></span>
                    </h2>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <a href="{{ route('pendaftaran.pasien.pendaftaran_pasien_baru') }}"
                            class="btn btn-lg btn-primary mb-5 waves-effect waves-themed">
                            <span class="fal fa-plus-circle mr-1"></span>
                            Tambah Pasien
                        </a>
                        <!-- datatable start -->
                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                            <thead class="bg-primary-600">
                                <tr>
                                    <th>No. RM</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Tempat & Tgl. Lahir</th>
                                    <th>No. Telp</th>
                                    <th>No. Hp</th>
                                    <th>Keluarga yang dapat dihubungi</th>
                                    <th>Penjamin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $patien)
                                <tr>
                                    <td>{{ $patient->medical_record_number }}</td>
                                    <td>{{ $patient->name }}</td>
                                    <td>{{ $patient->address }}</td>
                                    <td>{{ $patient->address }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No. RM</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>Tempat & Tgl. Lahir</th>
                                    <th>No. Telp</th>
                                    <th>No. Hp</th>
                                    <th>Keluarga yang dapat dihubungi</th>
                                    <th>Penjamin</th>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- datatable end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
@section('plugin')
<script src="/js/datagrid/datatables/datatables.bundle.js"></script>
<script src="/js/datagrid/datatables/datatables.export.js"></script>
<script>
    $(document).ready(function()
            {

                // initialize datatable
                $('#dt-basic-example').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom:
                        /*	--- Layout Structure
                        	--- Options
                        	l	-	length changing input control
                        	f	-	filtering input
                        	t	-	The table!
                        	i	-	Table information summary
                        	p	-	pagination control
                        	r	-	processing display element
                        	B	-	buttons
                        	R	-	ColReorder
                        	S	-	Select

                        	--- Markup
                        	< and >				- div element
                        	<"class" and >		- div with a class
                        	<"#id" and >		- div with an ID
                        	<"#id.class" and >	- div with an ID and a class

                        	--- Further reading
                        	https://datatables.net/reference/option/dom
                        	--------------------------------------
                         */
                        "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        /*{
                        	extend:    'colvis',
                        	text:      'Column Visibility',
                        	titleAttr: 'Col visibility',
                        	className: 'mr-sm-3'
                        },*/
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            titleAttr: 'Generate PDF',
                            className: 'btn-outline-danger btn-sm mr-1'
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            titleAttr: 'Generate Excel',
                            className: 'btn-outline-success btn-sm mr-1'
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-outline-primary btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-outline-primary btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-outline-primary btn-sm'
                        }
                    ]
                });

            });

</script>
@endsection