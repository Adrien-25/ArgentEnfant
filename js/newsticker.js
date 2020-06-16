// let i = 0;
let w = 0;
let text = [
    'Lorem ipsum dummy text blabla',
    'bia sdsm aamd'
];
let txt = 'Lorem ipsum dummy text blabla';
let speed = 200;
let container = document.getElementById("typewriter-suffix");


window.addEventListener("load", function(){

    function TypeWriter(selector, phrases, interval, loop) {
        var target = document.querySelector(selector);// HTML element that will contain the text
        if (!target) throw new Error ("Selector '"+selector+"' is empty");

        var interval = interval || 100;//time between each letters
        var loop = loop || false;
        var pauseTime = 1000; // time between each phrase
        var Typer = function() {
            if(this.pointer === 0) this.target.innerHTML = '';
            if(this.target.innerHTML !== this.phrase) {
                this.target.innerHTML += this.phrase.charAt(this.pointer++);
            } else {
                clearInterval(this.intervalObject);
                if (this.callbackOnEnd) {
                    setTimeout(this.callbackOnEnd, pauseTime);
                    console.log(this.callbackOnEnd)
                }
            }
        };
        var setupTyper = function (phrase, callback) {
            var typerObject = { target: target,
                                phrase: phrase,
                                pointer: 0,
                                callbackOnEnd : callback };
            return function() { typerObject.intervalObject = setInterval(Typer.bind(typerObject), interval); };
        };
        phrases.reverse().reduce(
            function(callback, phrase) { return setupTyper(phrase, callback);}, // the reducer function always return a Typer
            loop ? function(){ TypeWriter(selector, phrases.reverse(), interval, loop) } : false  //the initial accumulator value
        )();
    }

    TypeWriter("#notepad", ['comment ça va les mauristes?', 'la pèche dans le confinement ?', '3ème phrase', '4ème phrase'], 80, true);

    // text.forEach(line => {
    //     typeWriter(line);
    //     if(container.innerHTML.length === txt.length){
    //         i = 0;
    //         removeTypeWriter();
    //     }
    // });

    // async function typeWriter(txt){
    //     let typing = (i) => {
    //         return new Promise((resolve) => {
    //             setTimeout(() => {
    //                 resolve(txt.charAt(i))
    //             }, speed);
    //         })
    //     }

    //     for( let i = 0; i < txt.length; i++){
    //     let element = await typing(i);
    //         console.log('Contenu: ' + container.innerHTML);
    //         console.log('Texte final attendu: ' + txt);
    //         container.innerHTML += element;
    //     }
    // }

    // async function removeTypeWriter(){
    //     let removing = () => {
    //         return new Promise((resolve) => {
    //             setTimeout(() => {
    //                 resolve(container.innerHTML.slice(0, container.innerHTML.length-1))
    //             }, speed);
    //         })
    //     }

    //     if(container.innerHTML.length > 0){
    //         removeElement = await removing();
    //         container.innerHTML = removeElement;
    //         console.log(container.innerHTML = removeElement);
    //         removeTypeWriter();
    //     }
    // }
// ///////////////////////////////////////////////////////////////////////////////////

    // function typeWriter(txt) {
        
        // if (i < txt.length) {
            // console.log('Contenu: ' + container.innerHTML);
            // console.log('Texte final attendu: ' + txt);
            // await delay(500);
            // console.log(container.innerHTML += txt.charAt(i));
            // i++;
            // setTimeout(typeWriter.bind(null, txt), speed);
            // if(container.innerHTML.length === txt.length){
                // setTimeout(removeTypeWriter, 1000);
    //         }
    //     }
    // }

    // function removeTypeWriter(){
    //     console.log('Taille: ' + container.innerHTML.length);
    //     if(container.innerHTML.length > 0){
    //         console.log('Résultat: ' + container.innerHTML.slice(0, container.innerHTML.length-1));
    //         container.innerHTML = container.innerHTML.slice(0, container.innerHTML.length-1);
    //         w++;
    //         setTimeout(removeTypeWriter, speed);
    //     }
    // }

    // function sleep(milliseconds) {
    //     const date = Date.now();
    //     let currentDate = null;
    //     do {
    //         currentDate = Date.now();
    //     } while (currentDate - date < milliseconds);
    // }

    // function delay(n) {  
    //     n = n || 2000;
    //     return new Promise(()=> {
    //       setTimeout(() => {
    //         typeWriter(txt);
    //       }, n);
    //     });
    //   }

    // for( let x = 0, count = text.length; x < count; x++){
    //     typeWriter(text[x]);
    // }

    // while (w < text.length) {
    //     typeWriter(text[w]);
    //     w++;
    // }
    
    // text.forEach(element => {
    //     typeWriter(element)
    // });
});