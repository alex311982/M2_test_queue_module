# Magento 2.4 amqp queue sample module

1. Install the module
2. Run `php bin/magento setup:upgrade`
3. Tail the logs: `tail -f var/log/*`
4. Add a message to the queue by visiting site by uri `/queue_test`
5. Process the queue `php bin/magento queue:consumer:start new_customer.created_consumer --max-messages=1`

The logs now should display `[2019-10-21 09:39:43] main.DEBUG: Processed queue message... [] []`

