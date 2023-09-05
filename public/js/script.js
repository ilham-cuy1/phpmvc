$(function() {
    $('.tombolTambahData').on('click', function() {
        $('#exampleModalLabel').html('Tambah Data Siswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#jenis_kelamin').val('');
        $('#alamat').val('');
        $('#id').val('');
    });
    $('.tampilModalUbah').on('click', function() {
    $('#exampleModalLabel').html('Ubah Data Siswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/siswa/ubah');
    const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/phpmvc/public/siswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#jenis_kelamin').val(data.jenis_kelamin);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);
            }
        });
    });
}); 

// $(function() {
//     $('.tombolTambahData').on('click', function() {
//         $('#exampleModalLabel').html('Tambah Data Guru');
//         $('.modal-footer button[type=submit]').html('Tambah Data');
//         $('#nama_guru').val('');
//         $('#mata_pelajaran').val('');
//         $('#id').val('');
//     });
//     $('.tampilModalUbah').on('click', function() {
//     $('#exampleModalLabel').html('Ubah Data Guru');
//     $('.modal-footer button[type=submit]').html('Ubah Data');
//     $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/guru/ubah');
//     const id = $(this).data('id');
//         $.ajax({
//             url: 'http://localhost/phpmvc/public/guru/getubah',
//             data: {id : id},
//             method: 'post',
//             dataType: 'json',
//             success: function(data) {
//                 $('#nama_guru').val(data.nama);
//                 $('#mata_pelajaran').val(data.mata_pelajaran);
//                 $('#id').val(data.id);
//             }
//         });
//     });
// }); 