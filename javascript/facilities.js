function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    }
    rawFile.send(null);
}

//usage:
readTextFile("./data/facilities.json", function(text){

    var cres = "";
    var data = JSON.parse(text);
    for(var index in data) {
        var value = data[index];
        cres+=
        `
            <div style="width: 25rem;" class="card m-2">
                <div class="facilityImage">
                    <img class="card-img-top" src="asset/facilities/${value.image}" alt="${value.title}" >
                </div>
                <div class="card-body d-flex justify-content-center align-items-center" style="background-color: #21201E; color: white; align-items: center;">
                    <h4 class="card-title">${value.title}</h4>
                </div>
            </div>
        `
    }
    document.getElementsByClassName("facilitiesDiv")[0].insertAdjacentHTML('beforeend', cres);
});
