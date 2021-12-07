const addButton=document.getElementById('add')
const backdrop=document.getElementById("backdrop")
const formBox=document.getElementById("add-item")

addButton.addEventListener("click", () => {
    formBox.style.visibility="visible"
})

backdrop.addEventListener("click", () => {
    formBox.style.visibility="hidden"
})

