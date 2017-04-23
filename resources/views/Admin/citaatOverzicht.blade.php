<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="{{ asset('css/basic.css') }}" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/parallax.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">

                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="menuLogoAdmin" href="./"><img src="{{ asset('img/SR_Logo_transparant_wit.png') }}"> </a>
            </div>

            <div class="header-right">

                Login
            </div>
        </nav>
        <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
                   <div class="sidebar-collapse">
                       <ul class="nav" id="main-menu">
                           <li>
                        <a class="active-menu" href="/adminHome" id="adminHome"><i class="fa fa-dashboard "></i>Dashboard</a>
                           </li>
                           <li>
                               <a href="#"><i class="fa fa-desktop "></i>Citaten <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                   <li>
                                       <a href="/adminCreateCitaat" id="adminCreateCitaat"><i class="fa fa-toggle-on"></i>Citaat aanmaken</a>
                                   </li>
                                   <li>
                                       <a href="/adminOverzichtCitaat" id="adminOverichtCitaat"><i class="fa fa-bell "></i>Citaten overzicht</a>
                                   </li>

                               </ul>
                           </li>
                            <li>
                               <a href="#"><i class="fa fa-yelp "></i>Stuvers<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                   <li>
                                       <a href="/adminCreateStuver" id="adminCreateStuver"><i class="fa fa-coffee"></i>Stuvers aanmaken</a>
                                   </li>
                                   <li>
                                       <a href="/adminOverzichtStuver" id="adminOverzichtStuver"><i class="fa fa-flash "></i>Stuvers overzicht</a>
                                   </li>
                               </ul>
                           </li>
                           <li>
                               <a href="#"><i class="fa fa-flash "></i>Raden </a>
                               <ul class="nav nav-second-level">
                                  <li>
                                      <a href="/adminCreateRaden" id="adminCreateRaden"><i class="fa fa-coffee"></i>Raden aanmaken</a>
                                  </li>
                                  <li>
                                      <a href="/adminOverzichtRaden" id="adminOverzichtRaden"><i class="fa fa-flash "></i>Raden overzicht</a>
                                  </li>
                               </ul>
                           </li>
                            <li>
                                <a href="table.html"><i class="fa fa-flash "></i>Dossiers </a>
                                 <ul class="nav nav-second-level">
                                     <li>
                                        <a href="/adminCreateDossier" id="adminCreateDossier"><i class="fa fa-coffee"></i>Dossier aanmaken</a>
                                     </li>
                                     <li>
                                         <a href="/adminOverzichtDossier" id="adminOverzichtDossier"><i class="fa fa-flash "></i>Dossiers overzicht</a>
                                    </li>
                                 </ul>
                             </li>
                            </ul>
                   </div>

               </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-head-line">Citaten Overzicht</h1>
                            </div>
                        </div>
                        <!-- /. ROW  -->
                        <div class="row">
                    <div class="col-md-6">
                                         <!--   Basic Table  -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Citaten
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Voornaam</th>
                                                                <th>Familienaam</th>
                                                                <th>statuut</th>
                                                                <th>Text</th>
                                                                <th>Delete</th>
                                                                <th>Update</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($citaten as $citaat)
                                                            <tr>
                                                                <td>{{$citaat->ID}}</td>
                                                                <td>{{$citaat->Voornaam}}</td>
                                                                <td>{{$citaat->Familienaam}}</td>
                                                                <td>{{$citaat->Statuut}}</td>
                                                                <td>{{$citaat->Text}}</td>
                                                                <td><a href="citaat/{{$citaat->ID}}/destroy">Delete</a></td>
                                                                <td><a href="">Update</a></td>
                                                            </tr>
                                                            @endforeach


                                                        </tbody>
                                                    </table>
                                                    <div class="pagination">{{ $citaten->links() }}</div>
                                                </div>
                                            </div>
                                        </div>
                                          <!-- End  Basic Table  -->
                                    </div>
                                </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</div>
</body>
</html>
