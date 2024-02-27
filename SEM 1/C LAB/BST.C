#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
struct node
{
int data;
struct node *left,*right;
}
*root;

void insert(){
struct node *curr,*prev,*newnode;
int value;
printf("\nEnter the node value=");
scanf("%d",&value);
if(root==NULL)
{
root=malloc(sizeof(struct node));
root->data=value;
root->left=NULL;
root->right=NULL;
printf("Node Inserted %d",value);
}
else{
newnode=malloc(sizeof(struct node));
newnode->data=value;
newnode->left=NULL;
newnode->right=NULL;
curr=root;
while(curr!=NULL)
{
prev=curr;
if(curr->data<=value)
{
curr=curr->right;
}
else{
curr=curr->left;
}
}
if(prev->data<=value)
{
prev->right=newnode;
}
else
{
prev->left=newnode;
}
printf("Node inserted %d",value);
}
}

void inorder(struct node *root)
{
if(root==NULL)
return;
else
{
inorder(root->left);
printf("%d\t",root->data);
inorder(root->right);
}
}

void postorder(struct node *root)
{
if(root==NULL)
return;
else
{
postorder(root->left) ;
postorder(root->right);
printf("%d\t",root->data);
}
}

void preorder(struct node *root)
{
if(root==NULL)
return;
else
{
printf("%d\t",root->data);
preorder(root->left);
preorder(root->right);
}
}

void search()
{
struct node *curr;
int value,flag=0;
printf("\nEnter the node to be searched=");
scanf("%d",&value);
if(root==NULL)
{
printf("Tree Empty");
}
else{
curr=root;
while(curr!=NULL)
{
if(curr->data==value)
{
printf("\nNode %d Found\n",value);
flag=1;
return;
}
else if(curr->data<value)
{
curr=curr->right;
}
else
{
curr=curr->left;
}
}
if (flag==0)
printf("Node not Found");
}
}

void main(){
int ch,value;
clrscr();
do{
printf("\n1.INSERT\n2.SEARCH\n3.PREORDER\n4.POSTORDER\n5.INORDER\n6.EXIT\nEnter your Choice=");
scanf("%d",&ch);
switch(ch)
{
case 1:
insert();
continue;
case 2:
search();
continue;
case 3:
printf("The inorder Traversal is ");
inorder(root);
continue;
case 4:
printf("The post order traversal is ");
postorder(root);
continue;
case 5:
printf("The preorder traversal is ");
preorder(root);
continue;
default:
exit(0);
}
}
while(ch!=0);

getch();
}