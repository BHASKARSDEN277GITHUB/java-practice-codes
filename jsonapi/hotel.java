import java.lang.*;
import java.util.*;
import java.net.URL ;
import java.net.URLConnection ;
import java.io.*;


public class hotel
{
	public static void main(String[] args)
	{	try{
		URL url = new URL("http://api.wego.com/hotels");//bhaskarsden277 .. passwrd - onlinewala ..
		URLConnection newconec = url.openConnection();
		BufferedReader reader = new BufferedReader(new InputStreamReader(newconec.getInputStream()));
		String str ="" ;
		File store = new File("storejson.txt");
		store.createNewFile();
		FileOutputStream writer = new FileOutputStream(store);
		while(reader.readLine()!=null)
		{
			str = str+reader.readLine()+"\n";
			byte[] array = str.getBytes() ;
			writer.write(array);
			System.out.println(str);
		}				
	}
		catch(Exception e){}
	}
}

