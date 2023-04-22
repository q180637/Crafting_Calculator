function loadWepOnLoad(){
    let desktopDefault = document.getElementById('desktopWeapon');
    desktopDefault.value ="Choose a Weapon";
    document.getElementById('weapon').value = "Choose a Weapon";
    $.ajax(
        {
            url: '../php/tool_load_func.php',
            type: 'POST',
            dataType: 'json',
            data: "function=fillWeaponRecordList",
            success: function(response){
                let options = response.toString();
                let rows = options.split(",");
                let mselect = document.getElementById('weapon');
                let dselect = document.getElementById('desktopWeapon')
                for(var i =0; i < rows.length; i++){
                    let row = rows[i].toString();
                    mselect.innerHTML = mselect.innerHTML + row;
                    dselect.innerHTML = dselect.innerHTML + row;
                }
            }
        }
    )
}

function getPerks(id){
    const remove = document.querySelectorAll('p');
    for (const el of remove) {
        el.remove();
    }
    $.ajax(
        {
            url: '../php/tool_load_func.php',
            type: 'POST',
            dataType: 'json',
            data: "function=getWepStats&selected="+id,
            success: function(response){
                console.log(response);
                let options = response.toString();
                let rows = options.split(",");
                let mselect = document.getElementById('mStats');
                let dselect = document.getElementById('desktop_impact');
                for(var i =0; i < rows.length; i++){
                    let row = rows[i].toString();
                    mselect.innerHTML = mselect.innerHTML + row;
                    dselect.innerHTML = dselect.innerHTML + row;
                    }
                }
            }
        )
    $.ajax(
        {
            url: '../php/tool_load_func.php',
            type: 'POST',
            dataType: 'json',
            data: "function=getFrames&selected="+id,
            success: function(response){
                let options = response.toString();
                let rows = options.split(",");
                let mselect = document.getElementById('frame');
                let dselect = document.getElementById('desktopFrame')
                for(var i =0; i < rows.length; i++){
                    let row = rows[i].toString();
                    mselect.innerHTML = mselect.innerHTML + row;
                    dselect.innerHTML = dselect.innerHTML + row;
                }
            }
        }
    )
    $.ajax(
        {
            url: '../php/tool_load_func.php',
            type: 'POST',
            dataType: 'json',
            data: "function=getBarrels&selected="+id,
            success: function(response){
                let options = response.toString();
                let rows = options.split(",");
                let mselect = document.getElementById('barrel');
                let dselect = document.getElementById('desktopBarrel')
                for(var i =0; i < rows.length; i++){
                    let row = rows[i].toString();
                    mselect.innerHTML = mselect.innerHTML + row;
                    dselect.innerHTML = dselect.innerHTML + row;
                }
            }
        }
    )
    $.ajax(
        {
            url: '../php/tool_load_func.php',
            type: 'POST',
            dataType: 'json',
            data: "function=getMags&selected="+id,
            success: function(response){
                let options = response.toString();
                let rows = options.split(",");
                let mselect = document.getElementById('magazine');
                let dselect = document.getElementById('desktopMagazine')
                for(var i =0; i < rows.length; i++){
                    let row = rows[i].toString();
                    mselect.innerHTML = mselect.innerHTML + row;
                    dselect.innerHTML = dselect.innerHTML + row;
                }
            }
        }
    )
    $.ajax(
        {
            url: '../php/tool_load_func.php',
            type: 'POST',
            dataType: 'json',
            data: "function=getTrait1s&selected="+id,
            success: function(response){
                let options = response.toString();
                let rows = options.split(",");
                let mselect = document.getElementById('trait1');
                let dselect = document.getElementById('desktopTrait1')
                for(var i =0; i < rows.length; i++){
                    let row = rows[i].toString();
                    mselect.innerHTML = mselect.innerHTML + row;
                    dselect.innerHTML = dselect.innerHTML + row;
                }
            }
        }
    )
    $.ajax(
        {
            url: '../php/tool_load_func.php',
            type: 'POST',
            dataType: 'json',
            data: "function=getTrait2s&selected="+id,
            success: function(response){
                let options = response.toString();
                let rows = options.split(",");
                let mselect = document.getElementById('trait2');
                let dselect = document.getElementById('desktopTrait2')
                for(var i =0; i < rows.length; i++){
                    let row = rows[i].toString();
                    mselect.innerHTML = mselect.innerHTML + row;
                    dselect.innerHTML = dselect.innerHTML + row;
                }
            }
        }
    )
}

function calculate(id){
    $.ajax(
        {
            url: '../php/tool_load_func.php',
            type: 'POST',
            dataType: 'json',
            data: "function=getFrameStats&selectedFrame="+id,
            success: function(response){
                console.log(response);
            }
        }
    )
    $.ajax(
        {
            url: '../php/tool_load_func.php',
            type: 'POST',
            dataType: 'json',
            data: "function=getFrameBarrelStats&selectedBarrel="+id,
            success: function(response){
                console.log(response);
            }
        }
    )
}