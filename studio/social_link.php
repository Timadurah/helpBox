<?php

require 'robot.php';
@import('cord_sql');


$DURAL_SQL="SELECT * FROM soci";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();
foreach ($DURAL as $key) {


   $wats = $key['wat'];
   $faceb = $key['fb'];
$insta = $key['inst'];
$phone = $key['Phone'];
$twee = $key['TWEETER'];
$linke = $key['linke'];
$email = $key['email'];
$address = $key['adress'];

}
?><div class="d-dural-flex-child2 bg-light p-3" style="border-radius: 20px; border: 1px solid rgb(230, 227, 227);">

        
                           
  <form method="post" action="social_get.php" id="social">
           
    <div class="p-3 align-items-center" style="width: 100%;">
      <strong for="content" class="p-3"> Phone Number</strong>
      <br>    
              <textarea type="text" required name="Phone" class="fw-bold p-1 content" value="<?php  echo $phone; ?>" > <?php  echo $phone; ?> </textarea>
              
              </div>
              <div class="p-3 align-items-center" style="width: 100%;">
                <strong for="content" class="p-3"> Address Details</strong>
                <br>    
                        <textarea type="text" required name="ADRESS" class="fw-bold p-1 content"  value="<?php  echo $address; ?>"> <?php  echo $address; ?> </textarea>
                        
                        </div>

                <div class="form-floating mb-3">
        <input type="text" name="wat" class="form-control content" id="floating2" placeholder="" value="<?php  echo $wats; ?>">
        <label for="floating2"> Whatsapp link</label>
      </div>
      <div class="form-floating mb-3">
          <input type="text" name="fb" class="form-control content" id="floating3t" placeholder="" value="<?php  echo $faceb; ?>">
          <label for="floating3t"> Facebook link</label>
        </div>   <div class="form-floating mb-3">
          <input type="text" name="inst" class="form-control content" id="floating4" placeholder="" value="<?php  echo $insta; ?>">
          <label for="floating4"> instagram link</label>
        </div>  <div class="form-floating mb-3">
          <input type="text" name="Tweeter" class="form-control content" id="float5" placeholder="" value="<?php  echo $twee; ?>">
          <label for="floating5"> Tweeter link</label>
        </div><div class="form-floating mb-3">
          <input type="text" name="linkedin" class="form-control content" id="float6" placeholder="" value="<?php  echo $linke; ?>">
          <label for="floating6"> linkedin link</label>
        </div><div class="form-floating mb-3">
          <input type="email" name="email" class="form-control content" id="float7" placeholder="" value="<?php  echo $email; ?>">
          <label for="floating7"> Email Adress</label>
        </div>

      <button class="w-100 btn btn-lg btn-primary bg-twist" type="submit" style="border: none;">Edit</button>
      <small class="text-muted">  </small>
    </form>
        



                          
                                        
                                            
</div>

<div class="d-dural-flex-child1 p-3 ">


  <h4 style="font-weight: bolder;">Alert</h4>
  <small class="text-muted" id="datadiv">edit your social deatil link.</small>
</div>

</div>



<script>
  


  $('.content').each(function () {
  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;width: 100%; background-color: transparent; color: gray; outline: none;border: none;resize:none;text-align:' + "left");

}).on('input', function () {
  this.style.height = '100px';
  this.style.height = (this.scrollHeight) + 'px';
});





$("#social").on('submit',function(e){

  e.preventDefault();

$(this).ajaxSubmit({

success: function(data){
  var d = data;
  var e =  2;
  if (d == e) {
    $("#datadiv").html('<strong style="color:green;">Updating......</strong>'); 

setTimeout(function () {
  // body...
  $("#sign").html('<img src="ADMIN_files/sucess.jpg" style="transition: 1s; width: 50%;margin:auto;" id="iiii">'); 
  setTimeout(function () {
  // body...
 $("#iiii").toggle();
 setTimeout(function () {
  // body...
$space_nav_loader('social_link.php','sign','s-btn4');

},1000);

},3000);

},3000);


  }
  else{
$("#datadiv").html(data); 
}
} 

});
});


</script>