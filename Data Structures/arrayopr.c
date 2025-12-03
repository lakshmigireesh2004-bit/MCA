#include<stdio.h>
int main()
{
int a[100],n,i,pos,value,ch;
printf("Enter number of elements: \n");
 scanf("%d",&n);
 printf("Enter %d elements:\n",n);
 for(i=0;i<n;i++)
  scanf("%d", &a[i]);
 while(1)
 {
   printf("\n---Array Operations---\n");
   printf("1.Insert an element\n");
   printf("2.Delete an element\n");
   printf("3.Dispaly elements\n");
   printf("4.Exit\n");
   printf("Enter your choice:");
   scanf("%d",&ch);
   switch(ch)
   {
    case 1:
            printf("Enter position to insert (1 to %d):",n+1);
            scanf("%d",&pos);
            if(pos<1|| pos>n+1)
            {
              printf("Invalid position!\n");
              break;
            }
            printf("Enter value to insert: ");
            scanf("%d",&value);
            for(i=n-1;i>=pos-1;i--)
               a[i+1]=a[i];
            a[pos - 1] = value;
            n++;
            printf("Element inserted successfully!\n");
            break;

   }
 }
}
