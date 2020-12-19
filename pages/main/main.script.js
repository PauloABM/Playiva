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

function searchLecture(e) {
    e.preventDefault()
    let searchInput = document.getElementById("search-lecture-input").value
    fetch(`http://localhost/class/controller/MainController.class.php?search=${searchInput}`)
    .then((res) => {
        return res.json();
    })
    .then((result) => {
        let videos = document.getElementById('videos')
        console.log()
        if (typeof result.data !== 'undefined' && result.data.length > 0) {
            videos.innerHTML = ''
            result.data.forEach(element => {
                videos.insertAdjacentHTML('beforeend', `
                    <div class="video">
                        <div class="columns is-vcentered">
                            <div class="column">
                                <p class="mb-1 has-text-weight-semibold is-size-5">${element.name}</p>
                                <div class="field">
                                    <p class="control">
                                        <iframe width="550" height="320"
                                            src="${element.url}" title="${element.name}">
                                        </iframe>
                                    </p>
                                </div>
                            </div>
                            <div class="column">
                                <p class="mb-3 has-text-weight-semibold is-size-5">Channel Name</p>
                                <p class="mb-1 has-text-weight-semibold is-size-5">Techniques</p>
                                <div class="tags">
                                    <div class="tag is-rounded is-danger">No techniques found :(</div>
                                </div>
                                <div class="control">
                                    <a>
                                        <span class="has-text-weight-semibold is-size-6">Show more</span>
                                        <span class="icon is-small"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>`)
            });
        } else {
            videos.innerHTML = '<div class="control">No lectures found with this name :(</div>'
        }
    })
    .catch((err) => {
        console.log('error fetching data');
        console.log(err);
    })
}

document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('search-lecture-button').addEventListener(
        'click', searchLecture, false
    );
});