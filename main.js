var counter = document.querySelector('.count')
var projectText = document.querySelector('.project-count')
let count = 1
setInterval(() => {
    if (count < 350) {  
    count++
    counter.innerText = count + "+"
    }
},12)

setTimeout(() =>{
    projectText.innerText = "Projects"
},3500)

var counter1 = document.querySelector('.count1')
var projectText1 = document.querySelector('.project-count1')
let count1 = 1
setInterval(() => {
    if (count1 < 335) {  
    count1++
    counter1.innerText = count1 + "+"
    }
},12)

setTimeout(() =>{
    projectText1.innerText = "Members"
},3500)

var counter2 = document.querySelector('.count2')
var projectText2 = document.querySelector('.project-count2')
let count2 = 1
setInterval(() => {
    if (count2 < 150) {  
    count2++
    counter2.innerText = count2 + "+"
    }
},12)

setTimeout(() =>{
    projectText2.innerText = "Extra"
},3500)