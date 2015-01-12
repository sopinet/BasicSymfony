BasicSymfony
============
Console
<pre>cd /var/www/</pre>
<pre>git clone https://github.com/sopinet/BasicSymfony.git YourProjectName</pre>

Change parameters.yml with your configuration database<br>

Execute: 
<pre>curl -sS https://getcomposer.org/installer | php</pre>
if you don't have installed curl:
<pre>php -r "readfile('https://getcomposer.org/installer');" | php</pre>

Generate vendors
<pre>sh scripts/composer_update.sh</pre>

Clean caché
<pre>sh scripts/cache_clear.sh</pre>

Change repository
<pre>git remote set-url origin https://github.com/USERNAME/YOUREPOSITORY.git</pre>

That's all!
