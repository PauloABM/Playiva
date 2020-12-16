function setTab1(tab) {
    let activeTab = null
    let inactiveTab = null
    if (tab == "learn") {
        activeTab = document.getElementById("tab1-learn")
        inactiveTab = document.getElementById("tab1-improve")
    } else {
        activeTab = document.getElementById("tab1-improve")
        inactiveTab = document.getElementById("tab1-learn")
    }
    if (inactiveTab) {
        inactiveTab.classList.remove('is-active')
    }
    if (activeTab) {
        activeTab.classList.add('is-active')
    }
}

function setTab2(tab) {
    let activeTab = null
    let inactiveTab = null
    if (tab == "foundation") {
        activeTab = document.getElementById("tab2-foundation")
        inactiveTab = document.getElementById("tab2-play")
    } else {
        activeTab = document.getElementById("tab2-play")
        inactiveTab = document.getElementById("tab2-foundation")
    }
    if (inactiveTab) {
        inactiveTab.classList.remove('is-active')
    }
    if (activeTab) {
        activeTab.classList.add('is-active')
    }
}

document.addEventListener("DOMContentLoaded", function(event) {
    console.log("DOM completamente carregado e analisado");
});