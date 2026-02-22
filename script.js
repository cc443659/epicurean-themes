import * as NavbarToggle from "./scripts/js/navbar-toggle.js";

window.onload = () => {
    let navToggle = document.querySelector("#nav-toggle");
    let navBar = document.querySelector("#navbar");
    let article = document.querySelector("article");
    let footer = document.querySelector("footer");
    
    console.log(navToggle)
    console.log(navBar)
    
    navToggle.onclick = () => {
        console.log("click logged")
        NavbarToggle.navBarToggleHandler(navBar, navToggle, article, footer);
    }
}
