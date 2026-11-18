$(document).ready(function () {

  var $myModal = $("#exampleModal");
  var $myInput = $("#myInput");
  const params = new URLSearchParams(window.location.search);

  // Show popup ONLY on mobile + ONLY if utm_samp=samp1
  if (
    params.get("utm_samp") === "samp1" &&
    window.innerWidth <= 576
  ) {

    // Hide full website except modal & preloader
    $("body > *").not("#exampleModal, #flightPreloader").hide();

    // Show modal manually
    $myModal.show();
    $myModal.addClass("show");

    // Add backdrop manually
    $("body").append('<div class="modal-backdrop fade show"></div>');

    // Prevent body scroll
    $("body").addClass("modal-open");

    // Focus input when modal opens
    $myModal.on("shown.bs.modal", function () {
      $myInput.focus();
    });

    // CLOSE BUTTON WORKING
    $("#closePopup").on("click", function () {

      // Hide modal
      $myModal.hide();
      $myModal.removeClass("show");

      // Remove backdrop
      $(".modal-backdrop").remove();

      // Enable body scroll
      $("body").removeClass("modal-open");

      // Show website again
      $("body > *").not("#exampleModal, #flightPreloader").show();

    });

  } else {

    // Remove modal on desktop/tablet
    $myModal.remove();

  }

});