import java.util.* ;
import java.util.regex.* ;
import java.io.* ;

public class directorpattern
{
	public static void main(String[] args)
	{
		Pattern p1 = Pattern.compile("<\\w+\\s\\w+=\\W\\w+\\W>\\w+\\s+\\w+</\\w+>") ;
                String str = "<span itemprop=name>Zack Snyder</span>" ;
		Matcher m1 = p1.matcher(str) ;
		if(m1.find())
		System.out.println("pattern found\t" +str);
		else
		System.out.println("No match found") ;

	}
}

