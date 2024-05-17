// ck-5 editor
ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
    });
// Get all tab buttons and tab panels
const tabButtons = document.querySelectorAll('.tab-button');
const tabPanels = document.querySelectorAll('.tab-panel');
// Function to switch tabs
function switchTab(event) {
    // Prevent default behavior
    event.preventDefault();
    // Hide all tab panels
    tabPanels.forEach(panel => {
        panel.classList.remove('active');
    });
    // Deactivate all tab buttons
    tabButtons.forEach(button => {
        button.setAttribute('aria-selected', 'false');
    });
    // Activate the clicked tab button
    this.setAttribute('aria-selected', 'true');
    // Show the corresponding tab panel
    const tabPanelId = this.getAttribute('aria-controls');
    const tabPanel = document.getElementById(tabPanelId);
    tabPanel.classList.add('active');
}
// Add click event listener to each tab button
tabButtons.forEach(button => {
    button.addEventListener('click', switchTab);
});
$(document).ready(function () {
    // Select/deselect all checkboxes when header checkbox is clicked
    $('#checkerOfAllBoxes').on('click', function () {
        if (this.checked) {
            $('input[type="checkbox"]').each(function () {
                this.checked = true;
            });
        } else {
            $('input[type="checkbox"]').each(function () {
                this.checked = false;
            });
        }
    });
    // table search field
    $(".input-text").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        var found = false;
        $(".data-table tr").each(function () {
            var inputText = $(this).find("td:eq(0)").text().toLowerCase();
            if (inputText.indexOf(value) > -1) {
                $(this).show();
                found = true;
            } else {
                $(this).hide();
            }
        });
        if (!found) {
            $(".no-Results").show();
        } else {
            $(".no-Results").hide();
        }
    });
});

// Toggle Button JS
document.addEventListener("DOMContentLoaded", function () {
    const toggleButtons = document.querySelectorAll(".toggle-container");
    toggleButtons.forEach(function (toggleButton) {
        toggleButton.addEventListener("click", function () {
            toggleButton.classList.toggle("on");
            const ariaPressed = toggleButton.getAttribute("aria-pressed");
            toggleButton.setAttribute("aria-pressed", ariaPressed === "true" ? "false" :
                "true");
        });
    });
});

// Global Search js 

const searchInput = document.getElementById('global-search');
function handleKeyPress(event) {
    if (event.key === '/') {
        searchInput.focus();
        event.preventDefault();
    }
}

function performSearch() {
    const searchTerm = searchInput.value.trim();
    searchInput.value = '';
}

document.addEventListener('keydown', handleKeyPress);

searchInput.addEventListener('keydown', function (event) {
    if (event.key === 'Enter')
        performSearch();
});
document.addEventListener('click', function (event) {
    const dropdownButtons = document.querySelectorAll('.dropdown button');
    const dropdownContents = document.querySelectorAll('.dropdown-content');

    dropdownButtons.forEach((button, index) => {
        const content = dropdownContents[index];
        if (button.contains(event.target)) {
            content.classList.toggle('hidden');
        } else {
            content.classList.add('hidden');
        }
    });
});

$(document).ready(function () {
    $('.nav-toggle').click(function () {
        $('.nav-main').toggleClass('hidden');
        $('.workspace').toggleClass('shifted');
    });
});

// off-canvas js

// Get all buttons and overlays
const buttons = document.querySelectorAll('button[data-hs-overlay]');
const overlays = document.querySelectorAll('.hs-overlay');
const closeButtons = document.querySelectorAll('.btn-close');

// Add event listeners to all buttons
buttons.forEach((button, index) => {
    const overlay = overlays[index];
    const closeButton = closeButtons[index];

    button.addEventListener('click', function() {
        // Toggle the 'hidden' class on the overlay
        overlay.classList.toggle('hidden');
        // Toggle the '-translate-x-full' class on the overlay
        overlay.classList.toggle('-translate-x-full');
    });

    closeButton.addEventListener('click', function() {
        // Add the 'hidden' class on the overlay
        overlay.classList.add('hidden');
        // Add the '-translate-x-full' class on the overlay
        overlay.classList.add('-translate-x-full');
    });
});

/*
    

// Off-canvas js

// Get all buttons and overlays
const buttons = document.querySelectorAll('button[data-hs-overlay]');
const overlays = document.querySelectorAll('.hs-overlay');
const closeButtons = document.querySelectorAll('.btn-close');

// Function to close all overlays
function closeAllOverlays() {
    overlays.forEach(overlay => {
        overlay.classList.add('hidden');
        overlay.classList.add('-translate-x-full');
    });
}

// Add event listeners to all buttons
buttons.forEach((button, index) => {
    const overlay = overlays[index];
    const closeButton = closeButtons[index];

    button.addEventListener('click', function() {
        // Close all overlays before opening the current one
        closeAllOverlays();
        
        // Toggle the 'hidden' class on the overlay
        overlay.classList.toggle('hidden');
        // Toggle the '-translate-x-full' class on the overlay
        overlay.classList.toggle('-translate-x-full');
    });

    closeButton.addEventListener('click', function() {
        // Add the 'hidden' class on the overlay
        overlay.classList.add('hidden');
        // Add the '-translate-x-full' class on the overlay
        overlay.classList.add('-translate-x-full');
    });
});

*/