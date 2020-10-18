let accountBtn = document.querySelector('.account-btn');
let dropdown = document.querySelector('.account-dropdown');

function clickDropdown(){
    if(parseInt(dropdown.style.height) === 0){
        dropdown.style.height = '92px'
        dropdown.style.padding = '14px 0'
    } else {
        dropdown.style.height = '0'
        dropdown.style.padding = '0'
    }
};

accountBtn.onclick = clickDropdown

window.addEventListener('click', function(event) {
    if (!dropdown.contains(event.target) && !accountBtn.contains(event.target) ) {
        dropdown.style.height = '0'
        dropdown.style.padding = '0'
    }
})