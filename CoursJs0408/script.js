//Code pour éviter de supprimer et remplacer quelques choses déjà présent
const nM = document.querySelector('h1');

// nM.addEventListener("click",()=>{
//    if( nM.textContent != "Bonjour"){
//     nM.innerText = "Bonjour"
//     alert("Ratio")
//    }
// });

nM.addEventListener("click", () => {
    if (!document.querySelector("div")) {
        let modale = document.createElement("div")
        modale.id = "modale"
        let parag = document.createElement("p")
        parag.innerText = "Ratio 🤡"
        let voile = document.createElement("div")
        voile.id = "voile"
        document.body.appendChild(voile);
        voile.appendChild(modale);
        modale.appendChild(parag);
        voile.addEventListener("click", ()=>{
            voile.remove()
            modale.remove()
        })
    }
})
