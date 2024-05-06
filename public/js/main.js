    // ck-5 editor
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
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
    $(document).ready(function() {
        // Select/deselect all checkboxes when header checkbox is clicked
        $('#checkerOfAllBoxes').on('click', function() {
            if (this.checked) {
                $('input[type="checkbox"]').each(function() {
                    this.checked = true;
                });
            } else {
                $('input[type="checkbox"]').each(function() {
                    this.checked = false;
                });
            }
        });
        // table search field
        $(".input-text").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            var found = false;
            $(".data-table tr").each(function() {
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
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButtons = document.querySelectorAll(".toggle-container");
        toggleButtons.forEach(function(toggleButton) {
            toggleButton.addEventListener("click", function() {
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

    searchInput.addEventListener('keydown', function(event) {
        if (event.key === 'Enter')
            performSearch();
    });
