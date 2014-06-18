import java.lang.* ;
import java.util.regex.* ;
import java.io.* ;
import java.util.* ;

public class regular2
{
	public static void main(String[] args)
	{
		Scanner input = new Scanner(System.in);	
		String str = input.nextLine() ;
		Pattern p1 = Pattern.compile("@\\w+[.]\\w+") ;
		Matcher m1 = p1.matcher(str) ;
		int i = m1.groupCount() ;
		System.out.println(i) ;
		
		if(m1.find())
		{
			System.out.println("This is a valid email-id") ;
		}
		else
		System.out.println("Invalid email-id") ;
	}

}
		 
