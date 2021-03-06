<?php declare(strict_types=1);

namespace Room11\Jeeves\Tests\Twitter;

use Room11\Jeeves\External\TwitterCredentials;

class CredentialsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TwitterCredentials
     */
    private $credentials;

    public function setUp()
    {
        $this->credentials = new TwitterCredentials('foo', 'bar', 'baz', 'qux');
    }

    public function testGetConsumerKey()
    {
        $this->assertSame('foo', $this->credentials->getConsumerKey());
    }

    public function testGetConsumerSecret()
    {
        $this->assertSame('bar', $this->credentials->getConsumerSecret());
    }

    public function testGetAccessToken()
    {
        $this->assertSame('baz', $this->credentials->getAccessToken());
    }

    public function testGetAccessTokenSecret()
    {
        $this->assertSame('qux', $this->credentials->getAccessTokenSecret());
    }
}
