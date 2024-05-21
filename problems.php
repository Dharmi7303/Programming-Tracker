<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Problem Page</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/footer.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
<center><?php include 'header.php';?>
	<div class="img">
    <div class="title"><h1>Sample Problems</h1></div>   
    <div class="faqbox">

        <div class="accordion">
            <div class="accordion-item">
                <a>Write a program to find the maximum element in an array.</a>
                <div class="content">
                    <p>Language Used: Python<br>
                      arr = [3, 7, 2, 9, 1, 6] # Example array<br>
                      max_num = arr[0] # Initialize max_num to the first element in the array<br>
                      for num in arr: # Iterate through each element in the array<br>
                          if num > max_num: # If the current element is greater than max_num<br>
                              max_num = num # Set max_num to the current element<br>
                      print("The maximum element in the array is:", max_num) # Print the maximum element
                    </p>
                </div>
                <a>Write a program to count the number of vowels in a string.</a>
                <div class="content">
                    <p>Language Used: Python<br>
                      string = "Hello, World!" # Example string<br>
                      vowels = "aeiouAEIOU" # List of vowels<br>

                      count = 0 # Initialize the count to 0<br>

                      for char in string: # Iterate through each character in the string<br>
                          if char in vowels: # If the character is a vowel<br>
                              count += 1 # Increment the count<br>

                      print("The number of vowels in the string is:", count) # Print the count<br>
                      </p>
                </div>
                <a>Write a program to calculate the factorial of a number.</a>
                <div class="content">
                    <p>Language Used: C++<be
                      #include <iostream><br>
                      using namespace std;<br>

                      int factorial(int num) {<br>
                          if (num == 0) { // Base case: factorial of 0 is 1<br>
                              return 1;<br>
                          } else {<br>
                              return num * factorial(num - 1); // Recursive case: call the factorial function with num-1<br>
                          }<br>
                      }<br>

                      int main() {<br>
                          int n = 5; // Example number<br>
                          int result = factorial(n); // Call the factorial function with n<br>
                          cout << "The factorial of " << n << " is " << result << endl; // Print the result<br>
                          return 0;<br>
                      }
                    </p>
                </div>
                <a>Write a program to find the GCD of two numbers.</a>
                <div class="content">
                    <p>Language Used: Java<br>
                      import java.util.Scanner;<br>

                      public class GCD {<br>
                          public static int gcd(int num1, int num2) {<br>
                              if (num2 == 0) {<br>
                                  return num1; // Base case: if num2 is 0, num1 is the GCD<br>
                              } else {<br>
                                  return gcd(num2, num1 % num2); // Recursive case: call gcd with num2 and remainder of num1/num2<br>
                              }
                          }

                          public static void main(String[] args) {<br>
                              Scanner sc = new Scanner(System.in);<br>
                              System.out.print("Enter the first number: ");<br>
                              int num1 = sc.nextInt();<br>
                              System.out.print("Enter the second number: ");<br>
                              int num2 = sc.nextInt();
                              sc.close();
                              int result = gcd(num1, num2); // Call gcd function with num1 and num2
                              System.out.println("The GCD of " + num1 + " and " + num2 + " is " + result);
                          }
                      }
                    </p>
                </div>
            </div>
        </div>
    </div>
</center>
    <?php include 'footer.php';?>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
    <script  src="./assets/js/index.js"></script>
</body>

</html>