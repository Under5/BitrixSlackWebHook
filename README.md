# Requirements

- PHP >= 5.4
- Bitrix

# Using

```php
//simple text message
$slack = new \Slack\SlackWebHook('https://hooks.slack.com/services/T00000000/B00000000/XXXXXXXXXXXXXXXXXXXXXXXX');
$slack->send(new \Slack\SlackMessage('Hello world!'));

//advanced message with custom settings and attachment
$attachment = new \Slack\SlackAttachment('This is an attachement');
$attachment
    ->setColor('#ff0000')
    ->setAuthorName('John Doe')
    ->setAuthorLink('http://johndoe.com');

$message = new \Slack\SlackMessage('World is mine!');
$message
    ->setFrom('My awesome bot Name')
    ->setIconByEmoji(':scream_cat:')
    ->setTo('#random')
    ->addAttachment($attachment);

$slack->send($message);
```

