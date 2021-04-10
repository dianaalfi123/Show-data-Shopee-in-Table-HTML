<link href="<?=base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="<?=base_url()?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- Dropzone.js -->
<link href="<?=base_url()?>assets/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="<?=base_url()?>assets/build/css/custom.min.css" rel="stylesheet">

<!-- jQuery -->
<script src="<?=base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?=base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url()?>assets/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?=base_url()?>assets/vendors/nprogress/nprogress.js"></script>

<script src="<?=base_url()?>assets/vendors/moment/min/moment.min.js"></script>
<!-- iCheck -->
<link href="<?=base_url()?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- bootstrap-datetimepicker -->
<link href="<?=base_url()?>assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
<!-- Select2 -->
<link href="<?=base_url()?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
<!-- jsgrid -->
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/vendors/jsgrid/jsgrid.min.css"/>
<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/vendors/jsgrid/jsgrid-theme.min.css"/>
<!-- Datatables -->
<link href="<?=base_url()?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"rel="stylesheet">
<link href="<?=base_url()?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

<style>
.jsgrid-grid-header,
    .jsgrid-grid-body{
      overflow: auto;
    }  
.form-horizontal .form-group {
    margin-bottom: 3px;
}

.input-group {
    margin-bottom: unset;
}

.form-horizontal .control-label {
    text-align: left;
}

.select2-container--default .select2-selection--single{
  border-radius: unset;
  border: 1px solid #ccc;  
  width: 100%;
}
.select2-container--default .select2-selection--single .select2-selection__arrow{
  height: 36px;
}

.f{
  border-radius: 0;
}

input[readonly] {
  border: 0;
  background-color: transparent;
}

.link{
  text-decoration: underline !important;
  color: blue;
}
</style>
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <form class="form-horizontal form-label-left" id="form1" method="POST">
              <!--Row 1-->
              <div class="row">
                
                <div class="col-md-6 col-xs-12">
                  <!--Start col 2-->
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Pilih File Import
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12" id="btnImportCont">
                        
                    </div>
                  </div>
                  <!--End col 2-->
                </div>
                <div class="col-md-2 col-xs-12">
                  <!--Start col 3-->
                 
                  <!--End col 3-->
                </div>
              </div>
              <!--End Row 1-->

              <!--Row 2-->
              <div class="row" style="margin-top: 15px; margin-bottom: 15px;">
                <div class="col-md-12 col-xs-12" style="overflow: auto;">
                  <div id="jsGrid"></div>
                </div>
              </div>
              <!--End Row 2-->

              <!--Row 3-->
              
              <!--End Row 3-->
              <input type="hidden" name="DETAIL" id="DETAIL" />

              <div class="ln_solid"></div>
            </form>
          </div>
        </div>
      </div>    
    </div>
  </div>
</div>


<!-- Datatables -->
<script src="<?=base_url()?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url()?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url()?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?=base_url()?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url()?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url()?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?=base_url()?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?=base_url()?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url()?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?=base_url()?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?=base_url()?>assets/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?=base_url()?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?=base_url()?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>
<!-- iCheck -->
<script src="<?=base_url()?>assets/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-datetimepicker -->    
<script src="<?=base_url()?>assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- Select2 -->
<script src="<?=base_url()?>assets/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- AutoNumeric -->
<script src="<?=base_url()?>assets/vendors/autoNumeric.min.js"></script>
<!-- jsgrid -->
<script type="text/javascript" src="<?=base_url()?>assets/vendors/jsgrid/jsgrid.min.js"></script>
<!-- XLSX -->
<script type="text/javascript" src="<?=base_url()?>assets/vendors/xlsx.full.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/vendors/alasql.js"></script>

<!-- Gsmart-detail -->
<script src="<?=base_url()?>assets/build/js/gsmart-detail.js"></script>
<script src="<?php echo base_url("assets/vendors/validator/validator.js"); ?>"></script>
    <!-- Custom Theme Scripts -->
<script src="<?php echo base_url("assets/build/js/custom.min.js"); ?>"></script>
<!--  -->
<script>
  $(document).ready(function(){

    function calculateAll(ds)
    {
      var i = 1;
      var data = $("#jsGrid").jsGrid("option", "data");
      $.each( data, function( key, value ) {
        value["No"] = i;
        i++;
      });

      $("#jsGrid").jsGrid("refresh");
      $("#DETAIL").val(JSON.stringify(data));
    }
    var data = <?php echo "[]"; ?>;
    var input = null;

    $("#jsGrid").jsGrid({
        width: "1320px",
        height: "600px",
        
        inserting: false, editing: false, sorting: false, paging: false,
        data: data,
    
        fields: [
          createFieldTypeNumber("No", 50, true),
          { name: "No Resi", type: "text", width:160, readOnly: true},
          { name: "No Pesanan", type: "text", width: 170, readOnly: true},
          { name: "Waktu Pesanan Dibuat", type: "text", width: 150, readOnly: true},
          { name: "Status Pesanan", type: "text", width: 150, readOnly: true},
          { name: "Status Pembatalan/ Pengembalian", type: "text", editing: false, width: 200, readOnly: true},
          { name: "Username (Pembeli)", type: "text", width: 156, readOnly: true},
          { name: "Waktu Pesanan Dibuat", type: "text", width: 150, readOnly: true},
          { name: "Pesanan Harus Dikirimkan Sebelum (Menghindari keterlambatan)", type: "text", width: 300, readOnly: true},
          { name: "Informasi Produk", type: "text", width: 700, readOnly: true},
          { name: "Opsi Pengiriman", type: "text", width:150, readOnly: true},
          { name: "Nama Penerima", type: "text", width: 150, readOnly: true},
          { name: "No Telepon", type: "text", width: 150, readOnly: true},
          { name: "Alamat Pengiriman", type: "text", width: 500, readOnly: true},
          { name: "Kota/Kabupaten", type: "text", width: 150, readOnly: true},
          { name: "Provinsi", type: "text", width: 150, readOnly: true},
          { name: "Kode Pos", type: "text", width: 100, readOnly: true},
        ],
        onItemInserted: function() {
          calculateAll();
        },
        onItemUpdated: function() {
          calculateAll();
        },
        onItemDeleted: function() {
          calculateAll();
        }
    });



    $("#jsGrid").jsGrid("option", "inserting", true);
    
    loadFile = function(event) {
        alasql('SELECT * FROM FILE(?,{headers:true}) WHERE LEN("No. Resi")>0',[event],function(data){
            var newArray = new Array();
            for (var i = 0; i < data.length; i++) {
              var info = data[i]["Informasi Produk"];
                var drs = info.replace(/:/g, " </td> <td style='padding:6' > ");
                var res = drs.replace(/;/g, " </td></tr> <tr> <td style='width:25%;padding:6;'> ");
              
                newArray.push({
                    "No Resi": data[i]["No. Resi"],
                    "No Pesanan": data[i]["No. Pesanan"],
                    "Waktu Pesanan Dibuat": data[i]["Waktu Pesanan Dibuat"],
                    "Status Pesanan": data[i]["Status Pesanan"],
                    "Status Pembatalan/ Pengembalian": data[i]["Status Pembatalan/ Pengembalian"],
                    "Username (Pembeli)": data[i]["Username (Pembeli)"],
                    "Waktu Pesanan Dibuat": data[i]["Waktu Pesanan Dibuat"],
                    "Pesanan Harus Dikirimkan Sebelum (Menghindari keterlambatan)": data[i]["Pesanan Harus Dikirimkan Sebelum (Menghindari keterlambatan)"],
                    "Informasi Produk": "<table border='1'> <tr> <td style='width:25%;padding:6;'>"+ res +"</td><td></td></tr></table> ",
                    "Opsi Pengiriman": data[i]["Opsi Pengiriman"],
                    "Nama Penerima": data[i]["Nama Penerima"],
                    "No Telepon": data[i]["No. Telepon"],
                    "Alamat Pengiriman": data[i]["Alamat Pengiriman"],
                    "Kota/Kabupaten": data[i]["Kota/Kabupaten"],
                    "Provinsi": data[i]["Provinsi"],
                    "Kode Pos": data[i]["Kode Pos"],
                });


            }

            $("#DETAIL").val(JSON.stringify(newArray));
            $("#jsGrid").jsGrid("option", "data", newArray);
            calculateAll();
            $("#jsGrid").jsGrid("refresh");
        });
    }

    $("#btnImportCont").append('<input type="file" class="form-control" name="FILE" id="FILE" onchange="loadFile(event)" />');
    
    calculateAll();
    
 
    
  });    
</script>