
        
// SKROLL Attendre que le DOM soit chargé
document.addEventListener("DOMContentLoaded", function() {
  // Initialiser Skrollr
  var skrollrInstance = skrollr.init();
});

/////////////////////////////////////////////////////////
//Rajout de div des que le scroll touhce le bas de l'ecran
const main = document.querySelector('.main');
const divSection = document.querySelectorAll('.presentation1');
console.log(divSection)

window.addEventListener('scroll', () => {

    //console.log(document.documentElement);
    const {scrollTop, scrollHeight, clientHeight} = document.documentElement;
    //console.log(scrollTop,scrollHeight,clientHeight);

   if (scrollHeight === scrollTop + clientHeight){


/*              const newSection = document.createElement('section');
        newSection.classList.add('presentation1');
        
        const img = document.createElement('img');
        img.src = 'https://randomuser.me/api/portraits/men/32.jpg';
        img.alt = 'portrait';
        img.setAttribute('data-800', 'transform: translateX(0%); opacity:1');
        img.setAttribute('data-1000', 'transform: translateX(50%); opacity:0');

        newSection.appendChild(img)
        main.appendChild(newSection) */

        const divSections = document.querySelectorAll('.presentation1');

        //console.log(divSection)

        divSections.forEach((section, index) => {

            const firstDataValue = scrollHeight;
            const secondDataValue = scrollHeight + 400;
            
            // Cloner la section
            const clonedSection = section.cloneNode(true);

            // Mettre à jour les valeurs des attributs "data-" du clone
            clonedSection.setAttribute(`data-${firstDataValue}`, 'transform: translateX(0%); opacity:1');
            clonedSection.setAttribute(`data-${firstDataValue}`, 'transform: translateX(50%); opacity:1');
            clonedSection.setAttribute(`data-${secondDataValue}`, 'transform: translateX(0%); opacity:1');

            // Ajouter le clone à la balise main
            main.appendChild(clonedSection);
        });


   }
}) 
