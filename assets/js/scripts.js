const parentContainer = document.querySelector(".read-more");

parentContainer.addEventListener("click", (event) => {
  const current = event.target;

  const isReadMoreBtn = current.className.includes("read-more-btn");

  if (!isReadMoreBtn) return;

  const currentText = event.target.parentNode.querySelector(".read-more-text");

  currentText.classList.toggle("read-more-text--show");

  current.innerHTML = current.textContent.includes("Đọc tiếp")
    ? "Thu gọn <i class='fa-solid fa-circle-arrow-up'></i>"
    : "Đọc tiếp <i class='fa-solid fa-circle-arrow-down'></i>";
});

$(document).ready(function () {
  $("#slider-range").slider({
    range: true,
    min: 280000,
    max: 5365000,
    values: [280000, 5365000],
    slide: function (event, ui) {
      var minValue = formatCurrency(ui.values[0]);
      var maxValue = formatCurrency(ui.values[1]);
      $("#selected-range").text(minValue + " - " + maxValue);
    },
  });
  var initialValue = formatCurrency($("#slider-range").slider("values", 0));
  var maxValue = formatCurrency($("#slider-range").slider("values", 1));
  $("#selected-range").text(initialValue + " - " + maxValue);
});

function formatCurrency(value) {
  return new Intl.NumberFormat("vi-VN", {
    style: "currency",
    currency: "VND",
  }).format(value);
}
