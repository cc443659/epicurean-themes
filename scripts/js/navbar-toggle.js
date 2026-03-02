export function navBarToggleHandler (navBar, navToggle, article) {
    console.log("made it!");
    console.log(navBar.style.display);
    if (navBar.className == "nav-enabled" || !navBar.className) {
        navBar.className = "nav-disabled";
        navToggle.className = "nav-disabled";
        article.className = "nav-disabled";

        console.log("nav hidden");
    } else if (navBar.className == "nav-disabled") {
        navBar.className = "nav-enabled";
        navToggle.className = "nav-enabled";
        article.className = "nav-enabled";

        console.log("nav shown");
    }
};