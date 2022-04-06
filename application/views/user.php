<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>User</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tabel User</h5>
                    <a href="user/add" class="btn btn-success">Tambah Data</a>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th >Aksi</th>
                        </tr>
                        <?php foreach ($list as $item) { ?>
                            <tr>
                                <td><?php echo $item['id']; ?></td>
                                <td><?php echo $item['nama']; ?></td>
                                <td><?php echo $item['email']; ?></td>
                                <td><?php echo $item['telepon']; ?></td>
                                <td><a href="user/detail/<?php echo $item['id']; ?>" class="btn btn-info">Detail</a>
                                    <a href="user/edit/<?php echo $item['id']; ?>" class="btn btn-warning">Edit</a>
                                    <a onclick="konfirmasi(<?php echo $item['id']; ?>)" class="btn btn-danger">Hapus</a></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function konfirmasi(id) {
        let text = "Apakah Anda yakin akan Menghapus data?";
        if (confirm(text) == true) {
            window.location.href = 'koleksi/delete/' + id;
        }
    }
</script>
<?php $this->load->view('layout/footer'); ?>