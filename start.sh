#!/bin/bash

# Getting the optional bootstrap compile variable
BOOTSTRAP=${1:-bootstrap}

# A small script to "compile" all the work for the website
cd ${0%/*} # Go to this directory
sass css/bootstrap/$BOOTSTRAP.scss --style compressed > css/bootstrap.min.css # Sass -> CSS
jekyll serve || /usr/bin/python -m SimpleHTTPServer 4000 # Serve it
