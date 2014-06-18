public class oddeven{
	public static void main(String[] args){
		int[] array = new int[5] ;
		int temp = 0 ;
		array[0]=2;
		array[1]=5;
		array[2]=9;
		array[3]=3;
		array[4]=4;
		int oi = 0 ; //index for odd number ..
		int ei = 0 ;	
		for(int i =1 ;i<array.length;i++){
			if(array[i]%2!=0 && !(array[i-1]%2!=0))
			{
				oi=i ;
			}
			if(array[i]%2==0)
			{
				ei=i ;
			}

			if(ei>oi){
				temp = array[ei];
				array[ei]=array[oi];
				array[oi]=temp;
				ei = oi ;
				oi++;
			}

		}
		for(int j=0;j<array.length;j++){
			System.out.println(+array[j]) ;

		}		

	}
}










			
