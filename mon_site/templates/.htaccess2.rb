RewriteEngine on

# Rediriger les requêtes vers le domaine avec www
RewriteCond %{HTTPS} off
RewriteCond %{HTTP_HOST} !^www\. [NC]
RewriteRule .* http://www.%{HTTP_HOST}%{REQUEST_URI} [R=301,L]
RewriteCond %{HTTPS} on
RewriteCond %{HTTP_HOST} !^www\. [NC]
RewriteRule .* https://www.%{HTTP_HOST}%{REQUEST_URI} [R=301,L]


# Suivre les liens symboliques
Options +FollowSymLinks


# Masquer le htaccess
<Files .htaccess>
    order allow,deny
    deny from all
</Files>

# Rediriger le nom de domaine entier vers : 91xwriter.store
RewriteCond %{HTTPS} off
RewriteCond %{HTTP_HOST} !^(www\.)?91xwriter\.store$ [NC]
RewriteRule .* http://91xwriter.store%{REQUEST_URI} [R=301,L]
RewriteCond %{HTTPS} on
RewriteCond %{HTTP_HOST} !^(www\.)?91xwriter\.store$ [NC]
RewriteRule .* https://91xwriter.store%{REQUEST_URI} [R=301,L]

# Error Document
ErrorDocument 400 /400.html
ErrorDocument 401 /401.html
ErrorDocument 403 /403.html
ErrorDocument 404 /404.html
ErrorDocument 500 /500.html

# URL rewriting

