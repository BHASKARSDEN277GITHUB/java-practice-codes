import java.util.*;
import java.util.regex.* ;
import java.io.* ;

public class patternrevise{

public static void main(String args[]){
	Pattern p = Pattern.compile(".+@.+");
	String str = "bhaskar_kalia_277@yahoo.in" ;
	Matcher m1 = p.matcher(str);
	if(m1.find())
	{
		System.out.println("pattern found" +str);
	}
	else
	System.out.println("pattern not found");
}
}

