import java.util.* ;
import java.lang.* ;
import java.io.* ;

public class testshell
{
	public static class myshell 
	{
		private static String command ; //to store the command ..
		BufferedReader input = new BufferedReader(new InputStreamReader(System.in)) ; //to get the input from console ..
		private static String current_directory_path ="/" ;
		
		String getlist ;
		File[] filelist ;
		private static final String prefix =  "myshell" ;
		public static String shellname =  prefix+ "-"+ current_directory_path + ">" ; //prefix = myshell constant .. and suffix will vary depending upon deirectory name ..
		//constructor , no arguments ..
		private myshell()
		{
		//System.out.print(this.shellname) ;	
			
		}
		
		//to read input command ..
		public void GetCommand() throws IOException
		{
			this.command = input.readLine();
		}
		//to check command ..
		public void CheckCommand() throws IOException
		{
			if(this.command.equals(""))
			{//System.out.print("myshell >") ;			
			this.GetCommand() ;}
			
			else if (this.command.equals("ls"))
			List() ;
			
			else if(this.command.equals("cd"))
			basedirectory() ;
			
			else if(this.command.startsWith("cd") && this.command.length()>3)
			jumpdirectory() ;
			//else
			//break ;


		}

		//List() method to list the files of current Directory ..
		public void List()
		{  	
			File[] filelist ;
			File directory = new File(current_directory_path) ; //creating a reference for current directory ..
			filelist = directory.listFiles() ; //refferring list of files from filelist array ..
			for(int i = 0;i<filelist.length;i++)
			{
				System.out.println(filelist[i]);
			}
		}

		//basedirectory() method to go to base directory ..
		// executes cd command ..
		public void basedirectory()	
		{
  			current_directory_path = "/" ;

		}
		//to go a specified directory .. executes cd path ..
		public void jumpdirectory()
		{     
			String[] str = this.command.split(" ");
			//System.out.print(str[1]) ; 
			current_directory_path=str[1] ;
			
			
		}

		





	}


	public static void main(String[] args) throws IOException
	{
		myshell shell1 = new myshell() ;
				
		while(true)
			{
				System.out.print(shell1.shellname) ;
				shell1.GetCommand() ; //read command ..
				shell1.CheckCommand() ; //check the input command ..
			}
	}			
}	
		 
