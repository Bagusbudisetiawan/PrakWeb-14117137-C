var obj_cur_id = 0;

function tambah() {
    document.getElementById('list').innerHTML += "<li id=\"obj" + obj_cur_id + "\"><span id=\"nama" + obj_cur_id + "\">" + document.getElementById('tb_barang').value + "</span> [<a href=\"#\" onclick=\"edit('nama" + obj_cur_id + "')\">Edit</a> | <a href=\"#\" onclick=\"hapus('obj" + obj_cur_id + "')\">Hapus</a>]</li>";
    obj_cur_id += 1;
}

function edit(nama_id) {
    var nama_baru = prompt("Tolong masukkan nama baru:");
    document.getElementById(nama_id).innerHTML = nama_baru;
}

function hapus(obj_id) {
    document.getElementById(obj_id).remove()
}