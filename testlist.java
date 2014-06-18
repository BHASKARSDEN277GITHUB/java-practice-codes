public class testlist
{
	public class mylinkedlist<T>
	{
		Object[] value = new Object[] ;  // array to store value of linkedlist element ..
		Object[] reference = new Object[] ; //array to store refernece to next value..
		//constructor to create empty linked list ..		
		private mylinkedlist()
		{
			this.reference = null ;
		}
			
	}


	public static void main(String[] args)
	{
		mylinkedlist<Integer> obj = new mylinkedlist<Integer>() ;
		System.out.println(obj.value)
