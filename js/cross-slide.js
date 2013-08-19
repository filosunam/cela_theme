// Javascript Document 
 
  $(function() {
    $('#slideshow').crossSlide({
      sleep: 2,
      fade: 1
    }, [
      { src: '/wordpress/wp-content/themes/CELA_THEME/images/encabezado/1.png' },
      { src: '/wordpress/wp-content/themes/CELA_THEME/images/encabezado/4.png' },
      { src: '/wordpress/wp-content/themes/CELA_THEME/images/encabezado/5.png' },
      { src: '/wordpress/wp-content/themes/CELA_THEME/images/encabezado/6.png' }
    ])
  });