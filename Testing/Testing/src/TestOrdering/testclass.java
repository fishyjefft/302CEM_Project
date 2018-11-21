package TestOrdering;
import java.util.Random;
import java.util.Scanner;
import org.openqa.selenium.Alert;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class testclass {
	public static void main(String[] args) throws InterruptedException
	{
		Scanner input = new Scanner(System.in);  
		System.setProperty("webdriver.chrome.driver", "C:\\test_driver\\chromedriver.exe"); 
		String WebAddress = "http://localhost:81"; 	
		System.out.println("1:User Login Function Test Script");
		System.out.println("2:Add Cart Function Test Script");
		System.out.println("3:Exit");
		
		int option = input.nextInt();
		input.close();
		
		switch(option)
		{
		case 1:
			user_login(WebAddress);
			break;
		case 2:
			add_cart_func(WebAddress);
			break;
		default:
			System.exit(0);
		}
	}

	private static void user_login(String website) throws InterruptedException {
		WebDriver driver = new ChromeDriver();
		driver.get(website);
		driver.findElement(By.id("link_lg")).click();
		Thread.sleep(2000); //delay 2 seconds
		driver.findElement(By.name("username")).sendKeys("admin"); 
		Thread.sleep(2000);
		driver.findElement(By.name("password")).sendKeys("admin");
		Thread.sleep(2000);
		driver.findElement(By.name("login")).click();
		Thread.sleep(2000); 
		driver.quit(); 
	}
	
	private static void add_cart_func(String website) throws InterruptedException {
		WebDriver driver = new ChromeDriver();
		driver.get(website);
		driver.findElement(By.id("link_lg")).click();
		Thread.sleep(2000); //delay 2 seconds
		driver.findElement(By.name("username")).sendKeys("admin"); 
		Thread.sleep(2000);
		driver.findElement(By.name("password")).sendKeys("admin");
		Thread.sleep(2000);
		driver.findElement(By.name("login")).click();
		Thread.sleep(2000); 
		driver.findElement(By.id("categories")).click();
		Thread.sleep(2000); 
		driver.findElement(By.id("cat_toys")).click();
		Thread.sleep(2000);
		driver.findElement(By.id("item_2")).click();
		Thread.sleep(2000); 
		driver.findElement(By.id("categories")).click();
		Thread.sleep(2000); 
		driver.findElement(By.id("cat_toys")).click();
		Thread.sleep(2000);
		driver.findElement(By.id("item_1")).click();
		Thread.sleep(2000);
		driver.quit(); //exit web
	}
	
}

