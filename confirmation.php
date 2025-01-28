<?php
include('includes/header.php');
?>
<section id="confirmation-message">
    <p>The property has been added successfully!</p>
</section>
<script>
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 3000);
</script>

<?php
include('includes/footer.php');
?>