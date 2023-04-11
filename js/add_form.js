//loads mobile fields
var e = document.getElementById('tableList');

function answer(){
    if (e.value =="logon"){
        document.getElementById('weapon_form').style.visibility = 'hidden';
        document.getElementById('perks_form').style.visibility = 'hidden';
        document.getElementById('logon_form').style.visibility = 'visible';
        document.getElementById('logon_form').style.zIndex = '100';
        document.getElementById('frame_form').style.visibility = 'hidden';
        document.getElementById('barrel_form').style.visibility = 'hidden';
        document.getElementById('mag_form').style.visibility = 'hidden';
        document.getElementById('trait1_form').style.visibility = 'hidden';
        document.getElementById('trait2_form').style.visibility = 'hidden';
    }
    else if (e.value =="perks"){
        document.getElementById('weapon_form').style.visibility = 'hidden';
        document.getElementById('perks_form').style.visibility = 'visible';
        document.getElementById('perks_form').style.zIndex = '100';
        document.getElementById('logon_form').style.visibility = 'hidden';
        document.getElementById('frame_form').style.visibility = 'hidden';
        document.getElementById('barrel_form').style.visibility = 'hidden';
        document.getElementById('mag_form').style.visibility = 'hidden';
        document.getElementById('trait1_form').style.visibility = 'hidden';
        document.getElementById('trait2_form').style.visibility = 'hidden';
    }
    else if (e.value =="weapons"){
        document.getElementById('weapon_form').style.visibility = 'visible';
        document.getElementById('weapon_form').style.zIndex = '100';
        document.getElementById('perks_form').style.visibility = 'hidden';
        document.getElementById('logon_form').style.visibility = 'hidden';
        document.getElementById('frame_form').style.visibility = 'hidden';
        document.getElementById('barrel_form').style.visibility = 'hidden';
        document.getElementById('mag_form').style.visibility = 'hidden';
        document.getElementById('trait1_form').style.visibility = 'hidden';
        document.getElementById('trait2_form').style.visibility = 'hidden';
    }
    else if (e.value =="frameBridge"){
        document.getElementById('weapon_form').style.visibility = 'hidden';
        document.getElementById('perks_form').style.visibility = 'hidden';
        document.getElementById('logon_form').style.visibility = 'hidden';
        document.getElementById('frame_form').style.visibility = 'visible';
        document.getElementById('frame_form').style.zIndex = '100';
        document.getElementById('barrel_form').style.visibility = 'hidden';
        document.getElementById('mag_form').style.visibility = 'hidden';
        document.getElementById('trait1_form').style.visibility = 'hidden';
        document.getElementById('trait2_form').style.visibility = 'hidden';
    }
    else if (e.value =="barrelBridge"){
        document.getElementById('weapon_form').style.visibility = 'hidden';
        document.getElementById('perks_form').style.visibility = 'hidden';
        document.getElementById('logon_form').style.visibility = 'hidden';
        document.getElementById('frame_form').style.visibility = 'hidden';
        document.getElementById('barrel_form').style.visibility = 'visible';
        document.getElementById('barrel_form').style.zIndex = '100';
        document.getElementById('mag_form').style.visibility = 'hidden';
        document.getElementById('trait1_form').style.visibility = 'hidden';
        document.getElementById('trait2_form').style.visibility = 'hidden';
    }
    else if (e.value =="magBridge"){
        document.getElementById('weapon_form').style.visibility = 'hidden';
        document.getElementById('perks_form').style.visibility = 'hidden';
        document.getElementById('logon_form').style.visibility = 'hidden';
        document.getElementById('frame_form').style.visibility = 'hidden';
        document.getElementById('barrel_form').style.visibility = 'hidden';
        document.getElementById('mag_form').style.visibility = 'visible';
        document.getElementById('mag_form').style.zIndex = '100';
        document.getElementById('trait1_form').style.visibility = 'hidden';
        document.getElementById('trait2_form').style.visibility = 'hidden';
    }
    else if (e.value =="trait1Bridge"){
        document.getElementById('weapon_form').style.visibility = 'hidden';
        document.getElementById('perks_form').style.visibility = 'hidden';
        document.getElementById('logon_form').style.visibility = 'hidden';
        document.getElementById('frame_form').style.visibility = 'hidden';
        document.getElementById('barrel_form').style.visibility = 'hidden';
        document.getElementById('mag_form').style.visibility = 'hidden';
        document.getElementById('trait1_form').style.visibility = 'visible';
        document.getElementById('trait1_form').style.zIndex = '100';
        document.getElementById('trait2_form').style.visibility = 'hidden';
    }
    else if (e.value =="trait2Bridge"){
        document.getElementById('weapon_form').style.visibility = 'hidden';
        document.getElementById('perks_form').style.visibility = 'hidden';
        document.getElementById('logon_form').style.visibility = 'hidden';
        document.getElementById('frame_form').style.visibility = 'hidden';
        document.getElementById('barrel_form').style.visibility = 'hidden';
        document.getElementById('mag_form').style.visibility = 'hidden';
        document.getElementById('trait1_form').style.visibility = 'hidden';
        document.getElementById('trait2_form').style.visibility = 'visible';
        document.getElementById('trait2_form').style.zIndex = '100';
    }
    else{
        document.getElementById('weapon_form').style.visibility = 'hidden';
        document.getElementById('perks_form').style.visibility = 'hidden';
        document.getElementById('logon_form').style.visibility = 'hidden';
        document.getElementById('frame_form').style.visibility = 'hidden';
        document.getElementById('barrel_form').style.visibility = 'hidden';
        document.getElementById('mag_form').style.visibility = 'hidden';
        document.getElementById('trait1_form').style.visibility = 'hidden';
        document.getElementById('trait2_form').style.visibility = 'hidden';
    }
}

//loads desktop fields
document.getElementById("wepButton").onclick = desktopChoice;
document.getElementById("perksButton").onclick = desktopChoice;
document.getElementById("logonButton").onclick = desktopChoice;
document.getElementById("frameButton").onclick = desktopChoice;
document.getElementById("barrelButton").onclick = desktopChoice;
document.getElementById("magButton").onclick = desktopChoice;
document.getElementById("trait1Button").onclick = desktopChoice;
document.getElementById("trait2Button").onclick = desktopChoice;

function desktopChoice(){
    // sets a variable to use in comparison
    var clickedButton = (this.id)

    // uses clickedButton to check which button is clicked and display fields
    switch (clickedButton){
        case "wepButton":
            document.getElementById('weapon_form_desktop').style.visibility = 'visible';
            document.getElementById('weapon_form_desktop').style.zIndex = '100';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        break;
        case "perksButton":
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'visible';
            document.getElementById('perks_form_desktop').style.zIndex = '100';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        break;
        case "logonButton":
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'visible';
            document.getElementById('logon_form_desktop').style.zIndex = '100';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        break;
        case "frameButton":
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'visible';
            document.getElementById('frame_form_desktop').style.zIndex = '100';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        break;
        case "barrelButton":
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'visible';
            document.getElementById('barrel_form_desktop').style.zIndex = '100';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        break;
        case "magButton":
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.zIndex = '100';
            document.getElementById('mag_form_desktop').style.visibility = 'visible';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        break;
        case "trait1Button":
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.zIndex = '100';
            document.getElementById('trait1_form_desktop').style.visibility = 'visible';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        break;
        case "trait2Button":
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.zIndex = '100';
            document.getElementById('trait2_form_desktop').style.visibility = 'visible';
        break;
        case "":
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
        break;
    }
    return clickedButton;
}