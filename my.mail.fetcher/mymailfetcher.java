import java.lang.* ;
import java.io.*;
import java.util.* ;
import java.util.Properties ;
import javax.mail.* ;


public class mymailfetcher
{

	public static void main(String[] args)
	{
		Scanner input = new Scanner(System.in) ;
		String username = input.nextLine() ;
		String password = input.nextLine() ;
		Properties sysprop = System.getProperties() ; //get list of system properties in sysprop .. key,value  pairs .
		sysprop.setProperty("mail.store.protocol","imaps") ; //add imap protocol to property list ..
		try{
		Session newsession = Session.getDefaultInstance(sysprop,null) ; 
//get the default session object in the system properties ..
		Store newstore = newsession.getStore() ; //get Store that implements current session ..
		
		newstore.connect("imap.gmail.com",username,password) ;
		System.out.println(newstore) ;
		Folder newfolder = newstore.getFolder("inbox") ; //get desired folder ..	
		
		newfolder.open(Folder.READ_ONLY) ; //OPEN THE INBOX ..
		Message[] mymessages = newfolder.getMessages() ; 
		
		for(Message m :mymessages)
		{
			System.out.println(m.getReceivedDate()) ;
		}
		}
		catch(Exception e){}
	}
}
