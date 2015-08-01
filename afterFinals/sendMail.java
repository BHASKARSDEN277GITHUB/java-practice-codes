import org.apache.commons.mail.Email;

public class sendMail {
	
	public static  void main(String[] args)
	{
		 Email email = new SimpleEmail();
  		 email.setSmtpPort(587);
    email.setAuthenticator(new DefaultAuthenticator("bhaskar kalia",
            "kaliaisbhaskar"));
    email.setDebug(false);
    email.setHostName("smtp.gmail.com");
    email.setFrom("bhaskarkalia11@gmail.com");
    email.setSubject("Hi");
    email.setMsg("This is a test mail ... :-)");
    email.addTo("smartapp123@gmail.com");
    email.setTLS(true);
    email.send();
    System.out.println("Mail sent!");
	
	}
}
