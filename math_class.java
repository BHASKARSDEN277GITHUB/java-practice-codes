public class math_class
{

public int truncate(double a)
{
int b ;
b=(int) a ;
return b ;
}

public int ceil(double a)
{
int b ;
b = (int) a ;
b++ ;
return b ;
}

public int round(double a)
{
int b ;
double c ;
b = (int) a ;
c = a- (double) b ;

if(c>=0.5)
{
return(++b) ;
}

return b ;

}

public int floor(double a)
{
int b ;
b=(int) a ;
return b ;
}


public double sin(double angle)
{
double value =0 ;
int i ;

for(i=1 ;i<5;i++)
{
value = value + (power(-1,i-1)*power(angle,i)/factorial(i))    ;
}

return value ;
}

public int factorial(int a)
{
int fact=1 ;
for(int i = a ;i>0;i--)
{
fact=fact*i ;
}
return fact ;
}

public double power(double num , int index)
{
int i ;
double result =1 ;
for(i=1;i<=index;i++)
{
result = result*num ;

}
return result ;
}


}
