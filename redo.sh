# Clean up registry...

echo Cleaning up...
git rm *

echo
echo Initialising...
git init

echo
echo Adding index.php...
git add .
git commit -m "index.php"

echo
echo Finished.
echo