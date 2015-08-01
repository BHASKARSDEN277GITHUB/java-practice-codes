import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.nio.charset.*;
import java.security.KeyPair;
import java.security.KeyPairGenerator;
import java.security.NoSuchAlgorithmException;
import java.security.PrivateKey;
import java.security.PublicKey;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.crypto.Cipher;
import javax.servlet.ServletContext;


public class rsa{

    
    
    private static Charset UTF_8 =Charset.forName("UTF-8");
    
    
    
  /**
   * String to hold name of the encryption algorithm.
   */
  public static final String ALGORITHM = "RSA";

  /**
   * String to hold the name of the private key file.
   */
  public static final String PRIVATE_KEY_FILE = "private.key";

  /**
   * String to hold name of the public key file.
   */
  public static final String PUBLIC_KEY_FILE = "public.key";

 
  /**
   * empty constructor here ..
   */
  
  public rsa()
  {
      //empty ..
  }

  
  /**
   * Decrypt text using private key.
   * 
   * @param text
   *          :encrypted text
   * @param key
   *          :The private key
   * @return plain text
   * @throws java.lang.Exception
   */

  public static String decrypt(byte[] text, PrivateKey key) {
    byte[] dectyptedText = null;
    try {
      // get an RSA cipher object and print the provider
      final Cipher cipher = Cipher.getInstance(ALGORITHM);

      // decrypt the text using the private key
      cipher.init(Cipher.DECRYPT_MODE, key);
      dectyptedText = cipher.doFinal(text);

    } catch (Exception ex) {
      ex.printStackTrace();
    }
    
    return dectyptedText.toString();
  }

 
  public static void main(String[] args) throws IOException, ClassNotFoundException{

  
	/**
         * convert string to byte first using utf-8 encoding ..
         */
      
         byte[] cipherText=encSS.getBytes(UTF_8);
      
	
        String SSkey="";
      
         
          // Decrypt the cipher text using the private key.
        
         
          if(inStream!=null)
          {
          final PrivateKey privateKey = (PrivateKey) inStream.readObject();
          
            //SSkey=cipherText.toString();
          
          if(privateKey!=null)
          
          {SSkey = decrypt(cipherText, privateKey);}
          return SSkey;
          }
          else
          {
              SSkey="inputStreamnull";
              return SSkey ;
          }
      
   

      

  }
}


