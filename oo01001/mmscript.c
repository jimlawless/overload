// mmscript
// mmscript sends input text to the Media Control Interface
// in Windows
//
// License: MIT / X11
// Copyright (c) 2025 by James K. Lawless
// jimbo@radiks.net  https://jimlawless.net
//
// To build, use the following MinGW command:
//    gcc  mmscript.c -lwinmm   -o mmscript.exe

#include <windows.h>
#include <stdio.h>
#include <string.h>

void sendCommand(char *);

int main(int argc,char **argv) {
    char cmdBuff[MAX_PATH + 64];
    
    printf("mmscript v0.01\n");
    printf("Type ! as the first character in a line to end.\n");
    printf("Waiting for input.\n\n"); 
    while(fgets(cmdBuff,((MAX_PATH+64)-2),stdin)!=NULL) {
        if(*cmdBuff=='#')
            continue;
        if(*cmdBuff=='!')
            break;
        if(*cmdBuff) 
            cmdBuff[strlen(cmdBuff)-1]=0;
        if(!*cmdBuff)
            continue;
        sendCommand(cmdBuff);
    }
    return 0;
}
    // Send a string to the Media Control Interface
void sendCommand(char *s) {
    int i;
    printf("String: %s\n",s);
    i=mciSendString(s,NULL,0,0);
    if(i) {
        fprintf(stderr,"Error %d\n",i);
   }
}
