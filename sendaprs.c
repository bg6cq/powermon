#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <time.h>
#include <sys/types.h>
#include <sys/socket.h>
#include <arpa/inet.h>
#include <netinet/ip.h>
#include <netinet/tcp.h>
#include <linux/if.h>
#include <linux/if_ether.h>
#include <linux/if_packet.h>
#include "sock.h"
#include <ctype.h>

#define MAXLEN 16384

// #define DEBUG 1

#define PORT 14580

void sendudp(char*buf, int len, char *host, int port)
{
        struct sockaddr_in si_other;
        int s, slen=sizeof(si_other);
        int l;
#ifdef DEBUG
        fprintf(stderr,"send to %s,",host);
#endif
        if ((s=socket(AF_INET, SOCK_DGRAM, IPPROTO_UDP))==-1) {
                fprintf(stderr,"socket error");
                return;
        }
        memset((char *) &si_other, 0, sizeof(si_other));
        si_other.sin_family = AF_INET;
        si_other.sin_port = htons(port);
        if (inet_aton(host, &si_other.sin_addr)==0) {
                fprintf(stderr, "inet_aton() failed\n");
                close(s);
                return;
        }
        l = sendto(s, buf, len, 0, (const struct sockaddr *)&si_other, slen);
#ifdef DEBUG
        fprintf(stderr,"%d\n",l);
#endif
        close(s);
}

int main(int argc, char*argv[])
{
	FILE *fp;
	int len;
	char buf[MAXLEN];
	float temp, hum;
	fp=fopen("Utemp","r");
	fgets(buf,MAXLEN,fp);
	sscanf(buf,"%f",&temp);
	fclose(fp);
	fp=fopen("Uhum","r");
	fgets(buf,MAXLEN,fp);
	sscanf(buf,"%f",&hum);
	fclose(fp);
	len = snprintf(buf, MAXLEN, 
		"BG6CQ-13>WX51:=3150.59N/11716.04E_000/000g000t%03dr000p000h%02db00000USTC-AC-Room\r\n",
		(int)(temp*1.8+32), (int)(hum));
	fprintf(stderr,"%s",buf);
	sendudp(buf,len,"202.141.176.2",14580);
}
