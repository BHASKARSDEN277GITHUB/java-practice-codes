import java.sql.*;
import java.util.Properties; 

	public class checkConnection
	{
		 public static void main(String[] args) throws ClassNotFoundException,SQLException 
		{ 
			System.out.println("com.mysql.jdbc.Driver");
		
	
		//load jdbc classes and create a drivermanager class factory ..
	
		Class.forName("com.mysql.jdbc.Driver");
	
		
		Connection c = DriverManager.getConnection("jdbc:mysql://localhost/idp?user=project&password=project");
		System.out.println("It works !");
		System.out.println("Records of table checkTable from database db are : ");
		PreparedStatement s=c.prepareStatement("select status from idp.users where uid=?");
                s.setString(1,"bhaskar");
                ResultSet rs = s.executeQuery();
		
                if(rs.next())
                {
			int i=1;
                    //check status ..
                    //int i=Integer.parseInt(rs.getString(1));
                    if(i==1)
                    {
                            System.out.println("/sp1/home.jsp");
                    }
                }
		
		
               
		
		c.close();
	}
}
