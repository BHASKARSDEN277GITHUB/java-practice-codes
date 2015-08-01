public class singletonClass {
	private static int count=0;

	private singletonClass() {
		System.out.println("constructor executed");
	}

	public static singletonClass instanciate() {
		singletonClass object =null ;
		if(count==0) {
			object=new singletonClass();
			count++;
			return object ;
		}
		else {
			return object ;
		}
	}

	public static void main(String[] args) {
		
		//creating first instance object 
		singletonClass object1= singletonClass.instanciate();

		//trying to create second object
		singletonClass object2= singletonClass.instanciate();
	}
}
