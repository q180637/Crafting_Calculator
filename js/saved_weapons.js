function loadSaves(){
    let desktopDefault = document.getElementById('dSaveList');
    desktopDefault.value = "Choose a Weapon";
    document.getElementById('mSaveList').value = "Choose a Weapon";
    $.ajax({
        url: '../php/save_build.php',
        type: 'POST',
        dataType: 'json',
        data: "function=getSavesList",
        success: function (response) {
            let options = response.toString();
            let rows = options.split(",");
            let mselect = document.getElementById('mSaveList');
            let dselect = document.getElementById('dSaveList')
            for (var i = 0; i < rows.length; i++) {
                let row = rows[i].toString();
                mselect.innerHTML = mselect.innerHTML + row;
                dselect.innerHTML = dselect.innerHTML + row;
            }
        }
    })
}