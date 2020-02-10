#!/bin/bash

DIRECTORY= $(cat path_d.txt)

echo "[=>                           ] 0%"
echo $(find /home/$(whoami)/$DIRECTORY/ -type d -exec chmod 755 {} \;)
echo "[====>                        ] 15%"
echo $(find /home/$(whoami)/$DIRECTORY/ -type f -exec chmod 644 {} \;)
echo "[========>                    ] 30%"
echo $(find /home/$(whoami)/$DIRECTORY/ -name wkhtmltopdf* -exec chmod 755 {} \;)
echo "[============>                ] 45%"
echo $(find /home/$(whoami)/$DIRECTORY/ -name phantomjs* -exec chmod 755 {} \;)
echo "[================>            ] 60%"
echo $(find /home/$(whoami)/$DIRECTORY/ -name zend* -exec chmod 755 {} \;)
echo "[====================>        ] 75%"
echo $(find /home/$(whoami)/$DIRECTORY/ -name 7za* -exec chmod 755 {} \;)
echo "[========================>    ] 90%"
echo $(find /home/$(whoami)/$DIRECTORY/ -name qpdf-linux-amd64* -exec chmod 755 {} \;)
echo "[============================>] 100%"