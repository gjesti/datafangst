cat fields.txt |awk 'BEGIN {printf("CREATE TABLE IMDB_RAW (\n");}{printf("%s varchar(%s),\n",$1,$2+3)} END{printf(");\n")}' > create_table_imdb_raw.sql
