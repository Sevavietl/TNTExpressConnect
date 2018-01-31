<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing RuntimeErrorType
 *
 * The runtime error messages returned by
 *  ExpressConnect e.g pricing service not available
 * XSD Type: runtimeError
 */
class RuntimeErrorType
{

    /**
     * This element contains a description indicating that the pricing request has
     * failed and
     *  what
     *  action the customer should take.
     *
     * @property string $errorReason
     */
    private $errorReason = null;

    /**
     * This element might contain some additional information regarding the source of
     * the
     *  error.
     *
     * @property string $errorSrcText
     */
    private $errorSrcText = null;

    /**
     * Gets as errorReason
     *
     * This element contains a description indicating that the pricing request has
     * failed and
     *  what
     *  action the customer should take.
     *
     * @return string
     */
    public function getErrorReason()
    {
        return $this->errorReason;
    }

    /**
     * Sets a new errorReason
     *
     * This element contains a description indicating that the pricing request has
     * failed and
     *  what
     *  action the customer should take.
     *
     * @param string $errorReason
     * @return self
     */
    public function setErrorReason($errorReason)
    {
        $this->errorReason = $errorReason;
        return $this;
    }

    /**
     * Gets as errorSrcText
     *
     * This element might contain some additional information regarding the source of
     * the
     *  error.
     *
     * @return string
     */
    public function getErrorSrcText()
    {
        return $this->errorSrcText;
    }

    /**
     * Sets a new errorSrcText
     *
     * This element might contain some additional information regarding the source of
     * the
     *  error.
     *
     * @param string $errorSrcText
     * @return self
     */
    public function setErrorSrcText($errorSrcText)
    {
        $this->errorSrcText = $errorSrcText;
        return $this;
    }


}

