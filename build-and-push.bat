@echo off
REM ============================================
REM  Build & Push — Admin Panel
REM ============================================

if "%1"=="" (
    echo Usage: build-and-push.bat ^<docker-hub-username^> [tag]
    echo Example: build-and-push.bat bogdanqt latest
    exit /b 1
)

set DOCKER_USERNAME=%1
set TAG=%2
if "%TAG%"=="" set TAG=latest

echo.
echo [1/3] Logging in to Docker Hub...
docker login
if errorlevel 1 (echo Login failed! & exit /b 1)

echo.
echo [2/3] Building image: %DOCKER_USERNAME%/qttech-admin-panel:%TAG%
docker build -t %DOCKER_USERNAME%/qttech-admin-panel:%TAG% .

echo.
echo [3/3] Pushing to Docker Hub...
docker push %DOCKER_USERNAME%/qttech-admin-panel:%TAG%

echo.
echo Done! Image pushed: %DOCKER_USERNAME%/qttech-admin-panel:%TAG%
echo Deploy: docker pull %DOCKER_USERNAME%/qttech-admin-panel:%TAG% ^&^& docker-compose up -d
