{"filter":false,"title":"script.js","tooltip":"/Portfolio/js/script.js","undoManager":{"mark":29,"position":29,"stack":[[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["/* global $*/",""],"id":1}],[{"start":{"row":1,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["$('.nav_toggle').on('click', function () {","  $('.nav_toggle, .nav').toggleClass('show');","});",""],"id":2}],[{"start":{"row":4,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":[".nav_toggle.show i:nth-child(1) {","  transform: translateY(10px) rotate(-45deg);","}",".nav_toggle.show i:nth-child(2) {","  opacity: 0;","}",".nav_toggle.show i:nth-child(3) {","  transform: translateY(-12px) rotate(45deg);","}",""],"id":3}],[{"start":{"row":4,"column":0},"end":{"row":13,"column":0},"action":"remove","lines":[".nav_toggle.show i:nth-child(1) {","  transform: translateY(10px) rotate(-45deg);","}",".nav_toggle.show i:nth-child(2) {","  opacity: 0;","}",".nav_toggle.show i:nth-child(3) {","  transform: translateY(-12px) rotate(45deg);","}",""],"id":4}],[{"start":{"row":1,"column":0},"end":{"row":4,"column":0},"action":"remove","lines":["$('.nav_toggle').on('click', function () {","  $('.nav_toggle, .nav').toggleClass('show');","});",""],"id":5}],[{"start":{"row":1,"column":0},"end":{"row":18,"column":2},"action":"insert","lines":["/*global $*/","$(function(){","    const moji = $('h1').text();","    $('h1').text('');","    let count = 0;","    const text_animation =() =>{","        let word =moji.substr(count, 1);","        console.log(word);","        let span = $('<span>', {text: word});","        $('h1').append(span);","        count++;","        if(count === moji.length){","            clearInterval(timer);","        }","    }","    ","    const timer = setInterval(text_animation, 1000);","})"],"id":6}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["/* global $*/",""],"id":7}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"remove","lines":["1"],"id":8},{"start":{"row":2,"column":20},"end":{"row":2,"column":21},"action":"remove","lines":["h"]}],[{"start":{"row":2,"column":20},"end":{"row":2,"column":35},"action":"insert","lines":[".main-visual h1"],"id":9}],[{"start":{"row":3,"column":8},"end":{"row":3,"column":9},"action":"remove","lines":["1"],"id":10},{"start":{"row":3,"column":7},"end":{"row":3,"column":8},"action":"remove","lines":["h"]}],[{"start":{"row":3,"column":7},"end":{"row":3,"column":22},"action":"insert","lines":[".main-visual h1"],"id":11}],[{"start":{"row":9,"column":12},"end":{"row":9,"column":13},"action":"remove","lines":["1"],"id":12},{"start":{"row":9,"column":11},"end":{"row":9,"column":12},"action":"remove","lines":["h"]}],[{"start":{"row":9,"column":11},"end":{"row":9,"column":26},"action":"insert","lines":[".main-visual h1"],"id":13}],[{"start":{"row":8,"column":43},"end":{"row":8,"column":44},"action":"insert","lines":["ｓ"],"id":14},{"start":{"row":8,"column":44},"end":{"row":8,"column":45},"action":"insert","lines":["ｓ"]}],[{"start":{"row":9,"column":25},"end":{"row":9,"column":26},"action":"remove","lines":["1"],"id":15},{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"remove","lines":["h"]},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"remove","lines":[" "]},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"remove","lines":["l"]},{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"remove","lines":["a"]},{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"remove","lines":["u"]},{"start":{"row":9,"column":19},"end":{"row":9,"column":20},"action":"remove","lines":["s"]},{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"remove","lines":["i"]},{"start":{"row":9,"column":17},"end":{"row":9,"column":18},"action":"remove","lines":["v"]},{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"remove","lines":["-"]},{"start":{"row":9,"column":15},"end":{"row":9,"column":16},"action":"remove","lines":["n"]},{"start":{"row":9,"column":14},"end":{"row":9,"column":15},"action":"remove","lines":["i"]},{"start":{"row":9,"column":13},"end":{"row":9,"column":14},"action":"remove","lines":["a"]}],[{"start":{"row":9,"column":12},"end":{"row":9,"column":13},"action":"remove","lines":["m"],"id":16}],[{"start":{"row":9,"column":12},"end":{"row":9,"column":13},"action":"insert","lines":["a"],"id":17},{"start":{"row":9,"column":13},"end":{"row":9,"column":14},"action":"insert","lines":["n"]},{"start":{"row":9,"column":14},"end":{"row":9,"column":15},"action":"insert","lines":["i"]},{"start":{"row":9,"column":15},"end":{"row":9,"column":16},"action":"insert","lines":["m"]},{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"insert","lines":["a"]}],[{"start":{"row":9,"column":12},"end":{"row":9,"column":17},"action":"remove","lines":["anima"],"id":18},{"start":{"row":9,"column":12},"end":{"row":9,"column":21},"action":"insert","lines":["animation"]}],[{"start":{"row":8,"column":44},"end":{"row":8,"column":45},"action":"remove","lines":["ｓ"],"id":19},{"start":{"row":8,"column":43},"end":{"row":8,"column":44},"action":"remove","lines":["ｓ"]}],[{"start":{"row":3,"column":22},"end":{"row":3,"column":23},"action":"insert","lines":["\\"],"id":20}],[{"start":{"row":3,"column":22},"end":{"row":3,"column":23},"action":"remove","lines":["\\"],"id":21},{"start":{"row":3,"column":21},"end":{"row":3,"column":22},"action":"remove","lines":["1"]},{"start":{"row":3,"column":20},"end":{"row":3,"column":21},"action":"remove","lines":["h"]},{"start":{"row":3,"column":19},"end":{"row":3,"column":20},"action":"remove","lines":[" "]},{"start":{"row":3,"column":18},"end":{"row":3,"column":19},"action":"remove","lines":["l"]},{"start":{"row":3,"column":17},"end":{"row":3,"column":18},"action":"remove","lines":["a"]},{"start":{"row":3,"column":16},"end":{"row":3,"column":17},"action":"remove","lines":["u"]},{"start":{"row":3,"column":15},"end":{"row":3,"column":16},"action":"remove","lines":["s"]},{"start":{"row":3,"column":14},"end":{"row":3,"column":15},"action":"remove","lines":["i"]},{"start":{"row":3,"column":13},"end":{"row":3,"column":14},"action":"remove","lines":["v"]},{"start":{"row":3,"column":12},"end":{"row":3,"column":13},"action":"remove","lines":["-"]},{"start":{"row":3,"column":11},"end":{"row":3,"column":12},"action":"remove","lines":["n"]},{"start":{"row":3,"column":10},"end":{"row":3,"column":11},"action":"remove","lines":["i"]}],[{"start":{"row":3,"column":9},"end":{"row":3,"column":10},"action":"remove","lines":["a"],"id":22},{"start":{"row":3,"column":8},"end":{"row":3,"column":9},"action":"remove","lines":["m"]}],[{"start":{"row":3,"column":8},"end":{"row":3,"column":9},"action":"insert","lines":["a"],"id":23},{"start":{"row":3,"column":9},"end":{"row":3,"column":10},"action":"insert","lines":["n"]},{"start":{"row":3,"column":10},"end":{"row":3,"column":11},"action":"insert","lines":["i"]},{"start":{"row":3,"column":11},"end":{"row":3,"column":12},"action":"insert","lines":["m"]},{"start":{"row":3,"column":12},"end":{"row":3,"column":13},"action":"insert","lines":["a"]}],[{"start":{"row":3,"column":13},"end":{"row":3,"column":14},"action":"insert","lines":["t"],"id":24},{"start":{"row":3,"column":14},"end":{"row":3,"column":15},"action":"insert","lines":["i"]},{"start":{"row":3,"column":15},"end":{"row":3,"column":16},"action":"insert","lines":["o"]},{"start":{"row":3,"column":16},"end":{"row":3,"column":17},"action":"insert","lines":["n"]}],[{"start":{"row":2,"column":34},"end":{"row":2,"column":35},"action":"remove","lines":["1"],"id":25},{"start":{"row":2,"column":33},"end":{"row":2,"column":34},"action":"remove","lines":["h"]},{"start":{"row":2,"column":32},"end":{"row":2,"column":33},"action":"remove","lines":[" "]},{"start":{"row":2,"column":31},"end":{"row":2,"column":32},"action":"remove","lines":["l"]},{"start":{"row":2,"column":30},"end":{"row":2,"column":31},"action":"remove","lines":["a"]},{"start":{"row":2,"column":29},"end":{"row":2,"column":30},"action":"remove","lines":["u"]},{"start":{"row":2,"column":28},"end":{"row":2,"column":29},"action":"remove","lines":["s"]},{"start":{"row":2,"column":27},"end":{"row":2,"column":28},"action":"remove","lines":["i"]},{"start":{"row":2,"column":26},"end":{"row":2,"column":27},"action":"remove","lines":["v"]},{"start":{"row":2,"column":25},"end":{"row":2,"column":26},"action":"remove","lines":["-"]},{"start":{"row":2,"column":24},"end":{"row":2,"column":25},"action":"remove","lines":["n"]},{"start":{"row":2,"column":23},"end":{"row":2,"column":24},"action":"remove","lines":["i"]},{"start":{"row":2,"column":22},"end":{"row":2,"column":23},"action":"remove","lines":["a"]},{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"remove","lines":["m"]}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"insert","lines":["a"],"id":26},{"start":{"row":2,"column":22},"end":{"row":2,"column":23},"action":"insert","lines":["n"]},{"start":{"row":2,"column":23},"end":{"row":2,"column":24},"action":"insert","lines":["i"]},{"start":{"row":2,"column":24},"end":{"row":2,"column":25},"action":"insert","lines":["m"]},{"start":{"row":2,"column":25},"end":{"row":2,"column":26},"action":"insert","lines":["e"]}],[{"start":{"row":2,"column":25},"end":{"row":2,"column":26},"action":"remove","lines":["e"],"id":27}],[{"start":{"row":2,"column":21},"end":{"row":2,"column":25},"action":"remove","lines":["anim"],"id":28},{"start":{"row":2,"column":21},"end":{"row":2,"column":30},"action":"insert","lines":["animation"]}],[{"start":{"row":16,"column":47},"end":{"row":16,"column":48},"action":"remove","lines":["0"],"id":29},{"start":{"row":16,"column":46},"end":{"row":16,"column":47},"action":"remove","lines":["1"]}],[{"start":{"row":16,"column":46},"end":{"row":16,"column":47},"action":"insert","lines":["5"],"id":30}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":7,"column":26},"end":{"row":7,"column":26},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1626161986646,"hash":"0dd6f04f7fe5396f4cc0650f301fd82ca9123a0f"}