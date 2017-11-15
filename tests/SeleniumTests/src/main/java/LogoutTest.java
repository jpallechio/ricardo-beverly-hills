import junit.framework.TestCase;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class LogoutTest extends TestCase {
    private WebDriver chromeDriver;

    public void setUp(){
        System.setProperty("webdriver.chrome.driver", "src/main/resources/chromedriver.exe");
        chromeDriver = new ChromeDriver();
        chromeDriver.get("http://rbh.greenrivertech.net/login");

        //need to login to test the logout
        chromeDriver.findElement(By.id("email")).sendKeys("acp@acp.com");
        chromeDriver.findElement(By.id("password")).sendKeys("acpacp");
        chromeDriver.findElement(By.className("btn-primary")).click();
    }

    public void testLogout(){
        chromeDriver.findElement(By.className("dropdown-toggle")).click();
        chromeDriver.findElement(By.xpath("//a[contains(.,'Logout')]")).click();

        assertEquals(chromeDriver.getCurrentUrl(), "http://rbh.greenrivertech.net/login");
    }
}
