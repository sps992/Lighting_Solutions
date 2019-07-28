(function() {
  var magicLine,
    bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

  magicLine = (function() {
    function magicLine(menu) {
      this.menu = menu;
      this.update = bind(this.update, this);
      if (!this.menu.length) {
        return;
      }
      $('<li>', {
        "class": 'magic-line'
      }).appendTo(this.menu.addClass('has-magic-line'));
      this.update();
      $(window).resize(this.update);
    }

    magicLine.prototype.update = function() {
      var el, ref;
      el = this.menu.find('.active');
      return this.menu.find('.magic-line').css({
        transform: "translateX( " + (((ref = el.position()) != null ? ref.left : void 0) || 0) + "px ) scaleX( " + (el.width() || 0) + " )"
      });
    };

    return magicLine;

  })();

  window.magicLine = new magicLine($('.menu'));

  $('.menu-item').on('click', function(e) {
    e.preventDefault();
    $(this).addClass('active').siblings().removeClass('active');
    return window.magicLine.update();
  });

}).call(this);
