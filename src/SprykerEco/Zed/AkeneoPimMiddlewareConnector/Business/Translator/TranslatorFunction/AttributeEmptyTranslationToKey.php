<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerEco\Zed\AkeneoPimMiddlewareConnector\Business\Translator\TranslatorFunction;

use SprykerMiddleware\Zed\Process\Business\Translator\TranslatorFunction\AbstractTranslatorFunction;
use SprykerMiddleware\Zed\Process\Business\Translator\TranslatorFunction\TranslatorFunctionInterface;

class AttributeEmptyTranslationToKey extends AbstractTranslatorFunction implements TranslatorFunctionInterface
{
    protected const KEY_CODE = 'code';

    /**
     * @param mixed $value
     * @param array $payload
     *
     * @return mixed
     */
    public function translate($value, array $payload)
    {
        if ($value === null) {
            return $payload[static::KEY_CODE];
        }

        return $value;
    }
}
