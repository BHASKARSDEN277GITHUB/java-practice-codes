import java.util.* ;
import java.io.* ;
public class kthsmallest
{
	public static void main(String[] args) throws IOException
	{
		int[] array1 = new int[5] ;
		int[] array2 = new int[5] ;
		BufferedReader input = new BufferedReader(new InputStreamReader(System.in)) ;
		System.out.println("Enter first sorted array(5 elements)") ;
		for(int i=0;i<5;i++)
		{
			array1[i] = Integer.parseInt(input.readLine());
		}
		
		System.out.println("Enter second sorted array(5 elements)") ;
		for(int i=0;i<5;i++)
		{
			array2[i] = Integer.parseInt(input.readLine());
		}	
		int k ;
		System.out.println("Enter which smallest element to be searched ? ");
		k= Integer.parseInt(input.readLine()) ;		
		int current_smallest=0 ;
		int index1 = 0,index2=0 ;			
		for(int j=0;j<k;j++)
		{
			if(array1[index1]<array2[index2])
			{ 	current_smallest = array1[index1] ;
			  	index1++ ;
			}
			else
			{
				current_smallest = array2[index2];
				index2++ ;
			}
		}
		int smallest = current_smallest ;
		System.out.println("The required smallest element is : "+smallest) ;

	}
} 


	

