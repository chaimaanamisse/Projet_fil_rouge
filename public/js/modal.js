var elements = $(".modal-overlay, .modal");

$(".adoptBtn").click(function () {
elements.addClass("active");
});

$(".close-modal").click(function () {
elements.removeClass("active");
});