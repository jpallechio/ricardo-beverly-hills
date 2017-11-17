import junit.framework.TestCase;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.By;

public class NavbarTest extends TestCase
{
    private WebDriver chromeDriver;

    public void setUp()
    {
        System.setProperty("webdriver.chrome.driver", "src/main/resources/chromedriver.exe");
        chromeDriver = new ChromeDriver();
        chromeDriver.get("http://rbh.greenrivertech.net/login");
        chromeDriver.findElement(By.id("email")).sendKeys("acp@acp.com");
        chromeDriver.findElement(By.id("password")).sendKeys("acpacp");
        chromeDriver.findElement(By.className("btn-primary")).click();
    }

    public void testClaim()
    {
        chromeDriver.findElement(By.xpath("//*[@id='navbar']/ul/li[1]/a")).click();

        assertEquals(chromeDriver.getCurrentUrl(), "http://rbh.greenrivertech.net/claim");

        chromeDriver.close();
    }

    public void testCustomer()
    {
        chromeDriver.findElement(By.xpath("//*[@id=\'navbar\']/ul/li[2]/a")).click();

        assertEquals(chromeDriver.getCurrentUrl(), "http://rbh.greenrivertech.net/customer");

        chromeDriver.close();
    }

    public void testProducts()
    {
        chromeDriver.findElement(By.xpath("//*[@id=\'navbar\']/ul/li[3]/a")).click();

        assertEquals(chromeDriver.getCurrentUrl(), "http://rbh.greenrivertech.net/product");

        chromeDriver.close();
    }

    public void testRepair()
    {
        chromeDriver.findElement(By.xpath("//*[@id=\'navbar\']/ul/li[4]/a")).click();

        assertEquals(chromeDriver.getCurrentUrl(), "http://rbh.greenrivertech.net/repair-center");

        chromeDriver.close();
    }

    public void testDamage()
    {
        chromeDriver.findElement(By.xpath("//*[@id=\'navbar\']/ul/li[5]/a")).click();

        assertEquals(chromeDriver.getCurrentUrl(), "http://rbh.greenrivertech.net/damage-code");

        chromeDriver.close();
    }
}