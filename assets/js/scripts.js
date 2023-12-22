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

// scripts.js
