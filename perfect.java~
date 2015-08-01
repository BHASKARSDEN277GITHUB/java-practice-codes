import java.io.* ;
public class perfect {
	public static void main(String[] args) throws IOException
	{
		int i =1 ; int sum = 0 ; int perfects=-1 ;
		BufferedReader varint = new BufferedReader(new InputStreamReader(System.in)) ;
		Integer num = Integer.parseInt(varint.readLine()) ;
		if(num==0){
			perfects = 0 ; 
		}
		
		while(sum<num)
		{       
			sum = 0 ;
			for(int j =1;j<=i;j++)
    			{
				sum = sum + i ;
			}
			if(sum==num){
				perfects = i ;
			}
			 
			i++;
		}

		if(perfects==-1)
		{
			System.out.println("Perfect square for number does not exist..") ;
		}

		else
		System.out.println("The perfect Square for number is : "+perfects) ;


	}
}
		
		


