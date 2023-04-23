function loadWepOnLoad() {
    let desktopDefault = document.getElementById('desktopWeapon');
    desktopDefault.value = "Choose a Weapon";
    document.getElementById('weapon').value = "Choose a Weapon";
    $.ajax({
        url: '../php/tool_load_func.php',
        type: 'POST',
        dataType: 'json',
        data: "function=fillWeaponRecordList",
        success: function (response) {
            let options = response.toString();
            let rows = options.split(",");
            let mselect = document.getElementById('weapon');
            let dselect = document.getElementById('desktopWeapon')
            for (var i = 0; i < rows.length; i++) {
                let row = rows[i].toString();
                mselect.innerHTML = mselect.innerHTML + row;
                dselect.innerHTML = dselect.innerHTML + row;
            }
        }
    })
}

function getPerks(id) {
    const remove = document.querySelectorAll('p');
    for (const el of remove) {
        el.remove();
    }
    $.ajax({
        url: '../php/tool_load_func.php',
        type: 'POST',
        dataType: 'json',
        data: "function=getWepStats&selected=" + id,
        success: function (response) {
            console.log(response);
            let options = response.toString();
            let rows = options.split(",");
            let mselect = document.getElementById('mStats');
            let dStats = document.getElementById('dStats');
            for (var i = 0; i < rows.length; i++) {
                let row = rows[i].toString();
                mselect.innerHTML = mselect.innerHTML + row;
                dStats.innerHTML = mselect.innerHTML;
            }
        }
    })
    $.ajax({
        url: '../php/tool_load_func.php',
        type: 'POST',
        dataType: 'json',
        data: "function=getFrames&selected=" + id,
        success: function (response) {
            let options = response.toString();
            let rows = options.split(",");
            let mselect = document.getElementById('frame');
            let dselect = document.getElementById('desktopFrame')
            for (var i = 0; i < rows.length; i++) {
                let row = rows[i].toString();
                mselect.innerHTML = mselect.innerHTML + row;
                dselect.innerHTML = dselect.innerHTML + row;
            }
        }
    })
    $.ajax({
        url: '../php/tool_load_func.php',
        type: 'POST',
        dataType: 'json',
        data: "function=getBarrels&selected=" + id,
        success: function (response) {
            let options = response.toString();
            let rows = options.split(",");
            let mselect = document.getElementById('barrel');
            let dselect = document.getElementById('desktopBarrel')
            for (var i = 0; i < rows.length; i++) {
                let row = rows[i].toString();
                mselect.innerHTML = mselect.innerHTML + row;
                dselect.innerHTML = dselect.innerHTML + row;
            }
        }
    })
    $.ajax({
        url: '../php/tool_load_func.php',
        type: 'POST',
        dataType: 'json',
        data: "function=getMags&selected=" + id,
        success: function (response) {
            let options = response.toString();
            let rows = options.split(",");
            let mselect = document.getElementById('magazine');
            let dselect = document.getElementById('desktopMagazine')
            for (var i = 0; i < rows.length; i++) {
                let row = rows[i].toString();
                mselect.innerHTML = mselect.innerHTML + row;
                dselect.innerHTML = dselect.innerHTML + row;
            }
        }
    })
    $.ajax({
        url: '../php/tool_load_func.php',
        type: 'POST',
        dataType: 'json',
        data: "function=getTrait1s&selected=" + id,
        success: function (response) {
            let options = response.toString();
            let rows = options.split(",");
            let mselect = document.getElementById('trait1');
            let dselect = document.getElementById('desktopTrait1')
            for (var i = 0; i < rows.length; i++) {
                let row = rows[i].toString();
                mselect.innerHTML = mselect.innerHTML + row;
                dselect.innerHTML = dselect.innerHTML + row;
            }
        }
    })
    $.ajax({
        url: '../php/tool_load_func.php',
        type: 'POST',
        dataType: 'json',
        data: "function=getTrait2s&selected=" + id,
        success: function (response) {
            let options = response.toString();
            let rows = options.split(",");
            let mselect = document.getElementById('trait2');
            let dselect = document.getElementById('desktopTrait2')
            for (var i = 0; i < rows.length; i++) {
                let row = rows[i].toString();
                mselect.innerHTML = mselect.innerHTML + row;
                dselect.innerHTML = dselect.innerHTML + row;
            }
        }
    })
}

function calculateFrames(id) {
    $.ajax({
        url: '../php/tool_load_func.php',
        type: 'POST',
        dataType: 'json',
        data: "function=getFrameStats&selectedFrame=" + id,
        success: function (response) {
            let options = response.toString();
            let rows = options.split(",");
            let mselect = document.getElementById('dump');
            let mStats = document.getElementById('mStats');
            let dStats = document.getElementById('dStats');
            let mobileCost = document.getElementById('mCosts');
            let desktopCost = document.getElementById('dCost');
            for (var i = 0; i < rows.length; i++) {
                let row = rows[i].toString();
                mselect.innerHTML = mselect.innerHTML + row;
            }

            const impactLabel = document.getElementById('impact');
            let baseimpactT = impactLabel.getAttribute('value');
            let baseimpactVal = parseInt(baseimpactT);
            let impactChangeLabel = document.getElementById('impactchange');
            let impactChangeT = impactChangeLabel.getAttribute('value');
            let impactChangeVal = parseInt(impactChangeT);
            let newimpact = baseimpactVal + impactChangeVal;
            impactLabel.innerHTML = "Impact: " + newimpact;
            impactLabel.setAttribute('value', newimpact);

            const rangeLabel = document.getElementById('range');
            let baseRangeT = rangeLabel.getAttribute('value');
            let baseRangeVal = parseInt(baseRangeT);
            let rangeChangeLabel = document.getElementById('rangechange');
            let rangeChangeT = rangeChangeLabel.getAttribute('value');
            let rangeChangeVal = parseInt(rangeChangeT);
            let newRange = baseRangeVal + rangeChangeVal;
            rangeLabel.innerHTML = "Range: " + newRange;
            rangeLabel.setAttribute('value', newRange);

            const stabLabel = document.getElementById('stability');
            let basestabT = stabLabel.getAttribute('value');
            let basestabVal = parseInt(basestabT);
            let stabChangeLabel = document.getElementById('stabilitychange');
            let stabChangeT = stabChangeLabel.getAttribute('value');
            let stabChangeVal = parseInt(stabChangeT);
            let newstab = basestabVal + stabChangeVal;
            stabLabel.innerHTML = "Stability: " + newstab;
            stabLabel.setAttribute('value', newstab);

            const handlingLabel = document.getElementById('handling');
            let basehandlingT = handlingLabel.getAttribute('value');
            let basehandlingVal = parseInt(basehandlingT);
            let handlingChangeLabel = document.getElementById('handlingchange');
            let handlingChangeT = handlingChangeLabel.getAttribute('value');
            let handlingChangeVal = parseInt(handlingChangeT);
            let newhandling = basehandlingVal + handlingChangeVal;
            handlingLabel.innerHTML = "Handling: " + newhandling;
            handlingLabel.setAttribute('value', newhandling);

            const reloadLabel = document.getElementById('reload');
            let basereloadT = reloadLabel.getAttribute('value');
            let basereloadVal = parseInt(basereloadT);
            let reloadChangeLabel = document.getElementById('reloadchange');
            let reloadChangeT = reloadChangeLabel.getAttribute('value');
            let reloadChangeVal = parseInt(reloadChangeT);
            let newreload = basereloadVal + reloadChangeVal;
            reloadLabel.innerHTML = "Reload Speed: " + newreload;
            reloadLabel.setAttribute('value', newreload);

            const AALabel = document.getElementById('aa');
            let baseAAT = AALabel.getAttribute('value');
            let baseAAVal = parseInt(baseAAT);
            let AAChangeLabel = document.getElementById('aachange');
            let AAChangeT = AAChangeLabel.getAttribute('value');
            let AAChangeVal = parseInt(AAChangeT);
            let newAA = baseAAVal + AAChangeVal;
            AALabel.innerHTML = "Aim Assistance: " + newAA;
            AALabel.setAttribute('value', newAA);

            const zoomLabel = document.getElementById('zoom');
            let basezoomT = zoomLabel.getAttribute('value');
            let basezoomVal = parseInt(basezoomT);
            let zoomChangeLabel = document.getElementById('zoomchange');
            let zoomChangeT = zoomChangeLabel.getAttribute('value');
            let zoomChangeVal = parseInt(zoomChangeT);
            let newzoom = basezoomVal + zoomChangeVal;
            zoomLabel.innerHTML = "Zoom: " + newzoom;
            zoomLabel.setAttribute('value', newzoom);

            const recoilLabel = document.getElementById('recoil');
            let baserecoilT = recoilLabel.getAttribute('value');
            let baserecoilVal = parseInt(baserecoilT);
            let recoilChangeLabel = document.getElementById('recoilchange');
            let recoilChangeT = recoilChangeLabel.getAttribute('value');
            let recoilChangeVal = parseInt(recoilChangeT);
            let newrecoil = baserecoilVal + recoilChangeVal;
            recoilLabel.innerHTML = "Recoil Direction: " + newrecoil;
            recoilLabel.setAttribute('value', newrecoil);

            const RPMLabel = document.getElementById('rpm');
            let baseRPMT = RPMLabel.getAttribute('value');
            let baseRPMVal = parseInt(baseRPMT);
            let RPMChangeLabel = document.getElementById('RPMchange');
            let RPMChangeT = RPMChangeLabel.getAttribute('value');
            let RPMChangeVal = parseInt(RPMChangeT);
            let newRPM = baseRPMVal + RPMChangeVal;
            RPMLabel.innerHTML = "Rate of Fire: " + newRPM;
            RPMLabel.setAttribute('value', newRPM);

            const drawLabel = document.getElementById('draw');
            let basedrawT = drawLabel.getAttribute('value');
            let basedrawVal = parseInt(basedrawT);
            let drawChangeLabel = document.getElementById('drawchange');
            let drawChangeT = drawChangeLabel.getAttribute('value');
            let drawChangeVal = parseInt(drawChangeT);
            let newdraw = basedrawVal + drawChangeVal;
            drawLabel.innerHTML = "Draw Time: " + newdraw;
            drawLabel.setAttribute('value', newdraw);

            const accuracyLabel = document.getElementById('accuracy');
            let baseaccuracyT = accuracyLabel.getAttribute('value');
            let baseaccuracyVal = parseInt(baseaccuracyT);
            let accuracyChangeLabel = document.getElementById('accuracychange');
            let accuracyChangeT = accuracyChangeLabel.getAttribute('value');
            let accuracyChangeVal = parseInt(accuracyChangeT);
            let newaccuracy = baseaccuracyVal + accuracyChangeVal;
            accuracyLabel.innerHTML = "Accuracy: " + newaccuracy;
            accuracyLabel.setAttribute('value', newaccuracy);

            const magLabel = document.getElementById('magsize');
            let basemagT = magLabel.getAttribute('value');
            let basemagVal = parseInt(basemagT);
            let magChangeLabel = document.getElementById('magchange');
            let magChangeT = magChangeLabel.getAttribute('value');
            let magChangeVal = parseInt(magChangeT);
            let newmag = basemagVal + magChangeVal;
            magLabel.innerHTML = "Magazine Size: " + newmag;
            magLabel.setAttribute('value', newmag);

            const resonantElement = document.getElementById('reselchange');
            let mCost = document.getElementById('mCosts');
            let dCost = document.getElementById('dCost');
            let resElementCost = resonantElement.getAttribute('value');
            resonantElement.innerHTML = "Resonant Element Cost: " + resElementCost;
            mCost.appendChild(resonantElement);
            let resonantElementClone = resonantElement.cloneNode(true);
            dCost.appendChild(resonantElementClone);

            const drownedElement = document.getElementById('drownedchange');
            let drownedElementCost = drownedElement.getAttribute('value');
            drownedElement.innerHTML = "Drowned Element Cost: " + drownedElementCost;
            mCost.appendChild(drownedElement);
            let drownedElementClone = drownedElement.cloneNode(true);
            dCost.appendChild(drownedElementClone);

            const resAlloy = document.getElementById('resalloychange');
            let resAlloyCost = resAlloy.getAttribute('value');
            resAlloy.innerHTML = "Resonant Alloy Cost: " + resAlloyCost;
            mCost.appendChild(resAlloy);
            let resAlloyClone = resAlloy.cloneNode(true);
            dCost.appendChild(resAlloyClone);

            const ascendantAlloy = document.getElementById('ascendantchange');
            let ascendantAlloyCost = ascendantAlloy.getAttribute('value');
            ascendantAlloy.innerHTML = "Ascendant Alloy Cost: " + ascendantAlloyCost;
            mCost.appendChild(ascendantAlloy);
            let ascendantAlloyClone = ascendantAlloy.cloneNode(true);
            dCost.appendChild(ascendantAlloyClone);

            const glimmer = document.getElementById('glimmerchange');
            let glimmerCost = glimmer.getAttribute('value');
            glimmer.innerHTML = "Glimmer Cost: " + glimmerCost;
            mCost.appendChild(glimmer);
            let glimmerClone = glimmer.cloneNode(true);
            dCost.appendChild(glimmerClone);

            const ecore = document.getElementById('ecorechange');
            let ecoreCost = glimmer.getAttribute('value');
            glimmer.innerHTML = "Enhancement Core Cost: " + ecoreCost;
            mCost.appendChild(ecore);
            let ecoreClone = ecore.cloneNode(true);
            dCost.appendChild(ecoreClone);

            dStats.innerHTML = mStats.innerHTML;
            desktopCost.innerHTML = mobileCost.innerHTML;
        }
    })
}

function calculateBarrels(id) {
    $.ajax({
        url: '../php/tool_load_func.php',
        type: 'POST',
        dataType: 'json',
        data: "function=getBarrelStats&selectedBarrel=" + id,
        success: function (response) {
            let options = response.toString();
            let rows = options.split(",");
            let mselect = document.getElementById('dump');
            let mStats = document.getElementById('mStats');
            let dStats = document.getElementById('dStats');
            let mobileCost = document.getElementById('mCosts');
            let desktopCost = document.getElementById('dCost');
            for (var i = 0; i < rows.length; i++) {
                let row = rows[i].toString();
                mselect.innerHTML = mselect.innerHTML + row;
            }

            const impactLabel = document.getElementById('impact');
            let baseimpactT = impactLabel.getAttribute('value');
            let baseimpactVal = parseInt(baseimpactT);
            let impactChangeLabel = document.getElementById('impactchange2');
            let impactChangeT = impactChangeLabel.getAttribute('value');
            let impactChangeVal = parseInt(impactChangeT);
            let newimpact = baseimpactVal + impactChangeVal;
            impactLabel.innerHTML = "Impact: " + newimpact;
            impactLabel.setAttribute('value', newimpact);


            const rangeLabel = document.getElementById('range');
            let baseRangeT = rangeLabel.getAttribute('value');
            let baseRangeVal = parseInt(baseRangeT);
            let rangeChangeLabel = document.getElementById('rangechange2');
            let rangeChangeT = rangeChangeLabel.getAttribute('value');
            let rangeChangeVal = parseInt(rangeChangeT);
            let newRange = baseRangeVal + rangeChangeVal;
            rangeLabel.innerHTML = "Range: " + newRange;
            rangeLabel.setAttribute('value', newRange);


            const stabLabel = document.getElementById('stability');
            let basestabT = stabLabel.getAttribute('value');
            let basestabVal = parseInt(basestabT);
            let stabChangeLabel = document.getElementById('stabilitychange2');
            let stabChangeT = stabChangeLabel.getAttribute('value');
            let stabChangeVal = parseInt(stabChangeT);
            let newstab = basestabVal + stabChangeVal;
            stabLabel.innerHTML = "Stability: " + newstab;
            stabLabel.setAttribute('value', newstab);


            const handlingLabel = document.getElementById('handling');
            let basehandlingT = handlingLabel.getAttribute('value');
            let basehandlingVal = parseInt(basehandlingT);
            let handlingChangeLabel = document.getElementById('handlingchange2');
            let handlingChangeT = handlingChangeLabel.getAttribute('value');
            let handlingChangeVal = parseInt(handlingChangeT);
            let newhandling = basehandlingVal + handlingChangeVal;
            handlingLabel.innerHTML = "Handling: " + newhandling;
            handlingLabel.setAttribute('value', newhandling);


            const reloadLabel = document.getElementById('reload');
            let basereloadT = reloadLabel.getAttribute('value');
            let basereloadVal = parseInt(basereloadT);
            let reloadChangeLabel = document.getElementById('reloadchange2');
            let reloadChangeT = reloadChangeLabel.getAttribute('value');
            let reloadChangeVal = parseInt(reloadChangeT);
            let newreload = basereloadVal + reloadChangeVal;
            reloadLabel.innerHTML = "Reload Speed: " + newreload;
            reloadLabel.setAttribute('value', newreload);


            const AALabel = document.getElementById('aa');
            let baseAAT = AALabel.getAttribute('value');
            let baseAAVal = parseInt(baseAAT);
            let AAChangeLabel = document.getElementById('aachange2');
            let AAChangeT = AAChangeLabel.getAttribute('value');
            let AAChangeVal = parseInt(AAChangeT);
            let newAA = baseAAVal + AAChangeVal;
            AALabel.innerHTML = "Aim Assistance: " + newAA;
            AALabel.setAttribute('value', newAA);


            const zoomLabel = document.getElementById('zoom');
            let basezoomT = zoomLabel.getAttribute('value');
            let basezoomVal = parseInt(basezoomT);
            let zoomChangeLabel = document.getElementById('zoomchange2');
            let zoomChangeT = zoomChangeLabel.getAttribute('value');
            let zoomChangeVal = parseInt(zoomChangeT);
            let newzoom = basezoomVal + zoomChangeVal;
            zoomLabel.innerHTML = "Zoom: " + newzoom;
            zoomLabel.setAttribute('value', newzoom);


            const recoilLabel = document.getElementById('recoil');
            let baserecoilT = recoilLabel.getAttribute('value');
            let baserecoilVal = parseInt(baserecoilT);
            let recoilChangeLabel = document.getElementById('recoilchange2');
            let recoilChangeT = recoilChangeLabel.getAttribute('value');
            let recoilChangeVal = parseInt(recoilChangeT);
            let newrecoil = baserecoilVal + recoilChangeVal;
            recoilLabel.innerHTML = "Recoil Direction: " + newrecoil;
            recoilLabel.setAttribute('value', newrecoil);


            const RPMLabel = document.getElementById('rpm');
            let baseRPMT = RPMLabel.getAttribute('value');
            let baseRPMVal = parseInt(baseRPMT);
            let RPMChangeLabel = document.getElementById('RPMchange2');
            let RPMChangeT = RPMChangeLabel.getAttribute('value');
            let RPMChangeVal = parseInt(RPMChangeT);
            let newRPM = baseRPMVal + RPMChangeVal;
            RPMLabel.innerHTML = "Rate of Fire: " + newRPM;
            RPMLabel.setAttribute('value', newRPM);


            const drawLabel = document.getElementById('draw');
            let basedrawT = drawLabel.getAttribute('value');
            let basedrawVal = parseInt(basedrawT);
            let drawChangeLabel = document.getElementById('drawchange2');
            let drawChangeT = drawChangeLabel.getAttribute('value');
            let drawChangeVal = parseInt(drawChangeT);
            let newdraw = basedrawVal + drawChangeVal;
            drawLabel.innerHTML = "Draw Time: " + newdraw;
            drawLabel.setAttribute('value', newdraw);


            const accuracyLabel = document.getElementById('accuracy');
            let baseaccuracyT = accuracyLabel.getAttribute('value');
            let baseaccuracyVal = parseInt(baseaccuracyT);
            let accuracyChangeLabel = document.getElementById('accuracychange2');
            let accuracyChangeT = accuracyChangeLabel.getAttribute('value');
            let accuracyChangeVal = parseInt(accuracyChangeT);
            let newaccuracy = baseaccuracyVal + accuracyChangeVal;
            accuracyLabel.innerHTML = "Accuracy: " + newaccuracy;
            accuracyLabel.setAttribute('value', newaccuracy);


            const magLabel = document.getElementById('magsize');
            let basemagT = magLabel.getAttribute('value');
            let basemagVal = parseInt(basemagT);
            let magChangeLabel = document.getElementById('magchange2');
            let magChangeT = magChangeLabel.getAttribute('value');
            let magChangeVal = parseInt(magChangeT);
            let newmag = basemagVal + magChangeVal;
            magLabel.innerHTML = "Magazine Size: " + newmag;
            magLabel.setAttribute('value', newmag);


            const resElementLabel = document.getElementById('reselchange');
            let reselementT = resElementLabel.getAttribute('value');
            let reselementVal = parseInt(reselementT);
            let reselChangeLabel = document.getElementById('reselchange2');
            let resElChangT = reselChangeLabel.getAttribute('value');
            let resElChangeVal = parseInt(resElChangT);
            let newResEl = reselementVal + resElChangeVal;
            resElementLabel.innerHTML = "Resonant Element Cost: " + newResEl;
            resElementLabel.setAttribute('value', newResEl);

            const drownedElementLabel = document.getElementById('drownedchange');
            let drownedelementT = drownedElementLabel.getAttribute('value');
            let drownedelementVal = parseInt(drownedelementT);
            let drownedelChangeLabel = document.getElementById('drownedchange2');
            let drownedElChangT = drownedelChangeLabel.getAttribute('value');
            let drownedElChangeVal = parseInt(drownedElChangT);
            let newdrownedEl = drownedelementVal + drownedElChangeVal;
            drownedElementLabel.innerHTML = "Drowned Element Cost: " + newdrownedEl;
            drownedElementLabel.setAttribute('value', newdrownedEl);

            const resalloyLabel = document.getElementById('resalloychange');
            let resalloytT = resalloyLabel.getAttribute('value');
            let resalloyVal = parseInt(resalloytT);
            let resalloyChangeLabel = document.getElementById('resalloychange2');
            let resalloyChangT = resalloyChangeLabel.getAttribute('value');
            let resalloyChangeVal = parseInt(resalloyChangT);
            let newresalloy = resalloyVal + resalloyChangeVal;
            resalloyLabel.innerHTML = "Resonant Alloy Cost: " + newresalloy;
            resalloyLabel.setAttribute('value', newresalloy);

            const ascendantalloyLabel = document.getElementById('ascendantchange');
            let ascendantalloytT = ascendantalloyLabel.getAttribute('value');
            let ascendantalloyVal = parseInt(ascendantalloytT);
            let ascendantalloyChangeLabel = document.getElementById('ascendantchange2');
            let ascendantalloyChangT = ascendantalloyChangeLabel.getAttribute('value');
            let ascendantalloyChangeVal = parseInt(ascendantalloyChangT);
            let newascendantalloy = ascendantalloyVal + ascendantalloyChangeVal;
            ascendantalloyLabel.innerHTML = "Ascendant Alloy Cost: " + newascendantalloy;
            ascendantalloyLabel.setAttribute('value', newascendantalloy);

            const glimmerLabel = document.getElementById('glimmerchange');
            let glimmertT = glimmerLabel.getAttribute('value');
            let glimmerVal = parseInt(glimmertT);
            let glimmerChangeLabel = document.getElementById('glimmerchange2');
            let glimmerChangT = glimmerChangeLabel.getAttribute('value');
            let glimmerChangeVal = parseInt(glimmerChangT);
            let newglimmer = glimmerVal + glimmerChangeVal;
            glimmerLabel.innerHTML = "Glimmer Cost: " + newglimmer;
            glimmerLabel.setAttribute('value', newglimmer);


            const ecoreLabel = document.getElementById('ecorechange');
            let ecoretT = ecoreLabel.getAttribute('value');
            let ecoreVal = parseInt(ecoretT);
            let ecoreChangeLabel = document.getElementById('ecorechange2');
            let ecoreChangT = ecoreChangeLabel.getAttribute('value');
            let ecoreChangeVal = parseInt(ecoreChangT);
            let newecore = ecoreVal + ecoreChangeVal;
            ecoreLabel.innerHTML = "Enhancement Core Cost: " + newecore;
            ecoreLabel.setAttribute('value', newecore);

            dStats.innerHTML = mStats.innerHTML;
            desktopCost.innerHTML = mobileCost.innerHTML;
        }
    })
}

function calculateMag(id) {
    $.ajax({
        url: '../php/tool_load_func.php',
        type: 'POST',
        dataType: 'json',
        data: "function=getMagStats&selectedMag=" + id,
        success: function (response) {
            let options = response.toString();
            let rows = options.split(",");
            let mselect = document.getElementById('dump');
            let mStats = document.getElementById('mStats');
            let dStats = document.getElementById('dStats');
            let mobileCost = document.getElementById('mCosts');
            let desktopCost = document.getElementById('dCost');
            for (var i = 0; i < rows.length; i++) {
                let row = rows[i].toString();
                mselect.innerHTML = mselect.innerHTML + row;
            }

            const impactLabel = document.getElementById('impact');
            let baseimpactT = impactLabel.getAttribute('value');
            let baseimpactVal = parseInt(baseimpactT);
            let impactChangeLabel = document.getElementById('impactchange3');
            let impactChangeT = impactChangeLabel.getAttribute('value');
            let impactChangeVal = parseInt(impactChangeT);
            let newimpact = baseimpactVal + impactChangeVal;
            impactLabel.innerHTML = "Impact: " + newimpact;
            impactLabel.setAttribute('value', newimpact);

            const rangeLabel = document.getElementById('range');
            let baseRangeT = rangeLabel.getAttribute('value');
            let baseRangeVal = parseInt(baseRangeT);
            let rangeChangeLabel = document.getElementById('rangechange3');
            let rangeChangeT = rangeChangeLabel.getAttribute('value');
            let rangeChangeVal = parseInt(rangeChangeT);
            let newRange = baseRangeVal + rangeChangeVal;
            rangeLabel.innerHTML = "Range: " + newRange;
            rangeLabel.setAttribute('value', newRange);

            const stabLabel = document.getElementById('stability');
            let basestabT = stabLabel.getAttribute('value');
            let basestabVal = parseInt(basestabT);
            let stabChangeLabel = document.getElementById('stabilitychange3');
            let stabChangeT = stabChangeLabel.getAttribute('value');
            let stabChangeVal = parseInt(stabChangeT);
            let newstab = basestabVal + stabChangeVal;
            stabLabel.innerHTML = "Stability: " + newstab;
            stabLabel.setAttribute('value', newstab);

            const handlingLabel = document.getElementById('handling');
            let basehandlingT = handlingLabel.getAttribute('value');
            let basehandlingVal = parseInt(basehandlingT);
            let handlingChangeLabel = document.getElementById('handlingchange3');
            let handlingChangeT = handlingChangeLabel.getAttribute('value');
            let handlingChangeVal = parseInt(handlingChangeT);
            let newhandling = basehandlingVal + handlingChangeVal;
            handlingLabel.innerHTML = "Handling: " + newhandling;
            handlingLabel.setAttribute('value', newhandling);

            const reloadLabel = document.getElementById('reload');
            let basereloadT = reloadLabel.getAttribute('value');
            let basereloadVal = parseInt(basereloadT);
            let reloadChangeLabel = document.getElementById('reloadchange3');
            let reloadChangeT = reloadChangeLabel.getAttribute('value');
            let reloadChangeVal = parseInt(reloadChangeT);
            let newreload = basereloadVal + reloadChangeVal;
            reloadLabel.innerHTML = "Reload Speed: " + newreload;
            reloadLabel.setAttribute('value', newreload);

            const AALabel = document.getElementById('aa');
            let baseAAT = AALabel.getAttribute('value');
            let baseAAVal = parseInt(baseAAT);
            let AAChangeLabel = document.getElementById('aachange3');
            let AAChangeT = AAChangeLabel.getAttribute('value');
            let AAChangeVal = parseInt(AAChangeT);
            let newAA = baseAAVal + AAChangeVal;
            AALabel.innerHTML = "Aim Assistance: " + newAA;
            AALabel.setAttribute('value', newAA);

            const zoomLabel = document.getElementById('zoom');
            let basezoomT = zoomLabel.getAttribute('value');
            let basezoomVal = parseInt(basezoomT);
            let zoomChangeLabel = document.getElementById('zoomchange3');
            let zoomChangeT = zoomChangeLabel.getAttribute('value');
            let zoomChangeVal = parseInt(zoomChangeT);
            let newzoom = basezoomVal + zoomChangeVal;
            zoomLabel.innerHTML = "Zoom: " + newzoom;
            zoomLabel.setAttribute('value', newzoom);

            const recoilLabel = document.getElementById('recoil');
            let baserecoilT = recoilLabel.getAttribute('value');
            let baserecoilVal = parseInt(baserecoilT);
            let recoilChangeLabel = document.getElementById('recoilchange3');
            let recoilChangeT = recoilChangeLabel.getAttribute('value');
            let recoilChangeVal = parseInt(recoilChangeT);
            let newrecoil = baserecoilVal + recoilChangeVal;
            recoilLabel.innerHTML = "Recoil Direction: " + newrecoil;
            recoilLabel.setAttribute('value', newrecoil);

            const RPMLabel = document.getElementById('rpm');
            let baseRPMT = RPMLabel.getAttribute('value');
            let baseRPMVal = parseInt(baseRPMT);
            let RPMChangeLabel = document.getElementById('RPMchange3');
            let RPMChangeT = RPMChangeLabel.getAttribute('value');
            let RPMChangeVal = parseInt(RPMChangeT);
            let newRPM = baseRPMVal + RPMChangeVal;
            RPMLabel.innerHTML = "Rate of Fire: " + newRPM;
            RPMLabel.setAttribute('value', newRPM);

            const drawLabel = document.getElementById('draw');
            let basedrawT = drawLabel.getAttribute('value');
            let basedrawVal = parseInt(basedrawT);
            let drawChangeLabel = document.getElementById('drawchange3');
            let drawChangeT = drawChangeLabel.getAttribute('value');
            let drawChangeVal = parseInt(drawChangeT);
            let newdraw = basedrawVal + drawChangeVal;
            drawLabel.innerHTML = "Draw Time: " + newdraw;
            drawLabel.setAttribute('value', newdraw);

            const accuracyLabel = document.getElementById('accuracy');
            let baseaccuracyT = accuracyLabel.getAttribute('value');
            let baseaccuracyVal = parseInt(baseaccuracyT);
            let accuracyChangeLabel = document.getElementById('accuracychange3');
            let accuracyChangeT = accuracyChangeLabel.getAttribute('value');
            let accuracyChangeVal = parseInt(accuracyChangeT);
            let newaccuracy = baseaccuracyVal + accuracyChangeVal;
            accuracyLabel.innerHTML = "Accuracy: " + newaccuracy;
            accuracyLabel.setAttribute('value', newaccuracy);

            const magLabel = document.getElementById('magsize');
            let basemagT = magLabel.getAttribute('value');
            let basemagVal = parseInt(basemagT);
            let magChangeLabel = document.getElementById('magchange3');
            let magChangeT = magChangeLabel.getAttribute('value');
            let magChangeVal = parseInt(magChangeT);
            let newmag = basemagVal + magChangeVal;
            magLabel.innerHTML = "Magazine Size: " + newmag;
            magLabel.setAttribute('value', newmag);

            const resElementLabel = document.getElementById('reselchange');
            let reselementT = resElementLabel.getAttribute('value');
            let reselementVal = parseInt(reselementT);
            let reselChangeLabel = document.getElementById('reselchange3');
            let resElChangT = reselChangeLabel.getAttribute('value');
            let resElChangeVal = parseInt(resElChangT);
            let newResEl = reselementVal + resElChangeVal;
            resElementLabel.innerHTML = "Resonant Element Cost: " + newResEl;
            resElementLabel.setAttribute('value', newResEl);

            const drownedElementLabel = document.getElementById('drownedchange');
            let drownedelementT = drownedElementLabel.getAttribute('value');
            let drownedelementVal = parseInt(drownedelementT);
            let drownedelChangeLabel = document.getElementById('drownedchange3');
            let drownedElChangT = drownedelChangeLabel.getAttribute('value');
            let drownedElChangeVal = parseInt(drownedElChangT);
            let newdrownedEl = drownedelementVal + drownedElChangeVal;
            drownedElementLabel.innerHTML = "Drowned Element Cost: " + newdrownedEl;
            drownedElementLabel.setAttribute('value', newdrownedEl);

            const resalloyLabel = document.getElementById('resalloychange');
            let resalloytT = resalloyLabel.getAttribute('value');
            let resalloyVal = parseInt(resalloytT);
            let resalloyChangeLabel = document.getElementById('resalloychange3');
            let resalloyChangT = resalloyChangeLabel.getAttribute('value');
            let resalloyChangeVal = parseInt(resalloyChangT);
            let newresalloy = resalloyVal + resalloyChangeVal;
            resalloyLabel.innerHTML = "Resonant Alloy Cost: " + newresalloy;
            resalloyLabel.setAttribute('value', newresalloy);

            const ascendantalloyLabel = document.getElementById('ascendantchange');
            let ascendantalloytT = ascendantalloyLabel.getAttribute('value');
            let ascendantalloyVal = parseInt(ascendantalloytT);
            let ascendantalloyChangeLabel = document.getElementById('ascendantchange3');
            let ascendantalloyChangT = ascendantalloyChangeLabel.getAttribute('value');
            let ascendantalloyChangeVal = parseInt(ascendantalloyChangT);
            let newascendantalloy = ascendantalloyVal + ascendantalloyChangeVal;
            ascendantalloyLabel.innerHTML = "Ascendant Alloy Cost: " + newascendantalloy;
            ascendantalloyLabel.setAttribute('value', newascendantalloy);

            const glimmerLabel = document.getElementById('glimmerchange');
            let glimmertT = glimmerLabel.getAttribute('value');
            let glimmerVal = parseInt(glimmertT);
            let glimmerChangeLabel = document.getElementById('glimmerchange3');
            let glimmerChangT = glimmerChangeLabel.getAttribute('value');
            let glimmerChangeVal = parseInt(glimmerChangT);
            let newglimmer = glimmerVal + glimmerChangeVal;
            glimmerLabel.innerHTML = "Glimmer Cost: " + newglimmer;
            glimmerLabel.setAttribute('value', newglimmer);


            const ecoreLabel = document.getElementById('ecorechange');
            let ecoretT = ecoreLabel.getAttribute('value');
            let ecoreVal = parseInt(ecoretT);
            let ecoreChangeLabel = document.getElementById('ecorechange3');
            let ecoreChangT = ecoreChangeLabel.getAttribute('value');
            let ecoreChangeVal = parseInt(ecoreChangT);
            let newecore = ecoreVal + ecoreChangeVal;
            ecoreLabel.innerHTML = "Enhancement Core Cost: " + newecore;
            ecoreLabel.setAttribute('value', newecore);

            dStats.innerHTML = mStats.innerHTML;
            desktopCost.innerHTML = mobileCost.innerHTML;

        }
    })
}

function calculateTrait1(id) {
    $.ajax({
        url: '../php/tool_load_func.php',
        type: 'POST',
        dataType: 'json',
        data: "function=getTrait1Stats&selectedTrait1=" + id,
        success: function (response) {
            let options = response.toString();
            let rows = options.split(",");
            let mselect = document.getElementById('dump');
            let mStats = document.getElementById('mStats');
            let dStats = document.getElementById('dStats');
            let mobileCost = document.getElementById('mCosts');
            let desktopCost = document.getElementById('dCost');
            for (var i = 0; i < rows.length; i++) {
                let row = rows[i].toString();
                mselect.innerHTML = mselect.innerHTML + row;
            }

            const impactLabel = document.getElementById('impact');
            let baseimpactT = impactLabel.getAttribute('value');
            let baseimpactVal = parseInt(baseimpactT);
            let impactChangeLabel = document.getElementById('impactchange4');
            let impactChangeT = impactChangeLabel.getAttribute('value');
            let impactChangeVal = parseInt(impactChangeT);
            let newimpact = baseimpactVal + impactChangeVal;
            impactLabel.innerHTML = "Impact: " + newimpact;
            impactLabel.setAttribute('value', newimpact);

            const rangeLabel = document.getElementById('range');
            let baseRangeT = rangeLabel.getAttribute('value');
            let baseRangeVal = parseInt(baseRangeT);
            let rangeChangeLabel = document.getElementById('rangechange4');
            let rangeChangeT = rangeChangeLabel.getAttribute('value');
            let rangeChangeVal = parseInt(rangeChangeT);
            let newRange = baseRangeVal + rangeChangeVal;
            rangeLabel.innerHTML = "Range: " + newRange;
            rangeLabel.setAttribute('value', newRange);

            const stabLabel = document.getElementById('stability');
            let basestabT = stabLabel.getAttribute('value');
            let basestabVal = parseInt(basestabT);
            let stabChangeLabel = document.getElementById('stabilitychange4');
            let stabChangeT = stabChangeLabel.getAttribute('value');
            let stabChangeVal = parseInt(stabChangeT);
            let newstab = basestabVal + stabChangeVal;
            stabLabel.innerHTML = "Stability: " + newstab;
            stabLabel.setAttribute('value', newstab);

            const handlingLabel = document.getElementById('handling');
            let basehandlingT = handlingLabel.getAttribute('value');
            let basehandlingVal = parseInt(basehandlingT);
            let handlingChangeLabel = document.getElementById('handlingchange4');
            let handlingChangeT = handlingChangeLabel.getAttribute('value');
            let handlingChangeVal = parseInt(handlingChangeT);
            let newhandling = basehandlingVal + handlingChangeVal;
            handlingLabel.innerHTML = "Handling: " + newhandling;
            handlingLabel.setAttribute('value', newhandling);

            const reloadLabel = document.getElementById('reload');
            let basereloadT = reloadLabel.getAttribute('value');
            let basereloadVal = parseInt(basereloadT);
            let reloadChangeLabel = document.getElementById('reloadchange4');
            let reloadChangeT = reloadChangeLabel.getAttribute('value');
            let reloadChangeVal = parseInt(reloadChangeT);
            let newreload = basereloadVal + reloadChangeVal;
            reloadLabel.innerHTML = "Reload Speed: " + newreload;
            reloadLabel.setAttribute('value', newreload);

            const AALabel = document.getElementById('aa');
            let baseAAT = AALabel.getAttribute('value');
            let baseAAVal = parseInt(baseAAT);
            let AAChangeLabel = document.getElementById('aachange4');
            let AAChangeT = AAChangeLabel.getAttribute('value');
            let AAChangeVal = parseInt(AAChangeT);
            let newAA = baseAAVal + AAChangeVal;
            AALabel.innerHTML = "Aim Assistance: " + newAA;
            AALabel.setAttribute('value', newAA);

            const zoomLabel = document.getElementById('zoom');
            let basezoomT = zoomLabel.getAttribute('value');
            let basezoomVal = parseInt(basezoomT);
            let zoomChangeLabel = document.getElementById('zoomchange4');
            let zoomChangeT = zoomChangeLabel.getAttribute('value');
            let zoomChangeVal = parseInt(zoomChangeT);
            let newzoom = basezoomVal + zoomChangeVal;
            zoomLabel.innerHTML = "Zoom: " + newzoom;
            zoomLabel.setAttribute('value', newzoom);

            const recoilLabel = document.getElementById('recoil');
            let baserecoilT = recoilLabel.getAttribute('value');
            let baserecoilVal = parseInt(baserecoilT);
            let recoilChangeLabel = document.getElementById('recoilchange4');
            let recoilChangeT = recoilChangeLabel.getAttribute('value');
            let recoilChangeVal = parseInt(recoilChangeT);
            let newrecoil = baserecoilVal + recoilChangeVal;
            recoilLabel.innerHTML = "Recoil Direction: " + newrecoil;
            recoilLabel.setAttribute('value', newrecoil);

            const RPMLabel = document.getElementById('rpm');
            let baseRPMT = RPMLabel.getAttribute('value');
            let baseRPMVal = parseInt(baseRPMT);
            let RPMChangeLabel = document.getElementById('RPMchange4');
            let RPMChangeT = RPMChangeLabel.getAttribute('value');
            let RPMChangeVal = parseInt(RPMChangeT);
            let newRPM = baseRPMVal + RPMChangeVal;
            RPMLabel.innerHTML = "Rate of Fire: " + newRPM;
            RPMLabel.setAttribute('value', newRPM);

            const drawLabel = document.getElementById('draw');
            let basedrawT = drawLabel.getAttribute('value');
            let basedrawVal = parseInt(basedrawT);
            let drawChangeLabel = document.getElementById('drawchange4');
            let drawChangeT = drawChangeLabel.getAttribute('value');
            let drawChangeVal = parseInt(drawChangeT);
            let newdraw = basedrawVal + drawChangeVal;
            drawLabel.innerHTML = "Draw Time: " + newdraw;
            drawLabel.setAttribute('value', newdraw);

            const accuracyLabel = document.getElementById('accuracy');
            let baseaccuracyT = accuracyLabel.getAttribute('value');
            let baseaccuracyVal = parseInt(baseaccuracyT);
            let accuracyChangeLabel = document.getElementById('accuracychange4');
            let accuracyChangeT = accuracyChangeLabel.getAttribute('value');
            let accuracyChangeVal = parseInt(accuracyChangeT);
            let newaccuracy = baseaccuracyVal + accuracyChangeVal;
            accuracyLabel.innerHTML = "Accuracy: " + newaccuracy;
            accuracyLabel.setAttribute('value', newaccuracy);

            const magLabel = document.getElementById('magsize');
            let basemagT = magLabel.getAttribute('value');
            let basemagVal = parseInt(basemagT);
            let magChangeLabel = document.getElementById('magchange4');
            let magChangeT = magChangeLabel.getAttribute('value');
            let magChangeVal = parseInt(magChangeT);
            let newmag = basemagVal + magChangeVal;
            magLabel.innerHTML = "Magazine Size: " + newmag;
            magLabel.setAttribute('value', newmag);

            const resElementLabel = document.getElementById('reselchange');
            let reselementT = resElementLabel.getAttribute('value');
            let reselementVal = parseInt(reselementT);
            let reselChangeLabel = document.getElementById('reselchange4');
            let resElChangT = reselChangeLabel.getAttribute('value');
            let resElChangeVal = parseInt(resElChangT);
            let newResEl = reselementVal + resElChangeVal;
            resElementLabel.innerHTML = "Resonant Element Cost: " + newResEl;
            resElementLabel.setAttribute('value', newResEl);

            const drownedElementLabel = document.getElementById('drownedchange');
            let drownedelementT = drownedElementLabel.getAttribute('value');
            let drownedelementVal = parseInt(drownedelementT);
            let drownedelChangeLabel = document.getElementById('drownedchange4');
            let drownedElChangT = drownedelChangeLabel.getAttribute('value');
            let drownedElChangeVal = parseInt(drownedElChangT);
            let newdrownedEl = drownedelementVal + drownedElChangeVal;
            drownedElementLabel.innerHTML = "Drowned Element Cost: " + newdrownedEl;
            drownedElementLabel.setAttribute('value', newdrownedEl);

            const resalloyLabel = document.getElementById('resalloychange');
            let resalloytT = resalloyLabel.getAttribute('value');
            let resalloyVal = parseInt(resalloytT);
            let resalloyChangeLabel = document.getElementById('resalloychange4');
            let resalloyChangT = resalloyChangeLabel.getAttribute('value');
            let resalloyChangeVal = parseInt(resalloyChangT);
            let newresalloy = resalloyVal + resalloyChangeVal;
            resalloyLabel.innerHTML = "Resonant Alloy Cost: " + newresalloy;
            resalloyLabel.setAttribute('value', newresalloy);

            const ascendantalloyLabel = document.getElementById('ascendantchange');
            let ascendantalloytT = ascendantalloyLabel.getAttribute('value');
            let ascendantalloyVal = parseInt(ascendantalloytT);
            let ascendantalloyChangeLabel = document.getElementById('ascendantchange4');
            let ascendantalloyChangT = ascendantalloyChangeLabel.getAttribute('value');
            let ascendantalloyChangeVal = parseInt(ascendantalloyChangT);
            let newascendantalloy = ascendantalloyVal + ascendantalloyChangeVal;
            ascendantalloyLabel.innerHTML = "Ascendant Alloy Cost: " + newascendantalloy;
            ascendantalloyLabel.setAttribute('value', newascendantalloy);

            const glimmerLabel = document.getElementById('glimmerchange');
            let glimmertT = glimmerLabel.getAttribute('value');
            let glimmerVal = parseInt(glimmertT);
            let glimmerChangeLabel = document.getElementById('glimmerchange4');
            let glimmerChangT = glimmerChangeLabel.getAttribute('value');
            let glimmerChangeVal = parseInt(glimmerChangT);
            let newglimmer = glimmerVal + glimmerChangeVal;
            glimmerLabel.innerHTML = "Glimmer Cost: " + newglimmer;
            glimmerLabel.setAttribute('value', newglimmer);

            const ecoreLabel = document.getElementById('ecorechange');
            let ecoretT = ecoreLabel.getAttribute('value');
            let ecoreVal = parseInt(ecoretT);
            let ecoreChangeLabel = document.getElementById('ecorechange4');
            let ecoreChangT = ecoreChangeLabel.getAttribute('value');
            let ecoreChangeVal = parseInt(ecoreChangT);
            let newecore = ecoreVal + ecoreChangeVal;
            ecoreLabel.innerHTML = "Enhancement Core Cost: " + newecore;
            ecoreLabel.setAttribute('value', newecore);

            dStats.innerHTML = mStats.innerHTML;
            desktopCost.innerHTML = mobileCost.innerHTML;

        }
    })
}

function calculateTrait2(id) {
    $.ajax({
        url: '../php/tool_load_func.php',
        type: 'POST',
        dataType: 'json',
        data: "function=getTrait2Stats&selectedTrait2=" + id,
        success: function (response) {
            let options = response.toString();
            let rows = options.split(",");
            let mselect = document.getElementById('dump');
            let mStats = document.getElementById('mStats');
            let dStats = document.getElementById('dStats');
            let mobileCost = document.getElementById('mCosts');
            let desktopCost = document.getElementById('dCost');
            for (var i = 0; i < rows.length; i++) {
                let row = rows[i].toString();
                mselect.innerHTML = mselect.innerHTML + row;
                // dselect.innerHTML = dselect.innerHTML + row;
            }

            const impactLabel = document.getElementById('impact');
            let baseimpactT = impactLabel.getAttribute('value');
            let baseimpactVal = parseInt(baseimpactT);
            let impactChangeLabel = document.getElementById('impactchange5');
            let impactChangeT = impactChangeLabel.getAttribute('value');
            let impactChangeVal = parseInt(impactChangeT);
            let newimpact = baseimpactVal + impactChangeVal;
            impactLabel.innerHTML = "Impact: " + newimpact;

            const rangeLabel = document.getElementById('range');
            let baseRangeT = rangeLabel.getAttribute('value');
            let baseRangeVal = parseInt(baseRangeT);
            let rangeChangeLabel = document.getElementById('rangechange5');
            let rangeChangeT = rangeChangeLabel.getAttribute('value');
            let rangeChangeVal = parseInt(rangeChangeT);
            let newRange = baseRangeVal + rangeChangeVal;
            rangeLabel.innerHTML = "Range: " + newRange;

            const stabLabel = document.getElementById('stability');
            let basestabT = stabLabel.getAttribute('value');
            let basestabVal = parseInt(basestabT);
            let stabChangeLabel = document.getElementById('stabilitychange5');
            let stabChangeT = stabChangeLabel.getAttribute('value');
            let stabChangeVal = parseInt(stabChangeT);
            let newstab = basestabVal + stabChangeVal;
            stabLabel.innerHTML = "Stability: " + newstab;

            const handlingLabel = document.getElementById('handling');
            let basehandlingT = handlingLabel.getAttribute('value');
            let basehandlingVal = parseInt(basehandlingT);
            let handlingChangeLabel = document.getElementById('handlingchange5');
            let handlingChangeT = handlingChangeLabel.getAttribute('value');
            let handlingChangeVal = parseInt(handlingChangeT);
            let newhandling = basehandlingVal + handlingChangeVal;
            handlingLabel.innerHTML = "Handling: " + newhandling;

            const reloadLabel = document.getElementById('reload');
            let basereloadT = reloadLabel.getAttribute('value');
            let basereloadVal = parseInt(basereloadT);
            let reloadChangeLabel = document.getElementById('reloadchange5');
            let reloadChangeT = reloadChangeLabel.getAttribute('value');
            let reloadChangeVal = parseInt(reloadChangeT);
            let newreload = basereloadVal + reloadChangeVal;
            reloadLabel.innerHTML = "Reload Speed: " + newreload;

            const AALabel = document.getElementById('aa');
            let baseAAT = AALabel.getAttribute('value');
            let baseAAVal = parseInt(baseAAT);
            let AAChangeLabel = document.getElementById('aachange5');
            let AAChangeT = AAChangeLabel.getAttribute('value');
            let AAChangeVal = parseInt(AAChangeT);
            let newAA = baseAAVal + AAChangeVal;
            AALabel.innerHTML = "Aim Assistance: " + newAA;

            const zoomLabel = document.getElementById('zoom');
            let basezoomT = zoomLabel.getAttribute('value');
            let basezoomVal = parseInt(basezoomT);
            let zoomChangeLabel = document.getElementById('zoomchange5');
            let zoomChangeT = zoomChangeLabel.getAttribute('value');
            let zoomChangeVal = parseInt(zoomChangeT);
            let newzoom = basezoomVal + zoomChangeVal;
            zoomLabel.innerHTML = "Zoom: " + newzoom;

            const recoilLabel = document.getElementById('recoil');
            let baserecoilT = recoilLabel.getAttribute('value');
            let baserecoilVal = parseInt(baserecoilT);
            let recoilChangeLabel = document.getElementById('recoilchange5');
            let recoilChangeT = recoilChangeLabel.getAttribute('value');
            let recoilChangeVal = parseInt(recoilChangeT);
            let newrecoil = baserecoilVal + recoilChangeVal;
            recoilLabel.innerHTML = "Recoil Direction: " + newrecoil;

            const RPMLabel = document.getElementById('rpm');
            let baseRPMT = RPMLabel.getAttribute('value');
            let baseRPMVal = parseInt(baseRPMT);
            let RPMChangeLabel = document.getElementById('RPMchange5');
            let RPMChangeT = RPMChangeLabel.getAttribute('value');
            let RPMChangeVal = parseInt(RPMChangeT);
            let newRPM = baseRPMVal + RPMChangeVal;
            RPMLabel.innerHTML = "Rate of Fire: " + newRPM;

            const drawLabel = document.getElementById('draw');
            let basedrawT = drawLabel.getAttribute('value');
            let basedrawVal = parseInt(basedrawT);
            let drawChangeLabel = document.getElementById('drawchange5');
            let drawChangeT = drawChangeLabel.getAttribute('value');
            let drawChangeVal = parseInt(drawChangeT);
            let newdraw = basedrawVal + drawChangeVal;
            drawLabel.innerHTML = "Draw Time: " + newdraw;

            const accuracyLabel = document.getElementById('accuracy');
            let baseaccuracyT = accuracyLabel.getAttribute('value');
            let baseaccuracyVal = parseInt(baseaccuracyT);
            let accuracyChangeLabel = document.getElementById('accuracychange5');
            let accuracyChangeT = accuracyChangeLabel.getAttribute('value');
            let accuracyChangeVal = parseInt(accuracyChangeT);
            let newaccuracy = baseaccuracyVal + accuracyChangeVal;
            accuracyLabel.innerHTML = "Accuracy: " + newaccuracy;

            const magLabel = document.getElementById('magsize');
            let basemagT = magLabel.getAttribute('value');
            let basemagVal = parseInt(basemagT);
            let magChangeLabel = document.getElementById('magchange5');
            let magChangeT = magChangeLabel.getAttribute('value');
            let magChangeVal = parseInt(magChangeT);
            let newmag = basemagVal + magChangeVal;
            magLabel.innerHTML = "Magazine Size: " + newmag;

            const resElementLabel = document.getElementById('reselchange');
            let reselementT = resElementLabel.getAttribute('value');
            let reselementVal = parseInt(reselementT);
            let reselChangeLabel = document.getElementById('reselchange5');
            let resElChangT = reselChangeLabel.getAttribute('value');
            let resElChangeVal = parseInt(resElChangT);
            let newResEl = reselementVal + resElChangeVal;
            resElementLabel.innerHTML = "Resonant Element Cost: " + newResEl;

            const drownedElementLabel = document.getElementById('drownedchange');
            let drownedelementT = drownedElementLabel.getAttribute('value');
            let drownedelementVal = parseInt(drownedelementT);
            let drownedelChangeLabel = document.getElementById('drownedchange5');
            let drownedElChangT = drownedelChangeLabel.getAttribute('value');
            let drownedElChangeVal = parseInt(drownedElChangT);
            let newdrownedEl = drownedelementVal + drownedElChangeVal;
            drownedElementLabel.innerHTML = "Drowned Element Cost: " + newdrownedEl;

            const resalloyLabel = document.getElementById('resalloychange');
            let resalloytT = resalloyLabel.getAttribute('value');
            let resalloyVal = parseInt(resalloytT);
            let resalloyChangeLabel = document.getElementById('resalloychange5');
            let resalloyChangT = resalloyChangeLabel.getAttribute('value');
            let resalloyChangeVal = parseInt(resalloyChangT);
            let newresalloy = resalloyVal + resalloyChangeVal;
            resalloyLabel.innerHTML = "Resonant Alloy Cost: " + newresalloy;

            const ascendantalloyLabel = document.getElementById('ascendantchange');
            let ascendantalloytT = ascendantalloyLabel.getAttribute('value');
            let ascendantalloyVal = parseInt(ascendantalloytT);
            let ascendantalloyChangeLabel = document.getElementById('ascendantchange5');
            let ascendantalloyChangT = ascendantalloyChangeLabel.getAttribute('value');
            let ascendantalloyChangeVal = parseInt(ascendantalloyChangT);
            let newascendantalloy = ascendantalloyVal + ascendantalloyChangeVal;
            ascendantalloyLabel.innerHTML = "Ascendant Alloy Cost: " + newascendantalloy;

            const glimmerLabel = document.getElementById('glimmerchange');
            let glimmertT = glimmerLabel.getAttribute('value');
            let glimmerVal = parseInt(glimmertT);
            let glimmerChangeLabel = document.getElementById('glimmerchange5');
            let glimmerChangT = glimmerChangeLabel.getAttribute('value');
            let glimmerChangeVal = parseInt(glimmerChangT);
            let newglimmer = glimmerVal + glimmerChangeVal;
            glimmerLabel.innerHTML = "Glimmer Cost: " + newglimmer;


            const ecoreLabel = document.getElementById('ecorechange');
            let ecoretT = ecoreLabel.getAttribute('value');
            let ecoreVal = parseInt(ecoretT);
            let ecoreChangeLabel = document.getElementById('ecorechange5');
            let ecoreChangT = ecoreChangeLabel.getAttribute('value');
            let ecoreChangeVal = parseInt(ecoreChangT);
            let newecore = ecoreVal + ecoreChangeVal;
            ecoreLabel.innerHTML = "Enhancement Core Cost: " + newecore;

            dStats.innerHTML = mStats.innerHTML;
            desktopCost.innerHTML = mobileCost.innerHTML;

        }
    })
}