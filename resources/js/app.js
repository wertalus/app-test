import './bootstrap';

import '../../node_modules/@popperjs/core/dist/umd/popper.js'

import '../../node_modules/bootstrap/dist/js/bootstrap.js'

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

import sort from '@alpinejs/sort'
Alpine.plugin(sort)

import jQuery from 'jquery';
window.$ = jQuery;
Livewire.start()

document.addEventListener("DOMContentLoaded", function (event) {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map((tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl));
});

$('#propfile-button').on('click', function(e) {
  e.preventDefault();
  return false;
});



const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = `${recipient}`
    modalBodyInput.value = recipient
  })
}

    document.addEventListener('DOMContentLoaded', function() {
        // Add dark mode toggle button next to menu (top left)
        const container = document.querySelector('.container-fluid.text-center');
        if(container && !document.getElementById('darkModeToggle')) {
            const toggleBtn = document.createElement('button');
            toggleBtn.id = 'darkModeToggle';
            toggleBtn.className = 'btn btn-outline-secondary ms-2';
            toggleBtn.innerHTML = '<i class="bi bi-moon"></i> Tryb ciemny';
            toggleBtn.style.position = 'absolute';
            toggleBtn.style.left = '20px';
            toggleBtn.style.top = '10px';
            toggleBtn.onclick = function() {
                document.body.classList.toggle('dark-mode');
                if(document.body.classList.contains('dark-mode')) {
                    localStorage.setItem('darkMode', '1');
                    toggleBtn.innerHTML = '<i class="bi bi-sun"></i> Tryb jasny';
                } else {
                    localStorage.removeItem('darkMode');
                    toggleBtn.innerHTML = '<i class="bi bi-moon"></i> Tryb ciemny';
                }
            };
            container.prepend(toggleBtn);
            // Set initial state
            if(localStorage.getItem('darkMode')) {
                document.body.classList.add('dark-mode');
                toggleBtn.innerHTML = '<i class="bi bi-sun"></i> Tryb jasny';
            }
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
    if(document.getElementById('park-area')) {
        window.draggedWagonId = null;
        window.dragWagon = function(e) {
            window.draggedWagonId = e.target.getAttribute('data-wagon-id');
            e.dataTransfer.effectAllowed = 'move';
            e.dataTransfer.setData('text/plain', window.draggedWagonId);
            e.target.classList.add('dragging');
            // Ukryj wagon podczas drag (ale nie sloty)
            setTimeout(() => {
                e.target.style.visibility = 'hidden';
            }, 0);
        };
        // Przywróć widoczność po zakończeniu drag
        document.querySelectorAll('.park-wagon').forEach(function(wagon) {
            wagon.addEventListener('dragend', function(e) {
                e.target.classList.remove('dragging');
                e.target.style.visibility = '';
            });
        });
        // Blokada drop na wagonie (zawsze pokazuj ikonę zakazu na wagonie podczas dragover)
        document.querySelectorAll('.park-wagon').forEach(function(wagon) {
            wagon.addEventListener('dragenter', function(e) {
                // ZAWSZE pokazuj ikonę zakazu na każdym wagonie, nawet na sobie
                wagon.classList.add('wagon-denied');
                document.querySelectorAll('.drop-slot').forEach(slot => slot.classList.remove('slot-over'));
                document.querySelectorAll('.park-track').forEach(track => track.classList.remove('drag-over'));
            });
            wagon.addEventListener('dragover', function(e) {
                wagon.classList.add('wagon-denied');
                e.preventDefault();
            });
            wagon.addEventListener('dragleave', function(e) {
                wagon.classList.remove('wagon-denied');
            });
            wagon.addEventListener('drop', function(e) {
                e.preventDefault();
                wagon.classList.remove('wagon-denied');
                document.querySelectorAll('.drop-slot').forEach(slot => slot.classList.remove('slot-over'));
                document.querySelectorAll('.park-track').forEach(track => track.classList.remove('drag-over'));
                document.querySelectorAll('.park-wagon.dragging').forEach(function(dragged) {
                    dragged.style.visibility = '';
                });
            });
        });
        // Po każdej zmianie DOM (np. po dropie) ponownie podpinaj eventy do nowych wagonów
        window.refreshWagonDnDEvents = function() {
            // Odsłoń wszystkie wagony i usuń klasę dragging po każdej zmianie DOM
            document.querySelectorAll('.park-wagon').forEach(function(wagon) {
                wagon.classList.remove('dragging');
                wagon.style.visibility = '';
                wagon.removeAttribute('data-dnd-initialized');
            });
            // Następnie podpinaj eventy do wszystkich wagonów
            document.querySelectorAll('.park-wagon').forEach(function(wagon) {
                if (!wagon.hasAttribute('data-dnd-initialized')) {
                    wagon.setAttribute('data-dnd-initialized', '1');
                    // Dodaj dragstart i dragend
                    wagon.addEventListener('dragstart', function(e) {
                        window.draggedWagonId = e.target.getAttribute('data-wagon-id');
                        e.dataTransfer.effectAllowed = 'move';
                        e.dataTransfer.setData('text/plain', window.draggedWagonId);
                        e.target.classList.add('dragging');
                        setTimeout(() => {
                            e.target.style.visibility = 'hidden';
                        }, 0);
                    });
                    wagon.addEventListener('dragend', function(e) {
                        e.target.classList.remove('dragging');
                        e.target.style.visibility = '';
                    });
                    wagon.addEventListener('dragenter', function(e) {
                        wagon.classList.add('wagon-denied');
                        document.querySelectorAll('.drop-slot').forEach(slot => slot.classList.remove('slot-over'));
                        document.querySelectorAll('.park-track').forEach(track => track.classList.remove('drag-over'));
                    });
                    wagon.addEventListener('dragover', function(e) {
                        wagon.classList.add('wagon-denied');
                        e.preventDefault();
                    });
                    wagon.addEventListener('dragleave', function(e) {
                        wagon.classList.remove('wagon-denied');
                    });
                    wagon.addEventListener('drop', function(e) {
                        e.preventDefault();
                        wagon.classList.remove('wagon-denied');
                        document.querySelectorAll('.drop-slot').forEach(slot => slot.classList.remove('slot-over'));
                        document.querySelectorAll('.park-track').forEach(track => track.classList.remove('drag-over'));
                        document.querySelectorAll('.park-wagon.dragging').forEach(function(dragged) {
                            dragged.style.visibility = '';
                        });
                    });
                }
            });
        };
        // Odśwież eventy po każdej zmianie DOM przez Livewire
        document.addEventListener('livewire:navigated', window.refreshWagonDnDEvents);
        document.addEventListener('livewire:update', window.refreshWagonDnDEvents);
        document.addEventListener('livewire:load', window.refreshWagonDnDEvents);

        // Obsługa drop na slot
        window.handleSlotDrop = function(e, trackNo, slotIndex) {
            e.preventDefault();
            document.querySelectorAll('.drop-slot').forEach(slot => slot.classList.remove('slot-over'));
            let wagonId = window.draggedWagonId || e.dataTransfer.getData('text/plain');
            if (!wagonId) {
                // Jeśli nie ma wagonu, przywróć widoczność wszystkich ukrytych wagonów
                document.querySelectorAll('.park-wagon.dragging').forEach(function(dragged) {
                    dragged.style.visibility = '';
                });
                return;
            }
            if (window.Livewire && typeof window.Livewire.dispatch === 'function') {
                window.Livewire.dispatch('moveWagon', {wagonId, trackNo, insertIndex: slotIndex});
            }
            window.draggedWagonId = null;
        };

        // Jeśli drop nie nastąpił na slot, przywróć wagon na miejsce (np. drop na tor, na wagon, poza slotem)
        document.addEventListener('drop', function(e) {
            // Sprawdź czy drop nie był na slot
            if (!e.target.classList.contains('drop-slot')) {
                document.querySelectorAll('.park-wagon.dragging').forEach(function(dragged) {
                    dragged.style.visibility = '';
                });
                // Wyłącz podświetlenie torów
                document.querySelectorAll('.park-track').forEach(track => track.classList.remove('drag-over'));
            }
        });

        window.highlightTrack = function(e, el) {
            e.preventDefault();
            el.classList.add('drag-over');
        }
        window.unhighlightTrack = function(e, el) {
            el.classList.remove('drag-over');
        }
    }
});

