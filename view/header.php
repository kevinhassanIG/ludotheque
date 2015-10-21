<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap/style.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap-theme.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="icon" type="image/png" href="./favicon.ico" />
        <link rel="shortcut icon" href="./favicon.ico">
        <title>Ludothèque</title>
    </head>
    <body>
        <nav>
            <div id='cssmenu'>
            </div>
        </nav>
        <?php if(empty($_SESSION['login'])){
                        echo <<< EOT
                        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <div class="main">

                        <div class="row">
                        <div class="col-xs-12 col-sm-6 col-sm-offset-1 cadre">

                            <h1>La ludothèque</h1>
                            <h2>Tous vos jeux en un seul endroit</h2>

                            <form action="." name="login" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
                                <div class="form-group">
                                <div class="col-md-8"><input name="username" placeholder="Idenfiant" class="form-control" type="text" id="UserUsername"/></div>
                                </div> 

                                <div class="form-group">
                                <div class="col-md-8"><input name="password" placeholder="Mot de passe" class="form-control" type="password" id="UserPassword"/></div>
                                </div> 

                                <div class="form-group">
                                <div class="col-md-offset-0 col-md-8">
                                    <input type="hidden" name="action" value="connected" />
                                    <input type="hidden" name="controller" value="utilisateur" />   
                                    <input  class="btn btn-success btn btn-success" type="submit" value="Connexion"/></div>
                                </div>

                            </form>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
EOT;
        }else{
            echo <<< EOT
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <a class="navbar-brand" href="#">Ludothèque</a>
                      </div>
                      <div>
                        <ul class="nav navbar-nav">
                          <li class="active"><a href="#">Home</a></li>
                          <li><a href="#">Page 1</a></li>
                          <li><a href="#">Page 2</a></li>
                          <li><a href="#">Page 3</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
EOT;
            if(Session::is_admin()){
                echo <<< EOT
                        <li><a href="?action=inscription">Inscrire un utilisateur</a></li>
EOT;
            }
                echo <<< EOT
                          <li><a href="?action=disconnect">Se déconnecter</a></li>
                       </ul>
                      </div>
                    </div>
                </nav>
EOT;
         
   }
?>
    </body>
