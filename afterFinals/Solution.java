import java.io.*;
import java.util.*;
public class Solution{
	
	public static void main(String[] args) throws IOException
	{
		String inputString ;
		BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));
		int t ; //test cases ..
		t=Integer.parseInt(reader.readLine());
		while(t>0)
		{
			inputString=reader.readLine();
			if(isPalindrome(inputString))
			System.out.println("0");
			else
			{
				StringBuilder str = new StringBuilder(inputString);
				makePalindrome(str);
			}
	
			t--;
		}
	}
	
	static boolean isPalindrome(String str)
	{
		String str2 ="";
		
		for(int i=str.length()-1;i>=0;i--)
		{
			str2=str2+str.charAt(i);
		}
		
		if(str2.equals(str))
		return true ;
		else
		return false;
	}
			
	static void makePalindrome(StringBuilder str)
	{
		int length=str.length();
		int i , j ; //two pointer from start and from end of two strings ..
		int nOp=0;//number of operations to make it a palindrome ..
		
		i=0;
		j=length-1;
	
		while(i<j)
		{
			if(str.charAt(i)!=str.charAt(j))
			{
				if(str.charAt(j)>str.charAt(i))
				{
				while(str.charAt(j)!=str.charAt(i))
				{
					char a=str.charAt(j);
					a--;
					str.setCharAt(j,a);
					nOp++; //counting operations here .. 
				}
				}
				else
								{
				while(str.charAt(j)!=str.charAt(i))
				{
					char a=str.charAt(i);
					a--;
					str.setCharAt(i,a);
					nOp++; //counting operations here .. 
				}
				}
			}
			i++;
			j--;
		}
		System.out.println(nOp);
		
	}
	
}
	
