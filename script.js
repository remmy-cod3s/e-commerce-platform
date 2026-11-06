let popup = document.querySelector(".pop-up");


function Showpopup(button){
  console.log(button);
  popup.classList.add("Showpopup");
  const elementId = button.getAttribute('data-id');


  fetch(`add.php?id=${elementId}`, {
    method: 'GET',
})
.then(response => response.json())
.then(data => { console.log(data); })}

function closepopup(){
  popup.classList.remove("Showpopup");
}

const scroller = document.querySelector('.hero-scroller')

console.log(scroller)

function nextSlide() {
  scroller.scrollBy({ left: scroller.clientWidth, behavior: "smooth" });
}

setInterval(nextSlide, 3000);


// const badge = document.querySelector("#cart-badge");
// let popupTimer;

// document.querySelectorAll(".cart").forEach(function (button) {
//   button.addEventListener("click", function () {
//     const id = button.dataset.id;
//     const card = button.closest(".item");

//     fetch("add.php?id=" + id)
//       .then(function (response) {
//         return response.json();
//       })
//       .then(function (data) {
//         badge.textContent = data.count;
//         document.querySelector("#popup-name").textContent =
//           card.querySelector(".blue-heading").textContent;
//         document.querySelector("#popup-price").textContent =
//           card.querySelector(".price").textContent;
//         document.querySelector("#popup-img").src =
//           card.querySelector("img").src;
//         document.querySelector("#popup-count").textContent =
//           data.count + " item(s)";

//         popup.classList.add("show");
//         clearTimeout(popupTimer);
//         popupTimer = setTimeout(function () {
//           popup.classList.remove("show");
//         }, 3000);
//       })
//       .catch(function (error) {
//         console.error(error);
//       });
//   });
// });

