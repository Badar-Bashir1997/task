<section class="my-5 bg-success" >
  <div class="container w-50 m-auto  py-5">
    <h2 id="total_complaints" class="text-center text-white ">Total Complaints</h2>
  <div class="row">
  <div class="col-lg-4 col-md-4 col-12  ">
    <div class="card bg-info border-danger">
      <div class="card-body ">
        <h5 class="card-title text-center text-danger">Total Complaints</h5>
        
        <h2  class="text-center text-warning"><?php
            if($dbname!=null)
            {
                $query=" SELECT count(c_id) as c_id FROM p_complaints";
                $result1 = mysqli_query($conn, $query);
               $row = mysqli_fetch_array($result1);
                
                $query2=" SELECT count(c_id) as c_id FROM c_response";
                $result2 = mysqli_query($conn, $query2);
               $row2 = mysqli_fetch_array($result2)
                    ?>
                    <?php $ttl= $row['c_id']+$row2['c_id']; ?>
                        <div><?php echo $ttl; ?></div>                    
                    <?php
                
            }
        ?></h2>
        <br>
      </div>
    </div>
  </div>
  <div class="col-sm-4 ">
    <div class="card bg-warning border-danger">
      <div class="card-body ">
        <h5 class="card-title text-center text-danger ">Open</h5>
        
        <h2  class="text-center text-success"><?php
            if($dbname!=null)
            {
                $query=" SELECT count(status) as status  FROM c_response  where status='open'" ;
                $result1 = mysqli_query($conn, $query);
               while ($row = mysqli_fetch_array($result1))
                {
                    ?>
                        <div><?php echo $row['status']; ?></div>                    
                    <?php
                }
            }
        ?></h2>
        <br>
      </div>
    </div>
  </div>
  <div class="col-sm-4 ">
    <div class="card bg-secondary border-danger">
      <div class="card-body ">
        <h5 class="card-title text-center text-white">Closed</h5>
        
        <h2  class="text-center "><?php
                if($dbname!=null)
            {
                $query=" SELECT count(c_id) as c_id  FROM p_complaints  " ;
                $result1 = mysqli_query($conn, $query);
               while ($row = mysqli_fetch_array($result1))
                {
                    ?>
                        <div><?php echo $row['c_id']; ?></div>                    
                    <?php
                }
            }
        ?></h2>
        <br>
      </div>
    </div>
  </div>
  <div class="col-sm-4 py-5">
    <div class="card  bg-danger border-danger">
      <div class="card-body ">
        <h5 class="card-title text-center text-white ">Dropped</h5>
        
        <h2  class="text-center"><?php
               if($dbname!=null)
            {
                $query=" SELECT count(status) as status  FROM c_response  where status='drope'" ;
                $result1 = mysqli_query($conn, $query);
               while ($row = mysqli_fetch_array($result1))
                {
                    ?>
                        <div><?php echo $row['status']; ?></div>                    
                    <?php
                }
            }
        ?></h2>
        <br>
      </div>
    </div>
  </div>
</div>
</div>

</section>