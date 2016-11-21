#!/bin/bash

# Our dependancies
BOOTSTRAP=https://github.com/twbs/bootstrap/archive/v4.0.0-alpha.5.zip
JQUERY=https://code.jquery.com/jquery-3.1.1.min.js
TETHER=https://raw.githubusercontent.com/HubSpot/tether/master/dist/js/tether.min.js
FONTAWSOME=http://fontawesome.io/assets/font-awesome-4.7.0.zip

# Make curl if it doesn't exist
curl https://google.com > /dev/null 2>&1 || curl() {
	wget -O - $1
}


# Helper functions
uncurl() {
	curl $1 > $2.zip
	unzip $2.zip
	rm $2.zip
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
curl $JQUERY > jquery.min.js
curl $TETHER > tether.min.js
cd ..
echo " √ Javascript done!"

# FontAwesome
echo " - Starting FontAwesome"
uncurl $FONTAWSOME fa-archive
mv fa-archive/fonts .
mv fa-archive/css css/font-awesome.min.css
rm fa-archive
echo " √ FontAwesome done!"

# Bootstrap
echo " - Starting Bootstrap"
uncurl $BOOTSTRAP bs-archive
mv bs-archive/scss css/bootstrap
mv bs-archive/dist/js/bootstrap.min.js js/