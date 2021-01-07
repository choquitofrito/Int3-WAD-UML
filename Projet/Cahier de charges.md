Cahier de charges - Projet UML
===============================

Vous venez d'être engagé pour concevoir la base de données d'un cabinet
médical n'ayant pas encore d'infrastructure informatique. Cette base de
données sera utilisée par le personnel médical, le personnel de gestion
(de secrétaires et des admins) ainsi que, éventuellement, par des
applications tierces.

Suite aux réunions avec les différentes personnes concernées, voici les
informations qui en ressortent et dont il faut absolument tenir compte.

Toutes les personnes dans le système possèdent les caractéristiques
suivantes : un nom, un prénom, une adresse et un numéro de téléphone. En
effet, ces coordonnées standard sont utiles et nécessaires au bon
fonctionnement du système.

Plusieurs médecins peuvent travailler dans le cabinet médical. Chaque
médecin possède une spécialité (pneumologie, médecine générale,
pédiatrie, etc...).

Les patients sont aussi caractérisés par leur date de naissance, leur
sexe et leur numéro d'identification de la sécurité sociale (par exemple
: numéro de registre national). Chaque patient possède un médecin
référent (qui doit obligatoirement être un médecin généraliste)
travaillant dans le cabinet médical.

Des consultations se font à une date, une heure de début et ont une
durée en minutes. Les consultations ont un objet qui est la raison de la
venue du patient. Ce sont les secrétaires qui prennent les rendez-vous
pour les consultations. Les heures de rendez-vous vont de 8h à 18h, du
lundi au vendredi (valable pour tous les médecins).

Une secrétaire peut travailler pour plusieurs médecins, mais un médecin
n'a qu'une seule secrétaire.

Il existe un dossier médical pour chaque patient qui sera accessible par
tous les médecins (par par le reste du personnel), contenant les
pathologies enregistrées pour chaque patient. Les pathologies ont un
nom, une date de début et éventuellement une date de fin.

Les médecins peuvent prescrire des médicaments ou des examens
complémentaires pour traiter ces pathologies. Les prescriptions des
examens contiennent uniquement le nom de l'examen (par exemple : prise
de sang) et la date. Les prescriptions des médicaments, en plus
d'indiquer le médicament, informent sur la durée (en jours) et la
posologie (par exemple : « 1 gélule / jour »).

Les médicaments sont caractérisés par un nom, une seule substance active
et un prix (par exemple : *Dafalgan, paracétamol, 5€).* Il faut aussi
savoir si le médicament est un générique ou non (par exemple *Dafalgan*
n'est pas un produit générique). Enfin, une liste d'incompatibilités
avec d'autres substances actives doit être disponible afin de permettre
d'alarmer le médecin si le patient prend déjà un médicament qui entre en
conflit avec celui de la prescription.

Optionnel : une pathologie peut présenter des contre-indications pour
l'un ou l'autre médicament (cette information sera utile pour alerter le
médecin en cas de prescription inadéquate). À ne pas confondre les
contre-indications d\'un médicament pour une pathologie avec les
incompatibilités entre les médicaments de la section précédente.
