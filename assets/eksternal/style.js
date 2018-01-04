
(function() {
$('#tanggal').bootstrapMaterialDatePicker({
    time: false,
    format : 'dddd, DD MMMM YYYY',
    lang : 'id'
});

$('#jam').bootstrapMaterialDatePicker({
    date: false,
    shortTime: false,
    format : 'HH:mm'
});

$('#lihat').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
var modal          = $(this)

// Isi nilai pada field
modal.find('#id').attr("value",div.data('id'));
modal.find('#ketua').attr("value",div.data('ketua'));
modal.find('#sekertaris').attr("value",div.data('sekertaris'));
modal.find('#anggota').attr("value",div.data('anggota'));
modal.find('#tanggal').attr("value",div.data('tanggal'));
modal.find('#jam').attr("value",div.data('jam'));
modal.find('#ruangan').attr("value",div.data('ruangan'));
});

$('#edit').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
var modal          = $(this)

// Isi nilai pada field
modal.find('#id').attr("value",div.data('id'));
modal.find('#ketua').attr("value",div.data('ketua'));
modal.find('#tanggal').attr("value",div.data('tanggal'));
modal.find('#jam').attr("value",div.data('jam'));
modal.find('#ruangan').attr("value",div.data('ruangan'));
});

$('#hapus').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
var modal          = $(this)

// Isi nilai pada field
modal.find('#id').attr("value",div.data('id'));
});
})(jQuery);
