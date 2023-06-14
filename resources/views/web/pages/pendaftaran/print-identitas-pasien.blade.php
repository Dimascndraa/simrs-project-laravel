@php
use \App\Helpers\DateHelper;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="msapplication-TileColor" content="#00bcd4">
    <title>@medic Information System</title>

    <link type="text/css" rel="stylesheet" href="http://192.168.1.253/real/include/styles/ma/bootstrap.css">
    <link type="text/css" rel="stylesheet"
        href="http://192.168.1.253/real/include/js/jqgrid5/css/ui.jqgrid-bootstrap.css">
    <link rel="stylesheet" href="http://192.168.1.253/real/include/js/jqwidgets3.6/jqwidgets/styles/jqx.base.css"
        type="text/css">
    <link type="text/css" rel="stylesheet" href="http://192.168.1.253/real/include/styles/ma/materialadmin.css">
    <link href="http://192.168.1.253/real/include/font/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://192.168.1.253/real/include/styles/ma/materialdesignicons.min.css" media="all" rel="stylesheet"
        type="text/css">
    <link type="text/css" rel="stylesheet"
        href="http://192.168.1.253/real/include/styles/ma/plugins/node-waves/waves.min.css">
    <link
        href="http://192.168.1.253/real/include/styles/ma/plugins/bootstrap-datepicker/bootstrap-datetimepicker.min.css"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet"
        href="http://192.168.1.253/real/include/styles/ma/plugins/select2/select2.css">
    <link type="text/css" rel="stylesheet" href="http://192.168.1.253/real/include/styles/ma/custom_style.css?1">

    <script type="text/javascript" src="http://192.168.1.253/real/include/js/jquery-2.2.4.min.js"></script>
    <style>
        ddg-runtime-checks {
            display: none;

        }
    </style>
    <script type="text/javascript" src="http://192.168.1.253/real/include/styles/ma/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="http://192.168.1.253/real/include/js/jqgrid5/js/i18n/grid.locale-id.js">
    </script>
    <script src="http://192.168.1.253/real/include/js/jqgrid5/js/jquery.jqGrid.min.js?v2"></script>
    <script type="text/javascript" src="http://192.168.1.253/real/include/js/jqwidgets3.6/jqwidgets/jqxcore.js">
    </script>
    <script type="text/javascript" src="http://192.168.1.253/real/include/js/jqwidgets3.6/jqwidgets/jqx-all.js">
    </script>
    <script type="text/javascript" src="http://192.168.1.253/real/include/styles/ma/plugins/node-waves/waves.min.js">
    </script>
    <script type="text/javascript"
        src="http://192.168.1.253/real/include/styles/ma/plugins/bootstrap-datepicker/moment.min.js"></script>
    <script type="text/javascript" src="http://192.168.1.253/real/include/styles/ma/plugins/bootstrap-datepicker/id.js">
    </script>
    <script type="text/javascript"
        src="http://192.168.1.253/real/include/styles/ma/plugins/bootstrap-datepicker/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
        src="http://192.168.1.253/real/include/styles/ma/plugins/select2/select2.full.min.js"></script>
    <script type="text/javascript" src="http://192.168.1.253/real/include/styles/ma/plugins/spin.js/spin.min.js">
    </script>
    <style type="text/css"></style>
    <script type="text/javascript" src="http://192.168.1.253/real/include/styles/ma/plugins/bootbox.min.js"></script>
    <script type="text/javascript"
        src="http://192.168.1.253/real/include/styles/ma/plugins/jquery.inputmask.bundle.min.js"></script>
    <script type="text/javascript" src="http://192.168.1.253/real/include/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://192.168.1.253/real/include/js/standard_lib.js"></script>
    <script type="text/javascript">
        function base_url(){return 'http://192.168.1.253/real/';}
    </script>
</head>

<body class="loaded">
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="modal fade" id="popupcx" role="dialog">
        <div class="modal-dialog">
            <div class="modal-body" id="bodycx"></div>
        </div>
    </div>
    <div id="popupcx2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body" id="bodycx2"></div>
                <div class="modal-footer">
                    <div class="card-actionbar-row-left">
                        <button type="button" class="btn btn-flat waves-effect" data-dismiss="modal"><i
                                class="fa fa-window-close"></i> Tutup</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <style type="text/css">
            .head {
                padding-bottom: 0;
                margin-bottom: 0;
                font-weight: bold;
            }

            .child {
                font-size: .8em;
                margin: 0;
                padding: 0;
                margin-top: -10px
            }

            .box {
                border: #CCC 1px solid;
                padding: 5px;
            }


            table tr th {
                text-align: center;
            }
        </style>

        <script type="text/javascript">
            function printit(){
    $("#printdiv").hide();
    window.print();
    $("#printdiv").show();
  }  
        </script>

        <div class="card" id="printdiv">
            <div class="card-actionbar">
                <div class="card-actionbar-row" id="group-print-pasien">
                    <button class="btn btn-success pull-left waves-effect" onclick="printit(); return false"><i
                            class="mdi mdi-printer"></i> Print</button>
                    <button class="btn btn-danger pull-left waves-effect" onclick="window.close()"><i
                            class="mdi mdi-close"></i> Tutup</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="4" class="text-center"><b>FORMULIR PENDAFTARAN PASIEN BARU</b></td>
                        </tr>
                        <tr>
                            <td width="20%">
                                <div class="head"><u>Nama Pasien</u></div>
                                <div class="child"><em>Name</em></div>
                            </td>
                            <td width="25%">: {{ $patient->name }}</td>
                            <td width="20%">
                                <div class="head">RM</div>
                            </td>
                            <td width="25%">: {{ $patient->medical_record_number }}</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="head"><u>Tempat / Tgl Lahir</u></div>
                                <div class="child"><em>Place &amp; Date Birth</em></div>
                            </td>
                            <td>: {{ $patient->place }} , {{
                                \App\Helpers\DateHelper::getIndonesianDateFormat($patient->date_of_birth) }}</td>
                            <td>
                                <div class="head"><u>Umur</u></div>
                                <div class="child"><em>Age</em></div>
                            </td>
                            <td>: {{ $age }}</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="head"><u>Golongan Darah</u></div>
                                <div class="child"><em>Blood Type</em></div>
                            </td>
                            <td>: {{ $patient->blood_group }}</td>
                            <td>
                                <div class="head"><u>Jenis Kelamin</u></div>
                                <div class="child"><em>Sex</em></div>
                            </td>
                            <td>: {{ $patient->gender }}</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="head"><u>Status Pernikahan</u></div>
                                <div class="child"><em>Martial Status</em></div>
                            </td>
                            <td>: {{ $patient->married_status }}</td>
                            <td>
                                <div class="head"><u>Agama</u></div>
                                <div class="child"><em>Religion</em></div>
                            </td>
                            <td>: {{ $patient->religion }}</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="head"><u>Pendidikan Terakhir</u></div>
                                <div class="child"><em>Education</em></div>
                            </td>
                            <td>: {{ $patient->last_education }}</td>
                            <td>
                                <div class="head"><u>Pekerjaan</u></div>
                                <div class="child"><em>Occupation</em></div>
                            </td>
                            <td>: {{ $patient->job }}</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="head"><u>Alamat</u></div>
                                <div class="child"><em>Address</em></div>
                            </td>
                            <td colspan="3">: {{ $patient->address }}</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="head"><u>Kelurahan</u></div>
                            </td>
                            <td>: {{ $patient->ward }}</td>
                            <td>
                                <div class="head"><u>Kecamatan</u></div>
                            </td>
                            <td>: {{ $patient->subdistrict }} </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="head"><u>Kota/Kab</u></div>
                            </td>
                            <td>: {{ $patient->regency }}</td>
                            <td>
                                <div class="head"><u>Provinsi</u></div>
                            </td>
                            <td>: {{ $patient->province }}</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="head"><u>No. Telp</u></div>
                                <div class="child"><em>Phone Number</em></div>
                            </td>
                            <td>: </td>
                            <td>
                                <div class="head"><u>Handphone</u></div>
                                <div class="child"><em>Mobile Number</em></div>
                            </td>
                            <td>: {{ $patient->mobile_phone_number }}</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="head"><u>Nama Suami</u></div>
                                <div class="child"><em>husband's name</em></div>
                            </td>
                            <td>: </td>
                            <td>
                                <div class="head"><u>Usia</u></div>
                                <div class="child"><em>Age</em></div>
                            </td>
                            <td>: </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="head"><u>Pekerjaan</u></div>
                                <div class="child"><em>Occupation</em></div>
                            </td>
                            <td>: </td>
                            <td>
                                <div class="head"><u>Nama Orang Tua</u></div>
                                <div class="child"><em>Parent's Name</em></div>
                            </td>
                            <td>: DUDI YUDIANA</td>
                        </tr>

                        <tr>
                            <td>
                                <div class="head"><u>Askes</u></div>
                                <div class="child"><em>Askes Insurance</em></div>
                            </td>
                            <td></td>
                            <td>
                                <div class="head"><u>Asuransi Lain</u></div>
                                <div class="child"><em>Other Insurance</em></div>
                            </td>
                            <td>: </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="head"><u>Klinik Tujuan</u></div>
                                <div class="child"><em>Clinic</em></div>
                            </td>
                            <td colspan="3">: </td>
                        </tr>
                    </tbody>
                </table>
                <!--
      <table class="table table-bordered">
        <tr>
            <th>Tgl</th>
            <th>Jam</th>
            <th>Profesi</th>
            <th>
              <b>HASIL ANALISIS PEMERIKSAAN RENCANA PENATALAKSANAAN</b>
                (DITULIS DENGAN FORMAT SOAP HARAP MENULISKAN NAMA DAN PARAF PADA SETIAP AKHIR CATATAN)
            </th>
            <th>INSTRUKSI TENAGA KESEHATAN</th>
            <th>VERIFIKASI DPJP</th>
        </tr>
        <tr>
          <td height="400px"></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
	-->
            </div>
        </div>


    </div>
    <script src="http://192.168.1.253/real/include/styles/ma/js/App.js"></script>


    <div style="width: 100%; height: 2px; z-index: 9999; top: 0px; float: left; position: fixed;">
        <div
            style="background-color: rgb(123, 31, 162); width: 0px; height: 100%; clear: both; transition: height 0.3s ease 0s; float: left;">
        </div>
    </div>
    <div id="device-breakpoints">
        <div class="device-xs visible-xs" data-breakpoint="xs"></div>
        <div class="device-sm visible-sm" data-breakpoint="sm"></div>
        <div class="device-md visible-md" data-breakpoint="md"></div>
        <div class="device-lg visible-lg" data-breakpoint="lg"></div>
    </div>
</body>

</html>