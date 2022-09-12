
<?php include('header.php'); ?>
<body>

<?php include('navbar.php'); ?>
<h1 class="page-header text-center">REVIEW SYSTEM</h1>
<br>
<div class="container">
<link href="style.css" rel="stylesheet" type="text/css">
<link href="CSS/reviews.css" rel="stylesheet" type="text/css">
  <div class="reviews"></div>
  
  <script>
    const reviews_page_id = 1;
    fetch("reviews.php?page_id=" + reviews_page_id)
      .then((response) => response.text())
      .then((data) => {
        document.querySelector(".reviews").innerHTML = data;
        document.querySelector(".reviews .write_review_btn").onclick = (
          event
        ) => {
          event.preventDefault();
          document.querySelector(".reviews .write_review").style.display =
            "block";
          document
            .querySelector(".reviews .write_review input[name='name']")
            .focus();
        };
        document.querySelector(".reviews .write_review form").onsubmit = (
          event
        ) => {
          event.preventDefault();
          fetch("reviews.php?page_id=" + reviews_page_id, {
            method: "POST",
            body: new FormData(
              document.querySelector(".reviews .write_review form")
            ),
          })
            .then((response) => response.text())
            .then((data) => {
              document.querySelector(".reviews .write_review").innerHTML = data;
            });
        };
      });
  </script>
  </div>
</link>






