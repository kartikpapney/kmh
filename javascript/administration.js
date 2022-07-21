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

function getAdministration(data, start, end) {
    var res = "";
    for(var idx=start; idx<=end; idx++) {
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
                    <div class="card-body d-flex row text-center">
                        <p><mark style="background-color: #E6E6E6; border-radius: 5px;">${ob.designation}</mark></p>
                        <p>${ob.contact}</p>
                    </div>
                </div>
            `
    }
    return res;
}
readTextFile("./data/administration.json", function(text){
    var data = JSON.parse(text);  
    var cres = `<nav>
        <div class="nav nav-tabs d-flex justify-content-center" id="nav-tab" role="tablist" style="background-color: white;">
            <button style="color: #21201E;" class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-w" type="button" role="tab" aria-controls="nav-w" aria-selected="true">Warden</button>
            <button style="color: #21201E;" class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-p" type="button" role="tab" aria-controls="nav-p" aria-selected="false">Prefect</button>
            <button style="color: #21201E;" class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-ap" type="button" role="tab" aria-controls="nav-ap" aria-selected="false">Assistant Prefect</button>
            <button style="color: #21201E;" class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-os" type="button" role="tab" aria-controls="nav-os" aria-selected="false">Staff</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-w" role="tabpanel" aria-labelledby="nav-w-tab">
            <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                ${getAdministration(data, 0, 1)}
            </div>
        </div>
        <div class="tab-pane fade" id="nav-p" role="tabpanel" aria-labelledby="nav-p-tab">
            <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                ${getAdministration(data, 2, 2)}
            </div>
        </div>
        <div class="tab-pane fade" id="nav-ap" role="tabpanel" aria-labelledby="nav-ap-tab">
            <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                ${getAdministration(data, 3, 8)}
            </div>
        </div>
        <div class="tab-pane fade" id="nav-os" role="tabpanel" aria-labelledby="nav-os-tab">
            <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                ${getAdministration(data, 9, 13)}
            </div>
        </div>
    </div>`
    document.getElementById("administrationDiv").insertAdjacentHTML ('beforeend',
        cres
    )
});