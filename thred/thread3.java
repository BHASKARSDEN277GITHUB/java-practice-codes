
public class thread3 extends thread
{	
	
	public thread3();
	private thread3() {}
	public class run()
	{
	
		thread2 a = new thread2();
		a.seti(2);
		a.printcounting() ;

		thread2 b = new thread2() ;
		b.seti(3);
		b.printcounting() ;
	}
	
}

