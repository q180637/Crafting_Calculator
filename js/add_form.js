//loads mobile fields
var e = document.getElementById('tableList');

// e.onchange = clearFeedbackMessage();

// function clearFeedbackMessage(){
//     document.getElementById('insertSuccess').style.visibility = "hidden";
//     document.getElementById('insertFail').style.visibility = "hidden";
// }

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
            document.getElementById('pageTitle').innerHTML = "Add a Weapon Record";
            document.getElementById('wepButton').style.backgroundColor = '#b78c25';
            document.getElementById('weapon_form_desktop').style.visibility = 'visible';
            document.getElementById('weapon_form_desktop').style.zIndex = '100';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
            document.getElementById('perksButton').style.backgroundColor = 'white';
            document.getElementById('logonButton').style.backgroundColor = 'white';
            document.getElementById('frameButton').style.backgroundColor = 'white';
            document.getElementById('barrelButton').style.backgroundColor = 'white';
            document.getElementById('magButton').style.backgroundColor = 'white';
            document.getElementById('trait1Button').style.backgroundColor = 'white';
            document.getElementById('trait2Button').style.backgroundColor = 'white';
        break;
        case "perksButton":
            document.getElementById('pageTitle').innerHTML = "Add a Perk Record";
            document.getElementById('perksButton').style.backgroundColor = '#b78c25';
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'visible';
            document.getElementById('perks_form_desktop').style.zIndex = '100';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
            document.getElementById('wepButton').style.backgroundColor = 'white';
            document.getElementById('logonButton').style.backgroundColor = 'white';
            document.getElementById('frameButton').style.backgroundColor = 'white';
            document.getElementById('barrelButton').style.backgroundColor = 'white';
            document.getElementById('magButton').style.backgroundColor = 'white';
            document.getElementById('trait1Button').style.backgroundColor = 'white';
            document.getElementById('trait2Button').style.backgroundColor = 'white';
        break;
        case "logonButton":
            document.getElementById('pageTitle').innerHTML = "Add a User Record";
            document.getElementById('logonButton').style.backgroundColor = '#b78c25';
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'visible';
            document.getElementById('logon_form_desktop').style.zIndex = '100';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
            document.getElementById('wepButton').style.backgroundColor = 'white';
            document.getElementById('perksButton').style.backgroundColor = 'white';
            document.getElementById('frameButton').style.backgroundColor = 'white';
            document.getElementById('barrelButton').style.backgroundColor = 'white';
            document.getElementById('magButton').style.backgroundColor = 'white';
            document.getElementById('trait1Button').style.backgroundColor = 'white';
            document.getElementById('trait2Button').style.backgroundColor = 'white';
        break;
        case "frameButton":
            document.getElementById('pageTitle').innerHTML = "Add a Frame Combination";
            document.getElementById('frameButton').style.backgroundColor = '#b78c25';
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'visible';
            document.getElementById('frame_form_desktop').style.zIndex = '100';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
            document.getElementById('wepButton').style.backgroundColor = 'white';
            document.getElementById('perksButton').style.backgroundColor = 'white';
            document.getElementById('logonButton').style.backgroundColor = 'white';
            document.getElementById('barrelButton').style.backgroundColor = 'white';
            document.getElementById('magButton').style.backgroundColor = 'white';
            document.getElementById('trait1Button').style.backgroundColor = 'white';
            document.getElementById('trait2Button').style.backgroundColor = 'white';
        break;
        case "barrelButton":
            document.getElementById('pageTitle').innerHTML = "Add a Barrel Combination";
            document.getElementById('barrelButton').style.backgroundColor = '#b78c25';
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'visible';
            document.getElementById('barrel_form_desktop').style.zIndex = '100';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
            document.getElementById('wepButton').style.backgroundColor = 'white';
            document.getElementById('perksButton').style.backgroundColor = 'white';
            document.getElementById('logonButton').style.backgroundColor = 'white';
            document.getElementById('frameButton').style.backgroundColor = 'white';
            document.getElementById('magButton').style.backgroundColor = 'white';
            document.getElementById('trait1Button').style.backgroundColor = 'white';
            document.getElementById('trait2Button').style.backgroundColor = 'white';
        break;
        case "magButton":
            document.getElementById('pageTitle').innerHTML = "Add a Mag Combination";
            document.getElementById('magButton').style.backgroundColor = '#b78c25';
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.zIndex = '100';
            document.getElementById('mag_form_desktop').style.visibility = 'visible';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
            document.getElementById('wepButton').style.backgroundColor = 'white';
            document.getElementById('perksButton').style.backgroundColor = 'white';
            document.getElementById('logonButton').style.backgroundColor = 'white';
            document.getElementById('frameButton').style.backgroundColor = 'white';
            document.getElementById('barrelButton').style.backgroundColor = 'white';
            document.getElementById('trait1Button').style.backgroundColor = 'white';
            document.getElementById('trait2Button').style.backgroundColor = 'white';
        break;
        case "trait1Button":
            document.getElementById('pageTitle').innerHTML = "Add a Trait Column 1 Combination";
            document.getElementById('trait1Button').style.backgroundColor = '#b78c25';
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.zIndex = '100';
            document.getElementById('trait1_form_desktop').style.visibility = 'visible';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
            document.getElementById('wepButton').style.backgroundColor = 'white';
            document.getElementById('perksButton').style.backgroundColor = 'white';
            document.getElementById('logonButton').style.backgroundColor = 'white';
            document.getElementById('frameButton').style.backgroundColor = 'white';
            document.getElementById('barrelButton').style.backgroundColor = 'white';
            document.getElementById('magButton').style.backgroundColor = 'white';
            document.getElementById('trait2Button').style.backgroundColor = 'white';
        break;
        case "trait2Button":
            document.getElementById('pageTitle').innerHTML = "Add a Trait Column 2 Combination";
            document.getElementById('trait2Button').style.backgroundColor = '#b78c25';
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.zIndex = '100';
            document.getElementById('trait2_form_desktop').style.visibility = 'visible';
            document.getElementById('wepButton').style.backgroundColor = 'white';
            document.getElementById('perksButton').style.backgroundColor = 'white';
            document.getElementById('logonButton').style.backgroundColor = 'white';
            document.getElementById('frameButton').style.backgroundColor = 'white';
            document.getElementById('barrelButton').style.backgroundColor = 'white';
            document.getElementById('magButton').style.backgroundColor = 'white';
            document.getElementById('trait1Button').style.backgroundColor = 'white';
        break;
        case "":
            document.getElementsByTagName('header').innerHTML = "Add a Record";
            document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
            document.getElementById('perks_form_desktop').style.visibility = 'hidden';
            document.getElementById('logon_form_desktop').style.visibility = 'hidden';
            document.getElementById('frame_form_desktop').style.visibility = 'hidden';
            document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
            document.getElementById('mag_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
            document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
            document.getElementById('wepButton').style.backgroundColor = 'white';
            document.getElementById('perksButton').style.backgroundColor = 'white';
            document.getElementById('logonButton').style.backgroundColor = 'white';
            document.getElementById('frameButton').style.backgroundColor = 'white';
            document.getElementById('barrelButton').style.backgroundColor = 'white';
            document.getElementById('magButton').style.backgroundColor = 'white';
            document.getElementById('trait1Button').style.backgroundColor = 'white';
            document.getElementById('trait2Button').style.backgroundColor = 'white';
        break;
    }
    return clickedButton;
}