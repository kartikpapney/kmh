
const URL = "https://script.google.com/macros/s/AKfycbx49EiKQQKoyKEJruUWV0_d8SS5O6_Cf3-oQFSKfH4FpN181rf7Kpj_p3HQ0ccDQ5K6Lw/exec";

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
    success: function(res) {
        var cres = "";
        for (const item in res) {
            var mres = "";
            mres += 
            `
                <figure class="text-center" id="${item}">
                    <blockquote class="blockquote">
                        <p>${item}</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        <cite title="Source Title">Kanchenjungha Men's Hostel</cite>
                    </figcaption>
                </figure>
            `
            const wing = res[item];
            wing.forEach(value => {
                mres += `<tr>
                    <td>${value.roomNo}</td>
                    <td>${value.name}</td>
                    <td>${value.rollNo}</td>
                    <td>${value.program}</td>
                </tr>`
            });
            cres+=`<table class="table table-striped" style="font-size: 10px;">
                    <thead>  
                    <tr style="background-color: #21201E; color: white;">
                        <th scope="col">ROOM NO</th>
                        <th scope="col">NAME </th>
                        <th scope="col">ROLL NO</th>
                        <th scope="col">DEPTT.</th>
                    </tr>
                    </thead>
                    <tbody>
                        ${mres}
                    </tbody>
                </table>`
        }
        
        fn(cres);
    }
})


