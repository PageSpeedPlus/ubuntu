# ISPConfig 3 Installation auf Ubuntu 18.04

![ISPConfig Horizontal](https://i.imgur.com/I7ooe6U.png)

Wie Sie vielleicht wissen, ist ISPConfig eines der besten kostenlosen Open-Source-Hosting-Control-Panels zur Verwaltung von Linux-Hosting-Servern in Single- und Multi-Server-Umgebungen.

Heute werden Sie sehen, wie Sie diese erstaunliche Systemsteuerung mit ispconfig_setup-Skript bereitstellen und installieren. Dieses Skript ist kostenlos auf GitHub unter https://github.com/PageSpeed-Ninjas/ispconfig_setup verfügbar und wird von Servisys mit Hilfe der Community kostenlos entwickelt und gewartet.


### _Inhaltsverzeichnis:_

* [1. Minimal Setup](#minimal-setup)
* [2. Komplette Installation aktualisiern](#komplette-installation-aktualisiern)
* [3. Non-Root-User mit sudo Privilegien erstellen](#non-root-user-mit-sudo-privilegien-erstellen)
* [4. Hostnamen setzten](#hostnamen-setzten)
  * [4.1. Interner Hostname](#interner-hostname)
  * [4.2. Externer Hostname](#externer-hostname)
  * [4.3. Kontrolle](#kontrolle)
* [5. Standart Tools installieren](#standart-tools-installieren)
* [6. Install Skript starten](#install-skript-starten)
  * [6.1. Standart Modus](#standart-modus)
  * [6.2. Experten Modus](#experten-modus)Bass Sultan Hengzt - Topic; 
  * [6.3. Kontrolle des Installskripts](#kontrolle-des-installskripts)

  
## Minimal Setup

Die Installation funktioniert nur auf einem neuen Installationsserver. Wenn Sie also bereits etwas installiert haben (Apache, MySql oder etwas anderes, das von ISPConfig benötigt wird), funktioniert das Installationsskript möglicherweise nicht oder verursacht seltsame Dinge.

Stellen Sie sicher das Ihre Installation den gleichen Stand aufweist wie die originale Minimal ISO Installation. Gerade wenn Sie ein Virtuellen Server betreiben und Ihr Debian 9 aus einem Template erstellt wurde, müssen Sie prüfen ob Sie folgende Eigenschaften erfüllen:

* Standart Tools installiern
* Standart Shell ist Bash
* Non-Root-User mit `sudo` Privilegien
* Hostname


### Komplette Installation aktualisiern

```bash
apt-get update && apt-get -y upgrade && apt-get -y dist-upgrade && apt-get -y autoremove && apt-get -y autoclean
```


### Standart Tools installieren

```bash
apt-get -y install 
```


### Non-Root-User mit `sudo` Privilegien erstellen

Hier wird der Benutzer "isp" mit `sudo` Privilegien erstellt

```bash
adduser isp
usermod -a -G sudo isp
```


### Weiterte `nice to know` Befehle & Konfigurationen rund um Benutzer

Dieser Bereich ist optional und kann übersprungen werden. Es folgen Beispiele für "User Passwort ändern", "SSH Logins von root blockieren" & "Passwort Authentifikation für Non-Root-User erlauben"

```bash
# User Passwort ändern
passwd isp

# Verhindert direkte SSH Logins von root
sed -i 's/PermitRootLogin yes/PermitRootLogin without-password/' /etc/ssh/sshd_config

# Erlaubt SSH Logins via Passwort
sed -i 's/PasswordAuthentication no/PasswordAuthentication yes/' /etc/ssh/sshd_config
```

**Wichtig:** Um die Anpassungen zu aktivieren, muss der Service `ssh` neugestartet werden.

```bash
/etc/init.d/ssh restart
```


### Hostnamen setzten


#### Interner Hostname

```bash
# nano /etc/hostname
echo "dev" >> /etc/hostname
```


#### Externer Hostname 

```bash
nano /etc/hosts
```


##### Inhalt von `/etc/hosts`

```bash
127.0.0.1 localhost.localdomain localhost
127.0.1.1 localhost.localdomain localhost
10.0.0.1 dev
165.227.174.198 dev.ispconf.cf dev
```

Nun muss ist ein `reboot` erforderlich. Dannach die Hostnamen mit: 


#### Kontrolle

```bash
hostname # = dev.ispconf.cf
hostname -f # = dev
```


## Install Skript starten

Jetzt ist es an der Zeit, unser ISPConfig Control Panel mit dem Autoinstall Skript zu installieren. Das Skript verfügt über zwei Installationsmodi: den Standardmodus und den Expertenmodus.

```bash
cd /home/isp
git clone https://github.com/PageSpeed-Ninjas/ispconfig_setup.git
cd ispconfig_setup
chmod +x install.sh
bash install.sh
```

Die beiden Modi sind ähnlich, der Hauptunterschied besteht darin, dass die ISPConfig-Installation im Standardmodus vollständig unbeaufsichtigt ist. Im Expertenmodus können Sie Ihren ISPConfig für spezielle Umgebungen wie Multiserver-Setup, Mirror oder nur einige zu konfigurierende Dienste konfigurieren.

In der Standardkonfiguration werden folgende Komponenten installiert:

* Webserver (Apache oder Nginx)
* FTP-Server (mit pureftpd)
* DNS-Server (bind9)
* MySQL-Server als Datenbankserver
* Awstats für statistische Zwecke
* IMAP und POP3 (mit Kurier oder Taubenschlag)
* Webmail (mit RoundCube oder Squirellmail)
* ISPConfig 3

An diesem Punkt überprüft der Installationsprozess Ihre Distribution, um festzustellen, ob das installierte Betriebssystem mit dem Skript kompatibel ist. In meinem Fall wird Debian 8 Jessie erkannt.

Wenn es für Sie richtig ist, drücken Sie "y", und nun werden Sie gefragt, bevor der automatische Installationsprozess gestartet wird. Wenn Sie die Antwort auf eine Frage nicht kennen, wählen Sie den Standard aus, indem Sie einfach die Eingabetaste drücken.

* Sie werden nach dem MySql Passwort gefragt
* Als nächstes mussten Sie zwischen Apache und Nginx wählen
* Als nächstes wirst du nach Xcache gefragt (Kompressionssystem für PHP)
* Als nächstes werden Sie nach PHPMyAdmin Installation gefragt
* Als nächstes mussten Sie zwischen Mailserver Typ Dovecot oder Kurier wählen
* Als nächstes mussten Sie wählen, um die Virendefinition zu aktualisieren (empfehlen, ja zu sagen)
* Als nächstes mussten Sie wählen, ob Sie eine Quota aktivieren oder nicht (empfehlen Sie, ja zu sagen)
* Der letzte Punkt in diesem Kapitel ist die Installation im Standard-Expertenmodus


### Standart Modus

Daher wählen wir die Installation im Standardmodus, die schnellste und einfachste Art, ISPConfig in einem einzigen Server-Setup mit allen aktivierten Funktionen zu installieren.

Für den Fall, dass Sie nicht wissen, was Sie auf eine Frage antworten sollen, drücken Sie einfach Enter, die Standardwerte sind in den meisten Fällen gut.

* Als nächstes müssen Sie wählen, Jailkit zu installieren (Achtung Jailkit als normale Installation, konnte nur jetzt installiert werden)
* Als nächstes müssen Sie wählen, ob DKIM aktiviert werden soll oder nicht (empfohlen, Nein zu sagen, da ISMonfig noch nicht nativ unterstützt wird, Dkim wird Teil der nächsten ISPConfig-Version sein)
* Als nächstes müssen Sie zwischen Roundcube und Squirellmail wählen (Anmerkung: In Debian 8 ist diese Option nicht verfügbar, da es für Debian 8 noch kein RoundCube-Paket gibt und Squirellmail der Standard ist)
* Als nächstes werden Sie nach der SSL-Konfiguration gefragt: Land, Staat, Ort, Organisation, Organisationseinheit
* Jetzt können Sie einen Kaffee trinken und entspannen, warten auf den Installationsvorgang zu beenden.


### Expertenmodus

Der einzige Unterschied zum Standardmodus ist das ISPconfig-Installationsskript, das noch nicht automatisiert ist und manuell ausgeführt werden muss. Wie bereits erwähnt, ist dies für Multiserver-Setups, Einzelserver-Setups, die nur einige Dienste und Cluster-Setups ausführen, erforderlich.

Für einen detaillierten Installationsvorgang von ISPConfig können Sie auf den folgenden Artikel https://www.howtoforge.com/tutorial/perfect-server-debian-8-jessie-apache-bind-dovecot-ispconfig-3/3/ verweisen.


## Kontrolle des Installskripts

Nachdem alles installiert ist, können Sie mit dem Befehl nach Fehlern oder seltsamen Dingen suchen

`cat /var/log/ispconfig_setup.log`
