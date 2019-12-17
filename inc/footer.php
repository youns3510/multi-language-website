<!-- <div class="text-center">
 <a href="?destroy" class="btn btn-success">
 <?php //echo (isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar')? 'اﻻفتراضى':'default';?> 
 </a>'

</div> -->
<footer>
  <a class="nav-link float-left" href="/"><?php echo $website_name; ?></a>
  <a class="nav-link float-right" href="mailto:youns3510@gmail.com">Younes Mahmoud</a>
  <span class="nav-link float-right"><?php echo (isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar')? 'تطوير : ':'Developed By:';?> </span>
</footer>
<script src="<?php echo $host; ?>inc/js/jquery.min.js"></script>
<script src="<?php echo $host; ?>inc/js/popper.min.js"></script>
<?php if (isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar') {
echo '  <script src="' . $host . 'inc/js/bootstrap_ar.min.js"></script>';
} else {
echo '  <script src="' . $host . 'inc/js/bootstrap.min.js"></script>';
}
?>

</body>

</html>