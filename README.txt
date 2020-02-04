
démarrer le serveur (dans le navigateur, nouvel onglet localhost/chat/serveur.html), puis le client (dans le navigateur, nouvel onglet localhost/chat/client.html), et transmettre les messages de l'un vers l'autre. Le temps de raffraichissement est volontairement long (30s) pour passer d'une page à l'autre.

Si durant la session, plusieurs messages sont envoyés successivement sans réponse de l'autre interlocuteur, alors les messages sont tous affichés dans l'ordre.

Le client et le serveur utilisent la même entrée de l'API via la requête AJAX nouveaumessage.php. 

Un séquenceur chez le client et le serveur vient demander au serveur via la requête AJAX qui pointe l'entrée autremessage.php toutes les x secondes s'il ne serait pas destinataire de nouveaux messages.

