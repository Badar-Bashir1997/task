<?php

     if(isset($_REQUEST['BtnSubmit']))
    {
        $Name = $_REQUEST['name'];
        $cnic = $_REQUEST['cnic'];
        $mobile = $_REQUEST['mobile'];
       $complaints = $_REQUEST['complaints'];
        $Query = "INSERT INTO p_complaints ".
                   "(name,CNIC,phone,complaints) "."VALUES ".
                   "('$Name','$cnic','$mobile','$complaints')";
                   echo "Query";
        mysqli_query($conn, $Query);

?>
        <script>
            alert('Your complain is send to the prime minister ');
            window.location.href='index.php?success';
            </script>
<?php
    }
?>

<section class="my-5 bg-success" >
  <div class="container w-50 m-auto  py-5">
    <h2 id="complaints" class="text-center text-white ">Complaints</h2>
  <form action="#" method="post" class="was-validated">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" pattern="[a-zA-Z][a-zA-Z ]{2,}" required>
      
    </div>
    <div class="form-group">
      <label for="cnic">CNIC</label>
      <input type="text" class="form-control" id="cnic" placeholder="Enter CNIC" name="cnic"  pattern="^[1-7]{5}-[0-9]{7}-[0-9]$" required>
      
    </div>
    <div class="form-group">
      <label for="mobile">Mobile</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile"   pattern="[+]{1}[9]{1}[2]{1}[0-9]{10}" value="+92" required>
     
    </div>
    
     <div class="form-group">
      <label for="complaints">Complaints</label>
      <textarea class="form-control" id="cmpln" placeholder="Enter Your Complain" name="complaints" required></textarea>
    </div>

<div class="form-group">
      <label  type="text" class="text-primary" data-toggle="modal" data-target="#exampleModalCenter">Terms and Conditions</label>

      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Terms and Conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        xyz
      </div>
      
    </div>
  </div>
</div>
    </div>

    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on terms and conditions.
        
      </label>
    </div>
    <button type="submit" name="BtnSubmit" class="btn btn-primary">Submit</button>
  </form>
</div>

</section>