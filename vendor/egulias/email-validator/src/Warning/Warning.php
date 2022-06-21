<?php

namespace Egulias\EmailValidator\Warning;

abstract class Warning
{
    const CODE = 0;

    /**
     * @var string
     */
    protected $message = '';

    /**
     * @var int
     */
    protected $rfcNumber = 0;

    /**
     * @return string
     */
    public function message()
    {
        return $this->message;
    }

    /**
     * @return int
     */
    public function code()
    {
        return self::CODE;
    }

    /**
     * @return int
     */
    public function RFCNumber()
    {
        return $this->rfcNumber;
    }

    public function __toString()
    {
<<<<<<< HEAD
        return $this->message() . " rfc: " .  $this->rfcNumber . "interal code: " . static::CODE;
=======
        return $this->message() . " rfc: " .  $this->rfcNumber . "internal code: " . static::CODE;
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }
}
