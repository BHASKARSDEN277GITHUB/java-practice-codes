import java.lang.* ;
import java.util.* ;

public class itos
{
	public static void main(String[] args)


	{
		int[] j ={1,2,3} ;
		String str ="" ;
		for(int i=0;i<j.length;i++)
		{
			str=str+j[i] ;
		}
		System.out.println(str) ;
		System.out.println(str.length());
		int numvalue =0 ;
		for(int i=0;i<str.length();i++)
		{
			numvalue = numvalue*10+str.charAt(i)-48;
		}
		System.out.println(numvalue);
	}
}
