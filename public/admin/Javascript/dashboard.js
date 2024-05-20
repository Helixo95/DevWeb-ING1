document.addEventListener('DOMContentLoaded', function() {

    const toggler = document.getElementById('toggler');

    toggler.addEventListener('click', function() {
        toggleSidebar();
    });

    const sidebar = document.getElementById('l-sidebar');
    const wrapper = document.getElementById('wrapper');
    const navbar = document.getElementById('top-navbar');

    sidebar.classList.toggle('no-transition');
    wrapper.classList.toggle('no-transition');
    navbar.classList.toggle('no-transition');
});

/* sidebar */
function toggleSidebar() {

    const sidebar = document.getElementById('l-sidebar');
    const wrapper = document.getElementById('wrapper');
    const navbar = document.getElementById('top-navbar');

    sidebar.classList.toggle('sidebar-active');
    wrapper.classList.toggle('body-padding');
    navbar.classList.toggle('body-padding');
}

document.addEventListener('DOMContentLoaded', function() {
    // Gestionnaire pour changer le rôle
    document.querySelectorAll('.change-role').forEach(item => {
        item.addEventListener('click', event => {
            const userId = event.target.getAttribute('data-user-id');
            const newRole = event.target.getAttribute('data-type');

            fetch(`/admin/user/change-role/${userId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ role: newRole })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Une erreur s\'est produite lors du changement de rôle.');
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    });

    // Gestionnaire pour changer le statut
    const statusChangeButton = document.getElementById('status-change');
    if (statusChangeButton) {
        statusChangeButton.addEventListener('click', event => {
            const userId = event.target.getAttribute('data-user-id');
            const newStatus = event.target.classList.contains('enable') ? 'active' : 'inactive';

            fetch(`/admin/user/change-status/${userId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ status: newStatus })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Une erreur s\'est produite lors du changement de statut.');
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    }
});
