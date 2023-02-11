<?php 
require 'robot.php';
@import('cord_sql');

$Sci_con=$conn->prepare("SELECT * FROM webd order by id DESC LIMIT 1");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

$Sci_name = $Sci_col['webname'];
$Sci_banner = $Sci_col['img1'];
$Sci_logo = $Sci_col['img2'];
}
?>



<div class="d-dural-flex-child2 p-3" >
                        <p class="text-center" style="font-weight: bolder; color:gray;">Edit Web Detail</p>
                           <form method="post" action="profile-get.php" id="profile">
    <div class="bg-light" style=" position: relative; border-radius: 30px;">
        <img src="uploads/<?php  echo $Sci_banner; ?>" id="cover-getlink" onclick="
        $trigger('cover-img')" class="bg-dark" style="width: 100%;cursor: pointer; border-top-right-radius: 30px;border-top-left-radius: 30px; ">
        <input type="file" required name="img1" accept="image/png, image/jpeg,image/jpg" onchange="$Fgetter(this,'cover-getlink')" id="cover-img" style="height:0;width:0;outline: none; display: block;background: transparent;" >
        <small style="position:absolute; top:-10px;right: -10px;" class="p-3 bg-twist rounded fw-bold text-white">Web Advert image</small>

        <div class="d-flex p-3 m-3 align-items-center" style="width: 100%;height: 50px;">
            <img src="uploads/<?php  echo $Sci_logo; ?>" id="user-getlink" onclick="
            $trigger('user-img')" style="fill: gray; cursor: pointer;  width: 50px;border-radius: 50px; " class="m-3 p-1">
<small class="fw-bold" style="color: gray;">Web Logo image</small>
<input type="file" required  name="img2" accept="image/png, image/jpeg,image/jpg" onchange="$Fgetter(this,'user-getlink')" id="user-img" style="height:0;width:0;outline: none; display: block;background: transparent;" >

        </div>
      
        
<div class="p-3 align-items-center" style="width: 100%;">
  <strong for="content" class="p-3"> Website Name </strong>
  <br>    
          <textarea type="text" required name="webname" class="fw-bold p-1 content" > <?php  echo $Sci_name; ?></textarea>
          
          </div>
  
  <div  class="d-flex align-items-center " style="height:50px;">  
  <button class="btn btn-primary w-100 fw-bold"  style="height:100%;  border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;
  border-top-right-radius: 0;
  border-top-left-radius: 0;" id="pub">Save</button>
  
                  </div>


                                </form>
        
        </div>   


    
                            
                                          
                                              
</div>

<div class="d-dural-flex-child1 p-3 ">


    <h4 style="font-weight: bolder;">Alert</h4>
<p style="color: gray;" id="datadiv">Edit your detail Aproperiately</p>
</div>

</div>


<script>
  
$('.content').each(function () {
  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;width: 100%; background-color: transparent; color: gray; outline: none;border: none;resize:none;text-align:' + "left");

}).on('input', function () {
  this.style.height = '100px';
  this.style.height = (this.scrollHeight) + 'px';
});






$("#profile").on('submit',function(e){

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
$space_nav_loader('Profile.php','sign','s-btn2')

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