public class mapping {

	int[][] map = new int[10][] ;
	static final int max = 50 ;
	static final int current = 11 ;
	static int generated ;
	static int copy ;
	static int copy1 ;
	mapping() {
		//creating multidemensional arrays of desired length ..
		map[0]=new int[2] ;  //map[x][0] stores no of possible mappings from x ..
		map[1]=new int[6] ;
		map[2]=new int[2] ;
		map[3]=new int[3] ;
		map[4]=new int[3] ;
		map[5]=new int[4] ;
		map[6]=new int[2] ;
		map[7]=new int[3] ;
		map[8]=new int[1] ;
		map[9]=new int[2] ;
			
		//specifying the mappings ..
		//for 0 ..
		map[0][0]=1 ;
		map[0][1]=8 ;

		//for 1 ..

		map[1][0]=5 ;
		map[1][1]=4 ;
		map[1][2]=6 ;
		map[1][3]=7 ;
		map[1][4]=8 ;
		map[1][5]=9 ;

		//for 2 ..

		map[2][0]=1 ;
		map[2][1]=8 ;

		//for 3 ..

		map[3][0]=2 ;
		map[3][1]=8 ;
		map[3][2]=9 ;

		//for 4 ..

		map[4][0]=2 ;
		map[4][1]=8 ;
 		map[4][2]=9 ;

		//for 5 ..

		map[5][0]=3 ;	
		map[5][1]=6 ;
		map[5][2]=8 ;
		map[5][3]=9 ;

		//for 6 ..

		map[6][0]=1 ;
		map[6][1]=8 ;
	
		//for 7 ..

		map[7][0]=2 ;
		map[7][1]=8 ;
		map[7][1]=9 ;

		//for 8 ..

		map[8][0]=0 ;
	
		//for 9 ..

		map[9][0]=1 ;
		map[9][1]=8 ;

	}

	//set_values(int , int) :: for max and current in case input to be taken from user ..

	//generating number less than max ..

	int generate_max() {
		
		generated = current ;		
 		int i = 0 ;
		int current_copy=current ;
		int[] nums = new int[5] ;
		int in=0 ;
		while(current_copy!=0){ //triming digits of current to an array nums ..
			nums[i]=current_copy%10 ;
			current_copy=current_copy/10 ;		
			i++ ;
	        }
		
		
		in = i-1 ; //index will initially point to most significant digit of current .. 
		i = 1 ;
		if(map[nums[in]][0]>0)
		{
			while(generated <=max && i<(map[nums[in]][0]+1))  //pwer(10,index) can be used ..
			{	copy = generated ;
				generated = map[nums[in]][i]*10 + nums[in-1] ;
				i++ ;
				copy1 = generated ;	
			}
		
		}

		if(copy1<=max)
			generated = copy1 ;
		else
			generated = copy ;
		
		i = 0 ;
		current_copy = generated ;
		//triming digits of generated to an array nums ..
		while(current_copy!=0){
			nums[i]=current_copy%10 ;
			current_copy=current_copy/10 ;		
			i++ ;
	        }
		in = i-1 ;
		i=1 ;
		if(map[nums[in-1]][0]>0)
		{//System.out.println("check check" + map[nums[in-1]][0]);
			while(generated <=max && i<(map[nums[in-1]][0]+1))
			{	copy = generated ;
				generated  = nums[in]*10 + map[nums[in-1]][i] ; 				
				i++ ;
				copy1 = generated ;				
			}

		}
		if(copy1<=max)
			generated = copy1 ;
		else
			generated = copy ;
	return generated ;
	}
	}


