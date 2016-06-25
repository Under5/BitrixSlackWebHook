<?php
/**
 * @author Igor Pomiluyko <pomiluyko@worksolutions.ru>
 * Date: 25.06.16
 */

namespace Slack;

use Bitrix\Main\Web\HttpClient;

class SlackWebHook {
    /** @var  string */
    private $webHookUrl;
    /** @var HttpClient  */
    private $client;

    public function __construct($webHookUrl) {
        $this->webHookUrl = $webHookUrl;
        $this->client = new HttpClient();
    }

    /**
     * @param SlackMessage $message
     *
     * @throws SlackException
     */
    public function send(SlackMessage $message) {
        $this->client->post($this->webHookUrl, $message->toJSON());
        if ($this->client->getStatus() != 200) {
            throw new SlackException($this->client->getResult());
        }
    }
}