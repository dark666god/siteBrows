// Кнопка закрытия окна
const close = document.querySelector(".btn__X");
const modalWindow = document.querySelector(".modal");

/* При нажатии на кнопку происходит перезагрузка страницы */
close.addEventListener("click", () => {
  location.reload();
});
