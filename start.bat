@ECHO ON

SET PORT=2000
SET PHP=%~dp0\sys\php-8.0.11-Win32-vs16-x64\php.exe

START http://localhost:%PORT%

%PHP% -S localhost:%PORT%

PAUSE