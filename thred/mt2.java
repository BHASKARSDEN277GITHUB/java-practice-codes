import java.lang.* ;
import java.util.* ;


public class mt2
{
	public static  class synch implements Runnable
	{
		private static  int i =0 ;
		//private  int x =0 ;
		public synch()
		{
			
		}
		
		
		private synchronized  void table()
		{
			i++ ;	
		}
		public void run()
		{
			this.table(); 
			System.out.println(i);
		}
	} 
	public static void main(String[] args)
	{
		Runnable t1 = new synch();
		new Thread(t1).start();
		Runnable t2 = new synch();
		
		new Thread(t2).start() ;
	}
}
