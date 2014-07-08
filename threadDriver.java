public class threadDriver {
	
	public static void main(String[] args)
        {
                Object obj = new Object();
                Object obj2 = new Object();

                new Thread(new thread(0,obj,obj2)).start();
                new Thread(new thread(1,obj,obj2)).start();
        }
}
