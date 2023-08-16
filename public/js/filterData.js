function filterData() {
    var selectedGender = document.getElementById('jenis_kelamin').value;
    var selectedCity = document.getElementById('kota').value;

    var table = document.querySelector('.table');
    var rows = table.getElementsByTagName('tr');

    for (var i = 1; i < rows.length; i++) {
        var row = rows[i];
        var jenisKelaminCell = row.getElementsByTagName('td')[4];
        var kotaCell = row.getElementsByTagName('td')[6];
        var jenisKelaminData = jenisKelaminCell.textContent.trim();
        var kotaData = kotaCell.textContent.trim();

        var genderMatch = selectedGender === '' || jenisKelaminData === selectedGender;
        var cityMatch = selectedCity === '' || kotaData === selectedCity;

        if (genderMatch && cityMatch) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    }

    // Auto-select gender option
    var genderSelect = document.getElementById('jenis_kelamin');
    for (var i = 0; i < genderSelect.options.length; i++) {
        if (genderSelect.options[i].value === selectedGender) {
            genderSelect.selectedIndex = i;
            break;
        }
    }

    // Auto-select city option
    var citySelect = document.getElementById('kota');
    for (var i = 0; i < citySelect.options.length; i++) {
        if (citySelect.options[i].value === selectedCity) {
            citySelect.selectedIndex = i;
            break;
        }
    }
}