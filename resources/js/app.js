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

// JQUERY
const $ = require("jquery");

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
    console.log(clickedIndex);
    console.log(clickedNumber);

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
