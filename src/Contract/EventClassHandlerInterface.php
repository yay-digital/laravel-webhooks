<?php namespace Obrignoni\Webhooks\Contract;

interface EventClassHandlerInterface
{

    /**
     * Transform the event name to a class.
     *
     * @return string
     */
    public function getEventClass();

    /**
     * Set parameters for EventClassHandler
     *
     * @param WebhooksInterface $webhooks
     * @param $webhookName
     * @param $eventName
     * @param array $eventMap
     *
     * @return mixed
     */
    public function setParameters(WebhooksInterface $webhooks, $webhookName, $eventName, $eventMap = []);
}