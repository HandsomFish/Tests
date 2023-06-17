const menu = document.querySelector(".navbar");
const description = document.querySelector(".description");
const navButton = document.querySelector(".nav-button");


function toggleMenu() {
    if (menu.classList.contains("nav-open")) 
    {
        menu.classList.remove("nav-open");
        description.classList.remove("description-clicked");
        
    } else 
    {
        menu.classList.add("nav-open");
        description.classList.add("description-clicked");
    }

}

navButton.addEventListener("click", toggleMenu);
