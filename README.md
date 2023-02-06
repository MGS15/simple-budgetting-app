# simple-budgetting-app
This is a simple budgitting application to apply procedural PHP

## First, let's configuer our HTTP
* One Windows - Using XAMPP - we go to *C:\xampp\apache\conf\extra* directory and open *httpd-vhosts.conf*.
* In the ```<VirtualHost *:80>```  perform the following updates:
	* ``` ##DocumentRoot "C:/xampp/htdocs/simple-budgetting-app" ``` to ```DocumentRoot "C:/xampp/htdocs/<your-app-root>" ```
	* ``` ##ServerName dummy-host.example.com ``` to ```ServerName <some-domain-name>```
* In the *C:\Windows\System32\drivers\etc* directory, open *hosts* file to perform the following updates:
	* Add the following configuration in the end of the file: ```127.0.0.1	<some-domain-name>```
	* Save the file and restart Apache server.