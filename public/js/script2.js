$(function() {
    $('.tombolTambahDataGuru').on('click', function() {
        $('#exampleModalLabelGuru').html('Tambah Data Guru');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama_guru').val('');
        $('#mata_pelajaran').val('');
        $('#id').val('');
    });
    $('.tampilModalUbahGuru').on('click', function() {
    $('#exampleModalLabelGuru').html('Ubah Data Guru');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/guru/ubah');
    const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/phpmvc/public/guru/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama_guru').val(data.nama);
                $('#mata_pelajaran').val(data.mata_pelajaran);
                $('#id').val(data.id);
            }
        });
    });
}); 