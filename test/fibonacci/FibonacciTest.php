<?php

namespace Test;

use DateTime;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    public function getNumbersOneOfTenWithExpectedFibonacciNumbers(): array
    {
        return [
            ['1', '1',],
            ['2', '1',],
            ['3', '2',],
            ['4', '3',],
            ['5', '5',],
            ['6', '8',],
            ['7', '13',],
            ['8', '21',],
            ['9', '34',],
            ['10', '55']
        ];
    }

    /**
     * @test
     * @dataProvider getNumbersOneOfTenWithExpectedFibonacciNumbers
     * @param string $sequenceNumber
     * @param string $fibonacciNumber
     */
    public function givenFirstTenNumbersOfTheFibonacciSequence_ShouldAssertReturnedNumbers(
        string $sequenceNumber,
        string $fibonacciNumber
    ): void
    {
        $returnValue = $this->runExerciseWithParameter($sequenceNumber);
        $errorMessage = "Error to assert $returnValue with $fibonacciNumber";
        Assert::assertEquals($fibonacciNumber, $returnValue, $errorMessage);
    }

    public function getLargeNumbersWithExpectedFibonacciNumbers(): array
    {
        return [
            ['30', '832040',],
            ['32', '2178309',],
            ['35', '9227465',],
            ['37', '24157817',]
        ];
    }

    /**
     * @test
     * @dataProvider getLargeNumbersWithExpectedFibonacciNumbers
     * @param string $inputNumber
     * @param string $fibonacciNumber
     */
    public function givenLargeNumber_ShouldCalculateTheFibonacciNumber(
        string $inputNumber,
        string $fibonacciNumber
    ): void
    {
        $errorMessageAssertNumbers = 'Error when calculating a large number of the Fibonacci sequence';
        $errorMessageTimeOut = 'Error time out';

        $testStartDate = new DateTime('now');
        $secondInitialTest = $testStartDate->format('ms');

        $returnValue = $this->runExerciseWithParameter($inputNumber);

        $testEndTime = new DateTime('now');
        $secondEndTest = $testEndTime->format('ms');

        Assert::assertEquals($fibonacciNumber, $returnValue, $errorMessageAssertNumbers);
        Assert::assertEqualsWithDelta($secondInitialTest, $secondEndTest, 1, $errorMessageTimeOut);
    }

    private function runExerciseWithParameter(string $parameter): string
    {
        return exec("php -f /opt/project/public/index.php $parameter");
    }
}
