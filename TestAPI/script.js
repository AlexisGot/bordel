fetch("http://sjtmvc.test/mvc/index.php?controller=message&action=APIfindAllMsg")
    .then(rep => {
        rep.json().then(
            data => {
                const chatBox = document.select("#ChatBox");
                const parag = document.createElement("p");
                parag.innerHtml = "<span>"+single.pseudo+" a dit : </span>"+single.contenu;
                chatBox.appendChild(parag);
                });
            }
        )
    