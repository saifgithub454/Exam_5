<script>
    function showContent(section) {
        document.querySelectorAll('.content').forEach(div => div.classList.remove('active'));
        document.getElementById(section).classList.add('active');
        document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
        document.querySelector(`[onclick="showContent('${section}')"]`).classList.add('active');
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>