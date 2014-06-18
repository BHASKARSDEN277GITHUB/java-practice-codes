public class generate{
	public static void main(String[] args){
		mapping marks1 = new mapping() ;
		int max_marks1  ;
		max_marks1 = marks1.generate_max() ;
		System.out.println("Max marks students can make out of previous marks are : " + max_marks1) ;
	}

}
