

$('.compose-Container').on('click', function() {
    $('.modalwrapper').show();
});

$('.hi').on('click', function() {
    $('.modalwrapper').hide();
});
document.addEventListener('DOMContentLoaded', function () {
    const profileButton = document.querySelector('.profile-button');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    profileButton.addEventListener('click', function () {
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    });

    window.addEventListener('click', function (e) {
        if (!profileButton.contains(e.target)) {
            dropdownMenu.style.display = 'none';
        }
    });
});
function toggleDropdown(id) {
    var dropdown = document.getElementById('dropdown-menu-' + id);
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}

window.onclick = function(event) {
    if (!event.target.matches('.dropdown-toggle')) {
        var dropdowns = document.getElementsByClassName('dropdown-menu');
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.style.display === 'block') {
                openDropdown.style.display = 'none';
            }
        }
    }
}
function toggleDropdown(documents_id) {
    const dropdown = document.getElementById(`dropdown-menu-${documents_id}`);
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}

function toggleDropdown(documents_id) {
    const dropdown = document.getElementById(`dropdown-menu-${documents_id}`);
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}

function openDialog(documents_id) {
    fetch(`/documents/${documents_d}`)
        .then(response => response.json())
        .then(document => {
            document.getElementById('docId').innerText = document.documents_id;
            document.getElementById('docFile').innerText = document.file;
            document.getElementById('docDeadline').innerText = document.deadline;
            document.getElementById('docClassification').innerText = document.classification;
            document.getElementById('docSubclassification').innerText = document.sub_classification;

            document.getElementById('documentDialog').style.display = 'block';
        })
        .catch(error => console.error('Error fetching document:', error));
}

function closeDialog() {
    document.getElementById('documentDialog').style.display = 'none';
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.table-cell button')) {
        const dropdowns = document.getElementsByClassName('dropdown-menu');
        for (let i = 0; i < dropdowns.length; i++) {
            const openDropdown = dropdowns[i];
            if (openDropdown.style.display === 'block') {
                openDropdown.style.display = 'none';
            }
        }
    }

    const dialog = document.getElementById('documentDialog');
    if (event.target === dialog) {
        dialog.style.display = 'none';
    }
}
        // JavaScript to update counters dynamically
        document.addEventListener('DOMContentLoaded', function() {
            // Simulated data fetching function
            function fetchDocumentCounts() {
                return {
                    incoming: 10,
                    pending: 5,
                    received: 7,
                    outgoing: 3,
                    tasks: 15,
                    contributed: 8,
                    outgoingDocs: 6,
                    finished: 12
                };
            }

            // Update counters with fetched data
            const counts = fetchDocumentCounts();
            document.getElementById('incoming-counter').innerText = counts.incoming;
            document.getElementById('pending-counter').innerText = counts.pending;
            document.getElementById('received-counter').innerText = counts.received;
            document.getElementById('outgoing-counter').innerText = counts.outgoing;
            document.getElementById('task-counter').innerText = counts.tasks;
            document.getElementById('contributed-counter').innerText = counts.contributed;
            document.getElementById('outgoing-doc-counter').innerText = counts.outgoingDocs;
            document.getElementById('finished-counter').innerText = counts.finished;
        });