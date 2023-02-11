<?php 
require 'robot.php';
@import('cord_sql');

$get = $_GET['topic'];
$Sci_con=$conn->prepare("SELECT * FROM blog WHERE id=? order by id DESC LIMIT 1");
$Sci_con->bindParam(1, $get);
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

$Sci_id = $Sci_col['id'];
$Sci_img1 = $Sci_col['img1'];
$Sci_topic = $Sci_col['topic'];
$Sci_content = $Sci_col['textbox'];
$Sci_cate = $Sci_col['category'];
}
?>


<style>





img{
  width: 100%;
}


span{


font-weight: normal !important;
}
i{


font-weight: normal !important;
}
   
.text_style:hover{

        background-color: #fff;
        color: black;
        fill: white !important;
border:2px dashed gray;
justify-content:center;
    }

    .Sci_editor{
        outline: none;

                 min-height: 250px;  
                 max-width: 100% !important;   
                 box-sizing: border-box;  
                 flex-shrink: 0;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
                                                                  
    }
  
    .Sci_editor > a{

cursor: pointer;
}
.Sci_editor > Iframe{

border:none;
width:100% !important;     
  height:50vh;


}

.Sci_editor > div > Iframe{
       height:50vh;
border:none;
width:100% !important;
   }
   .Sci_editor > div > div > Iframe{
    height:50vh;
border:none;
width:100% !important;
   }

   

   .Sci_editor > img{
        margin: auto;
 margin-top:5px;
        margin-bottom:5px;
        max-width:inherit ;   
    }

    .Sci_editor > *{
        margin: auto;
 margin-top:5px;
        margin-bottom:5px;
        max-width:inherit ;   
    }
   .Sci_editor > div > *{
        margin: auto;
 margin-top:5px;
        margin-bottom:5px;
        max-width:inherit ;   
    }
   .Sci_editor > div > div > *{
        margin: auto;
 margin-top:5px;
        margin-bottom:5px;
        max-width:inherit ;   
    }
    .Sci_editor > audio{
height: 50px !important;

    }
    .Sci_editor > div > div > audio{
        height: 50px !important;
    }
    blockquote{

      padding-left: 10px;
    }

.tablepicker {
  position: relative;
}

.tablepickertext {
    flex-wrap: wrap;
  display:none;
  color: #fff;
  text-align: center;
  border-radius: 20px;
  position: fixed;
  z-index: 20;
  top: 20%;
  right:5%;
  margin-left: -60px;
    height: 200px;
    width: 30%;
border-right: 5px solid gray; 
 flex-wrap: wrap;

}

.tablepickertext::after {  content: " ";
  position: absolute;
  top: 50%;
  right: 100%; /* To the left of the tooltip */
  margin-top: -5px;
  border-width: 10px;
  border-style: solid;
  border-color: transparent gray transparent transparent;

}

.tablepicker:hover .tablepickertext {
  display: flex;
}

      
      .categori{
        cursor: pointer !important;
   }


</style>



<div class="d-dural-flex-child2 p-3" >
<div class="bg-light" style=" position: relative; border-radius: 30px; border: 1px solid rgb(240, 232, 232);">

   <div class="justify-content-center m-3 Sci_editor py-3"  contenteditable="true"  id="Sci_editor">
    <?php echo $Sci_content;
    ?>
   </div>  

   <textarea id="Sci_editor_inp" class="content py-5 px-3 m-3 text-danger h-100"></textarea>


<small style="position:absolute; top:-10px;right: -10px;" class="p-3 bg-twist rounded fw-bold text-white">Netpacks Editor</small>







<!-- ajax forms -->
    
<form action="imgform.php" id="imgform" method="post">
    <input type="file" name="img" id="imginp" accept='image/jpg, image/png, image/jpeg, image/gif' style="width: 0; height: 0;display: none;" onchange='$trigger("imgbtn")'>
        <input type="submit"  style="width: 0; height: 0;display: none;"  name="submit" id="imgbtn">
    </form>    
<div class="p-3 d-flex align-items-center justify-content-start bottomscroll" style="height: 80px; border-top: 8px solid white;" id="imgs">

<!-- img -->
<div class="p-2 bg-white shadow d-flex justify-content-center fw-bold text_style rounded" style="cursor: pointer; width: 50px;" onclick='$trigger("imginp")'>
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-image-alt"  viewBox="0 0 20 20"><path d="M6.91 10.54c.26-.23.64-.21.88.03l3.36 3.14 2.23-2.06a.64.64 0 0 1 .87 0l2.52 2.97V4.5H3.2v10.12l3.71-4.08zm10.27-7.51c.6 0 1.09.47 1.09 1.05v11.84c0 .59-.49 1.06-1.09 1.06H2.79c-.6 0-1.09-.47-1.09-1.06V4.08c0-.58.49-1.05 1.1-1.05h14.38zm-5.22 5.56a1.96 1.96 0 1 1 3.4-1.96 1.96 1.96 0 0 1-3.4 1.96z"></path></svg>
    </div>




<div class="d-flex" id="imgfileout"></div>


<?php

$DURAL_SQL="SELECT * FROM dural_filemanager WHERE types='img' order by id DESC";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();
foreach ($DURAL as $key) {




?>
<div class="p-2 bg-white shadow d-flex justify-content-center mx-2 fw-bold text_style rounded" style="cursor: pointer; width: 50px;" onclick="img('Sci_editor','../filemanager/<?php echo $key['file']; ?>')">
        <img src="../filemanager/<?php echo $key['file']; ?>" alt="" class="mx-1" width="30" height="30">
            </div>
    <?php

}
?>



</div>
<!-- end img -->























<!-- categories -->
    <input type="text" style="width: 0; height: 0;display: none;" id="catdata" >



<div class="p-3 d-flex align-items-center bottomscroll" id="catediv">
    <div class="p-2 mx-2 d-flex btn justify-content-center shadow align-items-center" style="width: 60px; border-radius: 50px;"  id="cat_add">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg></div>
    <?php

$DURAL_SQL="SELECT * FROM category";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();
foreach ($DURAL as $keyyi) {
$cate = $keyyi['category_name'];

if ($keyyi['category_name'] == $Sci_cate) {

    echo '

    <div class="p-2 border mx-1 fw-bold rounded categori" >
    
        <input type="radio" name="cat" value="'.$cate.'" class="mx-2" style="cursor: pointer;" onclick="catput("'.$cate.'"")" checked="">
        '.$cate.'
    
    </div>';
  }
  else{



    echo '

    <div class="p-2 border mx-1 fw-bold rounded categori" >
    
        <input type="radio" name="cat" value="'.$cate.'" class="mx-2" style="cursor: pointer;" onclick="catput("'.$cate.'"")" >
        '.$cate.'
    
    </div>';
  }
    
}

?>


    
      </div>
    
    
    
    


<!-- end Categories -->


<!-- add categorie -->



<div class="p-3 align-items-center bottomscroll" id="add_cat" style="display: none;">
<form action="catego.php" id="cate" method="post" class="d-flex w-100">
    <div class="form-floating w-100" id="catin">
        <input type="text" required="" name="Categories" class="form-control" id="floatingCategories" placeholder="Categories" >
        <label for="floatingPassword">Categories</label>
      </div>   
      <button class="btnp-2 d-flex btn justify-content-center shadow align-items-center mx-2" type="submit" style="border: none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green" class="bi bi-plus" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg></button>
</form>
</div>


<!-- end add categorie -->

<input type="hidden" value="<?php echo $Sci_id; ?>" id="editid">


<!-- add LINK -->



<div class="p-3 align-items-center bottomscroll" id="add_LINK" style="display: none;">
<div class="d-flex w-100">
<div class="form-floating w-100 mx-1" id="LINKin">
        <input type="text" required="" name="LINK" class="form-control" id="floatinglink" placeholder="link" >
        <label for="floatinglinkl" class="text-small">link</label>
      </div>
       <div class="form-floating w-100" id="LINKtext">
        <input type="text" required="" name="LINKytext" class="form-control col-5" id="LINKtextt" placeholder="link text" >
        <label for="LINKtext" class="text-small">Text to display</label>
      </div>   
      <button class="btnp-2 d-flex btn justify-content-center shadow align-items-center mx-2" type="submit" style="border: none;" onclick="textlink('Sci_editor','floatinglink','LINKtextt')">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green" class="bi bi-plus" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg></button>
</div>
</div>


<!-- end add LINK -->

<!-- add frame -->



<div class="p-3 align-items-center bottomscroll" id="add_frame_LINK" style="display: none;">
<div class="d-flex w-100">
<div class="form-floating w-100" id="framein">
        <input type="text" required="" name="frame_frame" class="form-control" id="floatingframe_framee" placeholder="Frame frame" >
        <label for="floatingframe_frame">Video link / emb</label>
      </div>
             <button class="btnp-2 d-flex btn justify-content-center shadow align-items-center mx-2" type="submit" style="border: none;" onclick="textiframe('Sci_editor','floatingframe_framee')">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green" class="bi bi-plus" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg></button>
</div>
</div>


<!-- end add frame -->






<!-- sped -->

<div class="p-3 d-flex align-items-center justify-content-between bottomscroll">
<div class="p-2 bg-white shadow d-flex justify-content-center fw-bold text_style rounded mx-2" style="cursor: pointer;"  id="add_frame_btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-play" viewBox="0 0 20 20"><path d="M18.68 3.03c.6 0 .59-.03.59.55v12.84c0 .59.01.56-.59.56H1.29c-.6 0-.59.03-.59-.56V3.58c0-.58-.01-.55.6-.55h17.38zM15.77 15V5H4.2v10h11.57zM2 4v1h1V4H2zm0 2v1h1V6H2zm0 2v1h1V8H2zm0 2v1h1v-1H2zm0 2v1h1v-1H2zm0 2v1h1v-1H2zM17 4v1h1V4h-1zm0 2v1h1V6h-1zm0 2v1h1V8h-1zm0 2v1h1v-1h-1zm0 2v1h1v-1h-1zm0 2v1h1v-1h-1zM7.5 7.177a.4.4 0 0 1 .593-.351l5.133 2.824a.4.4 0 0 1 0 .7l-5.133 2.824a.4.4 0 0 1-.593-.35V7.176v.001z"></path></svg>
    </div>
    
  <div class="p-2 bg-white shadow d-flex justify-content-center fw-bold text_style rounded mx-2" style="cursor: pointer;" id="add_LINK_btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-link-45deg" viewBox="0 0 16 16">
  <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
  <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
</svg>
    </div> 



  <div class="p-2 bg-white shadow d-flex justify-content-center fw-bold text_style rounded mx-2" style="cursor: pointer;" id="" >
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="red" class=" bi2" viewBox="0 0 20 20">
    <path d="M5.042 9.367l2.189 1.837a.75.75 0 0 1-.965 1.149l-3.788-3.18a.747.747 0 0 1-.21-.284.75.75 0 0 1 .17-.945L6.23 4.762a.75.75 0 1 1 .964 1.15L4.863 7.866h8.917A.75.75 0 0 1 14 7.9a4 4 0 1 1-1.477 7.718l.344-1.489a2.5 2.5 0 1 0 1.094-4.73l.008-.032H5.042z"></path></svg>
    </div> 

     <div class="p-2 bg-white shadow d-flex justify-content-center fw-bold text_style rounded mx-2" style="cursor: pointer;" id="" >
   
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="green" class="bi2" viewBox="0 0 20 20">
    <path d="M14.958 9.367l-2.189 1.837a.75.75 0 0 0 .965 1.149l3.788-3.18a.747.747 0 0 0 .21-.284.75.75 0 0 0-.17-.945L13.77 4.762a.75.75 0 1 0-.964 1.15l2.331 1.955H6.22A.75.75 0 0 0 6 7.9a4 4 0 1 0 1.477 7.718l-.344-1.489A2.5 2.5 0 1 1 6.039 9.4l-.008-.032h8.927z"></path></svg>
    </div>



 <div class="p-2 bg-white shadow d-flex justify-content-center fw-bold text_style rounded mx-2" onclick="emoji_show()" style="cursor: pointer;" >
   <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>

<!-- table pickers -->













  <div class="tablepickertext p-3 shadow bg-white" id="emoji_id">
    


     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',1)" >
      <!-- smile -->
     <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>
    </div>





     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',2)" >

<!-- angry -->
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-angry" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zm6.991-8.38a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5s-1-.672-1-1.5c0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761l2-1zm-6.552 0a.5.5 0 0 0-.448.894l1.009.504A1.94 1.94 0 0 0 5 6.5C5 7.328 5.448 8 6 8s1-.672 1-1.5c0-.247-.04-.48-.11-.686a.502.502 0 0 0-.166-.761l-2-1z"/>
</svg>

</div>



     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',3)" >

<!-- angry dizzy -->



<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-dizzy" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M9.146 5.146a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zm-5 0a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 1 1 .708.708l-.647.646.647.646a.5.5 0 1 1-.708.708L5.5 7.207l-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zM10 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
</svg>


</div>





     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',4)" >

<!-- expressionless -->


<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-expressionless" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm5 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
</svg>


</div>





     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',5)" >

<!-- frown -->



<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>


</div>





     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',6)" >

<!-- emoji-heart-eyes -->



<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z"/>
</svg>


</div>





     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',7)" >

<!-- angry dizzy -->


<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-laughing" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zM7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5z"/>
</svg>
</div>





     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',8)" >

<!-- angry dizzy -->


<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-neutral" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4 10.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5zm3-4C7 5.672 6.552 5 6 5s-1 .672-1 1.5S5.448 8 6 8s1-.672 1-1.5zm4 0c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5S9.448 8 10 8s1-.672 1-1.5z"/>
</svg>

</div>





     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',9)" >

<!-- angry emoji-smile-upside-down -->


<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile-upside-down" viewBox="0 0 16 16"> <path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zm0-1a8 8 0 1 1 0 16A8 8 0 0 1 8 0z"/>  <path d="M4.285 6.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 4.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 3.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 9.5C7 8.672 6.552 8 6 8s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5zm4 0c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5z"/></svg>



</div>





     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',10)" >

<!-- angry emoji-sunglasses -->


<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
  <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z"/>
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z"/>
</svg>


</div>





     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',11)" >

<!-- angry dizzy -->

<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-wink" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm1.757-.437a.5.5 0 0 1 .68.194.934.934 0 0 0 .813.493c.339 0 .645-.19.813-.493a.5.5 0 1 1 .874.486A1.934 1.934 0 0 1 10.25 7.75c-.73 0-1.356-.412-1.687-1.007a.5.5 0 0 1 .194-.68z"/>
</svg>


</div>





     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',12)" >

<!-- angry dizzy -->

<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>
</svg>



</div>





     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',13)" >

<!-- laptop -->


<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
</svg>



</div>





     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',14)" >

<!-- thermo -->


<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-thermometer-half" viewBox="0 0 16 16">
  <path d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V6.5a.5.5 0 0 1 1 0v4.585a1.5 1.5 0 0 1 1 1.415z"/>
  <path d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1z"/>
</svg>

</div>






     <div class="p-2 bg-light shadow shadow d-flex justify-content-center align-items-center fw-bold text_style rounded m-2" style="cursor: pointer; height: 45; width:45;  "   onclick="emoji('Sci_editor',15)" >

<!-- speaker -->


<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-speaker" viewBox="0 0 16 16">
  <path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path d="M8 4.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5zM8 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 3a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-3.5 1.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>


</div>
















  </div>













</div>



 <div class="p-2 bg-white shadow d-flex justify-content-center fw-bold text_style rounded mx-2" style="cursor: pointer;" onclick="toggle_code('Sci_editor','Sci_editor_inp')" id="Sci_editor_btn">
     <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="gray" class=" bi bi-code-slash" viewBox="0 0 16 16" id="Sci_editor_svg">
  <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
</svg>

    </div>




 <div class="p-2 bg-white shadow d-flex justify-content-center fw-bold text_style rounded mx-2" style="cursor: pointer;" onclick="$space_nav_loader('help.php','sign')" id="question">
  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-patch-question" viewBox="0 0 16 16">
  <path d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745z"/>
  <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
  <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0z"/>
</svg>
    </div>

</div>

<!-- end sped -->





<!-- Text Style -->


<div class="p-3 d-flex align-items-center bottomscroll"> 
     <div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer;"  onclick="text__('Sci_editor','block')">
     <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="gray" class="bi bi-newspaper" viewBox="0 0 16 16">
  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
  <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
</svg>
    </div>
     <div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer;"  onclick="text__('Sci_editor','p')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-text-paragraph" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
</svg>
    </div>  <div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer;" onclick="text__('Sci_editor','b')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-type-bold" viewBox="0 0 16 16">
  <path d="M8.21 13c2.106 0 3.412-1.087 3.412-2.823 0-1.306-.984-2.283-2.324-2.386v-.055a2.176 2.176 0 0 0 1.852-2.14c0-1.51-1.162-2.46-3.014-2.46H3.843V13H8.21zM5.908 4.674h1.696c.963 0 1.517.451 1.517 1.244 0 .834-.629 1.32-1.73 1.32H5.908V4.673zm0 6.788V8.598h1.73c1.217 0 1.88.492 1.88 1.415 0 .943-.643 1.449-1.832 1.449H5.907z"/>
</svg>
    </div>
    <div class="p-2 border mx-1 fw-bold  text_style" style="cursor: pointer;"  onclick="text__('Sci_editor','i')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-type-italic" viewBox="0 0 16 16">
  <path d="M7.991 11.674 9.53 4.455c.123-.595.246-.71 1.347-.807l.11-.52H7.211l-.11.52c1.06.096 1.128.212 1.005.807L6.57 11.674c-.123.595-.246.71-1.346.806l-.11.52h3.774l.11-.52c-1.06-.095-1.129-.211-1.006-.806z"/>
</svg>
    
    </div>

 <div class="p-2 border mx-1 fw-bold  text_style" style="cursor: pointer;"  onclick="text__('Sci_editor','underline')">
   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-type-underline" viewBox="0 0 16 16">
  <path d="M5.313 3.136h-1.23V9.54c0 2.105 1.47 3.623 3.917 3.623s3.917-1.518 3.917-3.623V3.136h-1.23v6.323c0 1.49-.978 2.57-2.687 2.57-1.709 0-2.687-1.08-2.687-2.57V3.136zM12.5 15h-9v-1h9v1z"/>
</svg>
    
    </div>

    <div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer;"  onclick="text__('Sci_editor','div-center')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-align-center" viewBox="0 0 16 16">
  <path d="M8 1a.5.5 0 0 1 .5.5V6h-1V1.5A.5.5 0 0 1 8 1zm0 14a.5.5 0 0 1-.5-.5V10h1v4.5a.5.5 0 0 1-.5.5zM2 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7z"/>
</svg>
    </div>
    <div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer;"  onclick="text__('Sci_editor','div-right')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-align-end" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5z"/>
  <path d="M13 7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7z"/>
</svg>
    </div>
    <div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer;"  onclick="text__('Sci_editor','div-left')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-align-start" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 1 .5.5v13a.5.5 0 0 1-1 0v-13a.5.5 0 0 1 .5-.5z"/>
  <path d="M3 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7z"/>
</svg>
    </div>
    <div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer;"  onclick="text__('Sci_editor','li')">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-list-ul" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg>
    </div> 

<div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer;"  onclick="text__('Sci_editor','ol')">
   <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list-ol" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
  <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338v.041zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635V5z"/>
</svg>
    </div> 

     <div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer;"  onclick="text__('Sci_editor','quo')">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-blockquote-right"  viewBox="0 0 20 20"><path d="M3 10.423a6.5 6.5 0 0 1 6.056-6.408l.038.67C6.448 5.423 5.354 7.663 5.22 10H9c.552 0 .5.432.5.986v4.511c0 .554-.448.503-1 .503h-5c-.552 0-.5-.449-.5-1.003v-4.574zm8 0a6.5 6.5 0 0 1 6.056-6.408l.038.67c-2.646.739-3.74 2.979-3.873 5.315H17c.552 0 .5.432.5.986v4.511c0 .554-.448.503-1 .503h-5c-.552 0-.5-.449-.5-1.003v-4.574z"></path></svg>
    </div>  <div class="p-2 border fw-bold text_style rounded mx-2 " style="cursor: pointer; color: #7c067c;"  onclick="text__('Sci_editor','h1')">
        h1
    </div>  <div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer; color: #7c067c;"  onclick="text__('Sci_editor','h2')">
        h2
    </div>  <div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer; color: #7c067c;"  onclick="text__('Sci_editor','h3')">
        h3
    </div>  <div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer; color: #7c067c;"  onclick="text__('Sci_editor','h4')">
        h4
    </div>
    <div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer; color: #7c067c;"  onclick="text__('Sci_editor','h5')">
        h5
    </div>
    <div class="p-2 border fw-bold text_style rounded mx-2" style="cursor: pointer; color: #7c067c;"  onclick="text__('Sci_editor','h6')">
        h6
    </div>
    
    
      </div>
    
    
    
    


<!-- end -->




<div  class="d-flex align-items-center " style="height:50px;">           
<button class="btn text-dark btn-primary bg-success text-white w-100 fw-bold"  style=" border-bottom-left-radius: 30px; height:100%;border: none; border-bottom-right-radius: 30px;" onclick="Publish_edito()">Edit Page</button>

                </div>

</div>   



        
                      
</div>

<div class="d-dural-flex-child1 p-3">


<h4 style="font-weight: bolder;" >Alert</h4>
<p style="color: gray;" id="datadiv">Notification Goes Here</p>
</div>

</div>


<script>


  function catput(doremi) {
alert('eee');
document.getElementByid('catdata').value = doremi;

}

</script>
<script>


function Publish_edito(){

let id = $('#editid').val();
let catdata = $('#catdata').val();
let page_content = $('#Sci_editor').html();


  $.post("blog-update.php",
  {
    id: id,
    catdata: catdata,
    content: page_content
  },
  function(data, status){
let d = data;
let e =  2;
if (d == e) {
$("#datadiv").html('<strong style="color:green;">Editing......</strong>'); 

setTimeout(function () {
// body...
$("#sign").html('<img src="ADMIN_files/sucess.jpg" style="transition: 1s; width: 50%;margin:auto;" class="p-2 " id="iiii">'); 
setTimeout(function () {
// body...
$("#iiii").toggle();
setTimeout(function () {
// body...

let aa =new Audio('ADMIN_files/alert.mp3');
aa.play();

$space_nav_loader('blogss.php','sign');


},1000);

},3000);

},3000);


}
else{
$("#datadiv").append('<div class="alert alert-danger alert-dismissible fade show" role="alert">   '+data+'  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>'); 
} 

 });
}






// img



$("#imgform").on('submit',function(e){
    
    e.preventDefault();
    
    $(this).ajaxSubmit({
    
        success: function(data){
$("#imgfileout").prepend(data);
    } 
    
    });
    });


// categories



function emoji_show() {
  // body
      $("#emoji_id").toggleClass("d-flex");




}




$("#cate").on('submit',function(e){

e.preventDefault();

$(this).ajaxSubmit({

success: function(data){
let d = data;
let e =  2;
if (d == e) {

$("#catin").addClass("error");

}
else{

$("#catediv").append(data); 

$("#catin").removeClass("error");


}
} 

});
});



    
$("#add").on('submit',function(e){
    
    e.preventDefault();
    
    $(this).ajaxSubmit({
    
        success: function(data){
$("#add_cat_text").prepend(data);
    } 
    
    });
    });



    $("#cat_add").click(function () {
    $("#add_cat").toggleClass("d-flex").toggle(600);

});



$("#add_LINK_btn").click(function () {
    $("#add_LINK").toggleClass("d-flex").toggle(600);
    $("#add_frame_LINK").removeClass("d-flex").hide();


});
$("#add_frame_btn").click(function () {
    $("#add_frame_LINK").toggleClass("d-flex").toggle(600);
    $("#add_LINK").removeClass("d-flex").hide();

});

$('.content').each(function () {
  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;width: 100%; display: none !important; background-color: transparent; outline: none;border: none;resize:none;text-align:' + "left");

}).on('input', function () {
  this.style.height = '100px';
  this.style.height = (this.scrollHeight) + 'px';
});


$('.topico').each(function () {
  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;width: 100%; background-color: transparent; outline: none;border: none;resize:none;text-align:' + "left");

}).on('input', function () {
  this.style.height = '50px';
  this.style.height = (this.scrollHeight) + 'px';
});


</script>