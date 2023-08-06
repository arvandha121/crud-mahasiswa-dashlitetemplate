function filterData() {
    var jenisKelamin = document.getElementById('jenis_kelamin').value;
    var kota = document.getElementById('kota').value;

    var table = document.querySelector('.table');
    var rows = table.getElementsByTagName('tr');

    for (var i = 1; i < rows.length; i++) {
        var row = rows[i];
        var jenisKelaminCell = row.getElementsByTagName('td')[4];
        var kotaCell = row.getElementsByTagName('td')[6];
        var jenisKelaminData = jenisKelaminCell.textContent.trim();
        var kotaData = kotaCell.textContent.trim();

        if (
            (kota === '' || kotaData === kota) && (jenisKelamin === '' || jenisKelaminData === jenisKelamin)
        ) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }
}
