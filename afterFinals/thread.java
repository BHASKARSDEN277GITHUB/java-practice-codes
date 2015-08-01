import java.lang.Runnable;

public class thread implements Runnable {

	private Object obj1 ;
	private Object obj2 ;
	private int a ;

	public thread(int arg1 , Object arg2 , Object arg3)
	{
		a=arg1;
		obj1=arg2;
		obj2=arg3;
	}
	
	public void run()
	{
		if(a==0)
		{
			method1();
		}
		else
		{
			method2();
		}
	}
	
	private void method1()
	{
		synchronized (obj1)
		{
			System.out.println("I am thread1 , I took LOCK on Object1 , Waiting for Lock on Object2 ");
			
			
			synchronized (obj2)
			{
				 //
			}
		}
	}
	
	private void method2()
        {
                synchronized (obj2)
                {
                        System.out.println("I am thread2 , I took LOCK on Object2 , Waiting for Lock on Object1 ");


                        synchronized (obj1)
                        {
                                 //
                        }
                }
        }
	
}
	
	

