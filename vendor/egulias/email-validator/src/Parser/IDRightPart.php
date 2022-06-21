<?php

namespace Egulias\EmailValidator\Parser;

use Egulias\EmailValidator\EmailLexer;
use Egulias\EmailValidator\Result\Result;
use Egulias\EmailValidator\Result\ValidEmail;
use Egulias\EmailValidator\Result\InvalidEmail;
use Egulias\EmailValidator\Result\Reason\ExpectingATEXT;

class IDRightPart extends DomainPart
{
    protected function validateTokens(bool $hasComments) : Result
    {
<<<<<<< HEAD
        $invalidDomainTokens = array(
=======
        $invalidDomainTokens = [
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
            EmailLexer::S_DQUOTE => true,
            EmailLexer::S_SQUOTE => true,
            EmailLexer::S_BACKTICK => true,
            EmailLexer::S_SEMICOLON => true,
            EmailLexer::S_GREATERTHAN => true,
            EmailLexer::S_LOWERTHAN => true,
<<<<<<< HEAD
        );
=======
        ];
>>>>>>> 0beb9d49fd45fc71e2c614d0f2109f5dc1ab0029
    
        if (isset($invalidDomainTokens[$this->lexer->token['type']])) {
            return new InvalidEmail(new ExpectingATEXT('Invalid token in domain: ' . $this->lexer->token['value']), $this->lexer->token['value']);
        }
        return new ValidEmail();
    }
}