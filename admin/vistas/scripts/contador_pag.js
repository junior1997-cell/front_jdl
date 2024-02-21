(() => {
  document.addEventListener("DOMContentLoaded", async () => {
    try {
      $.post("admin/ajax/contador_de_pagina.php?op=contador_de_pagina", 
      { 
        'pagina_nombre':  $(".name_page").text(), 
        'nombre_day':     extraer_dia_semana_completo(moment().format('YYYY-MM-DD')), 
        'nombre_month':   extraer_nombre_mes(moment().format('YYYY-MM-DD')), 
        'nombre_year':    moment().format('YYYY'), 
      }, 
      function (e, status) {
        e = JSON.parse(e);  
        if (e.status == true) { console.log("Visita registrada"); } else { ver_errores(e); }       
      }).fail( function(e) { console.log(e); ver_errores(e); } );
    } catch (e) {
      console.log("Error registrando visita: " + e);
    }
  });
})();