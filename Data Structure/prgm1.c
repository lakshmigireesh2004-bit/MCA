 #include<stdio.h>
 int main()
 {
 int a[100],n,i,data,pos;
 printf("enter the length\n");
 scanf("%d",&n);
 printf("enter the array\n");
 for(i=0;i<n;i++)
 scanf("%d",&a[i]);
 printf("enter data for insertion");
 scanf("%d",&data);
 printf("enter the position");
 scanf("%d",&pos);
for(i=n-1;i>=pos-1;i--)
 {
 a[i+1]=a[i];
 }
 a[pos-1]=data;
 n++;
 printf("inserted data is\n");
 for(i=0;i<n;i++)
 printf("%d ",a[i]);
 return 0;
 }
