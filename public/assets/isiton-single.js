// Test click
$('#test').click(function(){
  var url = $('#url').val();
  console.log('checking '+ url)
  checkURL(url)
})

$('#img').click(function(){
  console.log('img test')

  var img = new Image();
  img.onload = imgload;
  img.onerror = imgerr;

  function imgload(e){
    console.log('loaded')
  }
  function imgerr(e){
    console.log('error ' + e)
  }

  var url = $('#url').val()
  img.src = url;
})



// Check a platform
function checkURL(url){
  $.get(url, function(){})
    .done(function(){
      $('#status').html('success')
    })
    .fail(function(){
      $('#status').html('fail')
    })
}
