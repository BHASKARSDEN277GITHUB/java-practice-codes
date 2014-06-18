import java.util.* ;
import java.lang.* ;
import java.io.* ;
public class printpdf
{
	public static void main(String[] args)
	{
		
		display_path("/home");
		
	}	
	public static void display_path(String path)
	{
		File directory = new File(path) ; 
		
		File[] filelist = directory.listFiles() ;
		String filename ;
		for(int i =0;i<filelist.length;i++)
		{ 	filename = filelist[i].getName() ;
			if(filelist[i].isFile() && (filename.endsWith(".pdf")))
			{
				System.out.print(filelist[i].getAbsolutePath()+"\t");
				System.out.println( filename+"\t") ;
			}
			 
			else if(filelist[i].isDirectory())
			{	
				String path1 = filelist[i].getAbsolutePath() ;	
				//System.out.println(path1);		
				display_path(path1) ;
			
			}
		}
	}
}
