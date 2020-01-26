<?php

namespace Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    public function getFirstTenNumbersOfTheFibonacciSequence(): array
    {
        return [
            [
                ['1', '1', '2', '3', '5', '8', '13', '21', '34', '55']
            ]
        ];
    }

    /**
     * @test
     * @dataProvider getFirstTenNumbersOfTheFibonacciSequence
     * @param array $FibonacciSequence
     */
    public function givenFirstTenNumbersOfTheFibonacciSequence_ShouldAssertReturnedNumbers(array $FibonacciSequence): void
    {
        $number = 1;
        $returnedValues = [];
        $errorMessage = 'Error calculating the first ten numbers of the Fibonacci sequence';

        while ($number <= 10) {
            $returnedValues[] = $this->runExerciseWithParameter($number);
            $number++;
        }

        Assert::assertEquals($FibonacciSequence, $returnedValues, $errorMessage);
    }

    /**
     * @test
     */
    public function givenLargeNumber_ShouldCalculateTheFibonacciNumber(): void
    {
        $errorMessage = 'Error when calculating a large number of the Fibonacci sequence';
        $returnValue = $this->runExerciseWithParameter('521');
        Assert::assertEquals('3.4125228500685E+108', $returnValue, $errorMessage);
    }

    private function runExerciseWithParameter(string $parameter): string
    {
        return exec("php -f /opt/project/public/index.php $parameter");
    }
}
