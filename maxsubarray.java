public class maxsubarray
{
public static void main(String[] args)
{
int[] array = {-3,1,2,-5,6,-2,4}; 
int i,j=0 ;
int[] subarray = new int[10] ;
int sum = 0 ;
for(i=0;i<array.length;i++)
{
sum = sum+array[i] ;
subarray[j] = array[i] ;
if(sum<0)
{
sum=0;
for(int l = 0; l<=j;l++)
{subarray[j]=0;}
j=0 ;
}
else
j++ ;

}

System.out.println("The max subarray sum is :" + sum) ;
System.out.println("The max subarray is :");
for(int k = 0;k<j;k++)
{
System.out.println(+subarray[k]);
}
}
}

