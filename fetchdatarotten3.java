//for director name of superman_man_of_steel ..

package java.net ;
//import java.lang.Object.* ;
import java.util.* ;
import java.io.* ;
import java.util.regex.* ;
import java.net.URLConnection.* ;


public class fetchdatarotten3
{
	public static void main(String[] args)
	{
		 URL url = new URL("http://www.android.com/");
   HttpURLConnection urlConnection = (HttpURLConnection) url.openConnection();
   try {
     InputStream in = new BufferedInputStream(urlConnection.getInputStream());
     readStream(in);}
    finally {
     urlConnection.disconnect();
   }
 
		
		
	}
}
