<head>
   <?php include('header.html');
   require_once 'StockWatchDAO.php' ?>
</head>

<body>
   <section class="section">
      <div class="container">
         <h1 class="title">
            Stock Watch
         </h1>
         <p class="subtitle">
            Your online investment banker!
         </p>
      </div>
      <div class="tabs is-centered">
         <ul>
            <li class="is-active"><a href="./?page=Portfolio">Portfolio</a>
            <li><a href="./?page=Stock">Stocks</a></li>
            <li><a href="./?page=Account">Account</a></li>
            <li><a href="./?page=Bank">Bank</a></li>
            <li><a href="./?page=Transactions">Transactions</a></li>
            <!-- <li><a href="./?page=Rates">Rates</a></li> -->
         </ul>
      </div>
      <?php

      if (isset($_GET['page'])) {
         $tabName = $_GET['page'];
      } else {
         $tabName = "Portfolio";
      }


      ?>
      <section class="section">
         <div class="columns is-centered">
            <div class="column is-narrow">
               <table class="table is-centered is-striped is-hoverable">
                  <thead>
                     <?php
                     $dao = new StockWatchDAO($tabName);

                     echo ("<tr>");
                     foreach ($dao->getColumns() as $column) {
                        echo ("<th>" . $column . "</th>");
                     }
                     echo ("</tr>");
                     ?>
                  </thead>
                  <tbody>
                     <?php
                     $result = $dao->getRows();
                     print_r($tabName);
                     while ($row = $result->fetchArray(SQLITE3_NUM)) {
                        echo ("<tr>");
                        for ($colnum = 0; $colnum < count($row); $colnum++) {
                           echo ("<td>" . ucfirst($row[$colnum]) . "</td>");
                        }
                        echo ("</tr>");
                     }
                     ?>
                  </tbody>
               </table>
            </div>
         </div>
         <!-- <section class="section is-one-third has-background-link"></section> -->
         
            <form action="./handleForm.php" method="post">
               <input type="hidden" name="tabName" id="tabName" value="$tabName">
            
            <?php
            // echo ("<h3 class=\"subtitle\">" . $dao->getFormTitle() . "</h3>");
            
            echo $dao->getForm();
            ?>
            </form>
            
      </section>
   </section>
</body>

</html>