import java.util.* ;
import java.util.regex.* ;
import java.io.* ;
import java.lang.* ;

public class regex6
{
	public static void main(String[] args)
	{	try{
		File source = new File("check.txt") ;
		Scanner sc = new Scanner(source).useDelimiter("\\n") ;
		String str = " " ;
		Pattern p1 = Pattern.compile("<\\w+\\s\\w+=\\w+>\\w+\\s+\\w+</\\w+>") ;

		boolean gotit = false ;
		while(sc.hasNext() && !gotit)
		{
			str = sc.nextLine() ;
			System.out.println(str) ;
			Matcher m1 = p1.matcher(str) ;
			if(m1.find())
			{
				gotit = true ;
			}
		}
		
		if(gotit)
		{
			String[] strarray = str.split("=") ;
			str = strarray[1] ;
			strarray = str.split(">") ; //second split ..
			
			System.out.println("Director name is : "+strarray[0].substring(1,strarray[0].length()-1)) ;
		}
		else
		System.out.println("No match foound ..") ;

		}


		catch(Exception e){}

	}
}
