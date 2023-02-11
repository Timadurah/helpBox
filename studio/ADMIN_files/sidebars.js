// toggle

function toggle(div_toggle) {
  $("#"+div_toggle).toggleClass('d-flex');
  $("#"+hidediv).toggleClass('m-none');


}
function togglel(div_toggle) {
  $("#"+div_toggle).addClass('m-p-fixed');

  $("#"+div_toggle).show();


}

// load_hide_modal
function $load_hide_modal(link,loaddiv,hidediv){
  $("#"+loaddiv).load("#"+link);
  $("#"+hidediv).removeClass('m-p-fixed');
  $("#"+hidediv).hide();
  


}





/* global bootstrap: false */

(function () {
  'use strict'

  // Tooltip and popover demos
  document.querySelectorAll('.tooltip-demo')
    .forEach(function (tooltip) {
      new bootstrap.Tooltip(tooltip, {
        selector: '[data-bs-toggle="tooltip"]'
      })
    })

  document.querySelectorAll('[data-bs-toggle="popover"]')
    .forEach(function (popover) {
      new bootstrap.Popover(popover)
    })

  document.querySelectorAll('.toast')
    .forEach(function (toastNode) {
      var toast = new bootstrap.Toast(toastNode, {
        autohide: false
      })

      toast.show()
    })

  // Disable empty links and submit buttons
  document.querySelectorAll('[href="#"], [type="submit"]')
    .forEach(function (link) {
      link.addEventListener('click', function (event) {
        event.preventDefault()
      })
    })

  function setActiveItem() {
    var hash = window.location.hash

    if (hash === '') {
      return
    }

    var link = document.querySelector('.bd-aside a[href="' + hash + '"]')

    if (!link) {
      return
    }

    var active = document.querySelector('.bd-aside .active')
    var parent = link.parentNode.parentNode.previousElementSibling

    link.classList.add('active')

    if (parent.classList.contains('collapsed')) {
      parent.click()
    }

    if (!active) {
      return
    }

    var expanded = active.parentNode.parentNode.previousElementSibling

    active.classList.remove('active')

    if (expanded && parent !== expanded) {
      expanded.click()
    }
  }

  setActiveItem()
  window.addEventListener('hashchange', setActiveItem)
})()



function hideme(btn,hide1,hide2,show,bt1,bt2) {

  $("#"+btn).css({"border-bottom":"2px solid red"});
  $("#"+bt1).css({"border-bottom":"2px solid transparent"});
  $("#"+bt2).css({"border-bottom":"2px solid transparent"});
  $("#"+hide1).hide();	
  $("#"+hide2).hide();
  $("#"+show).show();
  
  
  
  }




  // Create loader function

function   $space_load(link,frame) {
  
  $("#"+frame).load(link);   

}


// end of Loader function



// triger spacework


function $trigger(location) {
  $("#"+location).focus().trigger('click');
}




// end of trigger



// file geting with js




function $Fgetter(input,Flink) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function (e) {
      $('#'+Flink).attr('src', e.target.result);
     
      }
  
      reader.readAsDataURL(input.files[0]);
  }
  }

  
  // end getting file with js
// fire functions





function $space_nav_loader(link,frame,btnn) {
  

$("#"+frame).load(link);   


}







