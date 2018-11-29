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
//  |     $messages[...] = ["Le fichier %1\$s a �t� copi� vers %2\$s "]             |
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
$net2ftp_messages["en"] = "cs";

// HTML dir attribute: left-to-right (LTR) or right-to-left (RTL)
$net2ftp_messages["ltr"] = "ltr";

// CSS style: align left or right (use in combination with LTR or RTL)
$net2ftp_messages["left"] = "left";
$net2ftp_messages["right"] = "right";

// Encoding
$net2ftp_messages["iso-8859-1"] = "windows-1250";

// -------------------------------------------------------------------------
// Messages
// -------------------------------------------------------------------------

$net2ftp_messages["%1\$s File"] = "Soubor %1\$s";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(Pozn�mka: tento odkaz nemus� fungovat, pokud nem�te vlastn� dom�nu.)";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> nemohl b�t p�ejmenov�n na <b>%2\$s</b>";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> byl �sp?n� p�ejmenov�n na <b>%2\$s</b>";
$net2ftp_messages["ARC archive"] = "Archiv ARC";
$net2ftp_messages["ARJ archive"] = "Archiv ARJ";
$net2ftp_messages["ASP script"] = "ASP skript";
$net2ftp_messages["Action"] = "Action";
$net2ftp_messages["Actions"] = "Akce";
$net2ftp_messages["Add another"] = "P�idat dal?�";
$net2ftp_messages["Admin functions"] = "Administr�torsk� funkce";
$net2ftp_messages["Adobe Acrobat document"] = "dokument Adobe Acrobat";
$net2ftp_messages["Advanced"] = "Pokro�il�";
$net2ftp_messages["Advanced FTP functions"] = "Advanced FTP functions";
$net2ftp_messages["Advanced functions"] = "Pokro�il� funkce";
$net2ftp_messages["Advanced login"] = "Advanced login";
$net2ftp_messages["All"] = "V?e";
$net2ftp_messages["All the selected directories and files have been processed."] = "V?echny ozna�en� adres��e a soubory byly zpracov�ny.";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "Ve vybran�ch adres���ch budou smaz�ny tak� v?echny podadres��e a soubory!";
$net2ftp_messages["Alternatively, use net2ftp's normal upload or upload-and-unzip functionality."] = "Alternatively, use net2ftp's normal upload or upload-and-unzip functionality.";
$net2ftp_messages["An error has occured"] = "Do?lo k chyb�";
$net2ftp_messages["Anonymous"] = "Anonymn�";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "Archiv <b>%1\$s</b> nebyl zpracov�n, proto?e p��ponu jeho souboru se nepoda�ilo rozpoznat. Moment�ln� jsou podporov�ny pouze archivy zip, tar, tgz a gz.";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "Archive contains filenames with ../ or ..\\ - aborting the extraction";
$net2ftp_messages["Archives"] = "Archiv�";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "Zde zadan� archivy budou rozbaleny a soubory uvnit� budou p�eneseny na FTP server.";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "Jste si jist, ?e chcete smazat tyto adres��e a soubory?";
$net2ftp_messages["Ascending order"] = "Vzestupn� t��d�n�";
$net2ftp_messages["Automatic"] = "Automatic";
$net2ftp_messages["Back"] = "Zp�t";
$net2ftp_messages["Basic FTP login"] = "Basic FTP login";
$net2ftp_messages["Basic SSH login"] = "Basic SSH login";
$net2ftp_messages["Bitmap file"] = "Bitmapa";
$net2ftp_messages["Bookmark"] = "Obl�ben�";
$net2ftp_messages["Calculate the size of the selected entries"] = "Spo��tat velikost vybran�ch polo?ek";
$net2ftp_messages["Cascading Style Sheet"] = "Kask�dov� styl";
$net2ftp_messages["Case sensitive search"] = "Rozli?ovat velikost p�smen";
$net2ftp_messages["Changing the directory"] = "Changing the directory";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Zm�na adres��e na %1\$s: ";
$net2ftp_messages["Character encoding: "] = "Character encoding: ";
$net2ftp_messages["Check the SSH server's public key fingerprint"] = "Check the SSH server's public key fingerprint";
$net2ftp_messages["Checking files"] = "Kontrolov�n� soubor�";
$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "Kontrolov�n� p��tomnosti FTP modulu PHP: ";
$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "Kontrolov�n� pr�v adres��e na webov�m serveru: do /temp bude zaps�n a n�sledn� smaz�n mal� soubor.";
$net2ftp_messages["Chmod"] = "Pr�va";
$net2ftp_messages["Chmod also the files within this directory"] = "Zm�nit pr�va tak� v?em soubor�m v tomto adres��i";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "Zm�nit pr�va tak� v?em podadres���m v tomto adres��i";
$net2ftp_messages["Chmod directories and files"] = "Zm�nit pr�va adres���m a soubor�m";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "Zm�nit pr�va u vybran�ch polo?ek (funguje pouze na serverech Unix/Linux/BSD)";
$net2ftp_messages["Choose"] = "Vybrat";
$net2ftp_messages["Choose a directory"] = "Vyberte adres��";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "Klikn�te pro vzestupn� set��d�n� podle sloupce %1\$s.";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "Klikn�te pro sestupn� set��d�n� podle sloupce %1\$s.";
$net2ftp_messages["Closing the file: "] = "Zav�r�n� souboru: ";
$net2ftp_messages["Connecting to a test FTP server: "] = "Connecting to a test FTP server: ";
$net2ftp_messages["Connecting to the FTP server"] = "P�ipojov�n� k FTP serveru";
$net2ftp_messages["Connecting to the FTP server: "] = "P�ipojov�n� k FTP serveru: ";
$net2ftp_messages["Connection settings:"] = "Nastaven� p�ipojen�:";
$net2ftp_messages["Continue"] = "Continue";
$net2ftp_messages["Copied file %1\$s"] = "Copied file %1\$s";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Copied file <b>%1\$s</b>";
$net2ftp_messages["Copy"] = "Kop�rovat";
$net2ftp_messages["Copy directories and files"] = "Kop�rovat adres��e a soubory";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "Zkop�rovat adres�� <b>%1\$s</b> do:";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "Zkop�rovat soubor <b>%1\$s</b> do:";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "Zkop�rovat symlink <b>%1\$s</b> do:";
$net2ftp_messages["Copy the selected entries"] = "Zkop�rovat vybran� polo?ky";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "Copying the net2ftp installer script to the FTP server";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Could not connect to SSH server"] = "Could not connect to SSH server";
$net2ftp_messages["Could not copy file %1\$s"] = "Could not copy file %1\$s";
$net2ftp_messages["Could not create directory %1\$s"] = "Could not create directory %1\$s";
$net2ftp_messages["Could not generate a temporary file."] = "Nepoda�ilo se vytvo�it do�asn� soubor.";
$net2ftp_messages["Could not get fingerprint"] = "Could not get fingerprint";
$net2ftp_messages["Could not get public host key"] = "Could not get public host key";
$net2ftp_messages["Could not unzip entry %1\$s (error code %2\$s)"] = "Could not unzip entry %1\$s (error code %2\$s)";
$net2ftp_messages["Create a new file in directory %1\$s"] = "Vytvo�it nov� soubor v adres��i %1\$s";
$net2ftp_messages["Create a website easily using ready-made templates"] = "Create a website easily using ready-made templates";
$net2ftp_messages["Create new directories"] = "Vytvo�it nov� adres��e";
$net2ftp_messages["Create the MySQL database tables"] = "Vytvo�it datab�zov� MySQL tabulky";
$net2ftp_messages["Created directory %1\$s"] = "Created directory %1\$s";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Created target subdirectory <b>%1\$s</b>";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "Creating a temporary directory on the FTP server";
$net2ftp_messages["Creating filename: "] = "Vytv��en� souboru: ";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "Denn� limit dosa?en: soubor <b>%1\$s</b> nebude p�enesen";
$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "Denn� limit byl dosa?en: nebudete moci p�enZet data";
$net2ftp_messages["Data transferred from this IP address today"] = "Data transferred from this IP address today";
$net2ftp_messages["Data transferred to this FTP server today"] = "Data transferred to this FTP server today";
$net2ftp_messages["Date from:"] = "Datum od:";
$net2ftp_messages["Dear,"] = "V^en�,";
$net2ftp_messages["Decompressing archives and transferring files"] = "Rozbalov�n� archiv� a p�enZen� soubor�";
$net2ftp_messages["Default"] = "V�choz�";
$net2ftp_messages["Delete"] = "Smazat";
$net2ftp_messages["Delete directories and files"] = "Smazat adres��e a soubory";
$net2ftp_messages["Delete the selected entries"] = "Smazat vybran� polo?ky";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "Soubor <b>%1\$s</b> byl smaz�n";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Podadres�� <b>%1\$s</b> byl smaz�n";
$net2ftp_messages["Deleting the file: "] = "Maz�n� souboru: ";
$net2ftp_messages["Descending order"] = "Sestupn� t��d�n�";
$net2ftp_messages["Details"] = "Detaily";
$net2ftp_messages["Different target FTP server:"] = "Jin� c�lov� FTP server:";
$net2ftp_messages["Directories"] = "Adres��e";
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = "Adres��e, jejich? jm�no obsahuje \', nemohou b�t korektn� zobrazeny. Mohou b�t pouze smaz�ny. Pros�m vra�te se zp�t a vyberte jin� jin� podadres��.";
$net2ftp_messages["Directory"] = "Adres��";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "Adres�� <b>%1\$s</b>";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "Directory <b>%1\$s</b> could not be created.";
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "Pr�va adres��e <b>%1\$s</b> byla v po��dku zm�n�na na <b>%2\$s</b>";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "Adres�� <b>%1\$s</b> byl v po��dku vytvo�en.";
$net2ftp_messages["Directory Tree"] = "Strom adres���";
$net2ftp_messages["Disabled"] = "Disabled";
$net2ftp_messages["Double-click to go to a subdirectory:"] = "Poklepejte pro p�echod do podadres��e:";
$net2ftp_messages["Download"] = "St�hnout";
$net2ftp_messages["Download a zip file containing all selected entries"] = "St�hnout ZIP soubor obsahuj�c� v?echny vybran� polo?ky";
$net2ftp_messages["Download the file %1\$s"] = "St�hnout soubor %1\$s";
$net2ftp_messages["Drag and drop one of the links below to the bookmarks bar"] = "Drag and drop one of the links below to the bookmarks bar";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "Kv�li technick�m probl�m�m nebylo mo?n� odeslat e-mail na adresu <b>%1\$s</b>.";
$net2ftp_messages["Edit"] = "Upravit";
$net2ftp_messages["Edit the source code of file %1\$s"] = "Upravit zdrojov� k�d souboru %1\$s";
$net2ftp_messages["Email the zip file in attachment to:"] = "Poslat zip v p��loze e-mailem na:";
$net2ftp_messages["Empty logs"] = "Vypr�zdnit z�znamy";
$net2ftp_messages["Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21"] = "Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21";
$net2ftp_messages["Enter your password"] = "Enter your password";
$net2ftp_messages["Enter your username"] = "Enter your username";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp.";
$net2ftp_messages["Example"] = "P��klad";
$net2ftp_messages["Executable"] = "Spustiteln� soubor";
$net2ftp_messages["Execute %1\$s in a new window"] = "Spustit %1\$s v nov�m okn�";
$net2ftp_messages["FTP mode"] = "FTP m�d";
$net2ftp_messages["FTP server"] = "FTP server" ;
$net2ftp_messages["FTP server port"] = "Port FTP serveru";
$net2ftp_messages["FTP server response:"] = "FTP server response:";
$net2ftp_messages["File"] = "Soubor";
$net2ftp_messages["File <b>%1\$s</b>"] = "Soubor <b>%1\$s</b>";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "Soubor <b>%1\$s</b> nem?e b�t p�esunut";
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "Soubor <b>%1\$s</b> nemohl b�t p�enesen na FTP server";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "Soubor <b>%1\$s</b> byl na FTP server p�enesen v re?imu <b>%2\$s</b>";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "Soubor <b>%1\$s</b> je v po��dku";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded.";
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "Soubor <b>%1\$s</b> je moc velk�. Tento soubor nebude nahr�n.";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "Pr�va souboru <b>%1\$s</b> byla v po��dku zm�n�na na <b>%2\$s</b>";
$net2ftp_messages["File: "] = "Soubor: ";
$net2ftp_messages["Files"] = "Soubory";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "Zde zadan� soubory budou p�enesen� na FTP server.";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted.";
$net2ftp_messages["Find files which contain a particular word"] = "Naj�t soubory obsahuj�c� zadan� slovo";
$net2ftp_messages["Fingerprint"] = "Fingerprint";
$net2ftp_messages["Follow symlink %1\$s"] = "Follow symlink %1\$s";
$net2ftp_messages["Font file"] = "Soubor fontu";
$net2ftp_messages["Forums"] = "Forums";
$net2ftp_messages["GIF file"] = "Obr�zek GIF";
$net2ftp_messages["GIMP file"] = "Obr�zek GIMP";
$net2ftp_messages["GZ archive"] = "Archiv GZ";
$net2ftp_messages["Get fingerprint"] = "Get fingerprint";
$net2ftp_messages["Get the SSH server's public key fingerprint before logging in to verify the server's identity"] = "Get the SSH server's public key fingerprint before logging in to verify the server's identity";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Getting archive %1\$s of %2\$s from the FTP server";
$net2ftp_messages["Getting fingerprint, please wait..."] = "Getting fingerprint, please wait...";
$net2ftp_messages["Getting the FTP server system type: "] = "Z�sk�v�n� typu syst�mu FTP serveru: ";
$net2ftp_messages["Getting the FTP system type"] = "Getting the FTP system type";
$net2ftp_messages["Getting the current directory"] = "Getting the current directory";
$net2ftp_messages["Getting the list of directories and files"] = "Z�sk�v�n� seznamu adres��� a soubor�";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Z�sk�v�n� syrov�ho seznamu adres��� a soubor�: ";
$net2ftp_messages["Go"] = "OK";
$net2ftp_messages["Go back"] = "P�ej�t zp�t";
$net2ftp_messages["Go to the advanced functions"] = "P�ej�t na pokro�il� funkce";
$net2ftp_messages["Go to the login page"] = "P�ej�t na p�ihla?ovac� str�nku";
$net2ftp_messages["Go to the parent directory"] = "P�ej�t do nad�azen�ho adres��e";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "Go to the subdirectory %1\$s";
$net2ftp_messages["Group"] = "Skupina";
$net2ftp_messages["HTML file"] = "HTML soubor";
$net2ftp_messages["HTML templates"] = "HTML templates";
$net2ftp_messages["Help"] = "N�pov�da";
$net2ftp_messages["Help Guide"] = "Help Guide";
$net2ftp_messages["IP address: "] = "IP adresa: ";
$net2ftp_messages["Icons"] = "Ikony";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "Pokud c�lov� soubor existuje, bude p�eps�n";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "Pokud o tom nic nev�te nebo doty�n� osob� ned�v��ujete, tak pros�m tento e-mail sma?te, ani? byste Zip soubor v p��loze otev�rali.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "Pokud pot�ebujete neomezen� pou?it�, tak pros�m net2ftp nainstalujte na vlastn� webov� server.";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "Pokud opravdu pot�ebujete, aby net2ftp dok�zalo zpracovat n�ro�n� dlouhotrvaj�c� �lohy, zva?te instalaci net2ftp na vlastn�m serveru.";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "Pokud chcete soubory zkop�rovat na jin� FTP server, zadejte va?e p�ihla?ovac� �daje.";
$net2ftp_messages["Image"] = "Obr�zek";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "Pro zaji?t�n� spravedliv�ho u?�v�n� webov�ho serveru k�mkoliv je objem p�ene?en�ch dat a �asu spu?t�n� skript� omezen pro ka?dou dvojici u?ivatel - den. Jakmile je tento limit dosa?en, m?ete proch�zet FTP server, ale u? na n�j ani z n�j nem?ete p�enZet data.";
$net2ftp_messages["In order to run it, click on the link below."] = "In order to run it, click on the link below.";
$net2ftp_messages["Information about the sender: "] = "Informace o odes�lateli: ";
$net2ftp_messages["Initial directory"] = "V�choz� adres��";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Install software packages"] = "Install software packages";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Install software packages (requires PHP on web server)";
$net2ftp_messages["JPEG file"] = "Obr�zek JPEG";
$net2ftp_messages["Java Upload"] = "Java Nahr�t";
$net2ftp_messages["Java source file"] = "Zdrojov� soubor Java";
$net2ftp_messages["JavaScript file"] = "soubor JavaScript";
$net2ftp_messages["Language:"] = "Jazyk:";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "Nechte pr�zdn�, pokud chcete soubory zkop�rovat na stejn� FTP server.";
$net2ftp_messages["License"] = "Licence";
$net2ftp_messages["Line"] = "Line";
$net2ftp_messages["List"] = "Seznam";
$net2ftp_messages["List of commands:"] = "List of commands:";
$net2ftp_messages["Logging"] = "Z�znamy";
$net2ftp_messages["Logging into the FTP server"] = "Logging into the FTP server";
$net2ftp_messages["Logging into the FTP server: "] = "Logov�n� na FTP server: ";
$net2ftp_messages["Logging out of the FTP server"] = "Logging out of the FTP server";
$net2ftp_messages["Login"] = "P�ihl�sit";
$net2ftp_messages["Login!"] = "Login!";
$net2ftp_messages["Logout"] = "Odhl�sit";
$net2ftp_messages["MOV movie file"] = "Video MOV";
$net2ftp_messages["MPEG movie file"] = "Video MPEG";
$net2ftp_messages["MS Office - Access database"] = "MS Office - datab�ze Access";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Office - tabulka Excel";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Office - prezentace PowerPoint";
$net2ftp_messages["MS Office - Project file"] = "MS Office - projekt aplikace Project";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Office - kresba Visio";
$net2ftp_messages["MS Office - Word document"] = "MS Office - dokument Word";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "Vytvo�it nov� podadres�� v adres��i %1\$s";
$net2ftp_messages["Message of the sender: "] = "Zpr�va odes�latele: ";
$net2ftp_messages["Mobile"] = "Mobile";
$net2ftp_messages["Mod Time"] = "�as zm�ny";
$net2ftp_messages["Move"] = "P�esunout";
$net2ftp_messages["Move directories and files"] = "P�esunout adres��e a soubory";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "P�esunout adres�� <b>%1\$s</b> do:";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "P�esunout soubor <b>%1\$s</b> do:";
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "P�esunout symlink <b>%1\$s</b> do:";
$net2ftp_messages["Move the selected entries"] = "P�esunout vybran� polo?ky";
$net2ftp_messages["Moved directory <b>%1\$s</b>"] = "Moved directory <b>%1\$s</b>";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "Soubor <b>%1\$s</b> byl p�esunut";
$net2ftp_messages["MySQL database"] = "MySQL datab�ze";
$net2ftp_messages["MySQL password"] = "MySQL heslo";
$net2ftp_messages["MySQL password length"] = "D�lka MySQL hesla";
$net2ftp_messages["MySQL server"] = "MySQL server" ;
$net2ftp_messages["MySQL username"] = "MySQL u?ivatelsk� jm�no";
$net2ftp_messages["Name"] = "N�zev";
$net2ftp_messages["New dir"] = "Nov� adres��";
$net2ftp_messages["New directory name:"] = "Jm�no nov�ho adres��e:";
$net2ftp_messages["New file"] = "Nov� soubor";
$net2ftp_messages["New file name: "] = "Nov� n�zev souboru: ";
$net2ftp_messages["New name: "] = "Nov� jm�no: ";
$net2ftp_messages["No data"] = "?�dn� data";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "Pokud Zip soubor neotev�ete, nemohou soubory uvnit� po?kodit vZ po��ta�.";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "Vezm�te pros�m na v�dom�, ?e p�enZen� soubor� nen� anonymn�: do e-mailu bude p�id�na va?e IP adresa a �as odesl�n�.";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "Note: other users of this computer could click on the browser's Back button and access the FTP server.";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Pozn�mka: c�lov� adres�� mus� existovat d��ve, ne? do n�j bude cokoliv zkop�rov�no.";
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] = "Pozn�mka: Kdy? pou?ijete tento odkaz, zept� se v�s vyskakovac� ok�nko na u?ivatelsk� jm�no a heslo.";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["OK. Filename: %1\$s"] = "OK. Soubor: %1\$s";
$net2ftp_messages["Old name: "] = "Star� jm�no: ";
$net2ftp_messages["One click access (net2ftp won't ask for a password - less safe)"] = "One click access (net2ftp won't ask for a password - less safe)";
$net2ftp_messages["Open"] = "Otev��t";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - tabulka Calc 6.0";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - ?ablona Calc 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - dokument Draw 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - ?ablona Draw 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - prezentace Impress 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - ?ablona Impress 6.0";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - dokument Math 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - dokument Writer 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - glob�ln� dokument Writer 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - ?ablona Writer 6.0";
$net2ftp_messages["Opening the file in write mode: "] = "Otev�r�n� souboru v re?imu z�pisu: ";
$net2ftp_messages["Owner"] = "Vlastn�k";
$net2ftp_messages["PHP Source"] = "PHP zdrojov� k�d";
$net2ftp_messages["PHP script"] = "PHP skript";
$net2ftp_messages["PNG file"] = "Obr�zek PNG";
$net2ftp_messages["Parsing the file"] = "Parsing the file";
$net2ftp_messages["Parsing the list of directories and files"] = "Parsing the list of directories and files";
$net2ftp_messages["Passive mode"] = "Pasivn� re?im";
$net2ftp_messages["Password"] = "Heslo";
$net2ftp_messages["Password length"] = "D�lka hesla";
$net2ftp_messages["Perms"] = "Pr�va";
$net2ftp_messages["Please enter a password."] = "Please enter a password.";
$net2ftp_messages["Please enter a username."] = "Please enter a username.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "Zadejte pros�m platn� datum ve form�tu Y-m-d do textov�ho pole \"od\".";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "Zadejte pros�m platn� datum ve form�tu Y-m-d do textov�ho pole \"do\".";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "Zadejte pros�m platnou velikost souboru do textov�ho pole \"od\", nap��klad 0.";
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "Zadejte pros�m platnou velikost souboru do textov�ho pole \"do\", nap��klad 50000.";
$net2ftp_messages["Please enter a valid filename."] = "Zadejte pros�m platn� jm�no souboru.";
$net2ftp_messages["Please enter a valid search word or phrase."] = "Zadejte pros�m platn� slovo nebo slovn� spojen� pro vyhled�v�n�.";
$net2ftp_messages["Please enter an FTP server."] = "Please enter an FTP server.";
$net2ftp_messages["Please enter your Administrator username and password."] = "Please enter your Administrator username and password.";
$net2ftp_messages["Please enter your MySQL settings:"] = "Please enter your MySQL settings:";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "Please enter your username and password for FTP server <b>%1\$s</b>.";
$net2ftp_messages["Please specify a filename"] = "Vyberte pros�m soubor";
$net2ftp_messages["Please wait..."] = "Pros�m �ekejte...";
$net2ftp_messages["Powered by"] = "B?� d�ky";
$net2ftp_messages["Printing the list of directories and files"] = "Vypisov�n� seznamu adres��� a soubor�";
$net2ftp_messages["Printing the result"] = "Printing the result";
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "Zpracov�n� archivu �. %1\$s: <b>%2\$s</b>";
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "Zpracov�n� adres��e <b>%1\$s</b>";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "Processing entries within directory <b>%1\$s</b>:";
$net2ftp_messages["Processing entry %1\$s"] = "Processing entry %1\$s";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "Zpracov�n� adres��e <b>%1\$s</b> bylo dokon�eno";
$net2ftp_messages["Processing the entries"] = "Zpracov�v�n� z�znam�";
$net2ftp_messages["Protocol"] = "Protocol";
$net2ftp_messages["Quicktime movie file"] = "Video Quicktime";
$net2ftp_messages["RPM"] = "RPM" ;
$net2ftp_messages["Reading the file"] = "Reading the file";
$net2ftp_messages["Real movie file"] = "Video Real";
$net2ftp_messages["Refresh"] = "Obnovit";
$net2ftp_messages["Rename"] = "P�ejmenovat";
$net2ftp_messages["Rename directories and files"] = "P�ejmenovat adres��e nebo soubory";
$net2ftp_messages["Rename the selected entries"] = "P�ejmenovat vybran� polo?ky";
$net2ftp_messages["Requested files"] = "Po?adovan� soubory";
$net2ftp_messages["Restrict the search to:"] = "Omezit vyhled�v�n� na:";
$net2ftp_messages["Restrictions:"] = "Omezen�:";
$net2ftp_messages["Results:"] = "V�sledky:";
$net2ftp_messages["Right-click on one of the links below and choose \"Add to Favorites...\""] = "Right-click on one of the links below and choose \"Add to Favorites...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark This Link...\""] = "Right-click on one of the links below and choose \"Bookmark This Link...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark link...\""] = "Right-click on one of the links below and choose \"Bookmark link...\"";
$net2ftp_messages["Right-click on one the links below and choose \"Add Link to Bookmarks...\""] = "Right-click on one the links below and choose \"Add Link to Bookmarks...\"";
$net2ftp_messages["SSH fingerprint"] = "SSH fingerprint";
$net2ftp_messages["SSH server"] = "SSH server";
$net2ftp_messages["Save"] = "Ulo?it";
$net2ftp_messages["Save the zip file on the FTP server as:"] = "Ulo?it zip na FTP serveru jako:";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";
$net2ftp_messages["Script finished in %1\$s seconds"] = "Skript skon�il za %1\$s sekund";
$net2ftp_messages["Script halted"] = "Skript zastavil";
$net2ftp_messages["Search"] = "Vyhledat";
$net2ftp_messages["Search directories and files"] = "Prohledat adres��e a soubory";
$net2ftp_messages["Search for a word or phrase"] = "Hledat slovo nebo slovn� spojen�";
$net2ftp_messages["Search results"] = "V�sledky vyhled�v�n�";
$net2ftp_messages["Searching the files..."] = "Prohled�v�n� soubor�...";
$net2ftp_messages["Select the directory %1\$s"] = "Select the directory %1\$s";
$net2ftp_messages["Select the file %1\$s"] = "Select the file %1\$s";
$net2ftp_messages["Select the symlink %1\$s"] = "Select the symlink %1\$s";
$net2ftp_messages["Send arbitrary FTP commands"] = "Send arbitrary FTP commands";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "Send arbitrary FTP commands to the FTP server";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "Sending FTP command %1\$s of %2\$s";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "Posl�no aplikac� net2ftp nainstalovanou na tomto webov�m serveru: ";
$net2ftp_messages["Set all permissions"] = "Nastavit v?echna pr�va";
$net2ftp_messages["Set all targetdirectories"] = "Nastavit v?echny c�lov� adres��e";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "Nastavit pr�va adres��e <b>%1\$s</b> na: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "Nastavit pr�va souboru <b>%1\$s</b> na: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "Nastavit pr�va symlinku <b>%1\$s</b> na: ";
$net2ftp_messages["Setting the passive mode"] = "Setting the passive mode";
$net2ftp_messages["Setting the passive mode: "] = "Nastavov�n� pasivn�ho re?imu: ";
$net2ftp_messages["Setting the permissions of the temporary directory"] = "Setting the permissions of the temporary directory";
$net2ftp_messages["Settings used:"] = "Pou?it� nastaven�:";
$net2ftp_messages["Setup MySQL tables"] = "Nastavit MySQL tabulky";
$net2ftp_messages["Shell script"] = "Shellovsk� skript";
$net2ftp_messages["Shockwave file"] = "Soubor Shockwave";
$net2ftp_messages["Shockwave flash file"] = "Shockwave Flash";
$net2ftp_messages["Should this link not be correct, enter the URL manually in your web browser."] = "Should this link not be correct, enter the URL manually in your web browser.";
$net2ftp_messages["Size"] = "Velikost";
$net2ftp_messages["Size of selected directories and files"] = "Velikost vybran�ch adres��� a soubor�";
$net2ftp_messages["Skin:"] = "Motiv:";
$net2ftp_messages["Some additional comments to add in the email:"] = "Dal?� koment��, kter� chcete p�ipojit k e-mailu:";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "N�kdo po?�dal o posl�n� soubor� v p��loze na va?i e-mailovou adresu (%1\$s).";
$net2ftp_messages["Standard"] = "Standard";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - tabulka StarCalc 5.x";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - dokument StarChart 5.x";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - dokument StarDraw 5.x";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - prezentace StarImpress 5.x";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - soubor StarImpress Packed 5.x";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - soubor po?ty StarMail 5.x";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - dokument StarMath 5.x";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - dokument StarWriter 5.x";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - glob�ln� dokument StarWriter 5.x";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "Stav: <b>Tento soubor nem?e b�t ulo?en</b>";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "Stav: Ulo?en� <b>%1\$s</b> v m�du %2\$s";
$net2ftp_messages["Status: This file has not yet been saved"] = "Stav: Tento soubor je?t� nebyl ulo?en";
$net2ftp_messages["Submit"] = "Odeslat";
$net2ftp_messages["Symlink"] = "Symlink" ;
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "Symlink <b>%1\$s</b>" ;
$net2ftp_messages["Symlinks"] = "Symlinky";
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>"] = "Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>";
$net2ftp_messages["TAR archive"] = "Archiv TAR";
$net2ftp_messages["TIF file"] = "Obr�zek TIF";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "Table net2ftp_log_access contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "Table net2ftp_log_access could not be updated.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "Tabulka net2ftp_log_consumption_ftpserver obsahuje duplicitn� z�znamy.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "Tabulka net2ftp_log_consumption_ftpserver obsahuje duplicitn� z�znamy.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "Tabulka net2ftp_log_consumption_ftpserver nemohla b�t aktualizov�na.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "Tabulka net2ftp_log_consumption_ipaddress obsahuje duplicitn� z�znamy.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "Tabulka net2ftp_log_consumption_ipaddress obsahuje duplicitn� z�znamy.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "Tabulka net2ftp_log_consumption_ipaddress nemohla b�t aktualizov�na.";
$net2ftp_messages["Table net2ftp_log_status contains duplicate entries."] = "Table net2ftp_log_status contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_status could not be updated."] = "Table net2ftp_log_status could not be updated.";
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "Table net2ftp_users contains duplicate rows.";
$net2ftp_messages["Target directory:"] = "C�lov� adres��:";
$net2ftp_messages["Target name:"] = "C�lov� jm�no:";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "Test the net2ftp list parsing rules";
$net2ftp_messages["Testing the FTP functions"] = "Testing the FTP functions";
$net2ftp_messages["Text file"] = "Textov� soubor";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />"] = "The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />";
$net2ftp_messages["The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />"] = "The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "FTP server <b>%1\$s</b> je na seznamu zak�zan�ch server�.";
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "FTP server <b>%1\$s</b> nen� na seznamu povolen�ch server�.";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "Port %1\$s FTP serveru nem?e b�t pou?it.";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "Re?im FTP p�enosu (ASCII nebo BINARY) bude automaticky nastaven podle koncovky";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "The SQL query nr <b>%1\$s</b> could not be executed.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "The SQL query nr <b>%1\$s</b> was executed successfully.";
$net2ftp_messages["The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />"] = "The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "��slo pro chmod <b>%1\$s</b> je mimo rozsah 000-777. Zkuste to pros�m znovu.";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The directory <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist.";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "The directory <b>%1\$s</b> could not be selected, so this directory will be skipped";
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead.";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "Zd� se, ?e e-mailov� adresa, kterou jste zadal (%1\$s), nen� platn�.<br />Zadejte pros�m adresu ve form�tu <b>uzivatel@domena.cz</b>";
$net2ftp_messages["The file %1\$s could not be opened."] = "The file %1\$s could not be opened.";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The file <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "The file <b>%1\$s</b> is too big to be copied, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "The file <b>%1\$s</b> is too big to be moved, aborting the move";
$net2ftp_messages["The file is too big to be transferred"] = "The file is too big to be transferred";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "The handle of file %1\$s could not be closed.";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "The handle of file %1\$s could not be opened.";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server.";
$net2ftp_messages["The log tables could not be copied."] = "The log tables could not be copied.";
$net2ftp_messages["The log tables could not be renamed."] = "The log tables could not be renamed.";
$net2ftp_messages["The log tables were copied successfully."] = "The log tables were copied successfully.";
$net2ftp_messages["The log tables were renamed successfully."] = "The log tables were renamed successfully.";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "Maxim�ln� �as prov�d�n� je <b>%1\$s sekund</b>";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>"] = "Maxim�ln� velikost jednoho souboru je v net2ftp omezena na <b>%1\$s</b> a v PHP na <b>%2\$s</b>";
$net2ftp_messages["The net2ftp installer script has been copied to the FTP server."] = "The net2ftp installer script has been copied to the FTP server.";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "Nov� adres��e budou vytvo�en� v <b>%1\$s</b>.";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "Nov� jm�no nesm� obsahovat ?�dn� te�ky. Tato polo?ka byla p�ejmenov�na na <b>%1\$s</b>";
$net2ftp_messages["The number of files which were skipped is:"] = "The number of files which were skipped is:";
$net2ftp_messages["The oldest log table could not be dropped."] = "The oldest log table could not be dropped.";
$net2ftp_messages["The oldest log table was dropped successfully."] = "The oldest log table was dropped successfully.";
$net2ftp_messages["The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment)."] = "The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment).";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "Nepoda�ilo se vypr�zdnit tabulku <b>%1\$s</b>.";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "The table <b>%1\$s</b> could not be optimized.";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "Tabulka <b>%1\$s</b> byla �sp?n� vypr�zdn�na.";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "The table <b>%1\$s</b> was optimized successfully.";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "C�lov� adres�� <b>%1\$s</b> je stejn� jako zdrojov� adres�� <b>%2\$s</b> nebo je jeho podadres��em, tento adres�� proto bude p�esko�en";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "C�lov� um�st�n� souboru <b>%1\$s</b> je stejn� jako zdrojov�, proto bude tento soubor p�esko�en";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "�loha, kterou jste cht�li pomoc� net2ftp prov�st, trvala v�ce ne? povolen�ch %1\$s sekund, a proto byla zastavena.";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "Celkov� velikost vybran�ch adres��� a soubor� je:";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "Prom�nn� <b>consumption_ipaddress_datatransfer</b> nen� ��seln�.";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "Slovo <b>%1\$s</b> bylo nalezeno v t�chto souborech:";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "Slovo <b>%1\$s</b> nebylo ve vybran�ch adres���ch a souborech nalezeno.";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "Soubor ZIP byl na FTP server ulo?en jako <b>%1\$s</b>";
$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "Soubor ZIP byl odesl�n na adresu <b>%1\$s</b>.";
$net2ftp_messages["This SQL query is going to be executed:"] = "Vykon� se tento SQL dotaz:";
$net2ftp_messages["This file is not accessible from the web"] = "This file is not accessible from the web";
$net2ftp_messages["This folder is empty"] = "Tento adres�� je pr�zdn�";
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "This function has been disabled by the Administrator of this website.";
$net2ftp_messages["This function is available on PHP 5 only"] = "This function is available on PHP 5 only";
$net2ftp_messages["This script runs on your web server and requires PHP to be installed."] = "This script runs on your web server and requires PHP to be installed.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "Tento �asov� limit zaru�uje spravedliv� vyu?it� webov�ho serveru v?emi u?ivateli.";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "This version of net2ftp is up-to-date.";
$net2ftp_messages["Time of sending: "] = "�as odesl�n�: ";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "To prevent this, you must close all browser windows.";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "Pokud chcete ulo?it obr�zek, tak na n�j klikn�te prav�m tla��tkem my?i a zvolte 'Ulo?it obr�zek jako...'";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "Pokud chcete nastavit obvykl� c�lov� adres��, zadejte ho do textov�ho pol��ka v?e a stiskn�te tla��tko \"Nastavit v?echny c�lov� adres��e\".";
$net2ftp_messages["To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\""] = "To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\"";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "Pokud chcete nastavit v?echna pr�va na stejnou hodnotu, zadejte tato pr�va v?e a stiskn�te tla��tko \"Nastavit v?echna pr�va\"";
$net2ftp_messages["To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now."] = "To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now.";
$net2ftp_messages["Transferring files to the FTP server"] = "P�enZen� soubor� na FTP server";
$net2ftp_messages["Transform selected entries: "] = "Zm�nit vybran� polo?ky: ";
$net2ftp_messages["Transform selected entry: "] = "Transform selected entry: ";
$net2ftp_messages["Troubleshoot an FTP server"] = "�e?en� probl�m� FTP serveru";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "�e?en� probl�m� net2ftp na tomto webov�m serveru";
$net2ftp_messages["Troubleshoot your net2ftp installation"] = "�e?en� probl�m� va?� instalace net2ftp";
$net2ftp_messages["Troubleshooting functions"] = "Funkce pro odstra�ov�n� probl�m�";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "Pokuste se va?e �lohy rozd�lit na men?� ��sti: omezte v�b�r soubor� a vynechejte ty nejv�t?�.";
$net2ftp_messages["Two click access (net2ftp will ask for a password - safer)"] = "Two click access (net2ftp will ask for a password - safer)";
$net2ftp_messages["Type"] = "Typ";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Nepoda�ilo se uzav��t do�asn� soubor";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Nepoda�ilo se p�ipojit k FTP serveru <b>%1\$s</b> na portu <b>%2\$s</b>.<br /><br />V�te jist�, ?e se jedn� o adresu FTP serveru? Ta se �asto li?� od adresy HTTP (webov�ho) serveru. Pro z�sk�n� pomoci pros�m kontaktujte odbornou pomoc sv�ho ISP nebo syst�mov�ho administr�tora.<br />";
$net2ftp_messages["Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";
$net2ftp_messages["Unable to connect to the server <b>%1\$s</b>."] = "Unable to connect to the server <b>%1\$s</b>.";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "Nepoda�ilo se zkop�rovat soubor <b>%1\$s</b>";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "Nepoda�ilo se zkop�rovat m�stn� soubor do vzd�len�ho souboru <b>%1\$s</b> v FTP re?imu <b>%2\$s</b>";
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "Nepoda�ilo se zkop�rovat vzd�len� soubor <b>%1\$s</b> do m�stn�ho v FTP re?imu <b>%2\$s</b>";
$net2ftp_messages["Unable to create a temporary directory (too many tries)"] = "Unable to create a temporary directory (too many tries)";
$net2ftp_messages["Unable to create a temporary directory because (parent directory is not writeable)"] = "Unable to create a temporary directory because (parent directory is not writeable)";
$net2ftp_messages["Unable to create a temporary directory because (unvalid parent directory)"] = "Unable to create a temporary directory because (unvalid parent directory)";
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "Nepoda�ilo se vytvo�it adres�� <b>%1\$s</b>";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "Nepoda�ilo se vytvo�it podadres�� <b>%1\$s</b>. Mo?n� u? existuje. Pokra�uje se v kop�rov�n�/p�esouv�n�...";
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "Nepoda�ilo se vytvo�it do�asn� soubor. Zkontrolujte opr�vn�n� adres��e %1\$s.";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "Nepoda�ilo se smazat soubor <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "Nepoda�ilo se smazat adres�� <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Nepoda�ilo se smazat soubor <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the local file"] = "Nepoda�ilo se smazat m�stn� soubor";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "Nepoda�ilo se smazat podadres�� <b>%1\$s</b> - mo?n� nen� pr�zdn�";
$net2ftp_messages["Unable to delete the temporary directory"] = "Unable to delete the temporary directory";
$net2ftp_messages["Unable to delete the temporary file"] = "Nepoda�ilo se smazat do�asn� soubor";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Unable to delete the temporary file %1\$s";
$net2ftp_messages["Unable to determine your IP address."] = "Nepoda�ilo se zjistit va?i IP adresu.";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "Nepoda�ilo se vykonat p��kaz serveru <b>%1\$s</b>";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "Nepoda�ilo se vykonat serverov� p��kaz <b>%1\$s</b>. Vezm�te pros�m na v�dom�, ?e p��kaz CHMOD je k dispozici pouze na Unixov�ch FTP serverech a ne na FTP serverech pod Windows.";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "Unable to execute the SQL query <b>%1\$s</b>.";
$net2ftp_messages["Unable to execute the SQL query."] = "Unable to execute the SQL query.";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "Unable to extract the files and directories from the archive";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "Unable to get the archive <b>%1\$s</b> from the FTP server";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "Nepoda�ilo se z�skat soubor <b>%1\$s</b> z FTP serveru a ulo?it ho do do�asn�ho souboru <b>%2\$s</b>.<br />Zkontrolujte opr�vn�n� adres��e %3\$s.<br />";
$net2ftp_messages["Unable to get the list of packages"] = "Unable to get the list of packages";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Nepoda�ilo se p�ihl�sit k FTP serveru <b>%1\$s</b> pod u?ivatelsk�m jm�nem <b>%2\$s</b>.<br /><br />Jste si jist, ?e je u?ivatelsk� jm�no a heslo spr�vn�? Pro z�sk�n� pomoci pros�m kontaktujte odbornou pomoc sv�ho ISP nebo syst�mov�ho administr�tora.<br />";
$net2ftp_messages["Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to move the directory <b>%1\$s</b>"] = "Unable to move the directory <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>"] = "Unable to move the file <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Unable to move the file <b>%1\$s</b>, aborting the move";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "Nepoda�ilo se p�esunout nahran� soubor do do�asn�ho adres��e.<br /><br />Administr�tor tohoto webov�ho serveru mus� na adres�� net2ftp /temp prov�st <b>chmod 777</b>.";
$net2ftp_messages["Unable to open the system log."] = "Unable to open the system log.";
$net2ftp_messages["Unable to open the template file"] = "Nepoda�ilo se otev��t soubor se ?ablonami";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Nepoda�ilo se otev��t do�asn� soubor. Zkontrolujte opr�vn�n� adres��e %1\$s.";
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "Nepoda�ilo se nahr�t soubor <b>%1\$s</b> na FTP server.<br />Mo?n� nem�te pr�va z�pisu do dan�ho adres��e.";
$net2ftp_messages["Unable to read the template file"] = "Nepoda�ilo se na��st soubor se ?ablonami";
$net2ftp_messages["Unable to read the temporary file"] = "Nepoda�ilo se p�e��st do�asn� soubor";
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "Nepoda�ilo se p�ejmenovat adres�� nebo soubor <b>%1\$s</b> na <b>%2\$s</b>";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "Unable to select the database <b>%1\$s</b>.";
$net2ftp_messages["Unable to send the file to the browser"] = "Nepoda�ilo se odeslat soubor prohl?e�i";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "Nepoda�ilo se p�epnout do pasivn�ho re?imu na FTP serveru <b>%1\$s</b>.";
$net2ftp_messages["Unable to write a message to the system log."] = "Unable to write a message to the system log.";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "Nepoda�ilo se zapsat �et�zec do do�asn�ho souboru <b>%1\$s</b>.<br />Zkontrolujte opr�vn�n� adres��e %2\$s.";
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "Unexpected state string: %1\$s. Exiting.";
$net2ftp_messages["Unrecognized FTP output"] = "Nerozpoznan� FTP v�stup";
$net2ftp_messages["Unzip"] = "Unzip";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Unzip archive <b>%1\$s</b> to:";
$net2ftp_messages["Unzip archives"] = "Unzip archives";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "Unzip the selected archives on the FTP server";
$net2ftp_messages["Up"] = "V?e";
$net2ftp_messages["Update"] = "Aktualizovat";
$net2ftp_messages["Upload"] = "Nahr�t";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "Nahr�t novou verzi souboru %1\$s a slou�it zm�ny";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload directories and files using a Java applet";
$net2ftp_messages["Upload files and archives"] = "Nahr�t soubory a archivy";
$net2ftp_messages["Upload more files and archives"] = "Nahr�t v�ce soubor� a archiv�";
$net2ftp_messages["Upload new files in directory %1\$s"] = "Nahr�t nov� soubory do adres��e %1\$s";
$net2ftp_messages["Upload to directory:"] = "Nahr�t do adres��e:";
$net2ftp_messages["Username"] = "U?ivatelsk� jm�no";
$net2ftp_messages["Version information"] = "Informace o verzi";
$net2ftp_messages["View"] = "Zobrazit";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "Prohl�dnout si klip Macromedia ShockWave Flash %1\$s";
$net2ftp_messages["View file %1\$s"] = "Zobrazit soubor %1\$s";
$net2ftp_messages["View image %1\$s"] = "Zobrazit obr�zek %1\$s";
$net2ftp_messages["View logs"] = "Zobrazit z�znamy";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "Zobrazit soubor %1\$s z va?eho HTTP webov�ho serveru";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Zobrazit zv�razn�n� zdrojov� k�d souboru %1\$s";
$net2ftp_messages["WAV sound file"] = "Zvuk WAV";
$net2ftp_messages["Webmaster's email: "] = "E-mail webmastera: ";
$net2ftp_messages["Writing some text to the file: "] = "Zapisov�n� n�jak�ho textu do souboru: ";
$net2ftp_messages["Wrong username or password. Please try again."] = "Wrong username or password. Please try again.";
$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "Nezadali jste jm�no zip souboru. Vra�te se zp�t a zadejte jm�no souboru.";
$net2ftp_messages["You did not enter your Administrator username or password."] = "You did not enter your Administrator username or password.";
$net2ftp_messages["You did not provide any file to upload."] = "Neposkytl jste ?�dn� soubor, kter� se m� nahr�t";
$net2ftp_messages["You did not provide any text to send by email!"] = "Neuvedl jste ?�dn� text, kter� by se m�l poslat e-mailem!";
$net2ftp_messages["You did not supply a From address."] = "Neuvedl jste adresu odes�latele.";
$net2ftp_messages["You did not supply a To address."] = "Neuvedl jste adresu p��jemce.";
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>.";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "Va?e IP adresa (%1\$s) je na seznamu zak�zan�ch adres.";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Your IP address (%1\$s) is not in the list of allowed IP addresses.";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Your browser does not support applets, or you have disabled applets in your browser settings."] = "Your browser does not support applets, or you have disabled applets in your browser settings.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "Your root directory <b>%1\$s</b> does not exist or could not be selected.";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Your task was stopped"] = "Va?e �loha byla zastavena";
$net2ftp_messages["Zip"] = "Zip" ;
$net2ftp_messages["Zip archive"] = "Archiv Zip";
$net2ftp_messages["Zip entries"] = "Zazipovat polo?ky";
$net2ftp_messages["Zip the selected entries to save or email them"] = "Zazipovat vybran� polo?ky a ulo?it nebo poslat e-mailem";
$net2ftp_messages["en"] = "cs";
$net2ftp_messages["files which were last modified"] = "soubory, kter� byly naposledy zm�n�ny";
$net2ftp_messages["files with a filename like"] = "soubory se jm�nem vyhovuj�c�mu";
$net2ftp_messages["files with a size"] = "soubory s velikost�";
$net2ftp_messages["from"] = "od";
$net2ftp_messages["left"] = "left";
$net2ftp_messages["ltr"] = "ltr";
$net2ftp_messages["net2ftp has tried to determine the directory mapping between the FTP server and the web server."] = "net2ftp has tried to determine the directory mapping between the FTP server and the web server.";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp je voln� software, uvoln�n� pod licenc� GNU/GPL. Pro v�ce informac� nav?tivte http://www.net2ftp.com.";
$net2ftp_messages["no - please install it!"] = "ne - pros�m nainstalujte ho";
$net2ftp_messages["not OK"] = "not OK";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "nen� OK. Zkontrolujte opr�vn�n� adres��e %1\$s.";
$net2ftp_messages["right"] = "right";
$net2ftp_messages["to"] = "do";
$net2ftp_messages["to:"] = "do:";
$net2ftp_messages["yes"] = "ano";

?>