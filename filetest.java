import java.io.*;

public class filetest {

	public static void main(String[] args) {
		
		File file = new File("fileread.java");
		InputStream in = new InputStream(file);f
		BufferedReader reader  = new BufferedReader(new InputStreamReader(in));
		String line=reader.readLine();
		while(line!=null) {
		}
	}
}
