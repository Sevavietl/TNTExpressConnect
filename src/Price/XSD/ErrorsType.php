<?php

namespace TNTExpressConnect\Price\XSD;

/**
 * Class representing ErrorsType
 *
 *
 * XSD Type: errors
 */
class ErrorsType
{

    /**
     * @property \TNTExpressConnect\Price\XSD\RuntimeErrorType[] $runtimeError
     */
    private $runtimeError = array(
        
    );

    /**
     * @property \TNTExpressConnect\Price\XSD\ParseErrorType[] $parseError
     */
    private $parseError = array(
        
    );

    /**
     * @property \TNTExpressConnect\Price\XSD\BrokenRuleType[] $brokenRule
     */
    private $brokenRule = array(
        
    );

    /**
     * Adds as runtimeError
     *
     * @return self
     * @param \TNTExpressConnect\Price\XSD\RuntimeErrorType $runtimeError
     */
    public function addToRuntimeError(\TNTExpressConnect\Price\XSD\RuntimeErrorType $runtimeError)
    {
        $this->runtimeError[] = $runtimeError;
        return $this;
    }

    /**
     * isset runtimeError
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRuntimeError($index)
    {
        return isset($this->runtimeError[$index]);
    }

    /**
     * unset runtimeError
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRuntimeError($index)
    {
        unset($this->runtimeError[$index]);
    }

    /**
     * Gets as runtimeError
     *
     * @return \TNTExpressConnect\Price\XSD\RuntimeErrorType[]
     */
    public function getRuntimeError()
    {
        return $this->runtimeError;
    }

    /**
     * Sets a new runtimeError
     *
     * @param \TNTExpressConnect\Price\XSD\RuntimeErrorType[] $runtimeError
     * @return self
     */
    public function setRuntimeError(array $runtimeError)
    {
        $this->runtimeError = $runtimeError;
        return $this;
    }

    /**
     * Adds as parseError
     *
     * @return self
     * @param \TNTExpressConnect\Price\XSD\ParseErrorType $parseError
     */
    public function addToParseError(\TNTExpressConnect\Price\XSD\ParseErrorType $parseError)
    {
        $this->parseError[] = $parseError;
        return $this;
    }

    /**
     * isset parseError
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParseError($index)
    {
        return isset($this->parseError[$index]);
    }

    /**
     * unset parseError
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParseError($index)
    {
        unset($this->parseError[$index]);
    }

    /**
     * Gets as parseError
     *
     * @return \TNTExpressConnect\Price\XSD\ParseErrorType[]
     */
    public function getParseError()
    {
        return $this->parseError;
    }

    /**
     * Sets a new parseError
     *
     * @param \TNTExpressConnect\Price\XSD\ParseErrorType[] $parseError
     * @return self
     */
    public function setParseError(array $parseError)
    {
        $this->parseError = $parseError;
        return $this;
    }

    /**
     * Adds as brokenRule
     *
     * @return self
     * @param \TNTExpressConnect\Price\XSD\BrokenRuleType $brokenRule
     */
    public function addToBrokenRule(\TNTExpressConnect\Price\XSD\BrokenRuleType $brokenRule)
    {
        $this->brokenRule[] = $brokenRule;
        return $this;
    }

    /**
     * isset brokenRule
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBrokenRule($index)
    {
        return isset($this->brokenRule[$index]);
    }

    /**
     * unset brokenRule
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBrokenRule($index)
    {
        unset($this->brokenRule[$index]);
    }

    /**
     * Gets as brokenRule
     *
     * @return \TNTExpressConnect\Price\XSD\BrokenRuleType[]
     */
    public function getBrokenRule()
    {
        return $this->brokenRule;
    }

    /**
     * Sets a new brokenRule
     *
     * @param \TNTExpressConnect\Price\XSD\BrokenRuleType[] $brokenRule
     * @return self
     */
    public function setBrokenRule(array $brokenRule)
    {
        $this->brokenRule = $brokenRule;
        return $this;
    }


}

