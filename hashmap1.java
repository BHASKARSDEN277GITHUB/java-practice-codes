import java.lang.* ;
import java.util.* ; 

public class hashmap1
{
	public static void main(String[] args)
	{
		HashMap<Integer,String> mapping= new HashMap<Integer,String>(10);
		int key ;
		String value ;
		mapping.put(1,"bhaskar");
		value = mapping.get(1) ;

		System.out.println(value) ;
	}
}
