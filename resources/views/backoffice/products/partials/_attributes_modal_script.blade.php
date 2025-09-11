<script>
document.addEventListener('DOMContentLoaded', function () {
    const wrapper = document.getElementById('characteristics-container');
    const template = document.getElementById('characteristic-template');
    const deletedInput = document.getElementById('deleted-characteristic-ids');

    function reindexCharacteristics() {
        wrapper.querySelectorAll('.characteristic-row').forEach((row, index) => {
            row.querySelectorAll('input').forEach(input => {
                if (input.name.includes('[attribute_name]')) {
                    input.name = `characteristics[${index}][attribute_name]`;
                } else if (input.name.includes('[value]')) {
                    input.name = `characteristics[${index}][value]`;
                } else if (input.name.includes('[position]')) {
                    input.name = `characteristics[${index}][position]`;
                } else if (input.name.includes('[id]')) {
                    input.name = `characteristics[${index}][id]`;
                }
            });
        });
    }

    function refreshPreview() {
        const preview = document.getElementById('characteristics-preview');
        const rows = wrapper.querySelectorAll('.characteristic-row');
        const list = [];

        rows.forEach(row => {
            const name = row.querySelector('input[name*="[attribute_name]"]')?.value.trim();
            const value = row.querySelector('input[name*="[value]"]')?.value.trim();
            if (name || value) {
                list.push(`<li class="mb-1"><strong>${name || '-'}</strong> : ${value || '-'}</li>`);
            }
        });

        preview.innerHTML = list.length
            ? `<ul class="list-unstyled mb-0">${list.join('')}</ul>`
            : '<p class="text-muted mb-0">Aucune caractéristique n’est disponible.</p>';
    }

    document.getElementById('btn-add-characteristic')?.addEventListener('click', () => {
        if (template && wrapper) {
            wrapper.appendChild(template.content.cloneNode(true));
            reindexCharacteristics();
            refreshPreview();
        }
    });

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('btn-remove-characteristic')) {
            const row = e.target.closest('.characteristic-row');
            const id = e.target.dataset.id;

            if (row.dataset.existing === '1' && id) {
                const current = deletedInput.value ? deletedInput.value.split(',') : [];
                current.push(id);
                deletedInput.value = current.join(',');
            }

            row.remove();
            reindexCharacteristics();
            refreshPreview();
        }
    });

    document.addEventListener('input', function (e) {
        if (e.target.closest('.characteristic-row')) {
            reindexCharacteristics();
            refreshPreview();
        }
    });

    document.getElementById('characteristicsModal')?.addEventListener('hidden.bs.modal', function () {
        reindexCharacteristics();
        refreshPreview();
    });

    document.getElementById('product-form')?.addEventListener('submit', function () {
        reindexCharacteristics();
    });

    reindexCharacteristics();
    refreshPreview();
});
</script>
