<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./exam/design.css">
    <title>Exam 2023-24</title>
</head>
<body>
    <div id="head">
    <h1 id="h1">Web programming </h1>
    <button id="change" onclick="document.getElementById('h1').innerHTML = 'Level 2'">Change</button>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Nme</th>
            <th>Number of words</th>
            <th>Number of letters</th>
        </tr>
        <tr>
            <td>1001</td>
            <td>Ali Mohamed</td>
            <td><?php
echo str_word_count("Ali Mohamed");
?></td>
            <td><?php
echo strlen("Ali Mohamed");
?></td>
                </tr>
        <tr>
            <td>1002</td>
            <td>Mostafa mahmoud</td>
            <td><?php
echo str_word_count("Mostafa mahmoud");
?></td>
            <td><?php
echo strlen("Mostafa mahmoud");
?></td>
        </tr>    
        <tr>
            <td>1003</td>
            <td>Reham Mostafa</td>
            <td><?php
echo str_word_count("Reham Mostafa");
?></td>
            <td><?php
echo strlen("Reham Mostafa");
?></td>
        </tr>    
        <tr>
            <td>1004</td>
            <td>Gana Mohamed</td>
            <td><?php
echo str_word_count("Gana Mohamed");
?></td>
            <td><?php
echo strlen("Gana Mohamed");
?></td>
        </tr>
        <tr>
            <td>1005</td>
            <td>Mona Adel yousry</td>
            <td><?php
echo str_word_count("Mona Adel yousry");
?></td>
            <td><?php
echo strlen("Mona Adel yousry");
?></td>
        </tr>
        <tr>
            <td>1006</td>
            <td>Yara Ahmed Ali Yasser</td>
            <td><?php
echo str_word_count("Yara Ahmed Ali Yasser");
?></td>
            <td><?php
echo strlen("Yara Ahmed Ali Yasser");
?></td>
        </tr>
    </table>
    <br>
<div id="buttons">
    <button onclick="window.alert('congratulations')">Notify</button>
    <a href="www.facebook.com">Follow US</a>
    <button onclick="print()">Print</button>
</div>
</body>
</html>