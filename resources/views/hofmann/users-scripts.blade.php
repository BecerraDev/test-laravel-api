<!--  Script del modal y fetch -->

<script>
function openModal(user) {
    document.getElementById('id').value = user.id;
    document.getElementById('code').value = user.code;
    document.getElementById('amount').value = user.amount;
    document.getElementById('date').value = user.date.substring(0, 10);
    document.getElementById('github').value = user.github ?? '';

    const modal = new bootstrap.Modal(document.getElementById('editModal'));
    modal.show();
}

document.getElementById('userForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Mostrar overlay
    document.getElementById('loadingOverlay').style.display = 'flex';

    const payload = {
        id: document.getElementById('id').value,
        code: document.getElementById('code').value,
        amount: document.getElementById('amount').value,
        date: new Date(document.getElementById('date').value).toISOString(),
        github: document.getElementById('github').value
    };

    fetch('{{ url("/hofmann/send-user") }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify(payload)
    })
    .then(response => {
        // Ocultar overlay antes de recargar
        document.getElementById('loadingOverlay').style.display = 'none';

        if (response && response.status === 200) {
            alert('¡Éxito! Código de respuesta: ' + response.status);
            setTimeout(() => {
                location.reload();
            }, 100);
        } else if (response && response.status) {
            alert('Error al enviar usuario. Código de respuesta: ' + response.status);
        } else {
            alert('Respuesta inesperada del servidor');
        }
    })
    .catch(() => {
        document.getElementById('loadingOverlay').style.display = 'none';
        alert('Error de conexión. Intenta de nuevo.');
    });
});

// Asegura ocultar el overlay al cargar la página
window.addEventListener('load', () => {
    document.getElementById('loadingOverlay').style.display = 'none';
});
</script>