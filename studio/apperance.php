<?php



require 'robot.php';

$DURAL_SQL="SELECT * FROM theme";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();
foreach ($DURAL as $key) {

$theme = $key['theme'];
$font_size = $key['font_size'];
$font_family = $key['font_family'];


 }

?>



<style type="text/css">
  
  .bg-blue{

    background-color: #0d6efd;
  }

  /* The container must be positioned relative: */
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: DodgerBlue;
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>

<div class="d-dural-flex-child2 p-3" >
                           <form action="theme-get.php" id="theme" method="post">
    <div class="bg-light" style=" position: relative; border-radius: 30px;border-top: 5px solid #0d6efd;">    
<br>
      <div class="row align-items-center p-3 ">
<strong class="fw-bold">Font size <span class="p-2" id="e1d"></span></strong>
<div class="d-flex align-items-center p-3 ">
<input type="range" name="font_size" class="form-range" min="1" max="3" step="1" id="customRange3" onchange="e1()" value="<?php  echo $font_size; ?>">
</div>
 </div>
       


      <div class="d-flex align-items-center p-3  ">

<div class="p-3 ">

<strong class="fw-bold">Font Family</strong>
<br>

<br>
     
<div class="custom-select" style="width:300px;">
  <select name="font_family">
   
    <option value="<?php  echo $font_family; ?>" selected=""><?php  echo $font_family; ?></option>
    <option value="Default">Default</option>
    <option value="Algerian">Algerian</option>
    <option value="Arial">Arial</option>
    <option value="Forte">Forte</option>
    <option value="Gabriola">Gabriola</option>
    <option value="Jokerman">Jokerman</option>
    <option value="Ink Free">Ink Free</option>
    <option value="Terminal">Terminal</option>
    <option value="cursive">Cursive</option>
    <option value="Times New Roman">Times New Roman</option>
    <option value="Stencil">Stencil</option>
    <option value="Small Fonts">Small Fonts</option>
    <option value="Old English Text MT">Old English Text MT</option>
  </select>
</div>
</div>

 </div>



 <div class="p-3">

 	<strong class="fw-bold px-3">Web Theme</strong>

 <div class="d-flex p-3" style="flex-wrap: wrap;">


<?php
 switch ($theme) {
   case 'Default':

echo '
    <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="Default" class="mx-2" style="cursor: pointer;" checked>
Default    
    </div>
    <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="blackmaria" class="mx-2" style="cursor: pointer;" >
blackmaria    
    </div>
    <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
    <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
    <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
    <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
     <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
     <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
     <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
     <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>';


     break;
   

    case 'blackmaria':

echo '
    <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="Default" class="mx-2" style="cursor: pointer;" >
Default    
    </div>
    <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="blackmaria" class="mx-2" style="cursor: pointer;" checked>
blackmaria    
    </div>
    <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
    <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
    <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
    <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
     <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
     <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
     <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>
     <div class="p-2 border m-1 fw-bold rounded" >
    
        <input type="radio" name="theme_id" value="" class="mx-2" style="cursor: pointer;" >
Theme    
    </div>';


     break; 
   default:
     # code...
     break;
 }

?>


</div>






 </div>
        <div  class="d-flex align-items-center " style="height:50px;">          

            <button class="btn btn-primary w-100 fw-bold"  style="height:100%;border-bottom-right-radius: 30px;border-bottom-left-radius: 30px;">Save Changes</button>

                                    </div>
        
        </div>   


    
                            
                                          
         </form>                                     
</div>

<div class="d-dural-flex-child1 p-3">


    <h4 style="font-weight: bolder;" >Alert</h4>
<p style="color: gray;" id="datadiv">Notification Goes Here</p>
</div>

</div>


<script>



var ee= $("#customRange3").val();

if (ee == 1) {
 $("#e1d").html('Small');

}
else if (ee == 2) {
 $("#e1d").html('Medium');

}
else if (ee == 3) {
 $("#e1d").html('Large');

}


function e1() {

var e1 = $("#customRange3").val();

if (e1 == 1) {
 $("#e1d").html('Small');

}
else if (e1 == 2) {
 $("#e1d").html('Medium');

}
else if (e1 == 3) {
 $("#e1d").html('Large');

}

}


$("#theme").on('submit',function(e){

  e.preventDefault();

$(this).ajaxSubmit({

success: function(data){
  var d = data;
  var e =  2;
  if (d == e) {
    $("#datadiv").html('<strong style="color:green;">Re-design of webpage.....</strong>'); 

setTimeout(function () {
 
  window.location.assign("./");

},3000);


  }
  else{
$("#datadiv").append('<div class="alert alert-danger alert-dismissible fade show" role="alert">   '+data+'  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>'); 
}
} 

});
});


var x, i, j, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);

</script>