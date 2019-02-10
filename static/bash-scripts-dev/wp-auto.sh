#!/bin/bash
# ===================================================================================
# | WordPress Auto Konfiguration
# ===================================================================================
RED='\033[0;31m'
GREEN='\033[0;32m'
NC='\033[0m'

# Suchmaschinen die Indexierung verbieten.
wp option update blog_public 0

# WordPress komplett updaten
wp cli update
wp core update
wp plugin update --all
wp theme update --all

# Sprache ändern
wp language core install --activate de_DE

# Datum und Zeit anpassen
wp option update date_format 'Y-m-d'
wp option update time_format 'H:i'
wp option update start_of_week 1
wp option update timezone_string 'Europe/Zurich'

# Link Struktur setzten
wp rewrite structure '/%post_id%/%postname%' --category-base='/kat/' --tag-base='/tag/'
wp rewrite flush

# Jahr / Monat Ordner Struktur deaktivieren
wp option update uploads_use_yearmonth_folders 0

# Kommentare per Standart deaktiviert
wp option set default_comment_status closed;

# Ping per Standart deaktiviert
wp option set default_ping_status closed;

# Blog Name und Beschreibung mit vorübergehendem Inhalt füllen
wp option update blogname "PageSpeed+"
wp option update blogdescription "Professional Performance"
# wp option update admin_email someone@example.com
# wp option update default_role author

# Standart Müll entfernen
wp plugin uninstall akismet hello
wp theme uninstall twentyfifteen twentysixteen
wp post delete $(wp post list --post_type='page' --format=ids)
wp post delete 1 --force
wp comment delete 1 --force
wp widget delete $(wp widget list sidebar-1 --format=ids);

# Home & Blog Seite erstellen und zuweisen
wp post create --post_type=page --post_status=publish --post_title='Home'
wp post create --post_type=page --post_status=publish --post_title='Blog'
wp post list --post_type=page

echo ""
echo "Setze die ID von Home oder Blog welche du oben siehst anstatt der letzten Zahl in den Beispielen unten. Das 3. Beispiel genau so übernehmen."
echo ""
echo -e "${RED}wp option update page_on_front 5 ${NC}\n"
echo -e "${RED}wp option update page_for_posts 10 ${NC}\n"
echo -e "${GREEN}wp option update show_on_front page ${NC}\n"
echo ""
echo "Blog Domain mit https:// speichern"
echo ""
echo -e "${RED}wp option update home 'https://' ${NC}\n"
echo -e "${RED}wp option update siteurl 'https://' 10 ${NC}\n"
echo ""
echo "Die wp-config.php nun perfektionieren"
echo ""
echo -e "${GREEN}EDITOR=nano wp config edit ${NC}\n"
echo ""

