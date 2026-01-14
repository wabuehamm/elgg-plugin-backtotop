window.onscroll = () => {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    $('#backToTopButton').show()
  } else {
    $('#backToTopButton').hide()
  }
}

$('#backToTopButton').click(() => {
    document.body.scrollTop = 0
    document.documentElement.scrollTop = 0
  }
)
