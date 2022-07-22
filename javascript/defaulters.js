
const URL = "https://script.google.com/macros/s/AKfycbx9K0Fe8MooqGNUp3Uqbg6wqKpKkJEhKljneGRHouU8XeZ3EfN9H2Ys_DYPO27PujuKmg/exec";

function fn(cres) {
    var element = document.getElementById("spinnerDiv");
    element.parentNode.removeChild(element);
    var res = document.getElementsByClassName("m-section");
    res[0].insertAdjacentHTML ('beforeend',
        `
        <div data-bs-spy="scroll" data-bs-target="#wings-list" data-bs-offset="0" class="scrollspy-example container" tabindex="0">
            ${cres}
        </div>
        
        `
    )
    
}
$.ajax({
    url: URL,
    type: 'GET',
    dataType: 'json',
    success: function(defaulters) {
            var cres = "";
            defaulters.forEach(value => {
                cres += `<tr>
                    <td>${value.roomNo}</td>
                    <td>${value.name}</td>
                    <td>${value.rollNo}</td>
                    <td>${value.remarks}</td>
                </tr>`
            });
            cres=
            `<table class="table table-striped" style="font-size: 10px;">
                <thead>  
                <tr style="background-color: #21201E; color: white;">
                    <th scope="col">ROOM NO</th>
                    <th scope="col">NAME </th>
                    <th scope="col">ROLL NO</th>
                    <th scope="col">REMARKS</th>
                </tr>
                </thead>
                <tbody>
                    ${cres}
                </tbody>
            </table>`;
        
        fn(cres);
    }
})


