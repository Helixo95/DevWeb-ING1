let requestInProgress = false;

function initChangeStatusButton(url) {
    const button = document.getElementById('status-change');

    button.addEventListener('click', function(event) {
        if(requestInProgress) {
            event.preventDefault();
            return;
        }

        requestInProgress = true;

        clearToasts();
        showToast("Requête en cours...");

        const status = button.classList.contains('enable') ? 'active' : 'inactive';

        const headers = { "Content-Type": "application/json" };
        const body = JSON.stringify({ status: status });

        fetch(url, { method: 'POST', headers: headers, body: body })
            .then(response => response.json().then(data => ({response: response, body: data})))
            .then(data => {
                if(data.response.ok) {
                    button.classList.toggle('enable');
                    button.classList.toggle('disable');

                    const text = button.classList.contains('enable') ? 'Activer' : 'Désactiver';
                    button.firstChild.data = text;

                    updateStatusDisplay(status);
                }

                showToast(data.body.message);
            }).catch(error => {
            console.error(error);
            showToast("Une erreur est survenue.");
        }).finally(() => {
            requestInProgress = false;
        });
    });
}

function updateStatusDisplay (status) {
    const elements = document.getElementsByClassName('status');
    const statusText = getStatusName(status);

    for(let element of elements) {
        element.dataset.status = status;
        element.firstChild.data = statusText;
    }
}
