<?php

//9
$arr = [
    [
        'first_name' => "Joe",
        'last_name' => "joe@hmail.com",
        'age' => "24",
    ],
    [
        'first_name' => "Doe",
        'last_name' => "doe@hmail.com",
        'age' => "25",
    ],
    [
        'first_name' => "Dane",
        'last_name' => "dane@hmail.com",
        'age' => "20",
    ]
];
//

//mysql
//1
//A relational database is a type of database that stores and provides access to data points that are related to one another. Relational databases are based on the relational model, an intuitive, straightforward way of representing data in tables. In a relational database, each row in the table is a record with a unique ID called the key. The columns of the table hold attributes of the data, and each record usually has a value for each attribute, making it easy to establish the relationships among data points.

// 2.
$sql = "SELECT count(id) as total_person,city FROM `person` WHERE city like 'd%' GROUP BY city;";
//3
$sql = "SELECT p.name FROM `person` as p INNER JOIN person_address as pa ON p.id = pa.person_id WHERE p.salary_per_annum > 40000 AND pa.city like '%Manhattan%';";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bondstein Technical Test</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>PHP Section</h1>
        <h4>Ans for number 1#</h4>
        <?php
        $A = "(‘apple’,’orange’,’banana’), ";

        // echo str_replace(",",";",$A);
        $A_trim = rtrim($A, ", ");;
        // echo $A_trim . "<br>";
        echo implode(array($A_trim, ";"));
        ?>
        <h4>Ans for number 2#</h4>
        <p>Constants can't have their value modified once the script starts executing.</p>
        <h4>Ans for number 3#</h4>
        <p>Three ways can pass the variable through the navigation between the pages:</p>

        <ul>
            <li>Put the variable into session in the first page, and get it back from session in the next page</li>
            <li>Put the variable into cookie in the first page, and get it back from the cookie in the next page</li>
            <li>Put the variable into a hidden form field, and get it back from the form in the next page</li>
        </ul>
        <br>
        <h4>Ans for number 4#</h4>
        <?php $amount = 500; ?>
        <p>var amount = <?= $amount ?>;</p>
        <br>
        <h4>Ans for number 5#</h4>
        <p>you can fetch using $_POST , $_GET or $_REQUEST method call.</p>
        <br>
        <h4>Ans for number 6#</h4>
        <p>Simple way to submit a form by using submit button and in form tag give action name and method name like "POST" . When you submit a form, the page data specified in the form information and values is passed to the server via HTTP Request.</p>
        <br>
        <h4>Ans for number 4#</h4>
        <h5>a.Session</h5>
        <p>A PHP session is used to store data on a server rather than the computer of the user. Session identifiers or SID is a unique number which is used to identify every user in a session based environment. The SID is used to link the user with his information on the server like posts, emails etc.</p>
        <h5>b.AJAX</h5>
        <p>AJAX = Asynchronous JavaScript and XML.<br>AJAX allows web pages to be updated asynchronously by exchanging small amounts of data with the server behind the scenes. This means that it is possible to update parts of a web page, without reloading the whole page.</p>
        <h5>c.SQL injection</h5>
        <p>SQL injection is a code injection technique that might destroy your database.Thisis one of the most common web hacking techniques.SQL injection is the placement of malicious code in SQL statements, via web page input.</p>
        <h5>d.Dynamic Website</h5>
        <p>A dynamic website is a site that contains dynamic pages such as templates, contents, scripts etc. A PHP script is executed on the server, and the plain HTML result is sent back to the browser.</p>
        <br>
        <h4>Ans for number 8#</h4>
        <p>$file = 'test.txt';<br>
            $current = file_get_contents($file);,<br>
            $current .= " \n MD ARAFAT UDDIN \n";<br>
            file_put_contents($file, $current);</p>
        <?php

        $file = 'test.txt';
        $current = file_get_contents($file);
        $current .= " \n MD ARAFAT UDDIN \n";
        file_put_contents($file, $current);

        ?>
        <br>
        <h4>Ans for number 9#</h4>
        <table class="table table-hover border">
            <thead>
                <tr>
                    <th>first name</th>
                    <th>last name</th>
                    <th>age</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arr as $key => $value) { ?>
                    <tr>
                        <td><?= $value['first_name'] ?></td>
                        <td><?= $value['last_name'] ?></td>
                        <td><?= $value['age'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h1>MySql</h1>
        <h4>Ans for number 1#</h4>
        <p>A relational database is a type of database that stores and provides access to data points that are related to one another. Relational databases are based on the relational model, an intuitive, straightforward way of representing data in tables. In a relational database, each row in the table is a record with a unique ID called the key. The columns of the table hold attributes of the data, and each record usually has a value for each attribute, making it easy to establish the relationships among data points.</p>
        <br>
        <h4>Ans for number 2#</h4>
        <p>SELECT count(id) as total_person,city FROM `person` WHERE city like 'd%' GROUP BY city;</p>
        <br>
        <h4>Ans for number 3#</h4>
        <p>SELECT p.name FROM `person` as p INNER JOIN person_address as pa ON p.id = pa.person_id WHERE p.salary_per_annum > 40000 AND pa.city like '%Manhattan%';</p>
        <br>
        <h1>Task</h1>
        <span style="color: red;"><b>Please import the db first,which is included in DB folder.<b></span>
        <p>For Task 1 and Task 2 section click the <b><a href="task">LINK</a><b></p>
    </div>
</body>

</html>

<script>
    var amount = <?= $amount ?>;
    console.log(amount);
</script>