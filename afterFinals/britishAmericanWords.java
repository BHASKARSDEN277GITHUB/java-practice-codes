import java.io.*;
import java.util.*;

public class britishAmericanWords {
	
	public static void main(String[] args) throws IOException
	{
		int N ; //number of lines ..
		BufferedReader reader = new BufferedReader(new InputStreamReader(System.in));
		N=Integer.parseInt(reader.readLine());// reading input N  ..
		String[] lines = new String[N]; // creating array (String) to store input lines  ..
		
		//reading the lines ..
		for(int i=0;i<N;i++)
		{
			lines[i]=reader.readLine();
		}
		
		int T ; //number of test cases .. 
		String testCase="";
		String checkBritish="";
		String checkAmerican="";
	
		int length ; //length of testCase ..
	
		T=Integer.parseInt(reader.readLine()); //reading the test cases number ..
//		System.out.println(T);	
		while(T-- > 0)
		{
			testCase=reader.readLine(); //reading the testcase ..
			length=testCase.length();
			checkBritish=testCase.substring(0,length-2)+"se";
			checkAmerican=testCase;
//			System.out.println("biritsh :"+checkBritish+"   american :"+checkAmerican);
			int count=0;
			for(int i=0;i<N;i++) //for each line ( in N lines)..
			{
				String[] split=lines[i].split(" "); //split the line on space ..
				for(int j=0;j<split.length;j++) // for each word in the line ..
				{
					System.out.println("comparing " + split[i]);
					if(split[j].equals(checkBritish)||split[j].equals(checkAmerican)) //check for british variants and same word as testcase ..
					{
						count++;
					}
				}
			}
				
			System.out.println(count);
		}




	} //main close ..
}//class close ..		

		
	

		
