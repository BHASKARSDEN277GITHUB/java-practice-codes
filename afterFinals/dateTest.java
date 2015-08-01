import java.util.*;
public class dateTest{

	public static void main(String[] args)
	{
		Date date = new Date();
		long day = date.getDate();
		long hour = date.getHours();
		long min = date.getMinutes();
		long sec = date.getSeconds();
		String time=day+":"+hour+":"+min+":"+sec ;
		System.out.println(time);
	}
}
	
		

