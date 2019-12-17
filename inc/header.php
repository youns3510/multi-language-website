<?php
if (!isset($_SESSION)) {
  session_start([
    'cookie_lifetime' => 86400,
  ]);
}
if (isset($_GET['destroy'])) {
  session_destroy();
  header('location:/index.php');
}
$host = '//' . $_SERVER['HTTP_HOST'] . '/';



?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo empty($title) ? $website_name : $title . ' | ' . $website_name; ?></title>
  <?php if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar') {
            echo '<link rel="stylesheet" href="' . $host . 'inc/css/bootstrap_ar.min.css">';
          } else {
            echo '<link rel="stylesheet" href="' . $host . 'inc/css/bootstrap.min.css">';
          }
  ?>
<link rel="stylesheet" href="<?php echo $host; ?>inc/css/main.css">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><?php $website_name; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="clearfix w-100">
        <ul class="navbar-nav float-left">
          <li class="nav-item <?php echo (($_SERVER['REQUEST_URI'] === '/index.php') ||($_SERVER['REQUEST_URI'] === '/'))? ' active' : ''; ?>">
            <a class="nav-link" href="/"><?php echo $home; ?><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item<?php echo (($_SERVER['REQUEST_URI'] === '/dolor/index.php') ||($_SERVER['REQUEST_URI'] === '/dolor/')) ? ' active' : ''; ?>">
            <a class="nav-link" href="/dolor/"><?php echo $dolor; ?></a>
          </li>
          <li class="nav-item<?php echo (($_SERVER['REQUEST_URI'] === '/dummy/index.php') ||($_SERVER['REQUEST_URI'] === '/dummy/')) ? ' active' : ''; ?>">
            <a class="nav-link" href="/dummy/"><?php echo $dummy; ?></a>
          </li>
          <li class="nav-item<?php echo (($_SERVER['REQUEST_URI'] === '/ipsum/index.php') ||($_SERVER['REQUEST_URI'] === '/ipsum/')) ? ' active' : ''; ?>">
            <a class="nav-link" href="/ipsum/"><?php echo $ipsum; ?></a>
          </li>
          <li class="nav-item<?php echo (($_SERVER['REQUEST_URI'] === '/lorem/index.php') ||($_SERVER['REQUEST_URI'] === '/lorem/')) ? ' active' : ''; ?>">
            <a class="nav-link" href="/lorem/"><?php echo $lorem; ?></a>
          </li>
        </ul>

        <ul class="navbar-nav float-right">
          <?php
                                                if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'en') {
                                                  echo '<li class="nav-item active">
                                  <a href="?lang=ar" class="nav-link">النسخة العربيه</a>
                                </li>';
                                                }
                                                if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar') {
                                                  echo '<li class="nav-item active">
                                  <a href="?lang=en" class="nav-link">English Version</a>
                                </li>';
                                                }

                                                if (!isset($_GET['lang']) && !isset($_SESSION['lang'])) {
                                                  echo '<li class="nav-item active">
                                  <a href="?lang=ar" class="nav-link">النسخة العربيه</a>
                                </li>';
                                                }
          ?>


        </ul>
      </div>
    </div>
  </nav>