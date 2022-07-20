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

function getGalleryImages(val) {
    var res = "";
    val.images.forEach(function(value, index) {
        res += `<img src="asset/gallery/${val.title}/${val.images[index]}" style="height: 300px; width: auto;" alt="..." class="img-thumbnail">`
    });
    return res;
}
//usage:
readTextFile("./data/gallery.json", function(text){
    var cres = "";
    var data = JSON.parse(text);
    
    for(var index in data) {
        var value = data[index];
        cres+=`
        <div class="card">
            <div id="btn-container-${index}" class="card-header d-flex justify-content-center">
                <button class="btn btn-light" data-toggle="collapse" data-target="#collapse${index}" aria-expanded="false" aria-controls="${index}">
                    ${value.title}
                </button>
            </div>
            <div id="collapse${index}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div style="display: flex; justify-content: center; flex-wrap: wrap;">
                    ${getGalleryImages(value)}
                </div>
            </div>
        </div>
        `
    }

    cres = 
    `
        <div id="accordion">
            ${cres}
        </div>
    `
    document.getElementsByClassName("galleryDiv")[0].insertAdjacentHTML('beforeend', cres);
});