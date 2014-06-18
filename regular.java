import java.lang.* ;
import java.util.* ;
import java.io.* ;
public class regular
{
	public static void main(String[] args)
	{
		String str = "bhaskar 277" ;
		if(str.matches("\\w+\\s+\\d{3}"))
		System.out.println("match exists") ;
		else
		System.out.println("no match found") ;
	}
}
