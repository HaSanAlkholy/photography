


<div class="containe">
    <div class="row">
      <div class="col-md-3 sidebar bg-dark">
        <nav class="sidebar-nav">
          <div class="sidebar-header">
            <button class="nav-toggler nav-toggler-md sidebar-toggler" type="button" data-toggle="collapse" data-target="#nav-toggleable-md">
              <span class="sr-only">Toggle nav</span>
            </button>
            <?php
						  $query = "SELECT * FROM `main` WHERE `id` = 8"; 

						  $res = mysqli_query($conn,$query);
						  
						  $row = mysqli_fetch_assoc($res);

						  ?>
            <a class="sidebar-brand img-responsive" href="../index/">
             <img src="../../img/<?php echo $row['pic']; ?>" alt="logo">
            </a>
          </div>

          <div class="collapse nav-toggleable-md" id="nav-toggleable-md">
         
            <ul class="nav nav-pills nav-stacked flex-column">
              <li class="nav-header mb-3">Dashboards</li>
              <li class="nav-item">
                <a class="nav-link <?php if ($current == "Main") {echo "active";}?> " href="../index/">Main</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if ($current == "Pictures") {echo "active";}?>" href="../pictures/">Pictures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if ($current == "Blog") {echo "active";}?>" href="../blog/">Blog</a>
              </li>
              <?php
               $query = "SELECT * FROM `messages`"; 

               $res = mysqli_query($conn,$query);
               
               $row = mysqli_num_rows($res);
          
              ?>
              <li class="nav-item">
                <a class="nav-link <?php if ($current == "Messages") {echo "active";}?>" href="../messages/">Messages <span class="badge badge-danger float-right"><?php echo $row;?></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if ($current == "Users") {echo "active";}?>" href="../users/">Users</a>
              </li>            
              <li class="nav-item">
                <a class="nav-link " href="../functions/logout.php">log Out</a>
              </li>
             
            </ul>
            <hr class="visible-xs mt-3">
          </div>
        </nav>
      </div>
      <div class="col-md-9 content"style="padding:50px;">
        <div class="dashhead">
  <div class="dashhead-titles">
    <h2 class="dashhead-title"><?php echo $current;?></h2>
  </div>

  <div class="btn-toolbar dashhead-toolbar">
    <div class="btn-toolbar-item input-with-icon">    
    </div>
  </div>
</div>

<hr class="mt-3">