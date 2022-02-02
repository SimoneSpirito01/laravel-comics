require('./bootstrap');

import '@fortawesome/fontawesome-free/css/all.css'
import '@fortawesome/fontawesome-free/js/all.js'

const links = document.getElementsByClassName('link');

switch(document.title) {
    case 'DC Comics':
        links[0].classList.add('active');
        break;
    case 'DC Comics - Movies':
        links[1].classList.add('active');
        break;
    case 'DC Comics - TV':
        links[2].classList.add('active');
}


