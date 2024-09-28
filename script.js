window.onload = function () {
  const urlParams = new URLSearchParams(window.location.search);
  if (urlParams.has("success")) {
    document.getElementById("popupForm").style.display = "flex";
    document.getElementById("overlay").style.display = "block";
    const newUrl = window.location.origin + window.location.pathname;
    window.history.replaceState({}, document.title, newUrl);
  }
};

document.getElementById("closePopupBtn").onclick = function () {
  document.getElementById("popupForm").style.display = "none";
  document.getElementById("overlay").style.display = "none";
};

document.getElementById("overlay").onclick = function () {
  document.getElementById("popupForm").style.display = "none";
  document.getElementById("overlay").style.display = "none";
};

document.getElementById("orderButton").addEventListener("click", function () {
  const checkoutForm = document.getElementById("checkoutFormContainer");
  checkoutForm.scrollIntoView({ behavior: "smooth" }); // Smooth scroll to the form
});
