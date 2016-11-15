<?php
namespace rsporteman\SnippetTest;

use rsporteman\Snippet\Identifier;

class IdentifierTest extends \PHPUnit\Framework\TestCase
{
    use Identifier;

    public function testMethodsExist()
    {
        $this->assertTrue(\method_exists($this, 'setId'), 'method setId() not found.');
        $this->assertTrue(\method_exists($this, 'getId'), 'method getId() not found.');
    }

    public function testAttributeExist()
    {
        $this->assertClassHasAttribute('id', 'rsporteman\SnippetTest\IdentifierTest', 'Attribute id not found.');
    }

    public function testSetAndGetMethods()
    {
        $this->setId(10);
        $this->assertEquals(10, $this->getId(), 'Set and Get do not match' );
    }

    public function testThrowException()
    {
        try {
            $this->setId('string_is_wrong_type');
        } catch (\Exception $e) {
            return;
        }

        $this->fail('Exception not throw');
    }
}