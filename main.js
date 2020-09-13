'use strict' ;

let weeks_ul = document.getElementById('weeks_ul');
for(let i = 0; i < (7 * 6); i++) {
    let li = document.createElement('li');
    li.textContent = (i + 1);
    weeks_ul.appendChild(li);
}