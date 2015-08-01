// gives compile time  error on  missing return statement , which c does not 
public class checkReturn {

	static int  checkR() {

		//return nothing 

	}

	public static void main(String args) {

		int i = checkR();
		System.out.println(i);

	}

}
