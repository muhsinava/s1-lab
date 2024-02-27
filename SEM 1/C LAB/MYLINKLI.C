#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
int n;
struct node{
int data;
struct node *next;
}
*head;

void create(){
struct node *curr,*newnode;
int d,i;
printf("Enter value for 1st node=");
scanf("%d",&d);

head=malloc(sizeof(struct node));
head->data=d;
head->next=NULL;

curr=head;

for(i=1;i<n;i++){
printf("Enter value for %d node=",i+1);
scanf("%d",&d);
newnode=malloc(sizeof(struct node));
newnode->data=d;
newnode->next=NULL;

curr->next=newnode;
curr=newnode;
}
}
void display(){
struct node *curr;
if(head==NULL)
printf("List Empty\n");
else{
curr=head;
while(curr!=NULL){
printf("%d\t",curr->data);
curr=curr->next;
}
}
}
void search(){
struct node *curr;
int s,i;
if(head==NULL)
printf("List Empty");
printf("\nEnter the value to be searched=");
scanf("%d",&s);
curr=head;
for(i=0;i<n;i++){
if(s==curr->data){
printf("%d found at %d position",s,i+1);
return;
}
curr=curr->next;
}
printf("Element not Found");
}
void insert(){
struct node *curr,*newnode;
int pos,i,item;
printf("\nEnter the position to be inserted\n");
scanf("%d",&pos);
if(pos<0||pos>n+1)
printf("Invalid position");
else{
n++;
printf("\nEnter the value to be inserted=");
scanf("%d",item);
newnode=malloc(sizeof(struct node));
newnode->data=item;
if(pos==1){
newnode->next=head;
head=newnode;
}
else{
curr=head;
for(i=1;i<pos-1;i++){
curr=curr->next;
}
newnode->next=curr->next;
curr->next=newnode;
}
}
}
void deletion(){
struct node *curr,*temp;
int pos,i;
printf("\nEnter position to be deleted=");
scanf("%d",&pos);
if(head==NULL)
printf("List Empty");
else if(pos<0||pos>n)
printf("Invalid position");
else{
n--;
if(pos==1){
temp=head;
head=head->next;
printf("\n%d is deleted from position 1\n",temp->data);
free(temp);
}
else{
curr=head;
for(i=1;i<pos-1;i++) {
curr=curr->next;
}
temp=curr->next;
curr->next=temp->next;
printf("\n%d is deleted fom position %d\n",temp->data,i);
free(temp);
}
}
}
void main(){
clrscr();
printf("Enter the limit=");
scanf("%d",&n);
create(n);
display();
search();
deletion(n);
display();
getch();
}
