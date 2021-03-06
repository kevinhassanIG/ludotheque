<?php
$user=$tab_u[0];
echo<<<EOT
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class='row' style="text-align : center;">
                <h1>Modifier l'utilisateur : <span style='color:red'>$user->username</span></h1>
            </div>
            <form class="form-horizontal" role="form" method="post" action=".">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="sex" class="col-sm-3 control-label">Sexe :</label>
                            <div class="col-sm-8">
                                <select name="sex" class="form-control" id="id_sex" required="required">
EOT;
                                if($user->sexUser == "Homme"){
                                    echo '<option value="Homme"selected>Homme</option>';
                                    echo '<option value="Femme">Femme</option>';
                                }
                                else{
                                    echo '<option value="Homme">Homme</option>';
                                    echo '<option value="Femme"selected>Femme</option>';
                                }
echo<<<EOT
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nom" class="col-sm-3 control-label">Nom :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" id="id_name" value="$user->nameUser" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="col-sm-3 control-label">Prenom :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nickname" id="id_nickname" value="$user->nicknameUser" required="required">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="col-sm-3 control-label">Date de naissance :</label>
                            <div class="col-sm-8">
                                <input type="date" name="dateNaissance", id="id_dNaissance" value="$user->dateNaissance" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mail" class="col-sm-3 control-label">Email :</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email" id="id_email" value="$user->emailUser" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-sm-3 control-label">T&eacute;l&eacute;phone :</label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control" name="tel" id="id_numTel" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" value="$user->telUser" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="col-sm-3 control-label">Mobile :</label>
                            <div class="col-sm-8">
                                <input type="tel" class="form-control" name="mobile" id="id_mobile" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" value="$user->mobileUser" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="adresse" class="col-sm-3 control-label">Adresse :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="address" id="id_adress" value="$user->addressUser" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cp" class="col-sm-3 control-label">Code Postal :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="cp" id="id_cp" value="$user->cpUser" pattern="[0-9]{5}" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ville" class="col-sm-3 control-label">Ville :</label>
                            <div class="col-sm-8">
                                <input type="text" name="city" class="form-control" id="id_city" value="$user->cityUser" required="required">
                            </div>
                        </div>
                        <div class="form-group">
EOT;
                            if(Session::is_admin() && !Session::is_user($user->username)){ //Un administrateur ne devrait pas pouvoir s'enlever les droits
echo<<<EOT
                            <label for="id_loueur" class="col-sm-3 control-label">Admin ? :</label> 
                            <div class="col-sm-8">
EOT;
                            if($user->admin == 1){
                                echo'<input type="checkbox" value="true" name="admin" id="id_admin" checked/>';
                            }
                            else{
                                  echo'<input type="checkbox" value="true" name="admin" id="id_admin"/>';
                                }
                            }
echo<<<EOT
                            </div>
                        </div>
                        <div class="pull-right">
                            <input type="hidden" name="action" value="mettreAjourUtilisateur" />
                            <input type="hidden" name="controller" value="utilisateur" />
                            <input type="hidden" name="user" value="$user->username" />
EOT;
                            if(!is_null(myGet("profile"))){
                                echo '<input type="hidden" name="profile" value="1" /> ';
                            }
                        if(!Session::is_user($user->username)){//On ne peut pas se supprimer ou se bannir nous-même
                            echo'<a href="?action=supprimerUtilisateur&user='.$user->username.'&controller=utilisateur"class="btn btn-danger">Supprimer</a>';
                            echo'<a href="?action=reinitialiserMdp&user='.$user->username.'&controller=utilisateur"class="btn btn-info">Réinitialiser Mdp</a>';
                            
                           if($user->banUser==0){ echo'<a href="?action=bannirUtilisateur&user='.$user->username.'&controller=utilisateur"class="btn btn-warning">Bannir</a>';
                           }else{
                               echo'<a href="?action=debannirUtilisateur&user='.$user->username.'&controller=utilisateur"class="btn btn-warning">Débannir</a>';
                           }
                        }
echo<<<EOT
                            <button class="btn btn-success btn btn-success" type="submit" value="Valider">Valider</button>                        
                        </div>
            	    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
EOT;

?>
