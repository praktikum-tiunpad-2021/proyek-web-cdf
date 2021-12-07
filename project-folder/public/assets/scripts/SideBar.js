const openSidebar=document.getElementById('open')
const closeSidebar=document.getElementById('close')
const sidebar=document.getElementById('sidebar');
const main=document.getElementById('main')

/**
 * # Sidebar Properties
 */
const sidebarProp = {
    width: "250px",
}

/**
 * # Main Properties
 */
const mainProp = {
    marginOrigin: "100px",
    marginOpenSidebar: "300px"
}

openSidebar.addEventListener('click', () => {
    sidebar.style.width=sidebarProp.width;
    sidebar.style.visibility="visible";
    main.style.marginLeft=mainProp.marginOpenSidebar;
})

closeSidebar.addEventListener('click', () => {
    sidebar.style.visibility="hidden";
    setTimeout(() => {
        sidebar.style.width="0";
        main.style.marginLeft=mainProp.marginOrigin;
    }, 250);
})