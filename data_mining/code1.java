import java.lang.* ;
import java.util.* ;
import java.io.* ;
import java.net.* ;
public class code1
{	
	public static void main(String[] args)
	{
	try{
	URL facebook_home = new URL("https://www.facebook.com/") ;
	File file1 = new File("facebook_home_page.txt") ;
	file1.createNewFile() ;
	URLConnection newconnection = facebook_home.openConnection() ;
	//String str = (String) newconnection.getContent() ;
	//System.out.println(str) ;	
	BufferedReader reader = new BufferedReader(new InputStreamReader(newconnection.getInputStream())) ;
	FileOutputStream writer = new FileOutputStream(file1) ;
	while((reader.readLine())!=null)
	{
		String str = reader.readLine() + "\n"  ;
		byte[] putme = str.getBytes() ;
		writer.write(putme) ;
		
	}
	
	
	Scanner reader1 = new Scanner(file1) ;
	while(reader1.hasNext())
	{
		System.out.println(reader1.nextLine()) ;
	}
	}
	catch(Exception e){} 

	}
}
