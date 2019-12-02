<?php  //[STAMP] 435a9ee73ab6675f928ac55b2f1f853a
namespace SprykerEcoTest\Zed\Payone\_generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

trait PayoneZedTesterActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Handles and checks exception called inside callback function.
     * Either exception class name or exception instance should be provided.
     *
     * ```php
     * <?php
     * $I->expectException(MyException::class, function() {
     *     $this->doSomethingBad();
     * });
     *
     * $I->expectException(new MyException(), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     * If you want to check message or exception code, you can pass them with exception instance:
     * ```php
     * <?php
     * // will check that exception MyException is thrown with "Don't do bad things" message
     * $I->expectException(new MyException("Don't do bad things"), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     *
     * @deprecated Use expectThrowable() instead
     * @param $exception string or \Exception
     * @param $callback
     * @see \Codeception\Module\Asserts::expectException()
     */
    public function expectException($exception, $callback) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('expectException', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Handles and checks throwables (Exceptions/Errors) called inside the callback function.
     * Either throwable class name or throwable instance should be provided.
     *
     * ```php
     * <?php
     * $I->expectThrowable(MyThrowable::class, function() {
     *     $this->doSomethingBad();
     * });
     *
     * $I->expectThrowable(new MyException(), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     * If you want to check message or throwable code, you can pass them with throwable instance:
     * ```php
     * <?php
     * // will check that throwable MyError is thrown with "Don't do bad things" message
     * $I->expectThrowable(new MyError("Don't do bad things"), function() {
     *     $this->doSomethingBad();
     * });
     * ```
     *
     * @param $throwable string or \Throwable
     * @param $callback
     * @see \Codeception\Module\Asserts::expectThrowable()
     */
    public function expectThrowable($throwable, $callback) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('expectThrowable', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are equal.
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @param float  $delta
     * @see \Codeception\Module\Asserts::assertEquals()
     */
    public function assertEquals($expected, $actual, $message = null, $delta = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertEquals', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are not equal
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @param float  $delta
     * @see \Codeception\Module\Asserts::assertNotEquals()
     */
    public function assertNotEquals($expected, $actual, $message = null, $delta = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotEquals', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are same
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertSame()
     */
    public function assertSame($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertSame', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that two variables are not same
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotSame()
     */
    public function assertNotSame($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotSame', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is greater than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertGreaterThan()
     */
    public function assertGreaterThan($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertGreaterThan', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is greater or equal than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertGreaterThanOrEqual()
     */
    public function assertGreaterThanOrEqual($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertGreaterThanOrEqual', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is less than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertLessThan()
     */
    public function assertLessThan($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertLessThan', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that actual is less or equal than expected
     *
     * @param        $expected
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertLessThanOrEqual()
     */
    public function assertLessThanOrEqual($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertLessThanOrEqual', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that haystack contains needle
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     * @see \Codeception\Module\Asserts::assertContains()
     */
    public function assertContains($needle, $haystack, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertContains', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that haystack doesn't contain needle.
     *
     * @param        $needle
     * @param        $haystack
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotContains()
     */
    public function assertNotContains($needle, $haystack, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotContains', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that string match with pattern
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     * @see \Codeception\Module\Asserts::assertRegExp()
     */
    public function assertRegExp($pattern, $string, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertRegExp', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that string not match with pattern
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotRegExp()
     */
    public function assertNotRegExp($pattern, $string, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotRegExp', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that a string starts with the given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     * @see \Codeception\Module\Asserts::assertStringStartsWith()
     */
    public function assertStringStartsWith($prefix, $string, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertStringStartsWith', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that a string doesn't start with the given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     * @see \Codeception\Module\Asserts::assertStringStartsNotWith()
     */
    public function assertStringStartsNotWith($prefix, $string, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertStringStartsNotWith', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is empty.
     *
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertEmpty()
     */
    public function assertEmpty($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertEmpty', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is not empty.
     *
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotEmpty()
     */
    public function assertNotEmpty($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotEmpty', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is NULL
     *
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNull()
     */
    public function assertNull($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNull', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that variable is not NULL
     *
     * @param        $actual
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotNull()
     */
    public function assertNotNull($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotNull', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that condition is positive.
     *
     * @param        $condition
     * @param string $message
     * @see \Codeception\Module\Asserts::assertTrue()
     */
    public function assertTrue($condition, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertTrue', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the condition is NOT true (everything but true)
     *
     * @param        $condition
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotTrue()
     */
    public function assertNotTrue($condition, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotTrue', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that condition is negative.
     *
     * @param        $condition
     * @param string $message
     * @see \Codeception\Module\Asserts::assertFalse()
     */
    public function assertFalse($condition, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertFalse', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that the condition is NOT false (everything but false)
     *
     * @param        $condition
     * @param string $message
     * @see \Codeception\Module\Asserts::assertNotFalse()
     */
    public function assertNotFalse($condition, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotFalse', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file exists
     *
     * @param string $filename
     * @param string $message
     * @see \Codeception\Module\Asserts::assertFileExists()
     */
    public function assertFileExists($filename, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertFileExists', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks if file doesn't exist
     *
     * @param string $filename
     * @param string $message
     * @see \Codeception\Module\Asserts::assertFileNotExists()
     */
    public function assertFileNotExists($filename, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertFileNotExists', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expected
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertGreaterOrEquals()
     */
    public function assertGreaterOrEquals($expected, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertGreaterOrEquals', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expected
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertLessOrEquals()
     */
    public function assertLessOrEquals($expected, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertLessOrEquals', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertIsEmpty()
     */
    public function assertIsEmpty($actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsEmpty', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $key
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertArrayHasKey()
     */
    public function assertArrayHasKey($key, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertArrayHasKey', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $key
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertArrayNotHasKey()
     */
    public function assertArrayNotHasKey($key, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertArrayNotHasKey', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $expectedCount
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertCount()
     */
    public function assertCount($expectedCount, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertCount', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $class
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertInstanceOf()
     */
    public function assertInstanceOf($class, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertInstanceOf', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $class
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertNotInstanceOf()
     */
    public function assertNotInstanceOf($class, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotInstanceOf', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param $type
     * @param $actual
     * @param $description
     * @see \Codeception\Module\Asserts::assertInternalType()
     */
    public function assertInternalType($type, $actual, $description = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertInternalType', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Fails the test with message.
     *
     * @param $message
     * @see \Codeception\Module\Asserts::fail()
     */
    public function fail($message) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('fail', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertStringContainsString()
     */
    public function assertStringContainsString($needle, $haystack, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertStringContainsString', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertStringNotContainsString()
     */
    public function assertStringNotContainsString($needle, $haystack, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertStringNotContainsString', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertStringContainsStringIgnoringCase()
     */
    public function assertStringContainsStringIgnoringCase($needle, $haystack, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertStringContainsStringIgnoringCase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertStringNotContainsStringIgnoringCase()
     */
    public function assertStringNotContainsStringIgnoringCase($needle, $haystack, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertStringNotContainsStringIgnoringCase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsArray()
     */
    public function assertIsArray($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsArray', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsBool()
     */
    public function assertIsBool($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsBool', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsFloat()
     */
    public function assertIsFloat($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsFloat', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsInt()
     */
    public function assertIsInt($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsInt', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsNumeric()
     */
    public function assertIsNumeric($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsNumeric', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsObject()
     */
    public function assertIsObject($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsObject', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsResource()
     */
    public function assertIsResource($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsResource', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsString()
     */
    public function assertIsString($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsString', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsScalar()
     */
    public function assertIsScalar($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsScalar', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsCallable()
     */
    public function assertIsCallable($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsCallable', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsNotArray()
     */
    public function assertIsNotArray($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsNotArray', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsNotBool()
     */
    public function assertIsNotBool($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsNotBool', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsNotFloat()
     */
    public function assertIsNotFloat($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsNotFloat', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsNotInt()
     */
    public function assertIsNotInt($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsNotInt', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsNotNumeric()
     */
    public function assertIsNotNumeric($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsNotNumeric', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsNotObject()
     */
    public function assertIsNotObject($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsNotObject', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsNotResource()
     */
    public function assertIsNotResource($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsNotResource', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsNotString()
     */
    public function assertIsNotString($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsNotString', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsNotScalar()
     */
    public function assertIsNotScalar($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsNotScalar', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertIsNotCallable()
     */
    public function assertIsNotCallable($actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertIsNotCallable', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertEqualsCanonicalizing()
     */
    public function assertEqualsCanonicalizing($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertEqualsCanonicalizing', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertNotEqualsCanonicalizing()
     */
    public function assertNotEqualsCanonicalizing($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotEqualsCanonicalizing', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertEqualsIgnoringCase()
     */
    public function assertEqualsIgnoringCase($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertEqualsIgnoringCase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertNotEqualsIgnoringCase()
     */
    public function assertNotEqualsIgnoringCase($expected, $actual, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotEqualsIgnoringCase', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertEqualsWithDelta()
     */
    public function assertEqualsWithDelta($expected, $actual, $delta, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertEqualsWithDelta', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     *
     * @see \Codeception\Module\Asserts::assertNotEqualsWithDelta()
     */
    public function assertNotEqualsWithDelta($expected, $actual, $delta, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertNotEqualsWithDelta', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $key
     * @param array|bool|float|int|string $value
     *
     * @return void
     * @see \SprykerTest\Shared\Testify\Helper\LocatorHelper::setConfig()
     */
    public function setConfig($key, $value) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('setConfig', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $key
     * @param array|bool|float|int|string $value
     *
     * @return void
     * @see \SprykerTest\Shared\Testify\Helper\ConfigHelper::mockEnvironmentConfig()
     */
    public function mockEnvironmentConfig($key, $value) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('mockEnvironmentConfig', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $methodName
     * @param mixed $return
     *
     * @throws \Exception
     *
     * @return \Spryker\Shared\Kernel\AbstractBundleConfig|null
     * @see \SprykerTest\Shared\Testify\Helper\ConfigHelper::mockConfigMethod()
     */
    public function mockConfigMethod($methodName, $return) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('mockConfigMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $methodName
     * @param mixed $return
     *
     * @throws \Exception
     *
     * @return \Spryker\Shared\Kernel\AbstractBundleConfig|null
     * @see \SprykerTest\Shared\Testify\Helper\ConfigHelper::mockSharedConfigMethod()
     */
    public function mockSharedConfigMethod($methodName, $return) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('mockSharedConfigMethod', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @return \Spryker\Shared\Kernel\AbstractBundleConfig
     * @see \SprykerTest\Shared\Testify\Helper\ConfigHelper::getModuleConfig()
     */
    public function getModuleConfig() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getModuleConfig', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $key
     *
     * @return void
     * @see \SprykerTest\Shared\Testify\Helper\ConfigHelper::removeConfig()
     */
    public function removeConfig($key) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('removeConfig', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @return \Spryker\Shared\Kernel\LocatorLocatorInterface|\Generated\Zed\Ide\AutoCompletion|\Generated\Service\Ide\AutoCompletion
     * @see \SprykerTest\Shared\Testify\Helper\LocatorHelper::getLocator()
     */
    public function getLocator() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getLocator', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @return \Spryker\Zed\Kernel\Business\AbstractFacade
     * @see \SprykerTest\Shared\Testify\Helper\LocatorHelper::getFacade()
     */
    public function getFacade() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('getFacade', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param string $key
     * @param mixed $value
     * @param string|null $onlyFor
     *
     * @return void
     * @see \SprykerTest\Shared\Testify\Helper\DependencyHelper::setDependency()
     */
    public function setDependency($key, $value, $onlyFor = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('setDependency', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param array $override
     * @param string|null $stateMachineProcessName
     * @param \Spryker\Zed\CheckoutExtension\Dependency\Plugin\CheckoutDoSaveOrderInterface[] $saveOrderStack
     *
     * @return \Generated\Shared\Transfer\SaveOrderTransfer
     * @see \SprykerTest\Shared\Sales\Helper\SalesDataHelper::haveOrder()
     */
    public function haveOrder($override = null, $stateMachineProcessName = null, $saveOrderStack = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('haveOrder', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     * @param string|null $stateMachineProcessName
     *
     * @return \Generated\Shared\Transfer\SaveOrderTransfer
     * @see \SprykerTest\Shared\Sales\Helper\SalesDataHelper::haveOrderFromQuote()
     */
    public function haveOrderFromQuote($quoteTransfer, $stateMachineProcessName = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('haveOrderFromQuote', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     * @param string|null $stateMachineProcessName
     * @param \Spryker\Zed\CheckoutExtension\Dependency\Plugin\CheckoutDoSaveOrderInterface[] $saveOrderStack
     *
     * @return \Generated\Shared\Transfer\SaveOrderTransfer
     * @see \SprykerTest\Shared\Sales\Helper\SalesDataHelper::haveOrderUsingPreparedQuoteTransfer()
     */
    public function haveOrderUsingPreparedQuoteTransfer($quoteTransfer, $stateMachineProcessName = null, $saveOrderStack = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('haveOrderUsingPreparedQuoteTransfer', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param array $idSalesOrderItems
     *
     * @return void
     * @see \SprykerTest\Zed\Oms\Helper\OmsHelper::triggerEventForNewOrderItems()
     */
    public function triggerEventForNewOrderItems($idSalesOrderItems) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('triggerEventForNewOrderItems', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param int $idSalesOrderItem
     * @param \DateInterval $timeout
     *
     * @return void
     * @see \SprykerTest\Zed\Oms\Helper\OmsHelper::moveItemAfterTimeOut()
     */
    public function moveItemAfterTimeOut($idSalesOrderItem, $timeout) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('moveItemAfterTimeOut', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param int $idSalesOrderItem
     * @param string $stateName
     *
     * @return void
     * @see \SprykerTest\Zed\Oms\Helper\OmsHelper::setItemState()
     */
    public function setItemState($idSalesOrderItem, $stateName) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('setItemState', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @return void
     * @see \SprykerTest\Zed\Oms\Helper\OmsHelper::checkCondition()
     */
    public function checkCondition() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('checkCondition', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @return void
     * @see \SprykerTest\Zed\Oms\Helper\OmsHelper::checkTimeout()
     */
    public function checkTimeout() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('checkTimeout', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @return void
     * @see \SprykerTest\Zed\Oms\Helper\OmsHelper::clearLocks()
     */
    public function clearLocks() {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('clearLocks', func_get_args()));
    }

 
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * @param array $activeProcesses
     * @param string|null $xmlFolder
     *
     * @return void
     * @see \SprykerTest\Zed\Oms\Helper\OmsHelper::configureTestStateMachine()
     */
    public function configureTestStateMachine($activeProcesses, $xmlFolder = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('configureTestStateMachine', func_get_args()));
    }
}
