Beenden des Debug Modus:
Öffnen der .env im www Verzeichnis
Ändern von
APP_DEBUG=true
in 
APP_DEBUG=false



Grober Aufbau der Applikation

Controller - Funktionen und Datenbankabfrage
/app/http/Controller/*

Views - Wird nur zur Anzeige genutzt. Soll wenn möglich keinerlei Logik enthalten!!
/resources/views/*