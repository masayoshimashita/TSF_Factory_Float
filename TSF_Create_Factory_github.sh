#!/bin/sh
Today=`update for date +"%y/%m/%d %H:%I:%S"`;
Today="Update for"$Today
#git add * ;
git commit -a -m $Today ;
git push github master;