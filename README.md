# Validator

[![Build Status](https://travis-ci.org/vitrya/Validator_Bergheaud_Pauline.svg?branch=master)](https://travis-ci.org/vitrya/Validator_Bergheaud_Pauline)

[![Code Coverage](https://scrutinizer-ci.com/g/vitrya/Validator_Bergheaud_Pauline/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/vitrya/Validator_Bergheaud_Pauline/?branch=master)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/vitrya/Validator_Bergheaud_Pauline/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/vitrya/Validator_Bergheaud_Pauline/?branch=master)

## Array
ArrayValidator::numberElementsBetween ($array, int $min = 0, int $max)
ArrayValidator::numberElementsComparison ($array, SUPERIOR|INFERIOR|EQUAL|SUPERIOR_OR_EQUAL|INFERIOR_OR_EQUAL,int)
ArrayValidator::keyExists ($array, VALUE|KEY, $key|$value)

## Boolean
BooleanValidator::isTrue (boolean $boolean)

## DateTime
DateTimeValidator::isYear(\dateTime $dateTime, $year)
DateTimeValidator::isDate(\dateTime $dateTime, $year, $month, $day)

## Integer
IntegerValidator::between (int $integer, int $min, int $max);
IntegerValidator::comparison (int $integer,SUPERIOR|INFERIOR|EQUAL|SUPERIOR_OR_EQUAL|INFERIOR_OR_EQUAL, int);

## String
StringValidator::noWhiteSpace(string $string)
StringValidator::lengthBetween ($string, int $min = 0, int $max)
StringValidator::lengthComparison ($string, SUPERIOR|INFERIOR|EQUAL, int $compared)


