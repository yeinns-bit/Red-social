<!DOCTYPE html>
 <html lang="es" class="no-js"> 
    <head>
        <meta charset="UTF-8" />
        <title>PokéRed — Acceso</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Acceso y registro de PokéRed" />

        <script>
        (function(){ try{ document.documentElement.setAttribute('data-theme', localStorage.getItem('wk-theme') || 'light'); }catch(e){} })();
        function wkApplyLabels(){
          var dark = document.documentElement.getAttribute('data-theme') === 'dark';
          var els = document.querySelectorAll('.theme-label');
          for (var i=0;i<els.length;i++){ els[i].textContent = dark ? 'Modo claro' : 'Modo oscuro'; }
        }
        function toggleTheme(){
          var el = document.documentElement;
          var cur = el.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
          el.setAttribute('data-theme', cur);
          try{ localStorage.setItem('wk-theme', cur); }catch(e){}
          wkApplyLabels();
        }
        document.addEventListener('DOMContentLoaded', wkApplyLabels);
        </script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />

        <!-- Sistema de diseño: SIEMPRE de último -->
        <link rel="stylesheet" type="text/css" href="css/corporativo-auth.css" />
    </head>
