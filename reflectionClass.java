//reflectionClass

import java.util.regex.* ;
import java.lang.reflect.Method;

public class reflectionClass {

	public static void main(String[] arg)
	{
		Class object = Pattern.class;
		Method[] mArray=object.getMethods();
		int length=mArray.length ;
		while(length>0)
		{
			System.out.println(mArray[length-1].toString());
			length--;
		}
	}
}

