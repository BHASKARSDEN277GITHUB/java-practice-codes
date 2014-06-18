//for director name of superman_man_of_steel ..

package java.net ;
import java.lang.Object.* ;
import java.util.* ;
import java.io.* ;
import java.util.regex.* ;
import java.net.HttpURLConnection.*;


public class fetchdatarotten1
{
	public static class myhttp extends HttpURLConnection
	{
		myhttp(URL url)
		{
			super(url) ;
		}		
	}
	public static void main(String[] args)
	{
		URL url = new URL("http://www.rottentomatoes.com/m/superman_man_of_steel/") ;		
		myhttp newconec= new myhttp(url); //create http client refernce ..
		String request = newconec.getRequestMethod() ;
		newconec.setRequestMethod(request) ;
		String str = newconec.getResponseMessage() ;
		
		
		
	}
}
