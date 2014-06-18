import java.io.* ;
import java.lang.* ;
import java.util.* ;

public class bufferfileread
{
	public static void main(String[] args)
	{	try{
		File f = new File("bufferfileread.java");
		BufferedReader b = new BufferedReader(f);
		while(b.readLine()){
		String str = b.readLine();
		System.out.println(str);
		}
		}
		catch(Exception e){}
	}
}
