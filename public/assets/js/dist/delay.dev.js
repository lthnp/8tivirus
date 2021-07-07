"use strict";

var pageable = new Pageable("main", {
  animation: 1000,
  delay: 300,
  onBeforeStart: function onBeforeStart() {
    this.pages.forEach(function (page, i) {
      page.classList.remove("pg-active");
    });
  }
});