import java.io.* ;
import java.lang.* ;
import java.util.* ;

public class writetofile
{
	public static void main(String[] args)
	{
		try{
		File destination = new File("linked_list_documentation.txt") ;
		destination.createNewFile() ;
		File source = new File("/","sd.txt") ;
		FileOutputStream writer = new FileOutputStream(destination) ;	
		String str = " "	 ;
		Scanner input = new Scanner(source) ;
		String str1 = " " ;
		while(input.hasNext())
		{
			str = input.nextLine() + "\n" ;
			byte[] bytearray = str.getBytes() ;
			writer.write(bytearray);
		}
		File newsource = new File("linked_list_documentation.txt") ;
		input.close() ;
		Scanner input1 = new Scanner(newsource) ;
		while(input1.hasNext())		
		{			
			str = str + input.nextLine() + "\n" ;		
			
		}
		
		System.out.println(str) ;
		}
		catch(Exception e){} ;
	}

}
