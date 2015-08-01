import java.util.*;
import java.io.*;
public class gems{
    
    
public static int check(char a , String s)
{
    int i ; 
    int flag=0;
     for(i=0;i<s.length();i++)
     {
//	System.out.println(s.charAt(i));
         if(s.charAt(i)==a)
         {flag++;break;}
     }    
    if(flag>0)
        return 1;
    else 
        return 0;
    
}
public static void main(String[] args) throws IOException
{
    int n  ;
    int i=0 ;
//    Scanner sc = new Scanner(System.in);
    BufferedReader sc = new BufferedReader(new InputStreamReader(System.in));
    //read test cases ..

    n=Integer.parseInt(sc.readLine());

    String[] s = new String[n];

//    System.out.println(n);

    //reading the compostions of rocks ..

    for(i=0;i<n;i++)
    {
            s[i]=sc.readLine();
           
    }

//	char ch='a';
//	int a = gems.check(ch,"abcd");
//	System.out.println(a);

    String taken="";
    int flag=0;
//	System.out.println(s[0]);
//	System.out.println(s[1]);
//	System.out.println(s[2]);

    for(int j =0;j<s[0].length();j++)
    {   flag=0;
        for(int k=1;k<n;k++)
        {
            int z =check(s[0].charAt(j),s[k]);
            if(z==0)
                { flag++; break;}
            else
            {
                // can be a gem ..
            }
        }    
        
        if(flag==0)
        {
                int flag1=0;
                for(int l=0;l<taken.length();l++)
                {
                    if(taken.charAt(l)==s[0].charAt(j))
	           flag1++;
                }
                if(flag1==0)
                taken=taken+s[0].charAt(j);   
        }
    }
    
    System.out.println(taken.length()); 
}
    
}    
