#!/bin/bash

echo $(cd .. && cd file && cat path.txt)
echo $(openssl enc -aes-256-cbc -d -in path.txt -out path_d.txt)