#!/bin/bash


IMDBIdList=/tmp/__IMDBIdList.txt
IMDBId=/tmp/__imdbid
IMDBRecords=/tmp/__imdb_records.sql

sqlcmd -S 10.21.93.25 -U reporting -P reporting << %%% | grep "^tt" > $IMDBIdList
use torsdagskino
go

select imdbid from imdbkey
go
%%%


cat > $IMDBRecords << %%%
INSERT INTO IMDB_RAW 
(
ID, Budget, Country, Director, Genre, Language, Metascore, Movie, Plot, Poster, 
Production, Rated, Rating, Released, Runtime, Stars, Votes, Writers, Year
)
VALUES
%%%

for id in `cat $IMDBIdList`;
do
 echo $id > $IMDBId
 php imdbimport.php >> $IMDBRecords
done

echo ";" >> $IMDBRecords
