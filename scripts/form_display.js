function showDiv()
{
  // hide any showing
  $(".hidden").each(function(){
      $(this).css('display','none');
  });

  // our target
  var target = "#details_" + $("#reserve").val();                                                                                                                                
  var target2 = "#details_" + $("#matType").val();
  var target3 = "#details_" + $("#additional").val();
  // does it exist?
  
  if( $(target).length > 0 )
  {
    // show it
    $(target).css('display','block');
    $(target2).css('display','block');
    $(target3).css('display','block');

    
  }
}

$(document).ready(function(){

  // bind it
  $("#reserve").change(function(){
    showDiv();
  });
  
  $("#matType").change(function(){
    showDiv();
  });
  
    $("#additional").change(function(){
    showDiv();
  });

  // run it automagically
  showDiv();
});

