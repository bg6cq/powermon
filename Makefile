all: readpwups readpwserver sendaprs

readpwups: readpwups.c
	gcc -g -o readpwups readpwups.c
readpwserver: readpwserver.c
	gcc -g -o readpwserver readpwserver.c

sendaprs: sendaprs.c
	gcc -g -o sendaprs sendaprs.c
