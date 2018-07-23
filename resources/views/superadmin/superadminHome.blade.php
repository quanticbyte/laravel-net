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
                    <a id="" href="http://laravel.local/superadmin/newcompany">Nova Empresa</a>
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
                
                <p>
                .Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            	</p>
            	<p>
            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            	</p>
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



        //Boto Empresas ------------------------------------------------------
        // retorna totas les empresas
        jQuery("#btn1").click(function(e){
            e.preventDefault();
            //hem de passar el api token
            var token = '{{ Auth::user()->api_token }}';
            //console.log(token);
            jQuery.ajax({
                url: "http://laravel.local/api/superadmin/companies",
                type: 'GET',
                data:{},
                headers: {"Authorization": "Bearer "+token},
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    //aqui redireccionas
                    console.log(data);

                    //netejem div
                    jQuery("#container-dades").empty();
                    //titul
                    //añadimos contenido
                    jQuery("#container-dades").append("<h1>Llistat d'empresas</h1>");
                    //creem primers caps de la taula
                    jQuery("#container-dades").append(
                        '<div class="table-responsive">'+
                        '<table class="table table-striped">'+
                        '<thead>'+
                          '<tr>'+
                            '<th>ID</th>'+
                            '<th>Nom</th>' +
                            '<th>Nom Comercial</th>'+
                            '<th>Contacte</th>'+
                            '<th>telefón</th>'+
                            '<th>Data alta</th>'+
                          '</tr>'+
                          '</thead>'+
                          '<tbody>'
                        );

                    for(var a = 0; a<data['data'].length; a++)
                    {
                        //console.log(data['data'][a]['name']);
                        //exemple de com imprimim a pantalla
                        jQuery("#container-dades").append(
                          '<tr>'+
                            '<td>'+data['data'][a]['id']+'</td>'+
                            '<td>'+data['data'][a]['real_name']+'</td>'+ 
                            '<td>'+data['data'][a]['comercial_name']+'</td>'+
                            '<td>'+data['data'][a]['contact_name']+'</td>'+
                            '<td>'+data['data'][a]['contact_tel']+'</td>'+
                            '<td>'+data['data'][a]['created_at']+'</td>'+
                          '</tr>'            
                        );            

                    }

                    //tanquem tabla
                    jQuery("#container-dades").append("</tbody></table></div>");
                

                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                }
            });
            

        });

        //Boto Empresas ------------------------------------------------------
        jQuery("#btn2").click(function(e){
            e.preventDefault();
            jQuery("#container-dades").empty();
            //añadimos contenido
            jQuery("#container-dades").append("<h1>Clients</h1>");  
        });

        //Proba Ajax ---------------------------------------------------------
        jQuery("#btn3").click(function(e){
            e.preventDefault();
            //hem de passar el api token
            var token = '{{ Auth::user()->api_token }}';
            //console.log(token);
            jQuery.ajax({
                url: "http://laravel.local/api/v1/tools", //retorna totes les eines amb les que puc interactuar
                type: 'GET',
                data:{},
                headers: {"Authorization": "Bearer "+token},
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    //aqui redireccionas
                    console.log(data);
                    
                    //netejem div
                    jQuery("#container-dades").empty();
                    //titul
                    //añadimos contenido
                    jQuery("#container-dades").append("<h1>Eines amb les que puc interactuar</h1>");
                    //creem primers caps de la taula
                    jQuery("#container-dades").append(
                        '<table class="table">'+
                          '<tr>'+
                            '<th scope="col">ID</th>'+
                            '<th scope="col">Name</th>' +
                            '<th scope="col">Model</th>'+
                          '</tr>'
                        );

                    for(var a = 0; a<data['data'].length; a++)
                    {
                        //console.log(data['data'][a]['name']);
                        //exemple de com imprimim a pantalla
                        jQuery("#container-dades").append(
                          '<tr>'+
                            '<th scope="row">'+data['data'][a]['id']+'</th>'+
                            '<td>'+data['data'][a]['name']+'</td>'+ 
                            '<td>'+data['data'][a]['model']+'</td>'+
                          '</tr>'            
                        );            

                    }

                    //tanquem tabla
                    jQuery("#container-dades").append("</table>");


                },
                error: function (request, status, error) {
                    console.log(request.responseText);
                }
            });
            

        });
        //---------------------------------------------------------------------

        //Boto nova Empresas --------------------------------------------------
        
        jQuery("#btn4").click(function(e){
            e.preventDefault();
            jQuery("#container-dades").empty();
            //muntem formulari
            jQuery("#container-dades").append(
                "<h1>Nova empresa</h1>"+
                

                //'<form action="http://laravel.local/api/superadmin/newcompany">'+
                
                //'@csrf'+
    
                //'</form>'

                //'<form action="{{url('/api/superadmin/newcompany')}}" enctype="multipart/form-data">'+
               
                '<form method=\"POST\" action="/api/superadmin/newcompany">'+
                //'@method("post")'+
                '@csrf'+
                //'<input type="hidden" value="idproof"  id="id"  name="id" >'+
                //'<input type="hidden" value="nameproof"  id="name"  name="name" >'+
                '<input type="submit" class="btn" value="Confirm"/>'+
                '</form> '               
               
                


                );  
        });
        






    }

        //funcións botons -----------------------------------------

    </script>

</body>
</html>
