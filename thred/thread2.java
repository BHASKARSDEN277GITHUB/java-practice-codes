
package a.thread2 ;
public class thread2
{
	int i ;
	public thread2(){}
	public void printcounting()
	{       int j = 1 ;
		while( j<11)
		{       j=j*i;
			System.out.println(j);
		}
		
	}
	public void seti(int value)
	{
		i = value ;
	}

}
