![fake page](https://media.discordapp.net/attachments/633782210238873612/872501183011512381/unknown.png?width=1246&height=629)
# Scam page PayPal v2
----
## 1. Tutoriel explicatif
|Youtube     | https://www.youtube.com/watch?v=5_gggGhVZlY                               |
|------------|---------------------------------------------------------------------------|
|MEGA        | https://mega.nz/file/8Idw0BgR#4g3Q06INHZapjvKrKBZ1Odz0vUhZidXzgGYhcc49MO4 |

## 2. Informations
Page de phishing simulant la page de connexion PayPal. 
Faite en php, elle fournit:

| Information Générales     | Information de géolocalisation    | Autre informations   |
| ------------------------- | ----------------------------------|----------------------|
| email                     | Pays                              | Fuseau horaire       |
| mot de  passe             | Région                            | Langues              |
| IP                        | Ville                             | ASN / ISP            |
| date                      | Code postal                       | User agent           |
| heure                     | Coordonées (latitude, longitude)  | Navigateur           |
### Exemple:
![example.txt](https://media.discordapp.net/attachments/633782210238873612/882046827761901618/unknown.png?width=1360&height=630)


----
## 3. Fonctionnement générale


Les informations sont stocké dans le fichier "data.txt" après que la personne ai envoyer le formulaire en cliquant sur "Se connecter".
----
## 4. Fonctionnalité

La page est équipé:
  - d'un auto ip blacklist
  - d'un system de redirection au choix pour les ip blacklist
  - de logs
  - d'un system de webhook discord (pour reçevoir vos infos via un salon)
----
## 5. Fonctionnement

  ### A. L'auto ip blacklist/ip locker
  Fonctionnalitée très utile pour éviter les spam/ddos/vengeance ou autre, le principe est relativement simple, une fois que la personne à visité votre fausse page de connexion (plus précisément: une fois que la personne à envoyer son formulaire de connexion "PayPal"), son ip va s'inscrire dans un fichier nommé "blacklist.txt". Vous l'aurez compris, une fois votre ip sur ce fichier il n'est plus possible d'accéder au site. A la place, la personne seras redirigé sur une page (plus d'info au paragraphe B ). Vous verrrez dans le fichier "blacklist.txt" qu'il y as déjà 11 810 IP inscrit. Ces ip sont connu pour le ddos etc... J'ai donc pris les soins de les mettre par défaut pour diminuer les chance aux personnes qui tentent d'attaquer votre page de connexion.

### B. Redirection au choix
Comme vous l'avez vu dans le paragraphe précédent, les ip inscrit dans le fichier "blacklist.txt" ne peuvent accéder au site. Tout les utilisateurs venant sur le site avec une ip figurant sur le fichier "blacklist.txt" seront donc redirigé vers une page au choix (défini par vous aupréalable). Pour définir la page de redirection, il vous suffit d'ouvrir le fichier redirection.txt et de mettre l'url de votre choix à la place de "YOUR WEBSITE URL REDIRECTION !". Une fois enregistré, les modifications seront appliqué.

  ### C. Les logs
   Simple d'accès, il vous suffit d'ouvrir le fichier "logs.txt". Toutes les visites sur votre page seront stocké dans ce fichier avec pour infos sur chaque visites:
 - IP
 - date/heure à laquel ils ont visité votre page

   Les logs vous préciserons si la personne est déjà venu sur votre site auparavant, et si oui, les logs préciserons la redirection de l'utilisateur (le lien spécifié      dans le fichier "redirection.txt").
   
### D. Webhook Discord
Possibilité de lié un webhook discord à votre scam page ! Aussi simple d'utilisation que toute les autres fonctionnalitées. Il vous suffit d'ouvrir le fichier "discord_webhook.txt" et de remplacé votre webhook à la place de "YOUR WEBHOOK URL HERE". Une fois cela fait et enregistré, les modifications seront appliqué et les formulaires de connexion de votre page seront renseigné non seulement sur le fichier "data.txt", mais aussi sur le salon qu'occupe votre webhook sous cette forme:

![webhook.txt](https://media.discordapp.net/attachments/633782210238873612/882065636883312670/unknown.png?width=597&height=630)

Si vous avez des soucis à propos de cette scam page, vous pouvez me contacter sur discord:
  - Pseudo: Esio#0007
  - Serveur: https://discord.gg/WXZAHr3HP6


----
