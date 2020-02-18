#!/bin/bash

echo "[=>                           ] 0%"

find /home/$(whoami)/$total_directory/ -type d -exec chmod 755 {} \;

echo "[====>                        ] 15%"

find /home/$(whoami)/$total_directory/ -type f -exec chmod 644 {} \;

echo "[========>                    ] 30%"

find /home/$(whoami)/$total_directory/ -name wkhtmltopdf* -exec chmod 755 {} \;

echo "[============>                ] 45%"

find /home/$(whoami)/$total_directory/ -name phantomjs* -exec chmod 755 {} \;

echo "[================>            ] 60%"

find /home/$(whoami)/$total_directory/ -name zend* -exec chmod 755 {} \;

echo "[====================>        ] 75%"

find /home/$(whoami)/$total_directory/ -name 7za* -exec chmod 755 {} \;

echo "[========================>    ] 90%"

find /home/$(whoami)/$total_directory/ -name qpdf-linux-amd64* -exec chmod 755 {} \;

echo "[============================>] 100%"