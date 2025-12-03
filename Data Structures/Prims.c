#include <stdio.h>
#define INF 99
99
#define MAX 10
void prim(int G[MAX][MAX], int n)
{
    int selected[MAX] = {0}, no_edge = 0;
    int x, y;
    selected[0] = 1;
    printf("Edge : Weight\n");
    while(no_edge < n - 1)
    {
        int min = INF;
        x = y = 0;
        for(int i = 0;i < n; i++)
        {
            if(selected[i])
            {
                for(int j = 0;j < n; j++)
                {
                    if(!selected[j] && G[i][j])
                    {
                        if(min > G[i][j])
                        {
                            min = G[i][j];
                            x = i;
                            y = j;
                        }
                    }
                }
            }
        }
        printf("%d - %d : %d\n", x, y, G[x][y]);
        selected[y] = 1;
        no_edge++;
    }
}
int main()
{
    int n;
    int G[MAX][MAX];
    printf("Enter number of vertices: ");
    scanf("%d", &n);
    printf("Enter adjacency matrix: \n");
    for(int i = 0;i < n; i++)
        for(int j = 0;j < n; j++)
            scanf("%d", &G[i][j]);
    prim(G, n);
    return 0;
}
