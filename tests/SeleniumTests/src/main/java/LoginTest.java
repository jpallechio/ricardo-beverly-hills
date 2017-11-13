import junit.framework.TestCase;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.By;



public class LoginTest extends TestCase {
    private WebDriver chromeDriver;

    public void setUp(){
        System.setProperty("webdriver.chrome.driver", "src/main/resources/chromedriver.exe");
        chromeDriver = new ChromeDriver();
        chromeDriver.get("http://rbh.greenrivertech.net/login");
    }

    public void testEmailLoginWithButton(){
        chromeDriver.findElement(By.id("email")).sendKeys("email");
        chromeDriver.findElement(By.id("password")).sendKeys("password");
        chromeDriver.findElement(By.className("btn-primary")).click();

        assertEquals(chromeDriver.getCurrentUrl(), "http://rbh.greenrivertech.net/part-company-claim");
    }
}