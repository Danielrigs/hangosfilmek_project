async function youtubeLeker(){
    let feccs = await fetch("leker.php/youtube");
    let Jason = await feccs.json();

    feldolgoz(Jason,"Napi 10 óra filmnézéssel ennyi nap szükséges, hogy az összes filmet lásd:");
}

async function nemtudniLeker(){
    let feccs = await fetch("leker.php/nemtudni");
    let Jason = await feccs.json();

    feldolgoz(Jason,"Ennyi filmnek nem ismert a hossza:");
}

async function WWIILeker(){
    let feccs = await fetch("leker.php/wwii");
    let Jason = await feccs.json();

    feldolgoz(Jason,"Ennyi filmet gyártottak a II. világháború alatt:");
}

$(function(){
    youtubeLeker();
    nemtudniLeker();
    WWIILeker();
});

function feldolgoz(mit,szoveg){
    var li = $("<li></li>").addClass("list-group-item d-flex justify-content-between align-items-center").text(szoveg);

    var badge = $("<span></span>").addClass("badge bg-primary rounded-pill").text(mit[0].szam);

    $(li).append(badge);

    $("ul.list-group").append(li);
}