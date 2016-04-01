<?php header('Access-Control-Allow-Origin: localhost'); ?>


<!DOCTYPE html>
<html>

    <head>
        <title>NodeJS Starter Application</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="stylesheets/style.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/watson.js"></script>


    </head>

    <body>

        <!--  <div style="width:800px; margin: 100px auto 0 50px;">
              <form action="analyzeText" method="POST">
                    <textarea  name="content" style="width:80%;" rows="12"></textarea>
                    <input type="submit" value="AnalyzeText" >
              </form>
          </div>-->

        <div class="form-style-5">
            <form action="ask" method="POST">

                <fieldset>
                    <legend><span class="number"></span> Boilerplates </legend>

                    <textarea id="question" name="question" placeholder="What day is today?"></textarea>     
                </fieldset>

                <input type="button" id="preguntar" value="Ask Watson" />
            </form>
        </div>

        <div id="resultado" >

        </div>
        
        <br />
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined variable: curl in C:\wamp64\www\BoilerplatesPHP\servicios\servicioWatson.php on line <i>21</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0008</td><td bgcolor='#eeeeec' align='right'>247632</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\BoilerplatesPHP\servicios\servicioWatson.php' bgcolor='#eeeeec'>...\servicioWatson.php<b>:</b>0</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-warning' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: curl_setopt() expects parameter 1 to be resource, null given in C:\wamp64\www\BoilerplatesPHP\servicios\servicioWatson.php on line <i>21</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0008</td><td bgcolor='#eeeeec' align='right'>247632</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\BoilerplatesPHP\servicios\servicioWatson.php' bgcolor='#eeeeec'>...\servicioWatson.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0023</td><td bgcolor='#eeeeec' align='right'>251088</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.curl-setopt' target='_new'>curl_setopt</a>
(  )</td><td title='C:\wamp64\www\BoilerplatesPHP\servicios\servicioWatson.php' bgcolor='#eeeeec'>...\servicioWatson.php<b>:</b>21</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined variable: curl in C:\wamp64\www\BoilerplatesPHP\servicios\servicioWatson.php on line <i>22</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0008</td><td bgcolor='#eeeeec' align='right'>247632</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\BoilerplatesPHP\servicios\servicioWatson.php' bgcolor='#eeeeec'>...\servicioWatson.php<b>:</b>0</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-warning' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: curl_setopt() expects parameter 1 to be resource, null given in C:\wamp64\www\BoilerplatesPHP\servicios\servicioWatson.php on line <i>22</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0008</td><td bgcolor='#eeeeec' align='right'>247632</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\BoilerplatesPHP\servicios\servicioWatson.php' bgcolor='#eeeeec'>...\servicioWatson.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0052</td><td bgcolor='#eeeeec' align='right'>251088</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.curl-setopt' target='_new'>curl_setopt</a>
(  )</td><td title='C:\wamp64\www\BoilerplatesPHP\servicios\servicioWatson.php' bgcolor='#eeeeec'>...\servicioWatson.php<b>:</b>22</td></tr>
</table></font>
empty response
        
    </body>

</html>
