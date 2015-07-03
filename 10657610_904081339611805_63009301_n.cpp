/* Autor: Pratik Budhathoki

	Program to print characters from a to z using ASCII values and while statement  */

#include <stdio.h>

int main()
{
	int i=65;
	
	while(i<91)
	{
		printf("\t%c\n",i);
		i++;
	}
}

/*   Can also do this   

	int i=65;
	
	while(i<=90)
	{
		printf("%c",i++);         First value of i is used and then increased
		
	}

*/
