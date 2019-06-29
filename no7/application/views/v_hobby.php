<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Arkademy | Hoby</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Sweet Alert -->
  <link href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css" rel="stylesheet">
  <script src="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js"></script>

  <!-- Custom styles for this page -->
  <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="h3 mb-2">
        <a href="#" class="btn btn-success btn-icon-split" onClick="tambah_modal()">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah Data Hobby</span>
        </a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Data Hobby</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>   
                            <th>Name</th>
                            <th>Hobby</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Tambah Modal-->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD DATA</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="form-tambah-datalatih">
                    <label for="basic-url">Nama</label>
                    <div class="input-group mb-3">
                        <input type="text" class="custom-select" name="name">
                    </div>

                    <label for="basic-url">Hobby</label>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect01" name="hobby">
                            <option selected>Pilih...</option>
                            <option value="1">Mobil Legend</option>
                            <option value="2">Futsal</option>
                 
                        </select>
                    </div>

                    <label for="basic-url">Category</label>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect01" name="category">
                            <option selected>Pilih...</option>
                            <option value="1">Game</option>
                            <option value="2">Olahraga</option>
                        </select>
                    </div>
              
                </form>
            </div>
            <div class="modal-footer">
                <a class="btn btn-success btn-simpan-datalatih" href="#">Simpan</a>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="ubahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT DATA</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="form-edit-hobby">
                    <label for="basic-url">Nama</label>
                    <input type="text" class="id-nama" hidden>
                    <div class="input-group mb-3">
                        <input type="text" class="custom-select edit-name" name="edit-name">
                    </div>

                    <label for="basic-url">Hobby</label>
                    <div class="input-group mb-3">
                        <select class="custom-select edit-hobby" id="inputGroupSelect01" name="edit-hobby">
                            <option selected>Pilih...</option>
                            <option value="1">Mobil Legend</option>
                            <option value="2">Futsal</option>
                    
                        </select>
                    </div>

                    <label for="basic-url">Category</label>
                    <div class="input-group mb-3">
                        <select class="custom-select edit-category" id="inputGroupSelect01" name="edit-category">
                            <option selected>Pilih...</option>
                            <option value="1">Game</option>
                            <option value="2">Olahraga</option>
                        </select>
                    </div>
              
                </form>
            </div>
            <div class="modal-footer">
                <a class="btn btn-success btn-simpan-edit" href="#">Simpan Perubahan</a>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
var table;
$(document).ready(function() {

    table = $('.table').DataTable({
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [
            [0, 'asc']
        ], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('datahobby/loadHobbyTabel')?>",
            "type": "POST",
            "error": function(jqXHR, textStatus, errorThrown) {
                if (jqXHR.status === 0) {
                    alert('Error ketika load tabel')
                }
            }
        },

        //Set column definition initialisation properties.
        "columnDefs": [{
            "targets": [-1], //last column
            "orderable": false, //set not orderable
        }, ],
    });
  

    $('.btn-simpan-datalatih').on('click', function() {
        $.ajax({
            url: '<?php echo base_url()?>datahobby/tambah',
            method: 'POST',
            data: $('#form-tambah-datalatih').serialize(),
            dataType: 'JSON',
            success: function(hasil) {
                if(hasil.status){
                    swal("BERHASIL", "Data Hobby Ditambah", "success")
                    $('#tambahModal').modal('hide');
                    reload_table()
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Error Tambah Data Hobby : " + errorThrown)
            }

        })
    })

    $('.btn-simpan-edit').on('click', function(){
        $(this).html("<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span><span class='sr-only'>Loading...</span> Processing");
        var id = $('.id-nama').val()
        $.ajax({
            url: '<?php echo base_url()?>datahobby/ubahDataHobby/'+id,
            method: 'POST',
            data: $('#form-edit-hobby').serialize(),
            dataType: 'JSON',
            success: function(hasil) {
                if (hasil.status == true) {
                    $('#ubahModal').modal('hide');
                    $('.btn-simpan-perubahan').html("Simpan Perubahan");
                    swal("BERHASIL", "Data Hobby Berhasil Dirubah", "success")
                    reload_table()
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("Error Ubah Data Hobby : " + errorThrown)
            }

        })
    })

    
})
function reload_table() {
    table.ajax.reload();
}

function editDataHobby(id){
    $.ajax({
        url: '<?php echo base_url()?>datahobby/cariDataHobby/' + id,
        method: 'POST',
        dataType: 'JSON',
        success: function(response) {

            $('.id-nama').val(response[0].id);
            $('.edit-name').val(response[0].name)
            $('.edit-hobby').val(response[0].id_hobby)
            $('.edit-category').val(response[0].id_category)
  

            $('#ubahModal').modal('show')
           
        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert("Error Edit Data Hobby : " + errorThrown)
        }

    })
}

function hapusDataHobby(id){
    swal({
            title: "HAPUS DATA HOBBY?",
            text: "Yakin mau hapus hobby ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: "Ya, Hapus !",
            cancelButtonText: "Tidak Jadi !",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function(isConfirm) {
            if (isConfirm) {
                var url = "<?php echo base_url()?>datahobby/hapusDataHobby/" + id;
                $.ajax({
                    url: url,
                    type: "POST",
                    dataType: "JSON",
                    success: function(response) {
                        if (response.status) {
                            swal("BERHASIL!", "Data Hobby Berhasil Dihapus", "success");
                            reload_table();
                        } else {
                            swal("ERROR!", "ERROR BRO", "error");
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        if (jqXHR.status === 0) {
                            swal({
                                title: "ERROR",
                                text: "Not connect, Please Verify Network.",
                                closeOnConfirm: true
                            })
                        } else {
                            swal({
                                title: "ERROR",
                                text: "Uncaught Error : " + errorThrown + " " + jqXHR
                                    .status + "",
                                closeOnConfirm: true
                            })
                        }
                    }
                });
            }
        });
}
</script>
<script>
function tambah_modal() {
    $('#tambahModal').modal('show');
}
</script>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

</body>

</html>