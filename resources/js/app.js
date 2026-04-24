import TomSelect from 'tom-select';

document.addEventListener('DOMContentLoaded', () => {
    // Initialize Tom Select for single select elements
    const singleSelects = document.querySelectorAll('#venue_country, #phone_country_code, #race_type, #expected_capacity');

    singleSelects.forEach(select => {
        new TomSelect(select, {
            create: false,
            sortField: { field: 'text', direction: 'asc' },
            plugins: {
                dropdown_input: {}
            }
        });
    });

    // Initialize Tom Select for multi-select (services)
    const multiSelect = document.querySelector('#services');
    if (multiSelect) {
        new TomSelect(multiSelect, {
            plugins: {
                dropdown_input: {},
                remove_button: {
                    label: '&times;'
                }
            },
            persist: false,
            create: false,
            sortField: { field: 'text', direction: 'asc' },
            maxItems: null,
            placeholder: multiSelect.getAttribute('placeholder') || 'Select services...',
            onItemAdd: function() {
                this.clearActiveItems();
            }
        });
    }
});