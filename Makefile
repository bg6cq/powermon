all: readpw

readpw: readpw.c
	gcc -g -o readpw readpw.c

