public class checkInheritence2{
	
	static class sub1{
	}
	static class sub2 extends private sub1 { // you cant do this bitch ..
	}
	static class sub3 extends sub2,sub1{ // neither this  no multiple inheritence allowed ..
	}
	
	public static void main(String[] args)
	{
	}
}
