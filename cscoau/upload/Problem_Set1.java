                   
/* Name : Olaniyi Afolabi Onaopepo
   Registration No: CSC/2009/115
   Collaborators (Name and Reg. No if any):  
   Estimated time used to solve the problem: 3days
 */
import javax.swing.JOptionPane;
import java.util.Scanner;
import java.util.Random;

public class problemset 
{
    static int max, count, opr_1, opr_2, correct, wrong, op_2, op, n, num, ans, ans2;
	static double percent;
	static String str1, str2, str3, str4;
	static Random rand = new Random();
	static Scanner input = new Scanner(System.in); 

           public static void quiz()
	{
	 /*
 This method asks the user to specify the level of difficulty (1. Beginner, 2. Intermediate, 3.   Advanced),  the arithmetic operation type (1.Addition 2.Subtraction 3.Multiplication 4.Division 5.Mixed) to perform and the number of questions to ask.It then executes the perfrom_operation() method with the above input parameters. You should test to ensure that valid inputs are entered.
	*/
		System.out.println("\nDifficulty:\n\n1. Beginners\n2. Intermediate\n3. Advanced\n");
		int diff = input.nextInt();
		if (diff == 1)
		 max = 9;
		else if (diff == 2)
		max = 24;
		else if (diff == 3)
		max =99;
		else
		  System.out.print("Difficulty entered is invalid"); 
		   System.out.print("Operator type:\n\n1. Addition\n2. Subtraction\n3. Multiplication\n4. Division\n5. Mixed Operations\n\n");
		   System.out.print("Enter the operator type: ");
		   op = input.nextInt();
                   if (( op < 1 )||(op > 5))
                   {
                       System.out.print("Operator type entered is invalid");
                           }
                       }
 /* 
TODO write a private method perform_operation() that achieves the requirements specified 
in steps 2-5 of the problem set #1
		
	*/
	private static void perform_operation()
	{
	   if ( op == 1)
		 {
                       System.out.println("Addition operator selected\n");
		       System.out.print("How many times do you want to perform the operation: ");
		       n = input.nextInt();
                       num = n;
		 		 
		 
                     for ( ; n > 0;  n --)
                     {
		                  opr_1 = 1 + rand.nextInt(max);
				  opr_2 = 1 + rand.nextInt(max);
				  ans2 = opr_1 + opr_2;
				  System.out.print("Please enter the answer of the operation " +opr_1+ " plus " + opr_2+" : ");
				 ans = input.nextInt();
				     if( ans == ans2)
					 {
					 System.out.println("Correct");
					 correct++;
					 }
					 else
					 {
					 System.out.println("Wrong");
					 wrong++;
					 }
          }
    System.out.print("\n\nThe result of the quiz you did is: " + correct + "/" + num + "\n\n" );
            percent = (correct/num)*100;
    System.out.print("In percentage, the result of the quiz is: " +percent + "%" + "\n" );
           if (percent > 66.6666)
    System.out.print("Great performance!");
           else if ((percent > 33.333333) || (percent < 66.66666))
    System.out.print("You need more practice!");
           else
    System.out.print("Please ask your math teacher for help!");
		  
                 }
          else if ( op == 2)
              {
                  System.out.println("Subtraction operator selected\n");
               System.out.print("How many times do you want to perform the operation: ");
		       n = input.nextInt();
                       num = n;
                     for ( ; n > 0;  n --)
                     {

		          opr_1 = 1 + rand.nextInt(max);
				  opr_2 = 1 + rand.nextInt(max);
				  ans2 = opr_1 - opr_2;
				  System.out.print("Please enter the answer of the operation " +opr_1+ " minus " + opr_2+" : ");
				 ans = input.nextInt();
				     if( ans == ans2)
					 {
					 System.out.println("Correct");
					 correct++;
					 }
					 else
					 {
					 System.out.println("Wrong");
					 wrong++;
					 }
		 }
                         System.out.print("\n\nThe result of the quiz you did is: " + correct + "/" + num + "\n\n"  );
            percent = (correct/num)*100;
    System.out.print("In percentage, the result of the quiz is: " +percent + "%" + "\n");
           if (percent > 66.6666)
    System.out.print("Great performance!");
           else if ((percent > 33.333333) || (percent < 66.66666))
    System.out.print("You need more practice!");
           else
    System.out.print("Please ask your math teacher for help!");
         
          }
       
        else if ( op == 3)
              
          {
              System.out.println("Multiplication operator selected\n");
               System.out.print("How many times do you want to perform the operation: ");
		       n = input.nextInt();
                       num = n;
		 		
                     for ( ; n > 0;  n --)
                     {

		          opr_1 = 1 + rand.nextInt(max);
				  opr_2 = 1 + rand.nextInt(max);
				  ans2 = opr_1 * opr_2;
				  System.out.print("Please enter the answer of the operation " +opr_1+ " multiplied by " + opr_2+" : ");
				 ans = input.nextInt();
				     if( ans == ans2)
					 {
					 System.out.println("Correct");
					 correct++;
					 }
					 else
					 {
					 System.out.println("Wrong");
					 wrong++;
					 }
		 }
                         System.out.print("\n\nThe result of the quiz you did is: " + correct + "/" + num  + "\n\n" );
            percent = (correct/num)*100;
    System.out.print("In percentage, the result of the quiz is: " +percent + "%" + "\n");
           if (percent > 66.6666)
    System.out.print("Great performance!");
           else if ((percent > 33.333333) || (percent < 66.66666))
    System.out.print("You need more practice!");
           else
    System.out.print("Please ask your math teacher for help!");
         
          }
         else if ( op == 4)
              
          {
              System.out.println("Division operator selected\n");
               System.out.print("How many times do you want to perform the operation: ");
		       n = input.nextInt();
                       num = n;
		 		 
		 
                     for ( ; n > 0;  n --)
                     {

		          opr_1 = 1 + rand.nextInt(max);
				  opr_2 = 1 + rand.nextInt(max);
				  ans2 = opr_1 / opr_2;
				  System.out.print("Please enter the answer of the operation " +opr_1+ " divided by " + opr_2+" : ");
				 ans = input.nextInt();
				     if( ans == ans2)
					 {
					 System.out.println("Correct");
					 correct++;
					 }
				    else
					 {
					 System.out.println("Wrong");
					 wrong++;
					 }
		 }
                         System.out.print("\n\nThe result of the quiz you did is: " + correct + "/" + num  + "\n\n" );
            percent = (correct/num)*100;
    System.out.print("In percentage, the result of the quiz is: " +percent + "%" + "\n");
           if (percent > 66.6666)
    System.out.print("Great performance!");
           else if ((percent > 33.333333) || (percent < 66.66666))
    System.out.print("You need more practice!");
           else
    System.out.print("Please ask your math teacher for help!");
         
          }
         else 
        {  
             System.out.println("Mixed operator selected\n");
            System.out.print("How many times do you want to perform the operation: ");
		      n = input.nextInt();
                      num = n;
           
				 for (; n > 0 ; n--)
		 {
		                  opr_1 = 1 + rand.nextInt(max);
				  opr_2 = 1 + rand.nextInt(max);
				  op_2 = 1 + rand.nextInt(4);
				  if (op_2 == 0)
				  {
				   
				  ans2 = opr_1 + opr_2;
				  System.out.print("Please enter the answer of the operation " +opr_1+ " plus " + opr_2+" is: ");
				  ans = input.nextInt();
                                  }
                                  else if ( op_2 == 1)
                                  {
				    
				  ans2 = opr_1 - opr_2;
				  System.out.print("Please enter the answer of the operation " +opr_1+ " minus " + opr_2+" is: ");
				  ans = input.nextInt();
                                  }
                                  else if( op_2 == 2)
                                  {
				  ans2 = opr_1 * opr_2;
				  System.out.print("Please enter the answer of the operation " +opr_1+ " multiplied by " + opr_2+" is: ");
				  ans = input.nextInt();
                                  }
				    else
                                  {
				  ans2 = opr_1 / opr_2;
				  System.out.print("Please enter the answer of the operation " +opr_1+ " divided by " + opr_2+" is: ");
				  ans = input.nextInt();
				  }
				     if( ans == ans2)
					 {
					 System.out.println("Correct");
					 correct++;
					 }
					 else
					 {
					 System.out.println("Wrong");
					 wrong++;
					 }	
		
        }	
                                     System.out.print("\n\nThe result of the quiz you did is: " + correct + "/" + num  + "\n\n" );
            percent = (correct/num)*100;
    System.out.print("In percentage, the result of the quiz is: " +percent + "%" + "\n");
           if (percent > 66.6666)
    System.out.print("Great performance!");
           else if ((percent > 33.333333) || (percent < 66.66666))
    System.out.print("You need more practice!");
           else
    System.out.print("Please ask your math teacher for help!");
		}
        
        }
        
        

	
		
	public static void new_quiz()
	{
	        /*
		 Implement this method to have the requirement in problem #1 
		 except that it is the computer that randomly selects question types 
		 and the number of questions to answer are now between 10 to 20.  
		  */
		System.out.println("\nPlease enter the level of difficulty to replay:\n\n1.\tBeginners\n2.\tIntermediate\n3.\tAdvanced\n");
		int diff = input.nextInt();
		
		if (diff == 1)
		 max = 9;
		else if (diff == 2)
		max = 24;
		else if (diff == 3)
		max =99;
		else
		  System.out.println("Difficulty entered is invalid"); 
		 
		 n = 10 + rand.nextInt(10); // The number of questions students will answer between 10 and 20

		JOptionPane.showMessageDialog(null, n+" questions have been randomly picked");
		for (; n>0 ; n--)
		{
		            opr_1 = 1 + rand.nextInt(max);
					opr_2 = 1 + rand.nextInt(max);

					op_2 = 1 + rand.nextInt(4);
					 switch (op_2)
				  {
				    case 0:
				  ans2 = opr_1 + opr_2;
				  System.out.print("Please enter the answer of the operation " +opr_1+ "plus " + opr_2+" is: ");
				  ans = input.nextInt();
				    case 1:
				  ans2 = opr_1 - opr_2;
				  System.out.print("Please enter the answer of the operation " +opr_1+ "minus " + opr_2+" is: ");
				  ans = input.nextInt();
				    case 2:
				  ans2 = opr_1 * opr_2;
				  System.out.print("Please enter the answer of the operation " +opr_1+ "multiplied by " + opr_2+" is: ");
				  ans = input.nextInt();
				    case 3:
				  ans2 = opr_1 / opr_2;
				  System.out.print("Please enter the answer of the operation " +opr_1+ "divided by " + opr_2+" is: ");
				  ans = input.nextInt();
				  }
				     if( ans == ans2)
					 {
					 System.out.println("Correct");
					 correct++;
					 }
					 else
					 {
					 System.out.println("Wrong");
					 wrong++;
					 }	
		
        }
		
    System.out.print("\n\nThe result of the quiz you did is: " + correct + "/" + num  + "\n\n" );
            percent = (correct/num)*100;
    System.out.print("In percentage, the result of the quiz is: " +percent + "%" + "\n");
           if (percent > 66.6666)
    System.out.print("Great performance!");
           else if ((percent > 33.333333) || (percent < 66.66666))
    System.out.print("You need more practice!");
           else
    System.out.print("Please ask your math teacher for help!");			
		}
		
		
	
	public static void hailstone(int n)
	{
	
	/*
	 hailstone(){
		 
		  implement the Hailstone algorithm as stated below. 
		  Start with an integer n. 
		  If n is even, you divide by 2. If n is odd, you multiply by 3 and add 1. 
		  Repeat this process with the new value of n, terminating when n = 1. 
		  
		  the public method accepts an integer n and returns a sequence from n to 1 as a comma separated string. 
		  For example, for n=10, the method should return
		    "10,5,16,8,4,2,1"
	
		   }

    */

	 if ( n < 1 )
	  System.out.print("The value entered is less than 1, Please enter a value greater than 1\n ");
	  else
	  { 
	  System.out.print(n); 
	  while ( n != 1)
	  {
	     if (n%2 == 0)
				{
					n = n/2;
				}
				else
				{
					n = (n*3)+1;
				}
				System.out.print(", "+n);
	  
	  }
	  }
	
	}	

	
	private static int count_digit(String str)
	{
		/* This method returns the number of digits in a string
		    e.g for the string "10, 5, 16, 8, 4, 2, 1", it returns 7
		*/
		
		
		int cnt=0;
		for (int i=0;i<str.length();i++){
			if (str.charAt(i)==',')cnt+=1;
		}
		
	return cnt+1;
	}
	
	
	public static void cycle_length(int i, int j)
	{
	 /*TODO 
		this method returns the maximum cycle length for for integers between and including i and j.
		fill in the commands	
       	
	 */
	    int k = i;
		int c = 0;
		int b = 0;
		while (i <= j)
		{
			n=i;
			System.out.print("\n\n"+n);
			while (n>1)
			{
				if (n%2 == 0)
				{
					n = n/2;
				} 	
				else
				{
					n = (n*3)+1;
				}
				System.out.print(", "+ n);
				c++;
	        }
	    }
	}
	
	/**
	 * @param args
	 */
	


public static void main(String[] args) 
	{
		// TODO run the methods here, for instance to execute the quiz() method write
		//new_quiz();
		//	ditto for other methods
		System.out.println("\n\nWelcome to the Math Quiz Program!");
		
		//To call method quiz()
		quiz();

		//To call method perform_operation()
		perform_operation();
                
                //To call method new_quiz()
                new_quiz();

		//To call method hailstone
               	 System.out.print("This is the Hailstone sequence\n");
	              System.out.print("Please enter the value of n: ");
	              n = input.nextInt();
                         hailstone(n);

		//To call method cycle_length
		int i, j;
		System.out.print("\n\nEnter the first value for the cycle:\t");
		i = input.nextInt();
		System.out.print("\n\nEnter the second value for the cycle:\t");
		j = input.nextInt();
		cycle_length(i,j);

	}

 }
	

