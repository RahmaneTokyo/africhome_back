<?php

namespace Egulias\EmailValidator\Result\Reason;

class UnOpenedComment implements Reason
{
    public function code() : int
    {
        return 152;
    }

    public function description(): string
    {
<<<<<<< HEAD
        return 'Missing openning comment parentheses - https://tools.ietf.org/html/rfc5322#section-3.2.2';
=======
        return 'Missing opening comment parentheses - https://tools.ietf.org/html/rfc5322#section-3.2.2';
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    }
}