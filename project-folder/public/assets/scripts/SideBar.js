const openSidebar=document.getElementById('open')
const closeSidebar=document.getElementById('close')
const sidebar=document.getElementById('sidebar');

const sidebarProp = {
    width: "250px",
}

openSidebar.addEventListener('click', () => {
    sidebar.style.width=sidebarProp.width;
    sidebar.style.visibility="visible";
})

closeSidebar.addEventListener('click', () => {
    setTimeout(() => {
        sidebar.style.width="0";
    }, 250);
    sidebar.style.visibility="hidden";
})