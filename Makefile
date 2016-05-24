all: readpw sendaprs

readpw: readpw.c
	gcc -g -o readpw readpw.c

sendaprs: sendaprs.c
	gcc -g -o sendaprs sendaprs.c
