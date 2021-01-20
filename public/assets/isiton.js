//
// Boot
//
var platforms

// Get and Check platforms
$.getJSON("/data/platforms.json?" + (+new Date()), function( data ) {
  console.log('/data/platforms.json loaded')
  platforms = data

  // Add platforms
  $(platforms).each(function(index, platform){
    addPlatform(platform)
  })

  // Check platforms
  $(platforms).each(function(index, platform){
    checkPlatform(platform)
  })

}).fail(function(){
  console.log('Could not get main JSON file')
})

// Refresh button
$('#refresh').click(function(){
  console.log('Refresh button clicked')

  // Check platforms
  $(platforms).each(function(index, platform){
    setPlatformStatus(platform.name, 'checking')
    checkPlatform(platform)
  })
})

//
// Functions
//


  // Add a platform
  function addPlatform(platform){
    console.log('rendering platform ' + platform.name)

    var newPlatform = $('#platform-prototype').clone()
      newPlatform.attr('id', 'platform-'+platform.name)
      newPlatform.children('.platform-title').html(platform.title)
      newPlatform.removeClass('d-none')
    newPlatform.appendTo('#platforms')
  }


  // Check a platform
  function checkPlatform(platform){
    var img = new Image();
    img.onload = imgload;
    img.onerror = imgerr;

    function imgload(e){
      setPlatformStatus(platform.name, 'ok')
    }
    function imgerr(e){
      console.log('error for '+platform.name)
      setPlatformStatus(platform.name, 'error')
    }

    var url = platform.url + '/favicon.ico?' + (+new Date(+new Date())())
    console.log('getting '+ url)
    img.src = url
  }

  // Set platform status
  function setPlatformStatus(platformName, status){

    var platformDiv = $('#platform-'+platformName)
    platformDiv.children('.platform-status').addClass('d-none')
    platformDiv.children('.platform-status.status-'+status).removeClass('d-none')
  }
