<?php 
    
session_start();

require('../config/connection.php');
if(!isset($_SESSION['email']) & empty($_SESSION['email'])){
    header('Location:login.php');
}

if(isset($_POST) & !empty($_POST)){
    if(!isset($_POST['maincat']) & empty($_POST['maincat'])){
        $name=$_POST['name'];
        $description=$_POST['description'];
        $sql = " INSERT INTO category (name,description) VALUES ('$name','$description') ";
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($result){
            $smsg = "Added succesfully";
        }else{
            $fmsg="Failed added";
        }
    }
    if(isset($_POST['maincat']) & !empty($_POST['maincat'])){
        $catid=$_POST['maincat'];
        $name=$_POST['name'];
        $description=$_POST['description'];
        $sql = " INSERT INTO subcat (catid,name,description) VALUES ($catid,'$name','$description') ";
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($result){
            $smsg = "Added sub  category succesfully";
        }else{
            $fmsg="Failed added sub  category";
        }
    }
}
?>

<?php include('inc/header.php') ?>
      <?php include('inc/nav.php') ?>

    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <?php if(isset($smsg)){ ?> <div class="alert alert-success" role="alert"><?php echo $smsg; ?></div><?php } ?>
                 <?php if(isset($fmsg)){ ?> <div class="alert alert-danger" role="alert"><?php echo $fmsg; ?></div><?php } ?>

                 <div class="card" style="padding: 20px;">
                
                <form method="post" action="">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="name" type="text" class="form-control"  placeholder="Enter Category name">
                  </div>
                   <div class="form-group">
                    <label for="exampleFormControlTextarea1">Catgory description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>  
                  
                  <button type="submit" class="btn btn-primary">Add category</button>
                </form>
                </div>
            </div>
            <div class="col-md-6">
                 <?php if(isset($smsg)){ ?> <div class="alert alert-success" role="alert"><?php echo $smsg; ?></div><?php } ?>
                 <?php if(isset($fmsg)){ ?> <div class="alert alert-danger" role="alert"><?php echo $fmsg; ?></div><?php } ?>
            <div class="card" style="padding: 20px;">
              <form method="post">
                  
                  
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Select main categry</label>
                    <select name="maincat"  class="form-control" >
                        <?php
                        $sql2="SELECT * FROM category";
                        $sqlres=mysqli_query($conn,$sql2);
                        while($sres = mysqli_fetch_assoc($sqlres)){
                        ?>
                        
                      <option value="<?php echo $sres['id'] ?>"><?php echo $sres['name'] ?></option>
                    
                        <?php }  ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input  name="name" type="text" class="form-control"  placeholder="Enter Sub Category name">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Sub Catgory description</label>
                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div> 
                  
                  <button type="submit" class="btn btn-primary">Add sub category</button>
                </form>
            </div>
              
           
            </div>
        </div>
    </div>

<br>
<br>
<div class="container">
        <div class="row ">
                 <div class="col-md-12">
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
                     </div></div></div></div>
       <?php include('../inc/footer.php') ?>
