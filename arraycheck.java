public class arraycheck{
public static void main(String[] args){
int[][] mularray = new int[5][] ;
mularray[0]=new int[5] ;
mularray[1]=new int[9] ;

mularray[0][4] = 1 ;
mularray[1][8] = 3 ;
int len = mularray[0][].length ;

System.out.println(+len) ;
System.out.println(mularray[1][8]) ;


}

} 
 
