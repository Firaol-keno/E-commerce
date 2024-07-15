document.addEventListener("DOMContentLoaded", function() {
  const userIcon = document.getElementById("userIcon");
  const userMenu = document.getElementById("userMenu");

  userIcon.addEventListener("click", function(event) {
    event.preventDefault();
    userMenu.style.display = userMenu.style.display === "block" ? "none" : "block";
  });

  window.addEventListener("click", function(event) {
    if (event.target !== userIcon && !userIcon.contains(event.target) && !userMenu.contains(event.target)) {
      userMenu.style.display = "none";
    }
  });
});
