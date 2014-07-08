import java.util.*;
import java.lang.Runnable;
public class multithreadingPrac1 implements Runnable {
	
	public static void main(String[] args) 
	{
		new Thread(new multithreadingPrac1(0)).start();
		new Thread(new multithreadingPrac1(1)).start();
	}
	
		private int flag;
		
		public multithreadingPrac1(int f)
		{
			flag=f;
		}
	
		private void print() 
		{
			for(int i=0;i<10;i++)
			{
				System.out.println("I am Thread 1");
				try{
					Thread.sleep(5);
				}catch(Exception e){
				}

			}
		}
		private void print1()
		{
			for(int i=0;i<10;i++)
			{
				System.out.println("I am Thread 2");
				try{
					Thread.sleep(5);
				}catch(Exception e){
				}
			}
			
		}

		public void run()
		{
			if(flag==1)
			print();
			else
			print1();
		}
			
}
		
