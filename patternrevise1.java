import java.util.* ;
import java.util.regex.* ;
import java.io.* ;

public class patternrevise1 {
	public static void main(String args[])
	{
		Pattern p = Pattern.compile("\\d{0,3}.\\d{0,3}.\\d{0,3}.\\d{0,3}");
		String str = "172.16.28.11" ;
		Matcher m1 = p.matcher(str);
		if(m1.find())
		{
			System.out.println("pattern found " +str);
		}
		else
		{
			System.out.println("pattern not found");
		}
	}
}
