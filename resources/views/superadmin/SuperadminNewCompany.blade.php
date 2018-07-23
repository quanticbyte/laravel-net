@include("includes.head")
<!-- nabvar -------------------------------------------------------------------->
@include("includes.navbar")
<!------------------------------------------------------------------------------>
    <div id="wrapper" class="toggled">
        <!-- Sidebar --------------------------------------------------------------->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand text-white">
                    
                </li>
                <li>
                    <a id="btn1" href="">Empresas</a>
                </li>
                <li>
                    <a id="btn2" href="">Clients</a>
                </li>
                <li>
                    <a id="btn3" href="">Ajax</a>
                </li>
                <li>
                    <a id="btn4" href="">Nova Empresa</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper ----------------------------------------------------->

        <!-- Page Content ---------------------------------------------------------->
        <div id="page-content-wrapper">
            <div class="container-fluid">
            <div class="espai-navbar"></div>
            <div id="container-dades">
                <h1>Benvingut SuperAdmin.</h1>
                <p>Aixó es una mostra del que pots fer des d'aquí.</p>

            </div><!-- end container -->
        <!-- /#footer-content-wrapper ---------------------------------------------->
                <div id="footer">
                    Codigo del footer
                </div>
        <!-------------------------------------------------------------------------->

            </div>
        </div>
        <!-- /#page-content-wrapper ------------------------------------------------>

    </div>
    <!-- /#wrapper -->

    <!-- Menu Toggle Script -->
    <script>
    window.onload = function()
    {
        jQuery("#menu-toggle").click(function(e) {
            e.preventDefault();
            jQuery("#wrapper").toggleClass("toggled");
        });
    };

    </script>

</body>
</html>


