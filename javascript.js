if (document.getElementById("icon")) { // Make sure the navbar has been generated before trying to add any actions to the icon
    document.getElementById("icon").addEventListener("click",function () { // When we click on the icon, do this...
        var element = document.getElementById("navbar");
        if (element.className === "navbar") {
            element.className += " responsive"; // Add the responsive class to the navbar, if it isn't there already
        } else {
            element.className = "navbar"; // If it is there already, we want to remove it, this is basically a toggle function.
        }
});}; // Let CSS handle the rest!
