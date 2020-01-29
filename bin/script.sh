#!/bin/bash

echo qual o diretorio?

read DIRECTORY

echo $(find /home/$(whoami)/$DIRECTORY/ -type d -exec chmod 755 {} \; && find /home/$(whoami)/$DIRECTORY/ -type f -exec chmod 644 {} \; && find /home/$(whoami)/$DIRECTORY/ -name wkhtmltopdf* -exec chmod 755 {} \; && find /home/$(whoami)/$DIRECTORY/ -name phantomjs* -exec chmod 755 {} \; && find /home/$(whoami)/$DIRECTORY/ -name zend* -exec chmod 755 {} \; && find /home/$(whoami)/$DIRECTORY/ -name 7za* -exec chmod 755 {} \; && find /home/$(whoami)/$DIRECTORY/ -name qpdf-linux-amd64* -exec chmod 755 {} \;)