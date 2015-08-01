import java.lang.* ;
import java.io.* ;
import java.net.* ;
import java.util.* ;

import org.json.simple.parser.JSONParser ;
import java.io.FileReader ;

import org.json.simple.JSONObject ;
import org.json.simple.JSONArray ;
public class json1 
{
	public static void main(String[] args)
	{
		try{
		JSONParser parser = new JSONParser() ;
		JSONArray array1 = (JSONArray) parser.parse(new FileReader("file.json")) ;
		//JSONArray array1 = (JSONArray) obj1 ;
		for(int i = 0 ;i<array1.size();i++)
		{
			JSONObject object = (JSONObject) array1.get(i) ;
			System.out.println(object.get("name")) ;
			System.out.println(object.get("city")) ;
			System.out.println(object.get("job")) ;
			JSONArray array2 = (JSONArray) object.get("cars") ;
			for(int j =0;j<array2.size() ;j++)
			{
				System.out.println(array2.get(j));
			}
		}
		}
		catch(Exception e){}

	}
}			

