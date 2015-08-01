import java.lang.*;
import java.util.*;

public class deadlockSimulation {

	public static void main(String args[]) {
		Object object1 = new Object();
		Object object2 = new Object();
		threadclass thread1 = new threadclass(object1,object2,0);
		thread1.start();
		threadclass thread2 = new threadclass(object1,object2,1);
		thread2.start();
	}

}

class threadclass extends Thread  {
	int threadid;
	static Object lock1;
	static Object lock2;

	public threadclass(Object object1,Object object2,int id) {
		this.lock1=object1;
		this.lock2=object2;
		this.threadid=id;
		System.out.println("I am thread "+threadid);
	}

	public void run() {
		method();
	}
	public void method() {
		if(threadid==0) {
			synchronized(lock1) {
				System.out.println("lock1 acquired");
				System.out.println("Waiting for lock2");
				synchronized(lock2) {
					System.out.println("acquired lock2");
				}
			}

		}else {
			synchronized(lock2) {
                                System.out.println("lock2 acquired");
                                System.out.println("Waiting for lock1");
                                synchronized(lock1) {
                                        System.out.println("acquired lock1");
                                }
                        }
		}
	}

}
