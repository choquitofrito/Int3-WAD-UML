# UC02 - Chercher un itineraire

- **Nom**: UC02 - Chercher un itineraire 
- **Description**: L'utilisateur cherche un itineraire et le système le montre sur l'écran
- **Acteur principal**: Utilisateur
- **Date de création**: 29/06/2023
- **Date de mise à jour**: 29/06/2023
- **Numero de version**: 1
- **Précondition**: Aucune
- **Postcondition**: Le système montre un itineraire sur l'écran

<br>

## Enchainement Nominal

<br>

1. Appel au cas **UC04-Choisir un lieu de départ**
2. Appel au cas **UC05-Choisir un lieu d'arrivée**
3. L'utilisateur lance la recherche
4. L'itineraire est calculé et affiché sur l'écran
5. **Point d'extension: UC06-Rajouter une étape**
6. **Point d'extension: UC07-Choisir mode de transport**

<br>

## Enchainement d'Exception 

<br>

**E01: Le système ne peut pas trouver l'itineraire**

L'enchainement démarre après le point **3**

- E01.1. Le système affiche un message "Itineraire introuvable"

**Fin du cas d'utilisation** 


<br>

---

<br>

# UC04 - Choisir un lieu de départ

- **Nom**: UC04 - Choisir un lieu de départ 
- **Description**: L'utilisateur choisit un lieu de départ
- **Acteur principal**: Utilisateur
- **Date de création**: 29/06/2023
- **Date de mise à jour**: 29/06/2023
- **Numero de version**: 1
- **Précondition**: Aucune
- **Postcondition**: Un lieu de départ valable a été saisi

## Enchainement Nominal

1. L'utilisateur saisit un lieu de départ valable


<br>

---

<br>

# UC06 - Rajouter une étape

- **Nom**: UC06 - Rajouter une étape 
- **Description**: L'utilisateur rajoute une étape à l'itineraire. Il doit choisir un nouveau lieu
- **Acteur principal**: Utilisateur
- **Date de création**: 29/06/2023
- **Date de mise à jour**: 29/06/2023
- **Numero de version**: 1
- **Précondition**: Avoir choisi un itineraire
- **Postcondition**: L'étape est rajoutée à l'itineraire

<br>

## Enchainement nominal

<br>

1. L'utilisateur saisit un nouveau lieu
2. L'utilisateur relance la recherche

<br>

## Enchainement alternatif

<br>

**A01. L'utilisateur annule le rajout de l'étape** 

1. L'utilisateur annule le rajout d'une étape

On reprend la sequence nominale de **UC02 - Recherche un itineraie**

<br>


## Enchainement d'exception 

<br>

**E01: Le système ne peut pas trouver le lieu (nouvelle étape)**

L'enchainement démarre après le point **2**

- E01.1. Le système affiche un message "Itineraire introuvable"

**Fin du cas d'utilisation** 
