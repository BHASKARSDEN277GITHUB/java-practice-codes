import java.lang.* ;
import java.util.* ;
import java.io.* ;

public class mt1
{
	public static class prodcons implements Runnable
	{
		 int i =0;	
		prodcons(int a)
		{
			i=a;
		}
		public void run()
		{	try{
			while(true)
			{
			if(i==0)
			{
				System.out.println("Producing");
			i++;
			Thread.sleep(1000);
			}
			else
			{
			System.out.println("Consuming");
			i--;
			Thread.sleep(1000);
			}			
			}
			}
			catch(Exception e){}
		}

	}
	public static void main(String[] args)
	{
		Runnable producer = new prodcons(0);
		Runnable consumer = new prodcons(1);
		new Thread(producer).start();
		new Thread(consumer).start();

	
	}
}

