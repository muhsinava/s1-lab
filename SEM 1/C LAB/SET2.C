#include<stdio.h>
#include<conio.h>
void main(){
int setu[10],seta[10],setb[10],unionab[10],interab[10],diffab[10],diffba[10],i,j;
int flag;
int u[10]={1,2,3,4,5,6,7};
int a[10]={2,3,4};
int b[10]={3,4,5,6};
clrscr();
for(i=0;i<7;i++){
setu[i]=1;
}
printf("Universal Bit Set\n");
for(i=0;i<7;i++){
printf("%d",setu[i]);
}
//set a
for(i=0;i<7;i++){
flag=0;
for(j=0;j<7;j++){
if(u[i]==a[j]){
flag=1;
break;
}
}
if(flag==1)
seta[i]=1;
else
seta[i]=0;
}
printf("\nBit Set a\n");
for(i=0;i<7;i++){
printf("%d",seta[i]);
}
//set b
for(i=0;i<7;i++){
flag=0;
for(j=0;j<7;j++){
if(u[i]==b[j]){
flag=1;
break;
}
}
if(flag==1)
setb[i]=1;
else
setb[i]=0;
}
printf("\nBit set b\n");
for(i=0;i<7;i++){
printf("%d",setb[i]);
}
//union a and b
printf("\nUnion of a and b\n");
for(i=0;i<7;i++){
unionab[i]=seta[i]|setb[i];
printf("%d",unionab[i]);
}
//intersection a and b
printf("\nIntersection of a and b\n");
for(i=0;i<7;i++){
interab[i]=seta[i]&setb[i];
printf("%d",interab[i]);
}
//difference a-b

printf("\nDifference of a - b\n");
for(i=0;i<7;i++){
if(seta[i]==1 && setb[i]==0)
diffab[i]=1;
else
diffab[i]=0;
printf("%d",diffab[i]);
}
//difference b-a
printf("\nDifference of b-a\n");
for(i=0;i<7;i++){
if(setb[i]==1 && seta[i]==0)
diffba[i]=1;
else
diffba[i]=0;
printf("%d",diffba[i]);
}
getch();
}


