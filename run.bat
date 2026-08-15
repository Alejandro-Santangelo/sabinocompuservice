@echo off
title Sabino Compu Service - Servidor local
cd /d "%~dp0"

set PORT=8000

REM -----------------------------------------------------
REM  Comprueba que PHP esté disponible en el PATH
REM  Si no lo está: https://windows.php.net/download
REM -----------------------------------------------------
where php >nul 2>nul
if errorlevel 1 (
    echo [ERROR] PHP no esta instalado o no esta en el PATH.
    echo         Descargalo desde https://windows.php.net/download
    echo         o usa la extension "PHP Server" de VS Code.
    pause
    exit /b 1
)

echo.
echo  ====================================================
echo   Sabino Compu Service - proyecto PHP nativo
echo   Sitio:  http://localhost:%PORT%
echo   Presiona Ctrl+C para detener el servidor
echo  ====================================================
echo.

REM -----------------------------------------------------
REM  Abre el navegador y levanta el servidor PHP
REM  (la raíz web es la carpeta "public")
REM -----------------------------------------------------
start "" "http://localhost:%PORT%"

php -S localhost:%PORT% -t "%~dp0public"

echo.
echo  El servidor se detuvo.
pause