pREM   server:start runs a local web server: By default, the server
REM   listens on 127.0.0.1 address and the port number is automatically selected
REM   as the first free port starting from 8000:
REM     php console server:start

REM   The server is run in the background and you can keep executing other commands.
REM   Execute server:stop to stop it.
REM   Change the default address and port by passing them as an argument:
REM     php console server:start 127.0.0.1:8080

REM   Use the --docroot option to change the default docroot directory:
REM     php console server:start --docroot=htdocs/

REM   Specify your own router script via the --router option:
REM     php console server:start --router=app/config/router.php

REM   See also: http://www.php.net/manual/en/features.commandline.webserver.php

REM php console server:start --docroot=public_html
REM php console server:start --router=app/config/router.php

REM php console server:start *:3000
php bin/console server:run *:3000
