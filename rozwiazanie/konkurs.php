<?php 
$nagrody = [
    [1, "Smart Watch LEARNING", "Nowoczesny zegarek z funkcjami edukacyjnymi.", 1230],
    [2, "Słuchawki EAR", "Bezprzewodowe słuchawki z redukcją szumów.", 127],
    [3, "Lustro LED", "Lustro kosmetyczne z podświetleniem LED.", 18],
    [4, "Mata MTB", "Mata edukacyjna dla dzieci.", 32],
    [5, "Słuchawki BIG 6", "Słuchawki z ulepszonym dźwiękiem.", 650]
];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOLONTARIAT SZKOLNY</title>
    <link rel="stylesheet" href="/rozwiazanie/styles.css">
</head>
<body>
    <header>
        <h1>KONKURS - WOLONTARIAT SZKOLNY</h1>
    </header>
    <main>
    <section class="lewy">
        <h3>Konkursowe nagrody</h3>
        <form method="POST"></form>
        <button type="submit">Losuj nowe nagrody</button>
        <table>
            <tr>
                <th>Nr</th>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Wartość</th>
            </tr>
            <?php 
            foreach ($nagrody as $n) {
                echo "<tr>";
                echo "<td>$n[0]</td>";
                echo "<td>$n[1]</td>";
                echo "<td>$n[2]</td>";
                echo "<td>$n[3]</td>";
                echo "</tr>";
            };
            ?>
        </table>
    </section>
    <section class="prawy"></section>
    </main>
    <footer></footer>
</body>
</html>