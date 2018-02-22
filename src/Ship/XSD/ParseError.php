<?php

namespace TNTExpressConnect\Ship\XSD;

/**
 * Class representing ParseError
 */
class ParseError
{

    /**
     * @property string $errorReason
     */
    private $errorReason = null;

    /**
     * @property string $errorLine
     */
    private $errorLine = null;

    /**
     * @property string $errorLinepos
     */
    private $errorLinepos = null;

    /**
     * @property string $errorSrcText
     */
    private $errorSrcText = null;

    /**
     * Gets as errorReason
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
     * @return string
     */
    public function getErrorLine()
    {
        return $this->errorLine;
    }

    /**
     * Sets a new errorLine
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
     * @return string
     */
    public function getErrorLinepos()
    {
        return $this->errorLinepos;
    }

    /**
     * Sets a new errorLinepos
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
     * @return string
     */
    public function getErrorSrcText()
    {
        return $this->errorSrcText;
    }

    /**
     * Sets a new errorSrcText
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

