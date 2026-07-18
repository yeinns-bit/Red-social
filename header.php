<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>PokéRed</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script>
        // Aplica el tema guardado ANTES de pintar, para que no parpadee
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

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-glyphicons.css" type="text/css" rel="stylesheet">
        <link href="css/font-awesome.css" type="text/css" rel="stylesheet">
        <link href="css/my_style.css" type="text/css" rel="stylesheet">

        <!-- Sistema de diseño: SIEMPRE de último -->
        <link href="css/corporativo.css" type="text/css" rel="stylesheet">
    </head>
    <?php include('dbcon.php'); ?>
