import './bootstrap';
// Import our custom CSS
import '../sass/app.scss'
// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

let setConfirmModal = (e) => {
    console.log("hello there")
    let el = e.currentTarget
    let url = el.dataset.url
    let confirm = el.dataset.confirm

    document.querySelector("#confirm_text").innerHTML = confirm
    let link = document.querySelector("#confirm_delete_form")
    link.setAttribute("action", url)
}

let delete_buttons = document.getElementsByClassName("js-delete")
Array.from(delete_buttons).forEach(function(element) {
    element.addEventListener("click", setConfirmModal)
});