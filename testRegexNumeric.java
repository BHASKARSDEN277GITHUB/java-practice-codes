import java.util.regex.*;

public class testRegexNumeric {

	public static void main(String[] args) {
		Pattern p = Pattern.compile("111\\d{5}");
		String s="11145678";
		Matcher m=p.matcher(s);
		if(m.find()) {
			System.out.println("okay");
		}else {
			System.out.println("Invalid Pattern");
		}

	}
}
