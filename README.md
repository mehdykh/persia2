You are looking at MVC Persia index controller.
This process shows you how to install Persia.

<h4>Download:</h4>

Persia is available for download via github. Use <b>gitbash</b> to download the framework;

<h2>git clone git://github.com/mehdykh/Persia2.git</h2>


You can also review the source code directly on github: <b>https://github.com/mehdykh/Persia2</b>

<h4>Installation:</h4>

Upload the Persia package to your server by using a ftp-program. I myself use file-zilla.

Open the <b>.htaccess</b> file with a text editor (Sublime Text). <b>.htaccess</b> is located in the root-folder,
<br>change the address in line 5 <i>(RewriteBase /~mekh13/phpmvc/03/mvc/)</i> to your own installation.

<b>Important: </b>Make the data-directory <b>writeable</b>. This is the location of the database where content is stored and updated,
<br>and the place where the framework needs to be able to write and create files. 
<br>
<br>You can do this by a Right-click on the folder "data" in <b>site/data</b> and change <b>file permissions</b> to <b>777</b>. 
<br><b>Do not forget to change the .sqlite file in data to 777 too.</b>
<p>

<h3>Modification:</h3>

Open the file config in <b>site/config.php</b> in a text editor (Agin in my case Sublime Text).

Here yo can add or modify header, slogan, favicon, logo, footer, etc.

<br>Consider that your image size must be "logo_80x80.png", in order to work. 

If you wish to change the look of your framework, the style.css file is located in <b>themes/core/style.css</b>

<h5>Enjoy using Persia!</h5>
