<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>My first PHP Website</title>
    </head>
    <body>
        <code>
            var x = 5;
            var y = 6;
            document.getElementById("demo").innerHTML = x + y;
        </code>
        <h1 style="font-family: cursive">This is heading 1</h1>
        <h2 style=" font-family: fantasy" style="font-size: 400%" >This is heading 2</h2>
        <h3 style="background-color:lightgrey">This is heading 3</h3>
        <h4>This is heading 4</h4>
        <h5 style="color:red"> This is heading 5</h5>
        <h6 style="color: skyblue">This is heading 6</h6>
        <hr>
        <p style="font-size: 200%"> My first paragraph.</p>
        <p>My second paragraph.</p>
        <p><b>My bold paragraph.</b></p>
        <p><strong>My strong paragraph.</strong></p>
        <p><i>This text is italic</i>.</p>
        <p><em>This text is emphasized</em>.</p>
        <p>HTML <mark>Marked</mark> Formatting</p>
        <p>My favorite color is <del style="color:blue">blue</del></p> <p style="color:red"> red.</p>
        <p>My favorite <ins>color</ins> is red.</p>
        <p>This is <sub>subscripted</sub> text.</p>
        <p>This is <sup>superscripted</sup> text.</p>
        <blockquote cite="http://www.worldwildlife.org/who/index.html">
            For 50 years, WWF has been protecting the future of nature.
            The world's leading conservation organization,
            WWF works in 100 countries and is supported by
            1.2 million members in the United States and
            close to 5 million globally.
        </blockquote>
        <hr>
        <pre>
          This is the pre element.

          My Bonnie lies over the ocean.

          My Bonnie lies over the sea.

          My Bonnie lies over the ocean.

          Oh, bring back my Bonnie to me.
        </pre>
        <a href="http://www.ibe-inc.com">This is a link to the IBE Website</a><br />
        <a href="http://www.w3schools.com" target="_blank">This is a link to the W3Schools Website</a><br />
        <img src="w3schools.png" alt="BrokenW3Schools.png" width="280" height="32">        
        <hr>
        <p title="About W3Schools">
            When you hover over this text with the mouse you will see a pop-up tip. W3Schools is a web developer's site.
            It provides tutorials and references covering
            many aspects of web programming,
            including HTML, CSS, JavaScript, XML, SQL, PHP, ASP, etc.
        </p>
        <p>The <abbr title="Industrial Battery Engineering, Inc.">IBE</abbr> was founded in 1951. Hover mouse over the <q>IBE</q> and you will see a popup.</p>
        <address>
            Written by Derek Sloan.<br> 
            Visit us at:<br>
            ibe-inc.com<br>
            9121 De Garmo Ave,<br>
            Sun Valley, CA 91352
        </address>
        
        <?php
            echo "<p>This is PHP!</p>";
        ?>
    </body>
</html>
