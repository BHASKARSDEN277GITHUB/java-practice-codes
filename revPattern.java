import java.lang.*;
import java.util.regex.*;
import java.io.*;

public class revPattern {

	public static void main(String[] args) {
		String str=args[0];
		Pattern p=Pattern.compile("w*");
		Matcher m=p.matcher(str);
		if(m.find()) {
			System.out.println("Found");
		}
	}
}
