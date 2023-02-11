 
"use strict";



var eee = document.getElementById("net_active");
var btnsddd = eee.getElementsByClassName("net_active");
for (let i = 0; i < btnsddd.length; i++) {
btnsddd[i].addEventListener("click",function () {
     let current = document.getElementsByClassName("net_activee");
     current[0].className = current[0].className.replace(" net_activee","");
     this.className += " net_activee";
});    
}

var catchuree = document.getElementById("sign");
for (let i = 0; i < catchuree.length; i++) {
  
}




var yy = document.getElementById("menu_row");
var clickablee = yy.getElementsByClassName("menu_row");
for (let i = 0; i < clickablee.length; i++) {
clickablee[i].addEventListener("click",function () {
     let current = document.getElementsByClassName("active_row");
     current[0].className = current[0].className.replace(" active_row","");
     this.className += " active_row";
});    
}



function voc(textarea) {

  $("#"+textarea).focus();


}


var lastCaretPos =0;
var parentNode;
var range;
var selection;

function img(textarea,link) {
$(function(){
    $('#'+textarea).focus();

    $('#'+textarea).on('keyup mouseup',function (e){
        selection = window.getSelection();
        range = selection.getRangeAt(0);
        parentNode = range.commonAncestorContainer.parentNode;
    });
})
const textare = textarea;
    if($(parentNode).parents().is('#'+textare) || $(parentNode).is('#'+textare) )
    {
        var img = document.createElement('img');
        img.src=link;

        range.deleteContents();        
        range.insertNode(img);  
        //cursor at the last with this
        range.collapse(false);
        selection.removeAllRanges();
        selection.addRange(range);

    }
    else
    {
alert("click on your editor");


     }




}






function emoji(textarea,svg) {
$(function(){
    $('#'+textarea).focus();

    $('#'+textarea).on('keyup mouseup',function (e){
        selection = window.getSelection();
        range = selection.getRangeAt(0);
        parentNode = range.commonAncestorContainer.parentNode;
    });
})
const textare = textarea;
    if($(parentNode).parents().is('#'+textare) || $(parentNode).is('#'+textare) )
    {
           var svg_into = document.createElement('span');

if (svg == 1) {
// smile
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/></svg>&nbsp';


}
else if (svg == 2) {
    // smile
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-angry" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zm6.991-8.38a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5s-1-.672-1-1.5c0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761l2-1zm-6.552 0a.5.5 0 0 0-.448.894l1.009.504A1.94 1.94 0 0 0 5 6.5C5 7.328 5.448 8 6 8s1-.672 1-1.5c0-.247-.04-.48-.11-.686a.502.502 0 0 0-.166-.761l-2-1z"/></svg>&nbsp';
}

else if (svg == 3) {
    // angry dizzy
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-dizzy" viewBox="0 0 16 16">  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M9.146 5.146a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zm-5 0a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 1 1 .708.708l-.647.646.647.646a.5.5 0 1 1-.708.708L5.5 7.207l-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zM10 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/></svg>&nbsp';
}

else if (svg == 4) {
    // expressionless
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-expressionless" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm5 0a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/></svg>&nbsp';
}

else if (svg == 5) {
    // frown
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/></svg>&nbsp';
}

else if (svg == 6) {
    // emoji-heart-eyes
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>  <path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z"/></svg>&nbsp';
}

else if (svg == 7) {
    // emoji-laughing
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-laughing" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zM7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5z"/></svg>&nbsp';
}

else if (svg == 8) {
    // smile
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-neutral" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M4 10.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5zm3-4C7 5.672 6.552 5 6 5s-1 .672-1 1.5S5.448 8 6 8s1-.672 1-1.5zm4 0c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5S9.448 8 10 8s1-.672 1-1.5z"/></svg>&nbsp';
}

else if (svg == 9) {
    // emoji-smile-upside-down
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-smile-upside-down" viewBox="0 0 16 16"> <path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zm0-1a8 8 0 1 1 0 16A8 8 0 0 1 8 0z"/>  <path d="M4.285 6.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 4.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 3.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 9.5C7 8.672 6.552 8 6 8s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5zm4 0c0-.828-.448-1.5-1-1.5s-1 .672-1 1.5.448 1.5 1 1.5 1-.672 1-1.5z"/></svg>&nbsp';
}

else if (svg == 10) {
    // smile
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16"><path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z"/> <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z"/></svg>&nbsp';
}

else if (svg == 11) {
    // emoji-wink
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-emoji-wink" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm1.757-.437a.5.5 0 0 1 .68.194.934.934 0 0 0 .813.493c.339 0 .645-.19.813-.493a.5.5 0 1 1 .874.486A1.934 1.934 0 0 1 10.25 7.75c-.73 0-1.356-.412-1.687-1.007a.5.5 0 0 1 .194-.68z"/></svg>&nbsp';
}

else if (svg == 12) {
    // graph up
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/></svg>&nbsp';
}

else if (svg == 13) {
    // laptop
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/></svg>&nbsp';
}

else if (svg == 14) {
    // thermo

    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-thermometer-half" viewBox="0 0 16 16"><path d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V6.5a.5.5 0 0 1 1 0v4.585a1.5 1.5 0 0 1 1 1.415z"/><path d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1z"/></svg>&nbsp';
}

else if (svg == 15) {
    // speaker
    svg_into.innerHTML  = '<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-speaker" viewBox="0 0 16 16"><path d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/><path d="M8 4.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5zM8 6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 3a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-3.5 1.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg>&nbsp';
}






        range.deleteContents();        
        range.insertNode(svg_into);  
        //cursor at the last with this
        range.collapse(false);
        selection.removeAllRanges();
        selection.addRange(range);

    }
    else
    {
alert("click on your editor");


     }




}










        function text__(textarea,types) {
            

            $(function(){
                $('#'+textarea).focus();
            
                $('#'+textarea).on('keyup mouseup',function (e){
                    selection = window.getSelection();
                    range = selection.getRangeAt(0);
                    parentNode = range.commonAncestorContainer.parentNode;
                });
            })
            let textbox = textarea;
                if($(parentNode).parents().is('#'+textbox)|| $(parentNode).is('#'+textbox) )
                {

if (types === 'b') {
    var text = document.createElement('strong');
      text.innerText=' Bold';
}
else if (types === 'p') {
    var text = document.createElement('span');
      text.innerText=' text';
}
else if (types === 'i') {
    var text = document.createElement('i');
      text.innerText=' italic';
}
else if (types === 'div-right') {
    var text = document.createElement('div');
    text.innerText=' align-right';
    text.style.textAlign='right';
    text.style.width='100%';
}
else if (types === 'div-left') {
    var text = document.createElement('div');
    text.innerText=' align-left';
    text.style.textAlign='left';
    text.style.width='100%';

}
else if (types === 'div-center') {
    var text = document.createElement('div');
    text.innerText=' align-center';
    text.style.textAlign='center';
    text.style.width='100%';

}
else if (types === 'li') {
    var text = document.createElement('li');
      text.innerText=' list';
}
else if (types === 'ol') {
    var text = document.createElement('ol');
      text.innerText='number list';
          text.style.display='list-item';

}

else if (types === 'quo') {
    var text = document.createElement('div');
      text.innerText=' blockquote';
                text.style.borderLeft='3px solid lightgray';
                text.style.padding='10px';
                text.style.background='#f8f9fa !important;';

}
else if (types === 'h1') {
    var text = document.createElement('h1');
      text.innerText=' a';
}else if (types === 'h2') {
    var text = document.createElement('h2');
      text.innerText=' Header';
}else if (types === 'h3') {
    var text = document.createElement('h3');
      text.innerText=' Header';
}else if (types === 'h4') {
    var text = document.createElement('h4');
      text.innerText=' Header';
}else if (types === 'h5') {
    var text = document.createElement('h5');
      text.innerText=' Header';
}else if (types === 'h6') {
    var text = document.createElement('h6');
      text.innerText=' Header';
}
else if (types === 'block') {
    var text = document.createElement('div');
      text.innerText=' New Block';
}
else if (types === 'underline') {
    var text = document.createElement('u');
      text.innerText=' underline text';
}
range.deleteContents();        
                    range.insertNode(text);  
                    //cursor at the last with this
                    range.collapse(false);
                    selection.removeAllRanges();
                    selection.addRange(range);
            
                }
                else
                {
            alert("click on your editor");
            
            
                 }
            
            

        }













// link-maker

        
function textlink(textarea,linke,linktext) {
        $("#add_LINK").removeClass("d-flex").hide();

    $(function(){
        $('#'+textarea).focus();
    
        $('#'+textarea).on('keyup mouseup',function (e){
            selection = window.getSelection();
            range = selection.getRangeAt(0);
            parentNode = range.commonAncestorContainer.parentNode;
        });
    })
    var textare = textarea;
    var link = $('#'+linke).val();
    var text = $('#'+linktext).val();
    
        if($(parentNode).parents().is('#'+textare)|| $(parentNode).is('#'+textare) )
        {
            var a = document.createElement('a');
    a.href=link;
            a.innerText=' '+text+' ';
    
            range.deleteContents();        
            range.insertNode(a);  
            //cursor at the last with this
            range.collapse(false);
            selection.removeAllRanges();
            selection.addRange(range);
    
        }
        else
        {
    alert("click on your editor");
    
    
         }
    
    

}



// Iframe

        
function textiframe(textarea,linke) {
        $("#add_frame_LINK").removeClass("d-flex").hide();

    $(function(){
        $('#'+textarea).focus();
    
        $('#'+textarea).on('keyup mouseup',function (e){
            selection = window.getSelection();
            range = selection.getRangeAt(0);
            parentNode = range.commonAncestorContainer.parentNode;
        });
    })
    let textare = textarea;
    const link = $('#'+linke).val();
        if($(parentNode).parents().is('#'+textare)|| $(parentNode).is('#'+textare) )
        {
            var ifr = document.createElement('iframe');
            ifr.width='100%';
            ifr.src=link;
            ifr.frameborder='0';
            ifr.class='my-2';

            range.deleteContents();        
            range.insertNode(ifr);  
            //cursor at the last with this
            range.collapse(false);
            selection.removeAllRanges();
            selection.addRange(range);
    
        }
        else
        {
    alert("click on your editor");
    
    
         }
    
    

}
