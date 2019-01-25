<?php declare(strict_types=1);

namespace IBankWallet\Controller\IBankXRP\Exception;

/**
 * An exception for transaction type errors.
 *
 * @package IBankWallet\Controller\IBankXRP\Exception
 */
class TransactionSignException extends RippledException
{
    // Require a message in the constructor.
    public function __construct($message, $code = 0, RippledException $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
