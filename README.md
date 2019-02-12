# Mesure du niveau d'eau dans une cuve

Attention projet en cours de développement==> non fonctionnel a ce jour

**Besoin**:
- Utilisation d'un module arduino MKR FOX 1200 
- Sonde étanche à ultrason

**Bibliothèques nécessaire**


```
#include <SigFox.h>
#include <ArduinoLowPower.h>
```

Projet: 
Mesure du niveau d'eau dans la cuve via la sond à ultrason.
Envoie des données de mesures vers le backend de sigfox.
Sigfox renvoie ces données via une callback vers le siteweb perso.
Recuperation des données $_GET dans le fichier sigFox.php.