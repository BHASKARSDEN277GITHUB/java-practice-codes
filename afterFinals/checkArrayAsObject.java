import java.lang.*;

public class checkArrayAsObject{

	public static void main(String[] args)
	{
		Object[] arrayObject = new Object[3];
		String[] str = new String[3];
//		arrayObject=str;
		str=arrayObject;
	}
}
