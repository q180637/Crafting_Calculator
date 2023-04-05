document.getElementById('tableList').onchange = function listChange(){
    var table = this.options[this.selectedIndex].text;
    console.log(table);

    if(table = "Logon"){
        let x = document.getElementById('logon')
        if (x.style.display === "block") {
            x.style.display = "none";
        } 
        else {
            x.style.display = "block";
        }
    }
    else if(table="Perks"){
        let x = document.getElementById('perks')
        if (x.style.display === "block") {
            x.style.display = "none";
        } 
        else {
            x.style.display = "block";
        }
    }
    else if(table="Weapons"){
        let x = document.getElementById('weapons')
        if (x.style.display === "block") {
            x.style.display = "none";
        } 
        else {
            x.style.display = "block";
        }
    }
    else if(table="Frame Combinations"){
        let x = document.getElementById('frames')
        if (x.style.display === "block") {
            x.style.display = "none";
        } 
        else {
            x.style.display = "block";
        }
    }
    else if(table = "Barrel Combinations"){
        let x = document.getElementById('barrels')
        if (x.style.display === "block") {
            x.style.display = "none";
        } 
        else {
            x.style.display = "block";
        }
    }
    else if(table = "Mag Combinations"){
        let x = document.getElementById('mags')
        if (x.style.display === "block") {
            x.style.display = "none";
        } 
        else {
            x.style.display = "block";
        }
    }
    else if (table = "Trait Column 1 Combinations"){
        let x = document.getElementById('trait1')
        if (x.style.display === "block") {
            x.style.display = "none";
        } 
        else {
            x.style.display = "block";
        }
    }
    else if (table = "Trait Column 2 Combinations"){
        let x = document.getElementById('trait2')
        if (x.style.display === "block") {
            x.style.display = "none";
        } 
        else {
            x.style.display = "block";
        }
    }
    else{
        let x = document.getElementById('weapons', 'perks', 'logon', 'frames', 'barrels', 'mags', 'trait1', 'trait2');
        x.style.display = "none";
    }
}


// TODO GET FIELD DIVS TO ONLY APPEAR AS THEY ARE SELECTED