<?php
use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase 
{
    public function test_mail()
    {
        $email= Validate::email('i@rimorsoft.com');
        $this->assertTrue($email);
        $email= Validate::email('i@@rimorsoft.com');
        $this->assertFalse($email);
    }
    public function test_url()
    {
        $url= Validate::url('https://platzi.com');
        $this->assertTrue($url);
        $url= Validate::url('platzi.com');
        $this->assertFalse($url);
    }
    public function test_password()
    {
        $password= Validate::password('123456');
        $this->assertTrue($password);
        $password= Validate::url('012345');
        $this->assertFalse($password);
    }
    
}
