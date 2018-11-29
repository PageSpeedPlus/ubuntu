<?php

//   -------------------------------------------------------------------------------
//  |                  net2ftp: a web based FTP client                              |
//  |              Copyright (c) 2003-2017 by David Gartner                         |
//  |                                                                               |
//  | This program is free software; you can redistribute it and/or                 |
//  | modify it under the terms of the GNU General Public License                   |
//  | as published by the Free Software Foundation; either version 2                |
//  | of the License, or (at your option) any later version.                        |
//  |                                                                               |
//   -------------------------------------------------------------------------------

//   -------------------------------------------------------------------------------
//  | For credits, see the credits.txt file                                         |
//   -------------------------------------------------------------------------------
//  |                                                                               |
//  |                              INSTRUCTIONS                                     |
//  |                                                                               |
//  |  The messages to translate are listed below.                                  |
//  |  The structure of each line is like this:                                     |
//  |     $message["Hello world!"] = "Hello world!";                                |
//  |                                                                               |
//  |  Keep the text between square brackets [] as it is.                           |
//  |  Translate the 2nd part, keeping the same punctuation and HTML tags.          |
//  |                                                                               |
//  |  The English message, for example                                             |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp is written in PHP!";    |
//  |  should become after translation:                                             |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp est ecrit en PHP!";     |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp is geschreven in PHP!"; |
//  |                                                                               |
//  |  Note that the variable starts with a dollar sign $, that the value is        |
//  |  enclosed in double quotes " and that the line ends with a semi-colon ;       |
//  |  Be careful when editing this file, do not erase those special characters.    |
//  |                                                                               |
//  |  Some messages also contain one or more variables which start with a percent  |
//  |  sign, for example %1\$s or %2\$s. The English message, for example           |
//  |     $messages[...] = ["The file %1\$s was copied to %2\$s "]                  |
//  |  should becomes after translation:                                            |
//  |     $messages[...] = ["Le fichier %1\$s a été copié vers %2\$s "]             |
//  |                                                                               |
//  |  When a real percent sign % is needed in the text it is entered as %%         |
//  |  otherwise it is interpreted as a variable. So no, it's not a mistake.        |
//  |                                                                               |
//  |  Between the messages to translate there is additional PHP code, for example: |
//  |      if ($net2ftp_globals["state2"] == "rename") {           // <-- PHP code  |
//  |          $net2ftp_messages["Rename file"] = "Rename file";   // <-- message   |
//  |      }                                                       // <-- PHP code  |
//  |  This code is needed to load the messages only when they are actually needed. |
//  |  There is no need to change or delete any of that PHP code; translate only    |
//  |  the message.                                                                 |
//  |                                                                               |
//  |  Thanks in advance to all the translators!                                    |
//  |  David.                                                                       |
//  |                                                                               |
//   -------------------------------------------------------------------------------


// -------------------------------------------------------------------------
// Language settings
// -------------------------------------------------------------------------

// HTML lang attribute
$net2ftp_messages["en"] = "fr";

// HTML dir attribute: left-to-right (LTR) or right-to-left (RTL)
$net2ftp_messages["ltr"] = "ltr";

// CSS style: align left or right (use in combination with LTR or RTL)
$net2ftp_messages["left"] = "left";
$net2ftp_messages["right"] = "right";

// Encoding
$net2ftp_messages["iso-8859-1"] = "utf-8";

// -------------------------------------------------------------------------
// Messages
// -------------------------------------------------------------------------

$net2ftp_messages["%1\$s File"] = "Fichier %1\$s";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(Note: Ce lien peut ne pas fonctionner si vous n'avez pas votre propre nom de domaine.)";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> n'a pu être renommé en <b>%2\$s</b>";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> a été renommé avec succès en <b>%2\$s</b>";
$net2ftp_messages["ARC archive"] = "Archive ARC";
$net2ftp_messages["ARJ archive"] = "Archive ARJ";
$net2ftp_messages["ASP script"] = "Script ASP";
$net2ftp_messages["Action"] = "Action";
$net2ftp_messages["Actions"] = "Actions";
$net2ftp_messages["Add another"] = "Ajouter un autre";
$net2ftp_messages["Admin functions"] = "Fonctions administratives";
$net2ftp_messages["Adobe Acrobat document"] = "Document Adobe Acrobat";
$net2ftp_messages["Advanced"] = "Avancé";
$net2ftp_messages["Advanced FTP functions"] = "Fonctions FTP avancées";
$net2ftp_messages["Advanced functions"] = "Options avancées";
$net2ftp_messages["Advanced login"] = "Advanced login";
$net2ftp_messages["All"] = "Tous";
$net2ftp_messages["All the selected directories and files have been processed."] = "Tous les répertoires et fichiers sélectionnés ont été traités avec succès.";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "Tous les sous-répertoires et fichiers des répertoires sélectionnés vont aussi être supprimés";
$net2ftp_messages["Alternatively, use net2ftp's normal upload or upload-and-unzip functionality."] = "Alternatively, use net2ftp's normal upload or upload-and-unzip functionality.";
$net2ftp_messages["An error has occured"] = "Une erreur s'est produite";
$net2ftp_messages["Anonymous"] = "Anonyme";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "L'archive <b>%1\$s</b> n'a pas été traitée parce que son extension n'a pas été reconnue. Seulement les archives zip, tar, tgz et gz sont supportées pour le moment.";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "L'archive contient des noms de fichier avec ../ or ..\\ - extraction avorté";
$net2ftp_messages["Archives"] = "Archives";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "Les archives entrées ici vont être décompressées et les fichiers à l'intérieur de celles-ci vont être transférés vers le serveur FTP.";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "Êtes-vous sur de vouloir supprimer ces répertoires et fichiers?";
$net2ftp_messages["Ascending order"] = "Ordre croissant";
$net2ftp_messages["Automatic"] = "Automatique";
$net2ftp_messages["Back"] = "Retour";
$net2ftp_messages["Basic FTP login"] = "Basic FTP login";
$net2ftp_messages["Basic SSH login"] = "Basic SSH login";
$net2ftp_messages["Bitmap file"] = "Image bitmap";
$net2ftp_messages["Bookmark"] = "Favoris";
$net2ftp_messages["Calculate the size of the selected entries"] = "Calculer la taille des éléments selectionnés";
$net2ftp_messages["Cascading Style Sheet"] = "Feuille de style CSS";
$net2ftp_messages["Case sensitive search"] = "Recherche sensible à la casse";
$net2ftp_messages["Changing the directory"] = "Changement de répertoire";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Changement pour le répertoire %1\$s: ";
$net2ftp_messages["Character encoding: "] = "Character encoding: ";
$net2ftp_messages["Check the SSH server's public key fingerprint"] = "Check the SSH server's public key fingerprint";
$net2ftp_messages["Checking files"] = "Contrôle des fichiers";
$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "Vérifier si le module PHP est présent sur ce FTP: ";
$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "Contrôle des permissions du répertoire sur le serveur : un petit fichiers va être créé dans le répertoire /temp puis effacé.";
$net2ftp_messages["Chmod"] = "Chmod";
$net2ftp_messages["Chmod also the files within this directory"] = "Établir le chmod sur les fichiers dans ce répertoire également";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "Établir le chmod sur les sous-répertoires dans ce répertoire également";
$net2ftp_messages["Chmod directories and files"] = "Changer le chmod des répertoires et des fichiers";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "Régler le CHMOD des éléments selectionnés (fonctionne uniquement sur les serveurs Unix/Linux/BSD)";
$net2ftp_messages["Choose"] = "Choisir";
$net2ftp_messages["Choose a directory"] = "Choisir un répertoire";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "Cliquer pour classer par %1\$s en ordre croissant";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "Cliquer pour classer par %1\$s en ordre décroissant";
$net2ftp_messages["Closing the file: "] = "Fermeture du fichier : ";
$net2ftp_messages["Connecting to a test FTP server: "] = "Connexion à un serveur FTP de test : ";
$net2ftp_messages["Connecting to the FTP server"] = "Connexion au serveur FTP";
$net2ftp_messages["Connecting to the FTP server: "] = "Connexion au serveur FTP : ";
$net2ftp_messages["Connection settings:"] = "Paramètres de connexion :";
$net2ftp_messages["Continue"] = "Continuer";
$net2ftp_messages["Copied file %1\$s"] = "Fichier %1\$s copié";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Fichier <b>%1\$s</b> copié";
$net2ftp_messages["Copy"] = "Copier";
$net2ftp_messages["Copy directories and files"] = "Copier les répertoires et les fichiers";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "Copier le répertoire <b>%1\$s</b> vers : ";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "Copier le fichier <b>%1\$s</b> vers : ";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "Copier le lien symbolique <b>%1\$s</b> vers : ";
$net2ftp_messages["Copy the selected entries"] = "Copier les éléments selectionnés";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "Copie du script d'installation sur le serveur FTP";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Could not connect to SSH server"] = "Could not connect to SSH server";
$net2ftp_messages["Could not copy file %1\$s"] = "Ne peut copier le fichier %1\$s";
$net2ftp_messages["Could not create directory %1\$s"] = "Ne peut créer le répertoire %1\$s";
$net2ftp_messages["Could not generate a temporary file."] = "Impossible de générer le fichier temporaire.";
$net2ftp_messages["Could not get fingerprint"] = "Could not get fingerprint";
$net2ftp_messages["Could not get public host key"] = "Could not get public host key";
$net2ftp_messages["Could not unzip entry %1\$s (error code %2\$s)"] = "Could not unzip entry %1\$s (error code %2\$s)";
$net2ftp_messages["Create a new file in directory %1\$s"] = "Créer un nouveau fichier dans le répertoire %1\$s";
$net2ftp_messages["Create a website easily using ready-made templates"] = "Créer facilement un site web en utilisant un modèle prêt-à-l'emploi";
$net2ftp_messages["Create new directories"] = "Créer des nouveaux répertoires";
$net2ftp_messages["Create the MySQL database tables"] = "Créer les tables de la base de données MySQL";
$net2ftp_messages["Created directory %1\$s"] = "Répertoire %1\$s créé";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Sous-répertoire cible créé <b>%1\$s</b>";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "Création d'un répertoire temporaire sur le serveur FTP";
$net2ftp_messages["Creating filename: "] = "Nom du fichier: ";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "Limite journalière atteinte: le fichier <b>%1\$s</b> ne sera pas transféré";
$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "Limite journalière atteinte : vous ne pourrez plus transférer des données";
$net2ftp_messages["Data transferred from this IP address today"] = "Données transferré depuis cette IP aujourd'hui";
$net2ftp_messages["Data transferred to this FTP server today"] = "Données transferré sur ce serveur FTP aujourd'hui";
$net2ftp_messages["Date from:"] = "A partir de la date : ";
$net2ftp_messages["Dear,"] = "Cher,";
$net2ftp_messages["Decompressing archives and transferring files"] = "Décompression des archives et transfert des fichiers";
$net2ftp_messages["Default"] = "Défaut";
$net2ftp_messages["Delete"] = "Effacer";
$net2ftp_messages["Delete directories and files"] = "Supprimer les répertoires et les fichiers";
$net2ftp_messages["Delete the selected entries"] = "Effacer les éléments selectionnés";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "Fichier <b>%1\$s</b> supprimé";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Sous-répertoire <b>%1\$s</b> effacé";
$net2ftp_messages["Deleting the file: "] = "Suppression du fichier : ";
$net2ftp_messages["Descending order"] = "Ordre décroissant";
$net2ftp_messages["Details"] = "Détails";
$net2ftp_messages["Different target FTP server:"] = "Différent serveur FTP comme cible:";
$net2ftp_messages["Directories"] = "Répertoires";
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = "Les répertoires dont le nom contient \' ne peuvent pas être affichés correctement. Ils ne peuvent qu'être effacés , revenez en arriere et choisissez un autre sous-répertoire.";
$net2ftp_messages["Directory"] = "Répertoire";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "Répertoire <b>%1\$s</b>";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "Le répertoire <b>%1\$s</b> n'a pas pu être créé.";
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "Le CHMOD du répertoire <b>%1\$s</b> a été changé avec succès pour <b>%2\$s</b>";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "Le répertoire <b>%1\$s</b> a été créé avec succès.";
$net2ftp_messages["Directory Tree"] = "Chemin actuel";
$net2ftp_messages["Disabled"] = "Désactivé";
$net2ftp_messages["Double-click to go to a subdirectory:"] = "Double-cliquer pour accéder à un sous-répertoire:";
$net2ftp_messages["Download"] = "Télécharger";
$net2ftp_messages["Download a zip file containing all selected entries"] = "Télécharger un fichier .ZIP contenant tous les éléments sélectionnés";
$net2ftp_messages["Download the file %1\$s"] = "Télécharger le fichier %1\$s";
$net2ftp_messages["Drag and drop one of the links below to the bookmarks bar"] = "Drag and drop one of the links below to the bookmarks bar";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "Dû à des problèmes techniques, le courriel destiné à <b>%1\$s</b> n'a pu être envoyé.";
$net2ftp_messages["Edit"] = "Éditer";
$net2ftp_messages["Edit the source code of file %1\$s"] = "Éditer le code source du fichier %1\$s";
$net2ftp_messages["Email the zip file in attachment to:"] = "Envoyer le fichier zip comme attachement par courriel à:";
$net2ftp_messages["Empty logs"] = "Archives vides";
$net2ftp_messages["Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21"] = "Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21";
$net2ftp_messages["Enter your password"] = "Enter your password";
$net2ftp_messages["Enter your username"] = "Enter your username";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "Une entrée contient des mots clef bannis, ceci pour eviter les risque phishing";
$net2ftp_messages["Example"] = "Exemple";
$net2ftp_messages["Executable"] = "Exécutable";
$net2ftp_messages["Execute %1\$s in a new window"] = "Exécuter %1\$s dans une nouvelle fenêtre";
$net2ftp_messages["FTP mode"] = "Mode FTP";
$net2ftp_messages["FTP server"] = "Serveur FTP";
$net2ftp_messages["FTP server port"] = "Port du serveur FTP";
$net2ftp_messages["FTP server response:"] = "Réponse du serveur FTP : ";
$net2ftp_messages["File"] = "Fichier";
$net2ftp_messages["File <b>%1\$s</b>"] = "Fichier <b>%1\$s</b>";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "Le fichier <b>%1\$s</b> ne peut être déplacé";
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "Le fichier <b>%1\$s</b> n'a pu être transféré vers le serveur FTP";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "Le fichier <b>%1\$s</b> a été transféré vers le serveur FTP en utilisant le mode FTP <b>%2\$s</b>";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "Le fichier <b>%1\$s</b> est correct";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "Le fichier <b>%1\$s</b> contient un mot clef interdit. Ce fichier ne sera pas uploadé.";
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "Le fichier <b>%1\$s</b> est trop gros : il n'a donc pas été uploadé";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "Le CHMOD du fichier <b>%1\$s</b> a été changé avec succès pour <b>%2\$s</b>";
$net2ftp_messages["File: "] = "Fichier : ";
$net2ftp_messages["Files"] = "Fichiers";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "Les fichiers entrés ici seront transférés vers le serveur FTP.";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "Les fichiers trop gros ne pourrons être téléchargés, uploadés, copiés, déplacés, vus ou édités; Ils ne pourrons qu'être renommés ou effacés.";
$net2ftp_messages["Find files which contain a particular word"] = "Trouver les fichiers qui contiennent un mot en particulier";
$net2ftp_messages["Fingerprint"] = "Fingerprint";
$net2ftp_messages["Follow symlink %1\$s"] = "Follow symlink %1\$s";
$net2ftp_messages["Font file"] = "Fichier de police";
$net2ftp_messages["Forums"] = "Forums";
$net2ftp_messages["GIF file"] = "Image GIF";
$net2ftp_messages["GIMP file"] = "Fichier GIMP";
$net2ftp_messages["GZ archive"] = "Archive GZ";
$net2ftp_messages["Get fingerprint"] = "Get fingerprint";
$net2ftp_messages["Get the SSH server's public key fingerprint before logging in to verify the server's identity"] = "Get the SSH server's public key fingerprint before logging in to verify the server's identity";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Récupération de l'archive %1\$s sur %2\$s depuis le serveur FTP";
$net2ftp_messages["Getting fingerprint, please wait..."] = "Getting fingerprint, please wait...";
$net2ftp_messages["Getting the FTP server system type: "] = "Obtention du type de système du serveur FTP: ";
$net2ftp_messages["Getting the FTP system type"] = "Récupération du type de système FTP";
$net2ftp_messages["Getting the current directory"] = "Récupération du répertoire courant";
$net2ftp_messages["Getting the list of directories and files"] = "Obtention de la liste des répertoires et fichiers";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Obtention de la liste des répertoires et fichiers: ";
$net2ftp_messages["Go"] = "Go";
$net2ftp_messages["Go back"] = "Revenir en arrière";
$net2ftp_messages["Go to the advanced functions"] = "Aller dans les fonctions avancées";
$net2ftp_messages["Go to the login page"] = "Aller à la page de connexion";
$net2ftp_messages["Go to the parent directory"] = "Aller dans le répertoire superieur";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "Aller dans le sous-répertoire %1\$s";
$net2ftp_messages["Group"] = "Groupe";
$net2ftp_messages["HTML file"] = "Fichier HTML";
$net2ftp_messages["HTML templates"] = "Modèles HTML";
$net2ftp_messages["Help"] = "Aide";
$net2ftp_messages["Help Guide"] = "Aide";
$net2ftp_messages["IP address: "] = "Adresse IP: ";
$net2ftp_messages["Icons"] = "Icônes";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "Si le fichier de destination existe déja il sera remplacé par celui-ci";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "Si vous n'avez aucune idée de ce que c'est ou vous ne faites pas confiance à cette personne, veuillez supprimer ce courriel sans ouvrir le fichier zip attaché.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "Si vous avez besoin d'un accès illimité, veuillez installer net2ftp sur votre propre serveur web.";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "Si vous avez vraiment besoin que netftp puisse gérer des tâches plus lourdes, veuillez considérez d'installer net2ftp sur votre propre serveur.";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "Si vous voulez copier les fichiers vers un autre serveur FTP, veuillez saisir vos informations de connexion.";
$net2ftp_messages["Image"] = "Image";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "Afin de garantir un usage équitable du serveur web pour tout le monde, le volume de transfert de données ainsi que le temps d'exécution du script sont limités par utilisateur, et par jour. Une fois cette limite atteinte, vous pouvez toujours naviguer le serveur FTP mais plus transférer de données.";
$net2ftp_messages["In order to run it, click on the link below."] = "Pour le lancer, cliquer sur le lien ci-dessous.";
$net2ftp_messages["Information about the sender: "] = "Informations à propos de l'expéditeur: ";
$net2ftp_messages["Initial directory"] = "Répertoire de départ";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Install software packages"] = "Install software packages";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Intalle des applications web (requiert PHP sur le serveur Web)";
$net2ftp_messages["JPEG file"] = "Image JPEG";
$net2ftp_messages["Java Upload"] = "Upload Java";
$net2ftp_messages["Java source file"] = "Fichier source Java";
$net2ftp_messages["JavaScript file"] = "Fichier JavaScript";
$net2ftp_messages["Language:"] = "Langue : ";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "Laisser vide si vous copiez les fichiers vers le même serveur FTP.";
$net2ftp_messages["License"] = "Licence";
$net2ftp_messages["Line"] = "Ligne";
$net2ftp_messages["List"] = "Liste";
$net2ftp_messages["List of commands:"] = "Liste des commandes : ";
$net2ftp_messages["Logging"] = "Archivage";
$net2ftp_messages["Logging into the FTP server"] = "Identification au serveur FTPr";
$net2ftp_messages["Logging into the FTP server: "] = "Identification sur le serveur FTP : ";
$net2ftp_messages["Logging out of the FTP server"] = "Déconnexion du serveur FTP";
$net2ftp_messages["Login"] = "Soumettre";
$net2ftp_messages["Login!"] = "Login!";
$net2ftp_messages["Logout"] = "Déconnexion";
$net2ftp_messages["MOV movie file"] = "Fichier film MOV";
$net2ftp_messages["MPEG movie file"] = "Fichier film MPEG";
$net2ftp_messages["MS Office - Access database"] = "MS Office - Base de données Access";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Office - Tableur Excel";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Office - Présentation PowerPoint ";
$net2ftp_messages["MS Office - Project file"] = "MS Office - Fichier de projet";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Office - Document Visio";
$net2ftp_messages["MS Office - Word document"] = "MS Office - Document Word";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "Créer un nouveau sous-répertoire dans le répertoire %1\$s";
$net2ftp_messages["Message of the sender: "] = "Message de l'expéditeur: ";
$net2ftp_messages["Mobile"] = "Mobile";
$net2ftp_messages["Mod Time"] = "Modifié le";
$net2ftp_messages["Move"] = "Déplacer";
$net2ftp_messages["Move directories and files"] = "Déplacer les répertoires et les fichiers";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "Déplacer le répertoire <b>%1\$s</b> vers : ";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "Déplacer le fichier <b>%1\$s</b> vers : ";
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "Déplacer le lien symbolique <b>%1\$s</b> vers : ";
$net2ftp_messages["Move the selected entries"] = "Déplacer les éléments selectionnés";
$net2ftp_messages["Moved directory <b>%1\$s</b>"] = "Moved directory <b>%1\$s</b>";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "Fichier <b>%1\$s</b> déplacé";
$net2ftp_messages["MySQL database"] = "Nom de la base de données MySQL";
$net2ftp_messages["MySQL password"] = "Mot de passe MySQL";
$net2ftp_messages["MySQL password length"] = "Longueur du mot de passe MySQL";
$net2ftp_messages["MySQL server"] = "Serveur MySQL";
$net2ftp_messages["MySQL username"] = "Utilisateur MySQL";
$net2ftp_messages["Name"] = "Nom";
$net2ftp_messages["New dir"] = "Nouveau répertoire";
$net2ftp_messages["New directory name:"] = "Nom du nouveau répertoire:";
$net2ftp_messages["New file"] = "Nouveau fichier";
$net2ftp_messages["New file name: "] = "Nom du nouveau fichier : ";
$net2ftp_messages["New name: "] = "Nouveau nom : ";
$net2ftp_messages["No data"] = "Aucune données";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "Notez que si nous n'ouvrez pas le fichier zip, les fichiers à l'intérieur de celui-ci ne peuvent pas endommager votre ordinateur.";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "Remarquez qu'envoyer des fichiers n'est pas anonyme : votre adresse IP ainsi que le temps et la date d'envoie seront ajoutés au courriel.";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "Remarque : les autres utilisateurs de cet ordinateur peuvent encore cliquez sur le bouton \"Précédent\" du navigateur et accéder au serveur FTP.";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Remarque : le répertoire cible doit déja exister avant que quelque chose y soit copié.";
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] = "Remarque : quand vous cliquerez ce lien, une fenêtre pop-up vous demandera votre nom d'utilisateur et votre mot de passe.";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["OK. Filename: %1\$s"] = "Ok. Nom du fichier: %1\$s";
$net2ftp_messages["Old name: "] = "Ancien nom : ";
$net2ftp_messages["One click access (net2ftp won't ask for a password - less safe)"] = "One click access (net2ftp won't ask for a password - less safe)";
$net2ftp_messages["Open"] = "Ouvrir";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - Tableur Calc 6.0";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - Fichier de description Calc 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - Document Draw 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - Fichier de description Draw 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - Présentation Impress 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - Fichier de description Impress 6.0";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - Document Math 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - Document Writer 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - Document global Writer 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - Fichier de description Writer 6.0";
$net2ftp_messages["Opening the file in write mode: "] = "Ouvrir le fichier en mode écriture : ";
$net2ftp_messages["Owner"] = "Propriétaire";
$net2ftp_messages["PHP Source"] = "Source PHP";
$net2ftp_messages["PHP script"] = "Script PHP";
$net2ftp_messages["PNG file"] = "Image PNG";
$net2ftp_messages["Parsing the file"] = "Analyse du fichier";
$net2ftp_messages["Parsing the list of directories and files"] = "Analyse de la liste des répertoires et fichiers";
$net2ftp_messages["Passive mode"] = "Mode passif";
$net2ftp_messages["Password"] = "Mot de passe";
$net2ftp_messages["Password length"] = "Longueur du mot de passe";
$net2ftp_messages["Perms"] = "Permissions";
$net2ftp_messages["Please enter a password."] = "Please enter a password.";
$net2ftp_messages["Please enter a username."] = "Please enter a username.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "Veuillez saisir la date en utilisant le format A-m-j dans le champ de saisie \"de\".";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "Veuillez saisir la date en utilisant le format A-m-j dans le champ de saisie \"à\".";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "Veuillez saisir une taille de fichier valide dans le champ de saisie \"de\", comme par exemple 0.";
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "Veuillez saisir une taille de fichier valide dans le champ de saisie \"à\", comme par exemple 500000.";
$net2ftp_messages["Please enter a valid filename."] = "Veuillez saisir un nom de fichier valide.";
$net2ftp_messages["Please enter a valid search word or phrase."] = "Veuillez saisir un mot ou une phrase de recherche valide.";
$net2ftp_messages["Please enter an FTP server."] = "Please enter an FTP server.";
$net2ftp_messages["Please enter your Administrator username and password."] = "Veuillez saisir votre identifiant et votre mot de passe Administrateur.";
$net2ftp_messages["Please enter your MySQL settings:"] = "Veuillez saisir vos paramètres MySQL : ";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "Veuillez entrer votre identifiant et mot de passe pour le serveur FTP <b>%1\$s</b>.";
$net2ftp_messages["Please specify a filename"] = "Veuillez spécifier un nom de fichier";
$net2ftp_messages["Please wait..."] = "Merci de patienter...";
$net2ftp_messages["Powered by"] = "Soutenu par";
$net2ftp_messages["Printing the list of directories and files"] = "Affichage de la liste des répertoires et fichiers";
$net2ftp_messages["Printing the result"] = "Impression du résultat";
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "Traitement de l'archive numéro %1\$s: <b>%2\$s</b>";
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "Traitement du répetoire <b>%1\$s</b>";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "Analyse des éléments du répertoire <b>%1\$s</b>:";
$net2ftp_messages["Processing entry %1\$s"] = "Traitement de l'élément %1\$s";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "Traitement du répertoire <b>%1\$s</b> achevé";
$net2ftp_messages["Processing the entries"] = "Traitements des éléments";
$net2ftp_messages["Protocol"] = "Protocol";
$net2ftp_messages["Quicktime movie file"] = "Fichier film Quicktime";
$net2ftp_messages["RPM"] = "RPM";
$net2ftp_messages["Reading the file"] = "Lecture du fichier";
$net2ftp_messages["Real movie file"] = "Fichier film Real";
$net2ftp_messages["Refresh"] = "Actualiser";
$net2ftp_messages["Rename"] = "Renommer";
$net2ftp_messages["Rename directories and files"] = "Renommer des répertoires et des fichiers";
$net2ftp_messages["Rename the selected entries"] = "Renommer les éléments selectionnés";
$net2ftp_messages["Requested files"] = "Fichiers demandés";
$net2ftp_messages["Restrict the search to:"] = "Restreindre la recherche à:";
$net2ftp_messages["Restrictions:"] = "Restrictions : ";
$net2ftp_messages["Results:"] = "Résultats : ";
$net2ftp_messages["Right-click on one of the links below and choose \"Add to Favorites...\""] = "Right-click on one of the links below and choose \"Add to Favorites...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark This Link...\""] = "Right-click on one of the links below and choose \"Bookmark This Link...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark link...\""] = "Right-click on one of the links below and choose \"Bookmark link...\"";
$net2ftp_messages["Right-click on one the links below and choose \"Add Link to Bookmarks...\""] = "Right-click on one the links below and choose \"Add Link to Bookmarks...\"";
$net2ftp_messages["SSH fingerprint"] = "SSH fingerprint";
$net2ftp_messages["SSH server"] = "SSH server";
$net2ftp_messages["Save"] = "Sauvegarder";
$net2ftp_messages["Save the zip file on the FTP server as:"] = "Sauvegarder le fichier zip sur le serveur comme : ";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";
$net2ftp_messages["Script finished in %1\$s seconds"] = "Script exécuté en %1\$s secondes";
$net2ftp_messages["Script halted"] = "Script arrêté";
$net2ftp_messages["Search"] = "Rechercher";
$net2ftp_messages["Search directories and files"] = "Rechercher dans des répertoires et fichiers";
$net2ftp_messages["Search for a word or phrase"] = "Rechercher un mot ou une phrase";
$net2ftp_messages["Search results"] = "Résultats de la recherche";
$net2ftp_messages["Searching the files..."] = "Recherche des fichiers...";
$net2ftp_messages["Select the directory %1\$s"] = "Sélectionner le répertoire %1\$s";
$net2ftp_messages["Select the file %1\$s"] = "Sélectionner le fichier %1\$s";
$net2ftp_messages["Select the symlink %1\$s"] = "Select the symlink %1\$s";
$net2ftp_messages["Send arbitrary FTP commands"] = "Envoyer des commandes FTP arbitraires";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "Envoyer des commandes FTP arbitraires au serveur FTP";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "Envoi de la commande FTP %1\$s sur %2\$s";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "Envoyé via le programme net2ftp installé sur ce serveur: ";
$net2ftp_messages["Set all permissions"] = "Établir toutes les permissions";
$net2ftp_messages["Set all targetdirectories"] = "Établir tous les répertoires cible";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "Établir les permissions du répertoire <b>%1\$s</b> à: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "Établir les permissions du fichier <b>%1\$s</b> à: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "Établir les permissions du symlink <b>%1\$s</b> à: ";
$net2ftp_messages["Setting the passive mode"] = "Réglage du mode passif";
$net2ftp_messages["Setting the passive mode: "] = "Réglage du mode passif : ";
$net2ftp_messages["Setting the permissions of the temporary directory"] = "Changement des permission sur le répertoire temporaire";
$net2ftp_messages["Settings used:"] = "Paramètres utilisés : ";
$net2ftp_messages["Setup MySQL tables"] = "Configurer les tables MySQL";
$net2ftp_messages["Shell script"] = "Script shell";
$net2ftp_messages["Shockwave file"] = "Fichier shockwave";
$net2ftp_messages["Shockwave flash file"] = "Fichier shockwave flash";
$net2ftp_messages["Should this link not be correct, enter the URL manually in your web browser."] = "Si ce lien n'est pas correct, entrer l'URL manuellement dans votre navigateur web.";
$net2ftp_messages["Size"] = "Taille";
$net2ftp_messages["Size of selected directories and files"] = "Taille des répertoires et fichiers sélectionnés";
$net2ftp_messages["Skin:"] = "Habillement : ";
$net2ftp_messages["Some additional comments to add in the email:"] = "Quelques commentaires additionnels à ajouter au courriel : ";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "Quelqu'un a demandé que les fichiers joints soient envoyés à cette adresse électronique (%1\$s).";
$net2ftp_messages["Standard"] = "Standard";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - Tableur StarCalc 5.x";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - Document StarChart 5.x";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - Document StarDraw 5.x";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - Présentation StarImpress 5.x";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - Fichier StarImpress 5.x paqueté";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - Fichier mail StarMail 5.x";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - Document StarMath 5.x";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - Document StarWriter 5.x";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - Document global StarWriter 5.x";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "Statut : <b>Ce fichier n'a pas pu être sauvegardé</b>";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "Statut : Sauvegardé dans <b>%1\$s</b> en utilisant le mode %2\$s";
$net2ftp_messages["Status: This file has not yet been saved"] = "Statut : Ce fichier n'a pas encore été sauvegardé";
$net2ftp_messages["Submit"] = "Soumettre";
$net2ftp_messages["Symlink"] = "Lien symbolique";
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "Lien symbolique <b>%1\$s</b>";
$net2ftp_messages["Symlinks"] = "Liens symboliques";
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>"] = "La coloration syntaxique est réalisé par <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>";
$net2ftp_messages["TAR archive"] = "Archive TAR";
$net2ftp_messages["TIF file"] = "Image TIFF";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "La table net2ftp_log_access contient des éléments en doubles.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "La table net2ftp_log_access ne peut pas être mise à jour.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "La table net2ftp_log_consumption_ftpserver contient des éléments en doubles.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "La table net2ftp_log_consumption_ftpserver contient des doubles records.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "La table net2ftp_log_consumption_ftpserver n'a pas pu être mise à jour.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "La table net2ftp_log_consumption_ipaddress contient des éléments en doubles.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "La table net2ftp_log_consumption_ipaddress contient des doubles records.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "La table net2ftp_log_consumption_ipaddress n'a pas pu être mise à jour.";
$net2ftp_messages["Table net2ftp_log_status contains duplicate entries."] = "Table net2ftp_log_status contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_status could not be updated."] = "Table net2ftp_log_status could not be updated.";
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "La table net2ftp_users contient des entrées en double.";
$net2ftp_messages["Target directory:"] = "Répertoire cible : ";
$net2ftp_messages["Target name:"] = "Nom de la cible : ";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "Tester les régles d'analyse de listes de net2ftp";
$net2ftp_messages["Testing the FTP functions"] = "Test des fonctions FTP";
$net2ftp_messages["Text file"] = "Fichier Texte";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />"] = "The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />";
$net2ftp_messages["The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />"] = "The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "Le serveur FTP <b>%1\$s</b> fait partie des serveurs FTP bannis.";
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "Le serveur FTP <b>%1\$s</b> ne fait pas partie des serveur FTP autorisés.";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "Le port %1\$s du seveur FTP ne peut pas être utilisé.";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "Le mode de transfert FTP (ASCII ou BINARY) sera automatiquement déterminé selon l'extension du fichier";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "La requête SQL n° <b>%1\$s</b> n'a pas pu être exécutée.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "La requête SQL n° <b>%1\$s</b> a été exécutée avec succès.";
$net2ftp_messages["The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />"] = "The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "Le chmod <b>%1\$s</b> est à l'extérieur de l'intervalle 000-777. Veuillez essayer à nouveau.";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The directory <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "Le répertoire <b>%1\$s</b> ne peux être affiché - Il est possible que vous n'ayez pas de droits d'accès à ce répertoire, ou bien de répertoire n'existe pas.";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "Le répertoire <b>%1\$s</b> ne peut pas être lu, il sera donc omis";
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "Le répertoire <b>%1\$s</b> n'existe pas ou ne peux pas être affiché. Le répertoire <b>%2\$s</b> est donc affiché à la place.";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "L'adresse de courriel que vous avez saisie (%1\$s) ne semble pas être valide.<br />Veuillez saisir une adresse du type <b>utilisateur@domaine.com</b>";
$net2ftp_messages["The file %1\$s could not be opened."] = "Le fichier %1\$s n'a pas pu être ouvert.";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "Le fichier <b>%1\$s</b> contient un mot clef interdit, déplacement avorté";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "Le fichier <b>%1\$s</b> contient un mot clef interdit, ce fichier sera omis";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "Le fichier <b>%1\$s</b> est trop gros pour être copié, il sera omis";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "Le fichier <b>%1\$s</b> est trop gros pour être déplacé, déplacement avorté";
$net2ftp_messages["The file is too big to be transferred"] = "Le fichier est trop gros pour être transferé";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "Le pointeur sur le fichier %1\$s n'a pas pu être fermé.";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "Le pointeur sur le fichier %1\$s n'a pas pu être ouvert.";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "Les informations de mise-à-jour n'ont pas pu être récupérées. Veuillez vérifier les paramètres de sécurité de votre navigateur, qui pourrait empêcher le téléchargement d'un petit fichier depuis le serveur net2ftp.com.";
$net2ftp_messages["The log tables could not be copied."] = "The log tables could not be copied.";
$net2ftp_messages["The log tables could not be renamed."] = "The log tables could not be renamed.";
$net2ftp_messages["The log tables were copied successfully."] = "The log tables were copied successfully.";
$net2ftp_messages["The log tables were renamed successfully."] = "The log tables were renamed successfully.";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "Le temps d'exécution maximum est de <b>%1\$s secondes</b>";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>"] = "La taille maximale d'un fichier est restreinte à <b>%1\$s</b> par net2ftp et à <b>%2\$s</b> par PHP";
$net2ftp_messages["The net2ftp installer script has been copied to the FTP server."] = "Le script d'installation net2ftp a été copié sur le serveur FTP.";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "Les nouveaux répertoires seront créés dans <b>%1\$s</b>.";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "Le nouveau nom ne peut pas contenir de mot clef interdis. cette entrée n'a pas été renommée <b>%1\$s</b>";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "Le nouveau nom ne doit contenir aucun point. Cette entrée n'a pas été renommée en <b>%1\$s</b>";
$net2ftp_messages["The number of files which were skipped is:"] = "Le nombre de fichiers omis est de : ";
$net2ftp_messages["The oldest log table could not be dropped."] = "The oldest log table could not be dropped.";
$net2ftp_messages["The oldest log table was dropped successfully."] = "The oldest log table was dropped successfully.";
$net2ftp_messages["The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment)."] = "The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment).";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "La table <b>%1\$s</b> n'a pu être vidée.";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "La table <b>%1\$s</b> n'a pas pu être optimisée.";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "La table <b>%1\$s</b> a été vidée avec succès.";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "La table <b>%1\$s</b> a été optimisée.";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "Le répertoire de destination <b>%1\$s</b> est identique ou est un sous-répertoire du répertoire source <b>%2\$s</b>, et donc ce répertoire va être omis";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "La destination du fichier <b>%1\$s</b> est la même que la source, donc ce fichier sera omis";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "La tâche que vous avez tenté d'exécuter avec net2ftp a pris plus de temps que les %1\$s secondes permises, ce pourquoi cette tâche a été interrompue.";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "La taille totale des répertoires et fichiers sélectionnés est de : ";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "La variable <b>consumption_ipaddress_datatransfer</b> n'est pas numérique.";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "Le mot <b>%1\$s</b> a été trouvé dans les fichiers suivants:";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "Le mot <b>%1\$s</b> n'a pas été trouvé dans les répertoires et fichiers sélectionnés.";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "Le fichier zip a été sauvegardé sur le serveur FTP en tant que <b>%1\$s</b>";
$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "Le fichier zip a bien été envoyé à <b>%1\$s</b>.";
$net2ftp_messages["This SQL query is going to be executed:"] = "Cette requête SQL va être exécutée : ";
$net2ftp_messages["This file is not accessible from the web"] = "Ce fichier n'est pas accessible depuis le web.";
$net2ftp_messages["This folder is empty"] = "Ce répertoire est vide";
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "Cette fonction a été désactivée par l'Administrateur de ce site web.";
$net2ftp_messages["This function is available on PHP 5 only"] = "Cette fonctionnalité n'est disponible qu'avec PHP5";
$net2ftp_messages["This script runs on your web server and requires PHP to be installed."] = "Ce script est lancé sur votre serveur web et requiert que PHP soit installé.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "Cette limite de temps garantit un usage adéquat du serveur pour tout le monde.";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "Cette version de net2ftp est à jour.";
$net2ftp_messages["Time of sending: "] = "Heure de l'envoi: ";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "Pour éviter ceci, il faut fermer toutes les fenêtres du navigateur.";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "Pour sauvegarder l'image, faites un click droit sur l'image et choisissez 'Save picture as...'";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "Pour établir un répertoire cible commun, saisissez le répertoire cible dans la boîte de texte ci-dessus et cliquez sur \"Établir tous les répertoires cible\".";
$net2ftp_messages["To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\""] = "To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\"";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "Pour régler toutes les permissions aux mêmes valeurs, entrez ces permissions et cliquez sur le bouton \"Établir toutes les permissions\"";
$net2ftp_messages["To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now."] = "To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now.";
$net2ftp_messages["Transferring files to the FTP server"] = "Transfert des fichiers sur le serveur FTP";
$net2ftp_messages["Transform selected entries: "] = "Transformer les entrées selectionnées: ";
$net2ftp_messages["Transform selected entry: "] = "Transformer l'entrée selectionnée: ";
$net2ftp_messages["Troubleshoot an FTP server"] = "Dépanner un serveur FTP";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "Dépanner net2ftp sur ce serveur";
$net2ftp_messages["Troubleshoot your net2ftp installation"] = "Dépanner votre installation net2ftp";
$net2ftp_messages["Troubleshooting functions"] = "Fonctions de dépannage";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "Essayez de séparer votre tâche en tâches plus petites: restreignez votre sélection de fichiers et désélectionnez les plus gros.";
$net2ftp_messages["Two click access (net2ftp will ask for a password - safer)"] = "Two click access (net2ftp will ask for a password - safer)";
$net2ftp_messages["Type"] = "Type";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Impossible de fermer le pointeur du fichier temporaire.";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Impossible de se connecter au serveur FTP <b>%1\$s</b> sur le port <b>%2\$s</b>.<br /><br />Êtes-vous sûr que c'est la bonne adresse du serveur FTP ? Cette adresse est souvent différente de celle du serveur HTTP (web). Veuillez contacter votre fournisseur internet ou l'administrateur du système pour obtenir de l'aide.<br />";
$net2ftp_messages["Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Impossible de se connecter a la base MySQL. Vérifiez vos préférences de base MySQL dans le fichier de configuration de net2ftp settings.inc.php.";
$net2ftp_messages["Unable to connect to the server <b>%1\$s</b>."] = "Unable to connect to the server <b>%1\$s</b>.";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "Impossible de copier le fichier <b>%1\$s</b>";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "Impossible de copier le fichier local vers le fichier distant <b>%1\$s</b> en utilisant le mode FTP<b>%2\$s</b>";
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "Impossible de copier le fichier distant <b>%1\$s</b> vers le fichier local en utilisant le mode FTP <b>%2\$s</b>";
$net2ftp_messages["Unable to create a temporary directory (too many tries)"] = "Unable to create a temporary directory (too many tries)";
$net2ftp_messages["Unable to create a temporary directory because (parent directory is not writeable)"] = "Unable to create a temporary directory because (parent directory is not writeable)";
$net2ftp_messages["Unable to create a temporary directory because (unvalid parent directory)"] = "Unable to create a temporary directory because (unvalid parent directory)";
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "Impossible de créer le répertoire <b>%1\$s</b>";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "Impossible de créer le sous-répertoire <b>%1\$s</b>. Il existe peut-être déjà. Le processus de copie/déplacement continue...";
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "Impossible de créer le fichier temporaire. Vérifiez les permissions du répertoire %1\$s .";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "Impossible de supprimer le fichier <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "Impossible de supprimer le répertoire <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Impossible de supprimer le fichier <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the local file"] = "Impossible de supprimer le fichier local";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "Impossible de supprimer le sous-répertoire <b>%1\$s</b> - il n'est peut-être pas vide";
$net2ftp_messages["Unable to delete the temporary directory"] = "Impossible d'effacer le répertoire temporaire";
$net2ftp_messages["Unable to delete the temporary file"] = "Impossible de supprimer le fichier temporaire";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Impossible d'effacer le fichier temporaire %1\$s";
$net2ftp_messages["Unable to determine your IP address."] = "Impossible de déterminer votre adresse IP.";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "Impossible d'exécuter la commande de site <b>%1\$s</b>";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "Impossible d'exécuter la commande <b>%1\$s</b>. Remarque : les commandes CHMOD sont uniquement possibles sur les serveurs FTP Unix, non sur les serveurs FTP Windows.";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "Impossible d'exécuter la requête SQL <b>%1\$s</b>.";
$net2ftp_messages["Unable to execute the SQL query."] = "Impossible d'exécuter la requête SQL.";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "Impossible d'extraire les fichiers et répertoire de cette archive";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "Impossible de récupérer l'archive <b>%1\$s</b> depuis le serveur FTP";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "Impossible d'accéder au fichier <b>%1\$s</b> sur le serveur FTP et de le sauvegarder comme le fichier temporaire <b>%2\$s</b>.<br />Vérifiez les permissions du répertoire %3\$s .<br />";
$net2ftp_messages["Unable to get the list of packages"] = "Impossible de récupérer la liste des paquets";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Impossible de se connecter au serveur FTP <b>%1\$s</b> avec le nom d'utilisateur <b>%2\$s</b>.<br /><br />Êtes-vous sûr que votre nom d'utilisateur et mot de passe sont corrects? Veuillez contacter votre fournisseur internet ou l'administrateur du système pour obtenir de l'aide.<br />";
$net2ftp_messages["Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to move the directory <b>%1\$s</b>"] = "Unable to move the directory <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>"] = "Unable to move the file <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Impossible de déplacer le fichier <b>%1\$s</b>, déplacement avorté";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "Impossible de déplacer le fichier uploadé vers le répertoire /temp.<br /><br />L'administrateur de ce site doit mettre le <b>chmod</b> du répertoire /temp de net2ftp à <b>777</b>.";
$net2ftp_messages["Unable to open the system log."] = "Impossible d'ouvrir le journal système.";
$net2ftp_messages["Unable to open the template file"] = "Impossible d'ouvrir le fichier de description";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Impossible d'ouvrir le fichier temporaire. Verifiez les permissions du répertoire %1\$s .";
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "Impossible de mettre le fichier <b>%1\$s</b> sur le serveur FTP.<br />Il est possible que vous ne puissiez pas d'écrire dans ce répertoire.";
$net2ftp_messages["Unable to read the template file"] = "Impossible de lire le fichier de description";
$net2ftp_messages["Unable to read the temporary file"] = "Impossible de lire le fichier temporaire";
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "Impossible de renommer le répertoire/fichier <b>%1\$s</b> en <b>%2\$s</b>";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Impossible de selectionner la base MySQL. Vérifiez vos préférences de base MySQL dans le fichier de configuration de net2ftp settings.inc.php.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "Impossible de sélectionner la base <b>%1\$s</b>.";
$net2ftp_messages["Unable to send the file to the browser"] = "Impossible d'envoyer le fichier au navigateur";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "Impossible de se mettre en mode passif sur le serveur FTP <b>%1\$s</b>.";
$net2ftp_messages["Unable to write a message to the system log."] = "Impossible d'écrire dans le journal système.";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "Impossible d'écrire la chaîne de caractères dans le fichier temporaire <b>%1\$s</b>.<br />Vérifiez les permissions du répertoire %2\$s .";
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "État inattendu: %1\$s. Terminaison.";
$net2ftp_messages["Unrecognized FTP output"] = "Sortie FTP non reconnue";
$net2ftp_messages["Unzip"] = "Unzip";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Unzip archive <b>%1\$s</b> to:";
$net2ftp_messages["Unzip archives"] = "Dézipper les archives";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "Dézipper les archives sélectionnées sur le serveur FTP";
$net2ftp_messages["Up"] = "Remonter";
$net2ftp_messages["Update"] = "Mettre à jour";
$net2ftp_messages["Upload"] = "Upload";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "Uploader une nouvelle version du fichier %1\$s et fusionner les changements";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload de répertoires et de fichiers à travers une applet Java";
$net2ftp_messages["Upload files and archives"] = "Uploader des fichiers et des archives";
$net2ftp_messages["Upload more files and archives"] = "Uploader plus de fichiers et d'archives";
$net2ftp_messages["Upload new files in directory %1\$s"] = "Upload d'un nouveau fichier dans le répertoire %1\$s";
$net2ftp_messages["Upload to directory:"] = "Uploader vers le répertoire:";
$net2ftp_messages["Username"] = "Nom d'utilisateur";
$net2ftp_messages["Version information"] = "Informations sur la version";
$net2ftp_messages["View"] = "Voir";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "Visualiser le film Macromedia ShockWave Flash %1\$s";
$net2ftp_messages["View file %1\$s"] = "Visualiser le fichier %1\$s";
$net2ftp_messages["View image %1\$s"] = "Voir l'image %1\$s";
$net2ftp_messages["View logs"] = "Visualiser les archives";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "Voir le fichier %1\$s à partir de votre serveur HTTP";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Voir le code source surligné du fichier %1\$s";
$net2ftp_messages["WAV sound file"] = "Fichier son WAV";
$net2ftp_messages["Webmaster's email: "] = "Adresse email du Webmaster: ";
$net2ftp_messages["Writing some text to the file: "] = "Écrire du texte dans le fichier : ";
$net2ftp_messages["Wrong username or password. Please try again."] = "Identifiant ou mot de passe invalide. Veuillez réessayer.";
$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "Vous n'avez pas entré un nom de fichier pour le fichier zip. Retournez en arrière et entrez un nom de fichier.";
$net2ftp_messages["You did not enter your Administrator username or password."] = "Vous devez saisir un identifiant et un mot de passe Administrateur.";
$net2ftp_messages["You did not provide any file to upload."] = "Vous n'avez fourni aucun fichier à uploader.";
$net2ftp_messages["You did not provide any text to send by email!"] = "Vous n'avez spécifié aucun texte à envoyer par courriel!";
$net2ftp_messages["You did not supply a From address."] = "Vous n'avez pas spécifié une adresse d'expéditeur.";
$net2ftp_messages["You did not supply a To address."] = "Vous n'avez pas spécifié une adresse de destinataire.";
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "Vous vous êtes déconnecté du serveur FTP. Pour vous reconnecter, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">suivez ce lien</a>.";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "Votre adresse IP (%1\$s) a été bannie de ce serveur FTP.";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Votre adresse IP (%1\$s) n'est pas dans la liste des IP autorisées.";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Votre IP a changé, veuillez entrer votre mot de passe pour le serveur FTP <b>%1\$s</b> pour continuer.";
$net2ftp_messages["Your browser does not support applets, or you have disabled applets in your browser settings."] = "Your browser does not support applets, or you have disabled applets in your browser settings.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "Le répertoire racine <b>%1\$s</b> n'existe pas, ou ne peux pas être affiché.";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Votre session a expirée, veuillez entrer votre mot de passe pour le serveur FTP  <b>%1\$s</b> pour continuer.";
$net2ftp_messages["Your task was stopped"] = "Votre tâche a été interrompue";
$net2ftp_messages["Zip"] = "Zip";
$net2ftp_messages["Zip archive"] = "Archive ZIP";
$net2ftp_messages["Zip entries"] = "Entrées zip";
$net2ftp_messages["Zip the selected entries to save or email them"] = "Créer un fichier .ZIP pour sauvegarder les éléments selectionnés ou les envoyer par courriel";
$net2ftp_messages["en"] = "fr";
$net2ftp_messages["files which were last modified"] = "fichiers récemments modifiés";
$net2ftp_messages["files with a filename like"] = "fichiers avec un nom de fichier comme";
$net2ftp_messages["files with a size"] = "fichiers avec une taille";
$net2ftp_messages["from"] = "de";
$net2ftp_messages["left"] = "left";
$net2ftp_messages["ltr"] = "ltr";
$net2ftp_messages["net2ftp has tried to determine the directory mapping between the FTP server and the web server."] = "net2ftp a essayé de determiner la correspondance entre le serveur FTP et votre serveur web.";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp est un logiciel libre, publié sous la licence GNU/GPL. Pour plus d'informations, veuillez visiter http://www.net2ftp.com.";
$net2ftp_messages["no - please install it!"] = "non - installez-le svp!";
$net2ftp_messages["not OK"] = "pas OK";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "Incorrect. Vérifiez les permissions du répertoire %1\$s ";
$net2ftp_messages["right"] = "right";
$net2ftp_messages["to"] = "à";
$net2ftp_messages["to:"] = "jusqu'à : ";
$net2ftp_messages["yes"] = "oui";

?>