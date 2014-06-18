public String stringSplosion(String str) {
  String newstr = "" ;
  int i = 0 ;
  int j = str.length() ;
  while(i<j)
  {
  newstr = newstr + str.substring(0,i) ;
  i++ ;
  }
  return newstr ;
}

