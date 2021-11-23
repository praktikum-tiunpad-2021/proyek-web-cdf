const switches = {
    data: document.getElementById('switch-profile'),
    password: document.getElementById('switch-password')
}

const forms = {
    profile: document.getElementById('save-profile'),
    password: document.getElementById('save-password')
}

switches.data.addEventListener('click', () => {
    forms.profile.style.visibility = "visible"
    forms.password.style.visibility = "hidden"
    switches.password.disabled = false;
    switches.data.disabled = true;
})

switches.password.addEventListener('click', () => {
    forms.password.style.visibility = "visible"
    forms.profile.style.visibility = "hidden"
    switches.password.disabled = true
    switches.data.disabled = false
})