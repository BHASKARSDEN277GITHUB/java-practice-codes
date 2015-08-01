import java.lang.* ;
import java.util.* ;
import java.io.* ;

public class hasmap2
{
	public static void main(String[] args) throws IOException
	{
		HashMap<Integer,String> map1 = new HashMap<Integer,String>(32) ;
		String input ;
		Integer key_size ;
		Integer value_size ;
		Integer choice ;
		Integer key =0;
		String value ; //StringBuilder should be used here..
		String v ;
		String[] splits = new String[2] ;
		BufferedReader var = new BufferedReader(new InputStreamReader(System.in)) ;
		System.out.println("Enter your choice to procees further : \n 1  To Enter value in hashmap \n 2  To get value\n3  To Exit\n") ;
		 choice = Integer.parseInt(var.readLine()) ;
		while(choice!=3)
		{
			switch(choice)
			{
				case 1 :
				System.out.println("Enter key,value pair :\t") ;
				input = var.readLine() ;
				splits = input.split(",") ;
				key_size = splits[0].length() ;
				//value_size = splits[1].length() ;
				value = splits[1];				
				v=splits[0];
				key = 0 ;
				for(int i =0;i<key_size;i++)
				{
					key = key*10 +  v.charAt(i) -48 ;
				}
				//System.out.println(key) ;
				//System.out.println(value) ;
				map1.put(key,value);
				//map1.put(1,"bha");
				//System.out.println(map1.get(1));
				break ;

				case 2 :
				System.out.println("Enter key : \t");
    				key = Integer.parseInt(var.readLine());				
				value = map1.get(key);
				System.out.println(value) ;
				break ;
				
				default :
				System.out.println("Enter valid choice :") ;
			}
			System.out.println("Enter your choice to procees further : \n 1  To Enter value in hashmap \n 2  To get value\n3  To Exit\n") ;
		 choice = Integer.parseInt(var.readLine()) ;
		}
	
	}
}	

