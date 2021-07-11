"use strict";

$(document).ready(function () {
  /*
  * Plugin intialization
  */
  $('#pagepiling').pagepiling({
    menu: '#menu',
    anchors: ['page1', 'page2', 'page3', 'page4'],
    sectionsColor: ['white', '#ee005a', '#2C3E50', '#39C'],
    navigation: {
      'position': 'right',
      'tooltips': ['Page 1', 'Page 2', 'Page 3', 'Pgae 4']
    },
    afterRender: function afterRender() {
      $('#pp-nav').addClass('custom');
    },
    afterLoad: function afterLoad(anchorLink, index) {
      if (index > 1) {
        $('#pp-nav').removeClass('custom');
      } else {
        $('#pp-nav').addClass('custom');
      }
    }
  });
  /*
    * Internal use of the demo website
    */

  $('#showExamples').click(function (e) {
    e.stopPropagation();
    e.preventDefault();
    $('#examplesList').toggle();
  });
  $('html').click(function () {
    $('#examplesList').hide();
  });
});