import { Tooltip, Toast,Modal,Offcanvas} from 'bootstrap';
const dropdowns = document.querySelectorAll(".dropdown")
for (const dropdown of dropdowns) {
    dropdown.addEventListener('mouseenter', function(event) {
        let target=event.target
        let dropdownToggle=target.querySelector('.dropdown-toggle')
        let dropdownMenu=target.querySelector('.dropdown-menu')

        target.classList.add('show');
        dropdownToggle.classList.add('show');
        dropdownMenu.classList.add('show');
    })

    dropdown.addEventListener('mouseleave', function(event) {
        let target=event.target
        let dropdownToggle=target.querySelector('.dropdown-toggle')
        let dropdownMenu=target.querySelector('.dropdown-menu')

        target.classList.remove('show');
        dropdownToggle.classList.remove('show');
        dropdownMenu.classList.remove('show');
    })
}

document.addEventListener('DOMContentLoaded', function () {
   

});




