<h3>Отправить проверочное письмо</h3>

<p>Введите действительный адрес эл. почты в поле и нажмите кнопку.
<i>Необходимо вводить только существующие в базе эл. адреса.</i></p>
<p>Для повышения уровня доставки Ваших сообщений настоятельно рекомендуется использовать проверочные письма перед основной рассылкой. Тем не менее, подписчики могут использовать различные приложения для просмотра своей почты, соответственно не все могут получить письмо в том виде, в котором оно дойдёт до Вас. Наибольшую гарантию того, что Ваша кампания будет читаема и видна всем подписчикам даёт совмещение текстового и HTML форматов в Ваших рассылках.</p>

<?php

if (SEND_ONE_TESTMAIL) {

?>

<p>На введёный Вами адрес Вы получите одно письмо. Формат этого письма может быть как текстовым, так и HTML, в зависимости от установок в профиле.</p>

<?php
} else {

?>

<p><strong>На введёный Вами адрес Вы получите два письма.</strong> Одно из них будет в <strong>текстовом</strong> формате, другое в <strong>HTML</strong>.</p>

<p>Ваши подписчики получат только одно письмо. Его формат будет зависеть от установок в их профиле.</p>

<?php } ?>


