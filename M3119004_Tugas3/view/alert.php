<?php if(session_status() === PHP_SESSION_NONE): ?>
<?php session_start(); ?>
<?php endif; ?>
<?php if(isset($_SESSION['error'])): ?>
    <div class="p-3 fixed-top">
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['error']; ?>
        </div>
    </div>
<?php endif; ?>
<?php if(isset($_SESSION['message'])): ?>
    <div class="p-3 fixed-top">
        <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['message']; ?>
        </div>
    </div>
<?php endif; ?>
<?php session_destroy(); ?>
