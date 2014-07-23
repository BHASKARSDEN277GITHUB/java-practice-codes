//testing concepts of inheritence ...

public class checkInheritence1 {
	
	static class  subclass1{
		
	int a ;
	int b ;
	
	public subclass1()
	{
		System.out.println("I am constructor of class 1");
	}
	void call()
	{
		System.out.println("I have been called using super keyword");

	}
	}
	static class subclass2 extends subclass1 {
	
	int a ; 
	int b ;
	
	public subclass2()
	{
		super();
		System.out.println("I am constructor of class subclass2");
	}
	void callSuper()
	{
		super.call();
	}
	}


	public static void main(String[] args)
	{
		subclass1 object1 = new subclass1();
		subclass2 object2 = new subclass2();
		object2.callSuper();
	}
}
