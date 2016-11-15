<?php

namespace rsporteman\SnippetTest;

use rsporteman\Snippet\Timestampable;
use PHPUnit\Framework\TestCase;

class TimestampableTest extends TestCase
{
    use Timestampable;

    public function testAttributesExist()
    {
        $this->assertClassHasAttribute('createdAt', 'rsporteman\SnippetTest\TimestampableTest', 'attribute createAt not found.');
        $this->assertClassHasAttribute('updatedAt', 'rsporteman\SnippetTest\TimestampableTest', 'attribute updatedAt not found.');
    }

    public function testMethodsExist()
    {
        $this->assertTrue(\method_exists($this, 'setUpdatedAt'), 'method setUpdatedAt() not found.');
        $this->assertTrue(\method_exists($this, 'setCreatedAt'), 'method setCreatedAt() not found.');
        $this->assertTrue(\method_exists($this, 'getUpdatedAt'), 'method getUpdatedAt() not found.');
        $this->assertTrue(\method_exists($this, 'getCreatedAt'), 'method getCreatedAt() not found.');
    }

    public function testMethodsSetAndGetCreatedAt()
    {
        $createdAt = new \DateTime('2016-11-14T20:48:01');

        $this->setCreatedAt($createdAt);
        $this->assertSame($createdAt, $this->getCreatedAt(), 'setCreatedAt() and getCreatedAt() do not match.');
    }

    public function testMethodsSetAndGetUpdatedAt()
    {
        $updatedAt = new \DateTime('2016-11-14T20:58:01');

        $this->setUpdatedAt($updatedAt);
        $this->assertSame($updatedAt, $this->getUpdatedAt(), 'setUpdatedAt() and getUpdatedAt() do not match.');
    }

    public function testErrorTypeInSetUpdateAt()
    {
        try {
            $this->setUpdatedAt('wrong_type');
        } catch (\Exception $e) {
            return;
        }

        $this->fail('Error type not throw.');
    }

    public function testErrorTypeInSetCreatedAt()
    {
        try {
            $this->setCreatedAt('wrong_type');
        } catch (\Exception $e) {
            return;
        }

        $this->fail('Error type not throw.');
    }

}