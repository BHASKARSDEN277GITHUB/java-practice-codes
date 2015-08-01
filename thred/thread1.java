package a ;

public class mythread implements Runnable
	{
		public int i ;	
		public static int turn = 0 ;
		mythread(int initvalue , int myturn)
		{	this.i = initvalue ; 
			
		}
	 
		public static void toggle_turn()
		{
			turn = turn^1 ;
		}
		public void run()
		{
			if(turn==myturn)
			{
				System.out.println(this.i) ;
				i=i+2 ; 				
				toggle_turn() ;
				this.sleep(1) ;
			}
			else
			this.sleep(1) ;
		}
			
	}
