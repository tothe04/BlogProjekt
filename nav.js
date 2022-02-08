fetch('navBar.html')
    .then( async htmlold => htmlold.text())
    .then( result => {
        let oldElem = document.querySelector("script#replaceWithNavBar");
        let newElem = document.createElement("div");
        newElem.innerHTML = result;
        oldElem.parentNode.replaceChild(newElem, oldElem);
    })
