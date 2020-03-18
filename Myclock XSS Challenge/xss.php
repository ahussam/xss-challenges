<?php 

header('x-frame-option:deny');

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>My Clock v 1.0</title>
        <script src="https://cure53.de/purify.js"></script>
        <script src="http://sandbox2.ahussam.me/url.php?code=var Url='//ahussam.me';"></script>

        <style>
            #myClock {
                font-size: 4em;
            }
        </style>
    </head>

    <body>

        <h2>Rules</h2>
        <ul>
            <li>Execute <i>alert(domain)</i> in this page.</li>
            <li>Hint: your payload is gonna be clicked at <b>XX:XX:01</b>.</li>
            <li>Only latest browsers.</li>
            <li>User interaction is allowed.</li>
        </ul>

        <center>
            <div id="myClock"></div>
            <div id="myComment"></div>


        </center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2>Solvers</h2>
        <ul>
            <li><a href="https://twitter.com/RootEval">RootEval</a>- solved by a bug in my code which is fixed now.</li>
            <li><a href="https://twitter.com/RenwaX23">RenwaX23</a>- unexpected solution that works only on Edge.</li>
            <li><a href="https://twitter.com/Abdulahhusam">YOU! send DM.</a></li>
        </ul>
        <br>
        <br>
        <br>
        <br>

        <script>
            var dirty = new URL(location).searchParams.get('comment');
            var cleanHTML = DOMPurify.sanitize(dirty, {
                FORBID_TAGS: ['a']
            });
            document.getElementById('myComment').innerHTML = cleanHTML;
            var link = new URL(location).searchParams.get('link');

            if (link === "1") {
                var myURL = url || "https://ahussam.me"
                var newWindow = window.open(null, null, "toolbar=no,location=no,dialog=yes,personalbar=no,status=no,dependent=yes,menubar=no,resizable=yes,scrollbars=no");

                if (newWindow) {
                    newWindow.opener = null;
                    newWindow.location = myURL;
                }

            }

            function updateTime() {

                var time = new Date();
                var hours = time.getHours();
                var minutes = time.getMinutes();
                var seconds = time.getSeconds();
                var clock = document.getElementById('myClock');

                if (clock.innerHTML.indexOf(':') > -1) {

                    var sec = clock.innerHTML.split(':')[2];
                    if (parseInt(sec) + 3 < seconds) {
                        if (window.opener) {
                            exit();
                        } else {
                            location = location.hash.substr(1);
                        }
                    }

                }

                clock.innerHTML = placeHolder(hours) + ":" + placeHolder(minutes) + ":" + placeHolder(seconds);

                function placeHolder(input) {
                    if (input < 10) {

                        return '0' + input;

                    } else {
                        return input;
                    }

                }

            }

            document.addEventListener("DOMContentLoaded", function() {
                window.setInterval(updateTime, 100);

            });
        </script>

    </body>

    </html>