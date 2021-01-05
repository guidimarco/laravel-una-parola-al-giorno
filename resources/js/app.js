require('./bootstrap');

import Vue from 'vue';
var app = new Vue({
    el: "#root",
    data: {
        showMenu: false,
    },
    methods: {

    },
    mounted() {
        console.log("ciao da vue");
    },
});

// JQUERY + HANDLEBARS
const $ = require("jquery");

const Handlebars = require("handlebars");
const template = Handlebars.compile("Name: {{name}}");
// hadlebars template --> news
var newsSource = document.getElementById("news-template").innerHTML;
var newsTemplate = Handlebars.compile(newsSource);
var news = [
    {
        title: 'L\'osco, questo strano sconosciuto',
        article: 'Storia e collocazione di una lingua e di un popolo italico meno famoso, che si intreccia profondamente con la storia romana, e che ha lasciato un\'eredità riconoscibile nella lingua parlata ancora oggi in Italia.',
        img: 'https://v3.unaparolaalgiorno.it/uploads/a/Osco.jpg',
    },
    {
        title: 'Il meglio del mese — Novembre 2020',
        article: 'Da Carlo Magno allo stigmatizzare, dall\'evviva al cleuasmo, dal parruccone al corroborare fino all\'autopoiesi, il colmo di questo autunno è stato generoso di parole ricche.',
        img: 'https://v3.unaparolaalgiorno.it/uploads/a/2020/Il%20meglio%20del%20mese%20-%20novembre.png',
    },
    {
        title: 'Il nome va sempre prima del cognome?',
        article: 'La scelta di questo ordine ha effetti precisi, regole generali, eccezioni di cortesia e di mondo — che spesso anche le persone più dotte si ritrovano a violare.',
        img: 'https://v3.unaparolaalgiorno.it/uploads/a/2020/nomi-cognomi-pexels-fauxels-3184465.jpg',
    },
];

$("document").ready(function () {
    // click on arrow-left
    $(".arrow-left").click(function () {
        prevPromo();
    });

    // click on arrow-right
    $(".arrow-right").click(function () {
        nextPromo();
    });

    // click on dots
    $(".dot").click(function () {
        switchToPromo($(this));
    });

    // next-img every 3s
    var auto;
    auto = setInterval(nextPromo, 3000);

    // when i'm on carousel-btn (mouseenter) -> stop auto change
    $("#promo-carousel .promo-container").mouseenter(function() {
        clearInterval(auto);
    });

    // when i leave carousel-btn (mouseleave) -> restart
    $("#promo-carousel .promo-container").mouseleave(function() {
        auto = setInterval(nextPromo, 3000);
    });

    // stamp news to the DOM
    news.forEach((singleNews) => {
        var htmlNews = newsTemplate(singleNews);
        $("#home-news .news-container").append(htmlNews);
    });

});

function nextPromo() {
    // select current promo card and current dot
    var currentPromo = $(".promo-card.active");
    var currentDot = $(".dot.active");

    // remove active class
    currentPromo.removeClass("active");
    currentDot.removeClass("active");

    if (currentPromo.next().length) {
        // add "active" class to next
        currentPromo.next().addClass("active");
        currentDot.next().addClass("active");
    } else {
        // add "active" class to the first
        $(".promo-card").first().addClass("active");
        $(".dot:first-child").addClass("active");
    }
};

function prevPromo() {
    // select current promo card and current dot
    var currentPromo = $(".promo-card.active");
    var currentDot = $(".dot.active");

    // remove active class
    currentPromo.removeClass("active");
    currentDot.removeClass("active");

    if (currentPromo.prev().hasClass("promo-card")) {
        // add "active" class to prev
        currentPromo.prev().addClass("active");
        currentDot.prev().addClass("active");
    } else {
        // add "active" class to the last
        $(".promo-card").last().addClass("active");
        $(".dot:last-child").addClass("active");
    }
};

function switchToPromo(thisDot) {
    // get the index of clicked dot
    var clickedNumber = $(".dot").index(thisDot) + 1;
    var clickedIndex = clickedNumber - 1;

    // select current promo card and current dot
    var currentPromo = $(".promo-card.active");
    var currentDot = $(".dot.active");

    // remove active class
    currentPromo.removeClass("active");
    currentDot.removeClass("active");

    // move to clicked index
    $(".dot:nth-child(" + clickedNumber + ")").addClass("active");
    $(".promo-card").eq(clickedIndex).addClass("active");
};
