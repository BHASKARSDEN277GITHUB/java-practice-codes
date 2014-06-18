import java.util.* ;
import java.util.regex.* ;
import java.io.* ;

public class regular5
{
	public static void main(String[] args)
	{
		try{	
		int i = 0 ;
		Pattern p1 = Pattern.compile("\\d+") ;
                String str = " 1 2 3 4 5 6 7 89" ;
		Matcher m1 = p1.matcher(str) ;
		if(m1.find())
		{System.out.println("pattern found\t");
		System.out.println(m1.group(0)) ;}
		else
		System.out.println("No match found") ;
		
		System.out.println(m1.group(str)) ;
		}
		
		catch(Exception e){}

	}
}

