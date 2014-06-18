import java.util.* ;
import java.io.* ;
import java.lang.* ;

public class testarray
{
	public static class myarraylist<T>
        {
		public  Object[] element  ; //data element to store the data values .. Object used because genreic array can not be created ..
		public static int last_index = -1 ; //current index
	//constructor to create an initial list of fixed size 10 ..
		private int current_index = 0 ;
		private static int count ;
 		private myarraylist()
		{
			this.element = new Object[10] ;
		}
	//constructor to create an initial list of given size ..		
		private myarraylist(int size)
		{
			this.element = (T[])new Object[size] ;
		}
	//Add() method to add new element in array list ..
		public void Add(T value)  	
		{
			this.element[current_index]=value ;
			this.last_index++ ;
			this.current_index++ ;
		}
	//Delete() method to delete element from given index inarray ..
		public void Delete(int index)
		{
			for(int i=index;i<this.last_index;i++)
			{
				this.element[i]=this.element[i+1] ;
			}
			this.element[this.last_index] = null ;
			this.last_index-- ;
		}
	//Count() method to count no of elements in arraylist ..
		public int Count()
		{
			count = 0 ;
			for(int i = 0;i<=this.last_index;i++)
			{
				count++ ;
			}
			return count ;
		}	
	//get() method to find element on given index ..
		public T get(int index)
		{
			return((T)this.element[index]) ;
		}
	//IndexOf() method to find index of given element ..
		public int IndexOf(T value)
		{	
			
			int i =0;
			while(this.element[i]!=value)
			{
				i++ ;
			}
		return i;
		}
			
	}

	//main() to test functionality  of above class ..  [use obj.element to access the arraylist elements ..]
  	public static void main(String[] args)
	{
		myarraylist<Integer> obj = new myarraylist<Integer>(20) ;
			
		obj.Add(67) ;
		obj.Add(34);
		obj.Add(78);
		//System.out.println(obj.last_index);
		obj.Delete(1) ;
		//System.out.println(obj.last_index);			 
		
		//int i = obj.Count() ;
		//System.out.println(i);
		//int j = obj.get(1) ;
		//System.out.println(j) ;
		//System.out.println(obj.IndexOf(78));
		for(int count =0 ;count<obj.element.length;count++)
		{
			System.out.println(obj.element[count]);
		}
	}
		
}


		
