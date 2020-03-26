<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    img {
      height: 200px;
      width: 200px
    }

    section {
      display: flex
    }

    #card {
      border: 1px solid black;
      margin: 10px;
      padding: 5px;
    }

    #products {
      top: 0;
      left: 0;
    }
  </style>
</head>

<body>
  <?php
  include_once 'nav-bar.php';
  ?>
  <main>
    <section>

      <?php
      require_once 'database.php';
      $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
      $query = 'SELECT * FROM product';
      $result_query = mysqli_query($connect, $query);
      while ($row = mysqli_fetch_assoc($result_query)) {
        echo '<div id="card">';
        echo '<img src="' . $row['picture'] . '">';
        echo '<h2>  ' . $row['name'] . '</h2>';
        echo '<h3> category : ' . $row['category'] . '</h3>';
        echo '<h4> pric : ' . $row['price'] . '</h4>';
        echo '<button value="' . $row['id'] . '"> Add to cart </button>';
        echo '</div>';
      }
      ?>
    </section>

  </main>

  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script>
    $(function() {
      $('button').click(function(e) {
        e.preventDefault();
        $.ajax({
          url: "addToCart.php",
          type: "post",
          data: {
            button: $(this).val()
          },
          success: function(result) {
            $("#products").html(result);

            //$("#cart").load(location.href + " #cart");
          },
          error: function(err) {}
        });
      });
    });

    function products() {

      let x = document.getElementById("products");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>
</body>

</html>