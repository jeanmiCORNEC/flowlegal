<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class InvoiceNumberTest extends TestCase
{
    public function test_generates_invoice_number_format(): void
    {
        // Exemple simple pour démarrer : à remplacer par ton vrai service plus tard
        $year = (int) date('Y');
        $seq  = 1;
        $number = sprintf('FAC-%d-%05d', $year, $seq);

        $this->assertMatchesRegularExpression('/^FAC-\d{4}-\d{5}$/', $number);
    }
}
