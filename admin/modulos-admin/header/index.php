<?php
    include_once 'config/config.php';
?>


<!-- META TAGS -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo $base_url ?>assets/imagens/favicon-admin/thumb-admin.jpg">
<meta property="og:image:width" content="310">
<meta property="og:image:height" content="310">
<meta property="og:title" content="<?php echo $title_site ?>">
<meta name="description" content="<?php echo $descri_site ?>">
<meta property="og:description" content="<?php echo $descri_site ?>">
<meta property="og:url" content="<?php echo $base_url ?>">

<!-- SUMMERNOTE -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

<!-- FAVICON -->
<link rel="icon" href="<?php echo $base_url ?>assets/imagens/favicon-admin/favicon-admin.png">

<!--FONTAWSOME-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

<!--BOOSTRAP-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<!-- GLOBAL CSS -->
<link rel="stylesheet" href="<?php echo $base_url ?>assets/css-global/style.css">

<!-- BASE URL JS -->
<script>
    var base_url = "<?= $_ENV['BASE_URL'] ?>admin";
</script>

<!-- GLOBAL JS -->
<script src="<?php echo $base_url ?>assets/js-global/app.js"></script>


<title><?php echo $pagAtual ?></title>