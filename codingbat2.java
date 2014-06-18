public boolean array123(int[] nums) {
  int i = 0 ;
  int count =0 ;
  int j = nums.length ;
  if(j<3)
  {return false ;}
  else
  {
  while(i<j-2)
  {
  if(nums[i]==1&&nums[i+1]==2&&nums[i+2]==3)
  count++ ;
  
  }
  }
  
  if(count>0)
  return true ;
  
  return false ;
  
  }
