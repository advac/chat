
d�marrer le serveur (dans le navigateur, nouvel onglet localhost/chat/serveur.html), puis le client (dans le navigateur, nouvel onglet localhost/chat/client.html), et transmettre les messages de l'un vers l'autre. Le temps de raffraichissement est volontairement long (30s) pour passer d'une page � l'autre.

Si durant la session, plusieurs messages sont envoy�s successivement sans r�ponse de l'autre interlocuteur, alors les messages sont tous affich�s dans l'ordre.

Le client et le serveur utilisent la m�me entr�e de l'API via la requ�te AJAX nouveaumessage.php. 

Un s�quenceur chez le client et le serveur vient demander au serveur via la requ�te AJAX qui pointe l'entr�e autremessage.php toutes les x secondes s'il ne serait pas destinataire de nouveaux messages.

