import java.lang.* ;
import java.util.regex.* ;
import java.io.* ;

public class pattern
{
	public static void main(String[] args)
	{
		String str = "bhaskar_277" ;
		Pattern p1 = Pattern.compile("277") ;
		Matcher m1 = p1.matcher(str) ;
		
		if(m1.find())
		System.out.println("pattern found") ;
		else
		System.out.println("no match found") ;

	}
};
