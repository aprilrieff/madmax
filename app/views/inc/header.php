<?php /** @var TYPE_NAME $data */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $data["title"] ?> | <?php echo SITENAME; ?></title>
    <link href="<?php echo URLROOT; ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT; ?>/fonts/font-awesome/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URLROOT; ?>/fonts/glyphicons/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700%7CRoboto+Slab:400,700" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/plugins.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/map.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/styles/main.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/styles.css">
</head>
<body id="page-top" data-spy="scroll" data-target="#navbar-brand">
<div class="page-wrapper">
    <?php require_once(APPROOT . "/views/inc/navbar.php") ?>

