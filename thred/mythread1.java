package thred ;
import java.lang.* ;
import java.util.* ;
import java.io.* ;
public class mythread1 extends Thread
	{
		public int i ;	
		public static int turn = 0 ;
		public int a ;
		public mythread1(int initvalue , int myturn)
		{	i = initvalue ; 
			a = myturn ;
		}
	 
		public static void toggle_turn()
		{
			turn = turn^1 ;
		}
		public void run() 
		{
			try{
			if(turn==a)
			{
				System.out.println(this.i) ;
				i=i+2 ; 				
				toggle_turn() ;
				Thread.sleep(1000) ;
			}
			else
			Thread.sleep(1000) ;
			}
			catch(Exception e){}
		}
			
	}
