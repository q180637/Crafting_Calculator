// let mobile = document.getElementById('mobileSave');
// mobile.onclick = saveMobileBuild();

// let desktop = document.getElementById('desktopSave');
// desktop.onclick = saveDesktopBuild();

function saveMobileBuild(){
    let w = document.getElementById('weapon');
    let ws = w.options[w.selectedIndex].innerText;
    let f = document.getElementById('frame');
    let fs = f.options[f.selectedIndex].innerText;
    let b = document.getElementById('barrel');
    let bs = b.options[b.selectedIndex].innerText;
    let m = document.getElementById('magazine');
    let ms = m.options[m.selectedIndex].innerText;
    let t1 = document.getElementById('trait1');
    let t1s = t1.options[t1.selectedIndex].innerText;
    let t2 = document.getElementById('trait2');
    let t2s = t2.options[t2.selectedIndex].innerText;
    $.ajax(
        {
            url: '../php/save_build.php',
            type: 'POST',
            dataType: 'json',
            data: {"function": save,"weapon": ws, "frame": fs, "barrel": bs, "mag": ms, "trait1": t1s, "trait2": t2s},
        }
    )
}

function saveDesktopBuild(){
    let w = document.getElementById('desktopWeapon');
    let ws = w.options[w.selectedIndex].innerText;
    let f = document.getElementById('desktopFrame');
    let fs = f.options[f.selectedIndex].innerText;
    let b = document.getElementById('desktopBarrel');
    let bs = b.options[b.selectedIndex].innerText;
    let m = document.getElementById('desktopMagazine');
    let ms = m.options[m.selectedIndex].innerText;
    let t1 = document.getElementById('desktopTrait1');
    let t1s = t1.options[t1.selectedIndex].innerText;
    let t2 = document.getElementById('desktopTrait2');
    let t2s = t2.options[t2.selectedIndex].innerText;
    $.ajax(
        {
            url: '../php/save_build.php',
            type: 'POST',
            dataType: 'json',
            data: {"function": save,"weapon": ws, "frame": fs, "barrel": bs, "mag": ms, "trait1": t1s, "trait2": t2s},
        }
    )
}