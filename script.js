document.addEventListener("DOMContentLoaded", function () {
    var userIcon = document.getElementById("userIcon");
    var userInfo = document.getElementById("userInfo");

    userIcon.addEventListener("click", function () {
        userInfo.style.display = userInfo.style.display === "none" ? "flex" : "none";
    });
});
