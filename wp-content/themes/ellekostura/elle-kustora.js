jQuery(document).ready(function ($) {
  setInterval(() => {
    topHeaderScript();
  }, 12000);

  const topHeaderScript = () => {
    var topHeader = $(".top-header p.active");
    if (topHeader.length) {
      if (topHeader.next("p").length) {
        topHeader.removeClass("active");
        topHeader.next("p").addClass("active");
      } else {
        $(".top-header p:first-child").addClass("active");
      }
    }
  };
});
