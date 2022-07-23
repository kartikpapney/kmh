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

function getAchievements(value) {
  var res = `<ul class="list-unstyled">`;
  value.forEach(function(v) {
    res += `<li class="list-inline-item" style="margin: 8px;"><mark style="background-color: #E6E6E6; border-radius: 5px;">${v}</mark></li>`
  })
  res+=`</ul>`
  return res;
}
//usage:
// #f8f9fa
readTextFile("./data/studentsAchievements.json", function(text){
    var res = "";
    var data = JSON.parse(text);
    console.log(data);
    data.reverse().forEach(function(value, index) {
        res += `
        <div class="card mb-3" style="width: 25rem;">
          <img class="card-img-top" src="./asset/studentsAchievements/${value.image}" alt="Card image cap">
          <h3 class="card-header d-flex justify-content-center" style="background-color: #21201E; color: white;">${value.name}</h3>
          <div class="card-body">
            <p class="card-text">${getAchievements(value.achievements)}</p>
          </div>
        </div>`
    });

    var el = document.getElementsByClassName("achievementsDiv");
    el[0].insertAdjacentHTML ('beforeend',
        res
    );
});