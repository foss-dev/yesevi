var sys = {
    csrf: document.querySelector("meta[name='csrf-token']").getAttribute('content')
}

module.exports = sys;
