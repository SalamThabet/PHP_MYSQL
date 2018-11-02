<?php 
    
session_start();

require('../config/connection.php');
if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
    header('Location:login.php');
}
?>
<?php include('inc/header.php') ?>
<?php include('inc/nav.php') ?>
    <div class="container">
        <div class="row ">
                 <div class="col-md-8">
        <div class="card ">
            <ul>
                <?php
                        $sql2="SELECT * FROM category";
                        $sqlres=mysqli_query($conn,$sql2);
                        while($sres = mysqli_fetch_assoc($sqlres)){
                            ?>
                           <li><?php  echo $sres['name']?><a href="catdel.php?id=<?php echo $sres['id']; ?>">Delete</a>
                
                    <ul><?php 
                                $sql3="SELECT * FROM subcat where catid={$sres['id']}";
                        $sqlres_=mysqli_query($conn,$sql3);
                        while($sres_ = mysqli_fetch_assoc($sqlres_)){
                            ?>
                        <li><?php  echo $sres_['name']?></li>
                        <?php
                        }
                                ?>
                               </ul>
                
                
                
                            </li>
                    <?php    }?>
                        
            </ul>
                     </div>
       
        </div>
        <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-header">Header</div>
          <div class="card-body">
                With supporting text below as a natural lead-in to additional content
          </div>
        </div>
             <div class="card mb-3">
            <div class="card-header">Recent comments</div>
          <div class="card-body">
                With supporting text below as a natural lead-in to additional content
          </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">Recent posts</div>
          <div class="card-body">
                With supporting text below as a natural lead-in to additional content
          </div>
        </div>
        </div>
        </div>
    </div>
 <?php include('inc/footer.php') ?>
