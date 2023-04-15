function load(){
    let e = document.getElementById('recordList');
    const remove = document.querySelectorAll('.success');
    for (const el of remove){
        el.remove();
    }
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