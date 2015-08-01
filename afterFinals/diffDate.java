import java.io.*;
import java.util.*;

public class diffDate {
	
	public static void main(String[] args)
	{
	
        Date dt2 = new DateAndTime().getCurrentDateTime();

        long diff = dt2.getTime() - dt1.getTime();
        long diffSeconds = diff / 1000 % 60;
        long diffMinutes = diff / (60 * 1000) % 60;
        long diffHours = diff / (60 * 60 * 1000);
        int diffInDays = (int) ((dt2.getTime() - dt1.getTime()) / (1000 * 60 * 60 * 24));

            System.out.println("Difference in number of minute  : " + diffInDays);
}


