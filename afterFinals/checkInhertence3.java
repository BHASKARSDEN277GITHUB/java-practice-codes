public class  checkInhertence3
{
	static class sub1 {
	}

	static class sub2 extends sub1{
	}


	public static void main(String[] args)
	{
		sub1 object1 ; //= new super(); // invalid
		object1.super(); // super keyword can only be first line of the constructor ..
	}
}
