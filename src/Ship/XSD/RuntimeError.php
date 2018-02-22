<?php

namespace TNTExpressConnect\Ship\XSD;

/**
 * Class representing RuntimeError
 */
class RuntimeError
{

    /**
     * @property string $errorReason
     */
    private $errorReason = null;

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

