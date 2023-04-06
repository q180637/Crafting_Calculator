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

function desktopChoice(){
    //makes and sets variable for comparisons
    var wepClicked = "false";
    var perkClicked = "false";
    var logonClicked = "false";
    var frameClicked = "false";
    var barrelClicked = "false";
    var magClicked = "false";
    var trait1Clicked = "false";
    var trait2Clicked = "false";

    //tests if button is clicked and updates vars
    document.getElementById('wepButton').addEventListener("click", function() {wepClicked="true"});
    document.getElementById('perksButton').addEventListener("click", function() {perkClicked="true"});
    document.getElementById('logonButton').addEventListener("click", function() {logonClicked="true"});
    document.getElementById('frameButton').addEventListener("click", function() {frameClicked="true"});
    document.getElementById('barrelButton').addEventListener("click", function(){barrelClicked="true"});
    document.getElementById('magButton').addEventListener("click", function() {magClicked="true"});
    document.getElementById('trait1Button').addEventListener("click", function() {trait1Clicked="true"});
    document.getElementById('trait2Button').addEventListener("click", function() {trait2Clicked="true"});

    //checks contents of clicked and loads based on result
    if (wepClicked == "true") {
        document.getElementById('weapon_form_desktop').style.visibility = 'visible';
        document.getElementById('weapon_form_desktop').style.zIndex = '100';
        document.getElementById('perks_form_desktop').style.visibility = 'hidden';
        document.getElementById('logon_form_desktop').style.visibility = 'hidden';
        document.getElementById('frame_form_desktop').style.visibility = 'hidden';
        document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
        document.getElementById('mag_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
    }
    else if (perkClicked == "true"){
        document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
        document.getElementById('perks_form_desktop').style.visibility = 'visible';
        document.getElementById('perks_form_desktop').style.zIndex = '100';
        document.getElementById('logon_form_desktop').style.visibility = 'hidden';
        document.getElementById('frame_form_desktop').style.visibility = 'hidden';
        document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
        document.getElementById('mag_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
    }
    else if(logonClicked == "true"){
        document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
        document.getElementById('perks_form_desktop').style.visibility = 'hidden';
        document.getElementById('logon_form_desktop').style.visibility = 'visible';
        document.getElementById('logon_form_desktop').style.zIndex = '100';
        document.getElementById('frame_form_desktop').style.visibility = 'hidden';
        document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
        document.getElementById('mag_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
    }
    else if(frameClicked == "true"){
        document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
        document.getElementById('perks_form_desktop').style.visibility = 'hidden';
        document.getElementById('logon_form_desktop').style.visibility = 'hidden';
        document.getElementById('frame_form_desktop').style.visibility = 'visible';
        document.getElementById('frame_form_desktop').style.zIndex = '100';
        document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
        document.getElementById('mag_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
    }
    else if(barrelClicked == "true"){
        document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
        document.getElementById('perks_form_desktop').style.visibility = 'hidden';
        document.getElementById('logon_form_desktop').style.visibility = 'hidden';
        document.getElementById('frame_form_desktop').style.visibility = 'hidden';
        document.getElementById('barrel_form_desktop').style.visibility = 'visible';
        document.getElementById('barrel_form_desktop').style.zIndex = '100';
        document.getElementById('mag_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
    }
    else if(magClicked == "true"){
        document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
        document.getElementById('perks_form_desktop').style.visibility = 'hidden';
        document.getElementById('logon_form_desktop').style.visibility = 'hidden';
        document.getElementById('frame_form_desktop').style.visibility = 'hidden';
        document.getElementById('barrel_form_desktop').style.visibility = 'visible';
        document.getElementById('mag_form_desktop').style.zIndex = '100';
        document.getElementById('mag_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
    }
    else if(trait1Clicked == "true"){
        document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
        document.getElementById('perks_form_desktop').style.visibility = 'hidden';
        document.getElementById('logon_form_desktop').style.visibility = 'hidden';
        document.getElementById('frame_form_desktop').style.visibility = 'hidden';
        document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
        document.getElementById('mag_form_desktop').style.visibility = 'visible';
        document.getElementById('trait1_form_desktop').style.zIndex = '100';
        document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
    }
    else if(trait2Clicked == "true"){
        document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
        document.getElementById('perks_form_desktop').style.visibility = 'hidden';
        document.getElementById('logon_form_desktop').style.visibility = 'hidden';
        document.getElementById('frame_form_desktop').style.visibility = 'hidden';
        document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
        document.getElementById('mag_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait1_form_desktop').style.visibility = 'visible';
        document.getElementById('trait2_form_desktop').style.zIndex = '100';
        document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
    }
    else{
        document.getElementById('weapon_form_desktop').style.visibility = 'hidden';
        document.getElementById('perks_form_desktop').style.visibility = 'hidden';
        document.getElementById('logon_form_desktop').style.visibility = 'hidden';
        document.getElementById('frame_form_desktop').style.visibility = 'hidden';
        document.getElementById('barrel_form_desktop').style.visibility = 'hidden';
        document.getElementById('mag_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait1_form_desktop').style.visibility = 'hidden';
        document.getElementById('trait2_form_desktop').style.visibility = 'hidden';
    }
}