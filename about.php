<!DOCTYPE html> 
<html lang="en">
<head> 
    <meta charset="UTF-8"> 
    <link rel="stylesheet" href="style.css" type="text/css">
    <title><?= $title; ?></title> 
</head> 
<body> 
<?= $this->include('template/header'); ?> 

<h1><?= $title; ?></h1> 
<hr> 
<p><?= $content; ?></p> 

<?= $this->include('template/footer'); ?> 
</body> 
</html>