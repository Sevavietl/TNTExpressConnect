<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing ParseErrorType
 *
 * The XML parse error messages returned by
 *  ExpressConnect e.g. Element content is invalid
 *  according
 *  to the
 *  XSD/Schema.
 * XSD Type: parseError
 */
class ParseErrorType
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
     * This element indicates the line number where the error occurred in the request
     * XML.
     *
     * @property string $errorLine
     */
    private $errorLine = null;

    /**
     * This element indicates the position on the line where the error occurred in the
     * request XML
     *
     * @property string $errorLinepos
     */
    private $errorLinepos = null;

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
     * Gets as errorLine
     *
     * This element indicates the line number where the error occurred in the request
     * XML.
     *
     * @return string
     */
    public function getErrorLine()
    {
        return $this->errorLine;
    }

    /**
     * Sets a new errorLine
     *
     * This element indicates the line number where the error occurred in the request
     * XML.
     *
     * @param string $errorLine
     * @return self
     */
    public function setErrorLine($errorLine)
    {
        $this->errorLine = $errorLine;
        return $this;
    }

    /**
     * Gets as errorLinepos
     *
     * This element indicates the position on the line where the error occurred in the
     * request XML
     *
     * @return string
     */
    public function getErrorLinepos()
    {
        return $this->errorLinepos;
    }

    /**
     * Sets a new errorLinepos
     *
     * This element indicates the position on the line where the error occurred in the
     * request XML
     *
     * @param string $errorLinepos
     * @return self
     */
    public function setErrorLinepos($errorLinepos)
    {
        $this->errorLinepos = $errorLinepos;
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

