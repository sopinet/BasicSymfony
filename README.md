
=======
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
<pre>sh scripts/composerUpdate.sh</pre>

Generate bootstrap.php.cache
<pre>sh scripts/generateBootstrapCache.sh</pre>

Update assets
<pre>sh scripts/updateAssets.sh</pre>

Clean caché
<pre>sh scripts/clean.sh</pre>
That's all!
