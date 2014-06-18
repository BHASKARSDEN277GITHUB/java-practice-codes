import java.util.regex.* ;
import java.lang.*;
import java.io.* ;

public class regex7
{
	public static void main(String[] args)
	{
	  Pattern p = Pattern.compile(".*\\d{0,2}@.*");
	  String str = "thakur.sushant@gmail.com";
	  Matcher m = p.matcher(str);
	  if(m.find())
		{
			System.out.println("pattern found");
		}
	  else
	{
		System.out.println("pattern not found ");
	}
	
	}
}
