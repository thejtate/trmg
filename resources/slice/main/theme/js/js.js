(function ($) {

  if (typeof Drupal != 'undefined') {
    Drupal.behaviors.projectName = {
      attach: function (context, settings) {
        init();
      },

      completedCallback: function () {
        // Do nothing. But it's here in case other modules/themes want to override it.
      }
    }
  }

  $(function () {
    if (typeof Drupal == 'undefined') {
      init();
    }

    $(window).load(function() {

    });
  });

  function init() {
    initBrowserCheck();
    mobileDetect();
    initFullWidthBlock();
    initHexHover();
    initColumnize();
    initBFoundationDevice();
    initBFoundation();
    initNav();
    //initBAccordions();
    initTabs();
    $('.formValidate').formValidate();
  }

  function initBrowserCheck() {
    var userAgent = window.navigator.userAgent.toLowerCase();

    if(~userAgent.indexOf('webkit') && !~userAgent.indexOf('edge')) {
      $('html').addClass('webkit');
    }
  }

  function mobileDetect() {
    if( navigator.userAgent.match(/Android/i)
      || navigator.userAgent.match(/webOS/i)
      || navigator.userAgent.match(/iPhone/i)
      || navigator.userAgent.match(/iPad/i)
      || navigator.userAgent.match(/iPod/i)
      || navigator.userAgent.match(/BlackBerry/i)
      || navigator.userAgent.match(/Windows Phone/i)
    ){
      $('body').addClass('mobile-device');
    }
  }

  function initNav() {
    var header = document.getElementById('site-header');

    if(!header) return false;

    if($('body').hasClass('mobile-device')) {
      $(header).find('ul.menu li.expanded > a').on('click touch', function(e) {
        e.preventDefault();
      });
    }

    var btnNavOpen = header.querySelector('.btn-nav'),
      $body = $(document.body);

    btnNavOpen.addEventListener('click', navCheck);
    btnNavOpen.addEventListener('touch', navCheck);

    document.documentElement.addEventListener('click', function(e) {
      if($body.hasClass('nav-active') && !$(e.target).closest('.nav').length) navCheck(e);
    });

    function navCheck(e) {
      e.preventDefault();

      if(!$body.hasClass('nav-active')) {
        $body.addClass('nav-active');
      } else {
        $body.removeClass('nav-active');
      }
    }
  }

  function initColumnize() {
    $('.cols.col-two:not(.columnizer-plugin-processed)')
      .columnize({
        columns: 2,
        buildOnce: true,
        lastNeverTallest: true
      })
      .addClass('columnizer-plugin-processed');
  }

  function initBFoundation() {
    var elWrapper = document.querySelector('.b-foundation');
    var $body = $('body');

    if(!elWrapper || $body.hasClass('b-foundation-processed')) return;

    $body.addClass('b-foundation-processed');

    var $els = $(elWrapper).find('.hex');
    var currentElem = null;

    elWrapper.addEventListener('mouseover', function(e) {
      if(currentElem) return;

      var target = e.target;

      while(target != this) {
        //if(target.tagName == 'A') break;
        if($(target).closest('.hex').length) break;
        target = target.parentNode;
      }
      if(target == this) return;

      currentElem = target;
      addClassHovered(currentElem);
    });

    elWrapper.addEventListener('mouseout', function(e) {
      if(!currentElem) return;

      var relatedTarget = e.relatedTarget;
      if(relatedTarget) {
        while (relatedTarget) {
          if (relatedTarget == currentElem) return;
          relatedTarget = relatedTarget.parentNode;
        }
      }

      currentElem = null;
      removeClassHovered();
    });

    function addClassHovered(el) {
      var $wrapper = $(el).closest('.hex').parent();
      var index = $(el).closest('.hex').index();

      removeClassHovered();

      if($wrapper.hasClass('hex-desc-wrapper')) {
        $wrapper.prev().find('.hex').eq(index).addClass('hovered');
      } else {
        $wrapper.next().find('.hex').eq(index).addClass('hovered');
      }
      $wrapper.find('.hex').eq(index).addClass('hovered');
    }

    function removeClassHovered() {
      $els.removeClass('hovered');
    }
  }

  function initBFoundationDevice() {
    var $elWrapper = $('.b-foundation');
    var $body = $('body');
    var AMOUNT_DESKTOP = 6;
    var AMOUNT_TABLET = 3;
    var AMOUNT_MOBILE = 2;

    if(!$elWrapper.length || $body.hasClass('b-foundation-device-processed')) return;

    $body.addClass('b-foundation-device-processed');

    var $els = $elWrapper.find('.elements-wrapper li');

    $elWrapper.append('<div class="desktop-hex-wrapper"></div><div class="tablet-hex-wrapper"></div><div class="mobile-hex-wrapper"></div>');

    var $deskWrap = $elWrapper.find('.desktop-hex-wrapper');
    var $tabletWrap = $elWrapper.find('.tablet-hex-wrapper');
    var $mobileWrap = $elWrapper.find('.mobile-hex-wrapper');

    var stringToAppendImg = '<div class="hex-wrapper">';
    var stringToAppendDesc = '<div class="hex-desc-wrapper">';

    var stringToAppendDeskImg = '';
    var stringToAppendDeskDesc = '';

    var stringToAppendTabletImg = '';
    var stringToAppendTabletDesc = '';

    var stringToAppendMobileImg = '';
    var stringToAppendMobileDesc = '';

    for(var i = 0; i < $els.length; i++) {
      var $currentEl = $els.eq(i);

      var $imgBlock;
      var userAgent = window.navigator.userAgent.toLowerCase();

      if(~userAgent.indexOf('webkit') && !~userAgent.indexOf('edge')) {
        $imgBlock = '<div style="' + $currentEl.find('.hex-img').attr('style').replace(new RegExp('"', 'g'), "'") + '" class="hex hex-img hex-a">' + $currentEl.find('.hex-img').clone().html() + '</div>';
      } else {
        $imgBlock = '<div style="' + $currentEl.find('.hex-img').attr('style').replace(new RegExp('"', 'g'), "'") + '" class="hex hex-img">' + $currentEl.find('.hex-img').clone().html() + '</div>';
      }

      var $descBlock = '<div class="hex hex-desc">' + $currentEl.find('.hex-desc').clone().html() + '</div>';

      if(i === 0) {
        stringToAppendDeskImg += stringToAppendImg + $imgBlock;
        stringToAppendDeskDesc += stringToAppendDesc + $descBlock;

        stringToAppendTabletImg += stringToAppendImg + $imgBlock;
        stringToAppendTabletDesc += stringToAppendDesc + $descBlock;

        stringToAppendMobileImg += stringToAppendImg + $imgBlock;
        stringToAppendMobileDesc += stringToAppendDesc + $descBlock;
      }

      if(i % AMOUNT_DESKTOP) {
        stringToAppendDeskImg += $imgBlock;
        stringToAppendDeskDesc += $descBlock;
      } else if(i !== 0) {
        stringToAppendDeskImg += '</div>';
        $deskWrap.append(stringToAppendDeskImg);
        stringToAppendDeskImg = stringToAppendImg + $imgBlock;

        stringToAppendDeskDesc += '</div>';
        $deskWrap.append(stringToAppendDeskDesc);
        stringToAppendDeskDesc = stringToAppendDesc + $descBlock;
      }

      if(i % AMOUNT_TABLET) {
        stringToAppendTabletImg += $imgBlock;
        stringToAppendTabletDesc += $descBlock;
      } else if(i !== 0) {
        stringToAppendTabletImg += '</div>';
        $tabletWrap.append(stringToAppendTabletImg);
        stringToAppendTabletImg = stringToAppendImg + $imgBlock;

        stringToAppendTabletDesc += '</div>';
        $tabletWrap.append(stringToAppendTabletDesc);
        stringToAppendTabletDesc = stringToAppendDesc + $descBlock;
      }

      if(i % AMOUNT_MOBILE) {
        stringToAppendMobileImg += $imgBlock;
        stringToAppendMobileDesc += $descBlock;
      } else if(i !== 0) {
        stringToAppendMobileImg += '</div>';
        $mobileWrap.append(stringToAppendMobileImg);
        stringToAppendMobileImg = stringToAppendImg + $imgBlock;

        stringToAppendMobileDesc += '</div>';
        $mobileWrap.append(stringToAppendMobileDesc);
        stringToAppendMobileDesc = stringToAppendDesc + $descBlock;
      }

      if(i === $els.length - 1) {
        stringToAppendDeskImg += '</div>';
        $deskWrap.append(stringToAppendDeskImg);
        stringToAppendDeskDesc += '</div>';
        $deskWrap.append(stringToAppendDeskDesc);

        stringToAppendTabletImg += '</div>';
        $tabletWrap.append(stringToAppendTabletImg);
        stringToAppendTabletDesc += '</div>';
        $tabletWrap.append(stringToAppendTabletDesc);

        stringToAppendMobileImg += '</div>';
        $mobileWrap.append(stringToAppendMobileImg);
        stringToAppendMobileDesc += '</div>';
        $mobileWrap.append(stringToAppendMobileDesc);
      }
    }
  }

  function initFullWidthBlock() {
    var $elements = $('.full-block'),
      minWidth = 0;

    $(window).on('resize', setPosition);
    setPosition();

    function setPosition() {
      var $winWidth = $(window).outerWidth(),
        width;

      if($winWidth > minWidth) {
        width = $winWidth;
      } else {
        width = minWidth;
      }

      $elements.width( width);
      $elements.css('margin-left', '-' + width/2 + 'px');
    }
  }

  function initHexHover() {
    var elWrapper = document.querySelector('.b-hex');

    if(!elWrapper) return;

    var $els = $(elWrapper).find('.hex');
    var currentElem = null;

    elWrapper.addEventListener('mouseover', function(e) {
      if(currentElem) return;

      var target = e.target;

      while(target != this) {
        if(target.tagName == 'A') break;
        target = target.parentNode;
      }
      if(target == this) return;

      currentElem = target;
      addClassHovered(currentElem);
    });

    elWrapper.addEventListener('mouseout', function(e) {
      if(!currentElem) return;

      var relatedTarget = e.relatedTarget;
      if(relatedTarget) {
        while (relatedTarget) {
          if (relatedTarget == currentElem) return;
          relatedTarget = relatedTarget.parentNode;
        }
      }

      currentElem = null;
      removeClassHovered();
    });

    function addClassHovered(el) {
      var index = $(el).parent('.hex').index();
      removeClassHovered();
      $els.eq(index).addClass('hovered');
    }

    function removeClassHovered() {
      $els.removeClass('hovered');
    }
  }

  function initTabs() {
    var $wrapper = $('.b-tabs-without-hexes');
    var $nav = $wrapper.find('.tabs-control');
    var $content = $wrapper.find('.tabs-content > ul > li');
    var current = 0;

    if(!$wrapper.length) return;

    setActiveItem(current, $content);
    checkInnerControl($nav.find('> ul > li:nth-child(' + (current + 1) + ')').text(), $nav);

    $nav.on('click touch', function(e) {
      e.preventDefault();

      var $target = $(e.target);
      var $this = $target.parents('.tabs-control');

      if($target.hasClass('tab-btn')) {

        if($this.hasClass('active')) {
          $this.removeClass('active');
        } else {
          $this.addClass('active');
        }

      } else if($target[0].tagName == 'A' && $target.parent('li').length && $target.parents('.tabs-control').length) {
        var $list = $this.find('ul li');
        var $btn = $this.find('.tab-btn');
        var index = $target.parent().index();

        $btn.html($target.text().replace('NDAs', 'NDA<span>s</span>'));
        setActiveItem(index, $list);
        setActiveItem(index, $this.siblings('.tabs-content').find(' > ul > li'));
        $this.removeClass('active');
      }
    });

    function checkInnerControl(text, elm) {
      if(!elm.find('a.tab-btn').length) {
        setActiveItem(current, elm.find('ul li'));
        elm.prepend('<a href="javascript:void(0);" class="tab-btn" title="'+ text + '">' + text.replace('NDAs', 'NDA<span>s</span>') + '</a>');
      }
    }

    function setActiveItem(index, elms) {
      elms.removeClass('active').eq(index).addClass('active');
    }

    $('html').on('click touch', function(e) {
      if(!$(e.target).closest('.tabs-control').length) {
        $nav.removeClass('active');
      }
    });
  }

  function initBAccordions() {
    var $page = $('.page-inventions-and-branding');

    if(!$page.length) return;

    var $outerNav = $page.find('.block-desc .hex');
    var $outerContent = $page.find('.b-tabs .tabs-content-outer > ul > li');
    var $innerContent = $page.find('.b-tabs .tabs-content > ul > li');
    var firstActiveOuterContent = 0;
    var firstActiveInnerContent = 0;

    $outerContent.hide();
    $innerContent.hide();

    setActiveItem(firstActiveOuterContent, $outerNav);
    setActiveItem(firstActiveOuterContent, $outerContent);
    setActiveItem(firstActiveInnerContent, $outerContent.eq(firstActiveOuterContent).find('.tabs-content > ul > li'));

    $outerNav.find('.link').on('click touch', function(e) {
      e.preventDefault();

      var index = $(this).parents('.hex').index();

      setActiveItem(index, $outerNav);
      setActiveItem(index, $outerContent);
      scrollToContent(600, $page.find('.b-tabs').offset().top + 10);
    });

    function setActiveItem(index, elms) {
      elms.removeClass('active').eq(index).addClass('active');
    }

    $outerContent.each(function() {
      var $this = $(this);
      var $control = $this.find('.tabs-control');
      var index = $this.index();

      setActiveItem(firstActiveOuterContent, $outerContent.eq(index).find('.tabs-content > ul > li'));
      checkInnerControl($control.find('ul li:nth-child(' + (firstActiveInnerContent + 1) + ')').text(), $control);
    });

    function checkInnerControl(text, elm) {
      if(!elm.find('a.tab-btn').length) {
        setActiveItem(firstActiveInnerContent, elm.find('ul li'));
        elm.prepend('<a href="javascript:void(0);" class="tab-btn" title="'+ text + '">' + text + '</a>');
      }
    }

    $outerContent.on('click touch', function(e) {
      e.preventDefault();

      var $target = $(e.target);

      if($target.hasClass('tab-btn')) {
        var $this = $target.parents('.tabs-control');

        if($this.hasClass('active')) {
          $this.removeClass('active');
        } else {
          $this.addClass('active');
        }
      } else if($target[0].tagName == 'A' && $target.parent('li').length && $target.parents('.tabs-control').length) {
        var $this = $target.parents('.tabs-control');
        var $list = $this.find('ul li');
        var $btn = $this.find('.tab-btn');
        var index = $target.parent().index();

        $btn.text($target.text());
        setActiveItem(index, $list);
        setActiveItem(index, $this.siblings('.tabs-content').find(' > ul > li'));
        $this.removeClass('active');
      }
    });

    function scrollToContent(speed, val) {
      if(!$('body').hasClass('mobile-device')) return;
      $('html, body').animate({
        scrollTop: val
      }, speed);
    }

    $('html').on('click touch', function(e) {
      if(!$(e.target).closest('.tabs-control').length) {
        $outerContent.find('.tabs-control').removeClass('active');
      }
    });
  }

})(jQuery);