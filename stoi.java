import java.lang.* ;
import java.util.* ;

public class stoi
{
	public static void main(String[] args)


	{
		String str = "123";
		int numvalue =0 ;
		for(int i=0;i<str.length();i++)
		{
			numvalue = numvalue*10+str.charAt(i)-48;
		}
		System.out.println(numvalue);
	}
}
