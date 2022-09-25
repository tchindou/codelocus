
<?php include("dev/includes/header.php"); ?>

<style>
    section{
          display: flex;
          width: 100%;
          height: 100%;
    }
    .left{
          width: 20vh;
          height: 100%;
    }
    .right{
          width: 80vh;
          height: 100%;
    }
</style>

<body>

<?php include("dev/includes/navbar.php"); ?>


<section>

      <div class="left">
          <?php include("data.php"); ?>
      </div>
      <div class="right">

      </div>

</section>


<?php include("dev/includes/footer.php"); ?>
