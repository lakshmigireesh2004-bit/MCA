#include<stdio.h>
#define MAX 10
int parent[MAX];
int n;
void makeSet()
{
  int i;
  printf("Enter number of elements:");
  scanf("%d",&n);
  for(i=0;i<n;i++)
  {
    parent[i] = i;
  }
  printf("Disjoint sets created successfully!\n");
}

int find(int x)
{
  if(parent[x]!=x)
  parent[x]=find(parent[x]);
  return parent[x];
}

void unionSets(int x,int y)
{
  int rootX = find(x);
  int rootY = find(y);

  if(rootX == rootY)
    printf("Elements %d and %d are already in the same set.\n",x,y);
  else
  {
    parent[rootY] = rootX;
    printf("Union done between %d and %d \n",x,y);
  }
}
void display()
{
}
