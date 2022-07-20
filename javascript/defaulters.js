
const URL = "https://script.googleusercontent.com/a/macros/tezu.ac.in/echo?user_content_key=p156JXp8oGEbeuuTJpwDiYxMDoWiPkugLuu-6_d9lvqARglUkQxSYhCL1GD6rUmJJkxDJyf9uoks7IWG8aF3owpwizltLTDWm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_nRPgeZU6HP-Eb_JVZ_y0oSHaYKxUla6Ah3nouIf-Jx-ABkjhQ4g3L_apja273KrMd3ISup9wlcdnTzIkuxXqqNC237sATWWcsf6vi5F_2LaZCIExPHJbz_lF-r3pinlhpX6tX3KFDfw&lib=M6JAvx8nyu8NjjjP7Z_dBR9CxKo-cI34c";

function fn(cres) {
    var element = document.getElementById("spinnerDiv");
    element.style.display="none";
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


