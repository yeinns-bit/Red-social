<?php include('index_header.php'); ?>
			<?php include('dbcon.php'); ?>
    <body class="page-auth">
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <div class="clr">
                    <div class="title">
                        <span class="brand-ball" aria-hidden="true">
                            <svg viewBox="0 0 100 100" width="26" height="26">
                                <circle cx="50" cy="50" r="46" fill="#fff" stroke="#12161f" stroke-width="7"/>
                                <path d="M4 50a46 46 0 0 1 92 0z" fill="#E3350D"/>
                                <rect x="4" y="46" width="92" height="8" fill="#12161f"/>
                                <circle cx="50" cy="50" r="15" fill="#12161f"/>
                                <circle cx="50" cy="50" r="9" fill="#fff"/>
                            </svg>
                        </span>
                        PokéRed
                    </div>
                    <button type="button" class="auth-theme" onclick="toggleTheme()">
                        <i class="icon-adjust"></i> <span class="theme-label">Modo oscuro</span>
                    </button>
                </div>
            </div><!--/ Codrops top bar -->
            <section>				
			
                <div id="container_demo" >
				
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
								<?php include('login_form.php'); ?>
                        </div>
                        <div id="register" class="animate form">
								<?php include('sign_up_form.php'); ?>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>