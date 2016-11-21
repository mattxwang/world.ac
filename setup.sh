#!/bin/bash

# Our dependancies
JQUERY=https://code.jquery.com/jquery-3.1.1.min.js
TETHER=https://raw.githubusercontent.com/HubSpot/tether/master/dist/js/tether.min.js

FA_VER=font-awesome-4.7.0
FONTAWSOME=http://fontawesome.io/assets/$FA_VER.zip

BS_VER=4.0.0-alpha.5
BOOTSTRAP=https://codeload.github.com/twbs/bootstrap/zip/v$BS_VER

# Make curl if it doesn't exist
hash curl 2>/dev/null || { echo >&2 "curl not installed, building it from wget"; alias curl="wget -q -O - $1"; }

# Helper functions
uncurl() {
	echo " . Downloading $2"
	curl -s $1 > temp.zip
	echo " . Unpacking $2"
	unzip -q temp.zip
	rm temp.zip
}

mkcd() {
	mkdir $1
	cd $1
}


# Actual installation
cd ${0%/*} # Go to this directory
echo "   Starting install"

# All independent Javascript
echo " - Starting Javascript"
cd js
curl -s $JQUERY > jquery.min.js
curl -s $TETHER > tether.min.js
cd ..
echo " √ Javascript done!"

# FontAwesome
echo " - Starting FontAwesome"
uncurl $FONTAWSOME FontAwesome
mv $FA_VER fa-archive
mv fa-archive/fonts .
mv fa-archive/css/font-awesome.min.css css/
rm -r fa-archive
echo " √ FontAwesome done!"

# Bootstrap
echo " - Starting Bootstrap"
uncurl $BOOTSTRAP Bootstrap
mv bootstrap-$BS_VER bs-archive
mv bs-archive/scss css/bootstrap
mv bs-archive/dist/js/bootstrap.min.js js/
rm -r bs-archive
echo " √ Bootstrap done!"