public class math_main
{
public static void main(String[] args)
{
math_class operation  ;
operation = new math_class() ;
int trunc = operation.truncate(3.5) ;
System.out.println("The truncated part is :" + trunc) ;

int ceil = operation.ceil(4.5) ;
System.out.println("The ceil of 4.5 is : " +ceil) ;

int round ;
round = operation.round(4.3);
System.out.println("the round off of 4.3 is:" +round) ;

double sin ; 
sin = operation.sin(3.142857);
System.out.println("The value of sin of 3.14 is :  " + sin ) ;

}
}

