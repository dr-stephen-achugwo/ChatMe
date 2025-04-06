<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }

  include_once "php/getinfo.php";
 $st = $col['status_band'];
 $uid = $col['unique_id'];

 if( $st != "active"){
  header("location: php/logout.php?logout_id= $uid");
}
   
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select &amp; Click a user to chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div>
      <a href="group.php">
                    <div class="content">
                    <div class="status-dot "><i class="fas fa-arrow-right"></i></div>
                    <div class="details">
                        <span> Group</span>
                    </div>
                    </div>
                    
                </a>
      </div>
      <br/>
      
      <div class="users-list">
      
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>
