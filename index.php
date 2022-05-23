<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div class=vBtnContainer><strong>Augmente ta vitesse</strong><br>
        <button class=btnV id="vAdd1">+1</buttion>
            <button class=btnV id="vAdd2">+10</buttion>
                <button class=btnV id="vAdd3">+100</buttion>
                    <button class=btnA id="vAdd4">+1000</buttion>
    </div>
    <br>
    <div class=playableButtonsa><strong>Augmente ton acceleration</strong><br>
        <button class=btnA id="aAdd1">+1</buttion>
            <button class=btnA id="aAdd2">+10</buttion>
                <button class=btnA id="aAdd3">+100</buttion>
                    <button class=btnA id="aAdd4">+1000</buttion>
    </div>

    <hr>
    <div class=counters>
        <div class=displayNb id="V">Vitesse : 1 m/s;</div>
        <div class=displayNb id="A">Acceleration : 0 m/s²</div>
        <div class=displayNb id="M">M</div>
        <br>
        <div class=displayNb id="D"></div>
        <div class=displayNb id="C">% célérité</div>

    </div>

</body>
</html>
<?php
$dom = new DOMDocument('1.0', 'utf-8');



class Boutons
{
    public function __construct($name)
    {
        $button = $dom->createElement('button', 'This is the root element!');
    }
}