import java.util.* ;
import java.util.regex.* ;
import java.io.* ;

public class regular4
{
	public static void main(String[] args)
	{
		int i = 0 ;
		Pattern p1 = Pattern.compile("\\d+") ;
                String str = "0 1 2 3 4 5 6 7 89" ;
		Matcher m1 = p1.matcher(str) ;
		if(m1.find())
		System.out.println("pattern found\t");
		else
		System.out.println("No match found") ;
		// to print all matches .. :)
		String[] strarray = str.split("\\s+") ;
		for(i=0 ;i<strarray.length;i++)
		{
			System.out.print(strarray[i]+"\n");
		}


	}
}

