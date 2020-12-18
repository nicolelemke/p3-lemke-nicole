$(document).on('scroll', function(){
    $('.widwords').css("left", Math.max(0 + 0.35*window.scrollY) + "px")
  })

$(document).on('scroll', function(){
    $('.expwords').css("left", Math.max(0 + 0.35*window.scrollY) + "px")
  })

$(document).on('scroll', function(){
  if (window.innerWidth < 768) {
    $('.skwords').css("left", Math.max(200 - 0.35*window.scrollY) + "%").css("visibility","visible")
  }else{
    $('.skwords').css("left", Math.max(window.innerWidth - .75*window.scrollY) + "px").css("visibility","visible")
  }
})
