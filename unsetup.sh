#!/bin/bash

# This removes everything that the setup script writes.
# DON'T RUN THIS UNLESS YOU HAVE A RELATIVELY INTIMATE
# KNOWLEDGE OF HOW BASH WORKS.

bye(){
	rm -r $1 &> /dev/null
}

bye js/jquery.min.js
bye js/tether.min.js

bye fa-archive
bye fa-archive.zip
bye css/font-awesome.min.css
bye fonts

bye bs-archive
bye bs-archive.zip
bye css/bootstrap
bye js/bootstrap.min.js

bye temp.zip
bye font-awesome-4.7.0
bye bootstrap-4.0.0-alpha.5