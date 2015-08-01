import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.io.*;
import java.util.*;
import java.util.regex.Pattern;
import java.util.regex.Matcher;
public class HttpOMDB 
{
 
public static void main(String[] args) 
{
/*String MovieName;
String result="";
Scanner in=new Scanner(System.in);
System.out.println("Enter the movie:");
MovieName=in.nextLine();
MovieName=MovieName.replaceAll(" ","_");*/
       
  try 
   {
        
   String url = "http://www.omdbapi.com/?s=Star%20Wars&r=JSON";
   URL obj = new URL(url);
   HttpURLConnection conn = (HttpURLConnection) obj.openConnection();
   conn.setReadTimeout(10000);
   System.out.println("Request URL ... " + url);
   boolean redirect = false;
   int status = conn.getResponseCode();
    if (status != HttpURLConnection.HTTP_OK) 
     {
     if (status == HttpURLConnection.HTTP_MOVED_TEMP|| status == HttpURLConnection.HTTP_MOVED_PERM
				|| status == HttpURLConnection.HTTP_SEE_OTHER)
     redirect = true;
     }
     System.out.println("Response Code ... " + status);
     if (redirect) 
     {
     String newUrl = conn.getHeaderField("Location");
     System.out.println("Redirect to URL : " + newUrl);
     }	
  BufferedReader br = new BufferedReader(new InputStreamReader(conn.getInputStream()));
String line="";
while((line=br.readLine()) != null)
{
System.out.println(line);
}
        }
 
        catch (Exception e)
        {
	e.printStackTrace();
        }
 
  }
 
}
