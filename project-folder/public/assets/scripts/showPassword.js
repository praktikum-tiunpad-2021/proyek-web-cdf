const visibleButton = document.getElementById("visibility")
const passwordInput = document.getElementById("password");

visibleButton.addEventListener("click", () => {
    if(visibleButton.innerHTML === "visibility") {
        passwordInput.type = "text"
        visibleButton.innerHTML = "visibility_off";
    } else {
        passwordInput.type = "password"
        visibleButton.innerHTML = "visibility";
    }
})