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
readTextFile("./data/carousel.json", function(text){

    var cres = "";
    var data = JSON.parse(text);
    for(var index in data) {
        var value = data[index];
        if(index == 0) {
            cres += `
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./asset/carousel/${value}" alt="Image">
                </div>
            `
        } else {
            cres += `
                <div class="carousel-item">
                    <img class="d-block w-100" src="./asset/carousel/${value}" alt="Image">
                </div>
            `
        }
    }
    document.getElementsByClassName("carousel-inner")[0].insertAdjacentHTML('beforeend', cres);
});
