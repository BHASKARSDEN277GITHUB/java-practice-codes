import java.util.* ;
import java.lang.* ;
import java.io.* ;

public class testshell
{
	public static class myshell
	{
		private static String command ; //to store the command ..
		BufferedReader input = new BufferedReader(new InputStreamReader(System.in)) ; //to get the input from console ..
		
		//constructor , no arguments ..
		private myshell()
		{
			System.out.print("myshell >") ;
		}
		
	}
}
		 
