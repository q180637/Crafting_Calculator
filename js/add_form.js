// // TODO GET FIELD DIVS TO ONLY APPEAR AS THEY ARE SELECTED


var e = document.getElementById('tableList');

function answer(){
    if (e.value =="logon"){
        document.getElementById('weapon_form').style.visibility = 'hidden';
        document.getElementById('perks_form').style.visibility = 'hidden';
        document.getElementById('logon_form').style.visibility = 'visible';
        document.getElementById('frame_form').style.visibility = 'hidden';
        document.getElementById('barrel_form').style.visibility = 'hidden';
        document.getElementById('mag_form').style.visibility = 'hidden';
        document.getElementById('trait1_form').style.visibility = 'hidden';
        document.getElementById('trait2_form').style.visibility = 'hidden';
    }
    else if (e.value =="perks"){
        document.getElementById('weapon_form').style.visibility = 'hidden';
        document.getElementById('perks_form').style.visibility = 'visible';
        document.getElementById('logon_form').style.visibility = 'hidden';
        document.getElementById('frame_form').style.visibility = 'hidden';
        document.getElementById('barrel_form').style.visibility = 'hidden';
        document.getElementById('mag_form').style.visibility = 'hidden';
        document.getElementById('trait1_form').style.visibility = 'hidden';
        document.getElementById('trait2_form').style.visibility = 'hidden';
    }
    else if (e.value =="weapons"){
        document.getElementById('weapon_form').style.visibility = 'visible';
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