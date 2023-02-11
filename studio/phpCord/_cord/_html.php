<?php


 function html($me)
{

    $text = <<<_END
    $me
    _END;
    echo(''.$text.'');


}

function error($me)
{
html("<div style='margin-top:10px;margin-bottom:10px; margin-right:auto; margin-left:auto; max-width:65%; color:red; font-weight:bolder; background-color:lightgray; padding:10px;border-left:5px solid red; border-radius:20px;display:flex;
justify-content: center;
align-items: center;'> $me </div>");

}
?>