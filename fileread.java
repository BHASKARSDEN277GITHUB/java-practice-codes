import java.util.* ;
import java.lang.* ;
import java.io.* ;

public class fileread
{
	public static void main(String[] args)
	{
		try{
		File destination = new File("checkme.txt") ;
		destination.createNewFile() ;
		File source = new File("testshell3.java") ;
		Scanner readfile = new Scanner(System.in).useDelimiter("\\s") ;
		long length ;
		length = source.length() ;//returns no of characters in the file ..
		//System.out.println(length) ;		
		
		String str ="" ;
		//int i = 0;
		while(readfile.hasNextLine())
		{
			
			str=str + "\n" + readfile.nextLine() ; 
			System.out.println(str) ;
		}
		}
		catch(Exception e)
		{
		}
	}
}
