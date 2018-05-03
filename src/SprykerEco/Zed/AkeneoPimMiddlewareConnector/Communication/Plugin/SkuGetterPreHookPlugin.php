<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\AkeneoPimMiddlewareConnector\Communication\Plugin;

use Generated\Shared\Transfer\ProcessResultTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use SprykerMiddleware\Zed\Process\Dependency\Plugin\Hook\PreProcessorHookPluginInterface;

/**
 * @method \SprykerEco\Zed\AkeneoPimMiddlewareConnector\Communication\AkeneoPimMiddlewareConnectorCommunicationFactory getFactory()
 * @method \SprykerEco\Zed\AkeneoPimMiddlewareConnector\Business\AkeneoPimMiddlewareConnectorFacadeInterface getFacade()
 * @method \SprykerEco\Zed\AkeneoPimMiddlewareConnector\AkeneoPimMiddlewareConnectorConfig getConfig()
 */
class SkuGetterPreHookPlugin extends AbstractPlugin implements PreProcessorHookPluginInterface
{
    public const PLUGIN_NAME = 'SkuGetterPreHookPlugin';

    /**
     * @return string
     */
    public function getName(): string
    {
        return static::PLUGIN_NAME;
    }

    /**
     * @param \Generated\Shared\Transfer\ProcessResultTransfer|null $processResultTransfer
     *
     * @return void
     */
    public function process(?ProcessResultTransfer $processResultTransfer = null): void
    {
        file_put_contents($this->getConfig()->getSkuValuesFilePath(), $this->getFactory()->getProductAbstractRepository()->getSkuValues());
    }
}
