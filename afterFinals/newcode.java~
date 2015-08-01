
import java.util.PriorityQueue;
import java.util.List;
import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;
import java.io.*;
class Vertex implements Comparable<Vertex>
{
    public final String name;
    public Edge[] adjacencies;
    public double minDistance = Double.POSITIVE_INFINITY;
    public Vertex previous;
    public Vertex(String argName) { name = argName; }
    public String toString() { return name; }
    public int compareTo(Vertex other)
    {
        return Double.compare(minDistance, other.minDistance);
    }
}

class Edge
{
    public final Vertex target;
    public final double weight;
    public Edge(Vertex argTarget, double argWeight)
    { target = argTarget; weight = argWeight; }
}

public class newcode 
{
    public static void computePaths(Vertex source)
    {
        source.minDistance = 0.;
        PriorityQueue<Vertex> vertexQueue = new PriorityQueue<Vertex>();
      	vertexQueue.add(source);

	while (!vertexQueue.isEmpty()) {
	    Vertex u = vertexQueue.poll();

            // Visit each edge exiting u
            for (Edge e : u.adjacencies)
            {
                Vertex v = e.target;
                double weight = e.weight;
                double distanceThroughU = u.minDistance + weight;
		if (distanceThroughU < v.minDistance) {
		    vertexQueue.remove(v);
		    v.minDistance = distanceThroughU ;
		    v.previous = u;
		    vertexQueue.add(v);
		}
            }
        }
    }

    public static List<Vertex> getShortestPathTo(Vertex target)
    {
        List<Vertex> path = new ArrayList<Vertex>();
        for (Vertex vertex = target; vertex != null; vertex = vertex.previous)
            path.add(vertex);
        Collections.reverse(path);
        return path;
    }

    public static void main(String[] args)throws FileNotFoundException
    {


	//create vertices here ..
	//take an array of vertices ..
	int linecount=0;
	Vertex[] v=new Vertex[15];
	for(int i=0;i<15;i++)
	{
		v[i]=new Vertex("Sector"+i+"");
	}

	
	//recursively create the adjancey lists ..
	

	Scanner input=new Scanner(new FileReader("./chd.txt"));
	String line = input.nextLine();
	linecount++;
	
	//testing of file .. No bussiness with logic .. ;) ..
	/*while(input.hasNext()&&linecount<=390)
	{
		int adNumber=0;
		
		int distance ;
				
		
		//get point1 - point2 and distance values here ..
		
	
		
		String[] str = line.split(" ");
		distance=Integer.parseInt(str[1]);
		//System.out.println(distance);
		String[] str1 = str[0].split("-");
		String point=str1[0];
		int point1=Integer.parseInt(str1[0]);
		int point2=Integer.parseInt(str1[1]);


		while(line.startsWith(point))
		{
			 		
			
			//System.out.println(point1 +","+point2);
			
			if(input.hasNext())
			{
			line=input.nextLine();
			linecount++;
			str = line.split(" ");
			distance=Integer.parseInt(str[1]);
			System.out.println(point);
		
			 str1 = str[0].split("-");
			//String point=str1[0];
			 point1=Integer.parseInt(str1[0]);
			 point2=Integer.parseInt(str1[1]);	
			}		
		}
		
		
	}
	done file .. */

	
	/*v[0].adjacencies=new Edge[3];
	v[0].adjacencies[0]=new Edge(v[1],5);
	v[0].adjacencies[1]=new Edge(v[2], 10);
	v[0].adjacencies[2]=new Edge(v[3],8);*/
	
	


	v[0].adjacencies = new Edge[]{ new Edge(v[0], 10),new Edge(v[1], 3) };
	v[1].adjacencies = new Edge[]{ new Edge(v[0], 10),new Edge(v[1], 3) };
	v[2].adjacencies = new Edge[]{ new Edge(v[0], 10),new Edge(v[1], 3) };
	v[3].adjacencies = new Edge[]{ new Edge(v[0], 8),new Edge(v[4], 2) };
	v[4].adjacencies = new Edge[]{ new Edge(v[1], 7),new Edge(v[3], 2) };
	v[5].adjacencies = new Edge[]{ new Edge(v[0], 10),new Edge(v[1], 3) };
	v[6].adjacencies = new Edge[]{ new Edge(v[0], 10),new Edge(v[1], 3) };
	v[7].adjacencies = new Edge[]{ new Edge(v[0], 10),new Edge(v[1], 3) };
	v[8].adjacencies = new Edge[]{ new Edge(v[0], 8),new Edge(v[4], 2) };
	v[9].adjacencies = new Edge[]{ new Edge(v[1], 7),new Edge(v[3], 2) };

	v[10].adjacencies = new Edge[]{ new Edge(v[0], 10),new Edge(v[1], 3) };
	v[11].adjacencies = new Edge[]{ new Edge(v[0], 10),new Edge(v[1], 3) };
	v[12].adjacencies = new Edge[]{ new Edge(v[0], 10),new Edge(v[1], 3) };
	v[13].adjacencies = new Edge[]{ new Edge(v[0], 8),new Edge(v[4], 2) };
	v[14].adjacencies = new Edge[]{ new Edge(v[1], 7),new Edge(v[3], 2) };



	
	
//set source here and compute all the paths ;) ..
       computePaths(v[0]);

//	print here desired path .. ;)*/

        for (Vertex V : v)
	{
	    System.out.println("Distance to " + V + ": " + V.minDistance);
	    List<Vertex> path = getShortestPathTo(V);
	    System.out.println("Path: " + path);
	}
    }
}


