{"changed":true,"filter":false,"title":"script.js","tooltip":"/Portforio/js/script.js","value":"/*global $*/\n$(function(){\n    const moji = $('h1').text();\n    $('h1').text('');\n    let count = 0;\n    const text_animation =() =>{\n        let word =moji.substr(count, 1);\n        console.log(word);\n        let span = $('<span>', {text: word});\n        $('h1').append(span);\n        count++;\n        if(count === moji.length){\n            clearInterval(timer);\n        }\n    }\n    \n    const timer = setInterval(text_animation, 1000);\n})","undoManager":{"mark":4,"position":6,"stack":[[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["/* global $*/",""],"id":1}],[{"start":{"row":1,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["$('.nav_toggle').on('click', function () {","  $('.nav_toggle, .nav').toggleClass('show');","});",""],"id":2}],[{"start":{"row":4,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":[".nav_toggle.show i:nth-child(1) {","  transform: translateY(10px) rotate(-45deg);","}",".nav_toggle.show i:nth-child(2) {","  opacity: 0;","}",".nav_toggle.show i:nth-child(3) {","  transform: translateY(-12px) rotate(45deg);","}",""],"id":3}],[{"start":{"row":4,"column":0},"end":{"row":13,"column":0},"action":"remove","lines":[".nav_toggle.show i:nth-child(1) {","  transform: translateY(10px) rotate(-45deg);","}",".nav_toggle.show i:nth-child(2) {","  opacity: 0;","}",".nav_toggle.show i:nth-child(3) {","  transform: translateY(-12px) rotate(45deg);","}",""],"id":4}],[{"start":{"row":1,"column":0},"end":{"row":4,"column":0},"action":"remove","lines":["$('.nav_toggle').on('click', function () {","  $('.nav_toggle, .nav').toggleClass('show');","});",""],"id":5}],[{"start":{"row":1,"column":0},"end":{"row":18,"column":2},"action":"insert","lines":["/*global $*/","$(function(){","    const moji = $('h1').text();","    $('h1').text('');","    let count = 0;","    const text_animation =() =>{","        let word =moji.substr(count, 1);","        console.log(word);","        let span = $('<span>', {text: word});","        $('h1').append(span);","        count++;","        if(count === moji.length){","            clearInterval(timer);","        }","    }","    ","    const timer = setInterval(text_animation, 1000);","})"],"id":6}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["/* global $*/",""],"id":7}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1626148554806}