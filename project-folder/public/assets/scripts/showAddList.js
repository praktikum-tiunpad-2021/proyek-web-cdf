const addItem=document.getElementById("add-item-form")
const backdrop=document.getElementById("backdrop");
const addButton=document.getElementById("add-list")

addButton.addEventListener("click", () => {
    addItem.style.visibility="visible";
})

backdrop.addEventListener("click", () => {
    addItem.style.visibility="hidden";
})