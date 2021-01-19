<?php
/**
 * Copyright © SampleMessageQueue, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\SampleMessageQueue\Model\Queue;

use Magento\Framework\MessageQueue\ConsumerConfigurationInterface;
use Magento\SampleMessageQueue\Api\Data\SampleDataInterface;
use Psr\Log\LoggerInterface;

class Consumer
{
    /**
     * @var LoggerInterface
     */
    private LoggerInterface $logger;
    /**
     * @var ConsumerConfigurationInterface
     */
    private ConsumerConfigurationInterface $configuration;

    /**
     * Consumer constructor.
     * @param LoggerInterface $logger
     * @param ConsumerConfigurationInterface $configuration
     */
    public function __construct(LoggerInterface $logger, ConsumerConfigurationInterface $configuration)
    {
        $this->logger = $logger;
        $this->configuration = $configuration;
    }

    /**
     * @return void
     */
    public function processMessage(SampleDataInterface $data): void
    {
        var_dump($data);
        $this->logger->debug('SampleMessageQueue: Processed queue message.');
    }
}
