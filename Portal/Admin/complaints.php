

<section class="my-5 bg-success" >
  <div class="container w-50 m-auto  py-5">
    <h2 id="complaints" class="text-center text-white ">Complaints</h2>
  <form action="#" method="post" class="was-validated">
     <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>CNIC</th>
                                                        <th>Phone</th>
                                                        <th>Complain</th>
                                                        <th>Accept</th>
                                                        <th>Reject</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                        <?php
                                        if (session_status() === PHP_SESSION_NONE) { session_start();}
                                            $query = "SELECT * FROM p_complaints";
                                            $result = mysqli_query($conn,$query);
                                            if ($result->num_rows > 0) {            
                                            while($row = mysqli_fetch_array($result))
                                                {
                                                   
                                        ?>      
                                                    <tr>
                                                      <?php $id= $row['c_id']; ?>
                                                        <?php $name= $row['name']; ?>
                                                       <?php $a= $row['CNIC']; ?>
                                                        <?php $b= $row['phone']; ?>
                                                        <?php $c= $row['complaints']; ?>
                                                       <td><?php echo $name ?></td>
                                                        <td><?php echo $a ?></td>
                                                        <td><?php echo $b ?></td>
                                                        <td><?php echo $c ?></td>
                                                        
                                                     
                         
                                                        <td><button type="submit"  class="btn btn-warning" name="cnfrm">confirm</button></td>

                                                        <?php
     if(isset($_REQUEST['cnfrm']))
    {
        
        $Query = "INSERT INTO c_response(c_id,response,status) values('$id','Your complain is accepted','open') " ;
        echo "Query";
 $confirm_status = mysqli_query($conn,$Query);
       if($confirm_status)
       {

?>
        <script>
            alert('Record has been Successfully Inserted in Database');
            window.location.href='dashboard.php?success';
            </script>
<?php
  $query="DELETE FROM `p_complaints` WHERE `c_id`=$id";
mysqli_query($conn,$query);
    }
    else
    {
        ?>
        <script type="text/javascript">alert('not Working');
        window.location.href='dashboard.php?success';
    </script>
        <?php
    }


}
?>



                                                        <td><button type="submit"  class="btn btn-danger" name="reject">Reject</button></td>

                                                        <?php
     if(isset($_REQUEST['reject']))
    {
        
        $Query = "INSERT INTO c_response(c_id,response,status) values('$id','Your complain is Droped','drope') " ;
        echo "Query";
 $confirm_status = mysqli_query($conn,$Query);
       if($confirm_status)
       {

?>
        <script>
            alert('Record has been Successfully Inserted in Database');
            window.location.href='dashboard.php?success';
            </script>
<?php
  $query="DELETE FROM `p_complaints` WHERE `c_id`=$id";
mysqli_query($conn,$query);
    }
    else
    {
        ?>
        <script type="text/javascript">alert('not Working');
        window.location.href='dashboard.php?success';
    </script>
        <?php
    }


}
?>

                                                    </tr>
                                                   
                                                    <?php
                                                         }
                                                            }
                                                            else
                                                            {
                                                                echo "No Result Found";
                                                                  }
                                                    ?>
                                                </tbody>
                                            </table>
  </form>
</div>

</section>