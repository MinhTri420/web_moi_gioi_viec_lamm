<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PostCurrencySalaryEnum extends Enum
{
    public const VND = '1';
    public const USD = '2';
}
