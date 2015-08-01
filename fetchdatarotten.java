//for director name of superman_man_of_steel ..

import java.io.*;

import java.net.URL;
import java.net.URLConnection;
import java.util.regex.* ;
import java.util.* ;
import java.lang.* ;


public class fetchdatarotten
{
	public static void main(String[] args)
	{
		try{
		//to open the url connection .. and getting input stream .. 
		URL url = new URL("http://www.rottentomatoes.com/m/a_hijacking/") ;
		URLConnection newconec = url.openConnection() ;
		
		
		BufferedReader input = new BufferedReader(new InputStreamReader(newconec.getInputStream())) ;
		String str = " " ;
		boolean gotit = false ;
		
		File newfile = new File("get1.txt") ;
		newfile.createNewFile() ;
		
		FileOutputStream writer = new FileOutputStream(newfile) ;

		while((input.readLine())!=null)
		{
			str = " " ;
			
			str = input.readLine() + "\n" ;
			byte[] putme  = str.getBytes() ;
			writer.write(putme) ;
			//Matcher m1 = p1.matcher(str) ;
			//if(m1.find())
			//{
			//	gotit = true ;
			//}
		}
		writer.close() ;

		}

		
		catch(Exception e){}
	
		
	}
}


