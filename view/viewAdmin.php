<?php
            if(!Session::is_admin()){
                echo <<< EOT
                        Vous n'avez pas accès à cette page du site
EOT;
            }else{
echo <<< EOT

                <div class="boutonrotate">
                <ul>
  <li><a href="?action=createUser" class="round red">Inscrire Utilisateur<span class="round">Ici, vous pouvez ajouter un nouvel utilisateur.</span></a></li>
  <li><a href="?action=modifyUser" class="round red">Modifier Utilisateur<span class="round">Ici, vous pouvez modifier un utilisateur. </span></a></li>
	<li><a href="?action=addGame" class="round red">Ajouter jeux<span class="round">Ici, vous pouvez ajouter un nouveau jeux.</span></a></li>
</ul>
                </div>
</div>
                
EOT;
            }
/*
 * Il reste à finir le visuel avec un contenant pour l'ensemble des liens
 */
?>