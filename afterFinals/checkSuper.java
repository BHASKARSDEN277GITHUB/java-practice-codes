//checking use of super keyword in java 



public class checkSuper {

	static class superclass {

		public int normalVar ;
		public static int staticVar=1 ;

		public superclass(int a) {

			normalVar=a ;
		}

	}

	static class derived extends superclass {

		public derived() {
			super(10);
		}

		public void methodAccess() {

			System.out.print("Static Varibale : " +super.staticVar+ "\n") ;
			System.out.print("Normal Variable : " +super.normalVar+ "\n") ; 

		}

	}


	public static void main(String[] args) {

			derived object = new derived() ;

			object .methodAccess() ;

	}

}


