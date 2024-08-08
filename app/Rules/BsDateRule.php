<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\BsValidator\NepaliCalendar;

class BsDateRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!$this->isValidDateFormat($value)) {
            $fail("The date is incorrect. Date must be from 2000 to 2090");
        }
    }

    protected function isValidDateFormat($value)
    {
        $formatedDate = $this->formatDate($value);
        $nepaliCalenderValidator = new NepaliCalendar;
        return $nepaliCalenderValidator->checkDate($formatedDate);
        
    }

    protected function formatDate(string $value)    
    {
        list($year, $month, $day) = explode('-', $value);
        return sprintf('%04d-%02d-%02d',$year, $month, $day);
    }
    
}
