const container = document.querySelector('.annonces-container');
let index = 12;

window.addEventListener('scroll', () => {

    const {scrollTop, scrollHeight, clientHeight} = document.documentElement;
    // console.log(scrollTop, scrollHeight, clientHeight);
 

    if(clientHeight + scrollTop >= scrollHeight - 20) {
        // console.log("Création !");
        addStuff(3);
    }

})

function addStuff(nb){

    for(let i = 0; i < nb; i++) {

        index++;
        const newItem = document.createElement('div');
        newItem.className = "grid-item";
        const newImg = document.createElement('img');
        newImg.src = `https://loremflickr.com/320/240?random=${index}`
        newItem.appendChild(newImg);
        container.appendChild(newItem);

    }
}