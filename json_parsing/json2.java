import java.lang.* ;
import java.util.* ;
import java.io.* ;
//import org.json.simple.* ; 
import java.net.* ;

public class json2
{
	public static void main(String[] args)
	{
		try{
		
		URL url = new URL("http://www.omdbapi.com/?s=Titanic&r=JSON") ;
		
		
		URLConnection conec = url.openConnection() ;
		BufferedReader br = new BufferedReader(new InputStreamReader(conec.getInputStream()));
		//int i = conec.getResponseCode() ;
		String str = " " ;
		File file1 = new File("put1.txt") ;
		file1.createNewFile() ;
		FileOutputStream a = new FileOutputStream(file1) ;	
		while((br.readLine())!=null)
		{
		System.out.println(br.readLine());
		str = str + br.readLine() ;
		System.out.println(str) ;
		byte[] array = str.getBytes() ;
		a.write(array) ;			
		}
		}
		catch(Exception e){}
	}
}
