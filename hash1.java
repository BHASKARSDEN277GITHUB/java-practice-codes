import java.util.* ;
import java.lang.* ;
import java.io.* ;
import java.util.regex.* ;

public class hash1
{
	public static void main(String[] args)
	{	try{
		HashMap<Integer,String> facnt = new HashMap<Integer,String>(100) ;
		Scanner input = new Scanner(System.in);
		System.out.println("Enter total number of students") ;
		int n  ;
		n = input.nextInt() ;
		//System.out.println("Enter the roll number and fees to be deposited(roll number , first name)");
		String str ="" ;
		Pattern checkinput = Pattern.compile("\\d{5},\\w*");
		
		/*String str1 = "kaia,klsaf";
		String[] a = str1.split(",");
		System.out.println(a[0]);*/
		System.out.println("Enter Roll Number , Name \t");
		while(n>0)
		{	
			
			str = input.nextLine() ;
			Matcher m1 = checkinput.matcher(str);					
			if(m1.find())
			{
			String[] s = str.split(",");
			
			Integer key = Integer.parseInt(s[0]);
			String value = s[1];
			facnt.put(key,value);
			//System.out.println((String)facnt.get(11510));
			n--;
			}
			else
			{
			//System.out.println("Invalid Format");
			}
			
		}
		}
		catch(Exception e){}	
	

	}
}
