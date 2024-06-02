<?php $script_path = get_stylesheet_directory_uri().'/inc/js'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php if(is_front_page()):?>
    <script src="<?php echo $script_path; ?>/index.js"></script>
<?php endif;?>