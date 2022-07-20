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

readTextFile("./data/administration.json", function(text){
    var res = "";
    var data = JSON.parse(text);
    for(var idx=0; idx<data.length; idx++) {
        var ob = data[idx];
        res +=
        `
                <div style="width: 20rem;" class="card m-2">
                    <div class="image">
                        <img class="card-img-top" src="asset/administration/${ob.image}" alt="Senior Warden">
                    </div>
                    <div class="card-header d-flex justify-content-center align-items-center" style="background-color: #21201E; color: white; align-items: center;">
                        <h4 class="card-title">${ob.name}</h4>
                    </div>
                    <div class="card-body d-flex text-center">
                        <p>${ob.designation}, ${ob.contact}</p>
                    </div>
                </div>
            `
    }
    var cres = 

    `
        <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
            ${res}
        </div>
    `   
    document.getElementById("administrationDiv").insertAdjacentHTML ('beforeend',
        cres
    )
});