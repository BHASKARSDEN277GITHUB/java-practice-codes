//for director name of superman_man_of_steel ..

import java.io.*;

import java.net.URL;
import java.net.URLConnection;
import java.util.regex.* ;
import java.util.* ;
import java.lang.* ;


public class newfetch
{
	public static void main(String[] args)
	{
		try{
		//to open the url connection .. and getting input stream .. 
		URL url = new URL("http://www.rottentomatoes.com/m/superman_man_of_steel/") ;
		URLConnection newconec = url.openConnection() ;
		
		
		BufferedReader input = new BufferedReader(new InputStreamReader(newconec.getInputStream())) ;
		String str = " " ;
		boolean gotit = false ;
		
		File newfile = new File("check1.txt") ;
		newfile.createNewFile() ;
		FileOutputStream writer = new FileOutputStream("check1.txt") ;
		while((input.readLine())!=null)
		{
					
			str = input.readLine()  ;
			byte[] putme  = str.getBytes() ;
			writer.write(putme) ;
						
		}
		
		//http code for director name line is <span itemprop="name">Zack Snyder</span> .. so split on  ' " '..
		File file1 = new File("check1.txt") ;
		Scanner input4 = new Scanner(file1);//.useDelimiter("\\s") ;
				
		Pattern p1 = Pattern.compile("<\\w+\\s\\w+=.\\w+.>\\w+\\s+\\w+</\\w+>") ;
                //String str = "<span itemprop=name>Zack Snyder</span>" ;
		int i =0;
		File file2= new File("put.txt") ;
		file2.createNewFile() ;
		FileOutputStream writer1 = new FileOutputStream(file2);
		while(input4.hasNext())
		{       i++ ;
			String str0 = input4.nextLine() ;
			Matcher m1 = p1.matcher(str0) ;
			if(m1.find())
			{//{System.out.println("pattern found\t" +m1.group(0)); System.out.println(i) ;} 
				String str2 = m1.group(0) + "\n"				;
				byte[] array1 = str2.getBytes() ;
				writer.write(array1) ;
			}
		
		}
		input.close() ;
		File abc = new File("put.txt") ;
		Scanner newinput = new Scanner(abc) ;
		String str3 = " " ;
		for(int j = 1;j<=5;j++)
		{
			str3 = newinput.nextLine() ; //System.out.println(str3) ;
			String[] fun = str3.split(">") ;
			String str4 = fun[1] ; //System.out.println(str4) ;
			String[] fun2 = str4.split("<") ;
			String str5 = fun2[0] ;			
			//System.out.println(str5) ;
			if(j==2)
			System.out.println("Director's name is : "+fun2[0]) ;
			else if(j>2)
			{System.out.print("caste "+(j-2)+"  is\t") ;
			System.out.println(fun2[0]) ;}
		}
		}
		catch(Exception e){}
	
		
	}
}
