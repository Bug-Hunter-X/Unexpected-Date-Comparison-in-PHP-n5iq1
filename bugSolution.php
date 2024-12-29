```php
$todayTimestamp = strtotime('today');
$tomorrowTimestamp = strtotime('+1 day');

if ($todayTimestamp == $tomorrowTimestamp) {
    echo "Today is equal to tomorrow!";
} else {
    echo "Today is not equal to tomorrow!";
}
```