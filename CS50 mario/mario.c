#include <stdio.h>

int main(void){
    int b = 0;
    printf("Height: ");
    scanf("%d", &b);
    while(b < 1){
        printf("Height: ");
        return scanf("%d", &b);
    }
    for (int i = 0; i < b; i++){
        for (int j = 0; j < b; j++){
            if (j < b - i - 1){
                printf(" ");
            }
            else{
                printf("#");
            }
        }
        printf("\n");
    }
}











